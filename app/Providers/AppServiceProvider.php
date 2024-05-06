<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use App\Models\UpdateBrand;
use App\Models\UpdateCategory;
use App\Models\UpdateProduct;
use App\Models\UpdateSubCategory;
use App\Models\UpdateUnit;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('admin.master', function ($view) {
            $sum = 0;
            $Categories = Category::where('flag', 0)->get();
            $categoryCount = $Categories->count();
            $updateCategories = UpdateCategory::where('flag', 0)->get();
            $updateCategoryCount =  $updateCategories->count();
            $Subcategories = SubCategory::where('flag', 0)->get();
            $SubcategoryCount = $Subcategories->count();
            $updateSubCategories = UpdateSubCategory::where('flag', 0)->get();
            $updateSubCategoryCount =  $updateSubCategories->count();


            $Brands = Brand::where('flag', 0)->get();
            $brandCount = $Brands->count();
            $updateBrands = UpdateBrand::where('flag', 0)->get();
            $updateBrandCount =  $updateBrands->count();


            $Units = Unit::where('flag', 0)->get();
            $unitCount = $Units->count();
            $updateUnits = UpdateUnit::where('flag', 0)->get();
            $updateUnitCount =  $updateUnits->count();


            $products = Product::where('flag', 0)->get();
            $productCount = $products->count();
            $updateProducts = UpdateProduct::where('flag', 0)->get();
            $updateProductCount = $updateProducts->count();





            $total=$categoryCount + $updateCategoryCount+$SubcategoryCount+$updateSubCategoryCount+$brandCount+$updateBrandCount+$unitCount+$updateUnitCount+$productCount+$updateProductCount;
            $view->with(['categoryCount' => $categoryCount,
                'updatecategoryCount'=> $updateCategoryCount,
                'subcategoryCount'=> $SubcategoryCount,
                'updatesubcategoryCount'=> $updateSubCategoryCount,
                'brandCount'=> $brandCount,
                'updatebrandCount'=> $updateBrandCount,
                'unitCount'=> $unitCount,
                'updateunitCount'=>  $updateUnitCount,
                'productCount' => $productCount,
                'updateProductCount' => $updateProductCount,
                'total' => $total,
                ]);
        });
        view()->composer('front-end.master', function ($view) {
            $subcategoryCount = SubCategory::count();
            $brandCount = Brand::count();
            $view->with([
                'subcategoryCount' => $subcategoryCount,
                'brandCount' => $brandCount
            ]);
        });
    }
}
