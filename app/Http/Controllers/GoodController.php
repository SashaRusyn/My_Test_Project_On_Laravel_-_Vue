<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Good;

class GoodController extends Controller
{
    public function goods()
    {
        $goods = Good::all();
        return $goods;
    }
    public function filter()
    {
        return view('good.filter');
    }
    public function index()
    {
        $posts = Good::all();
        return view('good.index', compact('posts'));
    }

    public function create()
    {
        return view('good.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'image' => 'string',
            'price' => 'integer',
        ]);
        Good::create($data);
    }

    public function show(Good $good)
    {
        return view('good.show', compact('good'));
    }

    public function edit(Good $good)
    {
        return view('good.edit', compact('good'));
    }

    public function update(Good $good)
    {
        $data = request()->validate([
            'name' => 'string',
            'description' => 'string',
            'image' => 'string',
            'price' => 'integer',
        ]);
        $good->update($data);
    }

    public function destroy(Good $good)
    {
        $good->delete();
        return redirect()->route('good.index');
    }
}
