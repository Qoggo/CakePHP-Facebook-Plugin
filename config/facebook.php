<?php

switch (Configure::write('Qoggo.environment', $env)) {
	default:
	case 'production':
		$config['Facebook'] = array(
			'APP_ID'		=> '266575813359764',
			'APP_URL'		=> '',
			'API_KEY'		=> '266575813359764',
			'API_SECRET'	=> '8eaf0a541d2baf43a4624953bfa9950f',
			'COOKIE_DOMAIN' => 'www.qoggo.com'
		);
		break;

	case 'staging':
		$config['Facebook'] = array(
			'APP_ID'		=> '150331101712556',
			'APP_URL'		=> '',
			'API_KEY'		=> '150331101712556',
			'API_SECRET'	=> '660dcdcde701da77788acf3cb2284d2b',
			'COOKIE_DOMAIN' => 'dev.qoggo.com'
		);
		break;

	case 'local': // mike's local
		$config['Facebook'] = array(
			'APP_ID'		=> '247165811976757',
			'APP_URL'		=> 'https://apps.facebook.com/qoggo_local/',
			'API_KEY'		=> '247165811976757',
			'API_SECRET'	=> '5f8e9314373816419c783cef657b0169',
			'COOKIE_DOMAIN' => 'qoggo.smullindesign.com'
		);
		break;
}