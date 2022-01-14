<?php

require_once 'header&footer/header.php'; ?>


<!-- ========== HOME ========= -->
<section class="home section" id="home">
	<div class="home_container container grid">
		<div class="home_content grid">
			<div class="home_social">
				<a href="https://www.linkedin.com" target="_blank" class="home_social-icon">
					<i class="uil uil-linkedin-alt"></i>
				</a>
				<a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
					<i class="uil uil-dribbble"></i>
				</a>
				<a href="https://www.github.com" target="_blank" class="home_social-icon">
					<i class="uil uil-github-alt"></i>
				</a>
			</div>

			<div class="home_data">
				<h1 class="home_title">Hi, I'am h&#9775;wld</h1>
				<h3 class="home_subtitle">Junior <span class="typing"></span></h3>
				<p class="home_description">
					High level experience in web design knowledge, and producing quality
					work.
				</p>
				<a href="#contact" class="button button--flex h-contact">
					Contact Me <i class="uil uil-message button_icon"></i>
				</a>
			</div>
			<div class="home-img">
				<!-- <img src="assets/img/female-img.svg" /> -->

					<div class="clock_circle">
						<span class="clock_twelve"></span>
						<span class="clock_three"></span>
						<span class="clock_six"></span>
						<span class="clock_nine"></span>

						<div class="clock_rounder"></div>
						<div class="clock_hour" id="clock-hour"></div>
						<div class="clock_minutes" id="clock-minutes"></div>
						<div class="clock_seconds" id="clock-seconds"></div>
					</div>

					<div class="clock_text">
						<div class="clock_text-hour" id="text-hour"></div>
						<div class="clock_text-minutes" id="text-minutes"></div>
						<div class="clock_text-ampm" id="text-ampm"></div>
					</div>

					<div class="clock_date">
						<span id="date-day"></span>
						<span id="date-month"></span>
						<span id="date-year"></span>
					</div>


					<div class="week">
						<span id="week-day">sunday</span>
					</div>
			</div>

		</div>

		<div class="home_scroll">
			<a href="#about" class="home_scroll-button button--flex">
				<i class="uil uil-mouse-alt home_scroll-mouse"></i>
				<span class="home_scroll-name">Scroll down</span>
				<i class="uil uil-arrow-down home_scroll-arrow"></i>
			</a>
		</div>
	</div>
</section>

<!-- ========== END OF HOME ========= -->

<!-- ========== ABOUT ========= -->
<section class="about section" id="about">
	<h2 class="section_title">About Me</h2>
	<span class="section_subtitle">My introduction</span>

	<div class="about_container container grid">
		<div class="about_img">
			<a href='about/about.php' class="hover_img"><img src="assets/img/lison.jpg" /></a>
		</div>
		<div class="about_data">
			<p class="about_description">
				Web developer, with extensive knowledge and years of experience,<br>
				
				working in web technologies and ui / ux design, delivering quality
				work.
			</p>

			<div class="about_info">
				<div>
					<span class="about_info-title">08+</span>
					<span class="about_info-name">Years <br />
						experience</span>
				</div>
				<div>
					<span class="about_info-title">30+</span>
					<span class="about_info-name">Completed <br />
						project</span>
				</div>
				<div>
					<span class="about_info-title">05+</span>
					<span class="about_info-name">Companies <br />
						worked</span>
				</div>
			</div>

			<!-- <div class="about_buttons">
				<a download="" href="assets/document/Lison.pdf" class="button button--flex" target="_blank">
					Download CV <i class="uil uil-download-alt button_icon"></i>
				</a>
			</div> -->
		</div>
	</div>
	<!-- <div class="container grid">
		<p class="about_description discrip">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate fuga eaque doloribus eligendi<br><br>
			<strong>According</strong><br>
			placeat voluptatibus. Et earum ipsam assumenda sint laborum animi quisquam,<br><br> <b>explicabo </b><br> vitae quas obcaecati id molestias necessitatibus. Rerum esse optio odio consectetur totam quasi quisquam hic itaque vitae sint veniam placeat dicta maxime iure, quod tempore nisi?.
		</p>
	</div> -->
</section>
<!-- ========== END OF ABOUT ========= -->

