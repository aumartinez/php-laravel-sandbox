<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Person;

class Person extends Model
{
    use HasFactory;
    protected $fillable = [
                          'name',
                          'email'
                          ];
}
