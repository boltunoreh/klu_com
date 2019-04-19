<?php


/////////////////////

$dir   = "".str_replace(".", " ",$dir)."";

if (!isset($page)) {$page = 0;}
$total = 0;

if(!($dp = opendir($dir))) die ("Cannot open ./");
$file_array = array();
while ($file = readdir ($dp))
        {
        if(substr($file,0,1) != '.' and $file != "index.php")
                {
                $file_array[] =  $file;
                }
        }
$file_count = count ($file_array);
sort ($file_array);

                if ($file_count > 0)
                        {
                        $first_record = $page * $conf["items_per_page"];
                        $last_record = $first_record + $conf["items_per_page"];

                        while (list($fileIndexValue, $file_name) = each ($file_array))
                                {

                                if (($fileIndexValue >= $first_record) AND ($fileIndexValue < $last_record))
                                        {

                                        echo "<a href=\"$file_name\">$file_name</a> (". round(filesize($file_name)/1024,1) . "kb)<br/>";
                                        $total = $total + filesize($file_name);
                                        }
                                }

                        if (($file_count > 0) AND ($page != 0))
                                {
                                // previous button
                                $prev_page = $page -1;
                                echo "<br/><a href=\"".$_SERVER["PHP_SELF"]."?page=$prev_page\">Prev</a><br/>";
                                }


                        if (($file_count > 0) AND ($last_record < $file_count))
                                {
                                // next button
                                $next_page = $page + 1;
                                echo "<br/><a href=\"".$_SERVER["PHP_SELF"]."?page=$next_page\">Next</a><br/>";
                                }
                        echo "<br/>Directory:<br/>$file_count ";
                        if ($file_count == 1)
                                {echo "file";}
                        else
                                {echo "files";}

                        echo " (" . round($total/1024,1) . "kb)";
                        echo "<br/> $dir";
                        }
                closedir($dp);



//////////////////////


?>
