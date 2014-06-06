#!/bin/bash
    
echo "$*" > cmd.sql
echo '<pre style="font-family:monospace">'
mysql-ctl cli << EOF 2>&1
use Model ;
source cmd.sql
exit 
EOF
echo "</pre>"

