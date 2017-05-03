#include <stdio.h>
#include <cs50.h>

int main(void){
 
 int i, j, ii;

  int k;
 do
{
   printf("How many metres do you plane to build: ");
   k = get_int();
   //ask user int input How many metres do you plane to build?  
}
while(k < 0 || k > 23);
  
 for(i=k;i>=1;i--){
  for(j=1;j<=i;j++){
   printf("%s", " ");
  }
//vyvernyt' cod i min 1 smenit' max=k v poss
  
  for(ii=k;ii>=i-1;ii--){
   printf("%s", "#");
  }
   printf("\n");
  
 }
 return 0;
}
 
