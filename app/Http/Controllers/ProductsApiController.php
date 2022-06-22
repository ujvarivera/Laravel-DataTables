<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\Datatables\Datatables;

class ProductsApiController extends Controller
{
    private $data;

    public function __construct()
    {
        $this->data = Http::get('https://type.fit/api/quotes');
        $this->data = json_decode($this->data);
    }

    public function index()
    {
        return view('products', ['data'=>$this->data]);
    }

    public function getProductsData() 
    {
        //dd($this->data);
        //dd(collect($this->data));
        return Datatables::of(collect($this->data))->make(true);
    }
}
