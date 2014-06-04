/* cmdline.c */

   #include <stdio.h>
   #include <stdlib.h>
   #include <string.h>

   void main( int argc, char *argv[] )
   {
     // print each arg on separate line
     int ctr ;
     for( ctr=0; ctr < argc; ctr++ )
     {
       printf( "[%d] %s\n", ctr, argv[ctr] );
     }

     // print args as one string
    char *cmdstring;
    cmdstring = malloc(1024);
    cmdstring[0] = '\0';
    int i ;
    for (i=1; i<argc; i++) {
        strcat(cmdstring, argv[i]);
        if (argc > i+1)
            strcat(cmdstring, " ");
    }
    printf("cmdstring: %s\n", cmdstring);

   }