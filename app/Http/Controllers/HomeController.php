<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
<<<<<<< HEAD
    public function home (Request $request): RedirectResponse
=======
    public function home(Request $request): RedirectResponse
>>>>>>> bb861dcdee2fdeb13c2377f2f1e517f1d9c8f7de
    {
        if($request->session()->exists("user")){
            return redirect("/todolist");
        } else {
            return redirect("/login");
        }
    }
}
