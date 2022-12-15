<?php
$tdatasc_master = array();
$tdatasc_master[".searchableFields"] = array();
$tdatasc_master[".ShortName"] = "sc_master";
$tdatasc_master[".OwnerID"] = "";
$tdatasc_master[".OriginalTable"] = "sc_master";


$tdatasc_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasc_master[".originalPagesByType"] = $tdatasc_master[".pagesByType"];
$tdatasc_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasc_master[".originalPages"] = $tdatasc_master[".pages"];
$tdatasc_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasc_master[".originalDefaultPages"] = $tdatasc_master[".defaultPages"];

//	field labels
$fieldLabelssc_master = array();
$fieldToolTipssc_master = array();
$pageTitlessc_master = array();
$placeHolderssc_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssc_master["Spanish"] = array();
	$fieldToolTipssc_master["Spanish"] = array();
	$placeHolderssc_master["Spanish"] = array();
	$pageTitlessc_master["Spanish"] = array();
	$fieldLabelssc_master["Spanish"]["ordinal_id"] = "No. Interno";
	$fieldToolTipssc_master["Spanish"]["ordinal_id"] = "";
	$placeHolderssc_master["Spanish"]["ordinal_id"] = "";
	$fieldLabelssc_master["Spanish"]["procedencia"] = "Procedencia";
	$fieldToolTipssc_master["Spanish"]["procedencia"] = "";
	$placeHolderssc_master["Spanish"]["procedencia"] = "";
	$fieldLabelssc_master["Spanish"]["radicado"] = "Radicado";
	$fieldToolTipssc_master["Spanish"]["radicado"] = "";
	$placeHolderssc_master["Spanish"]["radicado"] = "";
	$fieldLabelssc_master["Spanish"]["radicado_fecha"] = "Fecha radicado";
	$fieldToolTipssc_master["Spanish"]["radicado_fecha"] = "";
	$placeHolderssc_master["Spanish"]["radicado_fecha"] = "";
	$fieldLabelssc_master["Spanish"]["recepcion_fecha"] = "Fecha recepción";
	$fieldToolTipssc_master["Spanish"]["recepcion_fecha"] = "";
	$placeHolderssc_master["Spanish"]["recepcion_fecha"] = "";
	$fieldLabelssc_master["Spanish"]["razon_social_nombre"] = "Razon Social | Nombre";
	$fieldToolTipssc_master["Spanish"]["razon_social_nombre"] = "";
	$placeHolderssc_master["Spanish"]["razon_social_nombre"] = "";
	$fieldLabelssc_master["Spanish"]["asunto"] = "Asunto";
	$fieldToolTipssc_master["Spanish"]["asunto"] = "";
	$placeHolderssc_master["Spanish"]["asunto"] = "";
	$fieldLabelssc_master["Spanish"]["asignado"] = "Asignado";
	$fieldToolTipssc_master["Spanish"]["asignado"] = "";
	$placeHolderssc_master["Spanish"]["asignado"] = "";
	$fieldLabelssc_master["Spanish"]["tipo_fk"] = "Tipo";
	$fieldToolTipssc_master["Spanish"]["tipo_fk"] = "";
	$placeHolderssc_master["Spanish"]["tipo_fk"] = "";
	$fieldLabelssc_master["Spanish"]["tema_fk"] = "Tema";
	$fieldToolTipssc_master["Spanish"]["tema_fk"] = "";
	$placeHolderssc_master["Spanish"]["tema_fk"] = "";
	$fieldLabelssc_master["Spanish"]["fecha_control"] = "Fecha Control";
	$fieldToolTipssc_master["Spanish"]["fecha_control"] = "";
	$placeHolderssc_master["Spanish"]["fecha_control"] = "";
	$fieldLabelssc_master["Spanish"]["fecha_respuesta"] = "Fecha Respuesta";
	$fieldToolTipssc_master["Spanish"]["fecha_respuesta"] = "";
	$placeHolderssc_master["Spanish"]["fecha_respuesta"] = "";
	$fieldLabelssc_master["Spanish"]["estado_entrega_fk"] = "Estado entrega";
	$fieldToolTipssc_master["Spanish"]["estado_entrega_fk"] = "";
	$placeHolderssc_master["Spanish"]["estado_entrega_fk"] = "";
	$fieldLabelssc_master["Spanish"]["observaciones"] = "Observaciones";
	$fieldToolTipssc_master["Spanish"]["observaciones"] = "";
	$placeHolderssc_master["Spanish"]["observaciones"] = "";
	$fieldLabelssc_master["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipssc_master["Spanish"]["sys_user"] = "";
	$placeHolderssc_master["Spanish"]["sys_user"] = "";
	$fieldLabelssc_master["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipssc_master["Spanish"]["sys_date"] = "";
	$placeHolderssc_master["Spanish"]["sys_date"] = "";
	$fieldLabelssc_master["Spanish"]["asignado_email"] = "Email";
	$fieldToolTipssc_master["Spanish"]["asignado_email"] = "";
	$placeHolderssc_master["Spanish"]["asignado_email"] = "";
	$fieldLabelssc_master["Spanish"]["sc_color"] = "Categoría";
	$fieldToolTipssc_master["Spanish"]["sc_color"] = "";
	$placeHolderssc_master["Spanish"]["sc_color"] = "";
	$pageTitlessc_master["Spanish"]["add"] = "Nuevo registro";
	$pageTitlessc_master["Spanish"]["edit"] = "Modificar registro [{%ordinal_id}]";
	if (count($fieldToolTipssc_master["Spanish"]))
		$tdatasc_master[".isUseToolTips"] = true;
}


	$tdatasc_master[".NCSearch"] = true;



$tdatasc_master[".shortTableName"] = "sc_master";
$tdatasc_master[".nSecOptions"] = 0;

$tdatasc_master[".mainTableOwnerID"] = "";
$tdatasc_master[".entityType"] = 0;
$tdatasc_master[".connId"] = "juridica_at_172_18_0_115";


$tdatasc_master[".strOriginalTableName"] = "sc_master";

	



$tdatasc_master[".showAddInPopup"] = false;

$tdatasc_master[".showEditInPopup"] = false;

$tdatasc_master[".showViewInPopup"] = false;

$tdatasc_master[".listAjax"] = false;
//	temporary
//$tdatasc_master[".listAjax"] = false;

	$tdatasc_master[".audit"] = false;

	$tdatasc_master[".locking"] = false;


$pages = $tdatasc_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasc_master[".edit"] = true;
	$tdatasc_master[".afterEditAction"] = 1;
	$tdatasc_master[".closePopupAfterEdit"] = 1;
	$tdatasc_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasc_master[".add"] = true;
$tdatasc_master[".afterAddAction"] = 1;
$tdatasc_master[".closePopupAfterAdd"] = 1;
$tdatasc_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasc_master[".list"] = true;
}



