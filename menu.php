<?php   
   session_start();
   $username = $_SESSION["username"];
   $link_homepage = "<a href='index.php'>首頁</a>. "; 
   $link_login= "<a href='login.php'>登入</a>. ";   
   $link_lotto="<a href='lotto.php'>大樂透預測</a>. ";
   $link_logout=  "<a href='logout.php'>登出</a>. ";
   $link_compare="<a href='compare.php'>產品比較</a>. ";
       echo $link_homepage;
       if ($username==NULL){
        //如果是訪客，執行這邊
       	echo $link_login ;
       }
       else {
       	echo $link_lotto;
        echo $link_compare;
       	echo $link_logout;
       }
?>       


