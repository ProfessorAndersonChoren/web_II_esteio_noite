<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function home(){
        return view('home');
    }

    function listagem(){
        $users = [
            [
                'name' => 'Maria Aparecida',
                'email' => 'maria.aparecida@email.com',
                'birthday' => '12/05/1980'
            ],
            [
                'name' => 'João Paulo',
                'email' => 'joão.paulo@email.com',
                'birthday' => '05/08/1999'
            ]
        ];
        return view('listagem',compact('users'));
    }
}
