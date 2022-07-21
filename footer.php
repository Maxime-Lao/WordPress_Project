<footer class="footer-section">

			<div class="container">
					<div class="row">
						<div class="cta-info">
							<div class="cta-text">
								<img src="<?php bloginfo('template_url'); ?>/assets/images/svg/logo.svg" class="white-svg" alt="logo">
							</div>
							<div class="copyright-text">
								<div class="cta-text">
									<h4> <?= get_theme_mod('text1') ?></h4><br>
									<span><?= get_theme_mod('text2') ?></span><br>
									<span><?= get_theme_mod('text3') ?></span>
								</div>
								<div class="cta-text">
									<h4><?= get_theme_mod('text4') ?></h4><br>
									<span><?= get_theme_mod('text5') ?></span><br>
									<span><?= get_theme_mod('text6') ?></span>
								</div>
							</div>
						</div>
					</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="cta-info-down">
						<div class="copyright-text">
							<p><?= get_theme_mod('text7') ?></p>
						</div>
							<div class="footer-menu">
								<ul>
								<li><a href="#"><?= getIcon('facebook'); ?></a></li>
								<li><a href="#"><?= getIcon('linkedin'); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>

	</body>
</html>