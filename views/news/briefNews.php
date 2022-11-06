
<?php include_once "menu.php";?>
<h2>Все новости</h2>
<?php foreach ($news as $item): ?>

    <a href="<?=route('news.detailNews',$item['id'])?>"><?=$item['title']?></a><br><br>

<?php endforeach;?>


kpl
