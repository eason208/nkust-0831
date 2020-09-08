<?php
       session_start();
       $username = $_SESSION["username"];
       if ($username==NULL) {
           header("Location: login.php?redir=compare.php");
           exit;
       }
  $tags="<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>產品比較</title>
  </head>
  <body style="background-color:powderblue;">
       <h2>SUV比較</h2>
       <hr>
          <form method='POST' action="compare01.php">
          <select name="v" >
            <option>請選擇車款</option>


          <?php   
             //開啟檔案作為讀取
             $fp = fopen("products.txt","r") or die("Die!");
             // 讀入所有資料，放在$data變數中
             $data= fread($fp, filesize("products.txt"));
             // 關檔
             fclose($fp);
           
             $cars = explode("\n", $data);
             foreach ($cars as $car ) {
                      $temp = explode("," , $car);
                      $model =trim($temp[0]);
                      $vid = trim($temp[1]);
                      echo"<option value=" . $vid . ">" . $model."</option>";
                      echo str_replace("^^^^", $vid, $tags)."<br>"; 
                     
             }
          ?>
        </select>
        <input type="submit" value="確定">
        <?php
                      ?>
</form>
  </body>
  </html>        

