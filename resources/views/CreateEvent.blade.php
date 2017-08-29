@extends('layouts.app')
@section('content')
    <div class="container" style="width: 80%">
        <h5>Create an Event</h5>
        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Create an Event
        </button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"
                                onclick="return confirm('Are you sure you want to cancel this item?')">&times;
                        </button>
                        <h2 class="modal-title">Create an Event</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" action="" method="">

                                    <h3>Basic Info</h3>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Event Photo</label>
                                        <div class=" col-md-9 ">
                                            <input type="file"
                                                    name="image"
                                                    placeholder="put your image here">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Event Name</label>
                                        <div class="col-md-9">
                                            <input class="form-control"
                                                   type="text"
                                                   name="event_name"
                                                   placeholder="Add a short, clear name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class=" col-md-3 control-label">Location</label>
                                        <div class="col-md-9">
                                            <input class="form-control"
                                                   type="text"
                                                   name="location"
                                                   placeholder="include a place or address">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Start Time</label>
                                        <div class="col-md-9" style="width: 50%">
                                            <div class='input-group date ' id='datetimepicker6'>
                                                <input type='text'
                                                       class="form-control"/>
                                                <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Start Time</label>
                                        <div class="col-md-9" style="width: 50%">
                                            <div class='input-group date ' id='datetimepicker7'>
                                                <input type='text'
                                                       class="form-control"/>
                                                <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <h3>Details</h3>
                                    Let people know what type of event you're hosting and what to expect
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                        <textarea class="form-control textarea"
                                                  rows="6"
                                                  name="Message"
                                                  id="Message"
                                                  placeholder="Tell people more a bout event"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label"> Keywords</label>
                                        <div class="col-md-9">
                                            <input class="form-control"
                                                   type="text"
                                                   name="keyword"
                                                   placeholder="Type and select keyword from the list of results">
                                        </div>
                                    </div>

                                    <hr>
                                    <h3> Tickets</h3>
                                    Let people know where they can get tickets for your event
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Ticket URL</label>
                                        <div class="col-md-9">
                                            <input class="form-control"
                                                   type="text"
                                                   name="ticket_url"
                                                   placeholder="Add a link to your ticket website">
                                        </div>
                                    </div>

                                    <hr>
                                    <h3>Options</h3>
                                    Choose who you want to add to join in your event
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Co-hosts</label>
                                        <div class="col-md-9">
                                            <input class="form-control"
                                                   type="text"
                                                   name="co-host"
                                                   placeholder="add friends">
                                        </div>
                                    </div>

                                </form>
                            </div>


                            <div class="clearfix"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal"
                                        onclick="sweet();">Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
