<?php
namespace App\Mailer;
/**
 *
 */
class UserMailer extends Mailer
{

	function welcome($user)
	{
		$subject = 'Welcome To Plus';
		$view = 'emails.welcome';
		$data = ['name'=>$user->name];

		$this->sendTo($user,$subject,$view,$data);
	}
}

 ?>
