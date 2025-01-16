<?php
function get_contents() {
  $data file_get_contents("php://input");
  // Tempat Simpennya
  $filename=date("d-m-Y");
  if (file_put_contents($filename, $data)) {
    
  }
  
}
get_contents();
?>








