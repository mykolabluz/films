<?php
require_once "views/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3 class="text-primary">Список последних фильмов</h3>
            <div class="col-12 ml-auto mr-3" style="height: 20px;"></div>
            <?php foreach ($filmsList as $item): ?>                  

                <p><a class="text-success" href="/film/view/<?php echo $item['id']; ?>"><?php echo $item['Title']; ?></a></p>

            <?php endforeach; ?>
        </div>
        <br><br>
    </div>
</div>
<?php
require_once "views/footer.php"
?>

