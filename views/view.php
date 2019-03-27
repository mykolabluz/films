<?php
require_once "views/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <p class="text-center"><?php echo strip_tags($item['Title']); ?></p>
            <p>Release: <a class="text-info"><?php echo strip_tags($item['Date']); ?></a></p>
            <p>Format: <a class="text-info"><?php echo strip_tags($item['Format']); ?></a></p>
            <p>Stars: <a class="text-info"><?php echo strip_tags($item['Stars']); ?></a></p>
            <div class="col-12 ml-auto mr-3" style="height: 20px;"></div>
            <a href="/film/update/<?php echo $item['id']; ?>" class="btn btn-primary">Редактировать фильм</a>
            <a href="/film/delete/<?php echo $item['id']; ?>" class="btn btn-danger">Удалить фильм</a>
        </div
    </div>
</div>
</div>
<?php
require_once "views/footer.php";