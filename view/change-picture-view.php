<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/items_init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
?>
<div class="picture-loader-container">
    <form enctype="multipart/form-data" method="post"
          action="/change-picture.php">
        <div class="mb-3">
            <label for="formFile" class="form-label">Выбирете новую
                картинку</label>
            <input name="picture-input" class="form-control" type="file" id="formFile">
            <div class="change-picture-submit">
                <button type="submit" class="btn btn-primary mb-2 "> Изменить
                    картинку
                </button>
            </div>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>"/>
        </div>
    </form>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php'; ?>

