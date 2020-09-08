<?php
       session_start();
       $username = $_SESSION["username"];
       if ($username==NULL) {
  	       header("Location: login.php?redir=compare.php");
  	       exit;
        }
        
        $taget = $_POST["taget"];
        if ($taget==NULL) {
           $taget_model="炙愛";
           $taget_vid = "uaymV2BBD4o";
        }
        else{
           $taget = explode(",", $taget);
           $taget_model= $taget[0];
           $taget_vid= $taget[1];

        }
        $tags="<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
?>
<!DOCTYPE html>
<html>
  <head>
	  <meta charset="utf-8">
	  <title>產品比較</title>
  </head>
  <body>
       <h2>SUV比較</h2>
       <hr>
          <?php   
             //開啟檔案作為讀取
             $fp = fopen("products.txt","r") or die("Die!");
             // 讀入所有資料，放在$data變數中
             $data= fread($fp, filesize("products.txt"));
             // 關檔
             fclose($fp);
             
             $cars = explode("\n", $data);
             echo "<form method=POST action='compare.php'>";
             echo "<select name=taget>";
             
             foreach ($cars as $car ) {
               $temp = explode("," , $car);
               $model =trim($temp[0]);
               $vid = trim($temp[1]);
               $send_taget =$model . "," . $vid;
               echo "<option value='$send_taget' >";  //value為送出
               echo $model;
               echo "</option>";
             }
            
             echo "</select>";
             echo "<input type=submit >";
             echo "</form>";
             echo "<h3> $taget_model </h3>";
             echo str_replace("^^^^", $taget_vid, $tags)."<br>";




         /*    foreach ($cars as $car ) {
                      $temp = explode("," , $car);
                      $model =trim($temp[0]);
                      $vid = trim($temp[1]);
                      echo $model. "<br>";
                      echo str_replace("^^^^", $vid, $tags)."<br>";            	
               }
             */
          ?>
  </body>
  </html>        

