<?php
class SocialMedia
{
	var string $name;
}

final class Facebook extends SocialMedia
{

}

class FakeFacebook extends Facebook
{

}

$fakeFb = new FakeFacebook();
$fakeFb->name = "pesbuk";
var_dump($fakeFb);
