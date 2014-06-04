
#include <stdio.h>

int main( void )
{
    int c; // ASCII character

    printf( "%s", "Enter an ASCII character code ( EOF to end ): " ); 
    
    // while user does not enter EOF
    while(scanf("%d",&c)!=EOF)
    {
        // check if character code is valid
        if ( c >= 0 && c <= 255 ) {
            printf( "The corresponding character is '%c'\n", c );
        } // end if
        else {
            puts( "Invalid character code" );
        } // end else

        printf( "%s", "\nEnter an ASCII character code ( EOF to end ): " );
    } // end while
} //endmain