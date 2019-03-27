<?php
require_once "views/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="text-primary">Результаты поиска</h3>
            <div class="col-12 ml-auto mr-3" style="height: 20px;"></div>
            <?php if(empty($result)): ?>
            <h5 class="text-danger">По вашему запросу ничего не нашли</h5>
            <?php else: ?>
            <?php foreach ($result as $item): ?>                  

            <p><a class="text-success" href="/film/view/<?php echo $item['id']; ?>"><?php echo strip_tags($item['Title']); ?></a></p>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-3">
        </div>
        <br><br>
    </div>
</div>
<?php
require_once "views/footer.php";