<!-- ========== PROTFOLIO ========= -->
<section class="portfolio section" id="portfolio">
	<h2 class="section_title">Portfolio</h2>
	<span class="section_subtitle">Most recent work</span>

	<div class="portfolio_container container swiper-container">
		<div class="swiper-wrapper">
			<!-- ========== PROTFOLIO PART 1 ========= -->
			<div class="portfolio_content grid swiper-slide">
				<img src="assets/img/portfolio/web-1.jpg" alt="" class="portfolio_img" />

				<div class="portfolio_data">
					<h3 class="portfolio_title">Modern Website</h3>
					<p class="portfolio_description">
						Website adaptable to all devices, with ui components and animated
						interactior.
					</p>
					<a href="https://www.webdesign-inspiration.com/web-designs/style/modern" target="_blank" class="button button--flex button--small portrolio_button">
						Demo
						<i class="uil uil-arrow-right button_icon"></i>
					</a>
				</div>
			</div>

			<!-- ========== PROTFOLIO PART 2 ========= -->
			<div class="portfolio_content grid swiper-slide">
				<img src="assets/img/portfolio/web-2.jpg" alt="" class="portfolio_img" />

				<div class="portfolio_data">
					<h3 class="portfolio_title">Brand Design</h3>
					<p class="portfolio_description">
						Website adaptable to all devices, with ui components and animated
						interactior.
					</p>
					<a href="https://looka.com/" target="_blank" class="button button--flex button--small portrolio_button">
						Demo
						<i class="uil uil-arrow-right button_icon"></i>
					</a>
				</div>
			</div>

			<!-- ========== PROTFOLIO PART 3 ========= -->
			<div class="portfolio_content grid swiper-slide">
				<img src="assets/img/portfolio/web-3.jpg" alt="" class="portfolio_img" />

				<div class="portfolio_data">
					<h3 class="portfolio_title">Online Store</h3>
					<p class="portfolio_description">
						Website adaptable to all devices, with ui components and animated
						interactior.
					</p>
					<a href="https://squareup.com/us/en/online-store" target="_blank" class="button button--flex button--small portrolio_button">
						Demo
						<i class="uil uil-arrow-right button_icon"></i>
					</a>
				</div>
			</div>
		</div>

		<!-- Add Arrows-->
		<div class="swiper-button-next">
			<i class="uil uil-angle-right-b swiper-protfolio-icon"></i>
		</div>
		<div class="swiper-button-prev">
			<i class="uil uil-angle-left-b swiper-protfolio-icon"></i>
		</div>

		<!-- Add Pagination-->
		<div class="swiper-pagination"></div>
	</div>
</section>
<!-- ========== ENT OF PROTFOLIO ========= -->



<!-- ======== QUALIFICATION ========== -->
<section class="qualification section">
	<h2 class="section_title">Qualification</h2>
	<span class="section_subtitle">My personal journey</span>

	<div class="qualification_container container">
		<div class="qualification_tabs">
			<div class="qualification_button button--flex qualification_active " data-target="#education">
				<i class="uil uil-graduation-cap qualification_icon"></i>
				Education
			</div>

			<div class="qualification_button button--flex " data-target="#work">
				<i class="uil uil-briefcase-alt qualification_icon"></i>
				Work
			</div>
		</div>

		<div class="qualification_sections">
			<!-- ======== QUALIFICATION Content 1 ========== -->
			<div class="qualification_content qualification_active" data-content id="education">
				<!-- ======== QUALIFICATION 1 ========== -->
				<div class="qualification_data">
					<div>
						<h3 class="qualification_title">Computer Enginner</h3>
						<span class="qualification_subtitle">KUET - University</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2012 - 2016
						</div>
					</div>

					<div>
						<span class="qualification_rounder"></span>
						<span class="qualification_line"></span>
					</div>
				</div>

				<!-- ======== QUALIFICATION 2 ========== -->
				<div class="qualification_data">
					<div></div>

					<div>
						<span class="qualification_rounder"></span>
						<span class="qualification_line"></span>
					</div>

					<div>
						<h3 class="qualification_title">Web Design</h3>
						<span class="qualification_subtitle">KUET - Institute</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2016 - 2017
						</div>
					</div>
				</div>

				<!-- ======== QUALIFICATION 3 ========== -->
				<div class="qualification_data">
					<div>
						<h3 class="qualification_title">Web Developer</h3>
						<span class="qualification_subtitle">KUET - Institute</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2017 - 2019
						</div>
					</div>

					<div>
						<span class="qualification_rounder"></span>
						<span class="qualification_line"></span>
					</div>
				</div>

				<!-- ======== QUALIFICATION 4 ========== -->
				<div class="qualification_data">
					<div></div>

					<div>
						<span class="qualification_rounder"></span>
						<!-- <span class="qualification_line"></span> -->
					</div>

					<div>
						<h3 class="qualification_title">Beginner in Ui/Ux</h3>
						<span class="qualification_subtitle">KUET - Institute</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2020 - 2021
						</div>
					</div>
				</div>
			</div>
			<!-- ======== QUALIFICATION Content 2 ========== -->
			<div class="qualification_content" data-content id="work">
				<!-- ======== QUALIFICATION 1 ========== -->
				<div class="qualification_data">
					<div>
						<h3 class="qualification_title">Software Enginner</h3>
						<span class="qualification_subtitle">Microsoft - Peru</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2016 - 2018
						</div>
					</div>

					<div>
						<span class="qualification_rounder"></span>
						<span class="qualification_line"></span>
					</div>
				</div>

				<!-- ======== QUALIFICATION 2 ========== -->
				<div class="qualification_data">
					<div></div>

					<div>
						<span class="qualification_rounder"></span>
						<span class="qualification_line"></span>
					</div>

					<div>
						<h3 class="qualification_title">Frontend Developer</h3>
						<span class="qualification_subtitle">IT Inc</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2018 - 2020
						</div>
					</div>
				</div>

				<!-- ======== QUALIFICATION 3 ========== -->
				<div class="qualification_data">
					<div>
						<h3 class="qualification_title">Ui Designer</h3>
						<span class="qualification_subtitle">Figma - Spain</span>
						<div class="qualification_calendar">
							<i class="uil uil-calendar-alt"></i>
							2021 - 2021
						</div>
					</div>

					<div>
						<span class="qualification_rounder"></span>
						<!-- <span class="qualification_line"></span> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ======== END OF QUALIFICATION ========== -->

