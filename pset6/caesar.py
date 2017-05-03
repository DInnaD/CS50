import cs50
import sys

def main():
    if len(sys.argv) != 2:
        print("You should provide cmd line arguments!")
        exit(1)
    #if sys.argv[1].isalpha() == False:
        #print("You should provide valid key!")
        #exit(1)    
    
    kplainText = int(sys.argv[1])
    cipher = []
    plainText = cs50.get_string()
    for symbol in plainText:
        if symbol.isalpha():
            cipher.append(caesar(symbol, kplainText))
        else:
            cipher.append(symbol)
                
    print("".join(cipher))
    exit(0)

def caesar(char, kplainText):
    if char.isupper():
        return chr(((ord(char) - 65 + kplainText) % 26) + 65)
    else:
        return chr(((ord(char) - 97 + kplainText) % 26) + 97)
        
if __name__ == "__main__":
    main()

# #include <ctype.h>
# #include <string.h>
# #include <cs50.h>
# #include <stdio.h>
# #include <stdlib.h>
# //define my caesarCipher 
# void caesarCipher(char* plainText,int key);
# def int main(int argc, char* argv[]):  #     //{//????????????????/char*
    
#   if argc is not 2:
#   # {
#     print("Usage: ./caesar k\n")
#     #return 1
#     #}
#     #//printf(" %s\n", argv[1]);    
#     int key = atoi(sys.argv[1])
#     char plainText[101]   
#     print("plaintext: ")#;//ask user
#     fgets(plainText, sizeof(plainText), stdin);//get user input & store it in planText var++++++++
#     print("ciphertext: ")#;//print the ciphered text
#     caesarCipher(plainText,key)
#     //system(pause);//connect out if not use wind---------------------------???????????????
#  #   return 0;
# #}
# void caesarCipher(char* plainText,  int key){//key pomen mestami on first  plaiiiiiiiiiin
#     int i = 0
#     char cipher
#     int cipherValue
    
#     while plainText[i] != '\0' and strlen(plainText) -1 > i :break#//  for(int i=1,len=strlen(name);i<len;i++)
#           if isalpha(plainText[i]) and islower(plainText[i]):
#              cipherValue = ((int)((plainText[i])  - 97 + key) % 26 + 97)
#              cipher = (char)(cipherValue);printf("%c", cipher)
#              i++
#              else:    
#              if isalpha(plainText[i]) and isupper(plainText[i]):# // if isaph char
#               cipherValue = ((int)(plainText[i]  - 65 + key) % 26 + 65)
#               cipher = (char)(cipherValue)
#               print("%c", cipher)
#               i++
#               else: #//if not isaplha low or up   
             
#                  print("%c", plainText[i])
#                  i++
        
      
    
#     print("\n")
#}