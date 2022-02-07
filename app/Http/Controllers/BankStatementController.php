<?php

namespace App\Http\Controllers;

use App\Models\BankStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BankStatementController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth','verified'])->except('index','show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $bankstatments=BankStatement::OrderBy('id','desc')->Paginate(15);
     return view('admin.bankstatment.index')->with(['bankstatments'=>$bankstatments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

     return view('admin.bankstatment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(!Auth::user()->hasRole('admin')){
                    return redirect()->back()->with('error','You Don\'t Have This Permission');
                }

                $request->validate([
                    'bank_name'=>'required',
                    'amount'=>'required',
                    'currency_id'=>'required',
                    'date'=>'required',
                    'reference_number'=>'required',


                ]);





        $statement= BankStatement::create([
                'bank_name'=>$request->input('bank_name'),
                'amount'=>$request->input('amount'),
                'currency_id'=>$request->input('currency_id'),
                'date'=>$request->input('date'),
                'reference_number'=>$request->input('reference_number'),
                'sender_account'=>$request->input('sender_account'),
                'merchant_account'=>$request->input('merchant_account'),
                'status'=>'created',
                'user_id'=>Auth::user()->id
            ]
        );
        return redirect()->back()->with(['success'=>'Statement Submited']);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankStatement  $bankStatement
     * @return \Illuminate\Http\Response
     */
    public function show(BankStatement $bankStatement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankStatement  $bankStatement
     * @return \Illuminate\Http\Response
     */
    public function edit(BankStatement $bankStatement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankStatement  $bankStatement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankStatement $bankStatement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankStatement  $bankStatement
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankStatement $bankStatement)
    {
        //
    }
}
