<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
/* @var $segments \app\models\Segment*/

//$this->title = 'My Yii Application';
?>
<div class="popup-bg"></div>
<div class="globalform wrap headerpopup">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="check-wrap">
            <div class="check scroll">
                <div class="title">выберите ритейлеров, на переговоры с которыми вы хотели бы попасть</div>
                <div class="tabs">

                    <?=Html::ul($segments, [
                            'class' => 'tabs__caption check__caption-items',
                            'item' => function($item, $index){
                                return "<li class='check__caption-item item--{$item->icon}'><span>{$item->name}</span></li>";
                            }
                    ])?>

                    <div class="double-arrows">
                        <div class="double-arrows--wrap"></div>
                    </div>

                    <div class="check__content-items checkbox">
                        <?php foreach ($segments as $segment) : ?>
                        <div class="tabs__content check__content-item">
                            <?php foreach ($segment->companies as $company) : ?>
                            <div class="checkbox__item">
                                <?=Html::checkbox("company_{$company->id}", false, ['id' => "s_{$segment->id}_c_{$company->id}",])?>
                                <?=Html::label("{$company->name}<a href='{$company->site}' class='adress'>{$company->site}</a>", "s_{$segment->id}_c_{$company->id}")?>
                            </div>
                            <?php endforeach;?>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <button class="btn btn--transparent none-desctop">Cохранить список</button>
            </div>
        </div>
        <div class="choosen">
            <div class="title">Выбранные</div>
            <ul class="choosen__items scroll">
                <li class="choosen__item">Familia<span class="cross"></span></li>
                <li class="choosen__item">Обувь для всей семьи<span class="cross"></span></li>
                <li class="choosen__item">Ralf Ringer<span class="cross"></span></li>
                <li class="choosen__item">Jack Wolfskin<span class="cross"></span></li>
                <li class="choosen__item">34PLAY<span class="cross"></span></li>
                <li class="choosen__item">Incanto<span class="cross"></span></li>
                <li class="choosen__item">Алеф<span class="cross"></span></li>
                <li class="choosen__item">Griol<span class="cross"></span></li>
                <li class="choosen__item">АЛФАВИТ<span class="cross"></span></li>
                <li class="choosen__item">Zenden<span class="cross"></span></li>
            </ul>
            <div class="double-arrows">
                <div class="double-arrows--wrap"></div>
            </div>
            <button class="btn btn--transparent none-mob">Cохранить список</button>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup1">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__name">Ольга Семенова</div>
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                </div>
                <div class="popup-review__date">
                    <svg class="calendar">
                        <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                    </svg>
                    <p> <span>Дата посещения: </span>05.06.2018</p>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup2">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup3">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup4">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup5">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="globalform wrap scroll reviewspopup reviewspopup6">
    <div class="popup-close">

        Закрыть окно
        <svg class="close-svg">
            <use xlink:href="img/icons/close.svg#close-svg"></use>
        </svg>
    </div>
    <div class="wrap">
        <div class="popup-review scroll">
            <div class="popup-review__top">
                <div class="popup-review__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                <div class="popup-review__descr">
                    <div class="popup-review__name">Ольга Семенова</div>
                    <div class="reviews-item__company">Название компании</div>
                    <div class="reviews-item__position">Должность</div>
                    <div class="popup-review__date">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <p> <span>Дата посещения: </span>05.06.2018</p>
                    </div>
                </div>
            </div>
            <div class="popup-review__bottom">
                <div class="tabs">
                    <ul class="tabs__caption popup-review__caption">
                        <li class="review-item active"> <span>Видео</span></li>
                        <li class="review-item"> <span>Текст</span></li>
                    </ul>
                    <div class="tabs__content popup-review__content active">
                        <div class="popup-review__video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/8leorFMy0rg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="tabs__content popup-review__content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header">
    <div class="header-overlay">
        <div class="wrap">
            <div class="block__left">
                <div class="header-overlay">
                    <div class="logo-wrap">
                        <div class="logo">
                            <svg class="logo-color">
                                <use xlink:href="img/logo.svg#logo"> </use>
                            </svg>
                        </div>
                    </div>
                    <div class="header__dates">
                        <ul class="date__items">
                            <li class="dates__item none-mob">5.06 - 6.06</li>
                            <li class="dates__item">5.09 - 6.09</li>
                            <li class="dates__item active">
                                <div class="arrow arrow-top"></div>
                                <svg class="calendar">
                                    <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                                </svg><span>6.12</span>
                                <div class="arrow arrow-bottom"></div>
                            </li>
                            <li class="dates__item">31.01</li>
                            <li class="dates__item none-mob">20.02</li>
                            <li class="dates__item none-mob">4.04</li>
                            <li class="dates__item none-mob">6.06</li>
                            <li class="dates__item none-mob">4.07</li>
                            <li class="dates__item none-mob">5.09</li>
                            <li class="dates__item none-mob">3.10</li>
                            <li class="dates__item none-mob">7.11</li>
                        </ul>
                    </div>
                    <div class="header__main">
                        <div class="header__title">
                            <div class="subtitle">Центр переговоров</div>
                            <div class="lines"></div>
                            <div class="main-title">Retailer Недвижимость</div>
                        </div>
                        <div class="header__info">
                            <div class="header__">
                                <p class="title">Event Hall Даниловский</p>
                                <p>Москва, ул. Дубининская, д.71, стр.5</p>
                            </div>
                            <svg class="marker">
                                <use xlink:href="img/icons/marker.svg#marker"> </use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block__right registration">
                <div class="registration__title"><a href="#" class="title">
                        <svg class="register">
                            <use xlink:href="img/icons/register.svg#register"> </use>
                        </svg>Регистрация на переговоры</a><a href="#" class="login">Вход</a></div>
                <div class="registration__form">
                    <form action="#">
                        <div class="form-line">
                            <label for="name">Имя</label>
                            <input type="text" name="name" id="name">
                        </div>
                        <div class="tabs">
                            <div class="form-line">
                                <ul class="tabs__caption">
                                    <li class="btn btn--tabs active">Ищу площади</li>
                                    <li class="btn btn--tabs">Предлагаю площади</li>
                                </ul>
                            </div>
                            <div class="form-line">
                                <label for="tel">Номер</label>
                                <input type="tel" name="tel" id="tel">
                            </div>
                            <div class="form-line">
                                <label for="name">Email</label>
                                <input type="email" name="email" id="email">
                            </div>
                            <div class="form-line header__choosen">
                                <ul class="choosen__items scroll">
                                    <li class="choosen__item">Familia<span class="cross"></span></li>
                                    <li class="choosen__item">Обувь для всей семьи<span class="cross"></span></li>
                                    <li class="choosen__item">Ralf Ringer<span class="cross"></span></li>
                                    <li class="choosen__item">Jack Wolfskin<span class="cross"></span></li>
                                    <li class="choosen__item">34PLAY<span class="cross"></span></li>
                                    <li class="choosen__item">Incanto<span class="cross"></span></li>
                                    <li class="choosen__item">Алеф<span class="cross"></span></li>
                                </ul>
                                <div class="double-arrows">
                                    <div class="double-arrows--wrap"></div>
                                </div>
                            </div>
                            <div class="form-line">
                                <div class="tabs__content active"> <a href="#" class="btn btn--transparent header-popup">Выбрать свой список ритейлеров</a></div>
                                <div class="tabs__content"> <a href="#" class="btn btn--transparent">Выбрать операторов торговых площадей</a></div>
                            </div>
                            <div class="form-line">
                                <div class="btn btn--black">Зарегистрироваться</div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="quick-date">
    <div class="wrap">
        <div class="quick-date__wrap">
            <div class="quick-date__main">
                <div class="quick-date__title quick-date__title--bottom">Розничные сети </div>
                <div class="quick-date__text quick-date__text--bottom"><span>— </span>  находят подходящие торговые площади</div>
                <div class="main-title__wrap">
                    <div class="main-title__wrap480">
                        <div class="main-title">

                            Переговоры по торговой недвижимости в формате <span>быстрых </span> свиданий
                        </div>
                    </div>
                </div>
                <div class="quick-date__title quick-date__title--top">Операторы торговых площадей </div>
                <div class="quick-date__text"> <span>— </span>  находят арендаторов и покупателей</div>
            </div>
        </div>
        <div class="quick-date__steps">
            <ul>
                <li> <span class="quick-date__number">01</span>
                    <div class="quick-date__descr">До 28 переговоров за день с партнерами со всей России</div>
                </li>
                <li> <span class="quick-date__number">02</span>
                    <div class="quick-date__descr">Участвуют люди, принимающие решения</div>
                </li>
                <li> <span class="quick-date__number">03</span>
                    <div class="quick-date__descr">Заранее спланированные встречи с подходящими партнерами </div>
                </li>
            </ul>
        </div>
        <div class="quick-date__btn"><a href="#" class="btn btn--transparent btn--grey">
                <svg class="archive">
                    <use xlink:href="img/icons/archive.svg#archive"> </use>
                </svg><span>Как это было раньше</span></a></div>
    </div>
