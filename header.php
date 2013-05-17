<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head>
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?> </title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <link href="<?php echo get_template_directory_uri(); ?>/mmb/stylesheets/mainf538.css?1343895625" media="all" rel="stylesheet" type="text/css" />
  
  <script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/jquery.min42af.js?1343895166" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/jquery-ui.min42af.js?1343895166" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/jquery_ujs42af.js?1343895166" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/application42af.js?1343895166" type="text/javascript"></script>
  
  <!-- Nivo slider -->
  
  <!-- Megamenu -->
  <link href="<?php echo get_template_directory_uri(); ?>/mmb/stylesheets/jquery.megamenuc94d.css?1343895624" media="screen" rel="stylesheet" type="text/css" />
  <script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/jquery.megamenu42af.js?1343895166" type="text/javascript"></script>
  <script type="text/javascript">
//<![CDATA[

        jQuery(function(){
            jQuery(".megamenu").megamenu({
              "enable_js_shadow":"false"});
            jQuery(".megamenu").css({
              "width":"923px",
              "margin":"auto",
              "padding":"0px 0px 0px 0px"});
            jQuery("ul.megamenu li.mm-item").css({
              "width":"184px"});
            jQuery("div.mm-item-content").css({
              "width":"923px"});
            jQuery(".mm-item a.mm-item-link").css({
              "text-align":"center",
              "width":"186px", 
              "height":"35px"});
            jQuery("a.mm-item-link").css({
              "padding":"8px 0px 8px 0px",
              "line-height":"35px"});
      });
    
//]]>
</script>
  
  <!-- sliderjs -->
  <script src="<?php echo get_template_directory_uri(); ?>/mmb/javascripts/slides.jquery42af.js?1343895166" type="text/javascript"></script>
  <script type="text/javascript">
//<![CDATA[

      jQuery(function(){
        var captionHeight = 100;
        $('#feature').slides({
          effect: 'fade',
          crossfade: true,
          play: 5000,
          pause: 2500,
          preload: true,
          preloadImage: '<?php echo get_template_directory_uri(); ?>/mmb/images/sliderjs/loading.gif?1343895166',
          animationStart: function(current){
            /*$('.caption').animate({
              bottom:-(captionHeight+5)
            },100);*/
            $('.caption').fadeOut('fast');
            if(window.console && console.log){
              console.log('animationStart on slide: ', current);
            };
          },
          animationComplete: function(current){
            /*$('.caption').animate({
              bottom:0
            },200);*/
            $('.caption').fadeIn('slow');
            if(window.console && console.log){
              console.log('animationComplete on slide: ', current);
            };
          },
          slidesLoaded: function(){
            /*$('.caption').animate({
              bottom:0
            },200);*/
            $('.caption').fadeIn('slow');
          }
        });
      });  
    
//]]>
</script>
  <script type="text/javascript">
//<![CDATA[

        $(function(){
          $("#news").slides({
            generatePagination: false,
            animationComplete: function(current){
              if(current == 3){
                $("#news .next").hide();
              } else {
                $("#news .next").show();
              }
              if(current == 1){
                $("#news .prev").hide();
              } else {
                $("#news .prev").show();
              }
            }
          });
          $("#news .prev").hide();
        });
      
//]]>
</script>

  <meta name="csrf-param" content="authenticity_token"/>
<meta name="csrf-token" content="pK+ZhO6ozROF6vQ8Le9Radxyde4HuRLtu9CnbbhX0LQ="/>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--<?php wp_head(); ?>-->
</head>
<body>

  <div id="header">
  <div class="container">
    <div id="logo">
      <a href="<?php bloginfo( 'url' ); ?>"><img alt="Logommb" src="<?php echo get_template_directory_uri(); ?>/mmb/images/logommb42af.png?1343895166" /></a>
		</div>
		<div id="kotaksearch">
			<input type="text" size="20" />
			<input type="submit" value="Search" id="tombolsearch" /> 
	  </div>
	  <div id="translate">
		  <!--<a href="mmb/in.html"><img alt="Indo" src="mmb/images/indo42af.png?1343895166" /></a>
		  <a href="mmb/jp.html"><img alt="Jpn" src="mmb/images/jpn42af.png?1343895166" /></a>
		  <a href="mmb/en.html"><img alt="Eng" src="mmb/images/eng42af.png?1343895166" /></a>
      Kamis, 02 Mei 2013-->
    </div>
  </div>
</div>


	<div id="content">
		
		<!-- main menu -->
<ul class="megamenu">
    <li>
      <a class="nav_prodi" href="javascript:void(0)">PROGRAM STUDI</a>
      <div>
        <table id="tabular-content" class="submenu">
          <tr>
            <td>
           			<?php wp_nav_menu( array( 'theme_location' => 'progamStudi', 'menu_class' => 'nav-menu' ) ); ?>

            </td>
            <td class="description">
              
            </td>
            <td class="picture"><!--              <div class="description-image">
<img alt="Missing" src="mmb/images/original/missing42af.png?1343895166" />
              </div>-->              <div class="image-caption">
</div>
            </td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a class="nav_kuliah" href="javascript:void(0)">PERKULIAHAN</a>
      <div>
        <table id="tabular-content" class="submenu">
          <tr>
            <td>
                       			<?php wp_nav_menu( array( 'theme_location' => 'perkuliahan', 'menu_class' => 'nav-menu' ) ); ?>
            </td>
            <td class="description">
              
            </td>
            <td class="picture"><!--              <div class="description-image">
<img alt="Missing" src="mmb/images/original/missing42af.png?1343895166" />
              </div>-->              <div class="image-caption">
</div>
            </td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a class="nav_lab" href="javascript:void(0)">LABORATORIUM</a>
      <div>
        <table id="tabular-content" class="submenu">
          <tr>
            <td>
                          			<?php wp_nav_menu( array( 'theme_location' => 'laboratorium', 'menu_class' => 'nav-menu' ) ); ?>

            </td>
            <td class="description">
              
            </td>
            <td class="picture"><!--              <div class="description-image">
<img alt="Missing" src="mmb/images/original/missing42af.png?1343895166" />
              </div>-->              <div class="image-caption">
</div>
            </td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a class="nav_studio" href="javascript:void(0)">GALERI</a>
      <div>
        <table id="tabular-content" class="submenu">
          <tr>
            <td>
                          			<?php wp_nav_menu( array( 'theme_location' => 'galeri', 'menu_class' => 'nav-menu' ) ); ?>

            </td>
            <td class="description">
              
            </td>
            <td class="picture"><!--              <div class="description-image">
<img alt="Missing" src="mmb/images/original/missing42af.png?1343895166" />
              </div>-->              <div class="image-caption">
</div>
            </td>
          </tr>
        </table>
      </div>
    </li>
    <li>
      <a class="nav_galeri" href="javascript:void(0)">KOMUNITAS</a>
      <div>
        <table id="tabular-content" class="submenu">
          <tr>
            <td>
                       			<?php wp_nav_menu( array( 'theme_location' => 'komunitas', 'menu_class' => 'nav-menu' ) ); ?>

            </td>
            <td class="description">
              
            </td>
            <td class="picture"><!--              <div class="description-image">
<img alt="Missing" src="mmb/images/original/missing42af.png?1343895166" />
              </div>-->              <div class="image-caption">
</div>
            </td>
          </tr>
        </table>
      </div>
    </li>
</ul>
