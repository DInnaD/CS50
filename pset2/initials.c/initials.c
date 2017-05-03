#include <ctype.h>
#include <stdio.h>
#include <cs50.h>
#include <string.h>
#include <stdlib.h>

int main(void){
    
string name = NULL;
do{
     printf("Enter your full name, please: ");
     name = get_string();
      if (isspace(name[0])){
        printf("Enter your full name, please: ");
        name = get_string();
          }else if(isspace(name[0])&&isspace(name[0+1])){
              printf("Enter your full name, please: ");
              name = get_string();
          } 
}
while(name == NULL);
//printf first [0] element
 //if_checking low_up letters

        if (isalpha(name[0])){
        printf("%c", toupper(name[0]));
        }else{
             printf("%c", name[0]); 
             }
int i = 0;
int len;
for(i=1,len=strlen(name);i<len;i++){
    if (isspace(name[i])&&isalpha(name[i+1])) 
    { 
    printf("%c", toupper(name[i+1]));
    }

}//for
return 0;
}
