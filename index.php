<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/style.css" type="text/css"/>
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/mobile.css" type="text/css"/>
    <link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/component.css" type="text/css"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-regular" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-bold" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-condensed-bold" rel="stylesheet" type="text/css"/>
    <link href="http://allfont.ru/allfont.css?fonts=roboto-condensed" rel="stylesheet" type="text/css"/>
    <script src="js/modernizr.custom.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <jdoc:include type="head"/>
</head>

<body>
<div class="mp-pusher" id="mp-pusher">
    <div class="wrapper">
        <header class="header">
            <div class="cont_head">

                <div class="men_head">
                    <div class="head_menu none">
                        <jdoc:include type="modules" name="menu"/>
                    </div>
                </div>

                <!--<div class="head_soc none">
                    <img src="images/vk.png" alt="Медвежатник вконтатке">
                    <img src="images/ok.png" alt="Медвежатник одноклассники">
                    <img src="images/f.png" alt="Название компании">
                </div>-->
                <div class="bars">
                    <a href="#" id="trigger" class="menu-trigger"><img src="images/bars.svg" id="showLeftPush"
                                                                       alt="Меню"></a>
                </div>
                <!--<div class="head_logo">
                    <a href="/"><img src="images/logo.svg" alt="Аварийное вскрите замков дверей - Медвежатник"></a>
                </div>-->
                <!--<div class="head_phone">
                    <p class="phone">+7 (962) 441-42-50</p>
                    <a href="#zakaz">Заказать звонок</a>
                </div>-->
                <div class="head_phone">
                    <a href="#zakaz">Заказать звонок</a>
                    <div class="call">
                        <img src="images/call.png" alt="Вызов">
                        <p class="phone">+7 (928) 321-76-20</p>
                    </div>
                </div>
            </div>
            <!--<div class = "men_head">
              <div class = "head_menu none">
                <jdoc:include type="modules" name="menu" />
              </div>
            </div>-->
            <div class="head_slide">
                <!--<div class="cont_top">
                    <div class="head_logo">
                        <a href="/">
                            <img src="images/logo.svg" alt="Аварийное вскрите замков дверей - Медвежатник">
                        </a>
                    </div>
                    <div class="head_name">
                        <h1>ВСКРЫТИЕ ЗАМКОВ, ДВЕРЕЙ, СЕЙФОВ, АВТОМОБИЛЕЙ В СТАВРОПОЛЕ</h1>
                        <p><span>99.99%</span> без повреждений, от <span>800</span> руб</p>
                    </div>
                    <!--<p class="head_namep">+7 (962) 441-42-50</p>-->
                <!--</div>-->
                <jdoc:include type="modules" name="names"/>
            </div>
        </header><!-- .header-->
        <div id="mp-menu" class="mp-menu">
            <div class="mp-level">
                <div class="left">
                    <nav class="header_menu">
                        <h2>Меню</h2>
                        <jdoc:include type="modules" name="menu"/>
                    </nav>
                    <div class="head_soc">
                        <a style="text-decoration: none" href="https://vk.com/club62970398" target="_blank">
                            <img src="images/vk.png" alt="Медвежатник вконтакте">
                        </a>
                        <a style="text-decoration: none" href="https://ok.ru/group/58089627779111" target="_blank">
                            <img src="images/ok.png" alt="Медвежатник одноклассники">
                        </a>
                        <img src="images/f.png" alt="Медвежатник фейсбук">
                    </div>
                </div>
            </div>
        </div>
        <main class="content">
            <div class="content center shadow">
                <section class="block_3">
                    <div style="display: inline-block;">
                        <img src="images/h1.svg" alt="Вскрытие дверей">
                    </div>
                    <h3>Оперативный выезд мастера</h3>
                </section>
                <section class="block_3">
                    <div style="display: inline-block;">
                        <img src="images/h2.svg" alt="Вскрытие дверей">
                    </div>
                    <h3>Гарантия качества услуг</h3>
                </section>
                <section class="block_3">
                    <div style="display: inline-block;">
                        <img src="images/h3.svg" alt="Вскрытие дверей">
                    </div>
                    <h3>Вскрываем замки любой сложности</h3>
                </section>
            </div>
            <div class="cont center">
                <jdoc:include type="component"/>  <!-- Код для вывода контента (статей) -->

            </div>
            <div class="block_in center">
                <div class="cont">
                    <p class="h2_w">КАК МЫ РАБОТАЕМ</p>
                    <div class="icon">
                        <img src="images/h1.png">
                        <div>
                            <p class="block_in_text">ПОЗВОНИТЕ НАМ <br> ИЛИ ОСТАВЬТЕ ЗАЯВКУ</p>
                        </div>
                    </div>
                    <div class="arrow">
                        <img src="images/arrow.png">
                    </div>
                    <div class="icon">
                        <img src="images/h2.png">
                        <p class="block_in_text">МАСТЕР ПРИЕДЕТ <br> К ВАМ В ТЕЧЕНИЕ 40 МИН</p>
                    </div>
                    <div class="arrow">
                        <img src="images/arrow.png">
                    </div>
                    <div class="icon">
                        <img src="images/h3.png">
                        <p class="block_in_text">МАСТЕР ОПЕРАТИВНО <br> ВСКРОЕТ ЗАМОК</p>
                    </div>
                    <div class="arrow">
                        <img src="images/arrow.png">
                    </div>
                    <div class="icon">
                        <img src="images/h4.png">
                        <p class="block_in_text">ВЫ ОСУЩЕСТВЛЯЕТЕ <br> ПРИЁМ РАБОТЫ</p>
                    </div>
                    <!--<form method="POST" id="feedback-forms">
                        <input type="text" name="telFF" required="" placeholder="Имя" class="text">
                        <input type="text" name="nameFF" required="" placeholder="Телефон" class="text">
                        <input type="submit" value="Отправить" class="submit">
                        <p class="head_names">+7 (962) 441-42-50</p>
                    </form>
                    <br>-->
                </div>
            </div>
            <div class="cont">
                <h3 class="h3 center">ВСКРЫТИЕ ЗАМКОВ</h3>
                <p class="bottom justify bottom_text">Мы выполняем вскрытие квартир, вскрытие автомобилей, вскрытие сейфов,
                    вскрытие гаражей.
                    Установку, замену и ремонт замков. Чаще всего требуется провести эту операцию в кратчайшие сроки,
                    ведь поломка замков происходит всегда неожиданно и, как правило, в самый неподходящий момент.
                    Обратившись к нам, вы можете быть уверены, что наши специалисты отреагируют на вашу заявку и
                    произведут срочное вскрытие сломанного замка. Разумеется, после проведения вскрытия, сразу требуется
                    замена вышедшего из строя замка на новый экземпляр. А если столь неприятное событие произошло поздно
                    вечером? Наши сотрудники не только производят вскрытие замков, но и оказывают комплекс
                    дополнительных услуг, таких как установка нового замка. Существует множество случаев, когда
                    требуется вскрыть замок аварийно. Такая услуга, как вскрытие замков, может потребоваться в случае
                    проблем с замком в квартире, доме, на даче или даже в гараже. В любом случае, наши мастера быстро
                    отреагируют и приедут в любую точку города.</p>
                <img src="images/safe.jpg" alt="Вскрытие сейфов" class="bottom_text_img">

            </div>
            <div class="cont">
                <section class="block_4">
                    <h4 class="brown">15 лет</h4>
                    <p class="brown_small">на рынке</p>
                </section>
                <section class="block_4">
                    <h4 class="brown">27 375</h4>
                    <p class="brown_small">вскрытых замков</p>
                </section>
                <section class="block_4">
                    <h4 class="brown">10 МИН</h4>
                    <p class="brown_small">среднее время вскрытия</p>
                </section>
                <section class="block_4">
                    <h4 class="brown">9336</h4>
                    <p class="brown_small">довольных клиентов</p>
                </section>
            </div>
            <div class="center" style="background-color: #eee">
                <div class="cont" style="margin-bottom: 0">
                    <section class="text_section">
                        <h4 class="bottom_h4">СРОЧНОЕ ВСКРЫТИЕ АВТОМОБИЛЯ В СТАВРОПОЛЕ</h4>
                        <p class="bottom justify">
                            Проблем с автомобильными замками и штатными или внештатными сигнализациями никто не
                            отменял. И владельцев транспортных средств города Ставрополь тоже могут коснуться
                            неприятные моменты, когда ключи остаются внутри, а машина закрыта. Может ключ не
                            проворачивается в зажигании или перестал открываться багажник. Даже в ноль
                            разряженная АКБ не позволит открыть авто с пульта, а на некоторых марках
                            автомобильной линейки при севшем аккумуляторе и ключом не возможно замкнуть цепь
                            электрозамков с двойным запиранием. Многие, в целях экономии, пытаются лично решить
                            задачи, связанные с блокировкой собственной машины, но только профессиональному авто
                            мастеру по аварийному вскрытию под силу открыть, не нанеся ущерба. Единицы из
                            транспортных средств ни разу в жизни не испытывали на своем кузове руки слесаря,
                            который бережно открывал и советовал их обладателям изготовить второй ключ или, как
                            часто бывает, не хранить его в бардачке, для быстрого самостоятельного доступа в
                            случаях сбоя электроники, завязанной на центральном замке.</p>
                        <img class="bottom_img" src="images/b1.jpg">
                    </section>
                    <section class="text_section">
                        <h4 class="bottom_h4">ВСКРЫТИЕ СЕЙФОВ В СТАВРОПОЛЕ</h4>
                        <p class="bottom justify">
                            Многие люди для хранения ценных вещей в домашних условиях или для ограничения доступа к
                            различным бумагам в офисах, магазинах и т.д. используют различные сейфы. Safe - в переводе
                            означает: безопасный или надёжный. Основной принцип сейфа заключается в том, чтобы надежно
                            хранить в безопасности содержимое своих владельцев. Существует множество сейфовых ящиков с
                            завода оснащенных электронным кодовым, механическим кодовым или с комбинированными замками, в
                            дополнение к которым установлено ключевое устройство. И у всех данных систем основным
                            направлением является максимальная защита от несанкционированного взлома. Чем выше класс,
                            тем спокойнее его владельцу. Но возьмем ситуацию, когда сам обладатель теряет шифр или
                            единственный ключ. Даже элементарный сбой в электронном замке или неправильная
                            перекодировка механического могут привести к необратимым последствиям, при которых сейфовое
                            хранилище не откроется привычным образом. Как же быть? Кто поможет вскрыть сейф Ставрополе?
                            Не переживайте, позвоните нам. Мы знаем, что делать!</p>
                        </p>
                        <img class="bottom_img" src="images/b2.jpg">
                    </section>
                </div>
            </div>

        </main><!-- .content -->

    </div><!-- .wrapper -->
    <div class="map">
        <script type="text/javascript" charset="utf-8"
                src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=B1yfzdhg0MntwmWLHRpQRCuQ76J5VlFO&width=auto&height=357"></script>
    </div>
    <div class="city">

        <div class="city_head">
            <br>
            Наша служба оказывает услуги по вскрытию замков в Ставрополе и по всему Ставропольскому краю:<br><br>
        </div>
        <div class="st1">
            г. Ставрополь<br>
            г. Михайловск<br>
            г. Кисловодск<br>
            г. Минеральные Воды<br>
            г. Ессентуки<br>
            г. Благодарный<br>
            г. Ипатово<br>
            г. Будённовск<br>
            г. Георгиевск <br>
            г. Железноводск<br>
        </div>
        <div class="st1">
            г. Зеленокумск<br>
            г. Изобильный <br>
            г. Невинномысск<br>
            г. Лермонтов <br>
            г. Нефтекумск<br>
            г. Новоалександровск<br>
            г. Новопавловск<br>
            г. Пятигорск<br>
            г. Светлоград<br>
            с. Грачёвка<br>
        </div>
        <div class="st1">
            с. Донское<br>
            ст. Ессентукская<br>
            с. Кочубеевское<br>
            с. Московское<br>
            с. Красногвардейское<br>
            ст. Курская<br>
            с. Левокумское<br>
            с. Летняя Ставка<br>
            с. Новоселицкое<br>
            с. Степное<br>
        </div>
    </div>
    <footer class="footer">
        <div class="cont_head">
            <div class="bottom_logo">
                <img src="images/logo.svg" alt="Название компании">
            </div>
            <div class="footer_menu none">
                <jdoc:include type="modules" name="menu"/>
            </div>
            <div class="footer_phone none">
                <div class="head_phone">
                    <a href="#zakaz">Заказать звонок</a>
                    <div class="call">
                        <img src="images/call.png" alt="Вызов">
                        <p class="phone">+7 (928) 321-76-20</p>
                    </div>
                </div>
            </div>
            <div class="head_soc">

            </div>
            <div class="footer_soc none">
                <a style="text-decoration: none" href="https://vk.com/club62970398" target="_blank">
                    <img src="images/vk.png" alt="Медвежатник вконтакте">
                </a>
                <a style="text-decoration: none" href="https://ok.ru/group/58089627779111" target="_blank">
                    <img src="images/ok.png" alt="Медвежатник одноклассники">
                </a>
                <img src="images/f.png" alt="Медвежатник фейсбук">
            </div>
        </div>
    </footer><!-- .footer -->
