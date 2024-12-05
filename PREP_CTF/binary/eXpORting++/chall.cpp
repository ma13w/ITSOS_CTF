#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <time.h>

bool checkTrue(char c);

int main(){
    srand(time(NULL));
    char FLAG[50];
    FLAG[0] = 'f';
    FLAG[1] = 'l';
    FLAG[2] = 'a';
    FLAG[3] = 'g';
    FLAG[4] = '{';
    strcpy(FLAG + 5, "the_");
    strcpy(FLAG + 9, "simpler_");
    strcpy(FLAG + 17, "chall");
    strcpy(FLAG + 22, "enge_");
    strcpy(FLAG + 27, "ever}");
    
    char KEY = (char)(rand() % (122 - 61 + 1) + 61);

    int len = strlen(FLAG);

    for(int i = 0; i < len; i++){
        FLAG[i] ^= KEY;
        if(i % 2 == 0){
            FLAG[i] += 2;
        }
        if(checkTrue(FLAG[i])){
            FLAG[i] -= 2;
        }
    }

    for (int i = 0; i < len; i++) {
        printf("%d, ", FLAG[i]);
    }

    return 0;
}

bool checkTrue(char c){
    if(c >= '_' && c <= 'h'){
        return true;
    }else if(c >= 'i' && c <= '}'){
        return false;
    }else{
        return false;
    }
}