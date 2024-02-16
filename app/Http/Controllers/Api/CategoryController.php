<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Offer;
use App\Models\Inspiration;
class CategoryController extends Controller
{
    // protected function category()
    // {
    //    $category=Category::get();

    //    if ($category->count() > 0) {
    //          return response([
    //              'cate' => $category,
    //              'status' => '200',
    //          ]);
    //      } else {
    //          return response([
    //              'status' => 'No categories found',
    //          ]);
    //      }


    // }
    protected function category()
    {
        $categories = Category::get();

        if ($categories->count() > 0) {
            $categoriesWithImageUrls = $categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'category_image_url' => $category->category_image
                        ? env('APP_URL') . '/categoryImage/' . $category->category_image
                        : null,
                    'category_name' => $category->category_name,
                ];
            });

            return response([
                'categories' => $categoriesWithImageUrls,
                'status' => '200',
            ]);
        } else {
            return response([
                'status' => 'No categories found',
            ]);
        }
    }
    protected function offer()
    {
        $offers = Offer::get();

        if ($offers->isNotEmpty()) {
            $offersWithImageUrls = $offers->map(function ($offer) {
                return [
                    'id' => $offer->id,
                    'offer_image_url' => $offer->offer_image
                        ? env('APP_URL') . '/offerImage/' . $offer->offer_image
                        : null,
                    'offer_code' => $offer->offer_code,
                ];
            });

            return response([
                'offers' => $offersWithImageUrls,
                'status' => '200',
            ]);
        } else {
            return response([
                'status' => 'No offers found',
            ]);
        }
    }


    protected function inspiration()
    {
        $inspirations = Inspiration::get();

        if ($inspirations->isNotEmpty()) {
            $inspirationsWithImageUrls = $inspirations->map(function ($inspiration) {
                return [
                    'id' => $inspiration->id,
                    'inspiration_image_url' => $inspiration->item_image
                        ? env('APP_URL') . '/inspirationImage/' . $inspiration->item_image
                        : null,
                    'inspiration_name' => $inspiration->item_name,
                ];
            });

            return response([
                'inspirations' => $inspirationsWithImageUrls,
                'status' => '200',
            ]);
        } else {
            return response([
                'status' => 'No inspirations found',
            ]);
        }
    }

}
