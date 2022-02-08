<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));


//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Daniel's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;

    case 'aia.php':
        $title = "aia";
        $logo = "fa-universal-access";
        $PageID = 'aia';
    break;

    case 'flowchart.php':
        $title = "Flowchart";
        $logo = 'fa-home';
        $PageID = 'Flowchart';
    break;

    case 'big/index.php':
        $title = "Big";
        $logo = 'fa-home';
        $PageID = 'Big';
    break;

    case 'fp/index.php':
        $title = "Final Project";
        $logo = 'fa-home';
        $PageID = 'Final Project';
    break;
    
    case 'contactme.php':
        $title = "Daniel's WEB162 Contact Page";
        $logo = "fa-paper-plane-o";
        $PageID = 'Contact Daniel';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}

$nav1['index.php'] = "Welcome";
$nav1['big/index.php'] = "Big";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contactme.php'] = "Contact Daniel";



function makeLinks($nav1)
{
    $myReturn = '';

    foreach($nav1 as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>