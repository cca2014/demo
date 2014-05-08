:
mysql-ctl cli << EOF
use c9 ;
source storedb.sql ;
show tables ;
exit
EOF

