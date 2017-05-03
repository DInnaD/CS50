#include <stdio.h>
#include <cs50.h>
#include <math.h>

int main(void){


 int q = 25;
 int d = 10;
 int n = 5;
 int p = 1;
 
 int is;
 int p1;
 int sum = 0;
 
 float s; 
  do
  {
  printf("O hai! How much change is owed? ");
  s = get_float();
     if(s<0||s==0){printf("How much change is owed? "); s = get_float();}
  }
 while( sum > 0.01 && sum < 100); 

 
 is = roundf(s*100);//s---ss
//is = (int)roundf(ss*100);
  /*  int round(float s)
       
    {
        int is;
        if(fs<0) is = (fs-0.5);
        else     is = (fs+0.5);
        return is;
    }*/
  
 int q1 = is / q;
 int q2 = is - q1 * q;
     
 int d1 = q2 / d;
 int d2 = q2 - d1 * d;
 
 int n1 = d2 / n;
 int n2 = d2 - n1 * n;
 
 p1 = n2 / p;
 sum = q1 + d1 + n1 + p1;
 printf("%i\n", sum);

 return 0;//??????????????//for what?????????
}
//return 0;//if else
 
 
 