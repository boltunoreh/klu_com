<HTML>
<HEAD>
<TITLE>
<?
include ('config.php');
echo $title;
echo "&nbsp;:&nbsp;";
echo str_replace(".", " ",$dir);
?>
</TITLE>
<link href="css.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="http://klukvography.com/favicon.png" type="image/x-icon">

<style TYPE="text/css">
		div.main {font-size: 10px; letter-spacing: px; font-family: Verdana, Arial; text-decoration: none; color: #808080;}
</style>
</HEAD>

<a href="http://klukvography.com/" border="0" ><IMG SRC="logo.gif" alt="store" border="0"></a>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
<TR>
<TD WIDTH="100%" VALIGN="TOP">
<P ALIGN="CENTER">
<FONT  FACE="Verdana, Arial, Helvetica, sans-serif" SIZE="3">
<B>
<br>
<br>

<?

        function getDirList ($dirName) {
                static $result_array=array();
                $d = dir($dirName);
                while($entry = $d->read()) {
                        if ($entry != "." && $entry != "..") {
                                if (is_dir($dirName."/".$entry)) {
                                        array_push($result_array,$entry);
                                        //echo $dirName."/".$entry."<br>\n";
                                }
                        }
                }
                $d->close();
        sort($result_array);
                return $result_array;
        }
        function getDirContents ($dirName) {
                static $result_array=array();
                $d = dir($dirName);
                while($entry = $d->read()) {
                        if ($entry != "." && $entry != "..") {
                                if (!is_dir($dirName."/".$entry)) {
str_replace(" ", "[spc]",(str_replace("&", "[amp]",$entry)));
                                        array_push($result_array,$entry);
                                }
                        }
                }
                $d->close();
        sort($result_array);
                return $result_array;
        }
        // Load the directory tree
                  $DirArray = getDirList("./../albums");
for($i=0; $i < count($DirArray); $i++) {
        if($dir==$DirArray[$i]) {
                $DirIndex = $i;
        }
}


$NextDir = "showimages.php?dir=".$DirArray[$DirIndex + 1];
$PrevDir = "showimages.php?dir=".$DirArray[$DirIndex - 1];
$NextDirNam = $DirArray[($DirIndex + 1)];
$PrevDirNam = $DirArray[($DirIndex - 1)];
if ($DirIndex == 0) {
     $PrevDir = "showimages.php?dir=".$DirArray[(Count($DirArray) - 1)];
     $PrevDirNam = $DirArray[(Count($DirArray) - 1)];
}
if (($DirIndex + 1) > (Count($DirArray) - 1)) {
     $NextDir = "showimages.php?dir=".$DirArray[0];
     $NextDirNam = $DirArray[0];
}
              ?>

</B>
</FONT>
</P>
<TABLE WIDTH="450" BORDER="0" CELLSPACING="2" ALIGN="CENTER">
<TR BGCOLOR="#ffffff">
<TD NOWRAP COLSPAN="3">
<CENTER>
<FONT SIZE="3">


<?
echo "<font size=\"5\"><b>f</b>отоальбом ".str_replace(".", " ",$dir)." &nbsp;</font>
      <font size=\"5\">&nbsp;&nbsp;&nbsp;&nbsp;<A HREF=\"index.php\"><font size=\"5\"><b>b</b>ack<b>t</b>o<b>a</b>lbums</font></A></font>";
?>


</FONT>
</CENTER>
</TD>
</TR>

<tr>
<td width="100%" heigth="10" COLSPAN="3">
<br>
</td>
</tr>

<TR>
<TD NOWRAP WIDTH="195" BGCOLOR="#ffffff">
<DIV ALIGN="CENTER">
<FONT SIZE="1" FACE="Arial, Helvetica, sans-serif">
<B>Предыдущий фотоальбом:<br>
<A HREF="<?=$PrevDir?>">

<?
echo str_replace(".", " ",$PrevDirNam);
?>

</A>
</B>
</FONT>
</DIV>
</TD>
<TD NOWRAP WIDTH="44">&nbsp;</TD>
<TD NOWRAP WIDTH="197" BGCOLOR="#ffffff">
<DIV ALIGN="CENTER">
<FONT  SIZE="1" FACE="Arial, Helvetica, sans-serif">
<B>Следующий фотоальбом:<br>
<A HREF="<?=$NextDir?>">

<?
echo str_replace(".", " ",$NextDirNam);
?>
</A>

</B>
</FONT>
</DIV>
</TD>
</TR>
</TABLE>
</td>
</tr>

<tr>
<td width="100%" heigth="30">
<br>
</td>
</tr>

<tr>
<TD WIDTH="100%" VALIGN="TOP">
<P ALIGN="CENTER">

<?





                echo "<table border=\"0\" cellspacing=\"5\" cellpadding=\"0\"><tr>";
                $Column = 1;
                $DirName = $DirArray[$DirIndex];
                $CurrentDir = "./../albums/".$DirName;
                //echo $CurrentDir;
                $DirContents = getDirContents($CurrentDir);
                for($i=0; $i < count($DirContents); $i++) {
                
    $fsize = 200;
    $schet0 = 0;
    $schet1 = 0;
    $imagesize = getimagesize($CurrentDir."/".$DirContents[$i]);
    $schet0 = $imagesize[0];
    $schet1 = $imagesize[1];
    $schet0 = $fsize; $schet1 = ($imagesize[1]/100)*($schet0/($imagesize[0]/100)); if ($schet1>$fsize) {$schet0 = ($fsize/100)*($fsize/($schet1/100)); $schet1 = $fsize;}
    $schet0 = round($schet0);
    $schet1 = round($schet1);
    
                        echo "<td height=\"200\" width=\"200\" align=\"center\" bgcolor=\"black\"><a href=showfullimage.php?dir=".str_replace(" ", "[spc]",(str_replace("&", "[amp]",$DirName)))."&image=".str_replace(" ", "[spc]",(str_replace("&", "[amp]",$DirContents[$i])))."&index=".$i."><img height=".$schet1." width=".$schet0." border=\"0\" src=\"".$CurrentDir."/".$DirContents[$i]."\""; if ($schet0 > 200) { $schet0=round(($schet0-200)/2); echo 'style="margin-left: -',$schet0,'px;"'; } echo "></a></td>";
             // КОЛИЧЕСТВО СТОЛБЦОВ
                        if($Column==5) {
                                $Column = 0;
                                echo "</tr>";
                        }
                        $Column++;
                }
                if($Column != 0) {
                        for($i=$Column; $i<8;$i++){
                                echo "<td>";
                        }
                }
                echo "</table>";
?>

</P>
</TD>
</TR>
</TABLE>

<div style="position:fixed; left:5; bottom:5;" class="main">©<?php echo date( 'Y', time() ); ?> <b>l</b>yubov&<b>p</b>avel<b>a</b>lazankin<b>p</b>rod.</div>

</BODY>
</HTML>