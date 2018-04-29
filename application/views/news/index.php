<?php
//application/views/news/index.php
$this->load->view($this->config->item('theme') . 'header');
?>
<h2>News</h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
<?php
$news_var = 'http://www.daniel-on-the-web.com/itc260/ci-sp18/news/' . $news_item['slug'];
?>

        <p><a href="<?php echo $news_var; ?>">View article</a></p>

<?php 
endforeach; 
?>

<div><?=anchor('http://www.daniel-on-the-web.com/itc260/ci-sp18/news/create','Create News')?></div>

<?php
$this->load->view($this->config->item('theme') . 'footer');
?>