<?php
//application/views/news/view.php
$this->load->view($this->config->item('theme') . 'header');

echo '<h2>'.$news_item['title'].'</h2>';
echo $news_item['text'];

echo '<div>' . anchor('http://www.daniel-on-the-web.com/itc260/ci-sp18/news','More news?') . '</div>';
$this->load->view($this->config->item('theme') . 'footer');