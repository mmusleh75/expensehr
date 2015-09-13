<?php

class Time extends Eloquent {


	protected $table = 'times';
	protected $fillable = ['report_id','user_id','days','dates','location_id'];

	public function report()
	{
		return $this->belongsTo('Report');
	}
}