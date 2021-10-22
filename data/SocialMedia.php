<?php
class SocialMedia
{
	var string $name;
}

class Facebook extends SocialMedia
{
	final function login() :string {
		return "Welcome to FB";
	}
}

class FakeFacebook extends Facebook
{
	function login() :string {
		return "Welcome to FFB";
	}
}

$fakeFb = new FakeFacebook();
echo $fakeFb->login();
