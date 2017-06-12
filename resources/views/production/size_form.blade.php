@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="{{route('size_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-6">Size Name</label>
                <div class="col-md-6">
                <input type="text" name="size_name" class="form-control" placeholder="Enter Size Name">
                </div>
            </div>
            <div style="padding-top: 50px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('size_info')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop