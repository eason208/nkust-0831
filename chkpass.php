<?php
    session_start();
    $username= $_POST["username"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $redir = $_POST["redir"];

    if ($password=="1234") {
    	//成功登入要處理的程式碼
        //SESSION就像好像是在共同公布欄KEY ==> value的方式加註資料
        //SESSION["key:username"] <== value: $username(來自表單)
    	$_SESSION["username"] = $username;
    	$_SESSION["email"] = $email;
        // $redir是來自lotto.php?redir=xxx.php的參數
        
        if ($redir!=NULL) {
           header("Location: $redir");
        }else{

    	header("Location: index.php");
        }
    	exit;

    	

    }
    else{
    	//失敗登入要處理的程式碼
    	echo "您的密碼輸入錯誤!<br>";
    	echo "<a href='login.php'>回上一頁重新載入</a>";

    }

?>