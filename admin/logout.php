<?php
session_start();
if (isset($_SESSION['active_admin'])) {
	
	if (session_unset()) {
		session_destroy();
		header('location: login.php');
	}
}
