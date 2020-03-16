@extends('layouts.app')
<link href="{{ asset('css/project.css') }}" rel="stylesheet"> 
@section('content')

    <div class="container ">
        <br>
        <br>
        <br>
        <div>
        <button style="background-color:#01417F;color:white;"  id="add-project">
            <i class="fa fa-folder" ></i>
       <span><b> Add New Project</b></span></button>
       <button style="background-color:#01417F;color:white;"  id="add-sprint">
            <i class="fa fa-plus" ></i>
       <span><b> Add New Sprint</b></span></button>
    </div>
    <div>
        <label for="rg-from" style="color: #01417F; font-weight: bold; ">Projects: </label> &nbsp; &nbsp;
        <select class="field" name="project" id="project">
            <option value=""></option>
            @foreach ($project as $pr)
                <option value="{{ $pr->id }}">{{ $pr->projectName }}</option>
            @endforeach
        </select>
        <label for="rg-from" style="color: #01417F; font-weight: bold; margin-left:20px;">Sprint Numbers: </label> &nbsp; &nbsp;
        <select class="field" name="sprint" id="sprint">
            <option value=""></option>
            @foreach ($sprint as $sp)
                <option value="{{ $sp->id }}">{{ $sp->sprintNo }}</option>
            @endforeach
        </select>
       
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


        

        <br>
        <br>

        <div class="task-container">
        <div class="table-responsive-sm" style="height: 100%; width:90%;">
                <table class="table table-hover">

                    <thead style="background-color: #01417F;">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody style="font-weight: bold;">
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target="#taskModal"><u>Task1</u></a></td>
                            <td style="text-align: center;">
                                <button class="btn-success" style="color: black;"><b>START</b></button>&nbsp;
                                <button class="btn-danger" style="color: black;"><b>END</b></button>&nbsp;
                                <i class='far fa-file-alt' style="font-size: 20px; color: #01417F"></i>
                            </td>
                            <td style="text-align: right;">
                                <i class="fa fa-edit" style="font-size: 20px; color: #01417F"></i>
                                <i class="fa fa-trash" style="font-size: 20px; color: #01417F"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target="#taskModal"><u>Task2</u></a></td>
                            <td style="text-align: center;">
                                <button class="btn-success" style="color: black;"><b>START</b></button>&nbsp;
                                <button class="btn-danger" style="color: black;"><b>END</b></button>&nbsp;
                                <i class='far fa-file-alt' style="font-size: 20px; color: #01417F"></i>
                            </td>
                            <td style="text-align: right;">
                                <i class="fa fa-edit" style="font-size: 20px; color: #01417F"></i>
                                <i class="fa fa-trash" style="font-size: 20px; color: #01417F"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" data-toggle="modal" data-target="#taskModal"><u>Task3</u></a></td>
                            <td style="text-align: center;">
                                <button class="btn-success" style="color: black;"><b>START</b></button>&nbsp;
                                <button class="btn-danger" style="color: black;"><b>END</b></button>&nbsp;
                                <i class='far fa-file-alt' style="font-size: 20px; color: #01417F"></i>
                            </td>
                            <td style="text-align: right;">
                                <i class="fa fa-edit" style="font-size: 20px; color: #01417F"></i>
                                <i class="fa fa-trash" style="font-size: 20px; color: #01417F"></i>
                            </td>
                        </tr>
                        <tr>
                </tr>
                    </tbody>
                </table>
                <button style="background-color:#01417F;color:white;"  id="btn-create">
            <i class="fa fa-plus" ></i>
            <span><b> Add New Task</b></span></button>
            </div>
       </div>
        
    </div>
   
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
@endsection

@section('jsFiles')
    <script src="{{asset('js/jquery.min.js')}}"></script>
<script>

    $('#add-project').on('click',function(){
        $('#projModal').css('display','block');        
    });

    $('#add-sprint').on('click',function(){
        $('#sprintModal').css('display','block');        
    });

    $('#add-task').on('click',function(){
        $('#taskModal').css('display','block');
    });

    $('#projectSumbit').on('click', function (e) {
        var formData = {
            _token : '{{ csrf_token() }}',
            ProjectName: $('#ProjectName').val()
        }
        $.ajax({
            type: "POST",
            url: "{{ url('project/addProject') }}",
            data: formData,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    location.reload();
                }
            }
        })
    });

    $('#sprintSumbit').on('click', function (e) {
        var formData = {
            _token : '{{ csrf_token() }}',
            sprintNo: $('#SprintNo').val(),
            startDate: $('#StartDate').val(),
            releaseDate: $('#ReleaseDate').val()
        }
        $.ajax({
            type: "POST",
            url: "{{ url('project/addSprint') }}",
            data: formData,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    // location.reload();
                }

            }

        })
    });

    $('#taskSubmit').on('click', function (e) {

        var formData = {
            _token : '{{ csrf_token() }}',
            projectId: $('select[name="task_projectId"]').children('option:selected').val(),
            priorityId: $('select[name="task_priorityId"]').children('option:selected').val(),
            statusId: $('select[name="task_statusId"]').children('option:selected').val(),
            taskName: $('input[name="taskName"]').val(),
            projectManager: $('input[name="projectManager"]').val(),
            scrumMaster: $('input[name="scrumMaster"]').val(),
            developer: $('input[name="developer"]').val(),
            qualityAssurance: $('input[name="qualityAssurance"]').val(),
            description: $('textarea[name="description"]').val(),
            summary: $('textarea[name="summary"]').val(),
            deadline: $('input[name="deadline"]').val(),
            sprintId: $('select[name="task_sprintId"]').children('option:selected').val(),
            binFlag: $('input[name="binFlag"]').val(),
        }

        $.ajax({
            type: "POST",
            url: "{{ url('project/addTask') }}",
            data: formData,
            dataType: "json",
            success: function (data) {
                if (data.success) {
                    location.reload();
                }
            }
        })
    });


</script>    
@endsection