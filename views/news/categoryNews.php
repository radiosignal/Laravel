<?php include_once "menu.php";?>

<?php foreach ($news as $item): ?>

    <a href="<?=route('news.categoryNews',$item['category_id'])?>"><?=$item['title']?></a><br>
<?php endforeach;?>

<h2>Все новости категории</h2>
