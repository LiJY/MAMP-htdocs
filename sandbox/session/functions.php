<?php


function is_logged_in(){
	return (isset($_SESSION['username']));
}

function valid_user_creds($username,$password){
	return ($username === uid  && $password === pwd);

}
?>