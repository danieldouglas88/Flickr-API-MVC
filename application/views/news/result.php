<?php

function xmlApi($word){
$flickr = "https://api.flickr.com/services/feeds/photos_public.gne?tags=" . $word . "&format=xml";

$result = simplexml_load_file($flickr);

$i = 0;
echo "<br><br><br><br>";
    
while ($i != 20){
echo "<center><b>Title:</b> " . $result->entry[$i]->title . "<br>";
echo "<b>Author:</b> " . $result->entry[$i]->author->name . "<br>";
echo "<a href=" . $result->entry[$i]->author->uri . "> Flickr account</a><br>";
echo $result->entry[$i]->content. "<hr></center>";
$i++;
}
    
}

//application/views/news/ApiView.php

$this->load->view($this->config->item('theme') . 'header');

echo "<h1>" . $_POST["name"] . "</h1>"; ?><br><hr>

<?php

xmlApi($_POST["name"]);



$this->load->view($this->config->item('theme') . 'footer');
