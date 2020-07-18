<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id;
        $result = Feedback::where('user_id',$userId)->get();

        if(!sizeof($result)){
            return response()->json([
                'success' => false,
                'message' => 'No feedback found'
            ], 500);
        }

        return response()->json([
            'success' => true,
            'feedback' => $result,
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
        $userId = auth()->user()->id;
        $result = Feedback::create([
            'user_id' => $userId,
            'content_id' => $request->content_id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);
        if(!$result){
            return response()->json([
                'success' => false,
                'message' => 'something wrong'
            ], 500);
        }
        $rating = DB::table('content')->where('id', $request->content_id)->value('rating');
        $review = DB::table('content')->where('id', $request->content_id)->value('review');
        $rating = (($review * $rating) + $request->rating)/($review +1);
        $review = $review +1;

        $result2 = Content::where('id',$request->content_id)->first();
        $result2->update([
            'review' => $review ,
            'rating' => $rating,
        ]);
        $result2->save();
        return response()->json([
            'success' => true,
            'feedback' => $result
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
        $userId = auth()->user()->id;
        $resultAll = Feedback::where('content_id', $id)->get();
        $result = Feedback::where('user_id',$userId)->where('content_id', $id)->first();

       if(!sizeof($resultAll)){
           return response()->json([
               'success' => false,
               'message' => 'No feedback found'
           ], 404);
       }
       if(!$result){
        return response()->json([
            'success' => false,
            'message' => 'No feedback found for this content and this user together',
            'allFeedback' => $resultAll,
        ]);
       } 

       return response()->json([
           'success' => true,
           'feedback' => $result,
           'allFeedback' => $resultAll,
       ], 200);

    }

    public function showAll($id)
    {
        $resultAll = Feedback::where('content_id', $id)->with('user')->get();

       if(!sizeof($resultAll)){
           return response()->json([
               'success' => false,
               'message' => 'No feedback found'
           ], 404);
       }

       return response()->json([
           'success' => true,
           'feedback' => $resultAll,
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
        $userId = auth()->user()->id;
        $result = Feedback::where('user_id',$userId)->where('content_id', $id)->first();
        $result->update([
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);;
        $result->save();
        if(!$result){
            return response()->json([
                'success' => false,
                'message' => 'something wrong'
            ], 500);
        }
        $rating = DB::table('content')->where('id', $request->content_id)->value('rating');
        $review = DB::table('content')->where('id', $request->content_id)->value('review');
        $rating = (($review * $rating) + $request->rating)/($review +1);

        $result2 = Content::where('id',$request->content_id)->first();
        $result2->update([
            'rating' => $rating,
        ]);
        $result2->save();
        return response()->json([
            'success' => true,
            'message'=>'feedback updated',
            'feedback' => $result
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
        $userId = auth()->user()->id;
        Feedback::where('user_id',$userId)->where('content_id', $id)->delete();
        return response()->json([
          'message' => 'Feedback successfully deleted'
        ]);
    }
}
