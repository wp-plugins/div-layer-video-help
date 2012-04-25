<?php
/*
Plugin Name: DIV Layer Video Help
Plugin URI: http://www.divlayer.com
Description: DIV Layer Video Help inserts video tutorials into the help section at the top of the pages in your admin panel.
Version: 1.0.0
Author: DIV Text, LLC
Author URI: http://www.divtext.com
*/

/*  Copyright 2012  DIV Text, LLC  (email : support@divtext.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


add_action('admin_footer', 'divvh_menu_update');

function divvh_menu_update() {
echo "<script type='text/JavaScript'>";



/* Get page information */

/* Get the current page */
echo "var wpvt_current = window.location.pathname;";

/* Get the starting and ending position of the file name in the URL */
echo "var wpvt_current_href_start = wpvt_current.lastIndexOf('/') + 1;";
echo "var wpvt_current_href_end = wpvt_current.lastIndexOf('.php');";

/* Get the file name */
echo "var wpvt_current_file_name = wpvt_current.substring(wpvt_current_href_start, wpvt_current_href_end);";


/* Test to see difference between add new post and add new page */
echo "if (wpvt_current_file_name == 'post-new')";
echo "{";

echo "if (document.title.lastIndexOf('Page') != -1)";
echo "{";
echo "wpvt_current_file_name = 'post-new-page';";
echo "}";

echo "}";



/* Test to see difference between edit post and edit page */
echo "if (wpvt_current_file_name == 'edit')";
echo "{";

echo "if (document.title.lastIndexOf('Posts') != -1)";
echo "{";
echo "wpvt_current_file_name = 'edit-posts';";
echo "}";
echo "else";
echo "{";
echo "wpvt_current_file_name = 'edit-pages';";
echo "}";

echo "}";



/* Test to see difference between edit tags */
echo "if (wpvt_current_file_name == 'edit-tags')";
echo "{";

echo "if (document.title.lastIndexOf('Link Categories') != -1)";
echo "{";
echo "wpvt_current_file_name = 'link-category-tags';";
echo "}";
echo "else if (document.title.lastIndexOf('Tags') != -1)";
echo "{";
echo "wpvt_current_file_name = 'edit-post-tags';";
echo "}";
echo "else";
echo "{";
echo "wpvt_current_file_name = 'edit-category-tags';";
echo "}";

echo "}";


/* Set wpvt_current_file_name to index if there is not a file name after the / */
echo "if (wpvt_current_file_name.match('/wp-admin/'))";
echo "{";
echo "wpvt_current_file_name = 'index';";
echo "};";

/* Edit help menu to insert video link */

echo "if (wpvt_current_file_name != 'post-new' && wpvt_current_file_name != 'post-new-page' && wpvt_current_file_name != 'tools')";
echo "{";

echo "document.getElementById('tab-panel-overview').innerHTML = document.getElementById('tab-panel-overview').innerHTML + '<center><iframe src=\'http://www.divlayer.com/iframes/wpvideohelp/getvideo.php?page=' + wpvt_current_file_name + '\' width=\'600px\' height=\'525px\'></iframe></center>';";

echo "}";

echo "if (wpvt_current_file_name == 'post-new')";
echo "{";

echo "document.getElementById('tab-panel-customize-display').innerHTML = document.getElementById('tab-panel-customize-display').innerHTML + '<center><iframe src=\'http://www.divlayer.com/iframes/wpvideohelp/getvideo.php?page=' + wpvt_current_file_name + '\' width=\'600px\' height=\'525px\'></iframe></center>';";

echo "}";

echo "if (wpvt_current_file_name == 'post-new-page')";
echo "{";



echo "document.getElementById('tab-panel-about-pages').innerHTML = document.getElementById('tab-panel-about-pages').innerHTML + '<center><iframe src=\'http://www.divlayer.com/iframes/wpvideohelp/getvideo.php?page=' + wpvt_current_file_name + '\' width=\'600px\' height=\'525px\'></iframe></center>';";

echo "}";

echo "if (wpvt_current_file_name == 'tools')";
echo "{";

echo "document.getElementById('tab-panel-press-this').innerHTML = document.getElementById('tab-panel-press-this').innerHTML + '<center><iframe src=\'http://www.divlayer.com/iframes/wpvideohelp/getvideo.php?page=' + wpvt_current_file_name + '\' width=\'600px\' height=\'525px\'></iframe></center>';";

echo "}";


/* End Script Tag */
echo "</script>";
}

?>
