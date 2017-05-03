#include <stdio.h>
#include <cs50.h>

int main(void){
 
  int k;
 do
{
  //ask user int input How many minutes do you go to plane to have a shawer?  
printf("How many minutes do you go to plane to have a shawer: ");
   k = get_int();
}
while(k < 0 || k > 23);
 
printf("You need %i bottles of water! You must be more savefully!\n", k*12);
return 0;
}