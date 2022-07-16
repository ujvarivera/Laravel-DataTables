<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\Datatables\Datatables;

class QuotesApiController extends Controller
{
    private $data; // contains the quotes

    public function __construct()
    {
        $this->data = Http::get('https://type.fit/api/quotes');
        $this->data = json_decode($this->data);
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(collect($this->data))
            /*
            ->addColumn('action', function ($row) {
                return '<a href="#view-'.$row->author.'" class="edit btn btn-success btn-sm text-center"></i> View</a>';
            })
            */
            // ->rawColumns(['action'])
            ->setTotalRecords(40)
            ->make(true);            
        }
        return view('quotes.index');
    }

}
