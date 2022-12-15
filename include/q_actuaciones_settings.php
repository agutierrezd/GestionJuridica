<?php
$tdataq_actuaciones = array();
$tdataq_actuaciones[".searchableFields"] = array();
$tdataq_actuaciones[".ShortName"] = "q_actuaciones";
$tdataq_actuaciones[".OwnerID"] = "";
$tdataq_actuaciones[".OriginalTable"] = "q_actuaciones";


$tdataq_actuaciones[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_actuaciones[".originalPagesByType"] = $tdataq_actuaciones[".pagesByType"];
$tdataq_actuaciones[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_actuaciones[".originalPages"] = $tdataq_actuaciones[".pages"];
$tdataq_actuaciones[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_actuaciones[".originalDefaultPages"] = $tdataq_actuaciones[".defaultPages"];

//	field labels
$fieldLabelsq_actuaciones = array();
$fieldToolTipsq_actuaciones = array();
$pageTitlesq_actuaciones = array();
$placeHoldersq_actuaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_actuaciones["Spanish"] = array();
	$fieldToolTipsq_actuaciones["Spanish"] = array();
	$placeHoldersq_actuaciones["Spanish"] = array();
	$pageTitlesq_actuaciones["Spanish"] = array();
	$fieldLabelsq_actuaciones["Spanish"]["actuacion_id"] = "Actuacion Id";
	$fieldToolTipsq_actuaciones["Spanish"]["actuacion_id"] = "";
	$placeHoldersq_actuaciones["Spanish"]["actuacion_id"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["proxima_actuacion"] = "Proxima Actuacion";
	$fieldToolTipsq_actuaciones["Spanish"]["proxima_actuacion"] = "";
	$placeHoldersq_actuaciones["Spanish"]["proxima_actuacion"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["fproxima_actuacion"] = "Fecha de próxima actuación";
	$fieldToolTipsq_actuaciones["Spanish"]["fproxima_actuacion"] = "";
	$placeHoldersq_actuaciones["Spanish"]["fproxima_actuacion"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["dias_proxima_actuacion"] = "Dias Proxima Actuacion";
	$fieldToolTipsq_actuaciones["Spanish"]["dias_proxima_actuacion"] = "";
	$placeHoldersq_actuaciones["Spanish"]["dias_proxima_actuacion"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["ULTIMA_ACTUACION"] = "Fecha de última actuación";
	$fieldToolTipsq_actuaciones["Spanish"]["ULTIMA_ACTUACION"] = "";
	$placeHoldersq_actuaciones["Spanish"]["ULTIMA_ACTUACION"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["EXPEDIENTE"] = "Expediente";
	$fieldToolTipsq_actuaciones["Spanish"]["EXPEDIENTE"] = "";
	$placeHoldersq_actuaciones["Spanish"]["EXPEDIENTE"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["NOMBRE_RAZON"] = "Nombre | Razón";
	$fieldToolTipsq_actuaciones["Spanish"]["NOMBRE_RAZON"] = "";
	$placeHoldersq_actuaciones["Spanish"]["NOMBRE_RAZON"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["MSJ"] = "Información";
	$fieldToolTipsq_actuaciones["Spanish"]["MSJ"] = "";
	$placeHoldersq_actuaciones["Spanish"]["MSJ"] = "";
	$fieldLabelsq_actuaciones["Spanish"]["ABOGADO_RESP"] = "Abogado";
	$fieldToolTipsq_actuaciones["Spanish"]["ABOGADO_RESP"] = "";
	$placeHoldersq_actuaciones["Spanish"]["ABOGADO_RESP"] = "";
	if (count($fieldToolTipsq_actuaciones["Spanish"]))
		$tdataq_actuaciones[".isUseToolTips"] = true;
}


	$tdataq_actuaciones[".NCSearch"] = true;



$tdataq_actuaciones[".shortTableName"] = "q_actuaciones";
$tdataq_actuaciones[".nSecOptions"] = 0;

$tdataq_actuaciones[".mainTableOwnerID"] = "";
$tdataq_actuaciones[".entityType"] = 0;
$tdataq_actuaciones[".connId"] = "juridica_at_172_18_0_115";


$tdataq_actuaciones[".strOriginalTableName"] = "q_actuaciones";

	



$tdataq_actuaciones[".showAddInPopup"] = false;

$tdataq_actuaciones[".showEditInPopup"] = false;

$tdataq_actuaciones[".showViewInPopup"] = false;

$tdataq_actuaciones[".listAjax"] = false;
//	temporary
//$tdataq_actuaciones[".listAjax"] = false;

	$tdataq_actuaciones[".audit"] = false;

	$tdataq_actuaciones[".locking"] = false;


$pages = $tdataq_actuaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_actuaciones[".edit"] = true;
	$tdataq_actuaciones[".afterEditAction"] = 1;
	$tdataq_actuaciones[".closePopupAfterEdit"] = 1;
	$tdataq_actuaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_actuaciones[".add"] = true;
$tdataq_actuaciones[".afterAddAction"] = 1;
$tdataq_actuaciones[".closePopupAfterAdd"] = 1;
$tdataq_actuaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_actuaciones[".list"] = true;
}



$tdataq_actuaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_actuaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_actuaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_actuaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_actuaciones[".printFriendly"] = true;
}



$tdataq_actuaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_actuaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_actuaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_actuaciones[".isUseAjaxSuggest"] = true;

$tdataq_actuaciones[".rowHighlite"] = true;



			

$tdataq_actuaciones[".ajaxCodeSnippetAdded"] = false;

$tdataq_actuaciones[".buttonsAdded"] = false;

$tdataq_actuaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_actuaciones[".isUseTimeForSearch"] = false;


$tdataq_actuaciones[".badgeColor"] = "DC143C";


$tdataq_actuaciones[".allSearchFields"] = array();
$tdataq_actuaciones[".filterFields"] = array();
$tdataq_actuaciones[".requiredSearchFields"] = array();

$tdataq_actuaciones[".googleLikeFields"] = array();
$tdataq_actuaciones[".googleLikeFields"][] = "actuacion_id";
$tdataq_actuaciones[".googleLikeFields"][] = "proxima_actuacion";
$tdataq_actuaciones[".googleLikeFields"][] = "fproxima_actuacion";
$tdataq_actuaciones[".googleLikeFields"][] = "dias_proxima_actuacion";
$tdataq_actuaciones[".googleLikeFields"][] = "MSJ";
$tdataq_actuaciones[".googleLikeFields"][] = "ULTIMA_ACTUACION";
$tdataq_actuaciones[".googleLikeFields"][] = "NOMBRE_RAZON";
$tdataq_actuaciones[".googleLikeFields"][] = "EXPEDIENTE";
$tdataq_actuaciones[".googleLikeFields"][] = "ABOGADO_RESP";



$tdataq_actuaciones[".tableType"] = "list";

$tdataq_actuaciones[".printerPageOrientation"] = 0;
$tdataq_actuaciones[".nPrinterPageScale"] = 100;

$tdataq_actuaciones[".nPrinterSplitRecords"] = 40;

$tdataq_actuaciones[".geocodingEnabled"] = false;




$tdataq_actuaciones[".isDisplayLoading"] = true;






$tdataq_actuaciones[".pageSize"] = 20;

$tdataq_actuaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY fproxima_actuacion";
$tdataq_actuaciones[".strOrderBy"] = $tstrOrderBy;

$tdataq_actuaciones[".orderindexes"] = array();
	$tdataq_actuaciones[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "fproxima_actuacion");



$tdataq_actuaciones[".sqlHead"] = "SELECT actuacion_id,  proxima_actuacion,  fproxima_actuacion,  dias_proxima_actuacion,  CASE      WHEN dias_proxima_actuacion >= 0 THEN concat('Faltan ',dias_proxima_actuacion,' dias para la próxima actuación')      WHEN dias_proxima_actuacion < 0 THEN \"fecha de actuación ha vencido\"      ELSE \"No existe información\"  END AS MSJ,  ULTIMA_ACTUACION,  NOMBRE_RAZON,  EXPEDIENTE,  ABOGADO_RESP";
$tdataq_actuaciones[".sqlFrom"] = "FROM q_actuaciones";
$tdataq_actuaciones[".sqlWhereExpr"] = "";
$tdataq_actuaciones[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "Activas",
	'nameType' => 'Text',
	'where' => "dias_proxima_actuacion >=0",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Vencidas",
	'nameType' => 'Text',
	'where' => "dias_proxima_actuacion < 0",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataq_actuaciones[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_actuaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_actuaciones[".arrGroupsPerPage"] = $arrGPP;

$tdataq_actuaciones[".highlightSearchResults"] = true;

$tableKeysq_actuaciones = array();
$tableKeysq_actuaciones[] = "actuacion_id";
$tdataq_actuaciones[".Keys"] = $tableKeysq_actuaciones;


$tdataq_actuaciones[".hideMobileList"] = array();




//	actuacion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "actuacion_id";
	$fdata["GoodName"] = "actuacion_id";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","actuacion_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "actuacion_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actuacion_id";

	
	
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


	$tdataq_actuaciones["actuacion_id"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "actuacion_id";
//	proxima_actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "proxima_actuacion";
	$fdata["GoodName"] = "proxima_actuacion";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","proxima_actuacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "proxima_actuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "proxima_actuacion";

	
	
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


	$tdataq_actuaciones["proxima_actuacion"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "proxima_actuacion";
//	fproxima_actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "fproxima_actuacion";
	$fdata["GoodName"] = "fproxima_actuacion";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","fproxima_actuacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fproxima_actuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fproxima_actuacion";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "actuacion_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdataq_actuaciones["fproxima_actuacion"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "fproxima_actuacion";
//	dias_proxima_actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "dias_proxima_actuacion";
	$fdata["GoodName"] = "dias_proxima_actuacion";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","dias_proxima_actuacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_proxima_actuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_proxima_actuacion";

	
	
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


	$tdataq_actuaciones["dias_proxima_actuacion"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "dias_proxima_actuacion";
//	MSJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MSJ";
	$fdata["GoodName"] = "MSJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","MSJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MSJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE      WHEN dias_proxima_actuacion >= 0 THEN concat('Faltan ',dias_proxima_actuacion,' dias para la próxima actuación')      WHEN dias_proxima_actuacion < 0 THEN \"fecha de actuación ha vencido\"      ELSE \"No existe información\"  END";

	
	
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


	$tdataq_actuaciones["MSJ"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "MSJ";
//	ULTIMA_ACTUACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ULTIMA_ACTUACION";
	$fdata["GoodName"] = "ULTIMA_ACTUACION";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","ULTIMA_ACTUACION");
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


	$tdataq_actuaciones["ULTIMA_ACTUACION"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "ULTIMA_ACTUACION";
//	NOMBRE_RAZON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "NOMBRE_RAZON";
	$fdata["GoodName"] = "NOMBRE_RAZON";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","NOMBRE_RAZON");
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


	$tdataq_actuaciones["NOMBRE_RAZON"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "NOMBRE_RAZON";
//	EXPEDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EXPEDIENTE";
	$fdata["GoodName"] = "EXPEDIENTE";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","EXPEDIENTE");
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


	$tdataq_actuaciones["EXPEDIENTE"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "EXPEDIENTE";
//	ABOGADO_RESP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ABOGADO_RESP";
	$fdata["GoodName"] = "ABOGADO_RESP";
	$fdata["ownerTable"] = "q_actuaciones";
	$fdata["Label"] = GetFieldLabel("q_actuaciones","ABOGADO_RESP");
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "actuacion_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_actuaciones["ABOGADO_RESP"] = $fdata;
		$tdataq_actuaciones[".searchableFields"][] = "ABOGADO_RESP";


$tables_data["q_actuaciones"]=&$tdataq_actuaciones;
$field_labels["q_actuaciones"] = &$fieldLabelsq_actuaciones;
$fieldToolTips["q_actuaciones"] = &$fieldToolTipsq_actuaciones;
$placeHolders["q_actuaciones"] = &$placeHoldersq_actuaciones;
$page_titles["q_actuaciones"] = &$pageTitlesq_actuaciones;


changeTextControlsToDate( "q_actuaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_actuaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_actuaciones"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_actuaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "actuacion_id,  proxima_actuacion,  fproxima_actuacion,  dias_proxima_actuacion,  CASE      WHEN dias_proxima_actuacion >= 0 THEN concat('Faltan ',dias_proxima_actuacion,' dias para la próxima actuación')      WHEN dias_proxima_actuacion < 0 THEN \"fecha de actuación ha vencido\"      ELSE \"No existe información\"  END AS MSJ,  ULTIMA_ACTUACION,  NOMBRE_RAZON,  EXPEDIENTE,  ABOGADO_RESP";
$proto0["m_strFrom"] = "FROM q_actuaciones";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY fproxima_actuacion";
	
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
	"m_strName" => "actuacion_id",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto6["m_sql"] = "actuacion_id";
$proto6["m_srcTableName"] = "q_actuaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "proxima_actuacion",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto8["m_sql"] = "proxima_actuacion";
$proto8["m_srcTableName"] = "q_actuaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "fproxima_actuacion",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto10["m_sql"] = "fproxima_actuacion";
$proto10["m_srcTableName"] = "q_actuaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_proxima_actuacion",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto12["m_sql"] = "dias_proxima_actuacion";
$proto12["m_srcTableName"] = "q_actuaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE      WHEN dias_proxima_actuacion >= 0 THEN concat('Faltan ',dias_proxima_actuacion,' dias para la próxima actuación')      WHEN dias_proxima_actuacion < 0 THEN \"fecha de actuación ha vencido\"      ELSE \"No existe información\"  END"
));

$proto14["m_sql"] = "CASE      WHEN dias_proxima_actuacion >= 0 THEN concat('Faltan ',dias_proxima_actuacion,' dias para la próxima actuación')      WHEN dias_proxima_actuacion < 0 THEN \"fecha de actuación ha vencido\"      ELSE \"No existe información\"  END";
$proto14["m_srcTableName"] = "q_actuaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "MSJ";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ULTIMA_ACTUACION",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto16["m_sql"] = "ULTIMA_ACTUACION";
$proto16["m_srcTableName"] = "q_actuaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_RAZON",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto18["m_sql"] = "NOMBRE_RAZON";
$proto18["m_srcTableName"] = "q_actuaciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EXPEDIENTE",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto20["m_sql"] = "EXPEDIENTE";
$proto20["m_srcTableName"] = "q_actuaciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "ABOGADO_RESP",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto22["m_sql"] = "ABOGADO_RESP";
$proto22["m_srcTableName"] = "q_actuaciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "q_actuaciones";
$proto25["m_srcTableName"] = "q_actuaciones";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "actuacion_id";
$proto25["m_columns"][] = "proxima_actuacion";
$proto25["m_columns"][] = "fproxima_actuacion";
$proto25["m_columns"][] = "dias_proxima_actuacion";
$proto25["m_columns"][] = "ULTIMA_ACTUACION";
$proto25["m_columns"][] = "dias_desdeultimaactuacion";
$proto25["m_columns"][] = "FECHA_PRESCRIPCION";
$proto25["m_columns"][] = "diasfaltantes_prescripcion";
$proto25["m_columns"][] = "EXPEDIENTE";
$proto25["m_columns"][] = "NOMBRE_RAZON";
$proto25["m_columns"][] = "ABOGADO_RESP";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "q_actuaciones";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "q_actuaciones";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "fproxima_actuacion",
	"m_strTable" => "q_actuaciones",
	"m_srcTableName" => "q_actuaciones"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 1;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="q_actuaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_actuaciones = createSqlQuery_q_actuaciones();


	
				;

									

$tdataq_actuaciones[".sqlquery"] = $queryData_q_actuaciones;



include_once(getabspath("include/q_actuaciones_events.php"));
$tdataq_actuaciones[".hasEvents"] = true;

?>