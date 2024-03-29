<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
            'name',
            'description',
            'days',
            'company_id',
            'user_id',
    ];
    public function user(){
        return $this->belongsToMany('App\User');
    }
    public function company(){
        return $this->belongsTo('App\Company');
    }

}
