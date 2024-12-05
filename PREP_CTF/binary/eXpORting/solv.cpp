#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <time.h>


int main(){
    
    char arr[100] = {59, 49, 60, 58, 38, 45, 60, 49, 49, 56, 41, 46, 2, 60, 47, 56, 2, 60, 42, 56, 46, 50, 48, 56, 32};

    int len = sizeof(arr) / sizeof(arr[0]);
    printf("len: %d\n", len);

    for(int KEY = 61; KEY <= 122; KEY++){
        char decoded[len + 1];
        for(int i = 0; i < len; i++){
            decoded[i] = arr[i] ^ (char)KEY;    
        }
        decoded[len] = '\0';

        printf("Tentativo con KEY=%d: %s\n", KEY, decoded);
    }

    return 0;
}
