@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="{{route('raw_material_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-6">Material Name</label>
                <div class="col-md-6">
                <input type="text" name="material_name" class="form-control" placeholder="Enter Material Name">
                </div>
            </div>
            <div style="padding-top: 50px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('raw_material')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop