@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <div class="list-group">
                    <a href="/profile" class="list-group-item ">Change profile</a>
                    <a href="/change" class="list-group-item">change pasword</a>
                </div>
            </div>
            <div class="col-md-8">
                 <div class="panel panel-primary">
                     <div class="panel-heading">
                         <h4>Change password</h4>
                     </div>
                     <div class="panel-body">
                         <div class="form-horizontal">
                             <div class="container-fluid">
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group">
                                             <label class="form-control-label">CURRENT PASSWORD</label>
                                             <input  class="form-control" type="password" name="">
                                         </div>
                                         <div class="form-group">
                                             <label class="form-control-label">NEW PASSWORD</label>
                                             <input  class="form-control" type="password" name="">
                                         </div>
                                         <div class="form-group">
                                             <label class="form-control-label">REPEAT PASSWORD</label>
                                             <input  class="form-control" type="password" name="">
                                         </div>
                                         <div class="form-group">
                                             <button class="btn btn-info"><i class="fa fa-btn fa-user"> </i>save</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
