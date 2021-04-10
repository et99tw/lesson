<?php
      $filename ="test.xls";
      $contents = "編號 \t 姓名 \t 職務 \t \n";
      $contents = $contents." 1 \t 小明 \t 董事長 \t \n";
      $contents = $contents." 2 \t 小華 \t 總經理 \t \n";
      header('Content-type: application/ms-excel');
      header('Content-Disposition: attachment; filename='.$filename);
      echo $contents;
?>