<?php
require_once "views/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4">
            <?php if ($result): ?>
                    <p>Информация о фильме изменена!</p>
                <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                        <ul>
                            <?php foreach ($errors as $error): ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="Title" class="form-control" placeholder="Enter title" value="<?php echo strip_tags($film['Title']); ?>">
                </div>
                <div class="form-group">
                    <label>Release</label>
                    <input type="text" name="Date" class="form-control"  placeholder="Enter Release" value="<?php echo strip_tags($film['Date']); ?>">
                </div>

                <div class="form-group">
                    <label>Format</label>
                    <select class="form-control" name="Format">
                        <option>VHS</option>
                        <option>DVD</option>
                        <option>Blu-Ray</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Stars</label>
                    <textarea type="text" name="Stars" class="form-control" placeholder="Enter stars"><?php echo strip_tags($film['Stars']); ?></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
            </form>
                    <?php endif; ?>
        </div
    </div>
</div>
</div>
<?php
require_once "views/footer.php";
