
#include "utils.h"


void strupr( char *s )
{
    char *p;
    p = s ;
    while( *p != 0 )
      {
	*p = toupper( *p ) ;
	p++;
    }
}


void strlwr( char *s )
{
    char *p;
    p = s ;
    while( *p != 0 )
      {
	*p = tolower( *p ) ;
	p++ ;
    }
}



/*********************************************************************/
 
int xatoi( char *str)
{
  int i=0,               /* generic counter */
      base = 16,         /* hex base */
      power = 0,         /* current digit place */
      placeVal=0,        /* current base power */
      digit = 0,         /* current digit value */
      len = strlen(str); /* length of input string */
  double cum = 0;        /* current cumulative value */
 
  /* step backwards in string and convert */
  for(i=len-1;i>=0;i--)
    {
      /* get value of current digit */
      switch( str[i] ) {
        case '0': digit = 0; break;
        case '1': digit = 1; break;
        case '2': digit = 2; break;
        case '3': digit = 3; break;
        case '4': digit = 4; break;
        case '5': digit = 5; break;
        case '6': digit = 6; break;
        case '7': digit = 7; break;
        case '8': digit = 8; break;
        case '9': digit = 9; break;
        case 'a':
        case 'A': digit = 10; break;
        case 'b':
        case 'B': digit = 11; break;
        case 'c':
        case 'C': digit = 12; break;
        case 'd':
        case 'D': digit = 13; break;
        case 'e':
        case 'E': digit = 14; break;
        case 'f':
        case 'F': digit = 15; break;
        default : digit = -1;
      }
 
      if( digit == -1 ) break;  /* break from for loop */
 
      mypow(&placeVal,base,power);
      cum += digit * placeVal;
      power++;
    }
 
    return( (int) cum );
}
 
 
/***************************************************************************/
 
#define CHAR_MASK 0x000000FF

void hexdump( char *buf, unsigned int size )
{
  unsigned int addrc=0;
  unsigned int cnt=0;
  int numRows  = size / 16;
  int numCols  = (size % 16) / 4;
  int numBytes = (size % 16) % 4;
  char *ptr=buf;
  char *bptr=0;
  char line[16+1];
  char binary[ 50 ];
  char addr[6+1];
  unsigned int i,j;
  unsigned int bytesLeft;
  char hex[3] ;

  printf( "\n" ) ;
  
  printf( "+--------+----------------------------------------+------------------+ \n" ) ;
  printf( "| Offset |            BINARY DATA                 |        TEXT      | \n" ) ; 
  printf( "+--------+----------------------------------------+------------------+ \n" ) ;
  
  bytesLeft = numCols * 4 + numBytes;
  for( i=0; i<=numRows; i++ )
  {
    /* Get the char line */
    MEMSET( line, 0, sizeof( line ) );
    if( i==numRows )
      memcpy( line, ptr, bytesLeft );
    else 
      memcpy( line, ptr, 16 );


    /* Save address of current start */
    MEMSET( addr, 0, sizeof( addr ) );
    sprintf(addr, "%6x", addrc);
    for( j=0; j<6; j++)
       if( addr[j] == ' ' ) addr[j] = '0';

    
    /* Generate binary data string */
    MEMSET( binary, 0, sizeof( binary ) );
    bptr = binary ;
    for( j=0; j<16; j++ ) 
      {
	  sprintf( hex, "%2x", ((int)line[j])&CHAR_MASK ) ;
	  if( hex[0] == ' ' ) hex[0] = '0' ;
	  if( hex[1] == ' ' ) hex[0] = '0' ;
	  memcpy(bptr,hex,2) ;
	  bptr+=2;
	  if( ((j+1) % 4) == 0 )
	    {
		*bptr = ' ';
		 bptr++;
	    }
      }
	

    /* Generate char string */
    line[16]=0;
    for( j=0; j<16; j++ )
    {
      if( line[j] == '\n'   ) line[j]='.';
      if( line[j] == '\t'   ) line[j]='.';
      if( !isprint(((int)line[j])&CHAR_MASK) ) line[j]='.';
      if( line[j] == 0      ) line[j]='.';
    }


    /* Print current line */
    printf( "| %-6s |  %s  | %s | \n", addr, binary, line ) ;

    /* Next */
    addrc+= 16;
    if( i == numRows )
      ptr += bytesLeft;
    else 
      ptr+=  16;
    
  }

  
  printf( "|________|________________________________________|__________________| \n" ) ;

  
}
 
 

/***************************************************************************/
void colprint( char *str, int numcols, int pad )
{
  unsigned char  *bptr ;
  int            curcol ;
  unsigned char  out[1024] ;
  unsigned char  *optr ;
  int            len ;
 
#define RESET_OUTPUT()         \
  { MEMSET( out, ' ', 100 ) ;  \
    out[99] = 0 ;              \
    optr = out ;               \
    curcol = 1 ;               \
  }
 
  len = 0 ;
  bptr = (unsigned char *) str ;
  RESET_OUTPUT() ;
 
  while( (unsigned int)*bptr != 0 )
  {
      if( len < pad )
        optr += (pad-len) ;
      if( curcol == numcols )
      {
        printf( "%s\n", out ) ;
        RESET_OUTPUT() ;
      }
      else
      {
        curcol++ ;
      }
      len = 0 ;
      bptr++ ;
  }
 
printf( "%s\n", out ) ;
 
}

