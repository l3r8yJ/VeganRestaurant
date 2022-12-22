<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/place/PlaceRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';

$userRouter = new UserRouter(
  new UserService(
    new UserRepository(SingletonConnection::connection())
  )
);
$userRouter->handle();
$repo = new PlaceRepository(SingletonConnection::connection());
$places = $repo->fetchPlaces();
require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';

?>

<div class="registration-form-container">
    <div class="articleAdd-form-container">
        <form method="post" action="/create.php">
            <div class="form-group">
                <label for="name"> Название </label>
                <input name="name" type="text" class="form-control"
                       id="exampleFormControlInput1" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="">Цена</label>
                <input name="price" type="number" class="form-control"
                       id="exampleFormControlInput1" placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Место хранения</label>
                <select name="place_name" class="form-control" id="exampleFormControlSelect1">
                    <?php foreach($places as $place):?>
                    <option><?=htmlspecialchars($place['place_name'])?></option>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label for="text">Рецепт</label>
                <textarea name="recepie" class="form-control"
                          id="exampleFormControlTextarea1" rows="3">

                </textarea>
            </div>

            <div class="create-article-submit">
                <button type="submit" class="btn btn-primary mb-2 "> Добавить
                    рецепт
                </button>
            </div>

        </form>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php'; ?>
