<?php

namespace App\Http\Controllers;

use App\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function handleForm() {
        $registration = new \App\Registration();
        $registration->Voornaam = 'Jelle';
        $registration->Achternaam = 'Buurman';
        $registration->Password = 'test123';
        $registration->Email = '25158@ma-web.nl';

        $registration->save();

        return('Ok bewaard');
    }
}
