<?php
include('config.php');
$uploaddir = "../albums/$dirname/";

$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
$maxFileSize = 1024 * 1024 * 20; 
$i = 1;

    $ext = end(explode('.', strtolower($_FILES['uploadfile']['name'])));
    $todaydate = date( 'ymd', time() );
    $fileName = $uploaddir."klu-".$todaydate."-001.".$ext;
    $shortfileName = "klu-".$todaydate."-001.".$ext;
    $oldfileName = $_FILES['uploadfile']['name'];
    
    if (filesize($_FILES['uploadfile']['tmp_name']) > $maxFileSize) {
        return;
    }
    if (!in_array($ext, $allowedExt)) {
        return;
    }
        
    do {
        if (file_exists($fileName)) {
            $i++;
            if ($i <10) {
            $j = "00".$i;
            }
            elseif ($i >9 and $i <100) {
            $j = "0".$i;
            }
            elseif ($i >99 and $i <1000) {
            $j = $i;
            }
            $fileName = $uploaddir."klu-".$todaydate."-".$j.".".$ext;
            $shortfileName = "klu-".$todaydate."-".$j.".".$ext;
        }
        } while (file_exists($fileName));
 
if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $fileName)) { 
  echo "<img src=\"$fileName\" width=\"200\"><br /><b>$oldfileName</b> переименован в <b>$shortfileName</b> и zапхнут в <b><a href=\"showimages.php?dir=$dirname\">$dirname</a></b>"; 
} else {
	echo "error";
}
?>