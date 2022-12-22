<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/SingletonConnection.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemService.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/item/ItemRepository.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/user/UserRouter.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/place/PlaceRepository.php';

$iRep = new ItemRepository(SingletonConnection::connection());
$pRep = new PlaceRepository(SingletonConnection::connection());
$service = new ItemService(
  $iRep,
  $pRep
);
$userRouter = new UserRouter(
  new UserService(new UserRepository(SingletonConnection::connection()))
);
$userRouter->handle();

require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php';
?>

<div class="registration-form-container">

    <div class="articleAdd-form-container">
        <form method="post" action="/edit.php">
            <div class="form-group">
                <label for="name"> Название </label>
                <input name="name" type="text" class="form-control"
                       value="<?= htmlspecialchars($service->byId(intval($_GET['id']))['name']) ?>"
                       id="exampleFormControlInput1"
                       placeholder="Название">
            </div>
            <div class="form-group">
                <label for="">Цена</label>
                <input name="price" type="number" class="form-control"
                       value="<?= htmlspecialchars($service->byId(intval($_GET['id']))['price']) ?>"
                       id="exampleFormControlInput1"
                       placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Место хранения</label>
                <select name="place_name" class="form-control"
                        id="exampleFormControlSelect1">
                  <?php foreach ($pRep->fetchPlaces() as $place): ?>
                    <?php if ($place['place_name'] == htmlspecialchars($service->byId(intval($_GET['id']))['place_name'])): ?>
                          <option selected="true">
                    <?php else: ?>
                          <option>
                    <?php endif; ?>
                    <?= htmlspecialchars($place['place_name']) ?>
                      </option>
                  <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="text">Рецепт</label>
                <textarea name="recepie" class="form-control"
                          id="exampleFormControlTextarea1" rows="3">
                    <?= htmlspecialchars($service->byId(intval($_GET['id']))['recepie']) ?>
                </textarea>
            </div>

            <div class="create-article-submit">
                <button type="submit" class="btn btn-primary mb-2 "> Изменить
                    рецепт
                </button>
            </div>
            <input type="hidden" name="id_item" value="<?= $_GET['id'] ?>"/>
        </form>
    </div>

</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/footer.php'; ?>

