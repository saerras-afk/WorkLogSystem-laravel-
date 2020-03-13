@extends('layouts.app')

@section('content')
    <div class="container">
        <select name="sprint" id="sprint">
            <option value=""></option>
            @foreach ($sprint as $sp)
                <option value="{{ $sp->id }}">{{ $sp->sprintNo }}</option>
            @endforeach
        </select>
        <button id="add-sprint">add sprint</button>

        <select name="project" id="project">
            <option value=""></option>
            @foreach ($project as $pr)
                <option value="{{ $pr->id }}">{{ $pr->projectName }}</option>
            @endforeach
        </select>
        <button id="add-project">add project</button>

        <div class="task-container">

        </div>
        <button  id="add-task">add task</button>
    </div>
@endsection