<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Testcontroller extends Controller
{
    public function index(): View
    {
        echo 123;
        exit();
    }

}
