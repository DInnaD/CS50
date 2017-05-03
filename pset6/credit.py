
import cs50

def main():
    cardNumber = cs50.get_int()
# checks that cardnumber is a positive integer
    if cardNumber > 0: 
        categorize(cardNumber)

def categorize(cardNumber):
    if checksum(cardNumber) % 10 == 0:
        if (len(str(cardNumber)) == 15) and ((((cardNumber> 340000000000000) and (cardNumber < 350000000000000)) or ((cardNumber > 370000000000000) and (cardNumber < 380000000000000)))):
            print("AMEX")
        elif len(str(cardNumber)) == 16 and (cardNumber> 5100000000000000 and cardNumber < 5600000000000000):
            print("MASTERCARD")
        elif (len(str(cardNumber)) == 13 or len(str(cardNumber)) == 16) and (4000000000000000 <= cardNumber and cardNumber <= 4999999999999999):
            print('VISA')
    else:
        print('INVALID')
        

def checksum(cardNumber): 
    #initializes sum varibale378282246310005
    sum = 0
    sumsum = 0
    sumsump = 0
    sumsumnp = 0
    newsumfirst = 0
    newsumlast = 0
    
# converts int cardNumber to str
    cardNumber = str(cardNumber)
# reverses the string so that we can access second to last digits
    cardNumber = cardNumber[::-1]
# every other digit starting from second (odd index) (multiply by 2)
# every other digit starting from first (even index) (just add)
    for digit_index in range (len(cardNumber)):
        if digit_index % 2 == 0:
            sum += int(cardNumber[digit_index])
            sumsump = sum
        else:
            sum += int(cardNumber[digit_index]) * 2
            if sum*2>9:
                newsumfirst = sum%10
                newsumlast = sum/10
                sumsumnp = newsumfirst + newsumlast
            else:
                podsumzpar = sum*2
                sumsump += podsumzpar
     
    sumsum = sumsump + sumsumnp          
    return sumsum
    
if __name__ == "__main__":
main()

# #include <stdio.h>
# #include <cs50.h>
# #include <math.h>
# //bool int MyFsumsum(long long c);
# def int main(void):  #//{
# //bool int MyFsumsum(long long c){     
#   long long c
#   long long d
#   int di
#   int sumznep = None
#   int sumzpar = None
#   int sumsum = None
#   while True:#      do{
# #
#     #print("Number: ")   //   #    print (" " * 1,i, end="")//spaces//("%s", " ");
#     c = long long(input("Number: "))#//c= get_long_long();
#     if sumsum == 0 and c/10000000000000 == 34) or (sumsum == 0 && c/10000000000000 == 37):
#     print("AMEX\n")#//printf("AMEX\n")
#       elif(sumsum == 0) and (c/100000000000000>50 and c/100000000000000<56):
#       print("MASTERCARD\n")
#       elif sumsum == 0 and (c/1000000000000000 == 4 or c/1000000000000 == 4):
#       print("VISA\n")
#       else:  print("INVALID!\n")
#  # }
#   if sumsum != (sumzpar + sumznep)%10: break #while sumsum!=(sumzpar + sumznep)%10;
#  # //int myFbasaLl(long long c){
#   int i = 0
#   for i in range(16):break#for(i=0;i<16;i++){
#      d = c % 10
#      di = d
#      c/= 10
#      #//zahodymo do kozhnogo elementy cherez 2  
#      int znep = 0
#      for znep in range(16):break#for(int znep=0;znep<16;znep+= 2){ ????????????znep+= 2
#         sumznep += di
#      #}//for1
#      #//zahodymo do kozhnogo elementy cherez 2 + sumuemo yogo ++ kozhnu summu perevirym na >10
#      for znep in range(16):break#for(int zpar=1;zpar<16;zpar+= 2){
#      int k2a,k2b,podsumzpar
#      if di*2>9:
#       k2a = di%10;k2b = di/10
#       podsumzpar = k2a + k2b
#       else: podsumzpar = di*2
#       sumzpar += podsumzpar
#      #}//for2
#   sumsum = (sumzpar + sumznep)%10;#//bool MyF without%10
# #//   if (sumsum % 10 == 0) return true;
# #//     else return false;
# #  }//for obol
  
# #//return sumsum;   
# #//}//myF()
# return 0;
# #}//void
