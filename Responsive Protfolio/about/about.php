<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>PerSoNal ProTfoLio</title>

		<!-- ========== Box-icons ========= -->
		<link
			href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
			rel="stylesheet"
		/>
		<!-- ========== Unicons ========= -->
		<link
			rel="stylesheet"
			href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
		/>

		<!-- ========== SWIPER Css ========= -->
		<link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />

		<!-- ========== Style Css ========= -->
		<link rel="stylesheet" href="assets/css/style.css" />


	</head>
	<body>
		<!-- HEADER -->
		<header class="header" id="header">
			<nav class="nav container">
				<a href="../index.php" class="nav_logo active-link">(: h&#9775;wId</a>

				<div class="nav_menu" id="nav-menu">
					<ul class="nav_list grid">
						<li class="nav_item">
							<a href="../index.php" class="nav_link">
								<i class="uil uil-estate nav_icon"></i> Home
							</a>
						</li>
						<li class="nav_item">
							<a href="#about" class="nav_link active-link">
								<i class="uil uil-user nav_icon"></i> About
							</a>
						</li>
						<!-- <li class="nav_item">
							<a href="#skills" class="nav_link">
								<i class="uil uil-file-alt nav_icon"></i> Skills
							</a>
						</li>
						<li class="nav_item">
							<a href="#services" class="nav_link">
								<i class="uil uil-suitcase nav_icon"></i> Service
							</a>
						</li>
						<li class="nav_item">
							<a href="#portfolio" class="nav_link">
								<i class="uil uil-scenery nav_icon"></i> Protfolio
							</a>
						</li>
						<li class="nav_item">
							<a href="#contact" class="nav_link">
								<i class="uil uil-message nav_icon"></i> Contact
							</a>
						</li> -->
						<li class="nav_item">
							<a href="../admin/login.php" class="nav_link">
							<i class="uil uil-arrow-compress-h nav_icon"></i> LogIn
							</a>
						</li>
					</ul>

					<i class="uil uil-times nav_close" id="nav-close"></i>

					<!-- <a href="#">Log In</a>
					<a href="#">Sign Up</a> -->
				</div>

				<div class="nav_btns">
					<!-- Them change button -->
					<i class="uil uil-moon change-theme" id="theme-button"></i>

					<div class="nav_toggle" id="nav-toggle">
						<i class="uil uil-apps"></i>
					</div>
				</div>
			</nav>
		</header>
		<!-- END ====   HEADER -->

        	<!-- MAIN -->
		<main class="main">

        <!-- ========== ABOUT ========= -->
<section class="about section" id="about">
	<h2 class="section_title">About Me</h2>
	<span class="section_subtitle">My introduction</span>

	<div class="about_container container grid">
		<div class="about_img">
			<img class="hover_img"><img src="../assets/img/lison.jpg" />
		</div>
		<div class="about_data">
			<p class="about_description">
				Web developer, with extensive knowledge and years of experience,
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

			<div class="about_buttons">
				<a download="" href="assets/document/Lison.pdf" class="button button--flex" target="_blank">
					Download CV <i class="uil uil-download-alt button_icon"></i>
				</a>
			</div>
		</div>
	</div>

	<div class="about_container container">
		<p class="about_description">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab possimus, soluta cupiditate mollitia minima 
			harum quasi corrupti perferendis dignissimos. Rem, ipsam dignissimos sunt omnis illum perferendis soluta 
			velit nemo dicta quisquam quasi ullam hic beatae quod a tempore moles tias tempora nulla inventore eum. 
			Officia	itaque et nesciunt tenetur, sint aut?
		</p>
		<p class="about_description">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab possimus, soluta cupiditate mollitia minima 
			harum quasi corrupti perferendis dignissimos. Rem, ipsam dignissimos sunt omnis illum perferendis soluta 
			velit nemo dicta quisquam quasi ullam hic beatae quod a tempore moles tias tempora nulla inventore eum. 
			Officia	itaque et nesciunt tenetur, sint aut?
			harum quasi corrupti perferendis dignissimos. Rem, ipsam dignissimos sunt omnis illum perferendis soluta 
			velit nemo dicta quisquam quasi ullam hic beatae quod a tempore moles tias tempora nulla inventore eum. 
			Officia	itaque et nesciunt tenetur, sint aut?
		</p>
		<p class="about_description">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab possimus, soluta cupiditate mollitia minima 
			harum quasi corrupti perferendis dignissimos. Rem, ipsam dignissimos sunt omnis illum perferendis soluta 
			velit nemo dicta quisquam quasi ullam hic beatae quod a tempore moles tias tempora nulla inventore eum. 
			Officia	itaque et nesciunt tenetur, sint aut?
		</p>
	</div>
	
</section>
<!-- ========== END OF ABOUT ========= -->

        </main>
	<!-- END ========== MAIN -->

<!-- FOOTER -->
<footer class="footer">
    <div class="footer_bg">
        <div class="footer_container container grid">
            <div class="footer_head">
                <h1 class="footer_title">h&#9775;wld</h1>
                <span class="footer_subtitle">Frontend developer</span>
            </div>

            <ul class="footer_links">
                <li>
                    <a href="../index.php" class="footer_link">Services</a>
                </li>
                <li>
                    <a href="../index.php" class="footer_link">Portfolio</a>
                </li>
                <li>
                    <a href="../index.php" class="footer_link">ContactMe</a>
                </li>
            </ul>

            <div class="footer_socials">
                <a href="https://www.facebook.com/" target="blank" class="footer_social">
                    <i class="uil uil-facebook-f"></i>
                </a>
                <a
                    href="https://www.instagram.com/"
                    target="blank"
                    class="footer_social"
                >
                    <i class="uil uil-instagram"></i>
                </a>
                <a href="https://www.twitter.com/" target="blank" class="footer_social">
                    <i class="uil uil-twitter-alt"></i>
                </a>
            </div>
        </div>

        <p class="footer_copy">&#169; Bedimcode. All right reserved</p>
    </div>
</footer>
<!-- END ====== FOOTER -->

<!-- ============ SCROLL TOP ============= -->
<a href="#" class="scrollup" id="scroll-up">
    <i class="uil uil-arrow-up scrollup_icon"></i>
</a>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- SWIPER JS-->
<script src="assets/javascript/swiper-bundle.min.js"></script>
<!-- ========== SCROLL REVEAL ========= -->
<script src="assets/javascript/scrollreveal.min.js"></script>
<!-- MAIN JS-->
<script src="assets/javascript/main.js"></script>
</body>
</html>
