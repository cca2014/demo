#include <stdio.h>
#include <string.h>
#include <ctype.h>

void main()
{
    char s[1024];
     while (gets(s))
     {
        int i ;
        for ( i=0; i<strlen(s); i++ )
        {
            if ( isascii(s[i]) )
                printf( "%c", s[i] ) ;
            else
                printf( "_" ) ;
        }
        printf( "\n" ) ;
     }
}