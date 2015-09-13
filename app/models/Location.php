<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Location extends \Eloquent {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';
	//protected $fillable = array('username','email','password');
	protected $fillable = array('name','breakfast','lunch','dinner');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
