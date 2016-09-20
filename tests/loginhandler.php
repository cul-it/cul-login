<?php
// $Id$
/**
 * loginhandler.php - handle POST from fake login form
 */
	if (isset($_POST)) {
		//$poster = print_r($_POST);
		// very dangerous:
		//drupal_set_message(t('$_POST = @post', array('@post' => $poster)));
		}

//$netid = getenv('REMOTE_USER');
$netid = $_POST['netid'];
if (isset($netid) && $netid) {
    setcookie('fake_netid', $netid, 0, '/');
    setcookie('verify_netid', md5($netid . $secret), 0, '/');
    setcookie('fake_CUWebAuth_netid', $netid, 0, '/');
}

if (empty($_POST['destination'])) {
	$destination = '/';
	}
else {
	$destination = '/'  . $_POST['destination'];
	}

//echo 'destination is ' . 'Location: http://' . $_SERVER['HTTP_HOST'] . $destination;
header('Location: http://' . $_SERVER['HTTP_HOST'] . $destination);
exit();

?>
