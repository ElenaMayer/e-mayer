<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="<?=$lang?>">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?= $lang == 'ru' ? 'Web-разработчик '.$name_ru : 'Web-developer '.$name_en ?></title>

		<meta name="description" content="<?= $lang == 'ru' ? 'Портфолио Web-разработчик '.$name_ru : 'Web-developer '.$name_en ?>" />
		<meta name="keywords" content="<?= $lang == 'ru' ? 'web, разработка, программирование, портфолио' : 'web development, portfolio, programming' ?>, html, css, javascript, jquery, php, yii" />
		<meta name="author" content="<?= $name_en ?>" />

		<!-- Open Sans Google font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
		<!-- Raleway Google font -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:700">
		<!-- Favicons -->
		<link rel="shortcut icon" href="img/favico/favicon.ico">
		<link rel="apple-touch-icon" sizes="60x60" href="img/favico/apple-icon-60x60.png">
		<!-- Fontawesome fonts css file -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Animate.css file -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Owl carousel css file -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Bootstrap file -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Custom styles css file -->
		<link rel="stylesheet" href="css/style.css?4">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>	
		<!-- Start Preloader Page --> 
		<div class="preloader">
			<div class="pulse"></div>
			<div class="pulse"></div>
		</div>
		<!-- End Preloader Page -->

		<!-- Start Header Section -->
		<div class="header" id="header">
			<div id="large-header" class="large-header">
				<canvas id="demo-canvas"></canvas>
				<div class="content center">
					<div class="container">
						<p><?= $lang == 'ru' ? 'Привет! Меня зовут' : 'Hello, It\'s me' ?></p>
						<h1><?= $lang == 'ru' ? $name_ru  : $name_en ?></h1>
						<p><?= $lang == 'ru' ? 'Web-разработчик' : 'Web-developer' ?></p>
						<a href="#about-me"><?= $lang == 'ru' ? 'Обо мне' : 'Read more' ?></a>
						<a href="#portfolio"><?= $lang == 'ru' ? 'Мои работы' : 'My works' ?></a>
					</div> <!-- End container -->
				</div>
				<div class="mouse" id="mouse"></div>  <!-- Mouse Icon -->
			</div>
		</div>
		<!-- End Header Section -->

        <!-- Start Lang Switcher -->
        <div class="lang-switcher">
            <?php if($lang == 'en'):?>
                <a href="/">Рус</a>
                <span>Eng</span>
            <?php else: ?>
                <span>Рус</span>
                <a href="/?en">Eng</a>
            <?php endif?>
        </div>
        <!-- End Lang Switcher -->

		<!-- Start Side Menu -->
		<nav id="top-nav">
			<div class="logo center"><a href="/"><?= $name_en ?></a></div> <!-- LOGO -->
			<div class="menu" id="menu">
				<span class="bar b1"></span>
				<span class="bar b2"></span>
				<span class="bar b3"></span>
			</div>
			<div class="side-menu" id="side-menu"> <!-- Menu items -->
				<a href="#header"><?= $lang == 'ru' ? 'Главная' : 'Home' ?></a>
				<a href="#about-me"><?= $lang == 'ru' ? 'Обо мне' : 'About me' ?></a>
				<a href="#services"><?= $lang == 'ru' ? 'Чем я занимаюсь' : 'Services' ?></a>
				<a href="#skills"><?= $lang == 'ru' ? 'Навыки' : 'Skills' ?></a>
				<a href="#experiences">Опыт<?= $lang == 'ru' ? '' : 'Experiences' ?></a>
				<a href="#portfolio"><?= $lang == 'ru' ? 'Портфолио' : 'Portfolio' ?></a>
				<a href="#contact-me"><?= $lang == 'ru' ? 'Связаться со мной' : 'Contact Me' ?></a>
			</div>
		</nav>
		<!-- End Side Menu -->

		<!-- Start About Me Section -->
		<div class="about-me clearfix" id="about-me">
			<div class="container">
				<div class="row">
					<!-- Profile Pic -->
					<div class="my-pic center col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<img src="http://placehold.it/200x200" alt="my profile">
					</div>
					<div class="introduction col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<h2 class="h2"><?= $lang == 'ru' ? $name_ru : $name_en ?></h2>
						<div class="heading-line"></div>
						<p class="introduce"><?= $lang == 'ru' ? 'Талантливый Full-Stack Разработчик' : 'Talented Full-Stack Web Developer' ?></p>
						<p class="intro"><?= $lang == 'ru' ?
                                'Программирование - это моя профессия и хобби.' :
                                'Programming is my profession and hobby.'
                            ?>
                        </p>
                    </div>
				</div>
				<div class="row">
					<div class="profile col-sm-4 col-xs-12 wow fadeInUp text-center" data-wow-duration="0.5s" data-wow-offset="200">
						<h3><?= $lang == 'ru' ? 'обо мне' : 'personal info' ?></h3>
						<div class="heading-line"></div>
						<div class="personal-wrapper">
							<span><strong><?= $lang == 'ru' ? 'имя:' : 'name:' ?> </strong><?= $lang == 'ru' ? $name_ru : $name_en ?></span>
							<span><strong>E-mail: </strong><a href="<?= $email ?>"><?= $email ?></a></span>
							<span><strong><?= $lang == 'ru' ? 'номер телефона:' : 'phone number:' ?> </strong><?= $phone ?></span>
						</div>
					</div>
					<div class="why-me col-sm-8 col-xs-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<!-- Start Accordion -->
						<div class="accordion">
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Обо мне' : 'Who am i?' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                    '!!!Стремлюсь к самосовершенствованию и всегда довожу начатое дело до конца.' :
                                    '!!!' ?></div>
							</div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Чем я занимаюсь?' : 'What i\'m doing?' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                    'Разработкой, созданием и поддержкой сервисов любой сложности. Разработкой архитектуры и UX/UI дизайном.' :
                                    'Development and support of services of any complexity. Services architecture and UX / UI design.' ?></div>
							</div>
                            <div class="acc-item">
                                <div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Что я могу Вам предложить?' : 'What I\'m really good at?' ?></div>
                                <div class="acc-content"><?= $lang == 'ru' ?
                                    'Создание интернет-магазина, сайта или сервиса с нуля; Улучшение и доработка существующего сайта/сервиса; Помощь в реализации сложных проектов.' :
                                    'Creating an online store, website or service from scratch; Improvement of the existing website/service; Assistance in the implementation of complex projects.' ?></div>
                            </div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Мои хобби' : 'What is my hobbies' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                    'Создание красивых и удобных сервисов, фотография, путешествия, саморазвитие и самосовершенствование.' :
                                    'Creation of beautiful and convenient services, photography, travel, self-development and self-improvement.' ?></div>
							</div>
						</div> <!-- End Accordion -->
					</div>
				</div>
			</div>
		</div>
		<!-- End About Me Section -->

		<!-- Start Fun Facts Section -->
		<div class="fun-facts center" id="facts">
			<div class="pattern"></div>
			<div class="container">
				<div class="row">
					<!-- Fact No. 1 -->
					<div class="col-md-3 col-sm-6">
						<div class="fact">
							<i class="fa fa-code"></i>
							<p id="number_1">0</p>
							<span><?= $lang == 'ru' ? 'строчек кода' : 'lines of code' ?></span>
						</div>
					</div>
					<!-- Fact No. 2 -->
					<div class="col-md-3 col-sm-6">
						<div class="fact">
							<i class="fa fa-code-fork"></i>
							<p id="number_2">0</p>
							<span><?= $lang == 'ru' ? 'проектов' : 'projects done' ?></span>
						</div>
					</div>
					<!-- Fact No. 3 -->
					<div class="col-md-3 col-sm-6">
						<div class="fact">
							<i class="fa fa-coffee"></i>
							<p id="number_3">0</p>
							<span><?= $lang == 'ru' ? 'кружки кофе' : 'cups of coffee' ?></span>
						</div>
					</div>
					<!-- Fact No. 4 -->
					<div class="col-md-3 col-sm-6">
						<div class="fact">
							<i class="fa fa-smile-o"></i>
							<p id="number_4">0</p>
							<span><?= $lang == 'ru' ? 'пользователей' : 'satisfied customers' ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Fun Facts Section -->

		<!-- Start Services Section -->
		<div class="services center" id="services">
			<div class="container">
				<!-- Title -->
				<div class="title">
					<h2 class="h2"><?= $lang == 'ru' ? 'Чем я занимаюсь' : 'Here\'s what i\'m doing' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                        'Full stack разработка, разработка архитектуры, UX/UI дизайн.' :
                        '!!!Progressively reintermediate magnetic services vis-a-vis focused supply chains. Appropriately coordinate high-quality human capital without.' ?></p>
				</div>	
				<div class="row">
					<!-- Service No. 1 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-css3"></i>
							<h3><?= $lang == 'ru' ? 'Backend разработка' : 'Backend developing' ?></h3>
							<p><?= $lang == 'ru' ?
                                'Разработка серверной части приложения.' :
                                '!!!' ?></p>
						</div>
					</div>
					<!-- Service No. 2 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-code"></i>
							<h3><?= $lang == 'ru' ? 'Frontend разработка' : 'Frontend developing' ?></h3>
							<p><?= $lang == 'ru' ?
                                'Верстка на клиентской стороне пользовательского интерфейса.' :
                                '!!!' ?></p>
						</div>
					</div>
					<!-- Service No. 3 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-laptop"></i>
							<h3><?= $lang == 'ru' ? 'UX/UI дизайн' : 'UX/UI design' ?></h3>
							<p><?= $lang == 'ru' ?
                                'Разработка качественного пользовательского интерфейса.' :
                                '!!!' ?></p>
						</div>
					</div>
					<!-- Service No. 4 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-life-buoy"></i>
							<h3><?= $lang == 'ru' ? 'Поддержка 24/7' : '24/7 support' ?></h3>
							<p><?= $lang == 'ru' ?
                                'Поддержка Вашего приложения в любое время дня и ночи.' :
                                '!!!' ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Services Section -->

		<!-- Start Technical Skills Section -->
		<div class="technical-skills center" id="skills">
			<div class="pattern"></div>
			<div class="container">
				<!-- Title -->
				<div class="title">
					<h2 class="h2"><?= $lang == 'ru' ? 'технические навыки' : 'technical skills' ?></h2>
					<div class="heading-line"></div>
					<p class="title"><?= $lang == 'ru' ?
                            'Настройка web-серверов, работа с базами данных, работа с системами контроля версий и многое другое' :
                            '!!!' ?></p>
				</div>	
				<!-- Start main skills -->
				<div class="skills-wrapper row">
					<!-- main skill No. 1 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="97">
                            <span><span id="chart_num_4">0</span> %</span>
                        </div>
                        <h2>php</h2>
                    </div>
					<!-- main skill No. 2 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="73">
                            <span><span id="chart_num_3">0</span> %</span>
                        </div>
                        <h2>javascript</h2>
                    </div>
					<!-- main skill No. 3 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="89">
                            <span><span id="chart_num_2">0</span> %</span>
                        </div>
                        <h2>css3</h2>
                    </div>
					<!-- main skill No. 4 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="95">
                            <span><span id="chart_num_1">0</span> %</span>
                        </div>
                        <h2>html5</h2>
                    </div>
				</div> <!-- End main skills -->
                <!-- Start main skills -->
                <div class="skills-wrapper row">
                    <!-- main skill No. 1 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="76">
                            <span><span id="chart_num_5">0</span> %</span>
                        </div>
                        <h2>SQL</h2>
                    </div>
                    <!-- main skill No. 2 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="85">
                            <span><span id="chart_num_6">0</span> %</span>
                        </div>
                        <h2>jquery</h2>
                    </div>
                    <!-- main skill No. 3 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="94">
                            <span><span id="chart_num_7">0</span> %</span>
                        </div>
                        <h2>yii/yii2</h2>
                    </div>
                    <!-- main skill No. 4 -->
                    <div class="skill col-md-3 col-sm-6">
                        <div class="chart center" data-percent="83">
                            <span><span id="chart_num_8">0</span> %</span>
                        </div>
                        <h2>svn/git</h2>
                    </div>
                </div> <!-- End main skills -->
				<div class="other-skills">
					<h2 class="h2"><?= $lang == 'ru' ? 'другие навыки' : 'other skills' ?></h2>
					<div class="heading-line"></div>
					<p class="title"><?= $lang == 'ru' ?
                            '' :
                            'Distinctively implement granular e-commerce whereas business innovation. Rapidiously unleash viral niches vis-a-vis real-time catalysts.' ?></p>
					<!-- Start other skills -->
					<div class="skills-wrapper row">
						<!-- Skill No. 1 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="75" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'коммуникабельность' : 'communication' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 2 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="92" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'организованность' : 'organization' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 3 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="94" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'ответственность' : 'responsibility' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 4 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="85" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'любознательность' : 'inquisitive' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 5 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'планирование' : 'planning' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 6 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="87" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'обучаемость' : 'learning' ?>" data-show-values="true" data-unit="%"></div>
						</div>
					</div>	<!-- End other skills -->
				</div>	
			</div>
		</div>
		<!-- End Technical Skills Section -->

		<!-- Start Experience Section -->
		<div class="experiences center" id="experiences">
			<div class="container">
				<!-- Title -->
				<div class="title wow fadeIn" data-wow-duration="0.5s" data-wow-offset="200">
					<h2 class="h2"><?= $lang == 'ru' ? 'образование и опыт работы' : 'educations and work experiences' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                            'Два высших образования и больше 10 лет работы в IT-индустрии' :
                            'Two higher educations and more than 10 years of work in the IT industry' ?></p>
				</div>	
				<!-- start timeline -->
				<div class="timeline wow fadeIn" data-wow-duration="0.5s" data-wow-offset="200">
                    <!-- Event No. 1 -->
                    <div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
                        <div class="icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="content right round-corners">
                            <h3><?= $lang == 'ru' ? 'СибГУТИ' : 'SibSUTIS' ?></h3>
                            <span class="duration">( 2003 - 2008 )</span>
                            <span class="job-title"> <?= $lang == 'ru' ? 'Дипломированный специалист' : 'Specialist of' ?></span>
                            <p><?= $lang == 'ru' ? 'По специальности "Средства связи с подвижными объектами"' : 'Means mobile communications' ?></p>
                        </div>
                    </div>
					<!-- Event No. 1 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="content left round-corners">
							<h3><?= $lang == 'ru' ? 'СибГУТИ' : 'SibSUTIS' ?></h3>
							<span class="duration">( 2008 - 2011 )</span>
							<span class="job-title"> <?= $lang == 'ru' ? 'Дипломированный специалист' : 'Specialist of' ?></span>
							<p><?= $lang == 'ru' ? 'По специальности "Экономика и управление на предприятии"' : 'Economics and Enterprise Management' ?></p>
						</div>
					</div>
					<!-- Event No. 2 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="content right round-corners">
							<h3>Novotelecom </h3>
							<span class="duration">( 2008 - 2012 )</span>
							<span class="job-title"> <?= $lang == 'ru' ? 'Программист' : 'Web-programmer' ?></span>
							<p><?= $lang == 'ru' ?
                                'Разработка внутренних сервисов (ЦРМ, интернет-портал); Кросс-системная интеграция и архитектурные задачи; Разработка корпоративного портала и промо-сайтов.' :
                                'Development of internal services (CRM, Internet portal); Cross-system integration and architectural tasks; Development of a corporate portal and promo sites.' ?></p>
						</div>
					</div>
					<!-- Event No. 3 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-archive"></i>
						</div>
						<div class="content left round-corners">
							<h3>2GIS</h3>
							<span class="duration">( 2012 - 2018 )</span>
							<span class="job-title"> <?= $lang == 'ru' ? 'Web-разработчик' : 'Web-programmer' ?></span>
							<p><?= $lang == 'ru' ?
                                'Разработка внутренних и внешних сервисов (корпоративный портал, интернет-портал, сервис перевода и другое); Интеграция с другими сервисами компании; Разработка масштабируемой и отказоустойчивой архитектуры' :
                                'Development of internal and external services (corporate portal, internet portal, translation service, etc.); Integration with other services of the company.; Development of scalable and fail-safety architecture' ?></p>
						</div>
					</div>
					<!-- Event No. 4 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-star"></i>
						</div>
						<div class="content right round-corners">
							<h3>RebelMouse</h3>
							<span class="duration">( 2015 - 2015 )</span>
							<span class="job-title"> <?= $lang == 'ru' ? 'Frontend-разработчик' : 'Frontend-programmer' ?></span>
							<p><?= $lang == 'ru' ?
                                'Разработка, усовершенствование и оптимизация UX / UI; Оптимизация под мобильные устройства.' :
                                'Development, improvement and optimization of UX / UI; Project optimization for mobile device interaction with the backend.' ?></p>
						</div>
					</div>
				</div> <!-- End Timeline -->
			</div>
		</div>
		<!-- End Experience Section -->

		<!-- Start Quote Section -->
		<div class="quote">
			<div class="overlay"></div>
			<div class="container">
				<div class="qoute-wrapper">
					<p class="words"><span class="quote-mark open">"</span><?= $lang == 'ru' ? '!!!' : '!!!Even if you are on the right track, you will get run over if you just set there.' ?>
                        <span class="quote-mark end">"</span></p>
					<p class="author">- <?= $lang == 'ru' ? '!!!' : '!!!Will Rogers' ?> -</p>
				</div>
			</div>
		</div>
		<!-- End Quote Section -->

		<!-- Start Portfolio Section -->
		<div class="portfolio" id="portfolio">
			<div class="container">
				<!-- Title -->
				<div class="center">
					<h2 class="h2"><?= $lang == 'ru' ? 'Мое портфолио' : 'My awesome portfolio' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                        '' :
                        'Collaboratively fabricate alternative quality vectors through multimedia based web services. Conveniently procrastinate cost effective.' ?></p>
				</div>	
				<!-- Mixitup controls -->
				<div class="controls center">  
					<button class="filter round-corners" data-filter="all" data-content="<?= $lang == 'ru' ? 'ВСЕ' : 'ALL' ?>"><?= $lang == 'ru' ? 'Все' : 'All' ?></button>
					<button class="filter round-corners" data-filter=".store" data-content="<?= $lang == 'ru' ? 'Интернет-магазин' : 'Online store' ?>"><?= $lang == 'ru' ? 'Интернет-магазин' : 'Online store' ?></button>
					<button class="filter round-corners" data-filter=".website" data-content="<?= $lang == 'ru' ? 'САЙТ' : 'WEBSITE' ?>"><?= $lang == 'ru' ? 'Сайт' : 'Website' ?></button>
				</div>	
				<div id="Container">
					<!-- Project No. 1 -->
					<div class="mix store col-md-3 col-sm-6 col-xs-6" data-my-order="1">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 1">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-1"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="label_1">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_1">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( store )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-1">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 2 -->
					<div class="mix store col-md-3 col-sm-6 col-xs-6" data-my-order="2">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 2">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-2"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="label_2">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_2">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( store )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-2">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 3 -->
					<div class="mix store col-md-3 col-sm-6 col-xs-6" data-my-order="3">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 3">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-3"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="label_3">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_3">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( store )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-3">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 4 -->
					<div class="mix website col-md-3 col-sm-6 col-xs-6" data-my-order="4">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 4">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-4"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="label_4">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_4">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( website )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-4">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 5 -->
					<div class="mix website col-md-3 col-sm-6 col-xs-6" data-my-order="5">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 5">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-5"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="label_5">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_5">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( website )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-5">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 6 -->
					<div class="mix website col-md-3 col-sm-6 col-xs-6" data-my-order="6">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 6">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-6"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="label_6">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_6">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( website )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-6">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 7 -->
					<div class="mix website col-md-3 col-sm-6 col-xs-6" data-my-order="7">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 7">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-7"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="label_7">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_7">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( website )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-7">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>

					<!-- Project No. 8 -->
					<div class="mix website col-md-3 col-sm-6 col-xs-6" data-my-order="8">
						<div class="img-wrapper overlay-slide-right center">
							<!-- Project Image -->
							<img src="http://placehold.it/640x420" class="center-block img-responsive" alt="project 8">
							<div class="overlay-content">
								<span>project name</span>
								<i class="fa fa-search" data-toggle="modal" data-target="#modal-8"></i>
							</div>
					    </div>
					    <!-- Modal -->
						<div class="modal fade" id="modal-8" tabindex="-1" role="dialog" aria-labelledby="label_8">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h3 class="modal-title" id="label_8">Project Name</h3>
										<div class="heading-line"></div>
										<p class="cat">( website )</p>
									</div>
									<!-- Modal Body -->
									<div class="modal-body">
										<!-- Project Image In Modal -->
										<img class="center-block img-responsive" src="http://placehold.it/640x420" alt="project-8">
										<p>Energistically develop reliable content for leading-edge networks. Dramatically enhance optimal testing procedures and multimedia based e-commerce. Holisticly syndicate standardized human capital without extensible experiences. <br> Efficiently synthesize client-based solutions through resource sucking systems. Proactively visualize mission-critical paradigms before competitive value. Efficiently disintermediate resource sucking e-markets via visionary e-markets.</p>
									</div>
								</div>
							</div>
						</div>  <!-- End Modal -->
					</div>
				</div>
			</div>	
		</div>
		<!-- End Portfolio Section -->

		<!-- Start Contact Section -->
		<div class="contact center" id="contact-me">
			<div class="container">
				<!-- Title -->
				<div class="title wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
					<h2 class="h2"><?= $lang == 'ru' ? 'Связаться со мной' : 'Get in touch' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                        '!!!' :
                        '!!!' ?></p>
				</div>
				<div class="row form-wrapper">
					<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
						<!-- Contact-Me Form -->
						<form data-toggle="validator" role="form" id="contact-form">
							<div class="form-group has-feedback">
								<input type="text" name="name" id="name" class="form-control" data-error="<?= $lang == 'ru' ? 'Пожалуйста, введите Ваше имя' : 'Please, Enter Your Name.' ?>" required>
								<label for="name"><?= $lang == 'ru' ? 'Ваше имя' : 'Your Name' ?></label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="form-group has-feedback">
								<input type="email" name="mail" id="mail" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" data-error="<?= $lang == 'ru' ? 'Введите корректный E-mail' : 'Your E-mail isn\'t correct' ?>" required>
								<label for="mail"><?= $lang == 'ru' ? 'Ваш E-mail' : 'Your E-mail' ?></label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="form-group has-feedback">
								<textarea name="message" id="message" class="form-control" data-error="<?= $lang == 'ru' ? 'Пожалуйста, введите Ваге сообщение' : 'Please, Type Your Message' ?>" required></textarea>
								<label for="message"><?= $lang == 'ru' ? 'Сообщение' : 'Your Message Here' ?></label>
								<span class="help-block with-errors"></span>
							</div>
							<div class="submit-container">
								<button type="submit" class="btn submit-btn"><?= $lang == 'ru' ? 'Отправить' : 'Send Your Message' ?></button>
							</div>
							<p class="form-response"></p>
						</form> <!-- End Form -->
					</div>
				</div>
				<!-- Contact Details -->
				<div class="row contact-info">
					<div class="col-md-3 col-sm-6 col-xs-12 info">
						<i class="fa fa-phone center"></i>
						<div class="info-content">
							<h3><?= $lang == 'ru' ? 'Позвонить' : 'call me' ?></h3>
							<span><?= $phone ?></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 info">
						<i class="fa fa-envelope center"></i>
						<div class="info-content">
							<h3><?= $lang == 'ru' ? 'Написать' : 'Send a message' ?></h3>
							<span><?= $email ?></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 info">
						<i class="fa fa-home center"></i>
						<div class="info-content">
							<h3><?= $lang == 'ru' ? 'Посетить' : 'Visit me' ?></h3>
							<span><?= $lang == 'ru' ? 'Россия, Новосибирск' : 'RF, Novosibirsk' ?></span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 info">
						<i class="fa fa-clock-o center"></i>
						<div class="info-content">
							<h3><?= $lang == 'ru' ? 'Рабочее время' : 'Work time' ?></h3>
							<span><?= $lang == 'ru' ? 'Пн - Пт' : 'Mon - Fri' ?> : 09.00 - 18.00 </span>
						</div>
					</div>
				</div>				
			</div>
			<!-- Google Map -->
			<div id="map"></div>
		</div>
		<!-- End Contact Section -->

		<!-- Start Partners Section -->
		<div class="partners">
			<div class="container">
				<div class="partners-owl-carousel">
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
					<div class="partner"><img src="http://placehold.it/365x110" alt="partner"></div>
				</div>
			</div>
		</div>		
		<!-- End Partners Section -->

		<!-- Start Footer Section -->
		<div class="footer center">
			<div class="container">
				<div class="row">
					<div class="follow-me"><?= $lang == 'ru' ? 'я в соцсетях' : 'follow me' ?></div>
					<div class="col-md-12 col-xs-12 links">
						<!-- Social links -->
						<div class="icon-wrapper center">
                            <!-- Twitter Link -->
                            <a href="<?= $link_vk ?>" class="icon vk">
                                <i class="fa fa-vk"></i>
                                <i class="fa fa-vk"></i>
                            </a>
							<!-- Facebook Link -->
							<a href="<?= $link_fb ?>" class="icon fb">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-facebook"></i>
							</a>
							<!-- Instagram Link -->
							<a href="<?= $link_ig ?>" class="icon ig">
								<i class="fa fa-instagram"></i>
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
					<div class="col-md12 col-xs-12 copyright">
						<h6>&copy; <?= $domain ?> 2018 <?= $lang == 'ru' ? 'Все права защищены.' : 'All RightsReserved.' ?></h6>
					</div>
				</div>	
			</div>
		</div>
		<!-- End Footer Section -->			

		<!-- Start To Top button -->
		<div class="back-to-top center">
			<i class="fa fa-long-arrow-up"></i>
		</div>
		<!-- End To Top button -->	

		<!-- Start scroll percentage -->
		<div id="scroll"></div>
		<!-- End scroll percentage -->		

		<!-- Including jQuery file -->
		<script src="js/jquery-1.12.1.min.js"></script>
		<!-- Including jQuery.appear file -->
		<script src="js/jquery.appear.js"></script>
		<!-- Bootstrap js file -->
		<script src="js/bootstrap.min.js"></script>
		<!-- easy pie chart -->
		<script src="js/jquery.easypiechart.min.js"></script>
		<!-- NiceScroll plugin -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- animate numbers plugin -->
		<script src="js/jquery.animatenumber.min.js"></script>
		<!-- Horizontal bar chart -->
		<script src="js/bars.js"></script>
		<!-- mixitup plugin -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- animated background header -->
		<script src="js/tweenlite.min.js"></script>
		<!-- form validation file -->
		<script src="js/validator.min.js"></script>
		<!-- Owl carousel js file -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Google Map -->		
		 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?= $google_api_key ?>"></script>
		<!-- Custom file  -->
		<script src="js/plugins.js?3"></script>
		<!-- Wow.js file -->
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>