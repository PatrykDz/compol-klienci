<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klient extends Model
{
    protected $table="klienci";
    
    protected $fillable=[
        'imie',
        'nazwisko',
        'PESEL',
        'data_urodzenia',
        'tel',
        'e-mail',
        'adres',
        'miejscowosc',
        'kod_pocztowy',
        ];
    
    
}
