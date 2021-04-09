<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductesRepository;
use App\producte;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;

class ProductesServices extends BaseServices
{
    protected $productesRepo;

    public function __construct(ProductesRepository $productesRepo)
    {
        $this->productesRepo = $productesRepo;
    }

    function getAll()
    {
        return $this->productesRepo->getAll();
    }

    function getById($id)
    {
        return $this->productesRepo->findById($id);
    }

    function store($request)
    {
        $productes = new producte();
        $productes->fill($request->all());
        $path = $this->updateLoadFile($request, 'image', 'backend');
        $productes->image = $path;
        $this->productesRepo->store($productes);
    }

    function update($request, $id)
    {
        $products = $this->productesRepo->findById($id);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($products->image);
            $path = $this->updateLoadFile($request, 'image', 'backend');
            $products->image = $path;
        }

        $products->fill($request->all());
        $this->productesRepo->store($products);
    }
}
