<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function index()
    {

    }
    public function store()
    {
        request()
            ->file('file')
            ->store('public/' . auth()->user()->unique_id);
        return back();
    }
}
