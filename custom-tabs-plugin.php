<?php
/**
 * Plugin Name:     Custom Tabs Plugin
 * Plugin URI:      https://provisional.com
 * Description:     Adds custom tabs to any page on your website
 * Author:          Andrea GV
 * Author URI:      https://sirius-web.net
 * Text Domain:     custom-tabs-plugin
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Custom_Tabs_Plugin
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// class CTabsP(){
	
// }


///Includies
include_once('ctabs-acf-management.php');
include_once('ctabs-fields.php');

/**
 * Option creation for allowing callbacks after activaction
 */
function activation_option(){
	add_option( 'plugin_activated', 'is_now_active' );
}

register_activation_hook( __FILE__,'activation_option' );

function main_tab_structure( string $repeater_tab_name ){
	$label_whole_markup = '<ul>';
	$content_mark_up = '';
	

	if( have_rows( $repeater_tab_name, 'options' ) ):
		while( have_rows( $repeater_tab_name, 'options' ) ) : $row = the_row();

			$label = get_sub_field( 'tab_label' );
			$label_whole_markup .= label_markup( $label, get_row_index() );
			$content_mark_up .= tab_content( $row,  get_row_index() );
		endwhile;
	endif;
	
	$label_whole_markup .= '</ul>';
	$main_structure = $label_whole_markup . $content_mark_up;
	return $main_structure;
}

function tab_content( array $row, int $index ){
	$main_conte = main_tab_section( $row );
	$right_highlight = $row['field_5r'];
	$right_text = $row['field_4r'];
	$bottom_text = $row['field_78r'];
	$right_conte = right_section( $right_highlight, $right_text, $bottom_text );

	if( $row['field_6r'] ){
		$icons = get_tab_icons( $row['field_6r'] );
	}
	ob_start();
	?>
	 <div id="tab-<?php echo $index ;?>"> 
		<?php echo $main_conte;?>
		<?php echo $right_conte;?>
		<?php echo $icons;?>
	 </div>
	<?php
	$tab_content = ob_get_clean();
	return $tab_content;
}

function main_tab_section( array $row ){
	$main_back_url = wp_get_attachment_image_url( $row['field_2r'], 'full' ); //couldn't get the url because I gave manually the KEYof every field. Create first the fields and then export the PPHP code
	$quote = $row['field_3r']; 
	$testi_pic_url = wp_get_attachment_image_url( $row['field_156r'], 'full' );
	$testi_name = $row['field_91r'];
	$testi_icon_url = wp_get_attachment_image_url( $row['field_452r'], 'full' );
	ob_start();
	?>
	<div class="main-section" style="background-image: url('<?php echo $main_back_url;?>')"> 
		<div class="main-inner">
			<div class="main-quote"><?php echo $quote;?></div>
			<div class="main-testi"> 
				<div class="testi-pic"><image src="<?php echo esc_url($testi_pic_url);?>" alt="clients"></div>
				<div class="testi-name-pos"><?php echo $testi_name;?></div>
			</div>
			<div class="main-icon"><image src="<?php echo esc_url($testi_icon_url);?>" alt="the-icon"></div>
		</div>
	</div>
	<?php
	$main_section = ob_get_clean();
	return $main_section;
}

function right_section( string $highlight, string $top_text, string $bottom_text ){
	ob_start();
	?>
	<div class="right-section">
		<div class="top-right">
			<div class="hightlight"><?php echo esc_html($highlight);?></div>
			<div class="right-text"><?php echo esc_html($top_text);?></div>
		</div>
		<div class="bottom-right"><?php echo esc_html($bottom_text);?></div>
	</div>
	<?php 
	$markup = ob_get_clean();
	return $markup;
}

function get_tab_icons( array $icons ){
	ob_start();
	?>
	<div class="icons-section">
		<div class="trusted">Trusted by</div>
		<div class="icons-box">
			<?php
			foreach( $icons as $icon ){
				$icon_url = wp_get_attachment_image_url( $icon['field_288r'], 'full' );
			?>
				<div class="icons-trust"><image src="<?php echo esc_url($icon_url);?>" alt="icons"></div>
			<?php
			}
			?>
		</div>
	</div>
	<?php
	$markup = ob_get_clean();
	return $markup;

}

function label_markup( string $label, int $index ){
	ob_start();
	?>
		<li><a href="#tab-<?php echo $index ;?>"><?php echo esc_html($label); ?></a></li>

	<?php
	$markup = ob_get_clean();
	return $markup;
}

function whole_tab_markup(){
	$repeater_field = 'custom_tabs_content';
	ob_start();
	?>
		<div id="agv-custom-tabs">
			<?php echo main_tab_structure( $repeater_field );?>
		</div>
	<?php 
	$tabs_structure = ob_get_clean();
	return $tabs_structure;
}

add_shortcode( 'custom-tabs', 'whole_tab_markup' );