$tdatasc_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasc_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasc_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasc_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasc_master[".printFriendly"] = true;
}



$tdatasc_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasc_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasc_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasc_master[".isUseAjaxSuggest"] = true;

$tdatasc_master[".rowHighlite"] = true;



			

$tdatasc_master[".ajaxCodeSnippetAdded"] = false;

$tdatasc_master[".buttonsAdded"] = false;

$tdatasc_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasc_master[".isUseTimeForSearch"] = false;


$tdatasc_master[".badgeColor"] = "BC8F8F";


$tdatasc_master[".allSearchFields"] = array();
$tdatasc_master[".filterFields"] = array();
$tdatasc_master[".requiredSearchFields"] = array();

$tdatasc_master[".googleLikeFields"] = array();
$tdatasc_master[".googleLikeFields"][] = "ordinal_id";
$tdatasc_master[".googleLikeFields"][] = "procedencia";
$tdatasc_master[".googleLikeFields"][] = "radicado";
$tdatasc_master[".googleLikeFields"][] = "radicado_fecha";
$tdatasc_master[".googleLikeFields"][] = "recepcion_fecha";
$tdatasc_master[".googleLikeFields"][] = "razon_social_nombre";
$tdatasc_master[".googleLikeFields"][] = "asunto";
$tdatasc_master[".googleLikeFields"][] = "asignado";
$tdatasc_master[".googleLikeFields"][] = "asignado_email";
$tdatasc_master[".googleLikeFields"][] = "sc_color";
$tdatasc_master[".googleLikeFields"][] = "tipo_fk";
$tdatasc_master[".googleLikeFields"][] = "tema_fk";
$tdatasc_master[".googleLikeFields"][] = "fecha_control";
$tdatasc_master[".googleLikeFields"][] = "fecha_respuesta";
$tdatasc_master[".googleLikeFields"][] = "estado_entrega_fk";
$tdatasc_master[".googleLikeFields"][] = "observaciones";
$tdatasc_master[".googleLikeFields"][] = "sys_user";
$tdatasc_master[".googleLikeFields"][] = "sys_date";



