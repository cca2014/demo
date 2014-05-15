:
mysql-ctl cli << EOF
use c9 ;
source $1 ;
show tables ;
exit
EOF

