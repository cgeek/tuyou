<?php

Yii::import('ext.oauth.sina.*');

class Sina extends CComponent 
{
	private $app_key = '623035423';

	private $app_secret = 'fb2065bbde4cf92cd5cd53987a2ff4d7';

	private $client = NULL;

	private $oauth = NULL;

	public function getUrl($url)
	{
		$this->oauth =  new WeiboOAuthV2($this->app_key, $this->app_secret);
		if($this->oauth) {
			return $this->oauth->getAuthorizeURL($url);
		} else {
			return null;
		}
	}

	public function getToken($code,$callback_url='')
	{
		$this->oauth =  new WeiboOAuthV2($this->app_key, $this->app_secret);
		
		$keys = array();
		$keys['code'] = $code;
		$keys['redirect_uri'] = $callback_url;

		try {
			return $this->oauth->getAccessToken('code',$keys);
		} catch(OAuthException $e) {
			return NULL;
		}
	}

	public function getClient($token)
	{
		if(empty($token))
			return NULL;

		return new WeiboClientV2($this->app_key, $this->app_secret, $token['access_token']);
	}
}

?>
