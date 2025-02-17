<?php

namespace App\Services;

use App\Http\Requests\BrandStoreRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\Brand;

class BrandServices
{
    public function list()
    {
        $brands = Brand::paginate(15);

        return $brands;
    }

    public function store(BrandStoreRequest $request): Brand
    {
        $brand = Brand::create($request->validated());

        return $brand;
    }

    public function update(BrandUpdateRequest $request, Brand $brand): Brand
    {
        $brand->update($request->validated());

        return $brand;
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
    }
}
