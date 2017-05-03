import nltk

class Analyzer():
    """Implements sentiment analysis."""

    def __init__(self, positives, negatives):
        # absolute paths to lists #запомнить пути к словарям???
      
       # positives = os.path.join(sys.path[0], "positive-words.txt")#
       # negatives = os.path.join(sys.path[0], "negative-words.txt")#

        self.positives_set = set()#объявить пару пустых листов
        file = open(positives, "r")#по очереди для каждого словаря открыть файл
        for line in file:#считать строку за строкой
            if line.startswith(';') == False:#and line(None)#если строка не комментарий и не пустая то добавить в соответствующий лист
                self.positives_set.add(line.rstrip("\n"))#добавить в соответствующий лист
        file.close()#close
        
        self.negatives_set = set()
        file = open(negatives, "r")
        for line in file:
            if line.startswith(';') == False:
                self.negatives_set.add(line.rstrip("\n"))
        file.close()

    def analyze(self, text):
        """Analyze text for sentiment, returning its score."""
        tokenizer = nltk.tokenize.TweetTokenizer()
        tokens = tokenizer.tokenize(text)
        sum = 0
        for word in tokens:
            if word.lower() in self.positives_set:#скормленное функции слово искать по листам,
                sum += 1
            elif word.lower() in self.negatives_set:
                sum -= 1
            else:
                continue#если в хороших то вернуть 1, если в плохих то -1, ну или 0 если нигде.
        
        return sum

# import nltk

# class Analyzer():
#     """Implements sentiment analysis."""

#     def __init__(self, positives, negatives):
#         """Initialize Analyzer."""
#         self.negatives = []#self.negatives_set = set()
#         self.positives = []#self.positives_set = set()
#         with open("negative-words.txt") as negative:#file = open(negatives, "r")
#             for line in negative:#for line in file:
#                 if not line.startswith((";", " ")):#if line.startswith(';') == False:
#                     continue#self.negatives_set.add(line.rstrip("\n"))
#                 else:
#                     self.negatives.extend(line.split())#file.close()

#         with open("positive-words.txt") as positive:#file = open(positives, "r")
#             for line in positive:
#                 if not line.startswith((";", " ")):
#                     continue
#                 else:
#                     self.positives.extend(line.split())
        


#       # TODO


#     def analyze(self, text):
#         """Analyze text for sentiment, returning its score."""
#         # pos_count = 1
#         # neg_count = -1
#         # overwize = 0 
#         # sum_conts = pos_count + neg_count   

#         score = 0           
#         tokenizer = nltk.tokenize.TweetTokenizer()
#         tokens = tokenizer.tokenize(text)
#         score = 0

#         for token in tokens:# inshe
#             #token.lower()

#             if token.lower() in self.positives:
#                 score += 1
#             elif token.lower() in self.negatives:
#                 score -= 1
#             else:
#                 continue

#         return score

#     "I" is in neither positive-words.txt nor negative-words.txt,

#     "love" is in positive-words.txt, and

#     "you" is in neither positive-words.txt nor negative-words.txt.

# Suffice it to say, more sophisticated algorithms exist, but we’ll keep things simple!
#analizyr.py        
        # list,dict,set
        # self.positives,self.negatives
        
        # str.strip  whitspace
        # str.startswith  dont include the comments
        
        # tokens=self.tokenizer.tokenize(text)
        
        #  with open("negative-words.txt") as line:
        #     for line in inline:
        # iteration
        # FILE (file) = as lines
        # for line inline
        # iterate over tokens str.lower
        # return score

        # TODO
        # return 0




# https://www.cs.uic.edu/~liub/FBS/sentiment-analysis.html

# export API_KEY=YoKqQOidZpIcvlAtgHjL7RxmN
# ./smiler  instruction main

# flask run


# tweets todo
# analyzer.py todo
# aplication.py todo
# helpers.py https://twython.readthedocs.io/en/latest/   https://dev.twitter.com/overview/api

#  among whose features is a tokenizer that you can use to split a tweet (which is maximally a 140-character str object) into a list of words (i.e., shorter str objects).
# Meanwhile, analyze takes one argument in addition to self: a str to be analyzed for sentiment. Though that function is (temporarily) hardcoded to return 0 no matter what.
# positive-words.txt, negative-words.txt

# tweets todo

# templates/index.html



# templates/search.html

# Open up templates/search.html. Notice how this template renders a user’s screen name as well as that pie chart.
# templates/layout.html

# Open up templates/layout.html. In here is a layout on which index.html and search.html depend. It leverages Bootstrap to override browsers' default aesthetics.
# requirements.txt

# Open up requirements.txt (without changing it, though you can later if you’d like). This file specifies the libraries, one per line, on which all of this functionality depends.
# http://getbootstrap.com/*******************

# Tokenize and tag some text:  http://www.nltk.org/  http://www.nltk.org/api/nltk.tokenize.html

# >>> import nltk
# >>> sentence = """At eight o'clock on Thursday morning
# ... Arthur didn't feel very good."""
# >>> tokens = nltk.word_tokenize(sentence)
# >>> tokens
# ['At', 'eight', "o'clock", 'on', 'Thursday', 'morning',
# 'Arthur', 'did', "n't", 'feel', 'very', 'good', '.']
# >>> tagged = nltk.pos_tag(tokens)
# >>> tagged[0:6]
# [('At', 'IN'), ('eight', 'CD'), ("o'clock", 'JJ'), ('on', 'IN'),
# ('Thursday', 'NNP'), ('morning', 'NN')]

# Identify named entities:

# >>> entities = nltk.chunk.ne_chunk(tagged)
# >>> entities
# Tree('S', [('At', 'IN'), ('eight', 'CD'), ("o'clock", 'JJ'),
#           ('on', 'IN'), ('Thursday', 'NNP'), ('morning', 'NN'),
#       Tree('PERSON', [('Arthur', 'NNP')]),
#           ('did', 'VBD'), ("n't", 'RB'), ('feel', 'VB'),
#           ('very', 'RB'), ('good', 'JJ'), ('.', '.')])

# Display a parse tree:

# >>> from nltk.corpus import treebank
# >>> t = treebank.parsed_sents('wsj_0001.mrg')[0]
# >>> t.draw()

