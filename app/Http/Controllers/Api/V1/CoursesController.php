<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CoursesController extends Controller
{
    public function buy(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email',
            'courses_id' => 'required',
            'bank' => 'required|in:bca,bni'
        ]);
        if($validator->fails()){
            return response()->json(['message' => 'invalid', 'data' => $validator->errors()]);
        }
    }
}
