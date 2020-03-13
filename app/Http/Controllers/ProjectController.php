<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Sprint;
use App\Models\Task;

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

    public function createProj(Request $request){
        $data = $request->all();

        try {
            Project::create([
                'projectName' => $request['ProjectName'],
                'created_by' => \Auth::user()->firstname.' '.\Auth::user()->lastname
            ]);

            $project = true;
        } catch (\Throwable $e) {
            $project = false;
        }

        return json_encode(array(
            'success' => $project,
            ));
    }

    public function createSpri(Request $request){

        try {
            Sprint::create([
                'sprintNo' => $request['sprintNo'],
                'startDate' => $this->makeDate($request['startDate']),
                'releaseDate' => $this->makeDate($request['releaseDate']),
            ]);           
            
            $sprint = true;
        } catch (\Throwable $e) {
            $sprint = false;
        }

        return json_encode([
            'success' => $sprint
        ]);
    }

    public function createTask(Request $request){

        try{
            Task::create([
                'userId' => \Auth::user()->id,
                'projectId' => $request['projectId'],
                'priorityId' => $request['priorityId'],
                'statusId' => $request['statusId'],
                'sprintId' => $request['sprintId'],
                'taskName' => $request['taskName'],
                'description' => $request['description'],
                'summary' => $request['summary'],
                'projManager' => $request['projectManager'],
                'scrumMaster' => $request['scrumMaster'],
                'qualityAssurance' => $request['qualityAssurance'],
                'developer' => $request['developer'],
                'deadline' =>$this->makeDate($request['deadline']),
                'blnFlag' => $request['binFlag']
            ]);    
            $task = true;
        }catch(Exception $e){
            $task = false;
        }

        return json_encode([
            'success' => $task
        ]);
    }

    public function makeDate(string $date){
        $time = strtotime($date);
        $newformat = date('Y-m-d',$time);

        return $newformat;
    }

}
