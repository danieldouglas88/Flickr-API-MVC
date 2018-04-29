<!DOCTYPE html>
<html lang="en">
  <head>
	<title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Bootstrap themes use style settings to change look and feel -->
    <link rel="stylesheet" href="http://daniel-on-the-web.com/itc260/ci-sp18/public/themes/bootswatch/css/amelia.css" media="screen">
	
    <link rel="stylesheet" href="<?=base_url()?>public/themes/bootswatch/css/bootswatch.min.css">
    <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
        </head>

  <body>
     <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand">Home</a>
		    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
			<li class="active"><a href="#" title="">Current</a></li>
			<li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news">News</a></li>
			<li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/create">Create</a></li>
            <li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/Start">Flickr</a></li>
          </ul>
        </div>
      </div>
    </div>
       <br>
        <br> <br>
        <br> <br>
        <br>
    <div class="container">
    <?php
    echo $title;
    echo bootswatchFeedback();
    ?>

