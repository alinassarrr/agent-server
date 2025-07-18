<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    //
    function addNoTime(Request $request){
        $agent =new Agent();
        $agent->name = $request->name;
        $agent->plan= $request->plan;
        $agent->max_prompts = $request->max_prompts;
        $agent->save();

    }


    function addDefault(Request $request){
        $agent =new Agent();
        $agent->name = $request->name;
        $agent->save();
    }


    function all(Request $request){
        return Agent::all();
    }

    function find(Request $request,$id){
        return Agent::find($id);
    }

    function getFirst(Request $request){
        return Agent::where('plan', $request->plan)->first();
    }
}
