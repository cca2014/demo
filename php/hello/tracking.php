<?php
echo $_POST['mycookie'] . "<br/><hr/>"
?>

<form   method="POST" 
        action="<?php print htmlspecialchars($_SERVER['PHP_SELF']) ;?>">

    <input type=hidden name=mycookie value="hello there"/>
    <input type="submit" value="Submit" name="submit">

</form>

