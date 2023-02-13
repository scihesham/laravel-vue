<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        $skills = Skill::orderBy('id', 'desc')->limit(10)->get();
        return response()->json([
            'skills' =>  $skills
        ]);
    }

    public function show($id){
        $skill = Skill::find($id);
        return response()->json([
            'skill' =>  $skill
        ]);
    }

    public function store(Request $request){
        $skill = Skill::create($request->all());
        return response()->json([
            'skill' =>  $skill
        ]);
    }

    public function update(Request $request, $id){
        $skill = Skill::find($id);
        $skill->update($request->all());
        return response()->json([
            'skill' =>  $skill
        ]);
    }


    public function delete(Request $request, $id){
        $skill = Skill::find($id)->delete();
        return response()->json([
            'skill' =>  $skill
        ]);
    }
}
