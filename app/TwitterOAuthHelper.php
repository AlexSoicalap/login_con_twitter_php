<?php

session_start();

require '/vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

class TwitterOAuthHelper {

	const CONSUMER_KEY = '4U8eEamHdMGNx7QV62IW7kv9N';
	const CONSUMER_SECRET = 'LW4WxwucpbnQ8Jh8rmWl9HUi5Tc9OSGoYcVy8BjdRaR2uCPvNj';
	const OAUTH_CALLBACK = 'http://local.twitter.com/callback.php';	

	public function signedIn()
	{
		if(isset($_SESSION['twitter_access_token'])){
			$access_token = $_SESSION['twitter_access_token'];
			$connection = new TwitterOAuth(self::CONSUMER_KEY, self::CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
			$user = $connection->get('account/verify_credentials');
			return $user;
		}
		return false;
	}

	public function getAuthUrl()
	{
		$connection = new TwitterOAuth(self::CONSUMER_KEY, self::CONSUMER_SECRET);

		$request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => self::OAUTH_CALLBACK));

		$_SESSION['oauth_token'] = $request_token['oauth_token'];
		$_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];

		$url = $connection->url('oauth/authenticate', array('oauth_token' => $request_token['oauth_token']));

		return $url;
	}

	public function getAccessToken()
	{
		
		$request_token = [];
		$request_token['oauth_token'] = $_SESSION['oauth_token'];
		$request_token['oauth_token_secret'] = $_SESSION['oauth_token_secret'];

		if(isset($_GET['oauth_token']) && $request_token['oauth_token'] !== $_GET['oauth_token']){
			exit('Error: something went wrong...');
		}

		$connection = new TwitterOAuth(self::CONSUMER_KEY, self::CONSUMER_SECRET, $request_token['oauth_token'], $request_token['oauth_token_secret']);

		$access_token = $connection->oauth('oauth/access_token', array("oauth_verifier" => $_GET['oauth_verifier']));
		if(empty($access_token)){
			exit('Error: invalid access token....');
		}

		return $access_token;
	}

}