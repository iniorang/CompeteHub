<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Manager\SubscriptionManager;
use Illuminate\Support\Facades\Request;

/**
 * Class SubscriptionController
 * @package App\Http\Controllers
 */

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('beranda');
    }
}
