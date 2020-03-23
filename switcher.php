<?php 
		if ( function_exists( 'pll_the_languages' ) ) {
			$languages = pll_the_languages(array('raw'=>1));
			$output = '';
			foreach ( $languages as $lang ) {
				if ( $lang['current_lang'] ) { $current = 'class="active"'; } else { $current = ''; }
				$output .= '<a ' . $current . ' href="' . $lang['url'] . '" hreflang="' . $lang['slug'] . '">' . $lang['name'] . '</a> | ';
			} 
		}
		echo rtrim($output," | ");
?>
