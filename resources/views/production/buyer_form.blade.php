@extends('master')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <form method="post" action="{{route('buyer_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-6"> Name</label>
                <div class="col-md-6">
                <input type="text" name="buyer_name" class="form-control" placeholder="Enter Unit Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Address</label>
                <div class="col-md-6">
                <input type="text" name="buyer_address" class="form-control" placeholder="Enter Short Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Phone</label>
                <div class="col-md-6">
                <input type="text" name="buyer_phone" class="form-control" placeholder="Enter Short Name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-6">Type</label>
                <div class="col-md-6">
                    <select name="buyer_type">
                        <option selected value="">Select</option>
                        @foreach($buyerCateg as $cat)
                            <option value="{{$cat->id}}">{{$cat->category}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div style="padding-top: 50px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('buyer_info')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop