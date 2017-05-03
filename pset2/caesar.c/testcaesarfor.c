#include <ctype.h>
#include <string.h>
#include <cs50.h>
#include <stdio.h>
#include <stdlib.h>
void caesarCipher(char*plainText,int key);
int main(void){
    int key;
    printf("print k: \n");
    key = get_int();
    char plainText[101];
    printf("print plainText to encrypt: \n");//ask user
    plainText = get_char();//, sizeof(plainText), stdin);//get user input & store it in planText var
    printf("the ciphered text is: \n");//print the ciphered text
    caesarCipher(plainText, key);
    //system(pause);//connect out if not use wind---------------------------???????????????
}
void caesarCipher(char* plainText,  int key){//key pomen mestami on first
   
    char cypher;
    int cypherValue;
    //sizeof(plainText)
    for(int i=1,len=strlen(plainText);i<len;i++)
    // for (int i = 0; i < argc; i++)
    // {
    //     for (int j = 0, n = strlen(argv[i]); j < n; j++)
    //     {
    //while(plainText[i] != '\0' && strlen(plainText) -1 > i){
    cypherValue = (((int)plainText[i]  - 97) + key) % 26 + 97;
    cypher = (char)(cypherValue);
    printf("%c", cypher); 
    i++;
    }
    printf("\n");
}