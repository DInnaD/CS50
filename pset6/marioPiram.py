#include <stdio.h>
#include <cs50.h>
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
        print(" ", end = "")
        for l in range(i+2):
            print("#", end = "")
        print("")
         
if __name__ == "__main__":
    main()
       
            
            
            
#           for j range(k-i-1):break
#           print(" " * k-i-1) #for(int j = 0; j<H-i-1 ; j++) printf(" ");(" " * 1,i, end="")
# //         for j range(i+2):break
#           print("#" * i+2, end="")#for(int j = 0; j<i+2 ; j++) printf("#");+print("%s", "  ")
#           for j range(i+2):break
#           print("#" * i+2)
# //         printf("\n")   # 

#  for(i=k;i>=1;i--){
#   for(j=1;j<=i;j++){
#    printf("%s", " ");
#   }

  
#   for(ii=k+1;ii>=i;ii--){
#    printf("%s", "#");
#   }
  
#    printf("%s", "  ");
  
#   for(jj=k+1;jj>=i;jj--){
#    printf("%s", "#");
#   }
  
#    printf("\n");
  
#  }
#  return 0;//------------------?????????????????????????why  what doyoumean?



# }