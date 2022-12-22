<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
?>
<div class="registration-form-container">
    <?php if(isset($_SESSION['auth_result'])):?>
        <div class="alert alert-danger" role="alert">
            <?=$_SESSION['auth_result']?>
        </div>
    <?php endif?>
    <div class="registration-form-title">
        Авторизация
    </div>
    <form method="post" action="/auth.php">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Логин</label>
            <input name="email" type="email" class="form-control"
                   id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" type="password" class="form-control"
                   id="exampleInputPassword1">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>

    </form>
    <div class="registration-link-button">
        <div id="registration-button-text">
            У вас еще нет аккаунта?
        </div>
        <a href="/view/registration-view.php">
            <button class="btn btn-primary registration-button">
                Зарегистрироваться
            </button>
        </a>
    </div>

</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php';?>
