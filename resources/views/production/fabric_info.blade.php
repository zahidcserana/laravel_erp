@extends('master')
@section('content')
<div align="center">
<a  href="{{route('fabric_add')}}"><button class="btn btn-success btn-number"><b>Add New</b> <span class="glyphicon glyphicon-plus"></span></button></a>
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Type</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Composition</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($List as $row)
        <tr class="odd gradeX">
            <td>{{$row->type}}</td>
            <td>{{$row->color}}</td>
            <td>{{$row->quantity}}</td>
            <td>{{$row->composition}}</td>
            <td>{{$row->Description}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

@section('js')
    @parent
<script>
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>
   
@endsection

