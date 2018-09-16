<!doctype html manifest="example.appcache">
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--OpenGraph | http://ogp.me
    <html lang="" prefix="og: //ogp.me/ns#">

    Шаблон:
    <meta property="og:type" content="website">
    <meta property="og:url" content="адреса сайту">
    <meta property="og:title" content="заголовок">
    <meta property="og:description" content="опис">
    <meta property="og:image" content="зображення">
    <meta property="og:locale" content="uk_UA" />
    <meta property="og:site_name" content="myfishka" />
    -->

    <title>Landing Page #1</title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">

    <!--
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    -->

    <link rel="stylesheet" href="css/main-style.css">
    <script src="js/jquery-3.3.1.min.js"></script>
	
	
	<link rel="stylesheet" href="css/css/docs.theme.min.css">
    <link rel="stylesheet" href="css/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owlcarousel/assets/owl.theme.default.min.css">
	
    <script src="js/vendors/jquery.min.js"></script>
    <script src="css/owlcarousel/owl.carousel.js"></script>

</head>
<body>
    <div class="wrapper">
        <div class="mainBlock">
            <div class="menuWrapper">
                <div class="menu">
                    <div class="logo">
                        <img src="img/logo.png" alt="Fishka">
                    </div>
                    <div class="page">
                        <ul>
                            <li><a href="#">Можливості</a></li>
                            <li><a href="#">Переваги</a></li>
                            <li><a href="#">Відгуки</a></li>
                            <li><a href="#">Партнери</a></li>
                        </ul>
                    </div>
                    <div class="button"><!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!----->
                        <input type="button" value="отримати пропозицію">
                    </div>
                </div>
            </div>

            <div class="textBlock">
                <div id="text">
                    <h1>4 млн клієнтів,<br/>які можуть стати вашими</h1>
                    <h2>Вивчайте їх поведінку, залучайте<br/>та збільшуйте продажі</h2>
                    <h3>Залиште свої контакти та отримайте<br/>унікальну пропозицію співпраці.</h3>
					<!-----------------------FORM----------------------->
                    <form action="form.php" method="post">
                        <p>
                            <label>Номер телефону</label>
                            <input type="text" name="tel">
                        </p>
                        <p>
                            <label>Прізвище та ім'я</label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <input type="submit" name="submit" value="отримати пропозицію">
                        </p>
                    </form>
					<!-----------------------FORM----------------------->
                </div>
                <div id="image">
                    <img src="img/block1_monitor.png" alt="monitor">
                </div>
                
            </div>
        </div>
        <div class="opportunities">
            <h2>Отримайте нові можливості з Fishka:</h2>
            <div class="allOpp">
                <div id="opp">
                    <img src="img/01_landing_icons_1.svg">
                    <div>
                        <h3>Збільшуйте продажі та прибуток</h3>
                        <p>Залучайте нових клієнтів, збільшуйте середній чек та частоту покупок за допомогою інструментів програми</p>
                    </div>
                </div>
                <div id="opp">
                    <img src="img/01_landing_icons_2.svg">
                    <div>
                        <h3>Залучайте нових клієнтів</h3>
                        <p>Учасниками програми лояльності є 4 млн клієнтів, які здійснюють покупки у 22 Партнерів програми</p>
                    </div>
                </div>
                <div id="opp">
                    <img src="img/01_landing_icons_3.svg">
                    <div>
                        <h3>Отримайте безкоштовно готове рішення CRM</h3>
                        <p>Система для управління відносин з клієнтами постійно оновлюється та вдосконалюється відносно бізнес-потреб Партнерів</p>
                    </div>
                </div>
                <div id="opp">
                    <img src="img/01_landing_icons_4.svg">
                    <div>
                        <h3>Зменшуйте операційні витрати</h3>
                        <p>Ви не будете витрачати кошти на купівлю та обслуговування CRM системи. Запуском комунікацій, аналітикою та звітністю по проведених активностях займатиметься Fishka</p>
                    </div>
                </div>
                <div id="opp">
                    <img src="img/01_landing_icons_5.svg">
                    <div>
                        <h3>Отримайте експертну підтримку персонального менеджера</h3>
                        <p>Ваш персональний менеджер надасть підтримку в управлінні програмою лояльності, скоординує взаємодію між партнером та спеціалістами різних напрямків</p>
                    </div>
                </div>
                <div id="opp">
                    <img src="img/01_landing_icons_6.svg">
                    <div>
                        <h3>Обмінюйтесь досвідом та співпрацюйте з 22 партнерами програми</h3>
                        <p>Організовуйте зустрічі, діліться досвідом та запускайте спільні проекти</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="partners">
            <h2>Програма Fishka сьогодні – це:</h2>			
            <div class="advantages">
                <div id="adv1">
                        <h3>4 000 000</h3>
                        <h4>учасників</h4>
                        <p>програми лояльності, які можуть стати вашими клієнтами</p>
                </div>
                <div id="adv1">
                    <h3>253 000 000</h3>
                    <h4>грн балами</h4>
                    <p>зараз на рахунках клієнтів Fishka</p>
                </div>
                <div id="adv1">
                    <h3>2 400 000</h3>
                    <h4>грн балами</h4>
                    <p>клієнти використовують на винагороди щодня</p>
                </div>
                <div id="adv1">
                    <h3>82%</h3>
                    <h4>накопичених балів</h4>
                    <p>учасники програми використовують</p>
                </div>
            </div>
            <h2>Партнери програми</h2>
            <div class="partnersLogo">
				<div id="demos" class="row">
					<div class="owl-carousel owl-theme">
						<div class="item">
							<div id="simpleBlock">
								<a href="//myfishka.com/partner/001" target="blank"><img src="img/okko-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/lifeell-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/allo-logo.svg"></a>
							</div>							
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/furshet-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/rba-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/prostor-logo.svg"></a>
							</div>
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/add-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/psa-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/bi-logo.svg"></a>
							</div>
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/sku-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/shu-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/elit-logo.svg"></a>
							</div>
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/akb-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/blablacar-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/uber-logo.svg"></a>
							</div>
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/alaminute-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/pastamia-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/meiwei-logo.svg"></a>
							</div>
						</div>
						<div class="item">
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/carbook-logo.svg"></a>
							</div>	
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/megogo-logo.svg"></a>
							</div>
							<div id="simpleBlock">
								<a href="//google.com" target="blank"><img src="img/speakup-logo.svg"></a>
							</div>
						</div>
					</div>
				</div>
			<!--
                <div id="logo">
                    <div id="slide">
                        <img src="img/okko-logo.svg">
                        <img src="img/okko-logo.svg">
                        <img src="img/okko-logo.svg">
                    </div>
                    <div id="slide">
                        <img src="img/okko-logo.svg">
                        <img src="img/okko-logo.svg">
                        <img src="img/okko-logo.svg">
                    </div>
                </div>
                <div id="bullet">
                    <input type="radio" name="slide">
                    <input type="radio" name="slide">
                    <input type="radio" name="slide">
                </div>
			-->
            </div>
			<!------------------------------------------------------------------------------------------>
            <div class="secondForm">
                <img src="img/block3_round.png">
                <div id="roundForm">
                    <h2>Збільшуйте свої конкурентні переваги з програмою </h2>
                    <h3>Залиште свої контакти та отримайте унікальну пропозицію співпраці.</h3>
                    <form action="/" method="post">
                        <p>
                            <label>Номер телефону</label>
                            <input type="text" name="tel">
                        </p>
                        <p>
                            <label>Прізвище та ім'я</label>
                            <input type="text" name="name">
                        </p>
                        <p>
                            <input type="submit" name="submit" value="отримати пропозицію">
                        </p>
                    </form>
                </div>
            </div>
            <div class="footerMenu">
                <div id="copyright">&#9400; myfishka.com</div>
                <ul id="menu">
                    <li><a href="#" target="_blank">Правила програми</a></li>
                    <li><a href="#" target="_blank">Ви запитуєте</a></li>
                </ul>
                <div id="mail"><a href="mailto:email@gng.com.ua">email@gng.com.ua</a></div>
            </div>
        </div>
    </div>

<srcript src="js/main-script.js"></srcript>
    <script>
        setInterval(function() {
            var windHeight = innerHeight;
            //$('.mainBlock').css({'height':windHeight})
            //console.log(windowHeight);
        }, 1000);
    </script>
	<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
				autoplay:true,
				autoplayTimeout:6000,
				autoplaySpeed: 2000,
				autoplayHoverPause:true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 2
                  }
                }
              })
            })
	</script>
</body>
</html>