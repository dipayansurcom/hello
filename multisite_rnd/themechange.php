<?php 

require 'wp-load.php';

echo "<div class='wrap'><form action='#' method='post' style='margin-left:500px;'>
<select name='theme'>
  <option value='1'>Theme 15</option>
  <option value='2'>Theme 14</option>
  <option value='3'>Theme 13</option>
  <option value='4'>Theme 15 home</option>
  <option value='5'>Theme 15 about</option>
  <option value='6'>Theme 14 home</option>
  <option value='7'>Theme 14 about</option>
  <option value='8'>Theme 13 home</option>
  <option value='9'>Theme 13 about</option>
  <option value='10'>Theme 13 contact</option>
  <option value='11'>Theme 14 contact</option>
  <option value='12'>Theme 15 contact</option>
  <option value='13'>Theme 13 Upcoming</option>
  <option value='14'>Theme 14 Upcoming</option>
  <option value='15'>Theme 15 Upcoming</option>
  <option value='16'>Theme 15 home 2</option>
  <option value='17'>Theme 15 blog 2</option>
  <option value='18'>Theme 13 home 2</option>
  <option value='19'>Theme 13 blog 2</option>

  </select>
<input type='submit' name='submit'>
</form></div>"; 


  if (isset($_POST['submit']))
   {
    echo "<h1 style='margin-left:500px;'>".$_POST['theme']."</h1>";

    $cases=$_POST['theme'];
    global $wpdb;
  
  //$table_name='wp_options';

switch ($cases)
 {

    case "1":  
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'default' );
    break;

    case "2":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfourteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'default' );

    break;

    case "3":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'default' );
    break;

    case "4":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-home.php' );
    break;

    case "5":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-about.php' );
    break;

    case "6":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfourteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-home.php' );
    break;

    case "7":
    //global $wpdb;
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfourteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-about.php' );
    break;

    case "8":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'home2.php' );
    break;

    case "9":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-about.php' );
    break;

    case "10":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-contact.php' );
    break;

    case "11":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfourteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-contact.php' );
    break;

    case "12":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-contact.php' );
    break;

case "13":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-upcoming.php' );
    break;

case "14":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfourteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-upcoming.php' );
    break;

case "15":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'page-upcoming.php' );
    break;

case "16":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'home2.php' );
    break;

case "17":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentyfifteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'home-page-blog.php' );
    break;

case "18":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'home2.php' );
    break;

case "19":
    $wpdb->query("UPDATE `wp_options` SET `option_value`='twentythirteen' WHERE `option_id`=41 OR `option_id`=42");
    update_post_meta( 2, '_wp_page_template', 'new-blog-2.php' );
    break;

    default:
        echo "Your favorite color is neither red, blue, or green!";
}
  }


?>