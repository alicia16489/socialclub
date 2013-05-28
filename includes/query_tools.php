<?php 

function where_overload($param)
{
	$res = array();
	$operand = array("=",">","<",">=","=<");
	$boolean = array("AND","OR");

	if(in_array($param,$boolean))
	{
		$res['bool'] = " ".$param." ";
	}
	elseif(in_array($param,$operand))
	{
		$res['op'] = " ".$param." ";
	}
	else{
		$res['val'] = $param;
	}
		
	return $res;
}
?>