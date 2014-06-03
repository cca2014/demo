<html>

<!-- Examples from W3Shools:  http://www.w3schools.com/php/default.asp -->

<?php
    // Create Connection
    $con=mysqli_connect("127.1.250.1","cca2014","","c9");

    // Check Connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
    // Insert some records
    $r = mysqli_query($con,"insert into hello (msg, who, why) values ('Hello World', 'Admin', 'Testing')" );
    if ( $r )
    {
        echo 'Successfuly Inserted<br/>' ;
    }
    else
    {
        echo mysqli_error($con);
    }
    
    // Query some records
    $result = mysqli_query($con,"select who, msg from hello");

    echo 'rows : ' . $result->num_rows . "<br/>";
    while($row = mysqli_fetch_array($result)) {
        echo $row['who'] . ": " . $row['msg'] . " " ;
        echo "<br>";
    }    
    
    // Close Connection
    mysqli_close($con);
?>

</html>


<!--

unix> cd mysql
unix> mysql-ctl cli

mysql> create table hello ( msg varchar(255), who varchar(10), why varchar(20) ) ;

mysql> describe hello ;
+-------+--------------+------+-----+---------+-------+
| Field | Type         | Null | Key | Default | Extra |
+-------+--------------+------+-----+---------+-------+
| msg   | varchar(255) | YES  |     | NULL    |       |
| who   | varchar(10)  | YES  |     | NULL    |       |
| why   | varchar(20)  | YES  |     | NULL    |       |
+-------+--------------+------+-----+---------+-------+

mysql> insert into hello ( msg, who, why ) values ( 'Hello World 1', 'admin', 'testing' ) ;

mysql> insert into hello ( msg, who, why ) values ( 'Hello World 2', 'admin', 'testing' ) ;

-->