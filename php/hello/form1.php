<html>
<body>

<?php
if ( $_POST['name'] == "" )
{
?>

    <form action="form1.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

<?php
}
else
{
?>

    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?>

<?php
}
?>

</body>
</html>