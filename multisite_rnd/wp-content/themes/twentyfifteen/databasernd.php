<?php

require '../../../wp-config.php';
require '../../../wp-load.php';

global $wpdb;

$result = $wpdb->get_results( "SELECT * FROM wp_blogs "); 

//echo "<pre>"; print_r($result); echo "</pre>";

echo "ID"."<br><br>";
foreach($result as $row)
 {
 	    $dom=$row->domain.$row->path;

		echo $row->blog_id."<br/>" ;
		echo $dom."<br/>" ;

		/******Table Creation******/
		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix .$row->blog_id.'_new_table';
		$sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		sitename varchar(200) NOT NULL,
		UNIQUE KEY id (id)
		) $charset_collate;";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql ); 

		$wpdb->insert( $table_name, array( 'sitename' => $dom ));

		$wpdb->query("insert into ".$table_name." (sitename) values ('$dom')");


 

 }

 /* Print the contents of $result looping through each row returned in the result */

?>