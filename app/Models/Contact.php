<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nom',
        'Email',
        'Telephone',
        'telephone_2', // Ajoutez cette ligne
        'Societe',
        'Adresse_Personnelle',
        '_token', // Add _token to allow mass assignment
    ];
}

