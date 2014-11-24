<?php

class Employees extends \Eloquent {

	protected $fillable = [];

	public function department(){
		return $this->belongsTo('Departments', 'id_department');
	}

}