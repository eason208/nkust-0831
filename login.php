<?php
   $redir= $_GET["redir"];
?>

<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>謝呈易的0831</title>
  </head>
  <body style="background-color:powderblue;">
       <h2>登入我的網站</h2>
       <hr>
          <?php
           include "menu.php";          
          ?>
       <hr>   
       <form method="POST" action="chkpass.php">
       	<table width=400 border=0>
       	
        <input type="hidden" name="redir" value=<?php echo $redir;?>></td></tr>

        <tr><td>帳號: </td><td><input type="text" name="username"></td></tr>

       	<tr><td>電子郵件:</td><td> <input type="text" name="email"></td></tr>

       	<tr><td>密碼:</td><td> <input type="password" name="password"></td></tr>

       	<tr><td align=center colspan=2><input type="submit" value="登入"></td></tr>
         </table>
       </form>

  </body>
</html>

<?php

?>