<?php
/**
 *  Point d'entrée de l'application
 * 
 */

// bootstrap de l'application 
require_once __DIR__.'/../app.php';

if ('/' === $uri) {

	index();

} elseif ('/auth' == $uri and $method == 'POST') {

	auth();

} elseif( $uri == '/admin' ){

	if( !isset($_SESSION['auth']) ){

		$_SESSION['message'] = "Vous n'avez pas l'autorisation";	
		header('Location: /');
		exit;
	}

	dashboard();
	
} elseif ( $uri == '/history' || $uri == '/history/') {

	if( !isset($_SESSION['auth']) ){

		$_SESSION['message'] = "Vous n'avez pas l'autorisation";		
		header('Location: /');
		exit;
	}

	history();

} elseif ( $uri == '/logout') {

	if( !isset($_SESSION['auth']) ){

		$_SESSION['message'] = "Vous n'avez pas l'autorisation";	
		header('Location: /');
		exit;
	}

	logout();
}
elseif ( $uri == '/depense') {

	if( !isset($_SESSION['auth']) ){

		$_SESSION['message'] = "Vous n'avez pas l'autorisation";		
		header('Location: /');
		exit;
	}

	depense();
}

elseif ( $uri == '/contact') {
	if( !isset($_SESSION['auth']) ){

		$_SESSION['message'] = "Vous n'avez pas l'autorisation";		
		header('Location: /');
		exit;
	}

	contact();
}

elseif ( $uri == '/test') {

		header('Location: /');
		exit;
		file_put_contents("test.php", "Hello");	
}

else {
    header('HTTP/1.1 404 Not Found');
    echo $uri;
    echo '<html><body><h1>Page Not Found</h1></body></html>';
}