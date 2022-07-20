<style>
    body{

    }
    footer{
        position:absolute;
        bottom:0;
    }

</style>

<footer class="footer-section">

			<div class="container">
				<div class="footer-cta pt-5 pb-5">
					<div class="row">
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="cta-text">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo.svg" class="white-svg" alt="logo">
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="cta-text">
								<h4>Manager</h4>
								<span>+33 1 53 31 25 23</span><br>
								<span>info@esgi.com</span>
							</div>
						</div>
						<div class="col-xl-4 col-md-4 mb-30">
							<div class="cta-text">
								<h4>CEO</h4>
								<span>+33 1 53 31 25 25</span><br>
								<span>ceo@company.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 text-center text-lg-left">
						<div class="copyright-text">
							<p>2022 Figma Template by ESGI</a></p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
						<div class="footer-menu">
							<ul>
							<li><a href="#"><?= getIcon('facebook'); ?></a></li>
							<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>

	</body>
</html>