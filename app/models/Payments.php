<?php

class Payments extends \Eloquent {
	
	protected $guarded = [];

	public function clients(){
		return $this->belongsTo('Clients');
	}
}