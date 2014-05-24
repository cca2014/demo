
<HTML>

<HEAD>
<style>
    td { text-align: left; }
</style>
</HEAD>
<BODY>

<?php
  error_reporting(0);

  $search=$_POST['search'] ;

  if ( $search != ""  )
  {

      // Create Connection
      $con=mysqli_connect("127.1.250.1","cca2014","","Model");

      // Check Connection
      if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error() . "<br/>" ;
      }

    // Query some records
    $query = " select CustomerID, CustomerName from Customers where CustomerName like '$search%' " ;
    echo 'query: ' . $query . '<br/>' ;
    $result = mysqli_query( $con, $query);
    $num = $result->num_rows ;
    echo 'rows : ' . $num . '<br/>' ;

    // Display records
    while($row = mysqli_fetch_array($result)) {
        echo $row['CustomerID'] . ": " . $row['CustomerName'] . " " ;
        echo "<br>";
    }    

    // Close Connection
    mysqli_close($con);
	  

  }
  else
  {
?>

<form method="POST" action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ; ?>">
<table border="1" width="25%" id="table1" style="border-width: 0px" cellspacing="5">
<tr>
  <td style="border-style: none; border-width: medium">
      <b><font face="Arial Narrow">Search</font></b>
  </td>
  <td style="border-style: none; border-width: medium">
    <input type="text" name="search" size="34">
  </td>
  <td style="border-style: none; border-width: medium">
    <input type="submit" value="Submit" name="submit">
  </td>   
</tr>
</table>
</form>

<?php
  }
?>

</BODY>
</HTML>




<!--

mysql> desc Customers ;
+-----------------+--------------+------+-----+---------+----------------+
| Field           | Type         | Null | Key | Default | Extra          |
+-----------------+--------------+------+-----+---------+----------------+
| CustomerID      | int(11)      | NO   | PRI | NULL    | auto_increment |
| CustomerName    | varchar(255) | YES  |     | NULL    |                |
| CustomerContact | varchar(255) | YES  |     | NULL    |                |
| Address         | varchar(500) | YES  |     | NULL    |                |
| City            | varchar(255) | YES  |     | NULL    |                |
| PostalCode      | varchar(45)  | YES  |     | NULL    |                |
| Country         | varchar(45)  | YES  |     | NULL    |                |
+-----------------+--------------+------+-----+---------+----------------+

mysql> select * from Customers where CustomerName like 'To%' ;
+------------+---------------------+----------------------+------------------+------+------------+---------+
| CustomerID | CustomerName        | CustomerContact      | Address          | City | PostalCode | Country |
+------------+---------------------+----------------------+------------------+------+------------+---------+
|         79 | Toms Spezialit      | Karin Josephs        | Luisenstr. 48    | M    | 44087      | Germany |
|         80 | Tortuga Restaurante | Miguel Angel Paolino | Avda. Azteca 123 | M    | 5033       | Mexico  |
+------------+---------------------+----------------------+------------------+------+------------+---------+

-->