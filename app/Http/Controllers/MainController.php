<?php

namespace App\Http\Controllers;

use App\Models\Application;

class MainController extends Controller
{
    public function dashboard()
    {
        return view('dashboard')->with([
            'applications' => Application::latest()->paginate(10),
        ]);;
    }
    public function main()
    {
        return redirect(to: 'dashboard');
    }

}
