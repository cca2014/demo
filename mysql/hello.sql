
CREATE TABLE users 
( ID MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  username VARCHAR(60), 
  password VARCHAR(60),
  logincnt int,
  unique(username)
) ;


insert into users ( username, password )
values ( 'hellophp', 'hellophp' ) ;