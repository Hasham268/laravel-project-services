<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'email';
    public $incrementing = false;

    public function services()
 {
    return $this->hasMany(Services::class);
 }


}
