<?php

namespace App\Http\Controllers;

class TableController extends Controller
{
    public function index()
    {
        return view('pages.table');
    }

    public function datatable1()
    {
        return view('pages.datatable1');
    }

    public function datatable2()
    {
        return view('pages.datatable2');
    }
}
