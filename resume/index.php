<?php
	include '../header.php';
	include '../functions.php';
?>
<![if !IE]>
   <script>
		head.js('../js/dist/jquery.onepage-scroll.js', '../js/resume.js');
	</script>
<![endif]>

<div id="main">

	<section id="intro">
		<div class="container inner">
			<div class="col-xs-12 col-md-8 full-height">
				<table class="section"><tr><td>
					<h1 class="big">I'm Jason Worden.</h1>
					<h3 id="undergrad">
						I prototype, design, and develop websites as a front-end developer.
					</h3>
					<h3>
						I create live visual experiences at concerts as a VJ.
					</h3>
				</td></tr></table>
			</div>
		</div>
		<i id="scroll-arrow" class="fa fa-angle-double-down icon-bouncing scroll-arrow lg" aria-hidden="true" style="display: none" data-target="1"></i>
		<img class="section-bg" src="../img/portrait.png">
	</section>

	<section id="powwow">
		<?php jwResumeSectionTitle('PowWow Energy'); ?>
		<div class="container inner">
			<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
				<h5 class="position">Front End / Full Stack Developer</h5>
				<p><a target="_blank" href="//www.powwowenergy.com/">PowWow Energy</a> is a start-up that turns data into answers to make the life of growers easier—not more saturated with complicated data.</p>
				<p>
					I utilize a Django back-end and front-end technologies including Knockout, React, Redux, and the Google Maps API to create a smooth user experience for growers and farm advisors.
				</p>
				<p>
					As user stories develop into feature definitions, I iterate on mock-ups and write code across the stack to bring these new features to life.
				</p>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="2"></i>
		<i class="fa fa-leaf section-bg"></i>
	</section>

	<section id="oniracom">
		<?php jwResumeSectionTitle('Oniracom'); ?>
		<div class="container inner">
			<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
			<h5 class="position">Front End Developer</h5>
				<p>I was a part of the <a target="_blank" href="http://oniracom.com/">Oniracom</a> team from July 2013 - May 2015 as a front-end developer.</p>
				<p>I worked closely with other developers, designers, strategists, and clients to help build responsive websites - many of which are designed to be a breeze to manage in the back-end through ExpressionEngine, Wordpress, and WooCommerce.</p>
				<p><em>for example:</em> <a target="_blank" href="http://sbmarathon.com/">Santa Barbara Marathon</a></p>
				<p>
					My time at Oniracom was an unforgettable learning experience alongside awesome folks!
				</p>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="3"></i>
		<img class="section-bg" src="../img/onira.png">
	</section>

	<section id="svm">
		<?php jwResumeSectionTitle('Speak Volumes'); ?>
		<div class="container inner">
			<div class="col-xs-12 col-sm-9 col-md-8 col-lg-6">
				<h5 class="position">Co-founder  /  Technical Lead / VJ</h5>
				<p>
					<a target="_blank" href="http://speakvolumesmedia.com/about-us">Speak Volumes</a>
					is a music media entity that I co-founded in April 2013.
					I developed and designed the responsive website and have been a key decision-maker throughout.
				</p>
				<p>
					I performed visuals at several of our shows, including for DâM-FunK and Peaking Lights.
				</p>
				<p>
					We covered music we like from all over and gave exposure to several local Santa Barbara and Isla Vista acts.
					Fostering local talent is a proud mark left behind in the ever-so-transient college town culture.
				</p>
				<p>Speak Volumes is my first website. It's an honor to give my colleagues an outlet for their eloquent way with words about music.</p>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="4"></i>
		<img class="section-bg" src="../img/sv.png">
	</section>

	<section id="edu">
		<?php jwResumeSectionTitle('Education'); ?>
		<div class="container inner">

			<div class="col-xs-12">
				<div class="school">
					<h3>
						University of California, Santa Barbara (UCSB)
					</h3>
					<h5>
						Computer Science B.A. with Geography Emphasis
					</h5>
					<hr class="school-divider divider">
					<p>2010-2014</p>
					<hr class="school-divider divider">
					<p>3.60 GPA in C.S. coursework  <br> 3.47 GPA overall</p>
				</div>
				<div class="clearfix"></div>
				<div class="school">
					<h3>
						Paraclete High School, Lancaster, CA
					</h3>
					<h5>Valedictiorian with 4.20 GPA</h5>
					<hr class="school-divider divider">
					<p>2006-2010</p>
				</div>
			</div>

			<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="5"></i>
			<i class="fa fa-book section-bg"></i>

		</div>


	</section>

	<section id="dev">
		<?php jwResumeSectionTitle('Dev Skills'); ?>
		<div class="container inner">
			<div class="col-xs-12 skill-list-alt">
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
					</div>
					<h6>Client-side JavaScript + jQuery<span class="self-taught"></span></h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
					</div>
					<h6>HTML5/CSS3<span class="self-taught"></span></h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>Django (Python server-side web framework)<span class="self-taught"></span></h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						React ecosystem, Redux, ES6
					</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						Knockout (Model-View-ViewModel JS framework)
					</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						Node.js
						<span class="self-taught"></span>
					</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>C/C++</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>PHP<span class="self-taught"></span></h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						Matlab
						<i class="fa fa-ellipsis-v vert-divider divider"></i>
						for math + image processing
					</h6>
				</div>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="6"></i>
		<i class="fa fa-code section-bg"></i>
	</section>

	<section id="cc">
		<?php jwResumeSectionTitle('Audio-visuals'); ?>
		<div class="container inner">
			<div class="col-xs-12 skill-list-alt">
				<p>
					I perform live visuals using a combination of VJ software, Syphon, and analog video synths.
				</p>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
					</div>
					<h6>GrandVJ</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>Resolume Arena</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>Analog Video Synthesis</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						Lumen
						<i class="fa fa-ellipsis-v vert-divider divider"></i>
						Software analog video synthesizer
					</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-full"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>
						Cinder
						<!-- <i class="fa fa-ellipsis-v vert-divider"></i> -->
						<!-- C++ library for creative coding of audio-visuals -->
						<span class="self-taught"></span>
					</h6>
				</div>
				<div class="skill">
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
					<h6>Arduino</h6>
				</div>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="7"></i>
		<i class="fa fa fa-building-o fa-rotate-270 section-bg"></i>
	</section>

	<section id="other">
		<?php jwResumeSectionTitle('Other Skills'); ?>
		<div class="container inner">
			<div class="col-xs-12">
				<div class="other-skill">
					<h6>Ps</h6>
					<h5>Photoshop</h5>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="other-skill">
					<h6>Ai</h6>
					<h5>Illustrator</h5>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-empty"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="other-skill">
					<h6>Id</h6>
					<h5>InDesign</h5>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-empty"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<hr class="other-divider divider">
				<h4>
					Google Analytics: custom implementations of event tracking, dashboards, and reports
				</h4>
				<hr class="other-divider divider">
				<h4>
					Analytical + computer cartography using GIS software
				</h4>
			</div>
		</div>
		<i class="fa fa-angle-double-down scroll-arrow" aria-hidden="true" style="display: none" data-target="8"></i>
		<i class="fa fa-check section-bg"></i>
	</section>

	<section id="contact">
		<?php jwResumeSectionTitle('Contact Me'); ?>
		<div class="container inner">
			<div class="col-xs-12">
				<div class="address group">
					<h5><i class="fa fa-map-marker inline-margin-right"></i> Current Address</h5>
					<p>
						1077 Texas St.
						<br>
						San Francisco, CA 94107
					</p>
					<hr class="contact-divider divider">
				</div>
				<div class="group">
					<h5><i class="fa fa-phone inline-margin-right"></i> Phone</h5>
					<p>&#40;&#54;&#54;&#49;&#41;&#32;&#51;&#53;&#48;&#32;&#45;&#32;&#48;&#52;&#52;&#55;</p>
					<hr class="contact-divider divider">
				</div>
				<div class="group">
					<h5><i class="fa fa-inbox inline-margin-right"></i> Email</h5>
					<p><?php echo hide_email('worden.jason.p@gmail.com'); ?></p>
					<hr class="contact-divider divider">
				</div>
				<div class="group">
					<a id="print" class=""
						target="_blank" href="https://docs.google.com/document/d/1JICJu0qKsOiubKJfguyEqNr7K52_Xq2GhBlF849htvY/edit">
						<i class="fa fa-print inline-margin-right"></i>printer-friendly résumé
					</a>
				</div>
			</div>
			<!-- <button class="btn btn-1 btn-1e"><i class="fa fa-print"></i> Print my resume as a PDF</button> -->
		</div>
		<i class="fa fa-angle-double-up scroll-arrow lg" aria-hidden="true" style="display: none" data-target="0"></i>
		<i class="fa fa-envelope-alt section-bg"></i>
	</section>

</div>


<?php
	include '../footer.php';
?>
