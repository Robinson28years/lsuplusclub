<?php
namespace App\Transform;

class UserTransform extends Transform {
	public function transform($user){
// return array_map(function($user){
	return [
		'id'=>$user['id'],
		'user'=>$user['name'],
		'email'=>$user['email']
			];
// });
		}
}
 ?>
