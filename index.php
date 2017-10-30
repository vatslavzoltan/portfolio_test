<?php get_header(); ?>
	<section id="about" class="section_about bg_light">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="s_descr_wrap">
						<h2 class="s_header"><?php echo get_cat_name(2)?></h2>
						<p class="s_descr"><?php echo category_description(2)?></p>
					</div>
					<div class="owl-carousel owl-theme">

						<div class="about_item css_3">
							<div class="item_subscribe">
								<?php if ( have_posts() ) : query_posts('p=5');
								while (have_posts()) : the_post(); ?>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
								<? endwhile; endif; wp_reset_query(); ?>
							</div>
							<div class="item_example ">
								<?php if ( have_posts() ) : query_posts('p=13');
								while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
								<? endwhile; endif; wp_reset_query(); ?>
							</div>
						</div>
						<div class="about_item chart">
							<div class="item_subscribe ">
								<?php if ( have_posts() ) : query_posts('p=20');
								while (have_posts()) : the_post(); ?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<? endwhile; endif; wp_reset_query(); ?>
							</div>
							<div class="item_example">
								<div class="chart-container" style="position: relative; height:100%; width:100%">
									<?php if ( have_posts() ) : query_posts('p=28');
									while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
									<? endwhile; endif; wp_reset_query(); ?>
								</div>
								<div class="chart_btn_wrapper">
									<button id="bar" class="chart_btn">Default</button>
									<button id="horizontalBar" class="chart_btn ">Bar</button>
									<button id="pie" class="chart_btn">Pie</button>
									<button id="line" class="chart_btn">Line</button>
								</div>
							</div>
						</div>
						<div class="about_item responsive_css">
							<div class="item_subscribe">
								<?php if ( have_posts() ) : query_posts('p=24');
								while (have_posts()) : the_post(); ?>
								<h2><?php the_title(); ?></h2>
								<p><?php the_content(); ?></p>
							</div>
							<div class="item_example">
								<?php the_post_thumbnail('large'); ?>
							</div>
							<? endwhile; endif; wp_reset_query(); ?>
						</div>
						<div class="about_item technologies">
							<div class="item_subscribe">
								<?php if ( have_posts() ) : query_posts('p=30');
								while (have_posts()) : the_post(); ?>
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
								<? endwhile; endif; wp_reset_query(); ?>
							</div>
							<div class="item_example main_color_bg m_hide">
								<div class="tech_wrapp">
									<p class="tech_descr">Git is a system that registers changes in one or more files in order to later be able to return to certain old versions of these files</p>
									<div class="tech_icon_wrapp main_color_bg git">
										<img src="<?php echo get_template_directory_uri(); ?>/img/git-icon.svg" alt="#" class="tech_icon">
										<p class="tech_icon_descr">Version control systems</p>
									</div>
								</div>
								<div class="tech_wrapp">
									<p class="tech_descr">Gulp is a web application build tool that allows you to automate repetitive tasks, such as assembling and minimizing CSS and JS files, running tests and so on.</p>
									<div class="tech_icon_wrapp main_color_bg gulp">
										<img src="<?php echo get_template_directory_uri(); ?>/img/gulp.svg" alt="#" class="tech_icon">
										<p class="tech_icon_descr">Project builders</p>
									</div>
								</div>
								<div class="tech_wrapp">
									<p class="tech_descr">Wordpress is the most popular and easy to use content management system for small sites.</p>
									<div class="tech_icon_wrapp main_color_bg wp">
										<img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.svg" alt="#" class="tech_icon">
										<p class="tech_icon_descr">Content management system</p>
									</div>
								</div>
							</div>
							<div class="item_example_mobile">
								<img src="<?php echo get_template_directory_uri(); ?>/img/git-icon.svg" alt="#" class="tech_icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/gulp.svg" alt="#" class="tech_icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/wordpress-icon.svg" alt="#" class="tech_icon">
								<p>Another text</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="products" class="s_products bg_dark">
		<div class="container">
			<div class="s_descr_wrap">
				<h2 class="s_header"><?php echo get_cat_name(3);?></h2>
				<p class="s_descr"><?php echo category_description(3)?></p>
			</div>
			<div class="row">
				<div class="products_wrapper">
					<div class="filter_div controls">
						<ul class="portfolio_nav">
							<li class="active filter portfolio_nav_item" data-filter="all">All</li>
							<li class="filter portfolio_nav_item" data-filter=".sites">Sites</li>
							<li class="filter portfolio_nav_item" data-filter=".logos">Logos</li>
							<li class="filter portfolio_nav_item" data-filter=".fun">Fun</li>
						</ul>
					</div>
					<div id="product_grid">
						<?php if ( have_posts() ) : query_posts('cat=3');
						while (have_posts()) : the_post(); ?>
						
						<div class="mix col-md-3 col-sm-6 col-xs-6 portfolio_item <?php
						$tags = wp_get_post_tags($post->ID);
						if ($tags) {
							foreach($tags as $tag) {
								echo ' '.$tag->name;
							}
						}
						?>">
							<?php the_post_thumbnail(array(800, 600)); ?>
							<div class="hover_content">
								<h3><?php the_title(); ?></h3>
								<p><?php the_content(); ?></p>
								<a href="#" class="popup">View</a>
							</div>
							<div class="hidden">
								<div class="port_item_descr">
									<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
									<h3><?php the_title(); ?></h3>
									<p><?php the_content(); ?></p>
									<?php the_post_thumbnail(array(1200, 800)); ?>
								</div>
							</div>
						</div>
						<? endwhile; endif; wp_reset_query(); ?>

						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="contacts" class="s_contact bg_light">
		<div class="container">
			<div class="s_descr_wrap">
				<h2 class="s_header">Contacts</h2>
				<p class="s_descr">Description</p>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">

						<h3>Adress:</h3>
						<p>Location of company</p>

					</div>
					<div class="contact_box">

						<h3>Phone:</h3>
						<p>+35 005 5454 05</p>

					</div>
					<div class="contact_box">

						<h3>Web site:</h3>
						<p>www.site.com</p>

					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form class="main_form callback" novalidate target="_blank" >
							<div class="success_block"><a href="#" class="close_succes" onclick="event.preventDefault(); $('.success').removeClass('active').hide();" style="color: #fff">x</a><span>Your email sent, we reply you shortly!</span></div>
						<!-- Hidden Required Fields -->
							<input type="hidden" name="project_name" value="portfolio">
							<input type="hidden" name="admin_email" value="vatslav.zoltan@gmail.com"><!-- Admin email -->
							<input type="hidden" name="form_subject" value="Portfolio application">
							<input type="hidden" name="Coolibra page" value="">
						<!-- END Hidden Required Fields -->
						<label class="form-group">
							<span class="color_element">*</span> Your name:
							<input type="text" name="name" placeholder="Your name" data-validation-required-message="You did not enter a name" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Your E-mail:
							<input type="email" name="email" placeholder="Your E-mail" data-validation-required-message="Not a valid E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Your message:
							<textarea name="message" placeholder="Your message" data-validation-required-message="You did not enter a message" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<button>Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>