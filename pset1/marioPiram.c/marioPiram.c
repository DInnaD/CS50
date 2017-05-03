#include <stdio.h>
#include <cs50.h>

int main(void){
 int i, j, ii, jj;
 // int ph;
 int k;
 do
{
  printf("How many metres do you plane to build: ");
   k = get_int();
   //ask user int input How many metres do you plane to build?  
}
while(k < 0 && k > 23);
 


 for(i=k;i>=1;i--){
  for(j=1;j<=i;j++){
   printf("%s", " ");
  }

  
  for(ii=k+1;ii>=i;ii--){
   printf("%s", "#");
  }
  
   printf("%s", "  ");
  
  for(jj=k+1;jj>=i;jj--){
   printf("%s", "#");
  }
  
   printf("\n");
  
 }
 return 0;//------------------?????????????????????????why  what doyoumean?



}