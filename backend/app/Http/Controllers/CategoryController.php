<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Category::all();

        if(!sizeof($result)){
            return response()->json([
                'success' => false,
                'message' => 'No category found'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'category' => $result,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $result = Category::create($inputs);
  
              if(!$result){
              return response()->json([
                  'success' => false,
                  'message' => 'something wrong'
              ], 500);
              }
              return response()->json([
                  'success' => true,
                  'category' => $result,
              ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Category::where('id', $id)->first();

        if(!$result){
            return response()->json([
                'success' => false,
                'message' => 'No category found'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'category' => $result,
        ], 200);
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
        $inputs = $request->all();
        $result = Category::where('id',$id)->first();
        $result->update($inputs);
        $result->save();
         if(!$result){
           return response()->json([
               'success' => false,
               'message' => 'something wrong'
           ], 500);
           }
           return response()->json([
               'success' => true,
               'message'=>'Category updated',
               'category' => $result
           ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return response()->json([
          'message' => 'Category successfully deleted'
        ]);
    }
}
