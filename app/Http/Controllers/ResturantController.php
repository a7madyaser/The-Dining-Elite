<?php

namespace App\Http\Controllers;

use App\Models\Resturant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ResturantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @retStudenturn \Illuminate\Http\Response
     */

        public function index()
        {
            $resturants = Resturant::all();
            return view('home.navbar', compact('resturants'));


        }
        public function showSecondPage() {
            $restaurants = Resturant::all();
            return view('home.reservation.book', compact('restaurants'));
        }
        public function page()
        {
            $resturants = Resturant::all();
            return view('home.resturant', compact('resturants'));


        }
        public function Pagedetail($id)
        {
            $resturants = Resturant::find($id);
            return view('home.resdetail', compact('resturants'));


        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
}
