#include <ctype.h>
#include <string.h>
#include <cs50.h>
#include <stdio.h>
#include <stdlib.h>
//define my caesarCipher 
void caesarCipher(char* plainText,int key);
int main(int argc, char* argv[]){//????????????????/char*
    
  if (argc != 2)
    {
    printf("Usage: ./caesar k\n"); 
    return 1;
    }
    //printf(" %s\n", argv[1]);    
    int key = atoi(argv[1]);
    char plainText[101];   
    printf("plaintext: ");//ask user
    fgets(plainText, sizeof(plainText), stdin);//get user input & store it in planText var++++++++
    printf("ciphertext: ");//print the ciphered text
    caesarCipher(plainText,key);
    //system(pause);//connect out if not use wind---------------------------???????????????
    return 0;
}
void caesarCipher(char* plainText,  int key){//key pomen mestami on first  plaiiiiiiiiiin
    int i = 0;
    char cipher;
    int cipherValue;
    
    while(plainText[i] != '\0' && strlen(plainText) -1 > i){//  for(int i=1,len=strlen(name);i<len;i++)
          if(isalpha(plainText[i])&& islower(plainText[i])){
             cipherValue = ((int)((plainText[i])  - 97 + key) % 26 + 97);
             cipher = (char)(cipherValue);printf("%c", cipher);
             i++;}else    
             if(isalpha(plainText[i])&&isupper(plainText[i])){ // if isaph char
               cipherValue = ((int)(plainText[i]  - 65 + key) % 26 + 65);
               cipher = (char)(cipherValue);printf("%c", cipher);
               i++;}else{ //if not isaplha low or up   
             
                 printf("%c", plainText[i]);
                 i++;}
        
      
    }
    printf("\n");
}