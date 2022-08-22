<!DOCTYPE html>
<html <?= language_attributes();?>>
<head>
<meta charset="<?=bloginfo('charset');?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?=bloginfo('Description');?>">
<title><?=bloginfo('name');?> | <?= is_front_page()? bloginfo('description'): wp_title('');?></title>
<meta name="description" content="Gain end-to-end visibility and manage your overall logistics in a single platform.">
<!-- Priority -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"/>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<!-- jquery -->
<!-- <link rel="preload" href="<=bloginfo('url');?>/wp-content/plugins/elementor/assets/css/frontend-lite.min.css" as="style"/> -->
<!-- Priority -->
<!-- Pre-connects -->
<?php wp_head();?>
<script src="https://kit.fontawesome.com/a5b3b870d7.js" crossorigin="anonymous"></script>
</head>
<body>
<header class="container-fluid nav-container" style= "z-index:2; width:100vw; margin-left: 0; margin-right: 0;">
		<nav class="container navigation">
			<ul class="menunav" style="margin-left:.02rem;">
				<li class="logo" style="text-align:left;padding-top: 0px;"><a href="<?=bloginfo('url');?>/" style="padding-top: 0px;" ><img class="invlogo" src="\ferl.webpf\wp-content\themes\fportf\img\lgcolr.svg" alt="logo"></a></li>

				<!-- <php echo get_template_directory_uri(); ?>/img/lgmno.svg -->
				<li class="toggle" style="padding: 0 .5rem 0  0; flex:1; position:relative;">
					<a rel="nofollow" style="padding:0;" aria-pressed="false" style="color: #ce13af">
						<i class="fa-solid fa-bars" id="togmenu" alt="toggle" style="color: #ce13af"></i>
					</a>
				</li>
			</ul>
			<ul class="menu" style="top: 59px;">
				<li class="item"><a href="<?=bloginfo('url');?>/#home">FERL.DEv</a></li>
				<li class="item"><a href="<?=bloginfo('url');?>/#wid">ABOUT</a></li>
				<li class="item"><a href="<?=bloginfo('url');?>/#somw" >PORTFOLIO</a></li>
				<li class="item"><a href="https://drive.google.com/drive/folders/1WZ426qwlFekbDHWRlCj_PXu74vg89402?usp=sharing" target="_blank" >CERTIFICATES</a></li>
				<li class="item son"><a class="sona" href="<?=bloginfo('url');?>/#contacts">CONTACT</a></li>
			</ul>
		</nav>
	</header>