<?php

namespace App\Http\Controllers;

use App\Models\StoreLocation;
use Illuminate\Http\Request;

class StoreLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $storelocations=StoreLocation::all();
         return view('admin.branch.index')->with(['storelocations'=>$storelocations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 StoreLocation::create([
 'longt'=>$request->input('longt'),
 'lat'=>$request->input('lat'),
 'tel'=>$request->input('tel'),
 'branch_name'=>$request->input('branch_name'),
 'city'=>$request->input('city'),
 'address_line'=>$request->input('address_line'),
 ]);

 return redirect()->back()->with(['success'=>'Branch Added Sucusfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StoreLocation  $storeLocation
     * @return \Illuminate\Http\Response
     */
    public function show(StoreLocation $storeLocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StoreLocation  $storeLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(StoreLocation $storeLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StoreLocation  $storeLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StoreLocation $storeLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StoreLocation  $storeLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StoreLocation $storeLocation)
    {
        //
    }
}
