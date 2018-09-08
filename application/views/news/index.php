<h2><?php echo $title; ?></h2>

<?php 
foreach($news as $item):?>
<div class="main">
 <h3><?php echo $item['title'];?></h3>
 <h4><?php echo $item['text'];?></h4>
 <p><a href="<?php echo site_url('news/'.$item['slug']); ?>">View article</a></p>
</div>
<?php endforeach;
?>

 <p><a href="<?php echo site_url('news/create'); ?>">add news</a></p>