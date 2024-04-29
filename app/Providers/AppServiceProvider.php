<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\UpdateCategory;
use App\Models\UpdateSubCategory;
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
            $total=$categoryCount + $updateCategoryCount+$SubcategoryCount+$updateSubCategoryCount;
            $view->with(['categoryCount' => $categoryCount,
                'updatecategoryCount'=> $updateCategoryCount,
                'subcategoryCount'=> $SubcategoryCount,
                'updatesubcategoryCount'=> $updateSubCategoryCount,
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
