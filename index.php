<?php
       session_start();
       $username = $_SESSION["username"];
       $email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>謝呈易的0831</title>
  </head>
  <body style="background-color:powderblue;">
       <h2>謝呈易的0831練習網站</h2>
       <hr>
          <?php
           include "menu.php";          
          ?>

       <hr>  
       <?php
             if($username!=NULL){ //!= 為不等於
               echo "您的帳號:".$username . "<br>" ."電子郵件:".
               $email . "<br>";
             }
             else{
              echo "歡迎親愛的訪客，請登入以檢視更多訊息!<br>";
             }
             echo "<hr>";
             // 以下引入頁尾的程式碼
             include "footer.php";

      ?> 

  </body>
</html>

