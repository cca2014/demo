:
mysql-ctl cli << EOF
drop database Model ;
source Model.sql ;
show tables ;
exit
EOF

