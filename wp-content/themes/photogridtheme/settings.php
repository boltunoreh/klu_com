<?php





$themename = "Photo Grid";


$shortname = "grid_press";





$settings_list = array(


    'custom_logo_url',


    'custom_background_color',


   


    'facebook_link',


    'twitter_link',


    'dribbble_link',


    'google_plus_link',


    'pinterest_link'


);











function mytheme_add_admin() {





    global $themename, $shortname, $settings_list;





    if ( $_GET['page'] == basename(__FILE__) ) {


    


        if ( 'save' == $_REQUEST['action'] ) {





                  foreach($settings_list as $value) {


                    //echo '<script type="text/javascript">alert("' . $value . '");</script>';


                    //if($_REQUEST[$value] != "")


                      //update_option($shortname . '_' . $value,$_REQUEST[$value]);


                      update_option($shortname . '_' . $value,mysql_real_escape_string($_REQUEST[$value]));


                  }


                  header("Location: themes.php?page=settings.php&saved=true");


                  die;


        }





    }





    add_theme_page($themename." Settings", $themename." Settings", 'edit_themes', basename(__FILE__), 'mytheme_admin');





}











function mytheme_admin() {





    global $themename, $shortname, $settings_list;





    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>Настройки темы '.$themename.' сохранены.</strong></p></div>';


    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>Настройки темы '.$themename.' сброшены.</strong></p></div>';


?>





<style type="text/css">





table { border: none; }


td { padding: 5px; }


.ss_text { width: 350px; }





</style>























<div class="wrap">


<h2>Настройки темы <?php echo $themename; ?></h2>


<form method="post">


<table>


<tr>


  <td>Ссылка на логотип:</td>


  <td><input type="text" name="custom_logo_url" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" /><br /><small><a href="<?php bloginfo('url'); ?>/wp-admin/media-new.php" target="_blank">Загрузить свой логотип</a> (360px ширина x 102px высота)</small></td>


</tr>


<tr>


  <td>Цвет фона:</td>


  <td><input type="text" name="custom_background_color" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_background_color',''))); ?>" /> <small>например: #27292a</small></td>


</tr>


<tr>



</tr>


<tr>


  <td>Ссылка на Facebook:</td>


  <td><input type="text" name="facebook_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_facebook_link',''))); ?>" /></td>


</tr>


<tr>


  <td>Ссылка на  Twitter:</td>


  <td><input type="text" name="twitter_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_twitter_link',''))); ?>" /></td>


</tr>


<tr>


  <td>Ссылка на Flickr:</td>


  <td><input type="text" name="dribbble_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_dribbble_link',''))); ?>" /></td>


</tr>


<tr>


  <td>Ссылка на Google Plus:</td>


  <td><input type="text" name="google_plus_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_google_plus_link',''))); ?>" /></td>


</tr>


<tr>


  <td>Pinterest Link:</td>


  <td><input type="text" name="pinterest_link" class="ss_text" value="<?php echo stripslashes(stripslashes(get_option($shortname.'_pinterest_link',''))); ?>" /></td>


</tr>


</table>











<p class="submit">


<input name="save" type="submit" value="Сохранить" />    


<input type="hidden" name="action" value="save" />


</p>


</form>





<?php





}





add_action('admin_menu', 'mytheme_add_admin');





?>