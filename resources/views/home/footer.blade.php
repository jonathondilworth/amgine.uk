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

					<form id="contact-us" name="contact-us" method="post" action="/" class="contact-form">
						@csrf
						@method('POST')
						<h3 class="section-title">Say Something</h3>
						<div class="form-element">
							<input id="name" name="name" type="text" class="@error('name') is-invalid @enderror" placeholder="Name, surname">
						</div>
						@error('name')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-element">
							<input id="email" name="email" type="email" class="@error('email') is-invalid @enderror" placeholder="E-Mail">
						</div>
						@error('email')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-element">
							<textarea id="message" name="message" class="@error('message') is-invalid @enderror" placeholder="Message"></textarea>
						</div>
						@error('message')
						    <div class="alert alert-danger">{{ $message }}</div>
						@enderror
						<div class="form-element">
							<input type="submit" class="btn-secondary-box"></button>
						</div>
					</form>

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