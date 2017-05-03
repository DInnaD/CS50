#include <stdio.h>
#include <cs50.h>
#include <math.h>
//bool int MyFsumsum(long long c);
int main(void){
//bool int MyFsumsum(long long c){     
  long long c;
  long long d;
  int di;
  int sumznep = 0;
  int sumzpar = 0;
  int sumsum = 0;
  do{
    printf("Number: ");   
    c= get_long_long();
    if((sumsum == 0 && c/10000000000000 == 34) || (sumsum == 0 && c/10000000000000 == 37)){printf("AMEX\n");}
      else if((sumsum == 0) && (c/100000000000000>50 && c/100000000000000<56)){printf("MASTERCARD\n");}
      else if(sumsum == 0 && (c/1000000000000000 == 4||c/1000000000000 == 4)){printf("VISA\n");}
      else{  printf("INVALID!\n"); }
  }
  while(sumsum!=(sumzpar + sumznep)%10);
  //int myFbasaLl(long long c){
  int i = 0;
  for(i=0;i<16;i++){
     d = c % 10;
     di = d;
     c/= 10;
     //zahodymo do kozhnogo elementy cherez 2  
     for(int znep=0;znep<16;znep+= 2){ 
        sumznep += di;
     }//for1
     //zahodymo do kozhnogo elementy cherez 2 + sumuemo yogo ++ kozhnu summu perevirym na >10
     for(int zpar=1;zpar<16;zpar+= 2){
     int k2a,k2b,podsumzpar;
     if(di*2>9){
       k2a = di%10;k2b = di/10;podsumzpar = k2a + k2b;}
       else{podsumzpar = di*2;}
       sumzpar += podsumzpar;
     }//for2
  sumsum = (sumzpar + sumznep)%10;//bool MyF without%10
//   if (sumsum % 10 == 0) return true;
//     else return false;
  }//for obol
  
//return sumsum;   
//}//myF()
return 0;
}//void