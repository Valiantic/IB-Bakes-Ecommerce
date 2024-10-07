<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
// IMPORT THIS TO SEE ALL DATA WITHIN THE DATABASE 
use App\Models\Category;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // SELECT * DATA FROM THE DATABASE
        $categories = Category::with('products')->get();
        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {

        // VALIDATE THE DATA
        $validated = $request->validated();

        $category = new Category();
        $category->product_name = $validated['product_name'];
        $category->product_description = $validated['product_description'];

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time().".".$avatar->getClientOriginalExtension();
            $avatar->storeAs('public/categories', $filename);

            $category->avatar = $filename; 
        }

        $category->save();

        return response()->json([
            'success' => true,
            'message' => 'Category created successfully',
            'category' => $category
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::with('products')->find($id);
        // HANDLES IF THERE IS NO RECORD WITHIN THE ID 
        if(!$category){
            return response()->json(['message' => 'Category not found'], 404);
        }
        return response()->json($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
