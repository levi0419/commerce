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
        try {
            return ProductCategoryResource::collection(ProductCategory::all());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }

    public function store(StoreProductCategoryRequest $request)
    {
        try {
            $category = ProductCategory::create($request->all());
            return new ProductCategoryResource($category);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }

    }

    public function show(ProductCategory $productCategory)
    {
        try {
            return new ProductCategoryResource($productCategory);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory)
    {
        try {
            $category = $productCategory->update($request->all());
            return new ProductCategoryResource($category);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }

    public function destroy(ProductCategory $productCategory)
    {
        try {
            $category = $productCategory->delete();
            return response()->json(['message' => 'Category deleted successfully'], 204);
            
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        
    }
}
