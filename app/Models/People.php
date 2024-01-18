<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    public string $name;
    public string $lastName;
    public string $phoneNumber;
    public string $street;
    public string $city;
    public string $country;
    protected $fillable = [
        'name',
        'lastName',
        'phoneNumber',
        'street',
        'city',
        'country'
    ];
}
