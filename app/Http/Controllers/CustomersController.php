<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Customers;
use App\Http\Resources\Customers as CustomersResource;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cust = Customers::paginate(20);
        return CustomersResource::collection($cust);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cust = $request->isMethod('put') ? Customers::findOrFail($request->id) : new Article;
        $cust->id = $request->input('id');
        $cust->name = $request->input('name');
        $cust->age = $request->input('age');

        if($cust->save()) {
            return new CustomersResource($cust);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cust = Customers::findOrFail($id);
        return new CustomersResource($cust);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cust = Customers::findOrFail($id);
        if($cust->delete()) {
        return new CustomersResource($cust);
    }
    }
}