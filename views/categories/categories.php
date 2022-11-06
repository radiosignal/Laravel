<h2>All categories</h2>
<?php
include_once 'menu.php';
?>

<?php foreach ($category as $value): ?>
    <a href="/categories/categories/<?=$value['id']?>"><?=$value['title']?></a><br>
<?php endforeach;?>
