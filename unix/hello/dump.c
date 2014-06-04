

#include <stdio.h>
#include <stdlib.h>
#include "utils.h"
#include "dump.h"


void dump( char *filename, long offset, size_t bufsize )
{
  size_t cnt ;
  char *bufptr=NULL ;
  int done=0 ;
  FILE *ih ;
  int rc ;

  /* open file for read */
  ih = fopen( filename, "r" ) ;
  fseek( ih, offset, SEEK_SET ) ;

  /* allocate buffer and read in bytes */
  bufptr = (char *) malloc( bufsize*sizeof(char) ) ;
  if( bufptr == NULL ) {
    printf( "DUMP: Unable to allocate dump buffer\n" ) ;
    return ;
  }
  memset( bufptr, 0, bufsize ) ;
  cnt = fread( (char*)bufptr, sizeof(char), bufsize, ih ) ;

  hexdump( bufptr, cnt ) ;

  if( bufptr ) { free( bufptr ) ; }

  fclose( ih ) ;
}








