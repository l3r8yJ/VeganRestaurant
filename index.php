<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/item_service.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/controller.php';

session_start();
$ pdo = new PDO('mysql:host=localhost;dbname=l2', 'root', 'root')
$service = new ItemService(new MenuItemRepository($pdo));
$controller = new Controller(new AuthService(new UserRepository($pdo)));
$items = $service->items();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кашка овсяная с бананом «Nemoloko», 200мл - купить в Москве в магазине Сойка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
        <div class="container text-center">
            <div class="row">
              <div class="col-2">
                <div class="header-logo-container">
                    <a href=""><img src="images/soyka-logo-11-22.png" alt="" id="header-logo"></a>
                </div>
              </div>
              <div class="col-10">
                <div class="top-header-row">

                  <span class="top-header-icon-item">
                    <a href="" >
                      <img src="images/i-phone.png" alt="" class="header-icon" id="i-phone-img">
                        +7 (499) 197-00-17
                    </a>
                  </span>

                  <span class="top-header-icon-item">
                    <a href="" >
                      <img src="images/i-label-close.png" alt="" class="header-icon" id="i-label-close-img">
                        9-21
                    </a>
                  </span>

                  <span class="top-header-icon-item">
                    <a href="" >
                      <img src="images/i-mail.png" alt="" class="header-icon" id="i-mail-img">
                      torg@soyka.ru
                    </a>
                  </span>

                  <span class="top-header-icon-item">
                    <a href="" >
                      <img src="images/i-cart.png" alt="" class="header-icon" id="i-cart-img">
                     <sup>0</sup>
                     <span>0.00</span>
                    </a>
                  </span>

                  <span class="top-header-icon-item">
                    <a href="" >
                      <img src="images/i-favorite.png" alt="" class="header-icon" id="i-favorite-img">
                     <sup>0</sup>
                     <span>0.00</span>
                    </a>
                  </span>

                  <span class="top-header-icon-item" id="key-item">
                    <a href="" >
                      <img src="images/i-key.png" alt="" class="header-icon" id="i-key-img">
                    </a>
                  </span>

                  <span class="top-header-icon-item" id="lk-item">
                    <a href="" >
                      <img src="images/lk-icon.png" alt="" class="header-icon" id="lk-icon-img">
                    </a>
                  </span>
                </div>
                <div class="bottom-header-row">
                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-vegan.png" alt="" class="bottom-menu-img"></br>
                        <span>веган</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-fast.png" alt="" class="bottom-menu-img"></br>
                        <span>пост</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-raw-food-eater.png" alt="" class="bottom-menu-img"></br>
                        <span>сыроед</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-lose-weight.png" alt="" class="bottom-menu-img"></br>
                        <span>похудеть</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-to-gain-weight.png" alt="" class="bottom-menu-img"></br>
                        <span>набрать вес</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-energy.png" alt="" class="bottom-menu-img"><br>
                        <span>энергия</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-for-sleep.png" alt="" class="bottom-menu-img"><br>
                        <span>для сна</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-mood.png" alt="" class="bottom-menu-img"><br>
                        <span>настроение</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-without-soy.png" alt="" class="bottom-menu-img"><br>
                        <span>без сои</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-gluten-free.png" alt="" class="bottom-menu-img"><br>
                        <span>без глютена</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-sugarless.png" alt="" class="bottom-menu-img"><br>
                        <span>без сахара</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-discounts.png" alt="" class="bottom-menu-img"><br>
                        <span>скидки</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-novelty.png" alt="" class="bottom-menu-img"><br>
                        <span>новинки</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="images/i-bestsellers.png" alt="" class="bottom-menu-img"><br>
                        <span>хиты продаж</span>
                      </a>
                    </span>



                </div>
              <div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-container">
            <nav class="navbar navbar-expand-lg bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">
                  <svg version="1.1" id="Capa_1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="459px" height="459px" viewBox="0 0 459 459" style="enable-background:new 0 0 459 459;" xml:space="preserve">
                    <g id="menu">
                        <path fill="#fff" d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z"></path>
                    </g>
                </svg>
                </a>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          КАТАЛОГ
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          О НАС
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          ДОСТАВКА
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          АКЦИИ
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          ОПТ
                        </div>
                      </a>
                    </li> <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          КОНТАКТЫ
                        </div>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <div class="navbar-item">
                          СОЙКАПЕДИЯ
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Более 1500 вегетарианских продуктов" aria-label="Search">
                </form>
              </div>
            </nav>
          </div>
    </header>
    <form action="/" method="get">
      <div id="filter-container">
       <label>Введите название блюда</label>
         <input name="name" class="input-item" type="text" placeholder="Название"></br>
         <label>Введите стоймость</label>
         <input name="price" class="input-item" type="text" placeholder="Стоймость"></br>
         <button type="submit" id="apply-filter-btn" name="sub">Применить фильтр</button>
          <button id="clear-filter-btn" href="" >Очистить фильтр</button>
      </div>
    </form>
    <?if(count($items)):?>
      <?php foreach ($items as $item):?>
        <div class="card item-container">
          <div class="name">Название: <?=$item['name']?></div>
          <div class="price">Цена: <?=$item['price']?></div>
          <div class="recepie">Рецепт:<?=$item['recepie']?></div>
          <div class="place">Торговая точка:<?=$item['place_name']?></div>
          <img src="images/<?=$item['picture']?>" class="picture"/>
        </div>
      <?php endforeach?>
    <?endif?>
    <footer>
      <div class="footer-container">
        <div class="container text-center">
          <div class="row">
            <div class="col-3">
              <a href="">
                <img src="images/footer-logo.png" alt="" id="footer-logo-img">
              </a>
              <div id="phone-footer">
                <a href="">
                  +7(499)197-00-17
                </a>
              </div>
              <div id="footer-address">
                <a href="">
                  Магазин на ул. Ирины Левченко 6
                  <br>
                  9:00 - 21:00
                </a>
              </div>
            </div>
            <div class="col-1">
              <div class="footer-menu-list">
                <ul>
                  <li>
                    <a href="" class="footer-menu-item">
                      Акции
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Бренды
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Вакансии
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Доставка
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Каталог
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Контакты
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Новости
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      О нас
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Опт
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Отзывы
                    </a>
                  </li>
                </ul>
              </div>
              
            </div>
            <div class="col-3">
              <div class="footer-menu-list">
                <ul>
                  <li>
                    <a href="" class="footer-menu-item">
                      Личный кабинет
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Партнерская программа
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Политика конфиденциальности
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Пользовательское соглашение
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Рецепты
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Сойкапедия
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Статьи
                    </a>
                  </li>
                  <li>
                    <a href="" class="footer-menu-item">
                      Мир Сойки
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-2">
              <div class="footer-menu-list">
                  <ul>
                    <li>
                      <a href="" class="footer-menu-item">
                        Веган
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Пост
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Сыроед
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Похудеть & детокс
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Набрать вес
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Энергия
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Для сна & релакс
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Настроение
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Без сои
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-itemv">
                        Без глютена
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Без сахара
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Скидки
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Новинки
                      </a>
                    </li>
                    <li>
                      <a href="" class="footer-menu-item">
                        Хиты продаж
                      </a>
                    </li>
                  </ul>
              </div>
            </div>
            <div class="col-3">
              <div class="payment-title">
                Принимаем к оплате
              </div>
              <div class="methods-payment-container">
                  <div class="payment-row">
                    <span>
                      <img src="images/visa.png" alt="" id="visa-payment-img">
                    </span>
                    <span>
                      <img src="images/mastercard.png" alt="" id="mastercard-payment-img">
                    </span>
                    <span>
                      <img src="images/paykeeper.png" alt="" id="paykeeper-payment-img">
                    </span>
                  </div>
                  <div class="payment-row">
                    <span>
                      <img src="images/cash.png" alt="" id="cash-payment-img">
                    </span>
                    <span>
                      <img src="images/sberbank.png" alt="" id="sberbank-payment-img">
                    </span>
                    <span>
                      <img src="images/yandex.png" alt="" id="yandex-payment-img">
                    </span>
                    <span>
                      <img src="images/tinkoff.png" alt="" id="tinkoff-payment-img">
                    </span>
                  </div>
              </div>
              <div class="social-media-title">
                Мы в социальных сетях
              </div>
              <div class="social-media-item-container">
               <span>
                <a href="">
                  <img src="images/vk-icon.png" alt="" class="social-item-img">
                </a>
               </span>
               <span>
                <a href="">
                  <img src="images/telegram-icon.png" alt="" class="social-item-img">
                </a>
               </span>
               <span>
                <a href="">
                  <img src="images/youtube.png" alt="" class="social-item-img">
                </a>
               </span>
              </div>
           
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col-8">
              <div class="contacts-info">
                <a href="" class="contacts-info-link">
                  ИП Богомолова М.В., 304770000617810, ИНН 773410441897
                  <br>
                  РФ, г. Москва, ул Ирины Левченко, д.6
                </a>
                , Все права защищены ©, 2022.
            </div>
            </div>
            <div class="col-4">
              <div id="design-tag" >
                <a href="" id="design-tag-link">
                  design by loliiilol studio
                </a>
              </div>
            </div>
          </div>
        </div>
       
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>