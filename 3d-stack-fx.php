<?php
/*
Plugin Name: 3D Stack FX
Plugin URI: http://www.flashxml.net/3d-stack.html
Description: One of the most advanced 3D Stack on the web. Completely XML customizable, without using Flash. And it's free!
Version: 0.1.4
Author: FlashXML.net
Author URI: http://www.flashxml.net/
License: GPL2
*/

	$stackfx_params = array(
		'count'	=> 0, // number of 3D Stack FX embeds
	);

	function stackfx_get_embed_code($stackfx_attributes) {
		$plugin_dir = basename(dirname(__FILE__));
		global $stackfx_params;
		$stackfx_params['count']++;

		$settings_file_name = !empty($stackfx_attributes[2]) ? $stackfx_attributes[2] : 'settings.xml';
		$settings_file_path = WP_PLUGIN_DIR."/{$plugin_dir}/component/$settings_file_name";

		if (file_exists($settings_file_path)) {
			$data = simplexml_load_file($settings_file_path);
			$width = (int)$data->General_Properties->widthComponent->attributes()->value;
			$height = (int)$data->General_Properties->heightComponent->attributes()->value;
		}

		if ($width == 0 || $height == 0) {
			return '';
		}

		$swf_embed = array(
			'width' => $width,
			'height' => $height,
			'text' => trim($stackfx_attributes[3]),
			'component_path' => WP_PLUGIN_URL."/{$plugin_dir}/component/",
			'swf_name' => '3dstack.swf',
		);
		$swf_embed['swf_path'] = $swf_embed['component_path'].$swf_embed['swf_name'];

		if (!is_feed()) {
			$embed_code = '<div id="stack-fx'.$stackfx_params['count'].'">'.$swf_embed['text'].'</div>';
			$embed_code .= '<script type="text/javascript">';
			$embed_code .= "swfobject.embedSWF('{$swf_embed['swf_path']}', 'stack-fx{$stackfx_params['count']}', '{$swf_embed['width']}', '{$swf_embed['height']}', '9.0.0.0', '', { folderPath: '{$swf_embed['component_path']}'".($settings_file_name != 'settings.xml' ? ", settingsXML: '{$settings_file_name}'" : '')." }, { scale: 'noscale', salign: 'tl', wmode: 'transparent', allowScriptAccess: 'sameDomain', allowFullScreen: true }, {});";
			$embed_code.= '</script>';
		} else {
			$embed_code = '<object width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'">';
			$embed_code .= '<param name="movie" value="'.$swf_embed['swf_path'].'"></param>';
			$embed_code .= '<param name="scale" value="noscale"></param>';
			$embed_code .= '<param name="salign" value="tl"></param>';
			$embed_code .= '<param name="wmode" value="transparent"></param>';
			$embed_code .= '<param name="allowScriptAccess" value="sameDomain"></param>';
			$embed_code .= '<param name="allowFullScreen" value="true"></param>';
			$embed_code .= '<param name="sameDomain" value="true"></param>';
			$embed_code .= '<param name="flashvars" value="folderPath='.$swf_embed['component_path'].($settings_file_name != 'settings.xml' ? '&settingsXML='.$settings_file_name : '').'"></param>';
			$embed_code .= '<embed type="application/x-shockwave-flash" width="'.$swf_embed['width'].'" height="'.$swf_embed['height'].'" src="'.$swf_embed['swf_path'].'" scale="noscale" salign="tl" wmode="transparent" allowScriptAccess="sameDomain" allowFullScreen="true" flashvars="folderPath='.$swf_embed['component_path'].($settings_file_name != 'settings.xml' ? '&settingsXML='.$settings_file_name : '').'"';
			$embed_code .= '></embed>';
			$embed_code .= '</object>';
		}

		return $embed_code;
	}

	function stackfx_filter_content($content) {
		return preg_replace_callback('|\[3d-stack-fx\s*(settings="([^\]]+)")?\s*\](.*)\[/3d-stack-fx\]|i', 'stackfx_get_embed_code', $content);
	}

	function stackfx_echo_embed_code($settings_xml_path = '', $div_text = '') {
		echo stackfx_get_embed_code(array(2 => $settings_xml_path, 3 => $div_text));
	}

	function stackfx_load_swfobject_lib() {
		wp_enqueue_script('swfobject');
	}

	add_filter('the_content', 'stackfx_filter_content');
	add_action('init', 'stackfx_load_swfobject_lib');

?>