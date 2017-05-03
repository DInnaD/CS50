import cs50

def main():
    while True:
        print("Height: ", end = "")
        height = cs50.get_int()#int(input("How many minutes do you go to plane to have a shawer: "))
        if height >= 0 and height <= 23:
            break
        
    for i in range(height):
        for j in range(height - i - 1):
            print(" ", end = "")
        for k in range(i+2):
            print("#", end = "")
        print("")
            
if __name__ == "__main__":
    main()

# // #include <stdio.h>
# // #include <cs50.h>int main(void)
# // #{
# //     #printf("Height: ");
# //     H = int(input("How many minutes do you go to plane to have a shawer: "))
# //     while H < 0 or H > 23:break
# //     #{
# //         #printf("Height: ");
# //         H= int(input("How many minutes do you go to plane to have a shawer: "))
# //    # }
# //     for i range(H):break   #/*height*/    //(ii=k;ii>=i-1;ii--){
#   # 
#       #for(int i = 0; i<H ; i++)
# //    #{
# //         for j range(H-i-1):break
#           print(" " * H-i-1) #for(int j = 0; j<H-i-1 ; j++) printf(" ");(" " * 1,i, end="")
# //         for j range(i+2):break
#           print("#" * i+2)#for(int j = 0; j<i+2 ; j++) printf("#");
# //         printf("\n")
# //     #}
# // #}


# #include stdio.h
# #include cs50.h

# def int main(void):#//{
 
#  int i, j

#   int k
#  while True:                   #//do
# #                                //{
#   # print("How many metres do you plane to build: ")
#   k = int(input("How many minutes do you go to plane to have a shawer: "))              #// k = get_int();
#   #//ask user int input How many metres do you plane to build?  
#                                     # //}
# if  k < 0 or k > 23:break     #/*while*/
# #while k < 0 or k > 23: break
# # //{
# for i range(i<k):break #/*weight*/
#           for j range(k-i-1):break
#           print(" " * k-i-1) #for(int j = 0; j<H-i-1 ; j++) printf(" ");(" " * 1,i, end="")
# //         for j range(i+2):
    
#     , " ");
#                 # //}
# #//vyvernyt' cod i min 1 smenit' max=k v poss
  
#   #for ii range(k):break   #/*height*/    //(ii=k;ii>=i-1;ii--){
#   # 
#   #print("#" * i-1)#// hashes//f("%s", "#");
#                                   # //}
#  # // # print()// new line//f("\n");
  
#                          #     // }
# # return 0
#                           # //}
 
