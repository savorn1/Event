@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="/profile" class="list-group-item ">Change profile</a>
                    <a href="/change" class="list-group-item">change pasword</a>
                </div>
            </div>
            <div class="col-md-9 ">
               <div class="panel panel-success">
                   <div class="panel-heading">
                        <h3 class="panel-title">
                            Change Profile
                        </h3>
                   </div>
                   <div class="panel-body">
                       <form enctype="multipart/form-data" action="/profile" method="POST">
                           <div class="form-group">
                               <input type="file" name="avatar" class="form-control">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                           </div>
                           <div class="form-group">
                               <input type="submit" class="btn btn-sm btn-success">
                           </div>
                       </form>
                       <h1>Contact in form</h1>
                       <form class="form-horizontal" action="/" method="post">
                           <div class="container-fluid">
                               <div class="form-group">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <select class="form-control" id="sel1">
                                               <option>Mr</option>
                                               <option>Mrs</option>
                                               <option>Ms</option>
                                               <option>Miss</option>
                                               <option>Mx</option>
                                               <option>Dr</option>
                                               <option>Prof</option>
                                               <option>Rev</option>
                                           </select>
                                       </div>
                                   </div>
                               </div>
                               <div class="form-group">
                                       <div class="row">
                                           <div class="col-md-6">
                                               <label>First name</label>
                                               <input class="form-control" type="text" placeholder="First Name">
                                           </div>
                                           <div class="col-md-6">
                                               <label>First name</label>
                                               <input class="form-control" type="text" placeholder="First Name">
                                           </div>
                                       </div>
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
@endsection
