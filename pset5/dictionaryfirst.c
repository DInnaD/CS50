    
    
#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
#include <string.h>
#include <ctype.h>
#include <stdbool.h>

#include "dictionary.h"

typedef struct node {         // data structure 
    bool is_word;
    struct node *children[27];
    } node;
    
void a(node *predroot);    

int index;

unsigned int dictSize = 0;

node root = {false,{NULL}};//instead memset


bool is_word;
/**

 * Returns true if word is in dictionary else false.
 * 
 */
bool check(const char *word)
{
    node *cursor = &root;
    
    for (int i = 0, l = strlen(word); i < l; i++)
    {
       
    int c = 0;
    if (c == '\'')
        return 26;
    else if(c >= 'A' && c <= 'Z')
        c += 32; // word_low[i] = tolower(word[i]);
        index = c - 'a';
        return index;
        if (cursor->children[index] == NULL)
        {
            cursor = cursor->children[index] = calloc(1, sizeof(node));
            return false;
        }
        
        cursor = cursor->children[index];return false;
    }
    
    //return (curr_node->is_word) ? true : false;
         
return (cursor->is_word) ? true : false;
// if (cursor->is_word) return true;
            
// return true;

}

/**
 * Loads dictionary into memory. Returns true if successful else false.
 */
bool load(const char *dictionary)
{
     
    FILE *fp = fopen(dictionary, "r");    
    if (fp == NULL)
    {
        printf("Could not open %s.\n", dictionary);
        return false;
    }
    
 node cursor = {false,{NULL}};
     while (!feof(fp))
    {
        char word[LENGTH+1] = {};
        fscanf(fp,"%s\n",word); // have to use "%s\n" instead of "%s", or the count will be wrong, don't know why.
        dictSize++;    
        node *cursor = &root;
        for (int i=0;i<strlen(word);i++)
        {
             if (cursor->children[index] == NULL)  // if it's NULL, malloc a new node,point to it.
            {
                node *new = malloc(sizeof(node));   
                *new = (node) {false,{NULL}};       // initiallization
                cursor->children[index] = new;
                cursor = new;
            }
            else
            {
                cursor = cursor->children[index];  // if it's not, just point to next node.
            }
         }
         cursor->is_word = true;  // if the word ends, flag "end_word" to true.
    }
fclose(fp);          // you don't want to forget file. 
return true;
    // TODO
    //return false;
}