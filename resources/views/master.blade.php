<!DOCTYPE html>
<html>
<head>
	<title>SOFT DREAM</title>
	<link rel="stylesheet" href="{{asset('images/tree_image/utree_data/2mxtree.css')}}"> 
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"> 
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> 
</head>
<body>

@include('layouts/header')
@include('layouts/menu')

@yield('content')

@include('layouts/footer')

</body>
</html>

<style>
	A.header {
    	color: black;
    	text-decoration: none;
	}
	A.header:hover {
	    color: Blue;
	    text-decoration: underline;
	    font-weight: bold;
	}
	.line {
	    text-decoration: underline;
	}
</style>

<script language="javascript" type="text/javascript">
    //Open or close nodes
    var temp = "";

    function SetNode(nodename) {
        if (eval("documents" + nodename + ".style.display == 'none'")) {
            // Open
            eval("image" + nodename + ".src = '{{asset('images/tree_image/utree_data/minus_old.gif')}}'");
            eval("nodeimage" + nodename + ".src = '{{asset('images/tree_image/utree_data/open.gif')}}'");
            eval("documents" + nodename + ".style.display = 'block'");
        } else {
            // Close
            eval("image" + nodename + ".src = '{{asset('images/tree_image/utree_data/plus_old.gif')}}'");
            eval("nodeimage" + nodename + ".src = '{{asset('images/tree_image/utree_data/closed.gif')}}'");
            eval("documents" + nodename + ".style.display = 'none'");
        }
    }

    function MakeColoredBack(nodeId) {
        var n = "dp" + nodeId;
        //alert("dp" + nodeId);
        if (temp != n) {
            document.getElementById(n).style.backgroundColor = "Honeydew";
            document.getElementById(n).className = "line";
            if (temp == "") {
                temp = n;
            } else {
                document.getElementById(temp).style.backgroundColor = 'transparent';
                document.getElementById(temp).className = "header";
                temp = n;
            }
        }
    }
</script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/bootstrap.min.js')}}"></script>
