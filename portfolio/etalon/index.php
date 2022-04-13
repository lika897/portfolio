<?php	
	require "./assets/less/lessc.inc.php";	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Эталон ремонт</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<meta name="viewport" content="width=1200px">-->
    <link rel="stylesheet" href="./assets/css/style.css" type="text/css" />
    <script src="./assets/js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
</head>

<body>
    <div class="wrapper">
        <div id="mobile-menu">
            <div class="block">
                <ul>
                    <li class="men1">скидки</li>
                    <li class="men2">Цены</li>
                    <li class="men3">Отзывы</li>
                    <li class="men4">Рассрочка</li>
                    <li class="men5">Дизайн</li>
                    <li class="men6">Контакты</li>
                </ul>
            </div>
        </div>
        <header>
            <div class="container">
                <div class="row jbetween vcenter">
                    <!-- Кнопка Мобильного Меню -->
                    <button id="burger-menu">
                        <div class="box box_item1"></div>
                        <div class="box box_item2"></div>
                        <div class="box box_item3"></div>
                    </button>
                    <!-- Кнопка Мобильного Меню --> 
                    <div class="logo">
                        <a href="#">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </div>
                    <div class="menu">
                        <ul class="dflex">
                            <li class="men1">Скидки</li>
                            <li class="men2">цены</li>
                            <li class="men3">отзывы</li>
                            <li class="men4">рассрочка</li>
                            <li class="men5">дизайн</li>
                            <li class="men6">контакты</li>
                        </ul>
                    </div>
                    <div class="contact dflex fcolumn">
                        <a href="tel:+74954807360">+7 (495) 480-73-60</a>
                        <span>без выходных 8:00 - 22:00
