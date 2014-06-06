<html>
  <body>
  <form action="cmd.php" method="post">
    <input type="submit" name="cmd" value="sysinfo" />    &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitlog" />     &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitdiff" />    &nbsp;&nbsp;
    <input type="text" name="diffa" size="10">            &nbsp;&nbsp;
    <input type="text" name="diffb" size="10">            &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitstatus" />  &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitpush" />    &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitcommit" />  &nbsp;&nbsp;
    <input type="text" name="commit_message" size="40">   &nbsp;&nbsp;
    <hr/>
  </form>
  </body>
</html>