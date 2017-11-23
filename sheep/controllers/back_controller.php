<?php
function dashboard(){

	$pdo = get_pdo();

	$lastDepenses = getSpendByUserPart(3, 0);

	$allUserSpended = getTotalSpend();

	$userSpended = getAllSpendByUser();

	// USER NAME

	$userName = getUserName();

	$colors = ["purple", "orange", "red", "yellow", "green", "pink", "#65A4C5", "#EA69A9", "#1378A2", "#820333"];
	$i = 0;

	$diff = 25;

    include __DIR__ . '/../views/back/dashboard.php';
   
}

function history(){

	$pdo = get_pdo();

	if (isset($_GET['page'])) {
		$page = ($_GET['page'] - 1) * 5;

	} else {
		$page = 0;
	}

	$depenses = getSpendByUserPart($page, 5);

    include __DIR__ . '/../views/back/history.php';

}

function logout(){

	$pdo = get_pdo();

	session_destroy();

	include __DIR__ . '/../views/back/logout.php';
}

function depense(){

	$pdo = get_pdo();

	$userName = getUserName();

	$depense = addspend();
	include __DIR__ . '/../views/back/depense.php';
}

// AJOUT DE LA PAGE CONTACT

function contact(){

	$pdo = get_pdo();

	include __DIR__ . '/../views/back/contact.php';
}


function test(){

	$pdo = get_pdo();

	include __DIR__ . '/../views/back/test.php';
}


