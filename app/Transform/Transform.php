<?php
namespace App\Transform;

abstract class Transform {
	public function transformCollection($item)
	{
		return array_map([$this,'transform'],$item);
	}
	public abstract function transform($item);
}
 ?>
