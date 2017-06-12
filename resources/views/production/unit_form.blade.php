@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="{{route('unit_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-6">Unit Name</label>
                <div class="col-md-6">
                <input type="text" name="unit_name" class="form-control" placeholder="Enter Unit Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Short Name</label>
                <div class="col-md-6">
                <input type="text" name="short_name" class="form-control" placeholder="Enter Short Name">
                </div>
            </div>
            <div style="padding-top: 50px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('unit_set')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop