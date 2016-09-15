 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Awesomeone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

<body <?php body_class(); ?>>
<div <?php if(!is_home() || !is_front_page()) {?> <?php }?>>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>

                            <!-- nav --><div class="clear"></div>
            </div><!-- header -->
<?php if ( is_front_page() ) { ?>
    <div class="slider-main hidden-xs">
       <?php
	   		
			$slideimage = '';
			$slideimage = array(
					'1'	=>	get_template_directory_uri().'/images/slides/slider1.jpg',
					'2'	=>  get_template_directory_uri().'/images/slides/slider2.jpg',
					'3'	=>  get_template_directory_uri().'/images/slides/slider3.jpg',
			);
	   
			$slAr = array();
			$m = 0;
			for ($i=1; $i<4; $i++) {
				if ( get_theme_mod('slide_image'.$i, true) != "" ) {
					$imgSrc 	= esc_url(get_theme_mod('slide_image'.$i, $slideimage[$i]));
					$imgTitle	= esc_attr(get_theme_mod('slide_title'.$i, true));
					$imgDesc	= esc_attr(get_theme_mod('slide_desc'.$i, true));
					$imglink	= esc_url(get_theme_mod('slide_link'.$i, true));
					if ( strlen($imgSrc) > 10 ) {
						$slAr[$m]['image_src'] = esc_url(get_theme_mod('slide_image'.$i, $slideimage[$i]));
						$slAr[$m]['image_title'] = esc_attr(get_theme_mod('slide_title'.$i, true));
						$slAr[$m]['image_desc'] = esc_attr(get_theme_mod('slide_desc'.$i, true));
						$slAr[$m]['image_url'] = esc_url(get_theme_mod('slide_link'.$i, true));
						$m++;
					}
				}
				
			}
			$slideno = array();
			if( $slAr > 0 ){
				$n = 0;?>
                <div id="slider" class="nivoSlider">
                <?php 
                foreach( $slAr as $sv ){
                    $n++; ?><img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php if ( ($sv['image_title']!='') && ($sv['image_desc']!='')) { echo '#slidecaption'.$n ; } ?>"/><?php
                    $slideno[] = $n;
                }
                ?>
                </div><?php
                foreach( $slideno as $sln ){ ?>
                    <div id="slidecaption<?php echo $sln; ?>" class="nivo-html-caption">
                    <div class="top-bar">
                        <?php if( get_theme_mod('slide_title'.$sln, true) != '' ){ ?>
                            <h2><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('Slide Title ','awesomeone').$sln)); ?></h2>
                        <?php } ?>
                        <?php if( get_theme_mod('slide_desc'.$sln, true) != '' ){ ?>
                            <p><?php echo esc_attr(get_theme_mod('slide_desc'.$sln, __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae est at dolor auctor faucibus. Aenean hendrerit lorem eget nisi vulputate, vitae fringilla ligula dignissim. Phasellus feugiat quam efficitur','awesomeone'))); ?></p>
                        <?php } ?>
						<?php if( get_theme_mod('slide_link'.$sln, true) != ''){ ?>
                        	<a class="read-more" href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#')); ?>"><?php _e('Read More','awesomeone'); ?></a>
                        <?php } ?>
                        <?php if( get_theme_mod('button_hide',true) == '') { ?>
                        <?php if( get_theme_mod('purchaselink', true) != ''){ ?>
                        	<a class="common_btn" href="<?php echo get_theme_mod('purchaselink',true); ?>"><?php _e('Shop','awesomeone'); ?></a>
                        <?php } } ?>
                    </div>
                    </div><?php 
                } ?>
                
                </div>
                <div class="clear"></div><?php 
			}
            ?>
        </div>
      </div><!-- slider -->
<?php } ?>


      <div class="main-container">
