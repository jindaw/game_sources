<?php

$val        = \funs\excel\parser_array($sheets);
 
//print_r($val);

$REM		= $val['rem'];
$KEY		= $val['key'];
$NAME		= $val['name'];

$FILE_PLIST = $val['file_plist'];
$FILE_ERL	= $val['file_erl'];
$FILE_XML	= $val['file_xml'];

$PLIST		= $val['plist'];
$ERL		= $val['erl'];
$XML		= $val['xml'];

$VALUE			= $val['value'];
$VALUE_PLIST	= $val['value_plist'];
$VALUE_ERL		= $val['value_erl'];
$VALUE_XML		= $val['value_xml'];


// if($FILE_ERL)
// {
// 	$file_name  = $export_dir_erl.$FILE_ERL;
// 	$str_head   = "-module(data_{$KEY}).\n".
// 				  "-include(\"../include/comm.hrl\").\n\n".
// 				  "-export([get/1]).\n\n".
// 				  "% ".implode(";\n% ",$REM). "\n";
	
// 	$erl_str    = array();
// 	foreach ($VALUE_ERL as $v)
// 	{
// 		$s = "";
// 		foreach ($v as $k2=>$v2)
// 		{
// 			$s .="\t\t".str_pad(str_pad("{$k2}",12)." = {$v2},",32)."%% ".$NAME[$k2]."\n";
// 		}
// 		$idx = strrpos($s,',');
// 		$s   = substr($s,0,$idx).substr($s,$idx+1);
		
// 		$erl_str[] = "get({$v['lv']})->\n\t#d_renown{\n".$s ."\t}";
// 	}
	
// 	$erl_str[] = "get(_)->?null.\n";
	
// 	$erl_str    = implode(";\n",$erl_str);
	
// 	echo $file_name,"<br />\n";
// 	file_put_contents($file_name,$str_head.$erl_str);
// }
if($FILE_PLIST)
{
	$file_name  = $export_dir_xml.$FILE_PLIST;
	
//  print_r($VALUE_PLIST);
	
// 	$data    = array();
	foreach ($VALUE_PLIST as $v)
	{
		$data[$v['main_id']]['main_id']=$v['main_id'];
		$data[$v['main_id']]['title']  =$v['main_name'];
		$data[$v['main_id']]['intro'][]=$v;
	}
	
// 	$pl					 = new \plugins\ToPList($data);
// 	$xml_plist_data		 = $pl->xml();
	
// 	echo $file_name,"<br />\n";
// 	file_put_contents($file_name,$xml_plist_data);
	
	
	$data2 = array();
	foreach ($data as $k=>$v)
	{
		$data2[]	= $v;
	}
	
	\funs\tools\php_plist_write($file_name, array('p'=>$data2));
}
?>