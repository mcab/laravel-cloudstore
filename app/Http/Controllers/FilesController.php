<?php

namespace App\Http\Controllers;

use App\File;
use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

    }
    public function store()
    {
        if (! $name = request('name')) {
            $name = request('file')->getClientOriginalName();
        }
        if (! $description = request('description')) {
            $description = "";
        }

        $file = new File;
        $file->name = $name;
        $file->description = $description;
        $file->user_id = auth()->user()->id;
        $file->save();

        request()
            ->file('file')
            ->store('public/' . auth()->user()->unique_id);
        return back();
    }
}
