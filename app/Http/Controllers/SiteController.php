<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function about() {
        $company ='Vichian Bakery POS';
        $users = ['EAK', 'JIM', 'BOW', 'BAIBUA'];
        return view('about',[ //อ้างอิงไปที่ไฟล์ about.blade.php
            'company' => $company,
            'users' => $users
        ]);
    }

}
