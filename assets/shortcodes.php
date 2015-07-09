<?php
	
// Add Shortcode
function wb_shortcode_intro( $atts , $content = null ) {

	$output = '<div style="background-color:yellow">';
	$output .= wpautop( $content );
	$output .= '</div>';
	
	return $output;
}

add_shortcode( 'intro', 'wb_shortcode_intro' );


// Shortcode Contact information
function wb_shortcode_contact_information() {

	if( ICL_LANGUAGE_CODE=='nl' ) {
		$output = '<div class="shortcode-contact-information">';
			$output .= '<h2>' . __('Our coordinates', 'eagle') . '</h2>';
			$output .= '<strong>' . get_field('field_545c91318d1d7','option') . '</strong>';
			$output .= '<p>';
				$output .= get_field('field_545c9204920f9','option') . '</br>';
				$output .= get_field('field_545c9234920fa','option') . '</br>';
			$output .= '</p>';
			$output .= '<p>';
				$output .= __('Phone', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_545c925d920fb','option') ) . '">' . get_field('field_545c925d920fb','option') . '</a>' . '</br>';
				$output .= __('Mobile', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_545ceae654114','option') ) . '">' . get_field('field_545c925d920fb','option') . '</a>' . '</br>';
				$output .= __('Email', 'eagle') . ': ' . '<a href="mailto:' . get_field('field_545c927a920fc','option') . '">' . get_field('field_545c927a920fc','option') . '</a>' . '<br/>';
			$output .= '</p>';
		$output .= '</div>';
		
	} elseif( ICL_LANGUAGE_CODE=='fr' ) {
		$output = '<div class="shortcode-contact-information">';
			$output .= '<h2>' . __('Our coordinates', 'eagle') . '</h2>';
			$output .= '<strong>' . get_field('field_5518fffd0f19a','option') . '</strong>';
			$output .= '<p>';
				$output .= get_field('field_5518fffd0f1ac','option') . '</br>';
				$output .= get_field('field_5518fffd0f1be','option') . '</br>';
			$output .= '</p>';
			$output .= '<p>';
				$output .= __('Phone', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffd0f1f4','option') ) . '">' . get_field('field_5518fffd0f1f4','option') . '</a>' . '</br>';
				$output .= __('Mobile', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffd0f205','option') ) . '">' . get_field('field_5518fffd0f205','option') . '</a>' . '</br>';
				$output .= __('Email', 'eagle') . ': ' . '<a href="mailto:' . get_field('field_5518fffd0f1e2','option') . '">' . get_field('field_5518fffd0f1e2','option') . '</a>' . '<br/>';
			$output .= '</p>';
		$output .= '</div>';
	
	} elseif( ICL_LANGUAGE_CODE=='de' ) {
		$output = '<div class="shortcode-contact-information">';
			$output .= '<h2>' . __('Our coordinates', 'eagle') . '</h2>';
			$output .= '<strong>' . get_field('field_5518fffdc4d25','option') . '</strong>';
			$output .= '<p>';
				$output .= get_field('field_5518fffdc4d3e','option') . '</br>';
				$output .= get_field('field_5518fffdc4d7f','option') . '</br>';
			$output .= '</p>';
			$output .= '<p>';
				$output .= __('Phone', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffdc4dbf','option') ) . '">' . get_field('field_5518fffdc4dbf','option') . '</a>' . '</br>';
				$output .= __('Mobile', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffdc4dd1','option') ) . '">' . get_field('field_5518fffdc4dd1','option') . '</a>' . '</br>';
				$output .= __('Email', 'eagle') . ': ' . '<a href="mailto:' . get_field('field_5518fffdc4dae','option') . '">' . get_field('field_5518fffdc4dae','option') . '</a>' . '<br/>';
			$output .= '</p>';
		$output .= '</div>';
	
	} elseif( ICL_LANGUAGE_CODE=='en' ) {
		$output = '<div class="shortcode-contact-information">';
			$output .= '<h2>' . __('Our coordinates', 'eagle') . '</h2>';
			$output .= '<strong>' . get_field('field_5518fffc56fb4','option') . '</strong>';
			$output .= '<p>';
				$output .= get_field('field_5518fffc56fca','option') . '</br>';
				$output .= get_field('field_5518fffc56fe7','option') . '</br>';
			$output .= '</p>';
			$output .= '<p>';
				$output .= __('Phone', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffc57027','option') ) . '">' . get_field('field_5518fffc57027','option') . '</a>' . '</br>';
				$output .= __('Mobile', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_5518fffc57040','option') ) . '">' . get_field('field_5518fffc57040','option') . '</a>' . '</br>';
				$output .= __('Email', 'eagle') . ': ' . '<a href="mailto:' . get_field('field_5518fffc57014','option') . '">' . get_field('field_5518fffc57014','option') . '</a>' . '<br/>';
			$output .= '</p>';
		$output .= '</div>';
	
	} else {
		$output = '<div class="shortcode-contact-information">';
			$output .= '<h2>' . __('Our coordinates', 'eagle') . '</h2>';
			$output .= '<strong>' . get_field('field_545c91318d1d7','option') . '</strong>';
			$output .= '<p>';
				$output .= get_field('field_545c9204920f9','option') . '</br>';
				$output .= get_field('field_545c9234920fa','option') . '</br>';
			$output .= '</p>';
			$output .= '<p>';
				$output .= __('Phone', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_545c925d920fb','option') ) . '">' . get_field('field_545c925d920fb','option') . '</a>' . '</br>';
				$output .= __('Mobile', 'eagle') . ': ' . '<a href="tel:' . str_replace( ' ', '', get_field('field_545ceae654114','option') ) . '">' . get_field('field_545c925d920fb','option') . '</a>' . '</br>';
				$output .= __('Email', 'eagle') . ': ' . '<a href="mailto:' . get_field('field_545c927a920fc','option') . '">' . get_field('field_545c927a920fc','option') . '</a>' . '<br/>';
			$output .= '</p>';
		$output .= '</div>';
	
	}
	
	return $output;
}

add_shortcode( 'contact-information', 'wb_shortcode_contact_information' );

?>