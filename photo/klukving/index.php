<HTML>
<HEAD>
<TITLE>Lyubov Alazankina Klukvography - store</TITLE>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://klukvography.com/favicon.png" type="image/x-icon">

<style TYPE="text/css">
		div.main {font-size: 10px; letter-spacing: px; font-family: Verdana, Arial; text-decoration: none; color: #808080;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</HEAD>

<body>
<a href="http://klukvography.com/" border="0" ><IMG SRC="logo.gif" alt="store" border="0"></a>
<CENTER>
<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
<TR>
<TD  HEIGHT="352" VALIGN="TOP">

<p ALIGN="left">
<br>
<br>
<br>
<br>
</p>

<P ALIGN="CENTER">

<?

function cmp ($a, $b) {
$tmp[0]=strtoupper($a);
$tmp[1]=strtoupper($b);
sort($tmp);
return (strcmp(strtoupper($tmp[1]) , strtoupper($b))) ? 1 : -1;
}


function getDirByLetter ($dirName) {
        static $result_array=array();
        $d = dir($dirName);
                while($entry = $d->read()) {
                                if ($entry != "." && $entry != "..") {
                                              if (is_dir($dirName."/".$entry)){
                                            array_push($result_array,$entry);
                                        }
                                }
                        }
$d->close();

usort($result_array, "cmp");
return $result_array;
}



$AllTheDirectories = getDirByLetter("./../albums");
$array_quotient=count($AllTheDirectories) / 1;
$array_quotient=ceil($array_quotient);
$Column = 0;
$FirstCol = "no";

include ('config.php');

      if ($doupload == "1") {
 echo "<a href=\"uploads.php\"><font size=\"4\"><b>z</b>аколбасить <b>k</b>люквографии<br>по <b>о</b>дной</font></a><br><br>
       <a href=\"uploads-mass.php\"><font size=\"4\"><b>z</b>аколбасить <b>k</b>люквографии<br>по <b>м</b>ного (только <b>PC</b>)</font></a><br><br><br><br>";
                          }
      if ($doupload !== "1") {
                          }

echo "<table  border=\"0\" cellspacing=\"0\" cellpadding=\"1\">
<td  valign=\"top\" nowrap>";

                          
echo "                          
<font face=\"Verdana, Arial, Helvetica, sans-serif\" size=\"4\">
<font size=\"4\"><b>a</b>lbums:</font><br>";

for ($i=0;$i<count($AllTheDirectories);$i++) {
        if($Column == $array_quotient) {
                $Column = 0;
                if ($FirstCol = "yes") {
                        echo "</td>";
                        }
                echo "</font><td  valign=\"top\" nowrap>";
                $FirstCol = "yes";
        }
        $Column++;

         echo "<font size=\"4\">-</font><a href=showimages.php?dir=".rawurlencode($AllTheDirectories[$i]).">".str_replace(".", " ",$AllTheDirectories[$i])."</a><br>";

  }



echo "</td></table>";
                        

// подсчет

$dir        = "../albums";  # Папка

function manlix_get_all_dirs_and_files($dir)
{
        global        $manlix_get_all_dirs_and_files,
                $manlix_get_all_dirs_and_files_count_dirs,
                $manlix_get_all_dirs_and_files_count_files,
                $manlix_get_all_dirs_and_files_count_files_size_of_files;

        if        ($dir == "")        {$manlix_get_all_dirs_and_files = "Вы не указали директорию";                        }
        else if        (!file_exists($dir))        {$manlix_get_all_dirs_and_files = "Заданая Вами директория не существует";                }
        else if        (!is_dir($dir))        {$manlix_get_all_dirs_and_files = "Заданый Вами путь должен быть директорией";        }

        else
        {
                if (!isset($manlix_get_all_dirs_and_files_count_dirs))        {$manlix_get_all_dirs_and_files_count_dirs        = "0";}
                if (!isset($manlix_get_all_dirs_and_files_count_files))        {$manlix_get_all_dirs_and_files_count_files        = "0";}
                if (!isset($manlix_get_all_dirs_and_files_size_of_files))        {$manlix_get_all_dirs_and_files_size_of_files        = "0";}

                if ($our_dir = opendir($dir))
                {
                        while (($file = readdir($our_dir)) !== false)
                        {
                                if ($file != "." and $file != "..")
                                {
                                        $dir = str_replace("\\","/",$dir);

                                        if (is_dir($dir."/".$file))
                                        {
                                                $manlix_get_all_dirs_and_files_count_dirs++;

                                                $manlix_get_all_dirs_and_files[dirs][] = array(
                                                                                name        => $file,
                                                                                path        => $dir."/".$file,
                                                                                type        => filetype($dir."/".$file)
                                                                                );

                                                manlix_get_all_dirs_and_files($dir."/".$file);
                                        }

                                        if (is_file($dir."/".$file))
                                        {
                                                $manlix_get_all_dirs_and_files_count_files++;
                                                $manlix_get_all_dirs_and_files_count_files_size_of_files += filesize($dir."/".$file);

                                                $manlix_get_all_dirs_and_files[files][] = array(
                                                                                name        => $file,
                                                                                size        => filesize($dir."/".$file),
                                                                                path        => $dir."/".$file,
                                                                                type        => filetype($dir."/".$file)
                                                                                );
                                        }
                                }
                        }
                closedir($our_dir);

                $manlix_get_all_dirs_and_files[count_dirs]                = $manlix_get_all_dirs_and_files_count_dirs;
                $manlix_get_all_dirs_and_files[count_files]                = $manlix_get_all_dirs_and_files_count_files;
                $manlix_get_all_dirs_and_files[size_of_files]                = $manlix_get_all_dirs_and_files_count_files_size_of_files;
                $manlix_get_all_dirs_and_files[dir]                        = $dir;
                }

                else
                {
                $manlix_get_all_dirs_and_files = "Нет доступа к той директории, которую Вы задали";
                }
        }

return $manlix_get_all_dirs_and_files;
}

$info=manlix_get_all_dirs_and_files("$dir");


$info[size_of_files]    = $info[size_of_files]*0.000001;
$info[size_of_files]    = substr($info[size_of_files], 0,-4);
$date                 = date("Y",time());
echo "<br><br>Всего фоток:";

echo " $info[count_files] шт.<br/>Размер: $info[size_of_files] Мбайт";
?>


</p>
</TD>
</tr>
</TABLE>
</CENTER>

<div style="position:fixed; left:5; bottom:5;" class="main">©<?php echo date( 'Y', time() ); ?> <b>l</b>yubov&<b>p</b>avel<b>a</b>lazankin<b>p</b>rod.</div>

</BODY>
</HTML>
