<?php
require_once "views/header.php"
?>
<div>
    <?php foreach ($result as $item): ?>

        <p><a href="/film/view/<?php echo $item['id']; ?>"><?php echo $item['Title']; ?></a></p>

    <?php endforeach; ?>
</div>
<?php
require_once "views/footer.php";

