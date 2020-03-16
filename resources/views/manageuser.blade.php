P@extends('layouts.app')

@section('content')
<div class="container">
    <div style="margin-top:10%;">
      <button style="background-color: #01417F;color:white;">
            <i class="fa fa-user-plus" id="btn-create" ></i>
            <span><b> Add User</b></span>
</button >
        <div>
        <div class="row" id="muTable">
            <div class="col-12">
                <table id="mtable">
                    <thead>
                        <tr>
                            <th scope="col">UserId</th>
                            <th scope="col">Fistname</th>
                            <th scope="col">Lastname</th>
                            <th scope="col">Username</th>
                            <th scope="col">Position</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody style="color: #01417F;">
                       
                            <tr>
                                <td>testing102</td>
                                <td>testing102</td>
                                <td>testidfsfsdfsdfsdfsdng102</td>
                                <td>testing102</td>
                                <td>
                                   testing102
                                </td>
                                <td>
                                    <i class="fa fa-edit" id="btn-update"
                                       style="color:#01417F; font-size: 20px; margin-left: 10px;"></i>&nbsp;
                                    <i class="fa fa-trash" id="btn-delete"
                                       style="font-size: 20px;"></i>
                                </td>
                            </tr>
                        
                    </tbody>
                </table>
        </div>
    </div>
</div>
@endsection
