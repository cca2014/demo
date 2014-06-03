#include <stdio.h>
#include <stdlib.h>
#include "utils.h"
#include "dump.h"

/******************************************************************
HEXDUMP UTILITY

Command:	

	hexdump <file> <offset> <size>

	<file>		- a file path specification
	<offset>	- an offset into the file
	<size>		- number of bytes to dump starting from offset


Description:

	This utility display the contents of a file in hex and ascii.
	An example is provided below.



Example:

? dump /usr/oracle/dbs/testredo1.log 0 100

+--------+----------------------------------------+------------------+ 
| Offset |            BINARY DATA                 |        TEXT      | 
+--------+----------------------------------------+------------------+ 
| 000000 |  00000000 00000200 00000064 5a5b5c5d   | ...........dZ[\] | 
| 000010 |  000081a0 00000000 00000000 00000000   | ................ | 
| 000020 |  00000000 00000000 00000000 00000000   | ................ | 
| 000030 |  00000000 00000000 00000000 00000000   | ................ | 
| 000040 |  00000000 00000000 00000000 00000000   | ................ | 
| 000050 |  00000000 00000000 00000000 00000000   | ................ | 
| 000060 |  00000000 00000000 00000000 00000000   | ................ | 
|________|________________________________________|__________________| 
? 

***********************************************************************/


void main( int argc, char **argv)
{
  long    offset ;
  size_t  bufsize ;
  char   *filename ;

  /* verify number of args passed */
  if( argc != 4 )
    {
      printf( "Usage: %s <file> <offset> <num bytes>\n", argv[0] ) ;
      exit(0) ;
    }

  filename = argv[1] ;
  offset = atol( argv[2] ) ;
  bufsize = atoi( argv[3] ) ;

  dump( filename, offset, bufsize ) ;

} 

  
