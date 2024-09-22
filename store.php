<?php
  
  $myfile = fopen("locate.txt", "w");
$txt = "lat: " . $_GET["lat"];
fwrite($myfile, $txt);
fclose($myfile);

  
  ?>