</span>
                    </div>
                    <div class="call">
                        <button class="md-trigger" data-modal="modal-1">заказать звонок</button>
                    </div>

                </div>
            </div>
        </header>

        <section class="sec1">
            <div class="container">
                <div class="row fcolumn">
                    <h1>Ремонт квартир<br>
                    в москве и<br> области</h1>
                    <ul>
                        <li>Работаем без предоплат</li>
                        <li>Бесплатыный выезд в день обращения</li>
                        <li>Гарантия до 5 лет на все виды работ </li>

                    </ul>
                    <button>расчитать стоимость</button>
                </div>
            </div>
        </section>
        <section class="sec2">
            <div class="container">
                <img src="assets/img/s2.png" alt="">
            </div>
        </section>
        <section class="sec3">
            <div class="container">
                <div class="row fcolumn">
                    <div class="t1">Цены на комплексные ремонты </div>
                    <div class="tabs">
                        <ul class="tabs__caption dflex jcenter">
                            <li class="active">Косметический</li>
                            <li>капитальный</li>
                            <li>евро</li>
                            <li>Дизайнерский</li>
                        </ul>
                        <div class="tabs__content active">
                            <div class="block dflex">
                                <div class="left_b">
                                    <div class="img_b">
                                        <img src="assets/img/k1.png" alt="">
                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/shield.png" alt="">
                                        </div>
                                        
                                        <span>Полюс страхования на год<br>
                                        в подарок от <b>росгосстрах</b></span>

                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/gift.png" alt="">
                                        </div>
                                        <span>При заказе дизайн<br>
                                            проекта <b>скидка 10%</b></span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center_b">
                                    <div class="dtop">
                                        <div class="tt1">
                                        Какие Работы входят в ремонт?
                                    </div>
                                    <div class="tt2">
                                        <b>Стены</b>
                                        - частичная штукатурка стен; <br>
                                        - грунтовка пола, стен и потолка;<br> 
                                        - шпаклевка стен; <br>
                                        - поклейка обоев;<br>
                                    </div>
                                    <div class="tt2">
                                      <b>Пол</b>  
                                        - демонтаж существующих покрытий;<br>
                                        - выравнивание пола; <br>
                                        - окраска потолков;<br>
                                        - укладка ламината;<br>
                                        - монтаж плинтусов<br>
                                    </div>
                                    </div>
                                    <div class="tt3 dflex jbetween">
                                        <div class="tt_block">
                                            <div class="line1">
                                                Старая цена: <b>от 4990 руб./ м2</b>
                                            </div>
                                            <div class="line2">
                                                <b>от 4490 руб./ м2</b>
                                            </div>
                                            
                                           


                                        </div>
                                        <button>расчитать стоимость</button>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="right_b dflex jbetween fcolumn">
                                	<div class="tap">
                                		<div class="r1">
                                		Чистовые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite5"></span>
                                		<span class="sprite10"></span>
                                		<span class="sprite7"></span>
                                		<span class="sprite11"></span>
                                	</div>
                                	<ul>
                                		<li>Обои</li>
                                		<li>Линолеум</li>
                                		<li>Напольная плитка</li>
                                		<li>Пластиковые панели</li>
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 1 650 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 1 500 руб./м <sup>2</sup></div>

                                </div>
                                <div class="tap">
                                		<div class="r1">
                                		Чернивые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite9"></span>
                                		<span class="sprite4"></span>
                                		<span class="sprite3"></span>
                                	
                                	</div>
                                	<ul>
                                		<li>Смеси, грунтовки</li>
                                		<li>Гипсокартон, профии</li>
                                		<li>Реечный и натяжной потолок</li>
                                	
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 1 650 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 1 500 руб./м <sup>2</sup></div>

                                </div>
                                	</div>
                            </div>
                        </div>
                        <div class="tabs__content">
                             <div class="block dflex">
                                <div class="left_b">
                                    <div class="img_b">
                                        <img src="assets/img/k2.jpg" alt="">
                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/shield.png" alt="">
                                        </div>
                                        
                                        <span>Полюс страхования на год<br>
                                        в подарок от <b>росгосстрах</b></span>

                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/gift.png" alt="">
                                        </div>
                                        <span>При заказе дизайн<br>
                                            проекта <b>скидка 10%</b></span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center_b">
                                    <div class="dtop">
                                        <div class="tt1">
                                        Какие Работы входят в ремонт?
                                    </div>
                                    <div class="tt2">
                                        <b>Стены</b>
                                        - частичная штукатурка стен; <br>
                                        - грунтовка пола, стен и потолка;<br> 
                                        - шпаклевка стен; <br>
                                        - поклейка обоев;<br>
                                    </div>
                                    <div class="tt2">
                                      <b>Пол</b>  
                                        - демонтаж существующих покрытий;<br>
                                        - выравнивание пола; <br>
                                        - окраска потолков;<br>
                                        - укладка ламината;<br>
                                        - монтаж плинтусов<br>
                                    </div>
                                    </div>
                                    <div class="tt3 dflex jbetween">
                                        <div class="tt_block">
                                            <div class="line1">
                                                Старая цена: <b>от 4990 руб./ м2</b>
                                            </div>
                                            <div class="line2">
                                                <b>от 4490 руб./ м2</b>
                                            </div>
                                            
                                           


                                        </div>
                                        <button>расчитать стоимость</button>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="right_b dflex jbetween fcolumn">
                                	<div class="tap">
                                		<div class="r1">
                                		Чистовые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite5"></span>
                                		<span class="sprite10"></span>
                                		<span class="sprite7"></span>
                                		<span class="sprite11"></span>
                                	</div>
                                	<ul>
                                		<li>Обои</li>
                                		<li>Линолеум</li>
                                		<li>Напольная плитка</li>
                                		<li>Пластиковые панели</li>
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 2 717 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 2 470 руб./м <sup>2</sup></div>

                                </div>
                                <div class="tap">
                                		<div class="r1">
                                		Чернивые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite9"></span>
                                		<span class="sprite4"></span>
                                		<span class="sprite3"></span>
                                	
                                	</div>
                                	<ul>
                                		<li>Смеси, грунтовки</li>
                                		<li>Гипсокартон, профии</li>
                                		<li>Реечный и натяжной потолок</li>
                                	
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 1 650 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 1 500 руб./м <sup>2</sup></div>

                                </div>
                                	</div>
                            </div>
                        </div>
                        <div class="tabs__content">
                             <div class="block dflex">
                                <div class="left_b">
                                    <div class="img_b">
                                        <img src="assets/img/k3.jpg" alt="">
                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/shield.png" alt="">
                                        </div>
                                        
                                        <span>Полюс страхования на год<br>
                                        в подарок от <b>росгосстрах</b></span>

                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/gift.png" alt="">
                                        </div>
                                        <span>При заказе дизайн<br>
                                            проекта <b>скидка 10%</b></span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center_b">
                                    <div class="dtop">
                                        <div class="tt1">
                                        Какие Работы входят в ремонт?
                                    </div>
                                    <div class="tt2">
                                        <b>Стены</b>
                                        - частичная штукатурка стен; <br>
                                        - грунтовка пола, стен и потолка;<br> 
                                        - шпаклевка стен; <br>
                                        - поклейка обоев;<br>
                                    </div>
                                    <div class="tt2">
                                      <b>Пол</b>  
                                        - демонтаж существующих покрытий;<br>
                                        - выравнивание пола; <br>
                                        - окраска потолков;<br>
                                        - укладка ламината;<br>
                                        - монтаж плинтусов<br>
                                    </div>
                                    </div>
                                    <div class="tt3 dflex jbetween">
                                        <div class="tt_block">
                                            <div class="line1">
                                                Старая цена: <b>от 4990 руб./ м2</b>
                                            </div>
                                            <div class="line2">
                                                <b>от 4490 руб./ м2</b>
                                            </div>
                                            
                                           


                                        </div>
                                        <button>расчитать стоимость</button>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="right_b dflex jbetween fcolumn">
                                	<div class="tap">
                                		<div class="r1">
                                		Чистовые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite5"></span>
                                		<span class="sprite10"></span>
                                		<span class="sprite7"></span>
                                		<span class="sprite11"></span>
                                	</div>
                                	<ul>
                                		<li>Обои</li>
                                		<li>Линолеум</li>
                                		<li>Напольная плитка</li>
                                		<li>Пластиковые панели</li>
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 2 970 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 2 700 руб./м <sup>2</sup></div>

                                </div>
                                <div class="tap">
                                		<div class="r1">
                                		Чернивые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite9"></span>
                                		<span class="sprite4"></span>
                                		<span class="sprite3"></span>
                                	
                                	</div>
                                	<ul>
                                		<li>Смеси, грунтовки</li>
                                		<li>Гипсокартон, профии</li>
                                		<li>Реечный и натяжной потолок</li>
                                	
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 1 650 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 1 500 руб./м <sup>2</sup></div>

                                </div>
                                	</div>
                            </div>
                        </div>
                        <div class="tabs__content">
                             <div class="block dflex">
                                <div class="left_b">
                                    <div class="img_b">
                                        <img src="assets/img/k4.jpg" alt="">
                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/shield.png" alt="">
                                        </div>
                                        
                                        <span>Полюс страхования на год<br>
                                        в подарок от <b>росгосстрах</b></span>

                                    </div>
                                    <div class="desc_b">
                                        <div class="img_icon">
                                            <img src="assets/img/gift.png" alt="">
                                        </div>
                                        <span>При заказе дизайн<br>
                                            проекта <b>скидка 10%</b></span>
                                        
                                    </div>
                                    
                                </div>
                                <div class="center_b">
                                    <div class="dtop">
                                        <div class="tt1">
                                        Какие Работы входят в ремонт?
                                    </div>
                                    <div class="tt2">
                                        <b>Стены</b>
                                        - частичная штукатурка стен; <br>
                                        - грунтовка пола, стен и потолка;<br> 
                                        - шпаклевка стен; <br>
                                        - поклейка обоев;<br>
                                    </div>
                                    <div class="tt2">
                                      <b>Пол</b>  
                                        - демонтаж существующих покрытий;<br>
                                        - выравнивание пола; <br>
                                        - окраска потолков;<br>
                                        - укладка ламината;<br>
                                        - монтаж плинтусов<br>
                                    </div>
                                    </div>
                                    <div class="tt3 dflex jbetween">
                                        <div class="tt_block">
                                            <div class="line1">
                                                Старая цена: <b>от 4990 руб./ м2</b>
                                            </div>
                                            <div class="line2">
                                                <b>от 4490 руб./ м2</b>
                                            </div>
                                            
                                           


                                        </div>
                                        <button>расчитать стоимость</button>
                                        
                                        
                                    </div>
                                    
                                </div>
                                <div class="right_b dflex jbetween fcolumn">
                                	<div class="tap">
                                		<div class="r1">
                                		Чистовые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite5"></span>
                                		<span class="sprite10"></span>
                                		<span class="sprite7"></span>
                                		<span class="sprite11"></span>
                                	</div>
                                	<ul>
                                		<li>Обои</li>
                                		<li>Линолеум</li>
                                		<li>Напольная плитка</li>
                                		<li>Пластиковые панели</li>
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 3 300 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 3 000 руб./м <sup>2</sup></div>

                                </div>
                                <div class="tap">
                                		<div class="r1">
                                		Чернивые материалы
                                	</div>
                                	<div class="sprite">
                                		<span class="sprite9"></span>
                                		<span class="sprite4"></span>
                                		<span class="sprite3"></span>
                                	
                                	</div>
                                	<ul>
                                		<li>Смеси, грунтовки</li>
                                		<li>Гипсокартон, профии</li>
                                		<li>Реечный и натяжной потолок</li>
                                	
                                	</ul>
                                	<div class="old1">
                                		Старая цена: <b>от 1 650 руб./м <sup>2</sup></b>
                                	</div>	
                                	<div class="old2">от 1 500 руб./м <sup>2</sup></div>

                                </div>
                                	</div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
        <section class="sec4">
            <div class="container">
                <div class="row dflex fcolumn">
                    <div class="t1">
                        <span>Горячая скидка</span><br>до конца месяца
                    </div>
                    <div class="t2">
                        Скидка на черновой материал
                    </div>
                    <div class="t3"><img src="assets/img/s41.png" alt=""></div>

                </div>
                <div class="img_f"><img src="assets/img/s4.png" alt="" class="abs"></div>
            </div>
        </section>
        <section class="sec5">
            <div class="container">
                <div class="row jbetween">
                    <div class="form_block">
                        <div class="t1">
                            Закажите дизайн-проект
                        </div>
                        <ul>
                            <li>Выезд и консультация дизайнера бесплатно</li>
                            <li>Подбор материалов под ваш бюджет</li>
                            <li>Скидка на ремонт при заказе дизайна</li>
                            <li>Экономия бюджета и времени</li>
                        </ul>
                        <div class="form">
                            <form action="sender.php" method="post">
                                <div class="inpb">
                                    <input class="n1" type="text" name="name" placeholder="Имя">
                                    <input class="n2" type="text" name="phone" placeholder="Телефон">
                                </div>
                                <div class="tt1 frmchck">
                                    <span>Я даю свое согласие на обработку <a href="#">персональных данных</a>. </span>
                                    
                                </div>
                                <button type="button">ЗАКАЗАТЬ</button>
                            </form>
                        </div>
                        
                        
                    </div>
                    <div class="slider_block">
                            <div class="bx-slider1">
                                <img src="assets/img/s51.jpg" alt="">
                                <img src="assets/img/s52.jpg" alt="">
                                <img src="assets/img/s53.jpg" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </section>
        <section class="sec6">
        	<div class="container">
        		<div class="row fcolumn">
        			<div class="t1"><span>Примеры работ</span>
        				<button class="slider41 active sld4">новостройка</button>
        				<button class="slider42 sld4">вторичка</button>
        			</div>
        		</div>
        	</div>
        	<div class="block_slider_4 slider_active">
        				<div class="slider-s6">
        					<div class="item">
        						<img src="assets/img/s61.jpg" alt="">
        						<div class="tt1">
        								Капитальный<br> ремонт - 90м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Капитальный ремонт</b><br> 90м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<img src="assets/img/s63.jpg" alt="">
        						<div class="tt1">
        								Евроремонт<br> 72м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Евроремонт</b><br> 72м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<img src="assets/img/s64.jpg" alt="">
        						<div class="tt1">
        								Евро <br>ремонт - 62м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Евро ремонт</b><br> 62м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<img src="assets/img/s61.jpg" alt="">
        						<div class="tt1">
        								Дизайнерский<br> ремонт - 120м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Дизайнерский ремонт</b><br> 120м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>

        			<div class="block_slider_4">
        				<div class="slider-s6">
        					<div class="item">
        						<img src="assets/img/s61.jpg" alt="">
        						<div class="tt1">
        								Дизайнерский<br> ремонт - 120м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Дизайнерский ремонт</b><br> 120м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					
        					
        					<div class="item">
        						<img src="assets/img/s64.jpg" alt="">
        						<div class="tt1">
        								Евро <br>ремонт - 62м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Евро ремонт</b><br> 62м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<img src="assets/img/s63.jpg" alt="">
        						<div class="tt1">
        								Евроремонт<br> 72м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Евроремонт</b><br> 72м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					<div class="item">
        						<img src="assets/img/s61.jpg" alt="">
        						<div class="tt1">
        								Капитальный<br> ремонт - 90м<sup>2</sup>
        							</div>
        						<div class="txt">
        							<div class="t1">
        								<b>Капитальный ремонт</b><br> 90м<sup>2</sup>
        							</div>
        							<div class="t2">
        								Виды работ: Демонтаж старых покрытий, возведение перегородок, штукатурка стен, устройство гидроизоляции, устройство наливного пола, разводка сантехники, укладка плитки, установка сантехники, монтаж натяжного потолка
        							</div>
        						</div>
        					</div>
        					
        				</div>
        			</div>
        </section>
        <section class="sec7">
        	<div class="container">
        		<div class="row">
        			<div class="block">
        				<div class="t1">0%</div>
        				<div class="t2">Выгодная рассрочка</div>
        				<ul>
        					<li>Без первоначального взноса </li>
        					<li>Незаметно для семейного бюджета </li>
        					<li>Оформление в офисе за 20 минут </li>
        					<li>Сроком до 12 месяцев</li>
        				</ul>
        				<button>
        					Оставить заявку на рассрочку
        				</button>

        			</div>
        		</div>
        	</div>
        </section>
        <section class="sec71">
        	<div class="container">
        		<div class="row fcolumn">
        			<div class="t1">Вопросы и ответы</div>
        				<div id="accordeon">
		<div class="acc-head">
			КАКОЙ ПОРЯДОК ОПЛАТЫ
		</div>
		<div class="acc-body">
			Мы раотаембез предоплат. Оплата производится поэтапно, после приёма каждого этапа работы.
		</div>
		<div class="acc-head">
			В КАКОМ ФОРМАТЕ ПРОИЗВОДИТСЯ ОПЛАТА
		</div>
		<div class="acc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
		</div>
		<div class="acc-head">
			СТОИМОСТЬ В СМЕТЕ ОКНЧАТЕЛЬНАЯ?
		</div>
		<div class="acc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
		</div>
		<div class="acc-head">
			КАКИЕ МАСТЕРА РАБОТАЮТ НА ОБЪЕКТЕ?
		</div>
		<div class="acc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
		</div>
		<div class="acc-head">
			КАК МОЖНО СЛЕДИТЬ ЗА ХОДОМ РЕМОНТА?
		</div>
		<div class="acc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
		</div>
		<div class="acc-head">
			ЕСТЬ ЛИ ЛИЦЕНЗИИ И СЕРТИФИКАТЫ?
		</div>
		<div class="acc-body">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum saepe ex nesciunt, quidem quis illo cupiditate, quod maxime. Tenetur, ex quos. Magnam quasi iure facere minus velit voluptate accusamus hic!
		</div>
	</div>
        		</div>
        	</div>
        </section>
        <section class="sec8">
        	<div class="container">
        		<div class="row fcolumn">
        			<div class="t1">Как мы работаем?</div>
        			<div class="block dflex">
        				<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>1</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Отправьте заявку</div>
        						<div class="itt2">
        							Позвонить нам по номеру<br> <a href="+74954807360"> +7 (495) 480-73-60</a> или <br><span>
        								оставить заявку
        							</span>
        						</div>

        						
        					</div>
        					
        				</div>
        				<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>2</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Делаем замер
