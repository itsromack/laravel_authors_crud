<?php

class Author extends Eloquent
{
	public static $table = 'authors';

	public static $rules = array(
		'name' => 'required|min:2',
		'bio' => 'required|min:10'
	);

	public static function validate($data)
	{
		return Validator::make($data, static::$rules);
	}
}