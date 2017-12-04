<?php
/**
 * Файл Work.php
 *
 * Template Name: Work
 *
 * Отображает страницы сайта, работающего на WordPress
 *
 * @package WordPress
 * @subpackage Simplest_Site
 * @since Simplest Site 1.0
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html  <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->
<head>
	<meta name="XAR Files" content="/xr_files.txt"/>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/highslide.css" />
	<!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/highslide-ie6.css" /><![endif]-->
    <link rel="stylesheet" id='main-style'  href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/highslide.js"></script>
    <?php wp_head(); ?>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/roe.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/gallery/css/style.css" />
	<!--<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/js/gallery/css/elastislide.css" />
	<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>-->
  </head>
<body <?php body_class(); ?>>

<div class="xr_ap" id="xr_xr" style="width: 800px; height: auto; top:0px; left:50%; margin-left: -400px;">
	<script type="text/javascript">var xr_xr=document.getElementById("xr_xr")</script>
	<!--[if IE]><div class="xr_ap" id="xr_xri" style="width: 800px; height: auto; "><![endif]-->
	<!--[if !IE]>-->
<div class="xr_ap" id="xr_xri" style="width: 800px; height: auto;"><!--<![endif]-->
		
		 <span class="xr_s0" style="position: absolute; left:11px; top:75px;">
	  <span class="xr_tl" style="top: -22px;"><span class="xr_s1">3D</span><span class="xr_s2">WAX</span><span class="xr_s1">CARVING.</span><span class="xr_s2">COM</span></span>
	 </span>
 
	<span class="xr_s3" style="position: absolute; left:144px; top:104px;">
		<span class="xr_tl" style="top: -13px;"><?php bloginfo('description'); ?></span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:520px; top:150px;">
		<span class="xr_tl" style="top: -8px;">HOME</span>
	</span>

	<span class="xr_s4" style="position: absolute; left:576px; top:150px;">
		<span class="xr_tl" style="top: -8px;">ABOUT</span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:638px; top:149px;">
		<span class="xr_tl" style="top: -8px;">WORKS</span>
	</span>

	<span class="xr_s4" style="position: absolute; left:697px; top:149px;">
		<span class="xr_tl" style="top: -8px;">CONTACT</span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:760px; top:149px;">
		<span class="xr_tl" style="top: -8px;"><a href="/blog/" style="color: #fff; text-decoration: none">BLOG</a></span>
	</span>

	
	
	<a href="/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/0.png" alt="" title="" onmousemove="xr_mpo(this,3,0,event)" style="left: 495px; top: 89px; width: 76px; height: 60px;"/></a>

	
	<a href="/works/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/1.png" alt="" title="" onmousemove="xr_mpo(this,5,0,event)" style="left: 621px; top: 83px; width: 67px; height: 62px;"/></a>

	<a href="/contact/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="" title="" onmousemove="xr_mpo(this,6,0,event)" style="left: 684px; top: 87px; width: 70px; height: 65px;"/></a>

	<a href="/about/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="" title="" onmousemove="xr_mpo(this,4,0,event)" style="left: 561px; top: 88px; width: 67px; height: 62px;"/></a>
	
	<a href="/blog/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/portfel_small.png" alt="" title="" onmousemove="xr_mpo(this,7,0,event)" style="left: 738px; top:93px; width:65px; height: auto;"/></a>
	
		
	<span class="xr_s6" style="position: absolute; left:12px; top:183px;">
		<span class="xr_tl" style="top: -16px; text-transform: uppercase"><?php the_title(); ?></span>
	</span>
</div></div>
	 <div class="works-content" style="position: relative; margin: 0 auto; width: 780px; height: auto; font-size: 18px; top:185px;">
   <?php  if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
   <?php endwhile; ?>

			<div class="clear"></div>
			
			<div class="xr_s5" style="position: relative; text-align: right; padding-bottom: 100px; width: 767px;">
				<div class="xr_tl copyr" style="top: -9px; right: 0">All Rights Reserved - 3dwaxcarving - 2015</div>
				</div>
 </div>


		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gallery/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gallery/jquery.easing.1.3.js"></script>
		<!--<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gallery/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/gallery/gallery.js"></script>-->

<!--[if lt IE 7]><script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/png.js"></script><![endif]-->
<script type="text/javascript">xr_aeh()</script>
<script type="text/javascript">var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12527389-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12527389-8']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<?php wp_footer(); ?>
</body>
</html>
