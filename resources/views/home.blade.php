@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-content container">
    <div class="row" style="margin-top:10%;width:100%;">
        <div class="col-6" id="dashTable" style="width:50%;float:left;">
            <div class="table-responsive-sm" style="height: 100%; width: 100%;">
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
                    </tbody>
                </table>
            </div>
        </div>
        <div id="dashProgress" style="width:50%;float:right;">
            <h4>Progress here!</h4>
        </div>
    </div>
</div>
@endsection
