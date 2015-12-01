<?php

require 'app/TwitterOAuthHelper.php';

$helper = new TwitterOAuthHelper();

if($user_info = $helper->signedIn())
{
	//echo '<pre>' . print_r($user_info, true) . '</pre>'
?>
	<p>Logged in as <b><?=$user_info->name ?></b> <a href="logout.php">Logout</a></p>
	<img src="<?=$user_info->profile_image_url ?>" alt="">
<?php
} else {
?>
	<a href="<?=$helper->getAuthUrl(); ?>">Sign in with Twitter</a>
<?php
}