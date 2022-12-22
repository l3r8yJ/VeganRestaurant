<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/index-init.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/user-init.php'; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/view/header.php'; ?>
<?php if (isset($_SESSION['USER_ID'])): ?>
    <form action="/" method="get">
        <div id="filter-container">
            <label>Введите название блюда</label>
            <input name="name" class="input-item" type="text"
                   placeholder="Название"></br>
            <label>Введите стоймость</label>
            <input name="price" class="input-item" type="text"
                   placeholder="Стоймость"></br>
            <button type="submit" class="btn btn-warning" id="apply-filter-btn"
                    name="sub">Применить
                фильтр
            </button>
            <button id="clear-filter-btn" class="btn btn-warning" href="">
                Очистить
                фильтр
            </button>
        </div>
    </form>
    <div class="create-card-btn-container">
        <a href="/view/create-view.php">
            <button class="btn btn-success">
                Добавить новый рецепт
            </button>
        </a>
    </div>
  <?php foreach ($items as $item): ?>
        <div class="card-container card">
            <div class="card-top-row-container">
                <div class="card-top-row-item">
                  <?= htmlspecialchars($item['name']) ?>
                </div>
                <div class="card-top-row-item">
                  <?= $item['place_name'] ?>
                </div>
                <div class="card-top-row-item" id="price-card">
                  <?= htmlspecialchars($item['price']) ?> ₽
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div>
                            <img src="/view/images/<?= $item['picture'] ?>"
                                 alt=""
                                 class="card-img-container">
                        </div>
                    </div>
                    <div class="col">
                        <div class="recepie-text-container">
                          <?= htmlspecialchars($item['recepie']) ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-edit-container">
                <a href="/view/change-picture-view.php?id=<?= $item['id_item'] ?>">
                    <button class="btn btn-warning crud-btn">
                        Изменить фото
                    </button>
                </a>
                <a href="/view/edit-view.php?id=<?= $item['id_item'] ?>">
                    <button class="btn btn-warning crud-btn">
                        Редактировать
                    </button>
                </a>
                <a href="/delete.php?id=<?= $item['id_item'] ?>">
                    <button class="btn btn-danger crud-btn">
                        Удалить
                    </button>
                </a>
            </div>
        </div>
  <?php endforeach ?>
<?php endif; ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/view/footer.php" ?>
