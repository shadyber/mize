<?php

namespace App\Http\Controllers;

use App\Models\ItemCategory;
use Illuminate\Http\Request;

class ItemCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        //
        $categories=ItemCategory::all();
        return view('category.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {

        $itemCategory=ItemCategory::find($id);

        $items=$itemCategory->items;
        return view('category.show')->with(['category'=>$itemCategory,'items'=>$items]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ItemCategory $itemCategory
     * @return Response
     */
    public function edit(ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ItemCategory $itemCategory
     * @return Response
     */
    public function update(Request $request, ItemCategory $itemCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ItemCategory $itemCategory
     * @return Response
     */
    public function destroy(ItemCategory $itemCategory)
    {
        //
    }
}
