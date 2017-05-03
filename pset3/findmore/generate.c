/**
 * echo $?  perevirka return1 chi 0 v main
 * ./generate 1000 50 | ./find 128
*echo $?

*Вы увидите 1,
 * ./generate 1000 | ./find 42     automatychno vpysue v find iz generate funcs srand 42chisla
 *  ./generate 1000 > numbers.txt 
 * ./find 42 < numbers.txt
 * 
 *  Makefiles
 * all: find generate

*Это означает, что вы можете собрать generate и find, выполнив следующую команду:

*make all
* Наконец, обратите внимание на эти последние строки в Makefile:

*clean:
 *   rm -f *.o a.out core find generate

*Эта запись позволяет вам удалить все файлы, которые заканчиваются на .o или называются core (это мы поясним чуть позднее!), а также запустить программы find или generate просто выполнив строку: 

*make clean

*Если захотите экспериментировать, то вот с чем будьте осторожны: не добавляйте, скажем, *.c в эту последнюю строку Makefile! (почему?) Все строки, которые начинаются со знака # — это просто комментарии.

 * 
 * generate.c
 *
 * Computer Science 50
 * Problem Set 3
 *
 * Generates pseudorandom numbers in [0,LIMIT), one per line.
 *
 * Usage: generate n [s]
 *
 * where n is number of pseudorandom numbers to print
 * and s is an optional seed
 */
 
#define _XOPEN_SOURCE

#include <cs50.h>
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

// constant
#define LIMIT 65536

int main(int argc, string argv[])
{
    // if you unused argument argc = 2 and argc = 3 of command line return false and confirmation message. TODO: comment me
    if (argc != 2 && argc != 3)
    {
        printf("Usage: generate n [s]\n");
        return 1;
    }

    // convert  string of command line second[1] argument  to an integer.TODO: comment me
    int n = atoi(argv[1]);
    

    // if we use command line of third[3] argument  than we can seeds the pseud random generator   and convert  string of command line thirdd[2] argument  to an long integer at the same time. .TODO: comment me
   //else ?
    if (argc == 3)
    {
        srand48((long int) atoi(argv[2]));
    }
    else
    {
        srand48((long int) time(NULL));
    }

    // n is definded how much rondom digits the program/function should return.    TODO: comment me
    //and print it/each of rondom digit n time ??with mult LIMIT??? and convert  to int at the same time
    for (int i = 0; i < n; i++)
    {
        printf("%i\n", (int) (drand48() * LIMIT));
    }

    // success
    return 0;
}