$tdatasc_master[".tableType"] = "list";

$tdatasc_master[".printerPageOrientation"] = 0;
$tdatasc_master[".nPrinterPageScale"] = 100;

$tdatasc_master[".nPrinterSplitRecords"] = 40;

$tdatasc_master[".geocodingEnabled"] = false;










$tdatasc_master[".pageSize"] = 20;

$tdatasc_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasc_master[".strOrderBy"] = $tstrOrderBy;

$tdatasc_master[".orderindexes"] = array();


$tdatasc_master[".sqlHead"] = "SELECT ordinal_id,  	procedencia,  	radicado,  	radicado_fecha,  	recepcion_fecha,  	razon_social_nombre,  	asunto,  	asignado,  	asignado_email,  	sc_color,  	tipo_fk,  	tema_fk,  	fecha_control,  	fecha_respuesta,  	estado_entrega_fk,  	observaciones,  	sys_user,  	sys_date";
$tdatasc_master[".sqlFrom"] = "FROM sc_master";
$tdatasc_master[".sqlWhereExpr"] = "";
$tdatasc_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasc_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasc_master[".arrGroupsPerPage"] = $arrGPP;

$tdatasc_master[".highlightSearchResults"] = true;

$tableKeyssc_master = array();
$tableKeyssc_master[] = "ordinal_id";
$tdatasc_master[".Keys"] = $tableKeyssc_master;


$tdatasc_master[".hideMobileList"] = array();




