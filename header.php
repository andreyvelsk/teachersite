<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
    <nav class="top-navbar">
        <div class="container-fluid">
            <div class="row mainnavbar">
                <div class="mainnavbar-logo col-md-2">
                    logo
                </div>
                <div class="col-md-10">
                <?php wp_nav_menu( array(
							'theme_location'  => '',
							'menu'            => '',
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
            </div>
        </div>
    </nav>