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
        $files = File::latest()
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('files.index', compact('files'));
    }
    public function store()
    {
        $uploaded = request()
            ->file('file')
            ->store('public/' . auth()->user()->unique_id);

        if (! $name = request('name')) {
            $name = pathinfo(request('file')->getClientOriginalName(), PATHINFO_FILENAME);
        }
        if (! $description = request('description')) {
            $description = "";
        }

        $file = new File;
        $file->name = $name;
        $file->description = $description;
        $file->user_id = auth()->user()->id;
        $file->file_id = pathinfo($uploaded, PATHINFO_BASENAME);
        $file->save();

        return back();
    }
    public function get($unique_id, $file_id)
    {
        if ($unique_id !== auth()->user()->unique_id){
            return back();
        }
        if (! \Storage::disk('public')->exists($unique_id . '/' . $file_id)) {
            return back();
        }
        return \Storage::url($unique_id . '/' . $file_id);
    }
}
