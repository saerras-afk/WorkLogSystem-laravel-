<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Sprint;
use App\Models\Task;
use App\Models\Log;

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

    public function getTasks(Request $request){

        $success = false;
        $params = [
            'projectId' => $request['projectId'],
            'sprintId' => $request['sprintId']
        ];

        $tasklist = Task::where($params)->get();

        if(!empty($tasklist)){
            $success = true;
        }else{
            $tasklist = "no data";
        }
        return json_encode([
            'success' => $success,
            'list' => $tasklist
        ]);
    }

    public function startLog(Request $request){
        try{
            Log::create([
                'userId' => \Auth::user()->id, 
                'taskId' => $request['Id'], 
                'date' => date('Y-m-d H:i:s'),
                'startTime' => date('H:i:s'),
                'endTime' 
                => null
            ]);

            $log = true;
        }catch(Exception $e){
            $log = false;
        }

        return json_encode([
            'success' => $log
        ]);
    }

    public function checkLog(Request $request){
        try{
            $message = '';
            $params = [
                'userId' => \Auth::user()->id
            ];

            $log = Log::where($params)->latest()->first();

            switch ($request['btnType']) {
                case 'startBtn':
                    if($log->endTime == null){
                        $message = 'please end first your ongoing task';
                        $status = true;
                    }else{
                        $status = false;
                    }
                    break;
                case 'endBtn':
                    if($log->endTime != null){
                        $message = 'you have no ongoing task';
                        $status = true;
                    }else{
                        $status = false;
                    }
                    break;
            }
            
        }catch(Exception $e){
            $message = 'shit';
            $status = false;
        }

        return json_encode([
            'success' => $status,
            'type' => $request['btnType'],
            'message' => $message
        ]);
    }

    public function endLog(Request $request){
        try{
            $params = [
                'userId' => \Auth::user()->id,
                'taskId' => $request['Id']
            ];

            $log = Log::where($params)->latest()->first();

            $log->endTime = date('H:i:s');
            $log->save();

            $status = true;
        }catch(Exception $e){
            $status = false;
        }

        return json_encode([
            'success' => $status
        ]);
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
            $task = Task::create([
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

    public function createNotif($id){
        try{
            Notification::create([
                'userId' => $id, 
                'taskId' => $taskId, 
                'isNotified' => 0,
            ]);

        }catch(Exception $e){

        }
    }

    public function makeDate(string $date){
        $time = strtotime($date);
        $newformat = date('Y-m-d',$time);

        return $newformat;
    }

}