</section>
<section class="how">
    <div class="wrap">
        <div class="main-title">Как это работает?</div>
        <div class="how__wrap">
            <div class="how__block">
                <div class="how__descr">
                    <div class="how__title">Ищете торговые площади?</div>
                    <ul class="how_list">
                        <li>Опишите свои требования к площадям</li>
                        <li>Подберем подходящие объекты</li>
                        <li>Организуем переговоры</li>
                    </ul>
                </div>
                <div class="how__pic">
                    <svg class="ret">
                        <use xlink:href="img/icons/ret.svg#ret"> </use>
                    </svg>
                </div>
                <div class="how__btn"><a href="#" class="btn btn--white">Найти операторов торговых площадей</a></div>
            </div>
            <div class="how__center">
                <div class="how__line how__line--left"></div>
                <div class="how__line how__line--right"></div>
                <div class="logo">
                    <svg class="logo-white">
                        <use xlink:href="img/logo_white.svg#logo_white"></use>
                    </svg>
                </div>
            </div>
            <div class="how__block how__block--right">
                <div class="how__descr">
                    <div class="how__title">Есть торговые площади?</div>
                    <ul class="how_list">
                        <li>Опишите пишите свои объекты</li>
                        <li>Подберем торговые сети, которым они подходят</li>
                        <li>Организуем переговоры</li>
                    </ul>
                </div>
                <div class="how__pic">
                    <svg class="dev">
                        <use xlink:href="img/icons/dev.svg#dev"> </use>
                    </svg>
                </div>
                <div class="how__btn"><a href="#" class="btn btn--white">Найти ритейлеров</a></div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="wrap">
        <div class="main-title">Недвижимость у нас ищут</div>
        <div class="partners__wrap partners-slider">
            <div class="partners__items">
                <div class="partners__item-wrap">
                    <div class="partners__item"><img src="img/partners/logo-pyatyorochka.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-dns.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-sportmaster.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-magnit.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-letual.png" alt="partners"></div>
                </div>
            </div>
            <div class="partners__items">
                <div class="partners__item-wrap">
                    <div class="partners__item"><img src="img/partners/logo-apteka.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-auchan.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-azbuka-vkusa.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-citilink.gif" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-detskiy-mir.png" alt="partners"></div>
                </div>
            </div>
            <div class="partners__items">
                <div class="partners__item-wrap">
                    <div class="partners__item"><img src="img/partners/logo-evroset.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-gj.jpg" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-lenta.png" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-okey.jpg" alt="partners"></div>
                    <div class="partners__item"><img src="img/partners/logo-riv.png" alt="partners"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="way">
    <div class="wrap">
        <div class="main-title">

            Самый <span>удобный способ </span>решать ваши задачи
        </div>
        <div class="way__wrap">
            <div class="way__item">
                <div class="way__logo">
                    <svg class="clock">
                        <use xlink:href="img/icons/clock.svg#clock"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Экономия времени</div>
                    <svg class="clock--mini">
                        <use xlink:href="img/icons/clock.svg#clock"></use>
                    </svg>
                    <div class="way__text"><span>За один день </span>вы проводите переговоры, на организацию которых в обычных условиях ушло бы <span>не меньше месяца.</span></div>
                </div>
            </div>
            <div class="way__item">
                <div class="way__logo">
                    <svg class="contact">
                        <use xlink:href="img/icons/contact.svg#contact"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Уникальные контакты</div>
                    <svg class="contact--mini">
                        <use xlink:href="img/icons/contact.svg#contact"></use>
                    </svg>
                    <div class="way__text">На одной площадке в один день собираются <span>все нужные люди </span>из столицы и регионов. </div>
                </div>
            </div>
            <div class="way__item">
                <div class="way__logo">
                    <svg class="mutual_interest">
                        <use xlink:href="img/icons/mutual_interest.svg#mutual_interest"></use>
                    </svg>
                </div>
                <div class="way__descr">
                    <div class="way__title">Взаимный интерес</div>
                    <svg class="mutual_interest--mini">
                        <use xlink:href="img/icons/mutual_interest.svg#mutual_interest"></use>
                    </svg>
                    <div class="way__text">Сюда приходят только люди <span>с активными потребностями: </span>в развитии или арендаторах.</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="center">
    <div class="center__video">
        <video poster="img/center-bg.png" autoplay loop muted>
            <!--source(src='demo.mp4', type='video/mp4')-->
            <source src="video/retailer.webm" type="video/webm">
            <!-- source(src='demo.ogv', type='video/ogg')-->
            <object>
                <embed src="video/retailer.webm" type="application/x-shockwave-flash" allowfullscreen="false" allowscriptaccess="always">
            </object>Формат не поддерживается
        </video>
    </div>
    <div class="header-overlay">
        <div class="wrap">
            <div class="main-title none-mob">Ближайший Центр переговоров</div>
            <div class="main-title none-desctop">Программа центра переговоров</div>
            <div class="center__wrap">
                <div class="center__info">
                    <div class="center__left">
                        <svg class="marker marker--dark">
                            <use xlink:href="img/icons/marker.svg#marker"> </use>
                        </svg>
                        <div class="center__name">Event Hall Даниловский </div>
                        <div class="lines"></div>
                        <div class="center__adress">Москва, ул. Дубининская, д.71, стр.5</div>
                    </div>
                    <div class="center__right">
                        <svg class="calendar">
                            <use xlink:href="img/icons/calendar.svg#calendar"> </use>
                        </svg>
                        <div class="center__date"> <span>6 </span><span class="desctop-untill320">декабря </span><span class="mob320">.12 </span>2018</div>
                        <div class="lines"></div>
                        <div class="center__time"> <span>9.</span>00 <span>- 17.</span>00</div>
                    </div>
                </div>
                <div class="center__boxes">
                    <div class="center-box">
                        <div class="center-box__wrap">
                            <div class="center-box__logo">
                                <svg class="handshake">
                                    <use xlink:href="img/icons/handshake.svg#handshake"></use>
                                </svg>
                            </div>
                            <div class="center-box__title">Переговоры</div>
                            <div class="center-box__descr">Заранее спланированные встречи участников по 15 минут.</div>
                        </div>
                    </div>
                    <div class="center-box">
                        <div class="center-box__wrap">
                            <div class="center-box__logo">
                                <svg class="congress">
                                    <use xlink:href="img/icons/congress.svg#congress"></use>
                                </svg>
                            </div>
                            <div class="center-box__title">Деловая программа</div>
                            <div class="center-box__descr">Выступления спикеров-практиков, готовых делиться реальными кейсами из сферы торговой недвижимости.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="reviews">
    <div>
        <div class="main-title">Отзывы участников</div>
        <div class="reviews__wrap">
            <div class="reviews__slider">
                <div class="reviews-item__wrap reviews-popup1">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
                <div class="reviews-item__wrap reviews-popup2">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/man.jpg" alt="man"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
                <div class="reviews-item__wrap reviews-popup3">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
                <div class="reviews-item__wrap reviews-popup4">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
                <div class="reviews-item__wrap reviews-popup5">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
                <div class="reviews-item__wrap reviews-popup6">
                    <div class="reviews-item">
                        <div class="reviews-item__name">Ольга Семенова</div>
                        <div class="reviews-item__foto"><img src="img/reviews/woman.jpg" alt="woman"></div>
                        <div class="reviews-item__company">Название компании</div>
                        <div class="reviews-item__position">Должность</div>
                        <div class="reviews-item__review">
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div><a class="reviews-item__more"><span>Читать целиком</span></a>
                        <div class="reviews-item__video">
                            <svg class="video">
                                <use xlink:href="img/icons/video.svg#video"> </use>
                            </svg><span>Видеоотзыв</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="about__wrap">
        <div class="about-slider">
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-1.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-2.jpg" alt="about">
            </div>
            <div class="about-slider__item">
                <div class="overlay"></div><img src="img/about/about-3.jpg" alt="about">
            </div>
        </div>
        <div class="wrap-center">
            <div class="wrap">
                <div class="about-info">
                    <div class="logo-wrap">
                        <div class="logo">
                            <svg class="logo-color">
                                <use xlink:href="img/logo.svg#logo"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="about-text">
                        <p>RETAILER – один из ключевых поставщиков информации о потребительском рынке. История компании началась в 2003 году с запуска сообщества профессионалов розничной торговли RETAILER.ru. Пятнадцать лет мы помогаем ритейлерам строить розницу будущего. Ежедневно наши данные используют в работе более 20 000 человек. </p>
                        <p> <span>Наши клиенты – наши партнеры. </span>Их тысячи, а география их работы – вся планета. Среди них розничные компании, поставщики решений для ритейла, поставщики товаров народного потребления, участники рынка торговой недвижимости, банки и страховые компании. </p>
                        <p> <span>

                    С 2014 года раз в квартал компания проводит <span class="main-span">Центры переговоров </span>по торговой недвижимости. </span></p>
                    </div><a href="#" class="btn btn--transparent">Перейти в раздел о нас</a>
                </div>
            </div>
        </div>
    </div>
</section>

