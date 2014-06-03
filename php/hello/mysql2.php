<html>


<?php

    // Create Connection
    $con=mysqli_connect("127.1.250.1","cca2014","","c9");

    // Check Connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br/>";
    }
    else {
        echo "Connection Successful!<br/>" ;
    }
    
    // execute query
    $result = mysqli_query($con,"select host, user from mysql.user");
	echo $result->num_rows . " records fetch. <br/>" ;

    // show rows
    echo 'rows : ' . $result->num_rows . '<br/>';
    while($row = mysqli_fetch_array($result)) {
        echo $row['host'] . ": " . $row['user'] ;
        echo "<br/>";
    }    

    // close connection
    mysqli_close($con);

?>

</html>
