import cs50

def main():
    while True:
        print("O hai! How much change is owed?")
        amount = cs50.get_float()
        if amount >= 0:
            break
    
    number_of_coins = 0
    cents = int(round(amount * 100))
    
    number_of_coins += cents // 25
    cents %= 25
    
    number_of_coins += cents // 10
    cents %= 10
    
    number_of_coins += cents // 5
    cents %= 5
    
    number_of_coins += cents
    
    print("{}".format(number_of_coins))
    
if __name__ == "__main__":
    main()

# #include <stdio.h>
# #include <cs50.h>
# #include <math.h>

# def int main(void):#//{


#  int q = 25
#  int d = 10
#  int n = 5
#  int p = 1
 
#  int is
#  int p1
#  int sum = 0
 
#  float s
#   while True:#//do
# #//{
#   #print("O hai! How much change is owed? ")
#   s = float(input("O hai! How much change is owed? "))/#/s = get_float();
#      if s<0 or s==0:// s>= 0:
            #break
#        //  s = float(input(("How much change is owed? "))#; s = get_float();}
# # // }
#  if sum > 0.01 and sum < 100: break      #//while( sum > 0.01 && sum < 100); 
#  #
 
#  is = roundf(s*100)#//s---ss
# #//is = (int)roundf(ss*100);
#   #/*  int round(float s)
       
#   # {
#         int is
#         if fs<0:
#             is = (fs-0.5)
#         else:
#             is = (fs+0.5)
#         return is
#  #   }*/
  
#  int q1 = is / q
#  int q2 = is - q1 * q
     
#  int d1 = q2 / d
#  int d2 = q2 - d1 * d
 
#  int n1 = d2 / n
#  int n2 = d2 - n1 * n
 
#  p1 = n2 / p
#  sum = q1 + d1 + n1 + p1
#  print("%i\n", sum)#// print (" " * 1,i, end="")//spaces//("%s", " ")

# # return 0#//??????????????//for what?????????
# #}
# #//return 0;//if else
 
 
 