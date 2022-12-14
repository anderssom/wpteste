<?php
/**
 * Frontend CSS & Google Fonts loading File.
 *
 * @since 2.0.0
 *
 * @package uagb
 */

// Adds Fonts.
UAGB_Block_JS::blocks_marketing_btn_gfont( $attr );

$block_name = 'marketing-button';

$gradient_location_1_fallback = UAGB_Block_Helper::get_fallback_number( $attr['gradientLocation1'], 'gradientLocation1', $block_name );
$gradient_location_2_fallback = UAGB_Block_Helper::get_fallback_number( $attr['gradientLocation2'], 'gradientLocation2', $block_name );
$gradient_angle_fallback      = UAGB_Block_Helper::get_fallback_number( $attr['gradientAngle'], 'gradientAngle', $block_name );
$icon_space_fallback          = UAGB_Block_Helper::get_fallback_number( $attr['iconSpace'], 'iconSpace', $block_name );
$icon_font_size_fallback      = UAGB_Block_Helper::get_fallback_number( $attr['iconFontSize'], 'iconFontSize', $block_name );
$title_space_fallback         = UAGB_Block_Helper::get_fallback_number( $attr['titleSpace'], 'titleSpace', $block_name );

$m_selectors = array();
$t_selectors = array();

$btn_padding_top    = isset( $attr['paddingBtnTop'] ) ? $attr['paddingBtnTop'] : $attr['vPadding'];
$btn_padding_bottom = isset( $attr['paddingBtnBottom'] ) ? $attr['paddingBtnBottom'] : $attr['vPadding'];
$btn_padding_left   = isset( $attr['paddingBtnLeft'] ) ? $attr['paddingBtnLeft'] : $attr['hPadding'];
$btn_padding_right  = isset( $attr['paddingBtnRight'] ) ? $attr['paddingBtnRight'] : $attr['hPadding'];

$btn_padding_top_mobile    = isset( $attr['paddingBtnTopMobile'] ) ? $attr['paddingBtnTopMobile'] : $attr['vPaddingMobile'];
$btn_padding_bottom_mobile = isset( $attr['paddingBtnBottomMobile'] ) ? $attr['paddingBtnBottomMobile'] : $attr['vPaddingMobile'];
$btn_padding_left_mobile   = isset( $attr['paddingBtnLeftMobile'] ) ? $attr['paddingBtnLeftMobile'] : $attr['hPaddingMobile'];
$btn_padding_right_mobile  = isset( $attr['paddingBtnRightMobile'] ) ? $attr['paddingBtnRightMobile'] : $attr['hPaddingMobile'];

$btn_padding_top_tablet    = isset( $attr['paddingBtnTopTablet'] ) ? $attr['paddingBtnTopTablet'] : $attr['vPaddingTablet'];
$btn_padding_bottom_tablet = isset( $attr['paddingBtnBottomTablet'] ) ? $attr['paddingBtnBottomTablet'] : $attr['vPaddingTablet'];
$btn_padding_left_tablet   = isset( $attr['paddingBtnLeftTablet'] ) ? $attr['paddingBtnLeftTablet'] : $attr['hPaddingTablet'];
$btn_padding_right_tablet  = isset( $attr['paddingBtnRightTablet'] ) ? $attr['paddingBtnRightTablet'] : $attr['hPaddingTablet'];

$icon_color       = ( '' === $attr['iconColor'] ) ? $attr['titleColor'] : $attr['iconColor'];
$icon_hover_color = ( '' === $attr['iconHoverColor'] ) ? $attr['titleHoverColor'] : $attr['iconHoverColor'];

