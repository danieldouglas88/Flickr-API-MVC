<?php

//application/views/news/ApiView.php

$this->load->view($this->config->item('theme') . 'header');
?>

<html>
<body>

<form action="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/result?q="  method="post">
<h1>Search for:</h1> <input type="text" name="name"><br><br>
<input type="submit">
</form>

</body>
</html>

<hr>
<br>

<h1>  <li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/ApiView">#Caturday</a></li>  
<li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/ApiViewTwo">#Doggie</a></li>

 <li><a href="http://www.daniel-on-the-web.com/itc260/ci-sp18/news/ApiViewThree">#Squid</a></li></h1>
 <?php   
$this->load->view($this->config->item('theme') . 'footer');