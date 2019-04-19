<?php
include('config.php');
$uploaddir = "../albums/$dirname/";

$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
$maxFileSize = 2 * 1024 * 1024;
$todaydate = date( 'ymd', time() );
$i = 1;
//если получен файл
if (isset($_FILES)) {
    //проверяем размер и тип файла
    $ext = end(explode('.', strtolower($_FILES['Filedata']['name'])));
    if (!in_array($ext, $allowedExt)) {
        return;
    }
    if ($maxFileSize < $_FILES['Filedata']['size']) {
        return;
    }
    if (is_uploaded_file($_FILES['Filedata']['tmp_name'])) {
        $fileName = $uploaddir."klu-".$todaydate."-001.".$ext;
        $shortfileName = "klu-".$todaydate."-001.".$ext;
        $oldfileName = $_FILES['uploadfile']['name'];
        
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
        
        move_uploaded_file($_FILES['Filedata']['tmp_name'], $fileName);
        echo "<img src=\"$fileName\" width=\"200\"><br /><b>$oldfileName</b> переименован в <b>$shortfileName</b> и zапхнут в <b><a href=\"showimages.php?dir=$dirname\">$dirname</a></b><br /><br />";
    }
}
?>