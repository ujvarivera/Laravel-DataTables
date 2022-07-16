<?php

namespace App\Http\Controllers;

use App\DataTables\MealsDataTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MealController extends Controller
{
    private $mealsData; // contains the seafood meals

    public function __construct()
    {
        $this->mealsData = Http::get('https://www.themealdb.com/api/json/v1/1/filter.php?c=Seafood');
        $this->mealsData = json_decode($this->mealsData)->meals;
        //dd($this->mealsData);
    }

    public function index(MealsDataTable $dataTable) {
        return $dataTable
            ->with(['mealsData' => $this->mealsData])
            ->render('meals.index');
    }
}
