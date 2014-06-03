#ifndef UTILS_H
#define UTILS_H


/* PROTOTYPES */
extern void hexdump( char *buf, unsigned int size ) ;
extern int  xatoi( char *hexStr );
extern void strupr( char *s ) ;
extern void strlwr( char *s ) ;  
extern void colprint( char *str, int numcols, int pad ) ;

/* MACROS */
#define MEMSET(to,val,from) memset((char*)to,val,from) 
#define MEMSET2( x, y ) memset( (char*)x, y, sizeof(x) )
#define MEMCPY( x, y ) memcpy( (char*)x, y, strlen(y) )

#define mypow(val,base,exp)              \
{ int e = (exp);                         \
  *(val) = 1;                            \
  for(;e>0;*(val)=*(val)*(base),e--);    \
}
#define INPUT( a, b, c ) { printf( a ); scanf( b, c ); }
#define GETS(str)  { gets(str); }


#endif
