<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(): View
    {
        $info = config('lang.en.info');

        return view('dashboard', compact('info'));
    }
}