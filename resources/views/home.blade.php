@extends('layouts.front')

@section('content')

<!-- ***** Wellcome Area Start ***** -->
	<section class="welcome-area bg-bottom-center" id="welcome-1">
		<div class="header-token text">
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12 align-self-center">
						<!-- <h1>AMGINE, The Future, Distributed Ledger Technologies</h1> -->
						<h1>Ledgers have been integral since ancient times.</h1>
					</div>
					<div class="offset-lg-3 col-lg-6">
						<p>Algorithms that enable the creation of distributed ledgers are powerful, disruptive innovations that could transform the delivery of public and private services and enhance productivity through a wide range of applications.</p> <p>We intend to facilitate societal financial prosperity (through research in automation and finance), to allow individual self-mastery, whilst enabling lifestyles of autonomy. The <strong>collective purpose</strong> is to research disruptive technologies, allowing others to fufil the lives of those around them. <strong>You should get involved!</strong></p>
					</div>
					<div class="col-lg-12">
						<a href="/register" class="btn-white-line">REGISTER MY INTEREST</a>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll-to">
			<a href="#what-is-ico">
				<i class="fa fa-angle-double-down" aria-hidden="true"></i>
			</a>
		</div>		
	</section>
	<!-- ***** Wellcome Area End ***** -->

	<!-- ***** What is ICO Start ***** -->
	<section class="section bg-bottom" id="what-is-ico">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading m-bottom-70">
						<!-- <h2 class="section-title">Investigative ThinkTank From Amgine</h2> -->
						<h2>Rediscovering Society Through Disruptive Innovation</h2>
						<quote><small>Those who were seen dancing were thought to be insane by those who could not hear the music.</small></quote>
					</div>
				</div>
			</div>
			<!-- ***** Features Items Start ***** -->
			<div class="row m-bottom-70">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="features-line line" data-scroll-reveal="enter right move 30px over 0.6s after 0.2s">
						<div class="icon">
							<i class="fa fa-cube"></i>
						</div>
						<h5 class="features-title">Game Theory</h5>
						<p>Investigations into how to incentivise agents without causing catastrophic damage to our ecology.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="features-line line" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
						<div class="icon">
							<i class="fa fa-lock"></i>
						</div>
						<h5 class="features-title">Cryptography</h5>
						<p>Applying protocols and mathematics to ensure that consensus can be relied upon between various parties.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
					<div class="features-line">
						<div class="icon">
							<i class="fa fa-server"></i>
						</div>
						<h5 class="features-title">Decentralised Systems</h5>
						<p>Destabalising traditional power hierarchies and removing unreliable centralised authorities.</p>
					</div>
				</div>
			</div>
			<!-- ***** Features Items End ***** -->

			<!-- ***** About Start ***** -->
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<div class="left-heading">
						<h2 class="section-title">A compelling research domain.</h2>
					</div>
					<div class="left-text">
						<!-- We Can Always Switch This Out With Another Domain -->
						<p class="dark">Transfer Learning and DLT Transaction Correlation</p>
						<p>Our current research involves evaluating the effectiveness of transfer learning on various (small) data sets (correlating tweets, for example, with the volume of transactions on permissionless blockchains). We're producing models using K-Means as an initial way to identify relevant social media content and labeling that content, then applying various forms of transfer learning and evaluating the effectiveness of the models using K-Fold validation. In short, our research domains lay within artificial intelligence, rapid prototyping (of predictive models using limited data) and simulating financial markets to test our hypotheses.</p>
					</div>
					<a href="#" class="btn-secondary-line mobile-bottom-fix">Download More Information</a>					
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<img src="assets/images/theme-1-about.jpg" class="img-fluid float-right">
				</div>
			</div>
			<!-- ***** About End ***** -->
		</div>
	</section>
	<!-- ***** What is ICO End ***** -->

	<!-- ***** Token Sale Start ***** -->
	<section class="section gradient" id="token-sale">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading colored">
						<h2 class="section-title">Contribute To Our Cause</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6 m-bottom-70">
					<div class="center-text colored">
						<p>We're proud to say that we're (currently) completely self-funded. We would like the powers of governance to be completely removed from our projects. At times, this may mean calling upon our followers to help us continue the fight!</p>
					</div>					
				</div>

				<!-- This is implemented using some weird JS library that needs sorting -->

				<div class="col-md-4 col-lg-4 col-xs-12 center-text">
					<!-- <div class="bitcoin large"></div> -->
					<p>BTC</p>
					<p><code>15fWEVZHWwX7UTYW1rsK8QacdjNzgBC5cH</code></p>
				</div>

				<div class="col-md-4 col-lg-4 col-xs-12 center-text">
					<!-- <div class="ethereum large"></div> -->
					<p>ETH</p>
					<p><code>0xa469b39155e85fbffedf809d962d68c0d5e0d2f1</code></p>
				</div>

				<div class="col-md-4 col-lg-4 col-xs-12 center-text">
					<!-- <div class="monero large"></div> -->
					<p>XMR</p>
					<p><code>835q7JuD2xVGgkJKNnXrXtgxPVhm3adpPM3QtLFJHyYdVuro6tvsGyo4BRRy7723qqfnjtZDTao51TU8oCZ59WPjLbDzaFX</code></p>
				</div>

			</div>
		</div>
	</section>
	<!-- ***** Token Sale End ***** -->

	<!-- ***** Roadmap Start ***** -->
	<section class="section" id="roadmap">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Roadmap</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>As a ThinkTank, our primary motive is to study interesting new technology. In this particular case, we're focusing our attention on Distributed Ledger Technologies (DLTs), Artificial Intelligence and the overlap between the two. Furthermore, we plan on working towards building projects based on our research which adds value to both communities.</p>
					</div>					
				</div>
			</div>
		</div>
		<div class="roadmap-full">
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">Feb, 2020</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status complate"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Start cultivating Amgine as our little project, bring valuable team members on-board. Begin our literature review into the history of ledger technologies, modern machine learning methodologies and predictive models.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">March, 2020</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Publish our first industrial research document. Have a fleshed out vision for Amgine. Prepare a roadmap for related projects that we want to deliver thereby adding value to our community.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">May, 2020</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Have pubished multiple industrial research documents. We are aiming to provide insight into the following areas: Training predictive models for sentiment analysis about disruptive technologies on social media. Applications where DLTs are optimal as a data structure as appose to other possible solutions. Operational security when implementing DLTs as a solution for a given application.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">Aug, 2020</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Expand our team, begin to concentrate on adding as much value as possible to the community by providing important research and prototypeing associated projects.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">Sept, 2020</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Have provided an open corpus of research on our chosen research areas. Further, we intend on delivering associated projects which add value within the appropriate communities.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-12">
							<h6 class="date">January, 2021</h6>
						</div>
						<div class="col-lg-2 col-md-2 col-sm-12">
							<div class="status"></div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<p>Having continued to provide value to the aforementioned communities, we will begin to consider the next moves for Amgine.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Roadmap End ***** -->

	<!-- ***** Apps Start ***** -->
	<section class="section gradient" id="apps">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix">
					<div class="left-heading light">
						<h2 class="section-title">Functional Prototyping</h2>
					</div>
					<div class="left-text light m-bottom-0">
						<p>The following functional (app) prototypes are potential considerations based on our research domains:</p>
						<ul>
							<li>User Friendly Autonomous Data Augmentation</li>
							<small>Note: Specifically For Rapid Prototyping Of User Constructed Predictive Model Architectures.</small>
							<li>General Case Sentiment Analysis On User Chosen DLTs</li>
							<li>Implementation Of A Basic DLT Solution</li>
							<small>Note: If you have any suggestions, <a href="mailto:info@amgine.uk">e-mail us</a> and they will be taken into consideration.</small>
							<li>Tools To Help <em>SafeGuard</em> DLTs</li>
							<li>Apps To Broadcast Community Information To The Masses</li>
						</ul>
						<!-- We May Require Links To App Downloads One Day -->
						<!-- <a class="app-download" href="#"><img src="assets/images/store-btn-apple.svg" alt=""></a> -->
						<!-- <a class="app-download" href="#"><img src="assets/images/store-btn-google.svg" alt=""></a> -->
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
					<img src="assets/images/mockups/dark.png" class="img-fluid float-right" alt="App">
				</div>
			</div>
		</div>
	</section>
	<!-- ***** Apps End ***** -->

	<!-- ***** Team Start ***** -->
	<!-- We're Waiting On Photos Until We Can Get Team Portion Of The Site Online -->
	<!-- <section class="section bg-bottom" id="team">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h2 class="section-title">Team</h2>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi erat.</p>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
					<div class="team-round">
						<div class="profile">
							<div class="img">
								<img src="assets/images/1.jpg" alt="">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<h3 class="team-name">Dread Pirate Gab</h3>
						<span>CEO & Lead Pirate</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
					<div class="team-round">
						<div class="profile">
							<div class="img">
								<img src="assets/images/2.jpg" alt="">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<h3 class="team-name">John Dillinger</h3>
						<span>Bank Robber & Senior Developer</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
					<div class="team-round">
						<div class="profile">
							<div class="img">
								<img src="assets/images/3.jpg" alt="">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<h3 class="team-name">Some Cunt</h3>
						<span>Blockchain App Developer</span>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
					<div class="team-round">
						<div class="profile">
							<div class="img">
								<img src="assets/images/4.jpg" alt="">
								<ul class="social">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<h3 class="team-name">Healy If Possible</h3>
						<span>Data Augmentation Analysist</span>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ***** Team End ***** -->

	<!-- ***** Telegram Parallax Start ***** -->
	<!-- Need to set up a Telegram for Amgine first -->
	<!-- <section class="parallax">
		<div class="parallax-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<h1 class="section-title">Join Us On Telegram</h1>		
					</div>
					<div class="offset-lg-3 col-lg-6">
						<p>Because, why not?</p>
					</div>
					<div class="offset-lg-3 col-lg-6">
						<a href="#" class="btn-white-line">Join Us On Telegram</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ***** Telegram Parallax End ***** -->

	<!-- ***** FAQ Start ***** -->
	<!-- Need to go through an FAQ list with Gab -->
	<!-- <section class="section bg-top" id="faq">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="center-heading">
						<h1 class="section-title">FAQ</h1>
					</div>
				</div>
				<div class="offset-lg-3 col-lg-6">
					<div class="center-text">
						<p>Some FAQs...</p>
					</div>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="faq" id="accordion">
						<div class="card">
							<div class="card-header" id="faqHeading-1">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
										<span class="badge">1</span> What are the benefits of Amgine ThinkTank?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-2">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
										<span class="badge">2</span> How long has Amgine existed?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-3">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
										<span class="badge">3</span> How will digital currency affect daily life in the UK and around the world?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-4">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
										<span class="badge">4</span> Why should I trust Amgine and how is it different from other ThinkTanks??
									</h5>
								</div>
							</div>
							<div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-5">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
										<span class="badge">5</span> How is Amgine and EOS helping entrepreneurs?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-6">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
										<span class="badge">6</span> What benefits can I get from joining the Amgine crowd funding Amgines platform?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-header" id="faqHeading-7">
								<div class="mb-0">
									<h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-7" data-aria-expanded="false" data-aria-controls="faqCollapse-7">
										<span class="badge">7</span> How do I convert my BTC currency into Amgine Knowledge Points?
									</h5>
								</div>
							</div>
							<div id="faqCollapse-7" class="collapse" aria-labelledby="faqHeading-7" data-parent="#accordion">
								<div class="card-body">
									<p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
									<p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit amet massa venenatis, ut convallis justo ultricies.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- ***** FAQ End ***** -->

	<!-- ***** Contact & Footer Start ***** -->
	<footer id="contact">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-12">
						<div class="contact">
							<h3 class="section-title">Get In Touch</h3>
							<p>We would love to hear from you, regardless of what you think or who you are. We believe in openness.</p>
							<ul class="list">
								<li><i class="fa fa-envelope-o"></i><a href="mailto:info@amgine.uk">info@amgine.uk</a></li>
								<li><i class="fa fa-phone"></i><span>Call us SOON!</span></li>
								<li><i class="fa fa-paper-plane-o"></i><a href="#">Join us on Telegram SOON!</a></li>
							</ul>
							<ul class="social">
								<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
								<li><a href="#"><i class="fa fa-github-square"></i></a></li>
							</ul>							
						</div>
					</div>
					<div class="offset-lg-1 offset-md-1 col-lg-6 col-md-6 col-sm-12">
						<div class="contact-form">
							<h3 class="section-title">Say Something</h3>
							<div class="form-element">
								<input type="text" placeholder="Name, surname">
							</div>
							<div class="form-element">
								<input type="email" placeholder="E-Mail">
							</div>
							<div class="form-element">
								<textarea placeholder="Message"></textarea>
							</div>
							<div class="form-element">
								<button class="btn-secondary-box">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<p class="copyright">2021 © Amgine - Solving Distributed Ledger Technologies.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ***** Contact & Footer End ***** -->

	<!-- jQuery -->
	<script src="assets/js/jquery-2.1.0.min.js"></script>

	<!-- Bootstrap -->
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Plugins -->
	<script src="assets/js/particles.min.js"></script>
	<script src="assets/js/scrollreveal.min.js"></script>
	<script src="assets/js/jquery.downCount.js"></script>
	<script src="assets/js/parallax.min.js"></script>

	<!-- Global Init -->
	<script src="assets/js/particle-dark.js"></script>
	<script src="assets/js/custom.js"></script>

	<!-- custom -->

	<script>
        !function(c){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.onload=c,t.src="assets/js/donate.js";var z=document.getElementsByTagName("script")[0];z.parentNode.insertBefore(t,z)}(function(){

                var coins = {
                    'bitcoin': '15fWEVZHWwX7UTYW1rsK8QacdjNzgBC5cH',
                    'ethereum': '0xa469b39155e85fbffedf809d962d68c0d5e0d2f1',
                    'monero': '835q7JuD2xVGgkJKNnXrXtgxPVhm3adpPM3QtLFJHyYdVuro6tvsGyo4BRRy7723qqfnjtZDTao51TU8oCZ59WPjLbDzaFX'
                };
                var coinNames = Object.keys(coins);

                for (var i = 0;i < coinNames.length;i++) {
                    var coin = coinNames[i];
                    var address = coins[coin];
                    var elems = document.getElementsByClassName(coin);

                    for(var j = 0;j < elems.length;j++) {
                        var cd = new Fr.CryptoDonate({
                            coin: coin,
                            address: address,
                            baseURL: 'assets/',
                            buttonLarge: elems[j].className.match('large') !== null,

                            buttonClass: elems[j].getAttribute('data-theme'),
                            dialogClass: elems[j].getAttribute('data-theme')
                        });
                        cd.appendTo(elems[j]);
                    }
                }
          });
    </script>

@endsection