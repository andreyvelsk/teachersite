<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php wp_head(); ?>
</head>
<body>
<!-- Modal login-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content loginform">
			<div class="modal-body">
				<?php
					if (!is_user_logged_in()) {
						do_shortcode('[login_form_shortcode]');
					}
					else {
						?>
							<div class="profile">
								Информация о пользователе
							</div>
						<?php
					}
				?>
			</div>
		</div>
	</div>
</div>
<div class="wrapper">
    <nav class="top-navbar">
        <div class="container-fluid">
            <div class="row mainnavbar">
                <div class="mainnavbar-logo col-2">
					<div class="mainnavbar-hamburger">
						<a class="hamburger-link"><span></span></a>
					</div>
					<div>
					</div>
                </div>
                <div class="col-10">
					<div class="row no-gutters mainnavbar-items">
						<div class="col-md-11 mainnavbar-navigation">
							<?php
								$menuname = "menu-guest";
								if(is_user_logged_in()) {
									$menuname = "menu-loggedin";
								}
								wp_nav_menu( array(
									'theme_location'  => '',
									'menu'            => $menuname,
									'container'       => 'ul',
									'container_class' => 'mainnavbar-menu',
									'container_id'    => '',
									'menu_class'      => 'mainnavbar-menu',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => '',
								) );
							?>
						</div>
						<div class="col-1 mainnavbar-login" 
							<?php
								if(!is_user_logged_in()) {
									echo "data-toggle='modal' data-target='#loginModal'";
									$loginicon ="fas fa-sign-in-alt";
								}
								else {
									echo "data-loggedin";
									$loginicon ="fas fa-user";
								}
							?>
						>
							<div>
							<i class="<?php echo $loginicon?>"></i>
							<?php
								if(is_user_logged_in()) {
									?>
										<div class="profilepopup">
											<?php
												$current_user = wp_get_current_user();
												if ( ($current_user instanceof WP_User) ) {
													?>
													<div class="profilepopup-image">
														<a href="/wp-admin//profile.php">
															<?=get_avatar( $current_user->ID, 64 );?>
														</a>
													</div>
													<div class="profilepopup-info">
														<ul>
															<li>
																<a href="/wp-admin//profile.php">
																	<h4>
																	<?=$current_user->display_name?>
																	</h4>
																	
																</a>
															</li>
															<li>
																<a href="<?php echo wp_logout_url( home_url() ); ?>" title="Выйти">
																	Выйти
																</a>
															</li>
														</ul>
													</div>

													<?php
												}
											?>
										</div>
									<?php
								}
							?>
							</div>
						</div>
					</div>
                </div>
            </div>
		</div>
    </nav>