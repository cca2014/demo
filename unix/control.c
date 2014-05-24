 #include <stdio.h>
 #define MISSILE 1
 #define LASER 2
 #define ROCKET 3

 void fire1( int weapon ) ;
 void fire2( int weapon ) ;
 
 void main()
 {
     // while statement  
     int test = 10;
     while( test > 0 )
     {
       printf( "(while) test = %d\n", test );
       test = test - 2;
     }
     
     // do while
     test = 10;
     do 
     {
       printf( "(do while) test = %d\n", test );
       test = test - 2;
     }
     while( test > 0 );
     
     // for
     for( test = 10; test > 0; test = test - 2 )
     {
       printf( "(for) test = %d\n", test );
     }
     
     // if-then-else
    fire1( LASER ) ;
    
    // switch
    fire2( ROCKET ) ;
     
 }
 
void fire1( int weapon )
{
     if( weapon == MISSILE )
     {
       printf( "(if-then-else) Fired missile!\n" );
     }
     else
     {
       if( weapon == LASER )
       {
         printf( "(if-then-else) Fired laser!\n" );
       }
       else
       {
         printf( "(if-then-else) Unknown weapon!\n");
       }
     }
 }
 
void fire2( int weapon )
{
     switch( weapon )
     {
     case ROCKET:
     case MISSILE:
       printf( "(switch) Fired missile!\n" );
       break;
     case LASER:
       printf( "(switch) Fired laser!\n" );
       break;
     default:
       printf( "(switch) Unknown weapon!\n");
       break;
     }
}
 
 