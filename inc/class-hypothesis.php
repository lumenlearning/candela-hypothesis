<?php

namespace Candela;

class Hypothesis {

	public static function init() {
		add_action( 'init', array( __CLASS__, 'enqueue_hypothesis_script' ) );
	}

	/**
	 * Add Hypothesis over https
	 */
	public static function enqueue_hypothesis_script() {
		wp_enqueue_script( 'hypothesis', 'https://hypothes.is/app/embed.js', '', false, true );
	}
}
