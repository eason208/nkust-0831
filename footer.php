<?php 
    //開啟檔案作為讀取
   $fp = fopen("counter.txt", "r") or die ("Unable to open the file");//讀取目前檔案內容，也就是目前的人數
   $counter = fread($fp, filesize("counter.txt"));
   // 關檔，$fp是檔案指標，可自行命名，他是之後存取該檔案的指標
   fclose($fp);

   echo "本網站參觀人次:";
   echo $counter;
   echo "人次!";
   $counter ++;//把目前數字加1
   // 開啟檔案作為寫入
   $fp = fopen("counter.txt", "w") or die ("Unable to open the file");// 把$counter變數的內容，以文字檔的形式儲存到檔案中
   fwrite($fp, $counter);
   //關檔
   fclose($fp);


?>
<br> <center>
<a href="https://info.flagcounter.com/fMOX"><img src="https://s01.flagcounter.com/countxl/fMOX/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_1/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>