<?php

function get_header() {


	if($nav_item_highlighted == "home") {
		$index_nav_classes = 'class="current-menu-item current_page_item"';
	}
	if($nav_item_highlighted == "about") {
		$about_nav_classes = 'current-menu-item current_page_item';
	}
	if($nav_item_highlighted == "case-study") {
		$case_nav_classes = 'class="current-menu-item current_page_item"';
	}
	
	if($nav_item_highlighted == "contact") {
		$contact_nav_classes = 'class="current-menu-item current_page_item"';
	}	

	$html_header = 
	'
		<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">


    <title>Dune8</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,200" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,200" rel="stylesheet" type="text/css">

    </head>

  <body>

    <!-- Floating Navbar Header-->

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dune<span id="eight">8</span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Case Study</a>
            </li>
            <li>
              <a href="#">Get in Touch</a>
            </li>
        </div><!--/.navbar-collapse -->
      </div>
    </div>';

    return $html_header;
}

function get_footer() {
	$html_footer = 
	'
	 <footer>
      
      </footer>
      <div class="copyright-container">
          <p id="copyright">&copy; Dune8 2013</p>
        </div>

	';

	return $html_footer 
}

?>

  