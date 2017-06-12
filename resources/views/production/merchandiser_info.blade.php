@extends('master')
@section('content')
<div align="center">
<a  href="{{route('merchandiser_add')}}"><button class="btn btn-success btn-number"><b>Add New</b> <span class="glyphicon glyphicon-plus"></span></button></a>
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Phone</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($List as $row)
        <tr class="odd gradeX">
            <td>{{$row->merchandiser_name}}</td>
            <td>{{$row->merchandiser_address}}</td>
            <td>{{$row->merchandiser_phone}}</td>
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

