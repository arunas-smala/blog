<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index() {
        $name = 'Arunas';
        $email = 'arunas@smala.lt';
        $phone = '+37060797432';
        $interests = [
            'labuka', 'ka', 'tu',
        ];


        $data = compact('name', 'email', 'phone', 'interests');

        return view('contacts', $data);
    }
}