$btn_border_css        = UAGB_Block_Helper::uag_generate_border_css( $attr, 'btn' );
$btn_border_css        = UAGB_Block_Helper::uag_generate_deprecated_border_css(
	$btn_border_css,
	( isset( $attr['borderWidth'] ) ? $attr['borderWidth'] : '' ),
	( isset( $attr['borderRadius'] ) ? $attr['borderRadius'] : '' ),
	( isset( $attr['borderColor'] ) ? $attr['borderColor'] : '' ),
	( isset( $attr['borderStyle'] ) ? $attr['borderStyle'] : '' )
);
$btn_border_css_tablet = UAGB_Block_Helper::uag_generate_border_css( $attr, 'btn', 'tablet' );
$btn_border_css_mobile = UAGB_Block_Helper::uag_generate_border_css( $attr, 'btn', 'mobile' );


$selectors = array(
	' .uagb-marketing-btn__prefix'                     => array(
		'margin-top' => UAGB_Helper::get_css_value( $title_space_fallback, $attr['titleSpaceUnit'] ),
	),
	' svg'                                             => array(
		'fill'   => $icon_color,
		'width'  => UAGB_Helper::get_css_value( $icon_font_size_fallback, $attr['iconFontSizeType'] ),
		'height' => UAGB_Helper::get_css_value( $icon_font_size_fallback, $attr['iconFontSizeType'] ),
	),
	' p.uagb-marketing-btn__prefix'                    => array(
		'color' => $attr['prefixColor'],
	),
	' .uagb-marketing-btn__link:hover p.uagb-marketing-btn__prefix' => array(
		'color' => $attr['prefixHoverColor'],
	),
	' .uagb-marketing-btn__link:focus p.uagb-marketing-btn__prefix' => array(
		'color' => $attr['prefixHoverColor'],
	),
	' .uagb-marketing-btn__link:hover svg'             => array(
		'fill' => $icon_hover_color,
	),
	' .uagb-marketing-btn__link:focus svg'             => array(
		'fill' => $icon_hover_color,
	),
	' .uagb-marketing-btn__link.wp-block-button__link' => array_merge(
		array(
			'padding-left'   => UAGB_Helper::get_css_value( $btn_padding_left, $attr['paddingBtnUnit'] ),
			'padding-right'  => UAGB_Helper::get_css_value( $btn_padding_right, $attr['paddingBtnUnit'] ),
			'padding-top'    => UAGB_Helper::get_css_value( $btn_padding_top, $attr['paddingBtnUnit'] ),
			'padding-bottom' => UAGB_Helper::get_css_value( $btn_padding_bottom, $attr['paddingBtnUnit'] ),
		),
		$btn_border_css
	),
	' .uagb-marketing-btn__link:hover'                 => array(
		'border-color' => ! empty( $attr['btnBorderHColor'] ) ? $attr['btnBorderHColor'] : $attr['borderHoverColor'],
	),
	' .uagb-marketing-btn__link:focus'                 => array(
		'border-color' => ! empty( $attr['btnBorderHColor'] ) ? $attr['btnBorderHColor'] : $attr['borderHoverColor'],
	),
	'.uagb-marketing-btn__icon-after .uagb-marketing-btn__link svg' => array(
		'margin-left' => UAGB_Helper::get_css_value( $icon_space_fallback, 'px' ),
	),
	'.uagb-marketing-btn__icon-before .uagb-marketing-btn__link svg' => array(
		'margin-right' => UAGB_Helper::get_css_value( $icon_space_fallback, 'px' ),
	),
	'.uagb-marketing-btn__icon-after .uagb-marketing-btn__icon-wrap svg' => array( // For backword compatibility.
		'margin-left' => UAGB_Helper::get_css_value( $icon_space_fallback, 'px' ),
	),
	'.uagb-marketing-btn__icon-before .uagb-marketing-btn__icon-wrap svg' => array( // For backword compatibility.
		'margin-right' => UAGB_Helper::get_css_value( $icon_space_fallback, 'px' ),
	),
	' .uagb-marketing-btn__title-wrap'                 => array( // For backword compatibility.
		'align-items' => 'center',
	),
	' .uagb-marketing-btn__title-wrap .uagb-marketing-btn__icon-wrap svg' => array( // For backword compatibility.
		'vertical-align' => 'sub',
	),
);

