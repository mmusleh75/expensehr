<?php

class Report extends Eloquent {


	protected $table = 'reports';

	protected $fillable = ['name','user_id'];

	public function user()
	{
		return $this->belongsTo('User')->withTimestamps();
	}
	
	public function times()
	{
		return $this->hasMany('Time');
	}
}