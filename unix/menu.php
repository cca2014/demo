<html>
  <body>
  <form action="cmd.php" method="post" target="iframe">

    <input type="submit" name="cmd" value="sysinfo" />  &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitstatus" />  &nbsp;&nbsp;
    <input type="submit" name="cmd" value="gitcommit" />  &nbsp;&nbsp;
    <input type="text" name="commit_message" size="20">
    
    <hr/>
  </form>
  <iframe id="iframe" height=5000 width=1024 name="iframe" frameborder=0 src="blank.html">
  </iframe>
  </body>
</html>