#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <time.h>


int main(){
    srand(time(NULL));
    char FLAG[50];
    FLAG[0] = 'f';
    FLAG[1] = 'l';
    FLAG[2] = 'a';
    FLAG[3] = 'g';
    FLAG[4] = '{';
    strcpy(FLAG + 5, "pallets_are_awesome}");
    
    char KEY = (char)(rand() % (122 - 61 + 1) + 61);

    int len = strlen(FLAG);

    for(int i = 0; i < len; i++){
        FLAG[i] ^= KEY;
    }

    for (int i = 0; i < len; i++) {
        printf("%d, ", FLAG[i]);
    }

    return 0;
}
