<!-- header -->
<?php get_header(); ?>
 

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWCQWMV" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

<!-- получение метки -->
<?php  
    $utm = $_GET['utm_term'];   
     if($utm == 'facebook') {    $multiTitle = 'всем пользователям Facebook';   }  
     elseif($utm == 'vkontakte') {    $multiTitle = ' всем пользователям Вконтакте ';  }  
     elseif($utm == 'ok') {    $multiTitle = ' всем пользователям Одноклассников ';  }  
     else{    $multiTitle = 'на твердотопливные котлы';  } 
     ?> 




    
    <div id="kalkulator">
        <div class="stickerCall">
            <div class="circlephone" style="transform-origin: center;">
            </div>
            <div class="circle-fill" style="transform-origin: center;">
            </div>
            <div class="img-circle" style="transform-origin: center;">
                <div class="img-circleblock" style="transform-origin: center;">
                </div>
            </div>
        </div>
        <!--    <img src="<?php bloginfo('template_url') ?>/img/sticker/stickerCall.png" alt="" class="stickerCall">-->
        <div class="callWind">
            <div class="close">
                <img src="<?php bloginfo('template_url') ?>/img/sticker/whiteCross.png" alt="">
            </div>
            <div class="title">
                <img src="<?php bloginfo('template_url') ?>/img/sticker/callTrubka.png" alt="">
                <p>
                    Мы вам перезвоним!
                </p>
            </div>
            <form action="" method="post" id="callForm">
                <input type="text" name="name" placeholder="Ваше имя">
                <input type="text" name="phone" placeholder="+380(**)***-**-**" required>
                <input type="hidden" name="type" value="Заказ звонка">
                <input type="submit" value="Заказать звонок">
                 <input type="text" name="utm" id="utm" value="<?php echo $utm; ?>" style="display: none">
            </form>
            <div class="ourself">
                Или перезвоните нам сами
                <a href="tel:<?php echo get_option('site_telephone'); ?>"><?php echo get_option('site_telephone'); ?></a>
            </div>
        </div>
        <form id="kalkulatorForm">
            <div class="screen clearfix" id="screen1">                
                <div class="bx-slider" id="bx-slider">
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha1.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha2.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha3.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha4.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha1.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha2.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha3.jpg" alt="">
                    </div>
                    <div class="slider-box">
                        <img src="<?php bloginfo('template_url') ?>/img/sha4.jpg" alt="">
                    </div>

                </div>

                <div class="main-content">
                    <div class="top-header">
                        <div class="top-header-content">
                            <p>Ответьте на 6 вопросов и получите скидку до
                                <span><?php echo get_option('theme_contacttext'); ?></span>!</p>
                            <p class="top-header-content-2">Вы экономите время менеджера - мы экономим Ваши деньги!</p>
                        </div>
                        <div class="top-header-button">
                            <p class="showNext">Подробнее</p>
                        </div>
                    </div>
                    <div class="main-content-header clearfix">
                        <p><?php echo get_option('theme_contacttext2'); ?>
                            <span>
                                <a href="tel:<?php echo get_option('site_telephone'); ?>" class="header-phone"><?php echo get_option('site_telephone'); ?></a>
                            </span>
                        </p>
                    </div>
                    <div class="main-content-body">
                        <p class="main-content-paragraph"><?php echo get_option('theme_question'); ?></p>
                        <p class="main-content-paragraph-2"><?php echo get_option('theme_header'); ?>
                        </p>
                        <p class="main-content-paragraph-2"><?php echo get_option('theme_header2'); ?></p>
                        <div class="container">
                            <div class="startQuest">
                                <div class="pulse"></div>
                                <p>
                                    Рассчитать стоимость
                                </p>
                            </div>
                            <p class="steps">
                                Всего за 6 простых шагов
                            </p>
                            <p class="steps center-step">
                                Сегодня выполнено
                                <span>119</span> заявок
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <!-- <div class="tabletview">
                <div class="container">
                    <header>
                        <a href="tel:+380733015883" class="tel">+38 (073) 030 39 17</a>
                        <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""> ЛОГОТИА-->
            <!-- Шкафы-купе в Киеве и Киевской области
                        <a href="tel:+380733015883" class="mobtel" style="display: none">+38 (073) 030 39 17</a>
                    </header>
                    <div class="leftSide">
                        <p class="question">Ищете шкаф-купе по выгодной цене?</p><h1>Найдём лучшие цены на <span>шкафы-купе!</span> Стоимость напрямую с фабрик!</h1>                    </div>
                </div>
                <div class="rightSide">
                    <div class="sticker">
                        <p class="title">Ответьте на 6 вопросов и получите скидку до 10%!</p>
                        <p class="description">Вы экономите время менеджера - мы экономим Ваши деньги!</p>
                    </div>
                </div>
                <div class="container">
                    <div class="startQuest">
                        <div class="pulse"></div>
                        <p>
                            Рассчитать стоимость
                        </p> 
                    </div>
                    <p class="steps">
                        Всего за 6 простых шагов
                    </p>
                </div>
                <div class="carousel">
                    <div class="owl-carousel">
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/1.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/2.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/3.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/4.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/5.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/6.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/7.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/8.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/9.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/10.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/11.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/12.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/13.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/14.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/15.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/16.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/17.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/18.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/19.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/20.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/21.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/22.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/23.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/24.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/25.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/26.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/27.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/28.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/29.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/30.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/31.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/32.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/33.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/34.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/35.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/36.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/37.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/38.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/39.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/40.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/41.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/42.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/43.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/44.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/45.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/46.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/47.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/48.jpg" alt="">
                        </div>
                        <div>
                            <img src="<?php bloginfo('template_url') ?>/img/slider/49.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="zayKolvo">
                        <p class="unp">
                            Modern House,  УНП: 190925145
                        </p> 
                        <p>
                            сегодня обработано
                            <span>
                    119                    </span>
                            заявок
                        </p>
                        <p class="unpmob" style="display: none">
                            Modern House,  УНП: 190925145
                        </p> 
                    </div>
                </div>
            </div> -->

            <div class="screen" style="display: none" id="screen3">
                <div class="tabletview">
                    <div class="container">
                        <nav class="navigation helpernav">
                            <div class="container">
                                <p class="next mobNav" style="display: none">
                                    Следующий шаг
                                    <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <p class="prev mobNav" style="display: none">
                                    <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                </p>
                                <!-- <p class="prev">
                                    <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                </p> -->
                                <!-- <p class="next">
                                    Следующий шаг
                                    <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p> -->
                                <ul class="steps">
                                       
                                    <li class="active" id="step2">
                                        <div>1 шаг</div>
                                        <p>Комната</p>
                                    </li>
                                    <li id="step3">
                                        <div>2 шаг</div>
                                        <p>Тип</p>
                                    </li>
                                    <li id="step4">
                                            <div>3 шаг</div>
                                        <p>Размер</p>
                                    </li>
                                    <li id="step5">
                                            <div>4 шаг</div>
                                        <p>Наполнение</p>
                                    </li>
                                    <li id="step6">
                                            <div>5 шаг</div>
                                        <p>Вид</p>
                                    </li>
                                    <li id="step7">
                                            <div>6 шаг</div>
                                        <p>Условия</p>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <div class="plashka">
                            <p class="question">
                                Куда вы хотите поставить шкаф-купе?
                            </p>
                            <div class="quest">
                                <ul>
                                    <li class="imgScale">
                                        <label for="prihozhaya">
                                            <p class="imgBlock prihozhaya"></p>
                                            <p>
                                                <input type="radio" name="shkafPlace" id="prihozhaya" value="В прихожую" checked> Прихожая
                                            </p>
                                        </label>
                                    </li>
                                    <li lass="imgScale">
                                        <label for="gostinaya">
                                            <p class="imgBlock gostinaya"></p>
                                            <p>
                                                <input type="radio" name="shkafPlace" id="gostinaya" value="В гостиную"> Гостиная
                                            </p>
                                        </label>
                                    </li>
                                    <li lass="imgScale">
                                        <label for="spalnya">
                                            <p class="imgBlock spalnya"></p>
                                            <p>
                                                <input type="radio" name="shkafPlace" id="spalnya" value="В спальню"> Спальня
                                            </p>
                                        </label>
                                    </li>
                                    <li lass="imgScale">
                                        <label for="detskaya">
                                            <p class="imgBlock detskaya"></p>
                                            <p>
                                                <input type="radio" name="shkafPlace" id="detskaya" value="В детскую"> Детская
                                            </p>
                                        </label>
                                    </li>
                                    <li lass="imgScale">
                                        <label for="other">
                                            <p class="imgBlock other"></p>
                                            <p>
                                                <input type="radio" name="shkafPlace" id="other" value="В другую комнату"> Другая комната
                                            </p>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <nav class="navigation">
                                <p class="next">
                                        Следующий шаг
                                        <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <div class="container">
                                        <p class="next mobNav" style="display: none">
                                            Следующий шаг
                                            <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                        </p>
                                        <p class="prev mobNav" style="display: none">
                                            <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                        </p>
                                </div>
                        </nav>
                    </div>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                </div>
            </div>
            <div class="screen" style="display: none" id="screen4">
                <div class="tabletView">
                    <nav class="navigation helpernav">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <!-- <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p> -->
                            <!-- <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <ul class="steps">
                                <li id="step2">
                                        <div>1 шаг</div>
                                        <p>Комната</p>
                                </li>
                                <li class="active" id="step3">
                                    <div>2 шаг</div>
                                    <p>Тип</p>
                                </li>
                                <li id="step4">
                                        <div>3 шаг</div>
                                        <p>Размер</p>
                                </li>
                                <li id="step5">
                                    <div>4 шаг</div>
                                    <p>Наполнение</p>
                                </li>
                                <li id="step6">
                                        <div>5 шаг</div>
                                        <p>Вид</p>
                                </li>
                                <li id="step7">
                                        <div>6 шаг</div>
                                        <p>Условия</p>
                                </li>
                            </ul>
                            
                        </div>
                        
                    </nav>
                    <div class="container">
                        <div class="plashka">
                            <p class="question">
                                Какой тип шкафа выберем?
                            </p>
                            <div class="quest">
                                <ul>
                                    <li>
                                        <label for="korpus">
                                            <p class="imgBlock korpus selected"></p>
                                            <a href="#" class="toolTip" title="Имеет полноценную единую конструкцию, состоящую из боковых и задних стенок, потолка, пола, перегородок, ящиков и раздвижных дверей (полноценный отдельно стоящий шкаф). Преимущества такого шкафа: возможность перемещать по квартире, например, при ремонте.">
                                                <input type="radio" name="shkafType" id="korpus" value="Корпусный" checked> Корпусный
                                                <!-- <p class="vopros">
                                                    ?
                                                </p> -->
                                            </a>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="vstroenny">
                                            <p class="imgBlock vstroenny"></p>
                                            <a href="#" class="toolTip" title='Шкаф, встроенный в нишу в Вашей квартире, либо "вмонтированный" в стену. Не имеющий задней, боковой стенки, дна, потолка или одного из вышеперечисленного. Преимущества такого шкафа: максимальное использование свободного пространства комнаты для хранения.'>
                                                <input type="radio" name="shkafType" id="vstroenny" value="Встроенный"> Встроенный
                                                <!-- <p class="vopros">
                                                    ?
                                                </p> -->
                                            </a>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="uglovoy">
                                            <p class="imgBlock uglovoy"></p>
                                            <a href="#" class="toolTip" title="Встроенный или же отдельно стоящий шкаф-купе, устанавливающийся в угол. Такой шкаф позволит Вам максимально использовать свободное пространство комнаты для хранения.">
                                                <input type="radio" name="shkafType" id="uglovoy" value="Угловой"> Угловой
                                                <!-- <p class="vopros">
                                                    ?
                                                </p> -->
                                            </a>
                                        </label>
                                    </li>
                                    <!--                                <li>-->
                                    <!--                                    <label for="radius">-->
                                    <!--                                        <p class="imgBlock radius"></p>-->
                                    <!--                                        <a href="#" class="toolTip"-->
                                    <!--                                           title="Шкаф, имеющий скруглённые формы, подразумевает, что изогнутые двери перемещаются по радиусным направляющим. Подразделяются на разные типы: комбинированный, вогнутый, выгнутый, асимметричный, круглый, овальный. Отличается оригинальностью дизайна, может быть незаменим при установке в небольшие помещения.">-->
                                    <!--                                            <input type="radio" name="shkafType" id="radius" value="Радиусный">-->
                                    <!--                                            Радиусный-->
                                    <!--                                            <p class="vopros">-->
                                    <!--                                                ?-->
                                    <!--                                            </p>-->
                                    <!--                                        </a>-->
                                    <!--                                    </label>-->
                                    <!--                                </li>-->
                                </ul>
                            </div>
                            <!-- <div class="dontKnow">
                                <label for="dontKnow">
                                    <p class="pseudoBtn">
                                        Пока не знаю
                                    </p>
                                    <p class="hidden">
                                        <input type="radio" name="shkafType" id="dontKnow" value="Не выбрано">
                                    </p>
                                </label>
                            </div> -->
                        </div>
                        <nav class="navigation">
                            <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <div class="container">
                                <p class="next mobNav" style="display: none">
                                    Следующий шаг
                                    <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <p class="prev mobNav" style="display: none">
                                    <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                </p>
                            </div>
                        </nav>
                    </div>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                </div>
            </div>
            <div class="screen" style="display: none" id="screen5">
                <div class="tabletView">
                    <nav class="navigation helpernav">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <!-- <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p> -->
                            <!-- <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <ul class="steps">
                                <li id="step2">
                                        <div>1 шаг</div>
                                        <p>Комната</p>
                                </li>
                                <li id="step3">
                                    <div>2 шаг</div>
                                    <p>Тип</p>
                                </li>
                                <li class="active" id="step4">
                                        <div>3 шаг</div>
                                        <p>Размер</p>
                                </li>
                                <li id="step5">
                                    <div>4 шаг</div>
                                    <p>Наполнение</p>
                                </li>
                                <li id="step6">
                                        <div>5 шаг</div>
                                        <p>Вид</p>
                                </li>
                                <li id="step7">
                                        <div>6 шаг</div>
                                        <p>Условия</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="plashka">
                        <div class="container">
                            <p class="question">
                                Какого размера будет шкаф-купе?
                            </p>
                            <div class="quest">
                                <div class="deep">
                                    <label for="deep">Глубина</label>
                                    <input type="text" name="deep" id="deep"> см
                                    <div class="slider" id="sliderD"></div>
                                    <div class="sliderMinMax">
                                        <p class="min">20 см</p>
                                        <p class="max">100 см</p>
                                    </div>
                                </div>
                                <div class="questionPoyasnenie">
                                    <p>
                                        Для расчёта стоимости Вы указываете ориентировочные размеры будущего шкафа.
                                        <br> При заказе шкафа-купе, инженер-дизайнер бесплатно приедет к Вам домой и произведёт
                                        точные замеры!
                                    </p>
                                </div>
                                <div class="height">
                                    <label for="height">Высота</label>
                                    <input type="text" name="height" id="height"> см
                                    <div class="slider" id="sliderH"></div>
                                    <div class="sliderMinMax">
                                        <p class="min">120 см</p>
                                        <p class="max">400 см</p>
                                    </div>
                                </div>
                                <div class="width">
                                    <label for="width">Ширина</label>
                                    <input type="text" name="width" id="width"> см
                                    <div class="slider" id="sliderW"></div>
                                    <div class="sliderMinMax">
                                        <p class="min">60 см</p>
                                        <p class="max">1000 см</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="navigation">
                        <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                        <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                        </p>
                        <div class="container">
                                <p class="next mobNav" style="display: none">
                                    Следующий шаг
                                    <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <p class="prev mobNav" style="display: none">
                                    <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                </p>
                        </div>
                </nav>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                </div>
            </div>
            <div class="screen" style="display: none" id="screen6">
                <div class="tabletView">
                    <nav class="navigation helpernav">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <!-- <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <ul class="steps">
                                <li id="step2">
                                        <div>1 шаг</div>
                                        <p>Комната</p>
                                </li>
                                <li id="step3">
                                    <div>2 шаг</div>
                                    <p>Тип</p>
                                </li>
                                <li  id="step4">
                                        <div>3 шаг</div>
                                        <p>Размер</p>
                                </li>
                                <li id="step5" class="active">
                                    <div>4 шаг</div>
                                    <p>Наполнение</p>
                                </li>
                                <li id="step6">
                                        <div>5 шаг</div>
                                        <p>Вид</p>
                                </li>
                                <li id="step7">
                                        <div>6 шаг</div>
                                        <p>Условия</p>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="plashka">
                            <p class="question">
                                Что будет храниться в новом шкафу?
                            </p>
                            <div class="quest questLeft">
                                <ul>
                                    <li>
                                        <label for="pylesos">
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/pylesos.svg" alt=""> Пылесос
                                            <input id="pylesos" type="checkbox" name="ZshkafContain[]" value="пылесоса">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="podushka">
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/podushka.svg" alt=""> Послельные принадлежности
                                            <input id="podushka" type="checkbox" name="ZshkafContain[]" value="постельных принадлежностей">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="gladDoska">
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/gladDoska.svg" alt=""> Гладильная доска
                                            <input id="gladDoska" type="checkbox" name="ZshkafContain[]" value="гладильной доски">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="platya">
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/platya.svg" alt=""> Пиджаки и платья на вешалках
                                            <input id="platya" type="checkbox" name="ZshkafContain[]" value="пиджаков и платьев на вешалках">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="knigi">
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/knigi.svg" alt=""> Книги
                                            <input id="knigi" type="checkbox" name="ZshkafContain[]" value="книг">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="quest questRight">
                                <ul>
                                    <li>
                                        <label for="galstuki">
                                             <div class="helper">Галстуки</div><img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/galstuki.svg" alt="" class="helper">
                                            <input id="galstuki" type="checkbox" name="ZshkafContain[]" value="галстуков">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="kurtki">
                                            <div>Куртки</div> <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/kurtki.svg" alt="" class="helper"> 
                                            <input id="kurtki" type="checkbox" name="ZshkafContain[]" value="курток">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="odezhda">
                                            <div>Одежда и бельё</div> <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/odezhda.svg" alt="" class="helper"> 
                                            <input id="odezhda" type="checkbox" name="ZshkafContain[]" value="одежды и белья">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="obuv">
                                            <div>Обувь</div>
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/obuv.svg" alt="" class="helper"> 
                                            <input id="obuv" type="checkbox" name="ZshkafContain[]" value="обуви">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="kot">
                                            <div>Кот</div>
                                            <img src="<?php bloginfo('template_url') ?>/img/shkaf/ico/kot.svg" alt="" class="helper"> 
                                            <input id="kot" type="checkbox" name="ZshkafContain[]" value="кота">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="shkafInside">
                                <div class="shkafInsideContain">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/pylesos.png" alt="" id="pylesosImg" class="pylesos">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/podushka.png" alt="" id="podushkaImg" class="podushka">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/podushka2.png" alt="" id="podushka2Img" class="podushka">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/gladDoska.png" alt="" id="gladDoskaImg" class="gladDoska">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/platya1.png" alt="" id="platya1Img" class="platya">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/platya2.png" alt="" id="platya2Img" class="platya">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/knigi1.png" alt="" id="knigi1Img" class="knigi">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/knigi2.png" alt="" id="knigi2Img" class="knigi">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/galstuki.png" alt="" id="galstukiImg" class="galstuki">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/kurtki.png" alt="" id="kurtkiImg" class="kurtki">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/belyje.png" alt="" id="belyjeImg" class="odezhda">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/odezhda1.png" alt="" id="odezhda1Img" class="odezhda">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/odezhda2.png" alt="" id="odezhda2Img" class="odezhda">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/obuv1.png" alt="" id="obuv1Img" class="obuv">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/obuv2.png" alt="" id="obuv2Img" class="obuv">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/obuv3.png" alt="" id="obuv3Img" class="obuv">
                                    <img src="<?php bloginfo('template_url') ?>/img/shkaf/kot.png" alt="" id="kotImg" class="kot">
                                </div>
                            </div>
                        </div>
                        <nav class="navigation">
                                <p class="prev">
                                        <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                    </p>
                                <p class="next">
                                        Следующий шаг
                                        <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <div class="container">
                                        <p class="next mobNav" style="display: none">
                                            Следующий шаг
                                            <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                        </p>
                                        <p class="prev mobNav" style="display: none">
                                            <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                        </p>
                                </div>
                        </nav>
                    </div>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                    
                </div>
            </div>
            <div class="screen" style="display: none" id="screen7">
                <div class="tabletView">
                    <nav class="navigation helpernav">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <!-- <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <ul class="steps">
                                    <li id="step2">
                                            <div>1 шаг</div>
                                            <p>Комната</p>
                                    </li>
                                    <li id="step3">
                                        <div>2 шаг</div>
                                        <p>Тип</p>
                                    </li>
                                    <li  id="step4">
                                            <div>3 шаг</div>
                                            <p>Размер</p>
                                    </li>
                                    <li id="step5">
                                        <div>4 шаг</div>
                                        <p>Наполнение</p>
                                    </li>
                                    <li id="step6" class="active">
                                            <div>5 шаг</div>
                                            <p>Вид</p>
                                    </li>
                                    <li id="step7">
                                            <div>6 шаг</div>
                                            <p>Условия</p>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="plashka">
                            <p class="question">
                                Давайте выберем внешний вид шкафа
                            </p>
                            <div class="quest">
                                <ul>
                                    <li>
                                        <label for="dsp">
                                            <div class="coverImg dsp">
                                                <a href="#" class="vopros toolTip" title="Пожалуй, самый распространённый и простой вариант внешней отделки - это ламиринированная древесно-стружечная плита (ЛДСП). Выглядеть такие двери будут как деревянные. На замер дизайнер привозит образцы отделки, так что Вы легко сможете подобрать ЛДСП под Ваш интерьер. ЛДСП легко комбинируется с другими материалами: будь то зеркала, декоративное стекло или экокожа. ">
                                                    ?
                                                </a>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="ZshkafCover[]" id="dsp" value="ламинированное ДСП, ЛДСП"> Ламинированное ДСП, ЛДСП
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="zerkala">
                                            <div class="coverImg zerkala">
                                                <a href="#" class="vopros toolTip" title="Использование зеркал и декоративного стекла во внешней отделке дверей шкафа-купе позволяет визуально расширить пространство. Для производства шкафов-купе используются специальные зеркала и стёкла на плёночной основе. При повреждении такое зеркало не рассыпется на отдельные осколки, что делает его безопасным для установки даже в детские комнаты. ">
                                                    ?
                                                </a>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="ZshkafCover[]" id="zerkala" value="зеркала и стёкла"> Зеркала и стёкла
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="peskostrui">
                                            <div class="coverImg peskostrui">
                                                <a href="#" class="vopros toolTip" title="Использование пескоструйных рисунков позволяет сделать из обычного шкафа-купе настоящую изюминку для Вашего интерьера. Рисунки на зеркале создаются при помощи специальной технологии, которая позволяет часть поверхности зеркала сделать матовой, а часть оставить зеркальной. Таким образом, можно создавать самые разные рисунки. Вы можете выбрать рисунок из каталога фабрики производителя или разработать специально под Ваш интерьер. ">
                                                    ?
                                                </a>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="ZshkafCover[]" id="peskostrui" value="пескоструйный рисунок на зеркалах"> Пескоструйный рисунок на зеркалах
                                            </div>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="fotopechat">
                                            <div class="coverImg fotopechat">
                                                <a href="#" class="vopros toolTip" title="Фотопечать на шкафах-купе позволяет превратить двери шкафа в арт-объект, сделать их акцентом комнаты. На стекло, зеркало, пластик или акрил наносится изображение специальными красками. Размер частиц чернил очень мал, что позволяет им глубоко проникать в структуру материала, а после обработки УФ-излучением чернила просто спекаются с поверхностью и удалить их практически невозможно. Фабрика-производитель всегда предлагает каталог готовых изображений для печати, но по желанию Вы можете украсить шкаф собственной фотографией либо рисунком. ">
                                                    ?
                                                </a>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="ZshkafCover[]" id="fotopechat" value="фотопечать"> Фотопечать
                                            </div>
                                        </label>
                                    </li>
                                    <!-- <li>
                                    <label for="lakobel">
                                        <div class="coverImg lakobel">
                                            <a href="#" class="vopros toolTip" title="Лакобель — декоративное цветное стекло, окрашенное с тыльной стороны в разные цвета, специально разработанное для применения в интерьере. Палитра стёкол лакобель отличается яркостью, выразительностью и разнообразием оттенков. Лакомат — это химически травленое (матовое) стекло толщиной 4мм , в основе изготовления которого лежит флоат-стекло, обработанное с одной стороны кислотой. При повреждении такие стёкла не рассыпятся на отдельные осколки, благодаря плёночной основе, что делает их безопасными для установки даже в детские комнаты.">
                                                ?
                                            </a>
                                        </div>
                                        <div>
                                            <input type="checkbox" name="ZshkafCover[]" id="lakobel" value="лакобель или лакомат">
                                            Лакобель или лакомат
                                        </div>
                                    </label>
                                </li> -->
                                    <li>
                                        <label for="ekokozha">
                                            <div class="coverImg ekokozha">
                                                <a href="#" class="vopros toolTip" title="Наполнение для дверей купе оговаривается с менеджером.">
                                                    ?
                                                </a>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="ZshkafCover[]" id="ekokozha" value="другое"> Другой
                                            </div>
                                        </label>
                                    </li>

                                </ul>
                                <!-- <div class="dontKnow">
                                    <label for="dontKnowCover">
                                        <p class="pseudoBtn">
                                            Пока не знаю
                                        </p>
                                        <p class="hidden">
                                            <input type="checkbox" name="ZshkafCover[]" id="dontKnowCover" value="Не выбрано">
                                        </p>
                                    </label>
                                </div> -->
                            </div>
                        </div>
                        <nav class="navigation">
                                <p class="prev">
                                        <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                    </p>
                                <p class="next">
                                        Следующий шаг
                                        <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <div class="container">
                                        <p class="next mobNav" style="display: none">
                                            Следующий шаг
                                            <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                        </p>
                                        <p class="prev mobNav" style="display: none">
                                            <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                        </p>
                                </div>
                        </nav>
                    </div>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                    
                </div>
            </div>
            <div class="screen" style="display: none" id="screen8">
                <div class="tabletView">
                    <nav class="navigation helpernav">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <!-- <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <ul class="steps">
                                    <li id="step2">
                                            <div>1 шаг</div>
                                            <p>Комната</p>
                                    </li>
                                    <li id="step3">
                                        <div>2 шаг</div>
                                        <p>Тип</p>
                                    </li>
                                    <li  id="step4">
                                            <div>3 шаг</div>
                                            <p>Размер</p>
                                    </li>
                                    <li id="step5">
                                        <div>4 шаг</div>
                                        <p>Наполнение</p>
                                    </li>
                                    <li id="step6" >
                                            <div>5 шаг</div>
                                            <p>Вид</p>
                                    </li>
                                    <li id="step7" class="active">
                                            <div>6 шаг</div>
                                            <p>Условия</p>
                                    </li>
                                </ul>
                        </div>
                    </nav>
                    <div class="container">
                        <div class="plashka">
                            <p class="question">
                                Ура! Осталось совсем немного!
                                <br> Выбираем условия производителей:
                            </p>
                            <div class="quest">
                                <ul>
                                    <li>
                                        <label for="doprassr">
                                            <div class="coverImg doprassr"></div>
                                            <div>
                                                <input type="checkbox" name="Zdopusloviya[]" id="doprassr" value="покупка в рассрочку">
                                                <!-- Покупка в рассрочку -->
                                                Оплата частями (без %)
                                            </div>
                                        </label>
                                    </li>
                                    <!-- <li>
                                    <label for="doprasgarant">
                                        <div class="coverImg doprasgarant"></div>
                                        <div>
                                            <input type="checkbox" name="Zdopusloviya[]" id="doprasgarant" value="расширенная гарантия до 5 лет">
                                            Расширенная гарантия<br> до 5 лет
                                        </div>
                                    </label>
                                </li> -->
                                    <li>
                                        <label for="dopbelsplzamer">
                                            <div class="coverImg dopbelsplzamer"></div>
                                            <div>
                                                <input type="checkbox" name="Zdopusloviya[]" id="dopbelsplzamer" value="бесплатный замер и установка"> Бесплатный замер и установка
                                            </div>
                                        </label>
                                    </li>
                                    <!-- <li>
                                    <label for="doppodlestnica">
                                        <div class="coverImg doppodlestnica"></div>
                                        <div>
                                            <input type="checkbox" name="Zdopusloviya[]" id="doppodlestnica" value="подарок лестница-ступенька для шкафа">
                                            Табуретка в подарок
                                        </div>
                                    </label>
                                </li> -->
                                    <li class="left">
                                        <label for="dopskidka">
                                            <div class="coverImg dopskidka"></div>
                                            <div>
                                                <input type="checkbox" name="Zdopusloviya[]" id="dopskidka" value="3D дизайн шкафа"> 3D дизайн шкафа
                                            </div>
                                        </label>
                                    </li>
                                    <li class="right">
                                        <label for="dopshuflyadka">
                                            <div class="coverImg dopshuflyadka"></div>
                                            <div>
                                                <input type="checkbox" name="Zdopusloviya[]" id="dopshuflyadka" value="Изготовление за 1 день"> Изготовление за 1 день
                                            </div>
                                        </label>
                                    </li>
                                </ul>
                                <div class="chooseAll">
                                    <p class="pseudoBtn">
                                        Выбрать всё
                                    </p>
                                </div>
                            </div>
                        </div>
                        <nav class="navigation">
                                <p class="prev">
                                        <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                    </p>
                                <p class="next">
                                        Подобрать варианты
                                        <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                </p>
                                <div class="container">
                                        <p class="next mobNav" style="display: none">
                                            Следующий шаг
                                            <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                                        </p>
                                        <p class="prev mobNav" style="display: none">
                                            <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                        </p>
                                </div>
                        </nav>
                    </div>
                    <!-- <div class="openNextStep">
                        <p>Далее</p>
                    </div> -->
                    
                </div>
            </div>
            <div class="screen" style="display: none" id="screen9">
                <div class="tabletView">
                    <!-- <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                            </p>
                            <p class="next">
                                Узнать стоимость
                                <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p>
                        </div>
                    </nav> -->
                    <div class="container">
                        <div class="plashka">
                            <p class="question">
                                Вы выбрали шкаф-купе:
                            </p>
                            <div class="quest">
                                <ul>
                                    <li>
                                        <p class="vopr">
                                            Куда?
                                        </p>
                                        <p class="otvetKuda">
                                        </p>
                                    </li>
                                    <li>
                                        <p class="vopr">
                                            Тип
                                        </p>
                                        <p class="otvetTip">
                                        </p>
                                    </li>
                                    <li>
                                        <p class="vopr">
                                            Размеры
                                        </p>
                                        <p class="otvetRazmer">
                                            <span class="w"></span> x
                                            <span class="h"></span> x
                                            <span class="b"></span>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="vopr">
                                            Для хранения
                                        </p>
                                        <p class="otvetContain">
                                        </p>
                                    </li>
                                    <li>
                                        <p class="vopr">
                                            Внешняя отделка
                                        </p>
                                        <p class="otvetOtdelka">
                                        </p>
                                    </li>
                                    <li>
                                        <p class="vopr">
                                            Дополнительно
                                        </p>

                                        <p class="otvetDopolnitelno">
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="resultCount">
                                Всего найдено
                                <span>390</span> конфигураций
                            </div>
                        </div>
                    </div>
                    
                    <nav class="navigation">
                            <!-- <p class="prev">
                                    <img src="<?php bloginfo('template_url') ?>/img/prev.png" alt=""> Предыдущий шаг
                                </p>
                            <p class="next">
                                    Подобрать варианты
                                    <img src="<?php bloginfo('template_url') ?>/img/next.png" alt="">
                            </p> -->
                            <div class="openNextStep">
                                    <p>Узнать стоимость</p>
                                </div>
                    </nav>
                </div>
            </div>
            <div class="screen" style="display: none" id="screen10">
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Благодарим за ответы!
                        </p>
                        <p class="description">
                            Вы ответили на 6 вопросов и заработали <strong>персональную скидку!</strong>
                        </p>
                        <p class="description helper" >
                                Оставьте свой номер телефона и мы закрепим за ним <strong>скидку 10%!</strong>
                            </p>
                            <span>Ваше имя</span>
                        <div class="quest">
                                
                            <!-- <label for="phone">Оставьте свой номер телефона и мы закрепим за ним скидку 10%! </label> -->
                            <div class="name">
                                    <label for="name">
                                        
                                <img src="<?php bloginfo('template_url') ?>/img/name.jpg" alt="">
                                <input type="text" name="name" id="name" placeholder="Ваше имя">
                                </label>
                            </div>
                            <div class="phone">
                                    <label for="phone" class="test">
                                <img src="<?php bloginfo('template_url') ?>/img/phone.jpg" alt="">
                                <input type="text" name="phone" id="phone" placeholder="+380(__)___-__-__">
                                 </label>   
                                

                            </div>
                            
                            <div class="itogBtn">
                                    <input type="hidden" name="type" value="Калькулятор">
                                    <input type="button" value="Узнать стоимость со скидкой!" id="calc-form">
                                </div>
                            <!-- <div class="vnimanie">Внимание! Срок действия скидки 10 дней! </div> -->
                        </div>
                        <p class="alert" style="display: none;">Введите корректный номер телефона</p>
                        <div class="vnimanie">
                            <p id="vnimanie"><strong>Внимание!</strong> Срок действия скидки <strong>10 дней!</strong> </p>
                        </div>
                        <!-- <div class="itogBtn">
                            <input type="hidden" name="type" value="Калькулятор">
                            <input type="button" value="Узнать стоимость со скидкой!" id="calc-form">
                        </div> -->
                    </div>
                    <!--                <img src="<?php bloginfo('template_url') ?>/img/baloonFinal.png" alt="" class="mBaloon">-->
                </div>
            </div>
            <input type="text" name="utm" id="utm" value="<?php echo $utm; ?>" style="display: none">
        </form>
    </div>    
    <div class="showAllBlocks"></div>
    <!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="<?php bloginfo('template_url') ?>/slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $(".bx-slider").slick({
                adaptiveHeight: true,
                vertical: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                verticalSwiping: true,
                arrows: false

            });

        });
    </script>


        
        <?php get_footer(); ?>
        
        

    