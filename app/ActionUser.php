<?php

namespace App;

use App\Libraries\ModelValidator;

class ActionUser extends ModelValidator 
{
    protected $rules = array();

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that will be hidden when querying model.
     *
     * @var array
     */
    protected $hidden = array('created_at', 'updated_at');

     /**
     * Database table
     *
     * @var string
     */
    protected $table = 'action_user';
}
