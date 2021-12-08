<?php

namespace App\Http\Controllers;

use App\Models\element;
use Illuminate\Http\Request;

class elementController extends Controller
{

    public function index()
    {
        $elements = element::all();
        return view('elements.index')->with('elements', $elements);
    }


    public function create()
    {
        return view('elements.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        element::create($input);
        return redirect('element')->with('flash_message', 'element Addedd!');
    }


    public function show($id)
    {
        $element = element::find($id);
        return view('elements.show')->with('elements', $element);
    }


    public function edit($id)
    {
        $element = element::find($id);
        return view('elements.edit')->with('elements', $element);
    }


    public function update(Request $request, $id)
    {
        $element = element::find($id);
        $input = $request->all();
        $element->update($input);
        return redirect('element')->with('flash_message', 'element Updated!');
    }


    public function destroy($id)
    {
        element::destroy($id);
        return redirect('element')->with('flash_message', 'element deleted!');
    }
}
