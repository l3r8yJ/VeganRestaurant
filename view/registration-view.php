<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
?>

<div class="registration-form-container">
  <?php if (isset($_SESSION['register_result'])): ?>
      <div class="alert alert-danger" role="alert">
        <?= $_SESSION['register_result'] ?>
      </div>
  <?php endif ?>
    <div class="registration-form-title">
        Форма регистрации
    </div>
    <form action="/registration.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control"
                   id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control"
                   pattern="\w{5,32}"
                   id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Confirm
                password</label>
            <input name="password_confirm" type="password" class="form-control"
                   id="exampleInputPassword1" pattern="\w{5,32}" required>
        </div>
        <div class="mb-3">
            <label for="fio" class="form-label">Username</label>
            <input name="fio" type="text" class="form-control"
                   id="exampleInputPassword1" pattern="\w{3,16}" required>
        </div>
        <div class="mb-3">
            <label for="birthday" class="form-label">Date of birth</label>
            <input name="birthday" type="date" class="form-control"
                   value="12.01.2000"
                   id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input name="address" type="text" class="form-control"
                   id="exampleInputPassword1" pattern="\w{3,16}" required>
        </div>
        <div class="mb-3">
            <label for="sex" class="form-label">Gender</label>
            <select name="sex" id="Select" class="form-select">
                <option>Mail</option>
                <option>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="vk" class="form-label">Link to VK page</label>
            <input name="vk" type="text" class="form-control"
                   id="exampleInputPassword1" pattern="\w{3,16}" required>
        </div>
        <div class="mb-3">
            <label for="blood_type" class="form-label">Group type</label>
            <input name="blood_type" type="text" class="form-control"
                   id="exampleInputPassword1" pattern="\w{1,1}" required>
        </div>
        <div class="mb-3">
            <label for="rhesus_factor" class="form-label">Rhesus factor</label>
            <input name="rhesus_factor" type="text" class="form-control"
                   id="exampleInputPassword1" pattern="\w{3,16}" required>
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться
        </button>
    </form>
</div>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php" ?>

