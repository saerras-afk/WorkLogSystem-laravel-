@extends('layouts.app')
<link href="{{ asset('css/project.css') }}" rel="stylesheet"> 
@section('content')

    <div class="container ">
        <label for="rg-from" style="color: #01417F; font-weight: bold; margin-left:20px;">Projects: </label> &nbsp; &nbsp;
        <select class="field" name="project" id="project">
            <option value=""></option>
            @foreach ($project as $pr)
                <option value="{{ $pr->id }}">{{ $pr->projectName }}</option>
            @endforeach
        </select>
        <i data-toggle="modal" class="fa fa-plus-circle" style="color:#01417F; font-size: 15px; margin-left: 10px;" id="add-project"></i>
        
        <select class="field" name="sprint" id="sprint">
            <option value=""></option>
            @foreach ($sprint as $sp)
                <option value="{{ $sp->id }}">{{ $sp->sprintNo }}</option>
            @endforeach
        </select>
        <i class="fa fa-plus-circle" style="color:#01417F; font-size: 15px; margin-left: 10px;" id="add-sprint"></i>
     
        <div class="col-6" id="dashTable" style="width:100%;">
            <div class="table-responsive-sm" style="height: 100%; width: 100%;">
                <br />
                <br />
                <table class="table table-hover" style="width:100%; height:100%;">
                    <thead style="background-color: #01417F;width:100%;">
                    </thead>
                    <tbody style="font-weight: bold;" id="task_wrapper">
                        
                    </tbody>
                </table>
            </div>
        </div>
        <button  id="add-task">add task</button>
    </div>
    @include('partial.modal')
@endsection

@section('jsFiles')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script>
        data ={
            sprintId : null,
            projectId :null
        }

        $("select[name=projectId]").change(function () {
            data.projectId = $("select[name=projectId]").val();
            // getTaskList();

            alert('click');
        });

        $("select[name=sprintId]").change(function () {
            data.sprintId = $("select[name=sprintId]").val();
            // getTaskList();
            alert('click');
        });

        function getTaskList(){
            if(data.sprintId != null && data.projectId != null){
                data._token = '{{ csrf_token() }}';
                $.ajax({
                    type: 'POST',
                    url: "{{ url('project/getTask') }}",
                    data: data,
                    success: function(data){
                        if(data.success){
                            alert('success');
                        }
                    }
                });
            }
        }

        //add project ajax
        $('#add-project').on('click',function(){
            $('#projModal').css('display','block');        
        });
        
        //add sprint ajax
        $('#add-sprint').on('click',function(){
            $('#sprintModal').css('display','block');        
        });

        //add task ajax
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