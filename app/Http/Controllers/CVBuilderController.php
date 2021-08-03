<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class CVBuilderController extends Controller
{
    //

    public $path;

    public $resumeData = [];

    public $skills = [];

    public function __construct(){


            $this->path = public_path('resume.json');

            $this->resumeData = json_decode(file_get_contents($this->path), true); 

            $this->skills = $this->resumeData['skills'];
           

    }

    /**
     * return builder view 
     */
    public function index(){

        //init new session.
       

        return view('cvbuilder')->with('resumeData', json_encode($this->resumeData));
    }

    /**
     * return resume data
     */
    public function data(){

       

        return response()->json(jsone_encode($this->resumeData));
    }

    /**
     * create new skill
     */
    public function addSkill(Request $request){

        $this->validate($request, [
            'name' => 'required|string',
            'level' => 'required|string'
        ]);

     
        $skill = ['name'=>$request->name, 'level'=>$request->level, 'keywords'=>$request->keywords];

        array_push($this->resumeData['skills'], $skill);

     
        return response()->json($this->resumeData['skills'], 200);

    }
}