<!-- ========== SERVICE ========= -->
<section class="services section" id="services">
	<h2 class="section_title">Services</h2>
	<span class="section_subtitle">What is offer!</span>

	<div class="services_container container grid">
		<!-- ========== SERVICE 1 ========= -->
		<div class="services_content serv-one">
			<div>
				<i class="uil uil-web-grid services_icon"></i>
				<h3 class="services_title">
					Ui/Ux <br />
					Designer
				</h3>
			</div>

			<span class="button button--flex button--small button--link services_button">
				View More
				<i class="uil uil-arrow-right button_icon"></i>
			</span>

			<div class="services_modal s_one">
				<div class="services_modal-content">
					<h4 class="services_modal-title">
						Ui/Ux <br />
						Designer
					</h4>
					<i class="uil uil-times services_modal-close"></i>

					<ul class="services_modal-services grid">
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I develop the user interface.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>Web page development.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I create ux element interaction.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I position your company brand.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== SERVICE 2 ========= -->
		<div class="services_content serv-two">
			<div>
				<i class="uil uil-arrow services_icon"></i>
				<h3 class="services_title">
					Frontend <br />
					Developer
				</h3>
			</div>

			<span class="button button--flex button--small button--link services_button">
				View More
				<i class="uil uil-arrow-right button_icon"></i>
			</span>

			<div class="services_modal">
				<div class="services_modal-content">
					<h4 class="services_modal-title">
						Frontend <br />
						Developer
					</h4>
					<i class="uil uil-times services_modal-close"></i>

					<ul class="services_modal-services grid">
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I develop the user interface.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>Web page development.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I create ux element interaction.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I position your company brand.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>

		<!-- ========== SERVICE 3 ========= -->
		<div class="services_content serv-three">
			<div>
				<i class="uil uil-pen services_icon"></i>
				<h3 class="services_title">
					Branding <br />
					Designer
				</h3>
			</div>

			<span class="button button--flex button--small button--link services_button">
				View More
				<i class="uil uil-arrow-right button_icon"></i>
			</span>

			<div class="services_modal">
				<div class="services_modal-content">
					<h4 class="services_modal-title">
						Branding <br />
						Designer
					</h4>
					<i class="uil uil-times services_modal-close"></i>

					<ul class="services_modal-services grid">
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I develop the user interface.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>Web page development.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I create ux element interaction.</p>
						</li>
						<li class="services_modal-service">
							<i class="uil uil-check-circle services_modal-icon"></i>
							<p>I position your company brand.</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== ENT OF SERVICE ========= -->

