<?php

namespace App\MyCreatedModels;

use Illuminate\Database\Eloquent\Model;

class MyDataModel extends Model
{
    // Table Name
    protected $table = 'my_data_models';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
