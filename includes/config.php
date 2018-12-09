<?php
/*
config.php

stores configuration information for our web application

*/

//removes header already sent errors
ob_start();

define('SECURE',true); #force secure, https, for all site pages

define('PREFIX', 'widgets_fl18_'); #Adds uniqueness to your DB table names.  Limits hackability, naming collisions

header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

define('DEBUG',true); #we want to see all errors


//include 'db_mysqli.php';//stores database info
include 'credentials.php';//stores database info
include 'common.php';//stores favorite functions

//prevents date errors
date_default_timezone_set('America/Los_Angeles');

//create config object
$config = new stdClass;

//CHANGE TO MATCH YOUR PAGES
$config->nav1['index.php'] = "HOME";
$config->nav1['about.php'] = "ABOUT";
$config->nav1['daily.php'] = "DAILY";
$config->nav1['goods_list.php'] = "SHOP";
$config->nav1['contact.php'] = "CONTACT";

//create default page identifier
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//START NEW THEME STUFF - be sure to add trailing slash!
$sub_folder = 'widgets/';//change to 'widgets' or 'sprockets' etc.
$config->theme = 'Clean';//sub folder to themes Clean or Brick

//will add sub-folder if not loaded to root:
$config->physical_path = $_SERVER["DOCUMENT_ROOT"] . '/' . $sub_folder;
//force secure website
if (SECURE && $_SERVER['SERVER_PORT'] != 443) {#force HTTPS
	header("Location: https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
}else{
    //adjust protocol
    $protocol = (SECURE==true ? 'https://' : 'http://'); // returns true
    
}
$config->virtual_path = $protocol . $_SERVER["HTTP_HOST"] . '/' . $sub_folder;

define('ADMIN_PATH', $config->virtual_path . 'admin/'); # Could change to sub folder
define('INCLUDE_PATH', $config->physical_path . 'includes/');


//CHANGE ITEMS BELOW TO MATCH YOUR SHORT TAGS
$config->title = THIS_PAGE;
$config->banner = 'Widgets';
$config->loadhead = '';//place items in <head> element

//default page values
$config->siteName = 'HOME';
$config->slogan = 'Whatever it is you do, we do it better.';
$config->pageHeader = 'The developer forgot to put a pageHeader!';
$config->subHeader = 'The developer forgot to put a subHeader!';
$config->sloganIcon = '';//will be replaced in contact.php by hero icons


switch(THIS_PAGE){
	
	case 'index.php':
    	$config->title = 'Home';
        $config->pageHeader= 'Brunch Collection';
        $config->slogan   =  'Add a touch of the extraordinary to your daily as you experience the busy life. No matter what you are in the mood for, our selection of chic, casual and concept brunches across the city will keep you coming back for more!';
        $config->subHeader= 'home page';
    	$config->bgImg = 'home-bg1.jpg';
    	$config->iconImg = 'i1.png';
	break;
        
    case 'about.php':
        $config->title= 'About';
        $config->pageHeader= 'About Us';
        $config->slogan   =  'We bring a delicious brunch information to you.';
        $config->subHeader= 'About page';
    	$config->bgImg = 'home-bg2.jpg';
    	$config->iconImg = 'i2.png';
    break;
        
    case 'daily.php':
        $config->title= 'Daily';
        $config->pageHeader= 'Delicious Daily';
        $config->slogan   =  'We bring a delicious brunch information to you.';
        $config->subHeader= 'Daily page';
    	$config->bgImg = 'home-bg3.jpg';
    	$config->iconImg = 'i3.png';
    break;
        
    case 'goods_list.php':
        $config->title= 'Shop';
        $config->pageHeader= 'Shopping Mall';
        $config->slogan   =  'All kinds of electronic products.';
        $config->subHeader= 'Shop page';
    	$config->bgImg = 'laptop-1478822_1920.jpg';
    	$config->iconImg = 'i4.png';
    break;
    
    case 'goods_view.php':
        $config->title= 'Shop';
        $config->pageHeader= 'Item details';
        $config->slogan   =  'All kinds of electronic products.';
        $config->subHeader= 'Shop page';
    	$config->bgImg = 'laptop-1478822_1920.jpg';
    	$config->iconImg = 'i5.png';
    break;
        
    case 'contact.php':
        $config->title= 'Contact';
        $config->pageHeader= 'Contact Us';
        $config->slogan   =  'If you have any questions, please contact us.';
        $config->subHeader= 'Contact page';
    	$config->bgImg = 'home-bg5.jpg';
    	$config->iconImg = 'i5.png';
    break;

    default:
    	$config->title= THIS_PAGE;
		$config->pageHeader= '';
		$config->slogan   =  '';
		$config->subHeader= '';
    	$config->bgImg = '';
    	$config->iconImg = '.png';
    	//$config->sloganIcon = randomize($heros);
}

function makeLinks($nav)
{
	$myReturn='';
  	foreach($nav as $key => $value){
   		if(THIS_PAGE == $key)
    	{
      		$myReturn .= '
        	<li class="nav-item">
       			<a class="nav-link active" href="' . $key . '">' . $value . '</a>
       		</li>';
    	}else{
      		$myReturn .= ' 
        	<li class="nav-item">
        		<a class="nav-link" href="' . $key . '">' . $value . '</a>
        	</li>';
    	}
    }
  	return $myReturn;    
}


//creates theme virtual path for theme assets, JS, CSS, images
$config->theme_virtual = $config->virtual_path . 'themes/' . $config->theme . '/';

/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
/*
 * adminWidget allows clients to get to admin page from anywhere
 * code will show/hide based on logged in status
*/
if(startSession() && isset($_SESSION['AdminID']))
{#add admin logged in info to sidebar or nav
    
    $config->adminWidget = '
        <a href="' . ADMIN_PATH . 'admin_dashboard.php">ADMIN</a> 
        <a href="' . ADMIN_PATH . 'admin_logout.php">LOGOUT</a>
    ';
}else{//show login (YOU MAY WANT TO SET TO EMPTY STRING FOR SECURITY)
    
    $config->adminWidget = '
        <a  href="' . ADMIN_PATH . 'admin_login.php">LOGIN</a>
    ';
}
?>