//	ordinal_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ordinal_id";
	$fdata["GoodName"] = "ordinal_id";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","ordinal_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ordinal_id";

		$fdata["sourceSingle"] = "ordinal_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ordinal_id";

	
	
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


	$tdatasc_master["ordinal_id"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "ordinal_id";
//	procedencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "procedencia";
	$fdata["GoodName"] = "procedencia";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","procedencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "procedencia";

		$fdata["sourceSingle"] = "procedencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "procedencia";

	
	
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


	$tdatasc_master["procedencia"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "procedencia";
//	radicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "radicado";
	$fdata["GoodName"] = "radicado";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","radicado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "radicado";

		$fdata["sourceSingle"] = "radicado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "radicado";

	
	
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

	$edata = array("EditFormat" => "TagEditor");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasc_master["radicado"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "radicado";
//	radicado_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "radicado_fecha";
	$fdata["GoodName"] = "radicado_fecha";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","radicado_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "radicado_fecha";

		$fdata["sourceSingle"] = "radicado_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "radicado_fecha";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ordinal_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasc_master["radicado_fecha"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "radicado_fecha";
//	recepcion_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "recepcion_fecha";
	$fdata["GoodName"] = "recepcion_fecha";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","recepcion_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "recepcion_fecha";

		$fdata["sourceSingle"] = "recepcion_fecha";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "recepcion_fecha";

	
	
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
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "ordinal_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatasc_master["recepcion_fecha"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "recepcion_fecha";
//	razon_social_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "razon_social_nombre";
	$fdata["GoodName"] = "razon_social_nombre";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","razon_social_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "razon_social_nombre";

		$fdata["sourceSingle"] = "razon_social_nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "razon_social_nombre";

	
	
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


	$tdatasc_master["razon_social_nombre"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "razon_social_nombre";
//	asunto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "asunto";
	$fdata["GoodName"] = "asunto";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","asunto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "asunto";

		$fdata["sourceSingle"] = "asunto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asunto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 180;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatasc_master["asunto"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "asunto";
//	asignado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "asignado";
	$fdata["GoodName"] = "asignado";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","asignado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "asignado";

		$fdata["sourceSingle"] = "asignado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asignado";

	
	
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"asignado_email", 'lookupF'=>"usr_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasc_master["asignado"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "asignado";
//	asignado_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "asignado_email";
	$fdata["GoodName"] = "asignado_email";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","asignado_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "asignado_email";

		$fdata["sourceSingle"] = "asignado_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "asignado_email";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasc_master["asignado_email"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "asignado_email";
//	sc_color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sc_color";
	$fdata["GoodName"] = "sc_color";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","sc_color");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sc_color";

		$fdata["sourceSingle"] = "sc_color";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sc_color";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatasc_master["sc_color"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "sc_color";
//	tipo_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "tipo_fk";
	$fdata["GoodName"] = "tipo_fk";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","tipo_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_fk";

		$fdata["sourceSingle"] = "tipo_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_fk";

	
	
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
	$edata["LookupTable"] = "sc_tparam_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo";

	

	
	$edata["LookupOrderBy"] = "tipo";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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
		$fdata["filterTotalFields"] = "ordinal_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasc_master["tipo_fk"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "tipo_fk";
//	tema_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "tema_fk";
	$fdata["GoodName"] = "tema_fk";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","tema_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tema_fk";

		$fdata["sourceSingle"] = "tema_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tema_fk";

	
	
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
	$edata["LookupTable"] = "sc_tparam_tema";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tema_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tema";

	

	
	$edata["LookupOrderBy"] = "tema";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
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
		$fdata["filterTotalFields"] = "ordinal_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasc_master["tema_fk"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "tema_fk";
//	fecha_control
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "fecha_control";
	$fdata["GoodName"] = "fecha_control";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","fecha_control");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_control";

		$fdata["sourceSingle"] = "fecha_control";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_control";

	
	
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
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

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


	$tdatasc_master["fecha_control"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "fecha_control";
//	fecha_respuesta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_respuesta";
	$fdata["GoodName"] = "fecha_respuesta";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","fecha_respuesta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_respuesta";

		$fdata["sourceSingle"] = "fecha_respuesta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_respuesta";

	
	
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

	
	
		$edata["DateEditType"] = 2;
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


	$tdatasc_master["fecha_respuesta"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "fecha_respuesta";
//	estado_entrega_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "estado_entrega_fk";
	$fdata["GoodName"] = "estado_entrega_fk";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","estado_entrega_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "estado_entrega_fk";

		$fdata["sourceSingle"] = "estado_entrega_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_entrega_fk";

	
	
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
	$edata["LookupTable"] = "sc_tparam_estadoentrega";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_entrega_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_entrega";

	

	
	$edata["LookupOrderBy"] = "estado_entrega";

	
	
	
	

	
	
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


	$tdatasc_master["estado_entrega_fk"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "estado_entrega_fk";
//	observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "observaciones";
	$fdata["GoodName"] = "observaciones";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observaciones";

		$fdata["sourceSingle"] = "observaciones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observaciones";

	
	
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


	$tdatasc_master["observaciones"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "observaciones";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

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


	$tdatasc_master["sys_user"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "sc_master";
	$fdata["Label"] = GetFieldLabel("sc_master","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

		$fdata["sourceSingle"] = "sys_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdatasc_master["sys_date"] = $fdata;
		$tdatasc_master[".searchableFields"][] = "sys_date";


$tables_data["sc_master"]=&$tdatasc_master;
$field_labels["sc_master"] = &$fieldLabelssc_master;
$fieldToolTips["sc_master"] = &$fieldToolTipssc_master;
$placeHolders["sc_master"] = &$placeHolderssc_master;
$page_titles["sc_master"] = &$pageTitlessc_master;


changeTextControlsToDate( "sc_master" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sc_master"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sc_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sc_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ordinal_id,  	procedencia,  	radicado,  	radicado_fecha,  	recepcion_fecha,  	razon_social_nombre,  	asunto,  	asignado,  	asignado_email,  	sc_color,  	tipo_fk,  	tema_fk,  	fecha_control,  	fecha_respuesta,  	estado_entrega_fk,  	observaciones,  	sys_user,  	sys_date";
$proto0["m_strFrom"] = "FROM sc_master";
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
	"m_strName" => "ordinal_id",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto6["m_sql"] = "ordinal_id";
$proto6["m_srcTableName"] = "sc_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "procedencia",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto8["m_sql"] = "procedencia";
$proto8["m_srcTableName"] = "sc_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "radicado",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto10["m_sql"] = "radicado";
$proto10["m_srcTableName"] = "sc_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "radicado_fecha",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto12["m_sql"] = "radicado_fecha";
$proto12["m_srcTableName"] = "sc_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "recepcion_fecha",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto14["m_sql"] = "recepcion_fecha";
$proto14["m_srcTableName"] = "sc_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "razon_social_nombre",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto16["m_sql"] = "razon_social_nombre";
$proto16["m_srcTableName"] = "sc_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "asunto",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto18["m_sql"] = "asunto";
$proto18["m_srcTableName"] = "sc_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "asignado",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto20["m_sql"] = "asignado";
$proto20["m_srcTableName"] = "sc_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "asignado_email",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto22["m_sql"] = "asignado_email";
$proto22["m_srcTableName"] = "sc_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sc_color",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto24["m_sql"] = "sc_color";
$proto24["m_srcTableName"] = "sc_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_fk",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto26["m_sql"] = "tipo_fk";
$proto26["m_srcTableName"] = "sc_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "tema_fk",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto28["m_sql"] = "tema_fk";
$proto28["m_srcTableName"] = "sc_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_control",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto30["m_sql"] = "fecha_control";
$proto30["m_srcTableName"] = "sc_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_respuesta",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto32["m_sql"] = "fecha_respuesta";
$proto32["m_srcTableName"] = "sc_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_entrega_fk",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto34["m_sql"] = "estado_entrega_fk";
$proto34["m_srcTableName"] = "sc_master";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "observaciones",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto36["m_sql"] = "observaciones";
$proto36["m_srcTableName"] = "sc_master";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto38["m_sql"] = "sys_user";
$proto38["m_srcTableName"] = "sc_master";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "sc_master",
	"m_srcTableName" => "sc_master"
));

$proto40["m_sql"] = "sys_date";
$proto40["m_srcTableName"] = "sc_master";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "sc_master";
$proto43["m_srcTableName"] = "sc_master";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "ordinal_id";
$proto43["m_columns"][] = "procedencia";
$proto43["m_columns"][] = "radicado";
$proto43["m_columns"][] = "radicado_fecha";
$proto43["m_columns"][] = "recepcion_fecha";
$proto43["m_columns"][] = "razon_social_nombre";
$proto43["m_columns"][] = "asunto";
$proto43["m_columns"][] = "asignado";
$proto43["m_columns"][] = "asignado_email";
$proto43["m_columns"][] = "sc_color";
$proto43["m_columns"][] = "tipo_fk";
$proto43["m_columns"][] = "tema_fk";
$proto43["m_columns"][] = "fecha_control";
$proto43["m_columns"][] = "fecha_respuesta";
$proto43["m_columns"][] = "estado_entrega_fk";
$proto43["m_columns"][] = "observaciones";
$proto43["m_columns"][] = "sys_user";
$proto43["m_columns"][] = "sys_date";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "sc_master";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "sc_master";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sc_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sc_master = createSqlQuery_sc_master();


	
				;

																		

$tdatasc_master[".sqlquery"] = $queryData_sc_master;



$tdatasc_master[".hasEvents"] = false;

?>