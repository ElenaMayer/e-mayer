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
		<link rel="stylesheet" href="css/style.css?2">

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
				<a href="#services"><?= $lang == 'ru' ? '!!!' : 'Services' ?></a>
				<a href="#skills"><?= $lang == 'ru' ? 'Навыки' : 'Skills' ?></a>
				<a href="#experiences">Опыт<?= $lang == 'ru' ? '' : 'Experiences' ?></a>
				<a href="#portfolio"><?= $lang == 'ru' ? 'Портфолио' : 'Portfolio' ?></a>
				<a href="#testmonials"><?= $lang == 'ru' ? '!!!' : 'Testmonials' ?></a>
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
                                '!!!' :
                                '!!!Enthusiastically reintermediate leveraged potentialities and wireless web services. Distinctively maintain ubiquitous best practices through market positioning materials. Progressively reintermediate ubiquitous channels via bricks-and-clicks technology. Distinctively formulate innovative relationships and high standards.'
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
                                        '!!!' :
                                        '!!!Monotonectally iterate B2C solutions for interactive solutions. Uniquely synergize client-based channels vis-a-vis robust meta-services. Uniquely leverage other\'s multidisciplinary web-readiness after optimal.' ?></div>
							</div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? '!!!' : 'What I\'m really good at?' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                        '!!!' :
                                        '!!!Efficiently formulate cross-unit partnerships whereas an expanded array of infrastructures. Intrinsicly whiteboard extensible markets before just.' ?></div>
							</div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Как со мной связаться?' : 'How can you contact me?' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                        '!!!' :
                                        '!!!Proactively empower cutting-edge web services via virtual methodologies. Assertively foster cross-unit benefits via premier mindshare. Proactively target customized channels and team building catalysts.' ?></div>
							</div>
							<div class="acc-item">
								<div class="acc-title"><i class="fa fa-plus"></i> <?= $lang == 'ru' ? 'Мои хобби' : 'What is my hobbies' ?></div>
								<div class="acc-content"><?= $lang == 'ru' ?
                                        '!!!' :
                                        '!!!Compellingly evisculate standardized metrics with 2.0 value. Professionally impact magnetic technologies without.' ?></div>
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
                            '!!!' :
                            '!!!Progressively reintermediate magnetic services vis-a-vis focused supply chains. Appropriately coordinate high-quality human capital without.' ?></p>
				</div>	
				<div class="row">
					<!-- Service No. 1 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-css3"></i>
							<h3><?= $lang == 'ru' ? 'Backend разработка' : 'Backend developing' ?></h3>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!Simplify corporate e-services after diverse imperatives. Competently leverage existing excellent systems and seamless value.' ?></p>
						</div>
					</div>
					<!-- Service No. 2 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-code"></i>
							<h3><?= $lang == 'ru' ? 'Frontend разработка' : 'Frontend developing' ?></h3>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!Simplify corporate e-services after diverse imperatives. Competently leverage existing excellent systems and seamless value.' ?></p>
						</div>
					</div>
					<!-- Service No. 3 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-laptop"></i>
							<h3><?= $lang == 'ru' ? '!!!' : '!!!' ?></h3>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!' ?></p>
						</div>
					</div>
					<!-- Service No. 4 -->
					<div class="col-md-3 col-sm-6">
						<div class="service">
							<i class="fa fa-life-buoy"></i>
							<h3><?= $lang == 'ru' ? 'Поддержка 24/7' : '24/7 support' ?></h3>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
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
					<h2 class="h2"><?= $lang == 'ru' ? '!!!технические навыки' : 'technical skills' ?></h2>
					<div class="heading-line"></div>
					<p class="title"><?= $lang == 'ru' ?
                            '!!!' :
                            '!!!Authoritatively foster bricks-and-clicks networks rather than superior architectures. Compellingly mesh frictionless imperatives vis-a-vis emerging.' ?></p>
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
							<div class=" bar_group__bar thick elastic" data-value="90" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'организованность' : 'organization' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 3 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="75" data-tooltip="true" data-label="<?= $lang == 'ru' ? '!!!' : '!!!' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 4 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="85" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'программирование' : 'programming' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 5 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="88" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'планирование' : 'planning' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 6 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="80" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'обучаемость' : 'learning' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 7 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="55" data-tooltip="true" data-label="<?= $lang == 'ru' ? '!!!' : '!!!' ?>" data-show-values="true" data-unit="%"></div>
						</div>
						<!-- Skill No. 8 -->
						<div class='bar_group col-md-6 col-xs-12' data-max="100">
							<div class=" bar_group__bar thick elastic" data-value="73" data-tooltip="true" data-label="<?= $lang == 'ru' ? 'UI/UX дизайн' : 'UI/UX design' ?>" data-show-values="true" data-unit="%"></div>
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
					<h2 class="h2"><?= $lang == 'ru' ? 'опыт работы' : 'work experiences' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                            '!!!' :
                            '!!!Professionally expedite orthogonal deliverables with emerging best practices. Uniquely leverage other\'s robust core competencies.' ?></p>
				</div>	
				<!-- start timeline -->
				<div class="timeline wow fadeIn" data-wow-duration="0.5s" data-wow-offset="200">
					<!-- Event No. 1 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-graduation-cap"></i>
						</div>
						<div class="content left round-corners">
							<h3><?= $lang == 'ru' ? 'СибГУТИ' : 'SibSUTIS' ?></h3>
							<span class="duration"><?= $lang == 'ru' ? '( Сен. 2003 : Июнь 2008 )' : '( Sep. 2003 : June 2008 )' ?></span>
							<span class="job-title"> <?= $lang == 'ru' ? '!!!' : '!!!' ?></span>
							<p><?= $lang == 'ru' ? 'По специальности "Средства связи с подвижными объектами"' : '!!!' ?></p>
						</div>
					</div>
					<!-- Event No. 2 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-briefcase"></i>
						</div>
						<div class="content right round-corners">
							<h3>Novotelecom</h3>
							<span class="duration"><?= $lang == 'ru' ? '!!!' : '!!!( Aug. 2008 : Mar. 2010 )' ?></span>
							<span class="job-title"> <?= $lang == 'ru' ? '!!!' : '!!!' ?></span>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!Credibly architect visionary benefits vis-a-vis functional e-business. Uniquely cultivate client-based process improvements via diverse models. Objectively orchestrate alternative expertise.' ?></p>
						</div>
					</div>
					<!-- Event No. 3 -->
					<div class="timeline-block clearfix wow fadeInLeft" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-archive"></i>
						</div>
						<div class="content left round-corners">
							<h3>2GIS</h3>
							<span class="duration"><?= $lang == 'ru' ? '!!!' : '!!!( May 2010 : Sep. 2013 )' ?></span>
							<span class="job-title"> <?= $lang == 'ru' ? '!!!' : '!!!' ?></span>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!Credibly architect visionary benefits vis-a-vis functional e-business. Uniquely cultivate client-based process improvements via diverse models. Objectively orchestrate alternative expertise.' ?></p>
						</div>
					</div>
					<!-- Event No. 4 -->
					<div class="timeline-block clearfix wow fadeInRight" data-wow-duration="0.5s" data-wow-offset="200">
						<div class="icon">
							<i class="fa fa-star"></i>
						</div>
						<div class="content right round-corners">
							<h3>RebelMouse</h3>
							<span class="duration"><?= $lang == 'ru' ? '!!!' : '!!!( 2014 : NOW )' ?></span>
							<span class="job-title"> <?= $lang == 'ru' ? '!!!' : '!!!' ?></span>
							<p><?= $lang == 'ru' ?
                                    '!!!' :
                                    '!!!Monotonectally benchmark ubiquitous relationships rather than professional convergence. Assertively mesh cross-media metrics rather than adaptive platforms. Distinctively communicate superior.' ?></p>
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
					<button class="filter round-corners" data-filter="all" data-content="All">All</button>
					<button class="filter round-corners" data-filter=".photos" data-content="PHOTOS">PHOTOS</button>
					<button class="filter round-corners" data-filter=".branding" data-content="BRANDING">BRANDING</button>
					<button class="filter round-corners" data-filter=".illustration" data-content="ILLUSTRATION">ILLUSTRATION</button>
				</div>	
				<div id="Container">
					<!-- Project No. 1 -->
					<div class="mix branding col-md-3 col-sm-6 col-xs-6" data-my-order="1">
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
										<p class="cat">( branding )</p>
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
					<div class="mix photos col-md-3 col-sm-6 col-xs-6" data-my-order="2">
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
										<p class="cat">( photos )</p>
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
					<div class="mix illustration col-md-3 col-sm-6 col-xs-6" data-my-order="3">
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
										<p class="cat">( illustration )</p>
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
					<div class="mix photos col-md-3 col-sm-6 col-xs-6" data-my-order="4">
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
										<p class="cat">( photos )</p>
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
					<div class="mix branding col-md-3 col-sm-6 col-xs-6" data-my-order="5">
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
										<p class="cat">( branding )</p>
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
					<div class="mix illustration col-md-3 col-sm-6 col-xs-6" data-my-order="6">
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
										<p class="cat">( illustration )</p>
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
					<div class="mix photos col-md-3 col-sm-6 col-xs-6" data-my-order="7">
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
										<p class="cat">( photos )</p>
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
					<div class="mix illustration col-md-3 col-sm-6 col-xs-6" data-my-order="8">
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
										<p class="cat">( illustration )</p>
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

		<!-- Start Testmonials Section -->
		<div class="testmonials center" id="testmonials">
			<div class="overlay"></div>
			<div class="pattern"></div>
			<div class="container">
				<div class="test-owl">
					<!-- Clinent No.1 -->
					<div class="client text-center">
						<h3>- Kenny John -</h3>
						<p>UI designer</p>
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star-half"></span>
						</div>
						<div class="opinion">
							<i class="fa fa-quote-left"></i>
							<p>Professionally expedite clicks-and-mortar methods of empowerment through excellent convergence. Efficiently strategize user friendly e-commerce before technically sound interfaces. Professionally harness one-to-one outsourcing whereas future-proof.</p>
							<i class="fa fa-quote-right reversed"></i>
						</div>
					</div>
					<!-- Clinent No.2 -->
					<div class="client text-center">
						<h3>- Will hans -</h3>
						<p>Ux designer</p>
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star-half"></span>
						</div>
						<div class="opinion">
							<i class="fa fa-quote-left"></i>
							<p>Assertively innovate technically sound process improvements with best-of-breed users. Seamlessly matrix dynamic processes rather than multimedia based scenarios. Seamlessly myocardinate front-end e-commerce vis-a-vis state of the art core competencies. Energistically create intermandated models.</p>
							<i class="fa fa-quote-right reversed"></i>
						</div>
					</div>
					<!-- Clinent No.3 -->
					<div class="client text-center">
						<h3>- william hannah -</h3>
						<p>visual designer</p>
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="opinion">
							<i class="fa fa-quote-left"></i>
							<p>Globally integrate resource maximizing information through economically sound results. Enthusiastically generate functionalized applications rather than quality imperatives. Monotonectally deploy integrated products.</p>
							<i class="fa fa-quote-right reversed"></i>
						</div>
					</div>
					<!-- Clinent No.4 -->
					<div class="client text-center">
						<h3>- Adams kidman -</h3>
						<p>web developer</p>
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="opinion">
							<i class="fa fa-quote-left"></i>
							<p>Compellingly evolve future-proof total linkage via team driven information. Authoritatively maximize B2C paradigms rather than diverse channels. Dynamically pontificate B2C solutions whereas enterprise human capital. Interactively incentivize client-focused e-services.</p>
							<i class="fa fa-quote-right reversed"></i>
						</div>
					</div>
					<!-- Clinent No.5 -->
					<div class="client text-center">
						<h3>- Jessie J -</h3>
						<p>ui / ux designer</p>
						<div class="stars">
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						</div>
						<div class="opinion">
							<i class="fa fa-quote-left"></i>
							<p>Credibly aggregate low-risk high-yield opportunities after e-business expertise. Distinctively brand front-end sources with bricks-and-clicks supply chains. Rapidiously engineer ubiquitous e-commerce rather than virtual process.</p>
							<i class="fa fa-quote-right reversed"></i>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- End Testmonials Section -->

		<!-- Start Contact Section -->
		<div class="contact center" id="contact-me">
			<div class="container">
				<!-- Title -->
				<div class="title wow fadeInUp" data-wow-duration="0.5s" data-wow-offset="200">
					<h2 class="h2"><?= $lang == 'ru' ? 'Связаться со мной' : 'Get in touch' ?></h2>
					<div class="heading-line"></div>
					<p class="main-para"><?= $lang == 'ru' ?
                            '' :
                            'Globally empower viral services whereas mission-critical platforms. Rapidiously optimize scalable paradigms before covalent technologies.' ?></p>
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
		<script src="js/plugins.js?2"></script>
		<!-- Wow.js file -->
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
	</body>
</html>