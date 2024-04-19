<?php

namespace App\Providers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\SubCategory;
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
            $categoryCount = Category::count();
            $view->with('categoryCount', $categoryCount);
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
