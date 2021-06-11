<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'isLoggedIn' => \App\Filters\LoginFilter::class,
		'isAuthor' => \App\Filters\AuthorFilter::class,
		'isClient' => \App\Filters\ClientFilter::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	
	public $globals = [
		'before' => [
			'isLoggedIn' => ['except' => ['/', '/login', '/register', '/planes', '/buscar*', '/categor*', '/uploads/*'] ]
			// 'honeypot',
			// 'csrf',
		],
		'after'  => [
			'toolbar',
			// 'honeypot',
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [
		'isAuthor' => ['before' => ['/createResource*', '/followers']],
		'isClient' => ['before' => ['/addToLista*', '/listas_visualizacion*', '/follow', '/unfollow*', '/add_favourite*', '/download*', '/followed_authors*']]
	];
}
