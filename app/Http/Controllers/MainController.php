<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class MainController extends Controller
{   
    public function Locale($locale) {
        if (in_array($locale, ['en', 'ru'])) {
            session(['locale'=>$locale]);
        }
        return redirect()->back();
    }
}
