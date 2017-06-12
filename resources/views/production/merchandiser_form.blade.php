@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="{{route('merchandiser_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-6"> Name</label>
                <div class="col-md-6">
                <input type="text" name="merchandiser_name" class="form-control" placeholder="Enter Unit Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Address</label>
                <div class="col-md-6">
                <input type="text" name="merchandiser_address" class="form-control" placeholder="Enter Short Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Phone</label>
                <div class="col-md-6">
                <input type="text" name="merchandiser_phone" class="form-control" placeholder="Enter Short Name">
                </div>
            </div>
            <div style="padding-top: 50px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('merchandiser_info')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop