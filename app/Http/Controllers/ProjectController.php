<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Sprint;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $project = Project::all();
        $sprint = Sprint::all();

        return view('project',compact('project','sprint'));
    }

    // public function getTask(){
    //     $userId = \Auth::user()->id;

    //     dd($userId);
    // }

    public function createProj(Request $request){
        $data = $request->all();
        

        try {
            Project::create([
                'projectName' => $request['projectName'],
                'created_by' => \Auth::user()->firstname.' '.\Auth::user()->lastname
            ]);

            $project = true;
        } catch (\Throwable $e) {
            $project = false;
        }

        return json_encode([
            'success' => $project,
        ]);
    }

    public function createSpri(Request $request){

        try {
            Sprint::create([
                'sprintNo' => $request['sprintNo'],
                'startDate' => $request['startDate'],
                'releaseDate' => $request['releaseDate'],
            ]);
            $sprint = true;
            
        } catch (\Throwable $e) {
            $sprint = false;
        }

        return json_encode([
            'success' => $sprint
        ]);
    }

}
