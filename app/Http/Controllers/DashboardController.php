<?php

namespace App\Http\Controllers;

use App\Models\Livreur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('client')){
            return view('clientdash');
        }elseif (Auth::user()->hasRole('restaurant')) {
            return view('restaurantdash');
        }elseif (Auth::user()->hasRole('livreur')) {
            return view('livreurdash');
        }elseif (Auth::user()->hasRole('admin')) {
            return view('dashboard');
        }
    }

    public function clientprofile()
        {
            return view('clientprofile');
        }

    public function restaurantprofile()
        {
            return view('restaurantprofile');
        }

    public function livreurprofile()
        {

            $profil = Livreur::with('user')->first();
            return view('livreurprofile')->with([
                'profil' => $profil
            ]);
        }

    public function adminprofile()
        {
            return view('adminprofile');
        }

}
