@extends('master')
@section('content')
<div align="center">
<a  href="{{route('unit_add')}}"><button class="btn btn-success btn-number"><b>Add New</b> <span class="glyphicon glyphicon-plus"></span></button></a>
</div>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Unit Name</th>
            <th>Short Name</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($unitInfo as $row)
        <tr class="odd gradeX">
            <td>{{$row->unit_name}}</td>
            <td>{{$row->short_name}}</td>
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