</div>
<script src="js/classie.js"></script>
<script src="js/mlpushmenu.js"></script>
<script>
    new mlPushMenu(document.getElementById('mp-menu'), document.getElementById('trigger'));
</script>
<div class="lightboxs" id="zakaz">
    <div class="za">
        <a href="#_" class="close">x</a>
        <?
        if (isset ($_POST['nameFF'])) {
            $from = "help-line@inbox.ru";
            $to = 'medvedst@bk.ru';
            $subject = '' . $_SERVER['recipient'] = 'Заявка с сайта медвежатник26.рф';
            $subject = "=?utf-8?b?" . base64_encode($subject) . "?=";
            $message = "Имя: " . $_POST['nameFF'] . " \nТелефон: " . $_POST['telFF'] . " \n JinMedia";
            $headers = 'Content-type: text/plain; charset="utf-8"';
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "From: <info@jinmedia.ru>\r\n";
            mail($to, $subject, $message, $headers);
            echo('<p style="color: #000; font-weight: bold; font-family: segoe UI;">Ваше сообщение получено, спасибо!</p>');
            $_POST['nameFF'] = $_POST['telFF'] = $_POST['ocFF'] = '';
        }
        ?>
        <h3>Заказать по акции</h3>
        <p>Заполните обязательные поля (имя, телефон)</p>
        <form method="POST" id="feedback-form">
            <input type="text" name="telFF" required="" placeholder="Имя"><br>
            <input type="text" name="nameFF" required="" placeholder="Телефон"><br>
            <input type="submit" value="Отправить">
        </form>
        <br>

    </div>
</div>
<div class="up">
    <a href="#"><img src="images/up.svg" id="showLeftPushs" alt="Меню"></a>
</div>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter25564037 = new Ya.Metrika({
                    id: 25564037,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true,
                    trackHash: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/25564037" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>