<!-- ========== SKILLS ========= -->
<section class="skill section" id="skills">
	<h2 class="section_title">Skills</h2>
	<span class="section_subtitle">My technical lavel</span>

	<div class="skills_container container grid">
		<div>
			<!-- SKILLS  1 =====-->
			<div class="skills_content skills_close">
				<div class="skills_header one">
					<i class="uil uil-brackets-curly skills_icon"></i>

					<div>
						<h1 class="skills_title">Frontend developer</h1>
						<span class="skills_subtitle">More then 4 years</span>
					</div>

					<i class="uil uil-angle-down skills_arrow"></i>
				</div>

				<div class="skills_list grid">
					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">HTML</h3>
							<span class="skills_number">95%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_html"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">CSS</h3>
							<span class="skills_number">80%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_css"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">JavaScript</h3>
							<span class="skills_number">80%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_java"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">jQuery</h3>
							<span class="skills_number">75%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_react"></span>
						</div>
					</div>
					
					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Bootstrap</h3>
							<span class="skills_number">90%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_react"></span>
						</div>
					</div>
				</div>
			</div>

			<!-- SKILLS ===== 2 ===== !-->
			<div class="skills_content skills_close">
				<div class="skills_header two">
					<i class="uil uil-server-network-alt skills_icon"></i>

					<div>
						<h1 class="skills_title">Backend developer</h1>
						<span class="skills_subtitle">More then 2 years</span>
					</div>

					<i class="uil uil-angle-down skills_arrow"></i>
				</div>

				<div class="skills_list grid">
					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">PHP</h3>
							<span class="skills_number">80%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_php"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Node Js</h3>
							<span class="skills_number">70%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_node"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Database</h3>
							<span class="skills_number">90%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_firebase"></span>
						</div>
					</div>

					
				</div>
			</div>
		</div>

		<div>
			<!-- SKILLS ===== 3 ===== -->
			<div class="skills_content skills_close">
				<div class="skills_header three">
					<i class="uil uil-swatchbook skills_icon"></i>

					<div>
						<h1 class="skills_title">Designer</h1>
						<span class="skills_subtitle">More then 5 years</span>
					</div>

					<i class="uil uil-angle-down skills_arrow"></i>
				</div>

				<div class="skills_list grid">

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Sketch</h3>
							<span class="skills_number">80%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_sketch"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Illustrator</h3>
							<span class="skills_number">95%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_sketch"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Photoshop</h3>
							<span class="skills_number">85%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_photoshop"></span>
						</div>
					</div>
				</div>
			</div>
			<!-- SKILLS ===== 4 ===== -->
			<div class="skills_content skills_close">
				<div class="skills_header four">
					<!-- <i class="uil uil-swatchbook skills_icon"></i> -->
					<i class="uil uil-book skills_icon"></i>

					<div>
						<h1 class="skills_title">Library</h1>
						<span class="skills_subtitle">More then 5 years</span>
					</div>

					<i class="uil uil-angle-down skills_arrow"></i>

				</div>

				<div class="skills_list grid">
					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">React</h3>
							<span class="skills_number">85%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_react"></span>
						</div>
					</div>

					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Ajax</h3>
							<span class="skills_number">80%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_sketch"></span>
						</div>
					</div>
					
					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">Json</h3>
							<span class="skills_number">70%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_sketch"></span>
						</div>
					</div>


					<div class="skills_data">
						<div class="skills_titles">
							<h3 class="skills_name">SASS</h3>
							<span class="skills_number">75%</span>
						</div>

						<div class="skills_bar">
							<span class="skills_percentage skills_photoshop"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ========== END OF SKILLS ========= -->



<!-- ========== PROJECT IN MIND ========= -->
<section class="project section">
	<div class="project_bg">
		<div class="project_container container grid">
			<div class="project_data">
				<h2 class="project_title">If You have a new project</h2>
				<p class="project_description">
					Contact me now and get a 30% discount on your next project.
				</p>
				<a href="#contact" class="button button--flex button--white pro-contact">
					Contact Me
					<i class="uil uil-message project_icon button_icon"></i>
				</a>
			</div>

			<img src="assets/img/lison.jpg" alt="" class="project_img" />
		</div>
	</div>
</section>

<!-- ========== TESTIMONIAL ========= -->
<section class="testimonial section">
	<h2 class="section_title">Testimonial</h2>
	<span class="section_subtitle">My client saying</span>

	<div class="testimonial_container container swiper-container">
		<div class="swiper-wrapper">
			<!-- ========== TESTIMONIAL Part 1 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos3.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">Sara Smith</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>

			<!-- ========== TESTIMONIAL Part 2 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">Matt Robinson</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>

			<!-- ========== TESTIMONIAL Part 3 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos1.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">Raul Harris</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>
			<!-- ========== TESTIMONIAL Part 4 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos3.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">Merry</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>

			<!-- ========== TESTIMONIAL Part 5 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">warner</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>

			<!-- ========== TESTIMONIAL Part 6 ========= -->
			<div class="testimonial_content swiper-slide">
				<div class="testimonial_data">
					<div class="testimonial_header">
						<img src="assets/img/photos1.jpg" alt="" class="testimonial_img" />

						<div>
							<h3 class="testimonial_name">watson</h3>
							<span class="testimonial_client">Client</span>
						</div>
					</div>

					<div>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
						<i class="uil uil-favorite testimonial_icon-star"></i>
					</div>
				</div>
				<p class="testimonial_description">
					I get a good impression, i carry out my project with all the possible
					quality and attention and support 24 hours a day.
				</p>
			</div>
		</div>

		<!-- Add Pagination -->
		<div class="swiper-pagination swiper-pagination-testimonial"></div>
	</div>
</section>
<!-- ========== END OF TESTIMONIAL ========= -->

<!-- ========== CONTACT ========= -->

<?php require_once 'contact/contact.php'; ?>

<!-- ========== ENT OF CONTACT ========= -->


<?php require_once 'header&footer/footer.php';
?>
