<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\bookCategory;
use Dom\Comment;

class JsRequestController extends Controller
{
    public function filterByPrice(Request $request) {
        // Clean and convert the min and max price inputs
        $minPrice = preg_replace("/,/", '', $request->input('min_price'));
        $maxPrice = preg_replace("/,/", '', $request->input('max_price'));

        // Create a query to retrieve products based on filters
        $query = Book::query();

        // Apply filter for products that are ready to ship (if selected)
        if ($request->input('ready_to_ship')) {
            $query->where('count', '>', 0); // Filter for products with stock
        }
        if ($CategoryName=$request->input('cat')) {
            $query = bookCategory::wherename($CategoryName)->first()->products();

        }

        // Apply filter for products with a warranty (if selected)
        if ($request->input('HasWarranty')) {
            $query->where('garant', '!=', 'بدون گارانتی'); // Filter for products with warranty
        }

        // Apply filter for price range
        if ($maxPrice && $minPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]); // Filter by price range
        }

        // Include the Book gallery and order by 'failed_at' (assuming it's the correct date column)
        $query->with('gallery')->orderBy('failed_at');

        // Execute the query and retrieve the filtered products
        $products = $query->get();

        // Return the filtered products as a JSON response
        return response()->json([
            'status' => 'success',
            'products' => $products,
            'all' => $products->count(),
        ]);
    }

    public function reply_comment(Request $request){
        $comment=Comment::findOrFail($request->Id);

        $comment->increment('Score', $request->HostingCount);

        return response()->json(['success' => true]);
    }


    public function UpdateCart ( Request $request ){

        if ($request->status ==="true") {
            Cart::update($request->id, 1);
            return response()->json(['success' => 'مقادیر سبد خرید با موفقیت به روزرسانی شد']);
        }else {
            Cart::update($request->id, -1);
            return response()->json(['success' => 'مقادیر سبد خرید با موفقیت به روزرسانی شد']);

        }
    }


}