$selectors[' .uagb-marketing-btn__link .uagb-marketing-btn__title'] = array(
	'color' => $attr['titleColor'],
);

$selectors[' .uagb-marketing-btn__link:hover .uagb-marketing-btn__title'] = array(
	'color' => $attr['titleHoverColor'],
);
$selectors[' .uagb-marketing-btn__link:focus .uagb-marketing-btn__title'] = array(
	'color' => $attr['titleHoverColor'],
);

if ( 'transparent' === $attr['backgroundType'] ) {

	$selectors[' .uagb-marketing-btn__link']['background'] = 'transparent';
	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) a.wp-block-button__link:not(.has-background)']['background'] = 'transparent';


} elseif ( 'color' === $attr['backgroundType'] ) {

	$selectors['.wp-block-uagb-marketing-button.wp-block-button .wp-block-button__link.uagb-marketing-btn__link']['background'] = UAGB_Helper::hex2rgba( $attr['backgroundColor'], $attr['backgroundOpacity'] );

	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) a.wp-block-button__link:not(.has-background)']['background-color'] = UAGB_Helper::hex2rgba( $attr['backgroundColor'], $attr['backgroundOpacity'] );

	// Hover Background.
	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) .wp-block-button__link.uagb-marketing-btn__link:hover']['background']   = UAGB_Helper::hex2rgba( $attr['backgroundHoverColor'], $attr['backgroundHoverOpacity'] );
	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) .wp-block-button__link.uagb-marketing-btn__link:focus']['background']   = UAGB_Helper::hex2rgba( $attr['backgroundHoverColor'], $attr['backgroundHoverOpacity'] );
	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) .wp-block-button__link.uagb-marketing-btn__link:hover']['border-color'] = UAGB_Helper::hex2rgba( $attr['btnBorderHColor'] );

} elseif ( 'gradient' === $attr['backgroundType'] ) {

	$selectors[' .uagb-marketing-btn__link']['background-color'] = 'transparent';
	$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) a.wp-block-button__link:not(.has-background)']['background-color'] = 'transparent';


	if ( 'linear' === $attr['gradientType'] ) {

		$selectors[' .uagb-marketing-btn__link']['background-image'] = 'linear-gradient(' . $gradient_angle_fallback . 'deg, ' . UAGB_Helper::hex2rgba( $attr['gradientColor1'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_1_fallback . '%, ' . UAGB_Helper::hex2rgba( $attr['gradientColor2'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_2_fallback . '%)';
		$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) a.wp-block-button__link:not(.has-background)']['background-image'] = 'linear-gradient(' . $gradient_angle_fallback . 'deg, ' . UAGB_Helper::hex2rgba( $attr['gradientColor1'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_1_fallback . '%, ' . UAGB_Helper::hex2rgba( $attr['gradientColor2'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_2_fallback . '%)';

	} else {

		$selectors[' .uagb-marketing-btn__link']['background-image'] = 'radial-gradient( at center center, ' . UAGB_Helper::hex2rgba( $attr['gradientColor1'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_1_fallback . '%, ' . UAGB_Helper::hex2rgba( $attr['gradientColor2'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_2_fallback . '%)';
		$selectors['.wp-block-uagb-marketing-button.wp-block-button:not(.is-style-outline) a.wp-block-button__link:not(.has-background)']['background-image'] = 'radial-gradient( at center center, ' . UAGB_Helper::hex2rgba( $attr['gradientColor1'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_1_fallback . '%, ' . UAGB_Helper::hex2rgba( $attr['gradientColor2'], $attr['backgroundOpacity'] ) . ' ' . $gradient_location_2_fallback . '%)';

	}
}

$m_selectors = array(
	' svg'                         => array(
		'width'  => UAGB_Helper::get_css_value( $attr['iconFontSizeMobile'], $attr['iconFontSizeType'] ),
		'height' => UAGB_Helper::get_css_value( $attr['iconFontSizeMobile'], $attr['iconFontSizeType'] ),
	),
	'.wp-block-uagb-marketing-button.wp-block-button .uagb-marketing-btn__link' => array_merge(
		array(
			'padding-left'   => UAGB_Helper::get_css_value( $btn_padding_left_mobile, $attr['mobilePaddingBtnUnit'] ),
			'padding-right'  => UAGB_Helper::get_css_value( $btn_padding_right_mobile, $attr['mobilePaddingBtnUnit'] ),
			'padding-top'    => UAGB_Helper::get_css_value( $btn_padding_top_mobile, $attr['mobilePaddingBtnUnit'] ),
			'padding-bottom' => UAGB_Helper::get_css_value( $btn_padding_bottom_mobile, $attr['mobilePaddingBtnUnit'] ),
		),
		$btn_border_css_mobile
	),
	'.uagb-marketing-btn__icon-after .uagb-marketing-btn__link svg' => array(
		'margin-left' => UAGB_Helper::get_css_value( $attr['iconSpaceMobile'], 'px' ),
	),
	'.uagb-marketing-btn__icon-before .uagb-marketing-btn__link svg' => array(
		'margin-right' => UAGB_Helper::get_css_value( $attr['iconSpaceMobile'], 'px' ),
	),
	' .uagb-marketing-btn__prefix' => array(
		'margin-top' => UAGB_Helper::get_css_value( $attr['titleSpaceMobile'], 'px' ),
	),
);

$t_selectors = array(
	' .uagb-marketing-btn__prefix' => array(
		'margin-top' => UAGB_Helper::get_css_value( $attr['titleSpaceTablet'], 'px' ),
	),
	' svg'                         => array(
		'width'  => UAGB_Helper::get_css_value( $attr['iconFontSizeTablet'], $attr['iconFontSizeType'] ),
		'height' => UAGB_Helper::get_css_value( $attr['iconFontSizeTablet'], $attr['iconFontSizeType'] ),
	),
	' .uagb-marketing-btn__link'   => array_merge(
		array(
			'padding-left'   => UAGB_Helper::get_css_value( $btn_padding_left_tablet, $attr['tabletPaddingBtnUnit'] ),
			'padding-right'  => UAGB_Helper::get_css_value( $btn_padding_right_tablet, $attr['tabletPaddingBtnUnit'] ),
			'padding-top'    => UAGB_Helper::get_css_value( $btn_padding_top_tablet, $attr['tabletPaddingBtnUnit'] ),
			'padding-bottom' => UAGB_Helper::get_css_value( $btn_padding_bottom_tablet, $attr['tabletPaddingBtnUnit'] ),
		),
		$btn_border_css_tablet
	),
	'.uagb-marketing-btn__icon-after .uagb-marketing-btn__link svg' => array(
		'margin-left' => UAGB_Helper::get_css_value( $attr['iconSpaceTablet'], 'px' ),
	),
	'.uagb-marketing-btn__icon-before .uagb-marketing-btn__link svg' => array(
		'margin-right' => UAGB_Helper::get_css_value( $attr['iconSpaceTablet'], 'px' ),
	),

);

$combined_selectors = array(
	'desktop' => $selectors,
	'tablet'  => $t_selectors,
	'mobile'  => $m_selectors,
);

$combined_selectors = UAGB_Helper::get_typography_css( $attr, 'title', ' .uagb-marketing-btn__title', $combined_selectors );
$combined_selectors = UAGB_Helper::get_typography_css( $attr, 'prefix', ' .uagb-marketing-btn__prefix', $combined_selectors );

$base_selector = ( $attr['classMigrate'] ) ? '.uagb-block-' : '#uagb-marketing-btn-';

return UAGB_Helper::generate_all_css( $combined_selectors, $base_selector . $id );
