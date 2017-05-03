from flask import Flask, redirect, render_template, request, url_for
import os
import helpers
from analyzer import Analyzer
import sys
import nltk

app = Flask(__name__)

@app.route("/")
def index():
    return render_template("index.html")
#В application покопировать куски кода из smile
# чтобы найти файлы словарей и с ними вызвать Analyzer.
@app.route("/search")
def search():

    # validate screen_name
    screen_name = request.args.get("screen_name", "").lstrip("@")
    if not screen_name:# if missing redirect to index  
        return redirect(url_for("index"))
        
         # absolute paths to lists
    positives = os.path.join(sys.path[0], "positive-words.txt")
    negatives = os.path.join(sys.path[0], "negative-words.txt")

    # instantiate analyzer
    analyzer = Analyzer(positives, negatives)
    
    # get screen_name's most recent 100 tweets
    tweets = helpers.get_user_timeline(screen_name, 100)

    # get screen_name's tweets
    #tweets = helpers.get_user_timeline(screen_name)#
    if None:#redirect toindex if None 
          return redirect(url_for("index")) 
    # TODO
    positive, negative, neutral = 0.0, 0.0, 0.0
    
    #В переменной tweets у тебя будет пачка твитов, 
    #разбить их на отдельные твиты, потом на отдельные слова 
    #и каждое слово прогнать через Analyzer, 
    #посчитать позитив/негатив каждого твита 
    #и после количество всех плохих/хороших/никаких.
    # analyze each tweet & increase corresponding sentimen count
    totaltweets =0
    for tweet in tweets:
        score = 0
        totaltweets += 1
        sentence = nltk.word_tokenize(tweet)
        for word in sentence:
            score += analyzer.analyze(word.lower()) 
        
        score = analyzer.analyze(tweet)
        if score > 0.0:
            positive += 1
        elif score < 0.0:
            negative += 1
        else:
            neutral += 1
            
    positive = positive /  totaltweets*100
    negative = negative/ totaltweets*100
    neutral = neutral/ totaltweets*100

    # generate chart
    chart = helpers.chart(positive, negative, neutral)

    # render results
    return render_template("search.html", chart=chart, screen_name=screen_name)
   

# Complete the implementation of search in application.py in such a way that the function

#     queries Twitter’s API for a user’s most recent 100 tweets,

#     classifies each tweet as positive, negative, or neutral,

#     generates a chart that accurately depicts those sentiments as percentages.

# If a user has tweeted fewer than 100 times, classify as many tweets as exist.

    
    

    # # generate chart
    # chart = helpers.chart(positive, negative, neutral)

    # # render results
    # return render_template("search.html", chart=chart, screen_name=screen_name)
