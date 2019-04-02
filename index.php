<?php
   /*
   Plugin Name: Liquid Distortion Slider
   Plugin URI: http://aglet.co.za
   description:
   Version: 1.0
   Author: Aglet
   Author URI: http://aglet.co.za
   License: GPL2
   */


function add_my_stylesheet()
{

    wp_register_style( 'liquid-normalize', plugin_dir_url(__FILE__) . 'css/normalize.css' );
    wp_register_style( 'liquid-demo', plugin_dir_url(__FILE__ ) . 'css/demo.css' );
    wp_register_style( 'liquid-component', plugin_dir_url(__FILE__ ) .  'css/component.css' );
    wp_register_style( 'liquid-pater', plugin_dir_url(__FILE__) . 'pater/pater.css' );

     // wp_register_script( 'liquid-jquery', 'https://code.jquery.com/jquery-3.3.1.js', true );

    wp_register_script( 'liquid-demojs', plugin_dir_url( __FILE__ ) . 'js/demo.js' );

	wp_register_script( 'liquid-pixi', plugin_dir_url( __FILE__ ) . 'js/pixi.min.js' );
	wp_register_script( 'liquid-TweenMax', plugin_dir_url( __FILE__ ) . 'js/TweenMax.min.js' );


	wp_register_script( 'liquid-main', plugin_dir_url( __FILE__ ) . 'js/main.js', true );
	wp_register_script( 'liquid-imagesloaded', plugin_dir_url( __FILE__ ) . 'js/imagesloaded.pkgd.min.js' );
	wp_register_script( 'liquid-agletliquid-slider', plugin_dir_url( __FILE__ ) . 'js/liquid-slider.js' );

	//wp_enqueue_script( 'liquid-slider', plugin_dir_url( __FILE__ ) . 'js/liquid-slider.js', false );

	wp_enqueue_style('liquid-normalize');
	wp_enqueue_style('liquid-demo');
	wp_enqueue_style('liquid-component');
	wp_enqueue_style('liquid-pater');

	wp_enqueue_script('liquid-demojs');
	wp_enqueue_script('liquid-pixi');
	wp_enqueue_script('liquid-TweenMax');
	wp_enqueue_script('liquid-main');
	wp_enqueue_script('liquid-imagesloaded');
	wp_enqueue_script('liquid-agletliquid-slider');

}

add_action('wp_enqueue_scripts', 'add_my_stylesheet');

 function liquid_slider_shortcode() {

?>


<script type="text/javascript">

	jQuery(document).ready(function(){
		// alert("Testing");
	});


</script>


<div class="site-wrapper slider-wrapper">
  
<div class="liquid-overlay"></div>

	<div class="content">
		<div class="slide-wrapper">

			<div class="slide-item">
				<img width="1920" height="1080" src="/wp-content/plugins/liquid-distortion-slider/img/zodiac-home-banner-01.jpg" class="slide-item__image">
			</div>

			<div class="slide-item">
				<img src="/wp-content/plugins/liquid-distortion-slider/img/zodiac-home-banner-02.jpg" class="slide-item__image">
			</div>

			<div class="slide-item">
				<img src="/wp-content/plugins/liquid-distortion-slider/img/zodiac-home-banner-03.jpg" class="slide-item__image">
			</div>

		</div>

		<div class="slider-btn-wrapper">
				<button class="scene-nav scene-nav--prev" data-nav="previous"> <span uk-icon="chevron-left"></span> </button>
				<button class="scene-nav scene-nav--next" data-nav="next"> <span uk-icon="chevron-right"></span> </button>
		</div>

	</div>


 	<div class="the-slider-text">
 		<div class="item slide active">
      <h1>INNOVATION</h1>
 			<p>
        <strong>Innovation, is what we create every day...for everyone...</strong>for a better life: Because the pool is a source of <strong>PLEASURE</strong> and <strong>JOY</strong>... a place to <strong>REUNITE FAMILIES</strong>...which <strong>CREATES RELATIONSHIPS</strong> and memories...a place where time stands still.
 			</p>
			<a href="/products/" class="slider_btn">VIEW OUR PRODUCTS</a>
 		</div>

 		<div class="item slide">
      <h1>A BETTER LIFE</h1>
 			<p>
        For over 100 years we have been motivated by innovation...and innovation has inspired our greatest successes.

        Every day we strive to supply the <strong>HIGHEST QUALITY</strong> products... and constantly seek to develop <strong>INNOVATING</strong> products. 			</p>

			<a href="/about-us/" class="slider_btn">Read more</a>
 		</div>

 		<div class="item slide">
 			<h1>THE ZODIAC LIFE</h1>
 			<p>
        Zodiac South Africa strives to offer world-class excellence in both products and service. Complemented by a team of dedicated staff throughout the country, we guarantee premium after sales service.
 			</p>
      <a href="/about-us/" class="slider_btn">Read more</a>
 		</div>

 	</div>

	<div class="item-pointer">
		<div class="item pointer active"></div>
		<div class="item pointer"></div>
		<div class="item pointer"></div>
	</div>

</div>

<?php
}

add_shortcode("show_liquid_slider", "liquid_slider_shortcode");
