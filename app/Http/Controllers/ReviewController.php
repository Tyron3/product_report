<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Products;
use App\Reviews;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Reviews::paginate(5);
        return view('welcome', compact('reviews'));
    }

    public function create(){
        $products = Products::all();
        return view('create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'product' => 'required',
            'description' => 'required',
            'rating' => 'required|integer|between:1,5'
        ]);

        $review = new Reviews;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->description = $request->description;
        $review->product = $request->product;
        $review->rating = $request->rating;
        $review->save();

        return redirect(route('home'))->with('successMsg', 'Review Successfully Added.');
    }

    public function edit($id){     
        $review = DB::table('reviews')
                    ->leftjoin('products', 'reviews.product_id', '=', 'products.id')
                    ->select(
                        DB::raw('products.name "product"'),
                        DB::raw('reviews.name "name"'),
                        DB::raw('reviews.email "email"')
                    )
                    ->where('reviews.id', $id)
                    ->groupBy('products.name')
                    ->get();
        return view('edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'description' => 'required'
        ]);

        $review = Reviews::find($id);
        $review->description = $request->description;
        $review->save();

        return redirect(route('home'))->with('successMsg', 'Review Successfully Updated.');
    }

    public function report(){
        $report_data = DB::table('reviews')
                    ->leftjoin('products', 'reviews.product_id', '=', 'products.id')
                    ->select(
                        DB::raw('products.name "product"'),
                        DB::raw('COUNT(reviews.rating) "count_rating"'),
                        DB::raw('MAX(reviews.rating) "max_rating"'),
                        DB::raw('MIN(reviews.rating) "min_rating"'),
                        DB::raw('AVG(reviews.rating) "avg_rating"')
                    )
                    ->groupBy('products.name')
                    ->get();

        return view('report', compact('report_data'));
    }
}
