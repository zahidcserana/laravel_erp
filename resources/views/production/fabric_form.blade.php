@extends('master')
@section('js')
    @parent
    <style>
    .form-group{
        padding-top: 15px;padding-bottom: 15px;
    }
</style>
@endsection
@section('content')

<div class="row">
    <div class="col-lg-12">
        <form method="post" action="{{route('fabric_add')}}" role="form">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-4"> Type</label>
                <div class="col-md-8">
                <input type="text" name="type" class="form-control" placeholder="Enter Type">
                </div>
            </div>  
            <div class="form-group">
                <label class="col-md-4">Color</label>
                <div class="col-md-8">
                    <select name="color" class="form-control">
                        <option selected disabled>Select</option>
                        @foreach($colors as $color)
                            <option value="{{$color->color_id}}">{{$color->color_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" >
                <label class="col-md-4">Quantity</label>
                <div class="col-md-8">
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4">Composition</label>
                <div class="col-md-8">
                    <textarea class="ckeditor" name="composition">
                        
                      </textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4">Description</label>
                <div class="col-md-8">
                    <textarea class="ckeditor" name="Description">
                        
                      </textarea>
                </div>
            </div>
            <div style="padding-top: 420px;" align="center">
            <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </form>
        <a href="{{route('fabric_info')}}"><button class="btn btn-default">Cancel</button></a>
    </div>
</div>
@stop

