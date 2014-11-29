<?php

class Divisions extends \Eloquent {
	
	protected $fillable = [];

	public function management(){
		return $this->belongsTo('Managements', 'id_management');
	}

	public function employees(){
		return $this->hasMany('Employees', 'id_division');
	}

}