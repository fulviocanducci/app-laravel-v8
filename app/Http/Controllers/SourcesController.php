<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SourcesController extends Controller
{
    public function index()
    {
        $data = [
            ['id' => 1],
            ['id' => 2]
        ];
        return view('sources.index', compact('data'));
    }

    public function create()
    {
        return view('sources.create-edit');
    }

    public function edit($id)
    {
        return view('sources.create-edit', compact('id'));
    }

    public function store(Request $request)
    {
        return redirect()
            ->route('sources', ['id' => $request->id]);
    }

    public function delete($id) 
    {
        return redirect()
            ->route('sources');
    }
}