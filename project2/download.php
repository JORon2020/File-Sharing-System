<?php
if (isset($_GET['data_file'])) {
    $data_file=$_GET["data_file"];
    $connect=mysqli_connect('localhost','root','','project');
    $query  = "SELECT * FROM data_info where id = 1 ";
    $result = mysqli_query($connect,$query) or die(mysql_error($connect));
    $data   = mysqli_fetch_assoc($result);
    print_r($data);

  function readfile_chunked($filename,$retbytes=true) {
    $chunksize = 3*(1024*1024); // how many bytes per chunk the user wishes to read
    $buffer = '';
    $cnt =0;
    $handle = fopen($filename, 'rb');
    if ($handle === false) {
       return false;
    }
    while (!feof($handle)) {
       $buffer = fread($handle, $chunksize);
       echo $buffer;
       if ($retbytes) {
          $cnt += strlen($buffer);
       }
    }
    $status = fclose($handle);
    if ($retbytes && $status) {
       return $cnt; // return number of bytes delivered like readfile() does.
    }
    return $status;
  }
  
  $file = "C:/xampp/htdocs/project2/assets/uploads/".$data_file;
  if(file_exists($file)) {
      header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename="'.basename($file).'"' );
      header('Expires: 0');
      header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
      header('Pragma: public');
      header('Content-Length: ' . filesize($file));
      ob_clean();
      flush();
      readfile_chunked($file,$retbytes=true);
      exit;
  }else{
    print_r('file with name '.$data_file.' does not exist');
  }
   
}else{
    echo 'This is the second else block'; 
  }
?>