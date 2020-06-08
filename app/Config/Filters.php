<?php namespace Config;

use CodeIgniter\Config\BaseConfig;
use App\Filters\PostRequestOnly;
use App\Filters\AuthAdmin;
use App\Filters\IsLogin;
use App\Filters\AuthAPIAdmin;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'PostRequestOnly' => PostRequestOnly::class,
		'AuthAdmin'	=> AuthAdmin::class,
		'IsLogin'	=> IsLogin::class,
		'AuthAPIAdmin' => AuthAPIAdmin::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			//'honeypot'

			// enable csrf when production
			// 'csrf' => [
			// 	'except' => [
			// 		'api/*',						
			// 	],						
			// ],

			//cek login
			'IsLogin' => [
				'except' => ['api','api/*'],
			],
		],
		'after'  => [
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [
		// 'PostRequestOnly' => [
		// 	'before' => [
		// 		'/api/lahan',
		// 	],
		// ],
		'AuthAdmin' => [
			'before' => [
				'user-control*',
			],
		],
		// 'AuthAPIAdmin' => [
		// 	'before' => [
		// 		'api/*',
		// 	],
		// 	'except' => [
		// 		'/api/gettoken',
		// 	],
		// ],
		// 'IsLogin' => [
		// 	'before' => [
		// 		'/dashboard',
		// 	],
		// ],
	];
}
