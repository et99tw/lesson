<?php
      $filename ="test.xls";
      $contents = "�s�� \t �m�W \t ¾�� \t \n";
      $contents = $contents." 1 \t �p�� \t ���ƪ� \t \n";
      $contents = $contents." 2 \t �p�� \t �`�g�z \t \n";
      header('Content-type: application/ms-excel');
      header('Content-Disposition: attachment; filename='.$filename);
      echo $contents;
?>