<?php
require_once "views/header.php"
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form name="upload" method="post" action="/film/import" enctype="multipart/form-data">
                <p>
                    <input type="file" name="im" />
                </p>
                <p>
                    <input type="submit" value="Отправить" />
                </p>
            </form>
        </div>
        <div class="col-md-3">
        </div>
        <br><br>
    </div>
</div>
<?php
require_once "views/footer.php";

