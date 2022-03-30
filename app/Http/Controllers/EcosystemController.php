<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcosystemController extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Dashboard';
        return view('dashboard', $data);
    }
}
