<div id="sprintModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="test"><b>Add Sprint Number</b></h6>
        </div>
        <div class="modal-body" id="addsbody">
            <form>
                <div class="form-group" style="font-weight: bold;font-family: Tahoma;color:#01417F;">
                    Sprint Number:
                    <input id="SprintNo" type="text" class="input" >
                    <br />
    
                </div>
            </form>
        </div>
        <hr>
        <div class="modal-footer" id="addfooter">
            <button id="sprintSumbit" type="button" class="sbutton" data-dismiss="modal" style="margin-left: 50%;background-color: #01417F;">SAVE</button>
            <button type="button" class="cbutton" data-dismiss="modal" id="cancelbutton" style="background-color: gray;">CANCEL</button>
        </div>
    </div>
</div>
<div id="taskModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="test"><b>Add Task</b></h6>
        </div>
        <div class="modal-body" id="addsbody">
            <form>
                <div class="form-group" style="font-weight: bold;font-family: Tahoma;color:#01417F;">
                    Project:
                    <select class="pfield" name="task_projectId">
                        <option value=""></option>
                        @foreach ($project as $pr)
                            <option value="{{ $pr->id }}">{{ $pr->projectName }}</option>
                        @endforeach
                    </select><br />
                    Sprint:
                    <select class="sfield" name="task_sprintId">
                        <option value=""></option>
                        @foreach ($sprint as $sp)
                            <option value="{{ $sp->id }}">{{ $sp->sprintNo }}</option>
                        @endforeach
                    </select><br />
                    Priority:
                    <select class="rfield" name="task_priorityId">
                        <option value=""></option>
                        <option value="1">critical</option>
                        <option value="2">high</option>
                        <option value="3">medium</option>
                        <option value="4">low</option>
                    </select><br />
                    Status:
                    <select class="tfield" name="task_statusId">
                        <option value=""></option>
                        <option value="1">waiting for PM RA</option>
                        <option value="2">waiting for DEV RA</option>
                        <option value="3">in development</option>
                        <option value="4">in QA</option>
                        <option value="5">completed</option>
                    </select><br />
                    Task Name:
                    <input type="text" name="taskName" class="tname" /><br /><br />
                    Description:
                    <textarea name="description" rows="4" cols="50"></textarea><br /><br />
                    Project Manager:
                    <select class="pm" name="projectManager">
                        <option value=""></option>
                        @foreach (App\Models\User::whereRoleid('2')->get() as $PM)
                            <option value="{{$PM->id}}">{{$PM->firstname}} {{$PM->lastname}}</option>
                        @endforeach
                    </select><br />
                    Scrum Manager:
                    <select class="sm" name="scrumMaster">
                        <option value=""></option>
                        @foreach (App\Models\User::whereRoleid('3')->get() as $PM)
                            <option value="{{$PM->id}}">{{$PM->firstname}} {{$PM->lastname}}</option>
                        @endforeach
                    </select><br />
                    Developer:
                    <select class="dev" name="developer">
                        <option value=""></option>
                        @foreach (App\Models\User::whereRoleid('4')->get() as $PM)
                            <option value="{{$PM->id}}">{{$PM->firstname}} {{$PM->lastname}}</option>
                        @endforeach
                    </select><br />
                    Quality Assurance:
                    <select class="qa" name="qualityAssurance">
                        <option value=""></option>
                        @foreach (App\Models\User::whereRoleid('5')->get() as $PM)
                            <option value="{{$PM->id}}">{{$PM->firstname}} {{$PM->lastname}}</option>
                        @endforeach
                    </select><br /><br />
                    Summary:
                    <textarea name="summary" rows="4" cols="50"></textarea><br /><br />
                    <input type="hidden" name="createdAt" />
                    Deadline:
                    <input type="text" name="deadline" class="dline" /><br />
                    <input type="hidden" name="binFlag" value="0" />
                    <input type="hidden" name="isNotified" value="0" />
                    <br />
                </div>
            </form>
        </div>
        <hr>
        <div class="modal-footer" id="addfooter">
            <button id="taskSubmit" type="button" class="sbutton" data-dismiss="modal" style="margin-left: 50%;background-color: #01417F;">SAVE</button>
            <button type="button" class="cbutton" data-dismiss="modal" id="tcanbutton" style="background-color: gray;">CANCEL</button>
        </div>
    </div>
</div>
<div id="projModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h6 class="test"><b>Add Project</b></h6>
        </div>
        <div class="modal-body" id="addpbody">
            <form>
                <div class="form-group" style="font-weight: bold;font-family: Tahoma;color:#01417F;">
                    Project Name:
                    <input id="ProjectName" class="input" placeholder="Project Name" style="width:60%" type="text" value="">
                    <br />
                </div>
            </form>
        </div>
        <hr>
        <div class="modal-footer" id="addfooter">
            <button id="projectSumbit" type="button" class="sbutton" style="margin-left: 50%;background-color: #01417F;">SAVE</button>
            <button type="button" class="cbutton" id="canbutton" style="background-color: gray;">CANCEL</button>
        </div>
    </div>
</div>
<div id="taskDetailModal" class="modal">
    <div class="modal-contentT">
        <div class="modal-header" style="height:45px;">
            <span id="tdx" class="close" style="color:#fff;margin-top:8px;">&times;</span>
            <h4>Task Details</h4>
        </div>
        <div class="modal-bodyT">
            <div class="issueDetails" style="width:40%;">
                <table class="iTable" style="background-color:gainsboro	;margin-top:20px; width:95%;">
                    <tr>
                        <th colspan="2">Issue Details</th>
                    </tr>
                    <tr>
                        <th id="key">Key:</th>
                        <td>XERO-755</td>
                    </tr>
                    <tr>
                        <th id="stat">status:</th>
                        <td>Resolved</td>
                    </tr>
                    <tr>
                        <th id="priority">Priority:</th>
                        <td>High</td>
                    </tr>
                    <tr>
                        <th id="assignee">Assignee:</th>
                        <td>XERO-755</td>
                    </tr>
                    <tr>
                        <th id="reporter">Reporter:</th>
                        <td>XERO-755</td>
                    </tr>
                </table>
            </div>
            <div class="task" style="width:100%;">
                <table class="iTable" style="margin-top:20px;background-color:gainsboro;">
                    <tr>
                        <th id="projectId">Project:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="summary">Summary:</th>
                        <td></td>
                    </tr>
                </table>
                <table class="tTable">
                    <tr>
                        <th id="taskId">Task:</th>
                        <td>fsadfsadfag</td>
                    </tr>
                    <tr>
                        <th id="userId">User:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="tname">Task Name:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="desc">Description:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="pm">Project Manager:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="sm">Scrum Master:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="dev">Developer:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="qa">Quality Assurance:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="pm">Project Manager:</th>
                        <td>Adrianne Rosales</td>
                    </tr>
 
 
                    <tr>
                        <th id="createdAt">Created At:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="dline">Deadline:</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th id="sprintId">Sprint:</th>
                        <td></td>
                    </tr>
 
 
                </table>
            </div>
        </div>
        <div class="footer" style="height:20px;">
        </div>
    </div>
</div>