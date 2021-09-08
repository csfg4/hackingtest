<?php
if(isset($_FILES['file']))  {
  $file = $_FILES['file'];
  
  // File properties
  $file_name = $file['name'];
  $file_tmp = $file['tmp_name'];
  $file_size = $file['size'];
    
  // Work out the file extension
  $file_ext = expload('.', '$file_name');
  $file_ext = strtolower(end($file_ext));
  
  $disallowed = array('php', 'phtml', 'php4', 'php5');
  
  if(in_array($file_ext, $disallowed))  {
    print_r('This file extension is disallowed');
    exit();
  }
  
  $file_name_new = uniqid('', true) . '.' . $file_ext;
  echo $file_destination = 'https://hackingtest.csfg4.repl.co' . 'uploads/' . $file_name_new;
  
}
