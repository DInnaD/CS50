
#include <stdbool.h>

#include <ctype.h>    

#include "dictionary.h"

#include <string.h>

#include <stdio.h>
#include <stdlib.h>



unsigned int count = 0;     // gloabal counter

typedef struct node {         // data structure 
    bool end_word;
    struct node *children[27];
    } node;

int
charNumber(char c);   // function prototype
void freeNode(node *currentNode);
//void recurs(node*);
//void countt(node*);
node root = {false,{NULL}};

/*
 * Returns true if word is in dictionary else false.
 */

bool
check(const char *word)
{
    node *ptr = &root;
    for (int i=0;i<strlen(word);i++)
    {
        if (ptr->children[charNumber(word[i])] == NULL)  // check is very efficient in a trie structure!
            return false;                               // check time is only related to the length of 
        ptr = ptr->children[charNumber(word[i])];       // the word.
    }
    if (ptr->end_word)  // notice here you have to check if it is actually end of a word in the dictionary.
        return true;
    else
        return false;
}


/*
 * Loads dictionary into memory.  Returns true if successful else false.
 */

bool
load(const char *dictionary)
{
    FILE *fp = fopen(dictionary,"r");
    if (fp == NULL)
        return false;
    while (!feof(fp))
    {
        char word[LENGTH+1] = {};
        fscanf(fp,"%s\n",word); // have to use "%s\n" instead of "%s", or the count will be wrong, don't know why.
        count++;    
        node *ptr = &root;
        for (int i=0;i<strlen(word);i++)
        {
            if (ptr->children[charNumber(word[i])] == NULL)  // if it's NULL, malloc a new node,point to it.
            {
                node *new = malloc(sizeof(node));   
                *new = (node) {false,{NULL}};       // initiallization
                ptr->children[charNumber(word[i])] = new;
                ptr = new;
            }
            else
            {
                ptr = ptr->children[charNumber(word[i])];  // if it's not, just point to next node.
            }
         }
         ptr->end_word = true;  // if the word ends, flag "end_word" to true.
    }
fclose(fp);          // you don't want to forget file. 
return true;
}


/*
 * caculate a number for the character
 */

int
charNumber(char c)
{
    int num;
    if (c == '\'')
        return 26;
    else if(c >= 'A' && c <= 'Z')
        c += 32;
    num = c - 'a';
    return num;
}



/*
 * Returns number of words in dictionary if loaded else 0 if not yet loaded.
 */

unsigned int
size(void)
{
    if (count)
        return count;
     else
        return 0;
    //return countt(root);
}
//  unsigned int countt(node * predroot)
// {
// unsigned int count = 0;    
// if(predroot!=NULL)
//  {    
//  for (int i=0;i<27;i++)  //if(arg<7);f(arg10000 1 print); 1234567//must be rost +1 i arg<27/!=NULL granicy//for (int i=0;i< dictSize;i++) dictSize++;
//  count += countt(predroot->children[i]);
//  if(predroot->end_word) count++;
//  }
//  return count;
//  }
// bool unload(void)
// {
//   recurs(&root);//f(1)
//   return true;
// }    
// void recurs(node *predroot)// f(int arg)//void b(node *size)
// {
//   for (int i=0;i<27;i++)  //if(arg<7);f(arg10000 1 print); 1234567//must be rost +1 i arg<27/!=NULL granicy//for (int i=0;i< dictSize;i++) dictSize++;
//   if (predroot->children[i] != NULL) recurs(predroot->children[i]); free(predroot);//if (size->is_word == true) b(size->is_word); free(size);
// }
bool
unload(void)
{
    for (int i=0;i<27;i++)            // can't just call freeNode(&root),this will cause free(&root),but
    {
        if (root.children[i] != NULL)  // root is not in heap(cause it's not allocated by malloc)
            freeNode(root.children[i]);
    }
    return true;         // can't figure out when to return false...
}

void freeNode(node *currentNode)
{
    for (int i=0;i<27;i++)
    {
        if (currentNode->children[i] != NULL)   // free node recursively, the method is elegant!
            freeNode(currentNode->children[i]); // first free all the children,then free itself.
    }
    free(currentNode);
}