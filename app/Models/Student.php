<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'address',
        'status',
        'phone',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
