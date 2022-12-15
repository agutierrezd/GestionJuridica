<?php
$tdatacc_coactivo = array();
$tdatacc_coactivo[".searchableFields"] = array();
$tdatacc_coactivo[".ShortName"] = "cc_coactivo";
$tdatacc_coactivo[".OwnerID"] = "ABOGADO_RESP";
$tdatacc_coactivo[".OriginalTable"] = "cc_coactivo";


$tdatacc_coactivo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_coactivo[".originalPagesByType"] = $tdatacc_coactivo[".pagesByType"];
$tdatacc_coactivo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_coactivo[".originalPages"] = $tdatacc_coactivo[".pages"];
$tdatacc_coactivo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_coactivo[".originalDefaultPages"] = $tdatacc_coactivo[".defaultPages"];

//	field labels
$fieldLabelscc_coactivo = array();
$fieldToolTipscc_coactivo = array();
$pageTitlescc_coactivo = array();
$placeHolderscc_coactivo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_coactivo["Spanish"] = array();
	$fieldToolTipscc_coactivo["Spanish"] = array();
	$placeHolderscc_coactivo["Spanish"] = array();
	$pageTitlescc_coactivo["Spanish"] = array();
	$fieldLabelscc_coactivo["Spanish"]["CC_ID"] = "CC ID";
	$fieldToolTipscc_coactivo["Spanish"]["CC_ID"] = "";
	$placeHolderscc_coactivo["Spanish"]["CC_ID"] = "";
	$fieldLabelscc_coactivo["Spanish"]["EXPEDIENTE"] = "EXPEDIENTE";
	$fieldToolTipscc_coactivo["Spanish"]["EXPEDIENTE"] = "";
	$placeHolderscc_coactivo["Spanish"]["EXPEDIENTE"] = "";
	$fieldLabelscc_coactivo["Spanish"]["DV"] = "DV";
	$fieldToolTipscc_coactivo["Spanish"]["DV"] = "";
	$placeHolderscc_coactivo["Spanish"]["DV"] = "";
	$fieldLabelscc_coactivo["Spanish"]["NOMBRE_DE_EMPRESA_EN_EXPEDIENTE_DE_COBRO_COACTIVO"] = "NOMBRE EN EXPEDIENTE DE COBRO COACTIVO";
	$fieldToolTipscc_coactivo["Spanish"]["NOMBRE_DE_EMPRESA_EN_EXPEDIENTE_DE_COBRO_COACTIVO"] = "";
	$placeHolderscc_coactivo["Spanish"]["NOMBRE_DE_EMPRESA_EN_EXPEDIENTE_DE_COBRO_COACTIVO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["CIUDAD"] = "CIUDAD";
	$fieldToolTipscc_coactivo["Spanish"]["CIUDAD"] = "";
	$placeHolderscc_coactivo["Spanish"]["CIUDAD"] = "";
	$fieldLabelscc_coactivo["Spanish"]["DIRECCION"] = "DIRECCION";
	$fieldToolTipscc_coactivo["Spanish"]["DIRECCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["DIRECCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["CLASE_SANCION"] = "CLASE SANCION";
	$fieldToolTipscc_coactivo["Spanish"]["CLASE_SANCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["CLASE_SANCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["REMITENTE"] = "REMITENTE";
	$fieldToolTipscc_coactivo["Spanish"]["REMITENTE"] = "";
	$placeHolderscc_coactivo["Spanish"]["REMITENTE"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ESTADO"] = "ESTADO";
	$fieldToolTipscc_coactivo["Spanish"]["ESTADO"] = "";
	$placeHolderscc_coactivo["Spanish"]["ESTADO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ABOGADO"] = "ABOGADO";
	$fieldToolTipscc_coactivo["Spanish"]["ABOGADO"] = "";
	$placeHolderscc_coactivo["Spanish"]["ABOGADO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["DIAS_FALTANTES_PARA_PRESCRIBIR"] = "DIAS FALTANTES PARA PRESCRIBIR";
	$fieldToolTipscc_coactivo["Spanish"]["DIAS_FALTANTES_PARA_PRESCRIBIR"] = "";
	$placeHolderscc_coactivo["Spanish"]["DIAS_FALTANTES_PARA_PRESCRIBIR"] = "";
	$fieldLabelscc_coactivo["Spanish"]["TIEMPO_PRES"] = "TIEMPO PRES";
	$fieldToolTipscc_coactivo["Spanish"]["TIEMPO_PRES"] = "";
	$placeHolderscc_coactivo["Spanish"]["TIEMPO_PRES"] = "";
	$fieldLabelscc_coactivo["Spanish"]["OBS_PROC_PAG_SN_EXTRC"] = "OBS PROC PAG SN EXTRC";
	$fieldToolTipscc_coactivo["Spanish"]["OBS_PROC_PAG_SN_EXTRC"] = "";
	$placeHolderscc_coactivo["Spanish"]["OBS_PROC_PAG_SN_EXTRC"] = "";
	$fieldLabelscc_coactivo["Spanish"]["NIT_CEDULA"] = "NIT CEDULA";
	$fieldToolTipscc_coactivo["Spanish"]["NIT_CEDULA"] = "";
	$placeHolderscc_coactivo["Spanish"]["NIT_CEDULA"] = "";
	$fieldLabelscc_coactivo["Spanish"]["NOMBRE_RAZON"] = "NOMBRE RAZON";
	$fieldToolTipscc_coactivo["Spanish"]["NOMBRE_RAZON"] = "";
	$placeHolderscc_coactivo["Spanish"]["NOMBRE_RAZON"] = "";
	$fieldLabelscc_coactivo["Spanish"]["RESOLUCION_SANCION"] = "RESOLUCION SANCION";
	$fieldToolTipscc_coactivo["Spanish"]["RESOLUCION_SANCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["RESOLUCION_SANCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA__RESOLUCION"] = "FECHA  RESOLUCION";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA__RESOLUCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA__RESOLUCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["VALOR_SANCION"] = "VALOR SANCION";
	$fieldToolTipscc_coactivo["Spanish"]["VALOR_SANCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["VALOR_SANCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["RECAUDADO_CONSIGNACIONES"] = "RECAUDADO CONSIGNACIONES";
	$fieldToolTipscc_coactivo["Spanish"]["RECAUDADO_CONSIGNACIONES"] = "";
	$placeHolderscc_coactivo["Spanish"]["RECAUDADO_CONSIGNACIONES"] = "";
	$fieldLabelscc_coactivo["Spanish"]["RECAUDADO_TITULOS_JUDICIALES"] = "RECAUDADO TITULOS JUDICIALES";
	$fieldToolTipscc_coactivo["Spanish"]["RECAUDADO_TITULOS_JUDICIALES"] = "";
	$placeHolderscc_coactivo["Spanish"]["RECAUDADO_TITULOS_JUDICIALES"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_EJECUTORIA"] = "FECHA EJECUTORIA";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_EJECUTORIA"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_EJECUTORIA"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_MANDAMIENTO_PAGO"] = "FECHA MANDAMIENTO PAGO";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_MANDAMIENTO_PAGO"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_MANDAMIENTO_PAGO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_NOTIFICACION_MANDAMIENTO"] = "FECHA NOTIFICACION MANDAMIENTO";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_NOTIFICACION_MANDAMIENTO"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_NOTIFICACION_MANDAMIENTO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ULTMA_ACTUACION"] = "ULTMA ACTUACION";
	$fieldToolTipscc_coactivo["Spanish"]["ULTMA_ACTUACION"] = "";
	$placeHolderscc_coactivo["Spanish"]["ULTMA_ACTUACION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["AUTO_CANCELACION"] = "AUTO CANCELACION";
	$fieldToolTipscc_coactivo["Spanish"]["AUTO_CANCELACION"] = "";
	$placeHolderscc_coactivo["Spanish"]["AUTO_CANCELACION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_PRESCRIPCION"] = "FECHA PRESCRIPCION";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_PRESCRIPCION"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_PRESCRIPCION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ULTIMA_ACTUACION"] = "ÚLTIMA ACTUACIÓN";
	$fieldToolTipscc_coactivo["Spanish"]["ULTIMA_ACTUACION"] = "";
	$placeHolderscc_coactivo["Spanish"]["ULTIMA_ACTUACION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["COMENTARIO_UA"] = "COMENTARIO ÚLTIMA ACTUACIÓN";
	$fieldToolTipscc_coactivo["Spanish"]["COMENTARIO_UA"] = "";
	$placeHolderscc_coactivo["Spanish"]["COMENTARIO_UA"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ACUERDO_PAGO"] = "ACUERDO PAGO";
	$fieldToolTipscc_coactivo["Spanish"]["ACUERDO_PAGO"] = "";
	$placeHolderscc_coactivo["Spanish"]["ACUERDO_PAGO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_ACTUACION"] = "PROXIMA ACTUACION";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_ACTUACION"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_ACTUACION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["FECHA_PROX_ACTUACION"] = "FECHA PROX ACTUACION";
	$fieldToolTipscc_coactivo["Spanish"]["FECHA_PROX_ACTUACION"] = "";
	$placeHolderscc_coactivo["Spanish"]["FECHA_PROX_ACTUACION"] = "";
	$fieldLabelscc_coactivo["Spanish"]["ABOGADO_RESP"] = "ABOGADO RESPONSABLE";
	$fieldToolTipscc_coactivo["Spanish"]["ABOGADO_RESP"] = "";
	$placeHolderscc_coactivo["Spanish"]["ABOGADO_RESP"] = "";
	$fieldLabelscc_coactivo["Spanish"]["EXPEDIENTEREL"] = "EXP. RELACIONADO";
	$fieldToolTipscc_coactivo["Spanish"]["EXPEDIENTEREL"] = "";
	$placeHolderscc_coactivo["Spanish"]["EXPEDIENTEREL"] = "";
	$fieldLabelscc_coactivo["Spanish"]["TIPODOCUMENTO"] = "TIPO DOCUMENTO";
	$fieldToolTipscc_coactivo["Spanish"]["TIPODOCUMENTO"] = "";
	$placeHolderscc_coactivo["Spanish"]["TIPODOCUMENTO"] = "";
	$fieldLabelscc_coactivo["Spanish"]["CARACTER"] = "CARÁCTER";
	$fieldToolTipscc_coactivo["Spanish"]["CARACTER"] = "";
	$placeHolderscc_coactivo["Spanish"]["CARACTER"] = "";
	$pageTitlescc_coactivo["Spanish"]["add"] = "COBRO COACTIVO";
	$pageTitlescc_coactivo["Spanish"]["edit"] = "COBRO COACTIVO [{%CC_ID}]";
	if (count($fieldToolTipscc_coactivo["Spanish"]))
		$tdatacc_coactivo[".isUseToolTips"] = true;
}


	$tdatacc_coactivo[".NCSearch"] = true;



$tdatacc_coactivo[".shortTableName"] = "cc_coactivo";
$tdatacc_coactivo[".nSecOptions"] = 1;

$tdatacc_coactivo[".mainTableOwnerID"] = "ABOGADO_RESP";
$tdatacc_coactivo[".entityType"] = 0;
$tdatacc_coactivo[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_coactivo[".strOriginalTableName"] = "cc_coactivo";

	



$tdatacc_coactivo[".showAddInPopup"] = false;

$tdatacc_coactivo[".showEditInPopup"] = false;

$tdatacc_coactivo[".showViewInPopup"] = false;

$tdatacc_coactivo[".listAjax"] = false;
//	temporary
//$tdatacc_coactivo[".listAjax"] = false;

	$tdatacc_coactivo[".audit"] = false;

	$tdatacc_coactivo[".locking"] = false;


$pages = $tdatacc_coactivo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_coactivo[".edit"] = true;
	$tdatacc_coactivo[".afterEditAction"] = 1;
	$tdatacc_coactivo[".closePopupAfterEdit"] = 1;
	$tdatacc_coactivo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_coactivo[".add"] = true;
$tdatacc_coactivo[".afterAddAction"] = 1;
$tdatacc_coactivo[".closePopupAfterAdd"] = 1;
$tdatacc_coactivo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_coactivo[".list"] = true;
}



$tdatacc_coactivo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_coactivo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_coactivo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_coactivo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_coactivo[".printFriendly"] = true;
}



$tdatacc_coactivo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_coactivo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_coactivo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_coactivo[".isUseAjaxSuggest"] = true;

$tdatacc_coactivo[".rowHighlite"] = true;



			

$tdatacc_coactivo[".ajaxCodeSnippetAdded"] = false;

$tdatacc_coactivo[".buttonsAdded"] = false;

$tdatacc_coactivo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_coactivo[".isUseTimeForSearch"] = false;


$tdatacc_coactivo[".badgeColor"] = "E67349";


$tdatacc_coactivo[".allSearchFields"] = array();
$tdatacc_coactivo[".filterFields"] = array();
$tdatacc_coactivo[".requiredSearchFields"] = array();

$tdatacc_coactivo[".googleLikeFields"] = array();
$tdatacc_coactivo[".googleLikeFields"][] = "CC_ID";
$tdatacc_coactivo[".googleLikeFields"][] = "EXPEDIENTE";
$tdatacc_coactivo[".googleLikeFields"][] = "EXPEDIENTEREL";
$tdatacc_coactivo[".googleLikeFields"][] = "TIPODOCUMENTO";
$tdatacc_coactivo[".googleLikeFields"][] = "NIT_CEDULA";
$tdatacc_coactivo[".googleLikeFields"][] = "DV";
$tdatacc_coactivo[".googleLikeFields"][] = "NOMBRE_RAZON";
$tdatacc_coactivo[".googleLikeFields"][] = "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO";
$tdatacc_coactivo[".googleLikeFields"][] = "CARACTER";
$tdatacc_coactivo[".googleLikeFields"][] = "CIUDAD";
$tdatacc_coactivo[".googleLikeFields"][] = "DIRECCION";
$tdatacc_coactivo[".googleLikeFields"][] = "CLASE_SANCION";
$tdatacc_coactivo[".googleLikeFields"][] = "REMITENTE";
$tdatacc_coactivo[".googleLikeFields"][] = "RESOLUCION_SANCION";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA _RESOLUCION";
$tdatacc_coactivo[".googleLikeFields"][] = "VALOR_SANCION";
$tdatacc_coactivo[".googleLikeFields"][] = "RECAUDADO_CONSIGNACIONES";
$tdatacc_coactivo[".googleLikeFields"][] = "RECAUDADO_TITULOS_JUDICIALES";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_EJECUTORIA";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_MANDAMIENTO_PAGO";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_NOTIFICACION_MANDAMIENTO";
$tdatacc_coactivo[".googleLikeFields"][] = "ULTMA_ACTUACION";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_ACTUACION";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_PROX_ACTUACION";
$tdatacc_coactivo[".googleLikeFields"][] = "ESTADO";
$tdatacc_coactivo[".googleLikeFields"][] = "AUTO_CANCELACION";
$tdatacc_coactivo[".googleLikeFields"][] = "ABOGADO";
$tdatacc_coactivo[".googleLikeFields"][] = "ABOGADO_RESP";
$tdatacc_coactivo[".googleLikeFields"][] = "FECHA_PRESCRIPCION";
$tdatacc_coactivo[".googleLikeFields"][] = "DIAS FALTANTES PARA PRESCRIBIR";
$tdatacc_coactivo[".googleLikeFields"][] = "TIEMPO_PRES";
$tdatacc_coactivo[".googleLikeFields"][] = "OBS_PROC_PAG_SN_EXTRC";
$tdatacc_coactivo[".googleLikeFields"][] = "ULTIMA_ACTUACION";
$tdatacc_coactivo[".googleLikeFields"][] = "COMENTARIO_UA";
$tdatacc_coactivo[".googleLikeFields"][] = "ACUERDO_PAGO";



$tdatacc_coactivo[".tableType"] = "list";

$tdatacc_coactivo[".printerPageOrientation"] = 0;
$tdatacc_coactivo[".nPrinterPageScale"] = 100;

$tdatacc_coactivo[".nPrinterSplitRecords"] = 40;

$tdatacc_coactivo[".geocodingEnabled"] = false;










$tdatacc_coactivo[".pageSize"] = 20;

$tdatacc_coactivo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_coactivo[".strOrderBy"] = $tstrOrderBy;

$tdatacc_coactivo[".orderindexes"] = array();


$tdatacc_coactivo[".sqlHead"] = "SELECT CC_ID,  	EXPEDIENTE,  	EXPEDIENTEREL,  	TIPODOCUMENTO,  	NIT_CEDULA,  	DV,  	NOMBRE_RAZON,  	`NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO`,  	CARACTER,  	CIUDAD,  	DIRECCION,  	CLASE_SANCION,  	REMITENTE,  	RESOLUCION_SANCION,  	`FECHA _RESOLUCION`,  	VALOR_SANCION,  	RECAUDADO_CONSIGNACIONES,  	RECAUDADO_TITULOS_JUDICIALES,  	FECHA_EJECUTORIA,  	FECHA_MANDAMIENTO_PAGO,  	FECHA_NOTIFICACION_MANDAMIENTO,  	ULTMA_ACTUACION,  	FECHA_ACTUACION,  	FECHA_PROX_ACTUACION,  	ESTADO,  	AUTO_CANCELACION,  	ABOGADO,  	ABOGADO_RESP,  	FECHA_PRESCRIPCION,  	`DIAS FALTANTES PARA PRESCRIBIR`,  	TIEMPO_PRES,  	OBS_PROC_PAG_SN_EXTRC,  	ULTIMA_ACTUACION,  	COMENTARIO_UA,  	ACUERDO_PAGO";
$tdatacc_coactivo[".sqlFrom"] = "FROM cc_coactivo";
$tdatacc_coactivo[".sqlWhereExpr"] = "";
$tdatacc_coactivo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_coactivo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_coactivo[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_coactivo[".highlightSearchResults"] = true;

$tableKeyscc_coactivo = array();
$tableKeyscc_coactivo[] = "CC_ID";
$tdatacc_coactivo[".Keys"] = $tableKeyscc_coactivo;


$tdatacc_coactivo[".hideMobileList"] = array();




//	CC_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CC_ID";
	$fdata["GoodName"] = "CC_ID";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","CC_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CC_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CC_ID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["CC_ID"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "CC_ID";
//	EXPEDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "EXPEDIENTE";
	$fdata["GoodName"] = "EXPEDIENTE";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","EXPEDIENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EXPEDIENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXPEDIENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["EXPEDIENTE"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "EXPEDIENTE";
//	EXPEDIENTEREL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "EXPEDIENTEREL";
	$fdata["GoodName"] = "EXPEDIENTEREL";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","EXPEDIENTEREL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EXPEDIENTEREL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EXPEDIENTEREL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["EXPEDIENTEREL"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "EXPEDIENTEREL";
//	TIPODOCUMENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIPODOCUMENTO";
	$fdata["GoodName"] = "TIPODOCUMENTO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","TIPODOCUMENTO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "TIPODOCUMENTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIPODOCUMENTO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_tipodoc";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "td_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "td";

	

	
	$edata["LookupOrderBy"] = "td";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["TIPODOCUMENTO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "TIPODOCUMENTO";
//	NIT_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NIT_CEDULA";
	$fdata["GoodName"] = "NIT_CEDULA";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","NIT_CEDULA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NIT_CEDULA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIT_CEDULA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["NIT_CEDULA"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "NIT_CEDULA";
//	DV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DV";
	$fdata["GoodName"] = "DV";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","DV");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DV";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DV";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["DV"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "DV";
//	NOMBRE_RAZON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE_RAZON";
	$fdata["GoodName"] = "NOMBRE_RAZON";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","NOMBRE_RAZON");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMBRE_RAZON";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOMBRE_RAZON";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["NOMBRE_RAZON"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "NOMBRE_RAZON";
//	NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO";
	$fdata["GoodName"] = "NOMBRE_DE_EMPRESA_EN_EXPEDIENTE_DE_COBRO_COACTIVO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","NOMBRE_DE_EMPRESA_EN_EXPEDIENTE_DE_COBRO_COACTIVO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO";
//	CARACTER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CARACTER";
	$fdata["GoodName"] = "CARACTER";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","CARACTER");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "CARACTER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CARACTER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_caracter";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "car_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "caracter_n";

	

	
	$edata["LookupOrderBy"] = "caracter_n";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["CARACTER"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "CARACTER";
//	CIUDAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIUDAD";
	$fdata["GoodName"] = "CIUDAD";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","CIUDAD");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIUDAD";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIUDAD";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["CIUDAD"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "CIUDAD";
//	DIRECCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "DIRECCION";
	$fdata["GoodName"] = "DIRECCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","DIRECCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DIRECCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DIRECCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["DIRECCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "DIRECCION";
//	CLASE_SANCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CLASE_SANCION";
	$fdata["GoodName"] = "CLASE_SANCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","CLASE_SANCION");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CLASE_SANCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLASE_SANCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_clase_sancion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CLASE_SANCION";

	

	
	$edata["LookupOrderBy"] = "CLASE_SANCION";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "CC_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["CLASE_SANCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "CLASE_SANCION";
//	REMITENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "REMITENTE";
	$fdata["GoodName"] = "REMITENTE";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","REMITENTE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REMITENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REMITENTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_remitente";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "remitente_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "REMITENTE";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "CC_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["REMITENTE"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "REMITENTE";
//	RESOLUCION_SANCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RESOLUCION_SANCION";
	$fdata["GoodName"] = "RESOLUCION_SANCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","RESOLUCION_SANCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RESOLUCION_SANCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RESOLUCION_SANCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["RESOLUCION_SANCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "RESOLUCION_SANCION";
//	FECHA _RESOLUCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "FECHA _RESOLUCION";
	$fdata["GoodName"] = "FECHA__RESOLUCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA__RESOLUCION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA _RESOLUCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`FECHA _RESOLUCION`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA _RESOLUCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA _RESOLUCION";
//	VALOR_SANCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "VALOR_SANCION";
	$fdata["GoodName"] = "VALOR_SANCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","VALOR_SANCION");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALOR_SANCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALOR_SANCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["VALOR_SANCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "VALOR_SANCION";
//	RECAUDADO_CONSIGNACIONES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "RECAUDADO_CONSIGNACIONES";
	$fdata["GoodName"] = "RECAUDADO_CONSIGNACIONES";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","RECAUDADO_CONSIGNACIONES");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "RECAUDADO_CONSIGNACIONES";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECAUDADO_CONSIGNACIONES";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["RECAUDADO_CONSIGNACIONES"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "RECAUDADO_CONSIGNACIONES";
//	RECAUDADO_TITULOS_JUDICIALES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RECAUDADO_TITULOS_JUDICIALES";
	$fdata["GoodName"] = "RECAUDADO_TITULOS_JUDICIALES";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","RECAUDADO_TITULOS_JUDICIALES");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "RECAUDADO_TITULOS_JUDICIALES";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RECAUDADO_TITULOS_JUDICIALES";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["RECAUDADO_TITULOS_JUDICIALES"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "RECAUDADO_TITULOS_JUDICIALES";
//	FECHA_EJECUTORIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "FECHA_EJECUTORIA";
	$fdata["GoodName"] = "FECHA_EJECUTORIA";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_EJECUTORIA");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_EJECUTORIA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_EJECUTORIA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_EJECUTORIA"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_EJECUTORIA";
//	FECHA_MANDAMIENTO_PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "FECHA_MANDAMIENTO_PAGO";
	$fdata["GoodName"] = "FECHA_MANDAMIENTO_PAGO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_MANDAMIENTO_PAGO");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_MANDAMIENTO_PAGO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_MANDAMIENTO_PAGO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_MANDAMIENTO_PAGO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_MANDAMIENTO_PAGO";
//	FECHA_NOTIFICACION_MANDAMIENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "FECHA_NOTIFICACION_MANDAMIENTO";
	$fdata["GoodName"] = "FECHA_NOTIFICACION_MANDAMIENTO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_NOTIFICACION_MANDAMIENTO");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_NOTIFICACION_MANDAMIENTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_NOTIFICACION_MANDAMIENTO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_NOTIFICACION_MANDAMIENTO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_NOTIFICACION_MANDAMIENTO";
//	ULTMA_ACTUACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "ULTMA_ACTUACION";
	$fdata["GoodName"] = "ULTMA_ACTUACION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ULTMA_ACTUACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ULTMA_ACTUACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ULTMA_ACTUACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ULTMA_ACTUACION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ULTMA_ACTUACION";
//	FECHA_ACTUACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "FECHA_ACTUACION";
	$fdata["GoodName"] = "FECHA_ACTUACION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_ACTUACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FECHA_ACTUACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_ACTUACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_ACTUACION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_ACTUACION";
//	FECHA_PROX_ACTUACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "FECHA_PROX_ACTUACION";
	$fdata["GoodName"] = "FECHA_PROX_ACTUACION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_PROX_ACTUACION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_PROX_ACTUACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_PROX_ACTUACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_PROX_ACTUACION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_PROX_ACTUACION";
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ESTADO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ESTADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ESTADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ESTADO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "CC_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ESTADO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ESTADO";
//	AUTO_CANCELACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "AUTO_CANCELACION";
	$fdata["GoodName"] = "AUTO_CANCELACION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","AUTO_CANCELACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AUTO_CANCELACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AUTO_CANCELACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["AUTO_CANCELACION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "AUTO_CANCELACION";
//	ABOGADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "ABOGADO";
	$fdata["GoodName"] = "ABOGADO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ABOGADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ABOGADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABOGADO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "CC_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ABOGADO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ABOGADO";
//	ABOGADO_RESP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "ABOGADO_RESP";
	$fdata["GoodName"] = "ABOGADO_RESP";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ABOGADO_RESP");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ABOGADO_RESP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ABOGADO_RESP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users_find";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "CC_ID";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ABOGADO_RESP"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ABOGADO_RESP";
//	FECHA_PRESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "FECHA_PRESCRIPCION";
	$fdata["GoodName"] = "FECHA_PRESCRIPCION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","FECHA_PRESCRIPCION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHA_PRESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHA_PRESCRIPCION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["FECHA_PRESCRIPCION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "FECHA_PRESCRIPCION";
//	DIAS FALTANTES PARA PRESCRIBIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DIAS FALTANTES PARA PRESCRIBIR";
	$fdata["GoodName"] = "DIAS_FALTANTES_PARA_PRESCRIBIR";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","DIAS_FALTANTES_PARA_PRESCRIBIR");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DIAS FALTANTES PARA PRESCRIBIR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DIAS FALTANTES PARA PRESCRIBIR`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["DIAS FALTANTES PARA PRESCRIBIR"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "DIAS FALTANTES PARA PRESCRIBIR";
//	TIEMPO_PRES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "TIEMPO_PRES";
	$fdata["GoodName"] = "TIEMPO_PRES";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","TIEMPO_PRES");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TIEMPO_PRES";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIEMPO_PRES";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_tiempo_prescripcion";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tp_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tiempo_prescripcion";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["TIEMPO_PRES"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "TIEMPO_PRES";
//	OBS_PROC_PAG_SN_EXTRC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "OBS_PROC_PAG_SN_EXTRC";
	$fdata["GoodName"] = "OBS_PROC_PAG_SN_EXTRC";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","OBS_PROC_PAG_SN_EXTRC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OBS_PROC_PAG_SN_EXTRC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OBS_PROC_PAG_SN_EXTRC";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["OBS_PROC_PAG_SN_EXTRC"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "OBS_PROC_PAG_SN_EXTRC";
//	ULTIMA_ACTUACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "ULTIMA_ACTUACION";
	$fdata["GoodName"] = "ULTIMA_ACTUACION";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ULTIMA_ACTUACION");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "ULTIMA_ACTUACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ULTIMA_ACTUACION";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 10;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ULTIMA_ACTUACION"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ULTIMA_ACTUACION";
//	COMENTARIO_UA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "COMENTARIO_UA";
	$fdata["GoodName"] = "COMENTARIO_UA";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","COMENTARIO_UA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COMENTARIO_UA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COMENTARIO_UA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["COMENTARIO_UA"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "COMENTARIO_UA";
//	ACUERDO_PAGO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "ACUERDO_PAGO";
	$fdata["GoodName"] = "ACUERDO_PAGO";
	$fdata["ownerTable"] = "cc_coactivo";
	$fdata["Label"] = GetFieldLabel("cc_coactivo","ACUERDO_PAGO");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "ACUERDO_PAGO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ACUERDO_PAGO";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ESTADO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_coactivo["ACUERDO_PAGO"] = $fdata;
		$tdatacc_coactivo[".searchableFields"][] = "ACUERDO_PAGO";


$tables_data["cc_coactivo"]=&$tdatacc_coactivo;
$field_labels["cc_coactivo"] = &$fieldLabelscc_coactivo;
$fieldToolTips["cc_coactivo"] = &$fieldToolTipscc_coactivo;
$placeHolders["cc_coactivo"] = &$placeHolderscc_coactivo;
$page_titles["cc_coactivo"] = &$pageTitlescc_coactivo;


changeTextControlsToDate( "cc_coactivo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_coactivo"] = array();
//	cc_coactivo_anexos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cc_coactivo_anexos";
		$detailsParam["dOriginalTable"] = "cc_coactivo_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cc_coactivo_anexos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cc_coactivo_anexos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cc_coactivo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"][]="CC_ID";

				$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"][]="cc_id_fk";
//	cc_titulos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cc_titulos";
		$detailsParam["dOriginalTable"] = "cc_titulos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cc_titulos";
	$detailsParam["dCaptionTable"] = GetTableCaption("cc_titulos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cc_coactivo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"][]="CC_ID";

				$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"][]="CC_ID_FK";
//	cc_acuerdo_pago
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cc_acuerdo_pago";
		$detailsParam["dOriginalTable"] = "cc_acuerdo_pago";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cc_acuerdo_pago";
	$detailsParam["dCaptionTable"] = GetTableCaption("cc_acuerdo_pago");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cc_coactivo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"][]="CC_ID";

				$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"][]="CC_ID_FK";
//	cc_actuaciones
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cc_actuaciones";
		$detailsParam["dOriginalTable"] = "cc_actuaciones";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cc_actuaciones";
	$detailsParam["dCaptionTable"] = GetTableCaption("cc_actuaciones");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cc_coactivo"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["masterKeys"][]="CC_ID";

				$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cc_coactivo"][$dIndex]["detailKeys"][]="CC_ID_FK";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_coactivo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_coactivo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CC_ID,  	EXPEDIENTE,  	EXPEDIENTEREL,  	TIPODOCUMENTO,  	NIT_CEDULA,  	DV,  	NOMBRE_RAZON,  	`NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO`,  	CARACTER,  	CIUDAD,  	DIRECCION,  	CLASE_SANCION,  	REMITENTE,  	RESOLUCION_SANCION,  	`FECHA _RESOLUCION`,  	VALOR_SANCION,  	RECAUDADO_CONSIGNACIONES,  	RECAUDADO_TITULOS_JUDICIALES,  	FECHA_EJECUTORIA,  	FECHA_MANDAMIENTO_PAGO,  	FECHA_NOTIFICACION_MANDAMIENTO,  	ULTMA_ACTUACION,  	FECHA_ACTUACION,  	FECHA_PROX_ACTUACION,  	ESTADO,  	AUTO_CANCELACION,  	ABOGADO,  	ABOGADO_RESP,  	FECHA_PRESCRIPCION,  	`DIAS FALTANTES PARA PRESCRIBIR`,  	TIEMPO_PRES,  	OBS_PROC_PAG_SN_EXTRC,  	ULTIMA_ACTUACION,  	COMENTARIO_UA,  	ACUERDO_PAGO";
$proto0["m_strFrom"] = "FROM cc_coactivo";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "CC_ID",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto6["m_sql"] = "CC_ID";
$proto6["m_srcTableName"] = "cc_coactivo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "EXPEDIENTE",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto8["m_sql"] = "EXPEDIENTE";
$proto8["m_srcTableName"] = "cc_coactivo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "EXPEDIENTEREL",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto10["m_sql"] = "EXPEDIENTEREL";
$proto10["m_srcTableName"] = "cc_coactivo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIPODOCUMENTO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto12["m_sql"] = "TIPODOCUMENTO";
$proto12["m_srcTableName"] = "cc_coactivo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NIT_CEDULA",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto14["m_sql"] = "NIT_CEDULA";
$proto14["m_srcTableName"] = "cc_coactivo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DV",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto16["m_sql"] = "DV";
$proto16["m_srcTableName"] = "cc_coactivo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_RAZON",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto18["m_sql"] = "NOMBRE_RAZON";
$proto18["m_srcTableName"] = "cc_coactivo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto20["m_sql"] = "`NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO`";
$proto20["m_srcTableName"] = "cc_coactivo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CARACTER",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto22["m_sql"] = "CARACTER";
$proto22["m_srcTableName"] = "cc_coactivo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIUDAD",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto24["m_sql"] = "CIUDAD";
$proto24["m_srcTableName"] = "cc_coactivo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "DIRECCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto26["m_sql"] = "DIRECCION";
$proto26["m_srcTableName"] = "cc_coactivo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CLASE_SANCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto28["m_sql"] = "CLASE_SANCION";
$proto28["m_srcTableName"] = "cc_coactivo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "REMITENTE",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto30["m_sql"] = "REMITENTE";
$proto30["m_srcTableName"] = "cc_coactivo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RESOLUCION_SANCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto32["m_sql"] = "RESOLUCION_SANCION";
$proto32["m_srcTableName"] = "cc_coactivo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA _RESOLUCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto34["m_sql"] = "`FECHA _RESOLUCION`";
$proto34["m_srcTableName"] = "cc_coactivo";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "VALOR_SANCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto36["m_sql"] = "VALOR_SANCION";
$proto36["m_srcTableName"] = "cc_coactivo";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "RECAUDADO_CONSIGNACIONES",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto38["m_sql"] = "RECAUDADO_CONSIGNACIONES";
$proto38["m_srcTableName"] = "cc_coactivo";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RECAUDADO_TITULOS_JUDICIALES",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto40["m_sql"] = "RECAUDADO_TITULOS_JUDICIALES";
$proto40["m_srcTableName"] = "cc_coactivo";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_EJECUTORIA",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto42["m_sql"] = "FECHA_EJECUTORIA";
$proto42["m_srcTableName"] = "cc_coactivo";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_MANDAMIENTO_PAGO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto44["m_sql"] = "FECHA_MANDAMIENTO_PAGO";
$proto44["m_srcTableName"] = "cc_coactivo";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_NOTIFICACION_MANDAMIENTO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto46["m_sql"] = "FECHA_NOTIFICACION_MANDAMIENTO";
$proto46["m_srcTableName"] = "cc_coactivo";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "ULTMA_ACTUACION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto48["m_sql"] = "ULTMA_ACTUACION";
$proto48["m_srcTableName"] = "cc_coactivo";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_ACTUACION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto50["m_sql"] = "FECHA_ACTUACION";
$proto50["m_srcTableName"] = "cc_coactivo";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_PROX_ACTUACION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto52["m_sql"] = "FECHA_PROX_ACTUACION";
$proto52["m_srcTableName"] = "cc_coactivo";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto54["m_sql"] = "ESTADO";
$proto54["m_srcTableName"] = "cc_coactivo";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "AUTO_CANCELACION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto56["m_sql"] = "AUTO_CANCELACION";
$proto56["m_srcTableName"] = "cc_coactivo";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "ABOGADO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto58["m_sql"] = "ABOGADO";
$proto58["m_srcTableName"] = "cc_coactivo";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "ABOGADO_RESP",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto60["m_sql"] = "ABOGADO_RESP";
$proto60["m_srcTableName"] = "cc_coactivo";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_PRESCRIPCION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto62["m_sql"] = "FECHA_PRESCRIPCION";
$proto62["m_srcTableName"] = "cc_coactivo";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DIAS FALTANTES PARA PRESCRIBIR",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto64["m_sql"] = "`DIAS FALTANTES PARA PRESCRIBIR`";
$proto64["m_srcTableName"] = "cc_coactivo";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "TIEMPO_PRES",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto66["m_sql"] = "TIEMPO_PRES";
$proto66["m_srcTableName"] = "cc_coactivo";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "OBS_PROC_PAG_SN_EXTRC",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto68["m_sql"] = "OBS_PROC_PAG_SN_EXTRC";
$proto68["m_srcTableName"] = "cc_coactivo";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "ULTIMA_ACTUACION",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto70["m_sql"] = "ULTIMA_ACTUACION";
$proto70["m_srcTableName"] = "cc_coactivo";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "COMENTARIO_UA",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto72["m_sql"] = "COMENTARIO_UA";
$proto72["m_srcTableName"] = "cc_coactivo";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "ACUERDO_PAGO",
	"m_strTable" => "cc_coactivo",
	"m_srcTableName" => "cc_coactivo"
));

$proto74["m_sql"] = "ACUERDO_PAGO";
$proto74["m_srcTableName"] = "cc_coactivo";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "cc_coactivo";
$proto77["m_srcTableName"] = "cc_coactivo";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "CC_ID";
$proto77["m_columns"][] = "EXPEDIENTE";
$proto77["m_columns"][] = "EXPEDIENTEREL";
$proto77["m_columns"][] = "TIPODOCUMENTO";
$proto77["m_columns"][] = "NIT_CEDULA";
$proto77["m_columns"][] = "DV";
$proto77["m_columns"][] = "NOMBRE_RAZON";
$proto77["m_columns"][] = "NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO";
$proto77["m_columns"][] = "CARACTER";
$proto77["m_columns"][] = "CIUDAD";
$proto77["m_columns"][] = "DIRECCION";
$proto77["m_columns"][] = "CLASE_SANCION";
$proto77["m_columns"][] = "REMITENTE";
$proto77["m_columns"][] = "RESOLUCION_SANCION";
$proto77["m_columns"][] = "FECHA _RESOLUCION";
$proto77["m_columns"][] = "VALOR_SANCION";
$proto77["m_columns"][] = "RECAUDADO_CONSIGNACIONES";
$proto77["m_columns"][] = "RECAUDADO_TITULOS_JUDICIALES";
$proto77["m_columns"][] = "FECHA_EJECUTORIA";
$proto77["m_columns"][] = "FECHA_MANDAMIENTO_PAGO";
$proto77["m_columns"][] = "FECHA_NOTIFICACION_MANDAMIENTO";
$proto77["m_columns"][] = "ULTMA_ACTUACION";
$proto77["m_columns"][] = "FECHA_ACTUACION";
$proto77["m_columns"][] = "FECHA_PROX_ACTUACION";
$proto77["m_columns"][] = "ESTADO";
$proto77["m_columns"][] = "AUTO_CANCELACION";
$proto77["m_columns"][] = "ABOGADO";
$proto77["m_columns"][] = "ABOGADO_RESP";
$proto77["m_columns"][] = "FECHA_PRESCRIPCION";
$proto77["m_columns"][] = "DIAS FALTANTES PARA PRESCRIBIR";
$proto77["m_columns"][] = "TIEMPO_PRES";
$proto77["m_columns"][] = "OBS_PROC_PAG_SN_EXTRC";
$proto77["m_columns"][] = "ULTIMA_ACTUACION";
$proto77["m_columns"][] = "COMENTARIO_UA";
$proto77["m_columns"][] = "ACUERDO_PAGO";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "cc_coactivo";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "cc_coactivo";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_coactivo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_coactivo = createSqlQuery_cc_coactivo();


	
				;

																																			

$tdatacc_coactivo[".sqlquery"] = $queryData_cc_coactivo;



$tdatacc_coactivo[".hasEvents"] = false;

?>