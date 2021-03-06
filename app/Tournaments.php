<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{	

	protected $table = 'tournaments';

    protected $fillable=['title','beggins','image','ends','participants','author', 'prizes','page_id'];

    public function mainpage()
    {
    	return $this->belongsTO(MainPage::class,'page_id');
    } 
}
