/**
 * helpers.c
 *
 * Computer Science 50  debug50 ./program <args>
 * Problem Set 3
 *
 * Helper functions for Problem Set 3.
 */
       
#include <cs50.h>

#include "helpers.h"

/**
 * Returns true if value is in array of n values, else false.
 */
   //int value = int needle;
   //int values = (int) (drand48() * LIMIT);
   //int n = atoi(argv[1]);
bool search(int value, int values[], int n)

{
    // TODO: implement a searching algorithm check ./generate 1000 50 | ./find 127  i 128
     // of line search
      
 bool b=false;
    for(int i=0;i<n;i++)//c99
    
    if (values[i] == !value && n < 0) return false;
    for(int i=0;i<n;i++)//c99
    
    if (values[i] == value && n > 0) return true;
return b;
}

/**
 * Sorts array of n values.
 */
void sort(int values[], int n)
//----------------------------int n1  = sizeof(values);
   //if(value==values входит во множество чисел, выведенных функцией generate
    // TODO: implement an O(n^2) sorting algorithm
    //   for i=0 to n-2
    //   min = i
    //   for j = i + 1 to n-1
    //   if values[j]<values[min]
    //   min = j;
    //   if min != i
    //   swap values[min] and values[i]
{
    
     int N=0;
       for(int j=n;j>0 && values[j-1]>values[j];j--){
       //values[j] = N --;
       N= values[j]= values[j-1];values[j-1]=N;}
//   int N = n*n-1;
//     for(int i=1;i<n;i++){ 
//         for(int j=0;j<n;j++)
//       values[i][j] = N --;
//         if (n%2==0) {N= values[n-1][n-2]= values[n-1][n-3];values[n-1][n-3]=N}
  //
         
// 	    for(int j=i;j>0 && values[j-1]>values[j];j--){ // пока j>0 и элемент j-1 > j, x-массив int
// 			swap(values[j-1],values[j]);}        // меняем местами элементы j и j-1

   // return true;
    

    //return false;
}


