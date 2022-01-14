

<!-- ========== CONTACT ========= -->
<section class="contact section" id="contact">
	<h2 class="section_title">Contact Me</h2>
	<span class="section_subtitle">Get in Touch</span>

	<div class="contact_container container grid">
		<div class="left">
			<div class="contact_information">
				<!-- <i class="uil uil-phone contact_icon"></i> -->
				<i class="bx bx-phone contact_icon"></i>

				<div>
					<h3 class="contact_title">Call Me</h3>
					<span class="contact_subtitle">999-777-66-55</span>
				</div>
			</div>

			<div class="contact_information">
				<!-- <i class="uil uil-envelope contact_icon"></i> -->
				<i class="bx bx-envelope contact_icon"></i>
				<div>
					<h3 class="contact_title">Email</h3>
					<span class="contact_subtitle">admin@email.com</span>
				</div>
			</div>

			<div class="contact_information">
				<!-- <i class="uil uil-map-marker contact_icon"></i> -->
				
				<a href="https://www.google.com/maps/place/KUET+Pocket+Gate/@22.8975975,89.5029828,3a,75y,111.17h,87.55t/data=!3m6!1e1!3m4!1sx5sJG-Ip_6ldG-fGxXehJw!2e0!7i13312!8i6656!4m12!1m6!3m5!1s0x39ff9bda1d0ff6e5:0x123a926908efcd0c!2sKhulna+University+Of+Engineering+%26+Technology+(KUET)!8m2!3d22.9005524!4d89.5023565!3m4!1s0x39ff9bd098e9272d:0x3fc9a4bda09e7fd6!8m2!3d22.8975661!4d89.5029385"
				target="_blank">
				<i class="bx bxs-edit-location contact_icon"></i>	
				</a>

				<div>
					<h3 class="contact_title">Location</h3>
					<span class="contact_subtitle">KUET-old pocket gate area!</span>
				</div>
			</div>
		</div>

		<div class="right">
			
			<!-- starting PHP codes -->
			<?php include 'sendmail.php'; ?>
            <!-- End PHP codes -->

			<form action="" method="POST" class="contact_form grid" autocomplete="off">
				<div class="contact_inputs grid">
					<div class="contact_content">
						<label for="" class="contact_label">Name</label>
						<input type="text" name="name" class="contact_input" id="name"/>
					</div>

					<div class="contact_content">
						<label for="" class="contact_label">Email</label>
						<input type="email" name="email" class="contact_input" id="email"/>
					</div>
				</div>

				<div class="contact_content">
					<label for="" class="contact_label">Subject</label>
					<input type="text" name="subject" class="contact_input" id="subject"/>
				</div>
				<div class="contact_content">
					<label for="" class="contact_label">Message</label>
					<textarea name="body" id="" cols="0" rows="7" class="contact_input" ></textarea>
				</div>

				<div>
					<!-- <a href="#contact" class="button button--flex">
						Send Message
						<i class="uil uil-message button_icon"></i>
					</a> -->
					<button type="submit" name="send" value="submit" class="button button--flex">Send Message <i class="uil uil-message button_icon"></i></button>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- ========== ENT OF CONTACT ========= -->


