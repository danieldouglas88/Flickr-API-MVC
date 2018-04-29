<?php
//application/views/news/create.php

$this->load->view($this->config->item('theme') . 'header');

?>

<?php
        function onClick($argOne, $argTwo){
$servername = "mysql.daniel-on-the-web.com";
$username = "ddouglas";
$password = "Qazxsw!123";
$dbname = "danieldbxx";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
    
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO sp18_news
VALUES (NULL,'" . $argOne . "','" . $argOne[0]  . $argOne[1] . $argOne[2] . "','" . $argTwo . "')";

    
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
    
 ?>

<h2><?=$title?></h2>

<form name="form" method="post">
    
Details: <input type="text" name="name" id="name" value=""><br/><br>
Text: <textarea rows="4" cols="50" type="text" name="nameTwo" id="nameTwo" value="">
</textarea>
<br> <br>
<input type="submit" name="submit" value="Submit">  

</form>

<?php

if(isset($_POST["submit"])) {
onClick($_POST['name'], $_POST['nameTwo']);
    echo '<script type="text/javascript">
           window.location = "http://www.daniel-on-the-web.com/itc260/ci-sp18/news"
           alert("Record created!");
      </script>'

    ;
}
$this->load->view($this->config->item('theme') . 'footer');
    
    ?>
