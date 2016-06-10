<?php 

/**
 * Routes
 */

$router->get('/', function() {
	return (new \App\Controllers\PageController)->show('home');
});

$router->get('/about', function() {
	return (new \App\Controllers\PageController)->show('about');
});

$router->get('/blog', function() {
	return (new \App\Controllers\BlogController)->index();
});

$router->post('/email/contact', function() {
	return (new \App\Controllers\EmailController)->contact( (new \App\Services\WpMailService) );
});