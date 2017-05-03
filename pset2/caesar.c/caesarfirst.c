#include <ctype.h>
#include <string.h>
#include <cs50.h>
#include <stdio.h>
#include <stdlib.h>

//define my caesarCipher 
void caesarCipher(char*plainText,int key);
int main(void){
    int key;
    printf("print k: \n");
    key = get_int();
    char plainText[101];
    printf("print plainText to encrypt: \n");//ask user
    fgets(plainText, sizeof(plainText), stdin);//get user input & store it in planText var
    printf("the ciphered text is: \n");//print the ciphered text
    caesarCipher(plainText, key);
    //system(pause);//connect out if not use wind---------------------------???????????????
}
void caesarCipher(char* plainText,  int key){//key pomen mestami on first
    int i = 0;
    char cypher;
    int cypherValue;
    
    while(plainText[i] != '\0' && strlen(plainText) -1 > i){
    cypherValue = ((int)plainText[i]  - 97 + key) % 26 + 97;
    cypher = (char)(cypherValue);
    printf("%c", cypher); 
    i++;
    }
    printf("\n");
}

// int main(int argc, string argv[])
// {

//   if (argc != 2)
//     { printf("print the key: \n");// key is the second command line argument 
//     string str = GetString();
//     string output;
//     //int key = atoi(argv[1]);//преобразование строки в int
//     //char plantext[10];
//     printf("print the name: \n");// key is the 3d command line argument 
//     string name = GetString();
//     for(int i=1,len=strlen(name);i<len;i++){//-----------------} // loop for the length of string for each characters
//         if ((isalpha(name[i])&&islower(name[i])||(isalpha(name[i])&&isupper(name[i])) // if isaph char
//           int charIsInt = (int) name[i];//convert to int
//           int letter = 'A';//substract off the value of either A or a
          
//           int result = (letter + key)%26;// add on the key & return ciphered letters as a number
//         //   0<27==64<91||0<27==96<123
          
//         //   int result =((letter+key) mod 26)*newletter;c
    
//           output = (char) charAsInt(result[i]);// convert back to char
//           printf("\nCalculating '%c' + %d...\n", letter, key);//-------------?
//     //int result = (letter + key);
//     // add inti output string    
//     printf("The ASCII value of %c is %d.\n\n", result, result);
   

//     return 0;
//     }else{
//         printf("print the key next time \n"); 
//         return 1;
//         }
    
 
//   //------------------------------------------------------------------------ 
   
    

   
    
    
// //if(argc[pi]<=argc[2]||k==NULL){printf("Your key:");k=get_string();return 1;}else{;return 0;}
// //without any command-line arguments or 
// //with more than one >argc[2] command-line argument, your program 
// //should print an error message of your choice (with printf) and return from main a value of 1 (which tends to signify an error) immediately.


// /*
// if([0]&&[prespase] == myFlow){//----------------------------prespace;   po slovy flag a po frase if else
// //print the first initial
// printf("%c", toupper(name[0],[predspace]));
// }else{
// //print the first initial
// printf("%c", toupper(name[0],[predspace]));
// int myFbasaLl(long long);


// //flag
// //for(i=0;i<name.lenght[];i++){
// if(myFup==name[0] && myFup==name[predspace])

// printf("%c\n", example);
// false ;
 
// else//(myFlow)


// int toupper(int c);
// char example = 'd';
// example = toupper(example);
// printf("%c\n", example);
// true ;

// int isalpha(int c);
// if (isalpha('a') && isalpha('B'))
// {
//     printf("Both characters are alphabetic!\n");
// }
// int isupper(int c);
// if (isupper('A') && isupper('B'))
// {
//     printf("Both characters are uppercase alphabetic!\n");
// }

// int islower(int c);
// if (islower('a') && islower('b'))
// {
//     printf("Both characters are lowercase alphabetic!\n");
// }
// // print upper letters wuthout space
// //string n = argv[1]; dostup k arg
// //print the user’s initials (i.e., the first letter of each word in their name) with no spaces or periods, followed by a newline (\n).
// printf("You need %i bottles of water! You must be more savefully!\n", k*12);
// return 0;}*/