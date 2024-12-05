#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <time.h>


int main(){
    
    char arr[100] = {33, 21, 26, 30, 4, 13, 19, 28, 40, 10, 18, 20, 11, 21, 30, 11, 40, 26, 19, 24, 23, 21, 30, 23, 32, 28, 40, 28, 17, 28, 13, 4};

    int len = sizeof(arr) / sizeof(arr[0]);
    printf("len: %d\n", len);

    for(int KEY = 61; KEY <= 122; KEY++){
        char decoded[len + 1];
        for(int i = 0; i < len; i++){
            char temp = arr[i];
            if(i % 2 == 0){
                temp -= 2;
            }
            if(temp >= '_' && temp <= 'h'){
                temp += 2;
            }
            decoded[i] = temp ^ (char)KEY;
        }
        decoded[len] = '\0';

        printf("Tentativo con KEY=%d: %s\n", KEY, decoded);
    }

    return 0;
}
