<?php
 /* @param string $meta Meta name.
 * @param array $details Contains the details for the field.
 * @param string $value Contains input value;
 * @param string $context Context where the function is used. Depending on it some actions are preformed.;
 * @return string $element input element html string. */

$element .= '<select name="'. $single_prefix . esc_attr( Wordpress_Creation_Kit_PMSLE_IN::wck_generate_slug( $details['title'], $details ) ) .'"  id="';
if( !empty( $frontend_prefix ) )
	$element .= $frontend_prefix;
$element .= esc_attr( Wordpress_Creation_Kit_PMSLE_IN::wck_generate_slug( $details['title'], $details ) ) .'" class="mb-select mb-field" >';

if( !empty( $details['default-option'] ) && $details['default-option'] )
	$element .= '<option value="">'. __('...Choose', 'profile-builder') .'</option>';

$field_name = Wordpress_Creation_Kit_PMSLE_IN::wck_generate_slug( $details['title'], $details );

$options = '';
if( !empty( $details['options'] ) && !pmsle_in_wck_is_multi( $details['options'] ) ){
		$i = 0;
		foreach( $details['options'] as $option ){

            $optionOutput = pmsle_in_wck_generate_select_option($option, $details, $value, $i);
			$options .= apply_filters( "wck_select_{$meta}_{$field_name}_option_{$i}", $optionOutput, $i);

			$i++;
		}
} elseif( !empty( $details['options'] ) ){
	$i = 0;
	foreach($details['options']['optgroups'] as $optgroup){
		if(!empty($optgroup['options'])) {
			$options .= '<optgroup label="' . $optgroup['label'] . '">';
			foreach($optgroup['options'] as $option ){
				$optionOutput = pmsle_in_wck_generate_select_option($option, $details, $value, $i);
				$options .= apply_filters( "wck_select_{$meta}_{$field_name}_option_{$i}", $optionOutput, $i);

				$i++;
			}
			$options .= '</optgroup>';
		}
	}
}
$element .= apply_filters( "wck_select_{$meta}_{$field_name}_options", $options );
$element .= '</select>';
?>
