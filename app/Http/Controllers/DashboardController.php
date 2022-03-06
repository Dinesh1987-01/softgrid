<?php

namespace App\Http\Controllers;

use App\Models\Apidata;
use App\Models\User;
use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{
    public function index(Request $request)
    {
        if($request->post())
        {
            $request->validate([
                "start_date" => "required|before:end_date",
                "end_date" => "required",
            ]);
            $data['partners'] = Apidata::whereBetween("created_at", [$request->start_date, $request->end_date])->groupBy('user_id')->with("userInfo")->select("user_id", DB::raw('count(*) as api_request'))->get();
            $data['total_request'] = collect($data['partners'])->sum("api_request");
        }
        else
        {
            $data['partners'] = User::where("type", 2)->get();
            $data['total_request'] = collect($data['partners'])->sum("api_request");
        }
        return view("dashboard", $data);
    }
}