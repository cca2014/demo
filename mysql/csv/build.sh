
mysql-ctl cli << END
  drop database Model ;
  source Model.sql
  show tables ;
  exit 
END