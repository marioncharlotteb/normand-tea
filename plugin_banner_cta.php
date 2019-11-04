<?php
/*
Plugin Name: cta
Plugin URI: https://marionbonnet.referentnumerique.insa-rouen.fr/normand-tea
Description: plugin call to action
Author: Marion Bonnet
Version: 1.0
*/


function html_banner_cta() {
$code_cta="<section style='text-align: center'>
	<img src='https://marionbonnet.referentnumerique-insarouen.fr/normand-tea/wp-content/uploads/2019/10/visuel-plugin.png'> <br> <br>
	<a href='https://marionbonnet.referentnumerique-insarouen.fr/normand-tea/?product=the-oolong-fraiche-apres-midi'> <input type='button' value='Voir le produit' style='cursor: pointer; border:0; padding: 10px 20px; font-size: 1rem; text-align: center; color: #fff; background-color: #b5985a; border-radius: 4px'></a>
</section>";

return $code_cta;
}

add_shortcode ('cta', 'html_banner_cta') ;
