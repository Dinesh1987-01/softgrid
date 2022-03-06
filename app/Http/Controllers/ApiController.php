<?php

namespace App\Http\Controllers;

use App\Models\Apidata;
use App\Models\User;

use Illuminate\Http\Request;

use Auth;

class ApiController extends Controller
{
    public function index($id=0)
    {
        if($id > 0){
            $info = User::where(["id" => $id, "type" => 2])->first();
            if(isset($info))
            {
                User::where(["id" => $id, "type" => 2])->increment("api_request", 1);
                Apidata::create([
                    "user_id" => $info->id
                ]);
            }
            else{
                return response()->json(["message" => "Invalid User ID"]);
            }
        }else{
            return response()->json(["message" => "Invalid User ID"]);
        }
        return response()->json($info);
    }
}