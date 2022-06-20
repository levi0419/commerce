<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Http\Resources\ProjectCategory as ProductCategoryResource;

class ProductCategoryController extends Controller
{

    public function index()
    {
        return ProductCategoryResource::collection(ProductCategory::all());
    }

    public function store(StoreProductCategoryRequest $request)
    {
        $category = ProductCategory::create($request->all());
        return new ProductCategoryResource($category);
    }

    public function show(ProductCategory $productCategory)
    {
        return new ProductCategoryResource($productCategory);
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $category = $productCategory->update($request->all());
        return new ProductCategoryResource($category);
    }

    public function destroy(ProductCategory $productCategory)
    {
        $category = $productCategory->delete();
        return response()->json(['message' => 'Category deleted successfully'], 204);
    }
}
