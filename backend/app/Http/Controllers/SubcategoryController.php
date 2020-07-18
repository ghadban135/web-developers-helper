<?php

namespace App\Http\Controllers;

use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Subcategory::all();

        if(!sizeof($result)){
            return response()->json([
                'success' => false,
                'message' => 'No subcategory found'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'subcategory' => $result,
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
        $result = Subcategory::create($inputs);
  
              if(!$result){
              return response()->json([
                  'success' => false,
                  'message' => 'something wrong'
              ], 500);
              }
              return response()->json([
                  'success' => true,
                  'subcategory' => $result,
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
        $result = Subcategory::where('category_id', $id)->get();

        if(!$result){
            return response()->json([
                'success' => false,
                'message' => 'No subcategory found'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'subcategory' => $result,
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
         $result = Subcategory::where('id',$id)->first();
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
                'message'=>'Subcategory updated',
                'subcategory' => $result
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
        Subcategory::where('id', $id)->delete();
        return response()->json([
          'message' => 'Subcategory successfully deleted'
        ]);
    }
}
