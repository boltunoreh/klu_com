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

<SCRIPT>
<!--
function highlight(x){
document.forms[x].elements[0].focus()
document.forms[x].elements[0].select()
}
//-->
</SCRIPT>

</HEAD>

<a href="http://klukvography.com/" border="0" ><IMG SRC="logo.gif" alt="store" border="0"></a>

<TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="0">
<TR>
<TD WIDTH="100%" VALIGN="TOP">
<P ALIGN="CENTER">
<DIV ALIGN="center">
<TABLE WIDTH="450" BORDER="0" CELLSPACING="2" ALIGN="CENTER">
<TR BGCOLOR="#ffffff">
<TD NOWRAP COLSPAN="3">

<?
$dir = str_replace("[spc]", " ",(str_replace("[amp]", "&",$dir)));
function getDirContents ($dirName) {
                static $result_array=array();
                $d = dir($dirName);
                while($entry = $d->read()) {
                        if ($entry != "." && $entry != "..") {
                                if (!is_dir($dirName."/".$entry)) {
                                        array_push($result_array,$entry);
                                }
                        }
                }
                $d->close();
        sort($result_array);
                return $result_array;
        }
$DirContents = getDirContents("./../albums/".$dir);
$nextpic = $DirContents[($index + 1)];
$prevpic = $DirContents[($index - 1)];
$nextindex = ($index + 1);
$previndex = ($index - 1);
if ($index == 0) {
     $prevpic = $DirContents[(Count($DirContents) - 1)];
     $previndex = (Count($DirContents) - 1);
}
if (($index + 1) > (Count($DirContents) - 1)) {
     $nextpic = $DirContents[0];
     $nextindex= 0;
}

$nextpic = str_replace(" ", "[spc]",(str_replace("&", "[amp]",$nextpic)));
$prevpic = str_replace(" ", "[spc]",(str_replace("&", "[amp]",$prevpic)));

echo "<table width=\"100%\" border=\"0\"><tr><td width=\"50%\">
<font size=\"5\"><b>f</b>oto:  <font size=\"4\">$image</font>&nbsp;&nbsp;&nbsp;
<b>a</b>lbum: <a href=showimages.php?dir=".str_replace(" ", "[spc]",(str_replace("&", "[amp]",$dir)))."><font size=\"4\">".$dir."</font></a>
</td><td width=\"50%\" align=\"center\" valign=\"middle\">
<A HREF=\"index.php\"><font size=\"5\"><b>b</b>ack<b>t</b>o<b>a</b>lbums</font></A></font>
</td></tr></table>";
?>
 
</TD>
</TR>
<TR>
<TD NOWRAP WIDTH="195" BGCOLOR="#ffffff">
<DIV ALIGN="CENTER">

<?
     echo "<br><a href=showfullimage.php?dir=".str_replace(" ", "[spc]",(str_replace("&", "[amp]",$dir)))."&image=".$prevpic."&index=".$previndex."><font size=\"5\"><b>p</b>revious<br> (".str_replace("[spc]", " ",(str_replace("[amp]", "&",$prevpic))).")</font>";
?>
    
</DIV>
</TD>
<TD NOWRAP WIDTH="44">&nbsp;</TD>
<TD NOWRAP WIDTH="197" BGCOLOR="#ffffff">
<DIV ALIGN="CENTER">

<?
     echo "<br><a href=showfullimage.php?dir=".str_replace(" ", "[spc]",str_replace("&", "[amp]",$dir))."&image=".$nextpic."&index=".$nextindex."><font size=\"5\"><b>n</b>ext<br> (".str_replace("[spc]", " ",(str_replace("[amp]", "&",$nextpic))).")</font>";
?>

</DIV>
</TD>
</TR>
</TABLE>
<BR>
</DIV>
<P ALIGN="CENTER">
<B>

<?
echo "<img src=\"./../albums/".$dir."/".str_replace("[spc]", " ",(str_replace("[amp]", "&",$image)))."\" border=\"0\">";

echo "<br><br>
<table>
<tr>
<td>
<FORM action= method=post>
<A href=\"javascript:highlight(0)\" onmouseover=\"window.status='';return true\"><font size=\"3\"<b>s</b>elect<b>a</b>ll</A>
<br>
</td>
</tr>
<tr>
<td>
<center>
<textarea cols=\"50\" wrap=virtual readonly>
&lt;center&gt;&lt;img src=\"http://klukvography.com/photo/albums/".$dir."/".str_replace("[spc]", " ",(str_replace("[amp]", "&",$image)))."\" border=\"0\"&gt;&lt;/center&gt;</textarea></FORM>
</center>
</td>
</tr>
</table>";
?>

</B>
</P>
</TD>
</TR>
</TABLE>

<div style="position:fixed; left:5; bottom:5;" class="main">©<?php echo date( 'Y', time() ); ?> <b>l</b>yubov&<b>p</b>avel<b>a</b>lazankin<b>p</b>rod.</div>

</BODY>
</HTML>