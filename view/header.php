<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Кашка овсяная с бананом «Nemoloko», 200мл - купить в Москве в
        магазине Сойка</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous">
    <link rel="stylesheet" href="/view/style.css">
</head>
<body>
<header>
    <div class="container text-center">
        <div class="row">
            <div class="col-2">
                <div class="header-logo-container">
                    <a href="/"><img src="/view/images/soyka-logo-11-22.png" alt=""
                                    id="header-logo"></a>
                </div>
              <?php if (isset($_SESSION['USER_ID'])): ?>
                  <div class="user-preview-container">
                      <div class="username-container">
                        <?= $userRouter->handle('current')['fio'] ?>
                      </div>
                      <div class="logout-btn-container">
                          <a href="/logout.php">
                              <button class="btn btn-warning">
                                  Выйти
                              </button>
                          </a>
                      </div>
                  </div>
              <?php endif ?>
            </div>
            <div class="col-10">
                <div class="top-header-row">

                  <span class="top-header-icon-item">
                    <a href="">
                      <img src="/view/images/i-phone.png" alt="" class="header-icon"
                           id="i-phone-img">
                        +7 (499) 197-00-17
                    </a>
                  </span>

                    <span class="top-header-icon-item">
                    <a href="">
                      <img src="/view/images/i-label-close.png" alt=""
                           class="header-icon" id="i-label-close-img">
                        9-21
                    </a>
                  </span>

                    <span class="top-header-icon-item">
                    <a href="">
                      <img src="/view/images/i-mail.png" alt="" class="header-icon"
                           id="i-mail-img">
                      torg@soyka.ru
                    </a>
                  </span>

                    <span class="top-header-icon-item">
                    <a href="">
                      <img src="/view/images/i-cart.png" alt="" class="header-icon"
                           id="i-cart-img">
                     <sup>0</sup>
                     <span>0.00</span>
                    </a>
                  </span>

                    <span class="top-header-icon-item">
                    <a href="">
                      <img src="/view/images/i-favorite.png" alt=""
                           class="header-icon" id="i-favorite-img">
                     <sup>0</sup>
                     <span>0.00</span>
                    </a>
                    </span>
                  <?php if (!isset($_SESSION['USER_ID'])): ?>
                    <span class="top-header-icon-item" id="key-item">
                        <a href="/view/auth-view.php">
                            <img src="/view/images/i-key.png" alt="" class="header-icon"
                                 id="i-key-img">
                        </a>
                  </span>
                  <?php endif ?>

                    <span class="top-header-icon-item" id="lk-item">
                    <a href="">
                      <img src="/view/images/lk-icon.png" alt="" class="header-icon"
                           id="lk-icon-img">
                    </a>
                  </span>
                </div>
                <div class="bottom-header-row">
                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-vegan.png" alt=""
                             class="bottom-menu-img"></br>
                          <span>веган</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-fast.png" alt=""
                             class="bottom-menu-img"></br>
                          <span>пост</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-raw-food-eater.png" alt=""
                             class="bottom-menu-img"></br>
                          <span>сыроед</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-lose-weight.png" alt=""
                             class="bottom-menu-img"></br>
                          <span>похудеть</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-to-gain-weight.png" alt=""
                             class="bottom-menu-img"></br>
                          <span>набрать вес</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-energy.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>энергия</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-for-sleep.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>для сна</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-mood.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>настроение</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-without-soy.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>без сои</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-gluten-free.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>без глютена</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-sugarless.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>без сахара</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-discounts.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>скидки</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-novelty.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>новинки</span>
                      </a>
                    </span>

                    <span class="bottom-header-menu-item">
                      <a href="">
                        <img src="/view/images/i-bestsellers.png" alt=""
                             class="bottom-menu-img"><br>
                        <span>хиты продаж</span>
                      </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <svg version="1.1" id="Capa_1"
                         xmlns="https://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" width="459px" height="459px"
                         viewBox="0 0 459 459"
                         style="enable-background:new 0 0 459 459;"
                         xml:space="preserve">
                    <g id="menu">
                        <path fill="#fff"
                              d="M0,382.5h459v-51H0V382.5z M0,255h459v-51H0V255z M0,76.5v51h459v-51H0z"></path>
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
                        </li>
                        <li class="nav-item">
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
                    <input class="form-control me-2" type="search"
                           placeholder="Более 1500 вегетарианских продуктов"
                           aria-label="Search">
                </form>
            </div>
        </nav>
    </div>
</header>
