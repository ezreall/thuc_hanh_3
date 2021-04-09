<?php


namespace App\Http\Repositories;


use App\producte;

class ProductesRepository
{
    function getAll()
    {
        return producte::all();
    }
    function findById($id)
    {
        return producte::findOrFail($id);
    }

    function store($productes)
    {
        $productes->save();
    }

}
