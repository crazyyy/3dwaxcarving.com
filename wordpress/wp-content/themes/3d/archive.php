<?php
/**
 * Файл Blog.php
 *
 * Template Name: Blog
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
<html <?php language_attributes(); ?>>
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
</head>
<body <?php body_class(); ?>>


<div class="xr_ap" id="xr_xr" style="width: 800px; height: 1200px; top:0px; left:50%; margin-left: -400px;">
	<script type="text/javascript">var xr_xr=document.getElementById("xr_xr")</script>
	<!--[if IE]><div class="xr_ap" id="xr_xri" style="width: 800px; height: 1200px; clip: rect(0px 800px 1200px 0px);"><![endif]-->
	<!--[if !IE]>--><div class="xr_ap" id="xr_xri" style="width: 800px; height: 1200px; clip: rect(0px, 800px, 1200px, 0px);"><!--<![endif]-->
	
	 <span class="xr_s0" style="position: absolute; left:11px; top:75px;">
  <span class="xr_tl" style="top: -22px;"><span class="xr_s1">3D</span><span class="xr_s2">WAX</span><span class="xr_s1">CARVING.</span><span class="xr_s2">COM</span></span>
 </span>
 
	<span class="xr_s3" style="position: absolute; left:144px; top:104px;">
		<span class="xr_tl" style="top: -13px;"><?php bloginfo('description'); ?></span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:523px; top:150px;">
		<span class="xr_tl" style="top: -8px;">HOME</span>
	</span>

	<img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/0.png" alt="" title="" onmousemove="xr_mp(3,0)" style="left: 503px; top: 89px; width: 76px; height: 60px;"/>
	<span class="xr_s4" style="position: absolute; left:586px; top:150px;">
		<span class="xr_tl" style="top: -8px;">ABOUT</span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:648px; top:149px;">
		<span class="xr_tl" style="top: -8px;">WORKS</span>
	</span>

	<span class="xr_s4" style="position: absolute; left:707px; top:149px;">
		<span class="xr_tl" style="top: -8px;">CONTACT</span>
	</span>
	
	<span class="xr_s4" style="position: absolute; left:770px; top:149px;">
		<span class="xr_tl" style="top: -8px;"><a href="/blog/" style="color: #fff; text-decoration: none">BLOG</a></span>
	</span>

	<span class="xr_s5" style="position: absolute; left:550px; top:1018px;">
		<span class="xr_tl copyr" style="top: -9px;">All Rights Reserved - 3dwaxcarving - 2015</span>
	</span>
	
	
	<a href="/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/0.png" alt="" title="" onmousemove="xr_mpo(this,3,0,event)" style="left: 503px; top: 89px; width: 76px; height: 60px;"/></a>

	
	<a href="/works/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/1.png" alt="" title="" onmousemove="xr_mpo(this,5,0,event)" style="left: 631px; top: 83px; width: 67px; height: 62px;"/></a>

	<a href="/contact/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/2.png" alt="" title="" onmousemove="xr_mpo(this,6,0,event)" style="left: 694px; top: 87px; width: 70px; height: 65px;"/></a>

	<a href="/about/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/3.png" alt="" title="" onmousemove="xr_mpo(this,4,0,event)" style="left: 571px; top: 88px; width: 67px; height: 62px;"/></a>
	
	<a href="/blog/" onclick="return(xr_nn());"><img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/blog.png" alt="" title="" onmousemove="xr_mpo(this,7,0,event)" style="left: 765px; top: 105px; width: 30px; height: auto;"/></a>
	
	<span class="xr_s6" style="position: absolute; left:12px; top:183px;">
		<span class="xr_tl" style="top: -16px; text-transform: uppercase"><?php single_cat_title(); ?></span>
	</span>


 <span class="xr_s7" style="position: relative; left:0; font-size: 18px; top:205px;">
<div class="lastposts-items">

	<?php $mycat=get_the_category(); $mycat=$mycat[0]; ?>
<?php $postslist = get_posts('numberposts=-1&orderby=title&order=ASC&category='.$mycat->cat_ID); ?>

<ul>
<?php foreach ($postslist as $post) : setup_postdata($post); ?>
<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>
<?php endforeach; ?>
</ul>
</div>

<div class="lastposts-wrap">
<?php get_search_form(); ?>

<h2>Recent posts</h2>
	<?php query_posts('showposts=5'); ?> 
	<ul class="lastposts"> 
	<?php while (have_posts()) : the_post(); ?> 
	<li><a href=" <?php the_permalink() ?>"> 
	<?php the_title(); ?></a></li> 
	<?php endwhile;?> 
	</ul>
	
	
	<h2>Rubrics</h2>
	<?php wp_list_categories('title_li='); ?>
  </div>
 </span>
 <div id="xr_xo0" class="xr_ap" style="left:0; top:0; width:800px; height:100px; visibility:hidden;">
 <a href="" onclick="return(false);">
 </a>
 </div>
 <div id="xr_xd0"></div>
  <div class="xr_ap" id="xr_xp3" style="left:0; top:0; visibility: hidden; display: none;">
 <div class="xr_ap" onmousemove="xr_mpc(3)">
 <img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/8.png" alt="" title="" style="left: 497px; top: 84px; width: 86px; height: 69px;"/>
 </div>
 </div>
 <div id="xr_xo3"></div>
 <div id="xr_xd3"></div>
 <div class="xr_ap" id="xr_xp4" style="left:0; top:0; visibility: hidden; display: none;">
 <div class="xr_ap" onmousemove="xr_mpc(4)">
 <img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/9.png" alt="" title="" style="left: 567px; top: 85px; width: 75px; height: 68px;"/>
 </div>
 </div>
 <div id="xr_xo4"></div>
 <div id="xr_xd4"></div>
 <div class="xr_ap" id="xr_xp5" style="left:0; top:0; visibility: hidden; display: none;">
 <div class="xr_ap" onmousemove="xr_mpc(5)">
 <img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/10.png" alt="" title="" style="left: 630px; top: 79px; width: 74px; height: 68px;"/>
 </div>
 </div>
 <div id="xr_xo5"></div>
 <div id="xr_xd5"></div>
 <div class="xr_ap" id="xr_xp6" style="left:0; top:0; visibility: hidden; display: none;">
 <div class="xr_ap" onmousemove="xr_mpc(6)">
 <img class="xr_ap" src="<?php echo get_template_directory_uri(); ?>/images/11.png" alt="" title="" style="left: 690px; top: 83px; width: 79px; height: 73px;"/>
 </div>
 </div>
 <div id="xr_xo6"></div>
 <div id="xr_xd6"></div>
</div>
</div>
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
