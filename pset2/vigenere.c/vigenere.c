// #include <ctype.h>
// #include <string.h>
// #include <cs50.h>
// #include <stdio.h>
// #include <stdlib.h>
// //define my caesarCipher 
// void caesarCipher(char* plainText,char* kplainText);
// int main(int argc, char* argv[])
// {
    
//   if (argc != 2)
//     {
//     printf("Usage: ./vigenere\n"); 
//     return 1;
//     }
//     for (int i = 0, n = strlen(argv[1]); i < n ;i++){
//     argv[1][i] = tolower(argv[1][i]);}
   
//     char kplainText[101];
//     for (int j=0;j<101;j++){
//     kplainText[j] = argv[1][j];}
    
//     char plainText[101];   
//     printf("plaintext: ");//ask user
//     fgets(plainText, sizeof(plainText), stdin);//get user input & store it in planText var++++++++
//     printf("ciphertext: ");//print the ciphered text
//     caesarCipher(plainText,kplainText);
//     //system(pause);//connect out if not use wind---------------------------???????????????
//     return 0;
// }
// void caesarCipher(char* plainText,  char* kplainText){

//     char cipher;
//     int cipherValue;
//     int constvig = 1;
//     int i = 0;
//     int j = 0;
//   //int m =  strlen(kplainText);
//   // for(int i = 0, j = 0, n = strlen(plainText),m =  strlen(kplainText); n > i;i++){
//     while(plainText[i] != '\0' && strlen(plainText) > i) {
//             if((isalpha(plainText[i])&& islower(plainText[i]))&&(isalpha(kplainText[i]))){
//              cipherValue = (((int)(plainText[i])  - 97) + ((int)(kplainText[j%strlen(kplainText)])-97))%26+97 + constvig;
//              cipher = (char)(cipherValue);printf("%c", cipher);
//              i++;j++;}else    
//              if((isalpha(plainText[i])&&isupper(plainText[i]))&&(isalpha(kplainText[i]))){ 
//               cipherValue = (((int)(plainText[i])  - 65) + ((int)(kplainText[j%strlen(kplainText)])-97))%26+65 + constvig;
//               cipher = (char)(cipherValue);printf("%c", cipher);
//                 i++;j++;}else 
//                  if(!isalpha(plainText[i]) ){ //if not isaplha low or up   
//                  printf("%c", plainText[i]);i++;j++;
//                 }
      
//     }
    
//}
#include <ctype.h>
#include <string.h>
#include <cs50.h>
#include <stdio.h>
#include <stdlib.h>
//define my caesarCipher 
void caesarCipher(char* plainText,char* kplainText);
int main(int argc, char* argv[])
{
    
  if (argc != 2)
    {
    printf("Usage: ./vigenere\n"); 
    return 1;
    }
    for (int i = 0, n = strlen(argv[1]); i < n ;i++){
    argv[1][i] = tolower(argv[1][i]);}
   
    char kplainText[101];
    for (int j=0;j<101;j++){
    kplainText[j] = argv[1][j];}
    
    char plainText[101];   
    printf("plaintext: ");//ask user
    fgets(plainText, sizeof(plainText), stdin);//get user input & store it in planText var++++++++
    printf("ciphertext: ");//print the ciphered text
    caesarCipher(plainText,kplainText);
    //system(pause);//connect out if not use wind---------------------------???????????????
    return 0;
}
void caesarCipher(char* plainText,  char* kplainText){

    for(int i = 0, j = 0, n = strlen(plainText),m =  strlen(kplainText); n > i;i++){
         if((isalpha(plainText[i])&& islower(plainText[i]))&&(isalpha(kplainText[i]))){
         
                    printf("%c", (((plainText[i]-97)+((kplainText[j]-65)))%26+97));
                    j++;
                    j = j % m;}
            else if((isalpha(plainText[i])&&isupper(plainText[i]))&&(isalpha(kplainText[i]))){ 
                    printf("%c", (((plainText[i]-97)+((kplainText[j]-97)))%26+97));
                    j++;
                    j = j % m;}
                else printf("%c", plainText[i]);
    }                

    
}