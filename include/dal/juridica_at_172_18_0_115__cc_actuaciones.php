<?php
$dalTablecc_actuaciones = array();
$dalTablecc_actuaciones["actuacion_id"] = array("type"=>3,"varname"=>"actuacion_id", "name" => "actuacion_id", "autoInc" => "1");
$dalTablecc_actuaciones["CC_ID_FK"] = array("type"=>3,"varname"=>"CC_ID_FK", "name" => "CC_ID_FK", "autoInc" => "0");
$dalTablecc_actuaciones["proxima_actuacion"] = array("type"=>200,"varname"=>"proxima_actuacion", "name" => "proxima_actuacion", "autoInc" => "0");
$dalTablecc_actuaciones["fecha_actuacion"] = array("type"=>7,"varname"=>"fecha_actuacion", "name" => "fecha_actuacion", "autoInc" => "0");
$dalTablecc_actuaciones["sys_last_date"] = array("type"=>135,"varname"=>"sys_last_date", "name" => "sys_last_date", "autoInc" => "0");
$dalTablecc_actuaciones["sys_user"] = array("type"=>200,"varname"=>"sys_user", "name" => "sys_user", "autoInc" => "0");
$dalTablecc_actuaciones["actuacion_id"]["key"]=true;

$dal_info["juridica_at_172_18_0_115__cc_actuaciones"] = &$dalTablecc_actuaciones;
?>