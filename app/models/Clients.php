<?php

    class Clients extends Eloquent
    {


		public function contacts(){
			return $this->hasMany('Contacts');
		}


		public function payments(){
			return $this->hasMany('Payments');
		}


    }