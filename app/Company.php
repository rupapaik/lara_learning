<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model{
    
    protected $fillable = [
        'name', 
        'email'
    ];


    public function customers(){
        return $this->hasMany(Customer::class);
    }

}
