<?php include('header.php') ?>
	<!-- end hr -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="breadcrumb">
					<li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
					<li class="active">Contact</li>
				</ul>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<!--<div class="map">
		<div id="google-map" data-latitude="-37.7879693" data-longitude="175.3062706"></div>
	</div>-->
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h4>Get in touch with me by filling <strong>contact form below</strong></h4>
                
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="https://formspree.io/..84@gmail.com" method="post">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="_replyto" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    
                    <div class="text-center"><input type="submit" value="Send"></div>
                </form>
			</div>
			
		</div>
	</div>
	</section>
<?php include('footer.php') ?>