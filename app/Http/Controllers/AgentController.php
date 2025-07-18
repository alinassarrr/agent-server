<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Database\Eloquent\Collection;
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

     function load (){
        echo "Agents :";
        foreach(Agent::where('plan','free')->cursor()as $agent){
            echo "{$agent->name}, ";
        }
     }

     function limit(Request $request){
            $agents = Agent::cursor()->filter(function(Agent $agent) use($request){
                return $agent->max_prompts > $request->max_prompts;
            });
            return $agents->all();
     }

     function firstOr(){
         $agent =Agent::firstOrCreate(['name'=>'first Agent']);
            return response()->json($agent);
     }
     function destroy(Request $request){
        Agent::destroy($request->id);
        return response()->json(['message' => 'Agent deleted']);
    }
    
}   