</div>
        						<div class="itt2">
        							Бесплатный выезд
замерщика на объект
        						</div>

        						
        					</div>
        					
        				</div>
        				<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>3</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Расчёт сметы</div>
        						<div class="itt2">
        							Расчёт сметы на объекте <br>за двадцать минут
        						</div>

        						
        					</div>
        					
        				</div>
        				<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>4</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Ремонт</div>
        						<div class="itt2">
        							Выполнение ремонтных работ<br>
в соответствии с графиком
        						</div>

        						
        					</div>
        					
        				</div>
        					<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>5</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Сдача объекта</div>
        						<div class="itt2">
        							Вы принимаете профессионально <br>
        							выполненный ремонт. Новоселье!
        						</div>

        						
        					</div>
        					
        				</div>
        					<div class="item dflex">
        					<div class="it1 dflex fcolumn">
        						<img src="assets/img/check.png" alt="">
        						<b>6</b>
        					</div>
        					<div class="it2">
        						<div class="itt1">Подписываем договор</div>
        						<div class="itt2">
        							Подписание договора
        							<br>
на объекте или в офисе компании
        						</div>

        						
        					</div>
        					
        				</div>
        			</div>
        		</div>

        	</div>
        </section>
        <section class="sec9">
        	<div class="container">
        		<div class="row">
        			<div class="rev_slide_block">
        			<div class="rev_slide">
        				<div class="comment">
        					<div class="slide">
        					<div class="img_block">
        						<img src="assets/img/s91.jpg" alt="">
        					</div>
        					<div class="comment_block">
        						<div class="t1">
        							Отзывы наших клиентов
        						</div>
        						<div class="txt">
        							“ Рассказываю всё как было с самого начала. Решила я обновить спальню, муж сразу сказал что у него нет времени возиться с мастерами-цыганами, у которых нужно стоять за спиной, когда они работают и сказал чтоб я нашла нормальную компанию. Обратилась в компанию ”Эталон”. На следующий день пришел прораб Александр, утвердили с ним материал и мастера сразу приступили к работе. Удивило, что ремонт сделали на 4 дня, как и обещали. Всем остались довольны. И материал сами закупили и убрались после ремонта, очень удобная фирма. Всем советую!
        						</div>
        						<div class="user">Анастасия Попова </div>


        					</div>

        				</div>
        				</div>
        				<div class="comment">
        					<div class="slide">
        					<div class="img_block">
        						<img src="assets/img/s91.jpg" alt="">
        					</div>
        					<div class="comment_block">
        						<div class="t1">
        							Отзывы наших клиентов
        						</div>
        						<div class="txt">
        							“ Рассказываю всё как было с самого начала. Решила я обновить спальню, муж сразу сказал что у него нет времени возиться с мастерами-цыганами, у которых нужно стоять за спиной, когда они работают и сказал чтоб я нашла нормальную компанию. Обратилась в компанию ”Эталон”. На следующий день пришел прораб Александр, утвердили с ним материал и мастера сразу приступили к работе. Удивило, что ремонт сделали на 4 дня, как и обещали. Всем остались довольны. И материал сами закупили и убрались после ремонта, очень удобная фирма. Всем советую!
        						</div>
        						<div class="user">Анастасия Попова </div>


        					</div>

        				</div>
        				</div>
        				<div class="comment">
        					<div class="slide">
        					<div class="img_block">
        						<img src="assets/img/s91.jpg" alt="">
        					</div>
        					<div class="comment_block">
        						<div class="t1">
        							Отзывы наших клиентов
        						</div>
        						<div class="txt">
        							“ Рассказываю всё как было с самого начала. Решила я обновить спальню, муж сразу сказал что у него нет времени возиться с мастерами-цыганами, у которых нужно стоять за спиной, когда они работают и сказал чтоб я нашла нормальную компанию. Обратилась в компанию ”Эталон”. На следующий день пришел прораб Александр, утвердили с ним материал и мастера сразу приступили к работе. Удивило, что ремонт сделали на 4 дня, как и обещали. Всем остались довольны. И материал сами закупили и убрались после ремонта, очень удобная фирма. Всем советую!
        						</div>
        						<div class="user">Анастасия Попова </div>


        					</div>

        				</div>
        				</div>
        				
        				
        			</div>
        			</div>
        		</div>
        	</div>
        </section>
        <section class="sec10">
        	<div class="container">
        		<div class="row fcolumn">
        			<div class="t1">Контакты</div>
        			<div class="block dflex jbetween">
        				<div class="item">
        					<div class="i1">
        						Россия, Москва
        					</div>
        					<div class="i2">
        						Одесская улица, 2кС,<br>БЦ "Лотос", 19 этаж</div>
        					<div class="i3">
        						INSTAGRAM@ETALON<br>
        					Email: <a href="mailto:info@etalon.ru"><b> e-mail: info@etalon.ru</b></a>
        				    </div>
        					<div class="i4">
        						Сайт не является публичной офертой и носит информационный характер.
        					</div>
        				</div>
        				<div class="item dflex fcolumn jbetween">
        					<div class="it1">
        						<div class="o1">+7 (495)
        					480-73-60</div>
        					<div class="o2">Без выходных 
        						8:00 - 22:00
        					</div>
        					<button class="md-trigger" data-modal="modal-1">заказать звонок</button>
        					
        					</div>
        					<div class="it1">
        						
        					
        					<div class="o3">
        						ООО «Строительная компания Эталон»<br>
        						<span>ИНН: 9718124680, ОГРН: 1197746024442</span><br>
        						<a href="">Политика конфиденциальности</a>
        					</div>
        					</div>
        				</div>

        		</div>
        	</div>
        </section>
        <footer>
        	<img class="map" src="assets/img/map.jpg" alt="">
        	<div class="footer_block">
        	<div class="container">
        		<div class="row fcolumn">
        			
        			
        				<div class="toop dflex jbetween">
        					<div class="logo_f">
        					<img src="assets/img/logo_white.png" alt="">
        					<div class="txt">
        						<span>строительная компания</span><br><br>
        						Сделаем ремонт в обозначенный<br>
        						срок или вернем деньги
        					</div>
        					
        				</div>
        				<div class="menus_f dflex jbetween">
        					<div class="menu_b">
        						<ul>
									<li class="men2"> Цены</li>
									<li class="men1">Скидки</li>
									<li class="men4">Рассрочка</li>
								</ul>
        					</div>
        					<div class="menu_b">
        						<ul>
									<li class="men7"> Портфолио</li>
									<li class="men3">Отзывы</li>
									<li class="men6">Контакты</li>
								</ul>
        					</div>
        					<div class="menu_l">
        						<div class="last_m">
        							Присоединяйтесь:<br>
        							<span>INSTAGRAM: @etalon_remont</span> 

        						</div>
        					</div>

        					
        				</div>
        				</div>
        				<div class="foot dflex jbetween">
        					<div class="copy">
        						© СК Эталон. Design by Costa. All Rights Resevered
        					</div>
        					<img class="totop" src="assets/img/totop.png" alt="">
        					
        				</div>
        				
        			</div>
        		</div>
        	</div>
        </footer>	
        
       
     <!--    <section class="sec71">
            <div class="container">
                <div class="row fcolumn">                    
                    <div id="accordeon">
                        <div class="acc-head">
                            КАКОЙ ПОРЯДОК ОПЛАТЫ?
                        </div>
                        <div class="acc-body">
                            Мы работаем без предоплаты. Оплата производится поэтапно, после приемки каждого этапа работ
                        </div>
                        <div class="acc-head">
                            В КАКОМ ФОРМАТЕ ПРОИЗВОДИТСЯ ОПЛАТА?
                        </div>
                        <div class="acc-body">
                            Выбирайте удобный для вас способ: наличными, по безналу или банковской картой.
                        </div>                        
                    </div>
                </div>
            </div>
        </section>  -->       
       
 <!--        <button class="md-trigger" data-modal="modal-1">заказать звонок</button>
    </div> -->



    <div class="md-modal md-effect-1" id="modal-1">
        <div class="md-content">
            <div class="t1">Заказать звонок</div>
            <div class="form">
                <form action="sender.php" method="post" id="wdh_form">
                    <div class="inpb">
                        <input class="n1" type="text" name="name" placeholder="Имя" required>
                    </div>
                    <div class="inpb">
                        <input class="n2" type="text" name="phone" placeholder="Телефон" required>
                        <input type="hidden" name="dop" value="Расчитать стоимость">
                    </div>
                    <div class="inpb">
                        <button id="sps">отправить</button>
                    </div>
                    <div class="snd">Я даю свое согласие на обработку персональных данных.</div>
                </form>
            </div>
            <div id="wdh_result_form"></div>
            <button class="md-close">X</button>
        </div>
    </div>

    <div class="md-modal md-effect-2" id="sps">
        <div class="md-content">
            <div class="t1">Форма отправлена</div>
            <div class="t2">Спасибо, что оставили заявку. Мы перезвоним вам через 5 минут.</div>

            <button class="md-close">X</button>
        </div>
    </div>


    <div class="md-overlay"></div><!-- the overlay element -->

    <!-- classie.js by @desandro: https://github.com/desandro/classie -->
    <script src="./assets/js/classie.js"></script>
    <script src="./assets/js/modalEffects.js"></script>

    <!-- for the blur effect -->
    <!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
    <script>
        // this is important for IEs
        var polyfilter_scriptpath = './assets/js/';

    </script>
    <script src="./assets/js/cssParser.js"></script>
    <script src="./assets/js/css-filters-polyfill.js"></script>
    <script src="./assets/js/jquery-1.11.1.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>

    <script src="./assets/js/jquery.bxslider.min.js"></script>
    <script>
        $(document).ready(function() {            

           /* $('.slider-s6').bxSlider({
                minSlides: 1,
                maxSlides: 4,
                slideWidth: 427,
                slideMargin: 31,
                moveSlides: 1,
                controls: false
            });*/
              $('.bx-slider1').bxSlider({
                controls:false,
                auto: true,
                 
                

            
            });
              $('.slider-s6').bxSlider({
              	minSlides:1,
              	maxSlides:4,
              	slideWidth:427,
              	slideMargin:31,
              	moveSlides:1,
              	controls:false,
              });

              $('.rev_slide').bxSlider({
                controls:false,
                auto: true,

                 
                

            
            });


        });
        var burgerCtr = document.querySelector("#burger-menu");
        var menuCtr = document.querySelector("#mobile-menu");
        burgerCtr.addEventListener("click", function() {
            this.classList.toggle("active");
            menuCtr.classList.toggle("show_mobile_menu");
        });



        // function show()
        // {
        //     $.ajax({
        //         url: "sender.php",
        //         cache: false,
        //         success: function(html){
        //             $("#content").html(html);
        //         }
        //     });
        // }
    
        // $(document).ready(function(){
        //     show();
        //     setInterval('show()',1000);
        // });


    $("#wdh_form").submit(function(e){
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "sender.php",
        data: $("#wdh_form").serialize(),
        success: function(data) {
            $("#wdh_result_form").html(data);
        }

    });
});





    </script>
</body>

</html>
