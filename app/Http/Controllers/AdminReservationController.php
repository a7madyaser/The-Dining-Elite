<?php

namespace App\Http\Controllers;

use App\Models\AdminReservation;
use Illuminate\Http\Request;

class AdminReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations= AdminReservation::all();
        return view ('admin.sidebar.reservation')->with('reservations', $reservations); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add.reservation'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        AdminReservation::create($input);
        return redirect('reservations')->with('flash_message', 'reservation Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminReservation  $adminReseration
     * @return \Illuminate\Http\Response
     */
    public function show(AdminReservation $adminReservation , $id)
    {
        $reservations = AdminReservation::onlyTrashed()->get();
        return view('reservations.softdelete' , compact('reservations'));
        return $reservations;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminReservation  $adminReservation
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminReservation $adminReservation)
    {
        $Reservations = AdminReservations::find($id);
        return view('Reservations.edit')->with('Reservations', $Reservations);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminReseration  $adminReseration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminReservation $adminReservation)
    {
        $Reservations = AdminReservations::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('Reservations')->with('flash_message', 'Reservations Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminReservation  $adminReservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminReservation $adminReservation)
    {
        AdminReservations::destroy($id);
        return redirect()->route('admin.sidebar.reservation');
    }
}
