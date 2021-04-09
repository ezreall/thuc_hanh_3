<?php

namespace App\Http\Controllers;

use App\category;
use App\Http\Services\ProductesServices;
use App\producte;
use Illuminate\Http\Request;

class Productes extends Controller
{
    protected $productesServices;

    public function __construct(ProductesServices $productesServices)

    {
        $this->productesServices = $productesServices;
    }

    function index()
    {
        $productes = $this->productesServices->getAll();
        return view('producte.list', [
            'productes' => $productes
        ]);
    }

    function create()
    {
        $categories = category::all();
        return view('producte.add', [
            'categories' => $categories
        ]);
    }

    function store(Request $request)
    {
        $this->productesServices->store($request);
        return redirect()->route('productes');
    }

    function edit($id)
    {
        $categories = category::all();
        $productes = $this->productesServices->getById($id);
        return view('producte.edit', [
            'categories' => $categories, 'productes' => $productes
        ]);
    }

    function update(Request $request, $id)
    {
        $this->productesServices->update($request, $id);
        return redirect()->route('productes');
    }

    function delete($id)
    {
        $productes = $this->productesServices->getById($id);
        $productes->delete();
        return back();
    }
    function search(Request $request){
        $productes = producte::where('name', 'like', '%' . $request->value . '%')->get();
        return view('producte.list',['productes'=>$productes]);
    }
}
