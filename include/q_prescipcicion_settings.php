<?php
$tdataq_prescipcicion = array();
$tdataq_prescipcicion[".searchableFields"] = array();
$tdataq_prescipcicion[".ShortName"] = "q_prescipcicion";
$tdataq_prescipcicion[".OwnerID"] = "";
$tdataq_prescipcicion[".OriginalTable"] = "q_prescipcicion";


$tdataq_prescipcicion[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_prescipcicion[".originalPagesByType"] = $tdataq_prescipcicion[".pagesByType"];
$tdataq_prescipcicion[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_prescipcicion[".originalPages"] = $tdataq_prescipcicion[".pages"];
$tdataq_prescipcicion[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_prescipcicion[".originalDefaultPages"] = $tdataq_prescipcicion[".defaultPages"];

//	field labels
$fieldLabelsq_prescipcicion = array();
$fieldToolTipsq_prescipcicion = array();
$pageTitlesq_prescipcicion = array();
$placeHoldersq_prescipcicion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_prescipcicion["Spanish"] = array();
	$fieldToolTipsq_prescipcicion["Spanish"] = array();
	$placeHoldersq_prescipcicion["Spanish"] = array();
	$pageTitlesq_prescipcicion["Spanish"] = array();
	$fieldLabelsq_prescipcicion["Spanish"]["EXPEDIENTE"] = "Expediente";
	$fieldToolTipsq_prescipcicion["Spanish"]["EXPEDIENTE"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["EXPEDIENTE"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["NIT_CEDULA"] = "NIT";
	$fieldToolTipsq_prescipcicion["Spanish"]["NIT_CEDULA"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["NIT_CEDULA"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["NOMBRE_RAZON"] = "Nombre | Razón";
	$fieldToolTipsq_prescipcicion["Spanish"]["NOMBRE_RAZON"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["NOMBRE_RAZON"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["FECHA_PRESCRIPCION"] = "Fecha de prescripción";
	$fieldToolTipsq_prescipcicion["Spanish"]["FECHA_PRESCRIPCION"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["FECHA_PRESCRIPCION"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["dias_paraprescripcion"] = "Dias prescripcion";
	$fieldToolTipsq_prescipcicion["Spanish"]["dias_paraprescripcion"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["dias_paraprescripcion"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["MSJ"] = "Información";
	$fieldToolTipsq_prescipcicion["Spanish"]["MSJ"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["MSJ"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["ESTADO"] = "Estado";
	$fieldToolTipsq_prescipcicion["Spanish"]["ESTADO"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["ESTADO"] = "";
	$fieldLabelsq_prescipcicion["Spanish"]["ABOGADO_RESP"] = "Abogado";
	$fieldToolTipsq_prescipcicion["Spanish"]["ABOGADO_RESP"] = "";
	$placeHoldersq_prescipcicion["Spanish"]["ABOGADO_RESP"] = "";
	if (count($fieldToolTipsq_prescipcicion["Spanish"]))
		$tdataq_prescipcicion[".isUseToolTips"] = true;
}


	$tdataq_prescipcicion[".NCSearch"] = true;



$tdataq_prescipcicion[".shortTableName"] = "q_prescipcicion";
$tdataq_prescipcicion[".nSecOptions"] = 0;

$tdataq_prescipcicion[".mainTableOwnerID"] = "";
$tdataq_prescipcicion[".entityType"] = 0;
$tdataq_prescipcicion[".connId"] = "juridica_at_172_18_0_115";


$tdataq_prescipcicion[".strOriginalTableName"] = "q_prescipcicion";

	



$tdataq_prescipcicion[".showAddInPopup"] = false;

$tdataq_prescipcicion[".showEditInPopup"] = false;

$tdataq_prescipcicion[".showViewInPopup"] = false;

$tdataq_prescipcicion[".listAjax"] = false;
//	temporary
//$tdataq_prescipcicion[".listAjax"] = false;

	$tdataq_prescipcicion[".audit"] = false;

	$tdataq_prescipcicion[".locking"] = false;


$pages = $tdataq_prescipcicion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_prescipcicion[".edit"] = true;
	$tdataq_prescipcicion[".afterEditAction"] = 1;
	$tdataq_prescipcicion[".closePopupAfterEdit"] = 1;
	$tdataq_prescipcicion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_prescipcicion[".add"] = true;
$tdataq_prescipcicion[".afterAddAction"] = 1;
$tdataq_prescipcicion[".closePopupAfterAdd"] = 1;
$tdataq_prescipcicion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_prescipcicion[".list"] = true;
}



$tdataq_prescipcicion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_prescipcicion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_prescipcicion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_prescipcicion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_prescipcicion[".printFriendly"] = true;
}



$tdataq_prescipcicion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_prescipcicion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_prescipcicion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_prescipcicion[".isUseAjaxSuggest"] = true;

$tdataq_prescipcicion[".rowHighlite"] = true;



			

$tdataq_prescipcicion[".ajaxCodeSnippetAdded"] = false;

$tdataq_prescipcicion[".buttonsAdded"] = false;

$tdataq_prescipcicion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_prescipcicion[".isUseTimeForSearch"] = false;


$tdataq_prescipcicion[".badgeColor"] = "E67349";


$tdataq_prescipcicion[".allSearchFields"] = array();
$tdataq_prescipcicion[".filterFields"] = array();
$tdataq_prescipcicion[".requiredSearchFields"] = array();

$tdataq_prescipcicion[".googleLikeFields"] = array();
$tdataq_prescipcicion[".googleLikeFields"][] = "EXPEDIENTE";
$tdataq_prescipcicion[".googleLikeFields"][] = "NIT_CEDULA";
$tdataq_prescipcicion[".googleLikeFields"][] = "NOMBRE_RAZON";
$tdataq_prescipcicion[".googleLikeFields"][] = "FECHA_PRESCRIPCION";
$tdataq_prescipcicion[".googleLikeFields"][] = "dias_paraprescripcion";
$tdataq_prescipcicion[".googleLikeFields"][] = "MSJ";
$tdataq_prescipcicion[".googleLikeFields"][] = "ESTADO";
$tdataq_prescipcicion[".googleLikeFields"][] = "ABOGADO_RESP";



$tdataq_prescipcicion[".tableType"] = "list";

$tdataq_prescipcicion[".printerPageOrientation"] = 0;
$tdataq_prescipcicion[".nPrinterPageScale"] = 100;

$tdataq_prescipcicion[".nPrinterSplitRecords"] = 40;

$tdataq_prescipcicion[".geocodingEnabled"] = false;




$tdataq_prescipcicion[".isDisplayLoading"] = true;






$tdataq_prescipcicion[".pageSize"] = 20;

$tdataq_prescipcicion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_prescipcicion[".strOrderBy"] = $tstrOrderBy;

$tdataq_prescipcicion[".orderindexes"] = array();


$tdataq_prescipcicion[".sqlHead"] = "SELECT EXPEDIENTE,  NIT_CEDULA,  NOMBRE_RAZON,  FECHA_PRESCRIPCION,  dias_paraprescripcion,  CASE      WHEN dias_paraprescripcion >= 0 THEN concat('Faltan ',dias_paraprescripcion,' días para la prescripción')      WHEN dias_paraprescripcion < 0 THEN \"El expediente prescribió\"      ELSE \"No existe información\"  END AS MSJ,  ESTADO,  ABOGADO_RESP";
$tdataq_prescipcicion[".sqlFrom"] = "FROM q_prescipcicion";
$tdataq_prescipcicion[".sqlWhereExpr"] = "";
$tdataq_prescipcicion[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "0",
	'name' => "Activos",
	'nameType' => 'Text',
	'where' => "ESTADO = 2",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Terminados",
	'nameType' => 'Text',
	'where' => "ESTADO = 4",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdataq_prescipcicion[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_prescipcicion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_prescipcicion[".arrGroupsPerPage"] = $arrGPP;

$tdataq_prescipcicion[".highlightSearchResults"] = true;

$tableKeysq_prescipcicion = array();
$tableKeysq_prescipcicion[] = "EXPEDIENTE";
$tdataq_prescipcicion[".Keys"] = $tableKeysq_prescipcicion;


$tdataq_prescipcicion[".hideMobileList"] = array();




//	EXPEDIENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "EXPEDIENTE";
	$fdata["GoodName"] = "EXPEDIENTE";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","EXPEDIENTE");
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


	$tdataq_prescipcicion["EXPEDIENTE"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "EXPEDIENTE";
//	NIT_CEDULA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NIT_CEDULA";
	$fdata["GoodName"] = "NIT_CEDULA";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","NIT_CEDULA");
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


	$tdataq_prescipcicion["NIT_CEDULA"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "NIT_CEDULA";
//	NOMBRE_RAZON
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NOMBRE_RAZON";
	$fdata["GoodName"] = "NOMBRE_RAZON";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","NOMBRE_RAZON");
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


	$tdataq_prescipcicion["NOMBRE_RAZON"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "NOMBRE_RAZON";
//	FECHA_PRESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "FECHA_PRESCRIPCION";
	$fdata["GoodName"] = "FECHA_PRESCRIPCION";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","FECHA_PRESCRIPCION");
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
		$fdata["filterTotalFields"] = "dias_paraprescripcion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdataq_prescipcicion["FECHA_PRESCRIPCION"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "FECHA_PRESCRIPCION";
//	dias_paraprescripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dias_paraprescripcion";
	$fdata["GoodName"] = "dias_paraprescripcion";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","dias_paraprescripcion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_paraprescripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_paraprescripcion";

	
	
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


	$tdataq_prescipcicion["dias_paraprescripcion"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "dias_paraprescripcion";
//	MSJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MSJ";
	$fdata["GoodName"] = "MSJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","MSJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MSJ";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE      WHEN dias_paraprescripcion >= 0 THEN concat('Faltan ',dias_paraprescripcion,' días para la prescripción')      WHEN dias_paraprescripcion < 0 THEN \"El expediente prescribió\"      ELSE \"No existe información\"  END";

	
	
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


	$tdataq_prescipcicion["MSJ"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "MSJ";
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","ESTADO");
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
	$edata["LinkFieldType"] = 0;
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_prescipcicion["ESTADO"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "ESTADO";
//	ABOGADO_RESP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ABOGADO_RESP";
	$fdata["GoodName"] = "ABOGADO_RESP";
	$fdata["ownerTable"] = "q_prescipcicion";
	$fdata["Label"] = GetFieldLabel("q_prescipcicion","ABOGADO_RESP");
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
		$fdata["filterTotalFields"] = "dias_paraprescripcion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_prescipcicion["ABOGADO_RESP"] = $fdata;
		$tdataq_prescipcicion[".searchableFields"][] = "ABOGADO_RESP";


$tables_data["q_prescipcicion"]=&$tdataq_prescipcicion;
$field_labels["q_prescipcicion"] = &$fieldLabelsq_prescipcicion;
$fieldToolTips["q_prescipcicion"] = &$fieldToolTipsq_prescipcicion;
$placeHolders["q_prescipcicion"] = &$placeHoldersq_prescipcicion;
$page_titles["q_prescipcicion"] = &$pageTitlesq_prescipcicion;


changeTextControlsToDate( "q_prescipcicion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_prescipcicion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_prescipcicion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_prescipcicion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "EXPEDIENTE,  NIT_CEDULA,  NOMBRE_RAZON,  FECHA_PRESCRIPCION,  dias_paraprescripcion,  CASE      WHEN dias_paraprescripcion >= 0 THEN concat('Faltan ',dias_paraprescripcion,' días para la prescripción')      WHEN dias_paraprescripcion < 0 THEN \"El expediente prescribió\"      ELSE \"No existe información\"  END AS MSJ,  ESTADO,  ABOGADO_RESP";
$proto0["m_strFrom"] = "FROM q_prescipcicion";
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
	"m_strName" => "EXPEDIENTE",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto6["m_sql"] = "EXPEDIENTE";
$proto6["m_srcTableName"] = "q_prescipcicion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NIT_CEDULA",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto8["m_sql"] = "NIT_CEDULA";
$proto8["m_srcTableName"] = "q_prescipcicion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NOMBRE_RAZON",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto10["m_sql"] = "NOMBRE_RAZON";
$proto10["m_srcTableName"] = "q_prescipcicion";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHA_PRESCRIPCION",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto12["m_sql"] = "FECHA_PRESCRIPCION";
$proto12["m_srcTableName"] = "q_prescipcicion";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_paraprescripcion",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto14["m_sql"] = "dias_paraprescripcion";
$proto14["m_srcTableName"] = "q_prescipcicion";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE      WHEN dias_paraprescripcion >= 0 THEN concat('Faltan ',dias_paraprescripcion,' días para la prescripción')      WHEN dias_paraprescripcion < 0 THEN \"El expediente prescribió\"      ELSE \"No existe información\"  END"
));

$proto16["m_sql"] = "CASE      WHEN dias_paraprescripcion >= 0 THEN concat('Faltan ',dias_paraprescripcion,' días para la prescripción')      WHEN dias_paraprescripcion < 0 THEN \"El expediente prescribió\"      ELSE \"No existe información\"  END";
$proto16["m_srcTableName"] = "q_prescipcicion";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "MSJ";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto18["m_sql"] = "ESTADO";
$proto18["m_srcTableName"] = "q_prescipcicion";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ABOGADO_RESP",
	"m_strTable" => "q_prescipcicion",
	"m_srcTableName" => "q_prescipcicion"
));

$proto20["m_sql"] = "ABOGADO_RESP";
$proto20["m_srcTableName"] = "q_prescipcicion";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "q_prescipcicion";
$proto23["m_srcTableName"] = "q_prescipcicion";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "EXPEDIENTE";
$proto23["m_columns"][] = "NIT_CEDULA";
$proto23["m_columns"][] = "NOMBRE_RAZON";
$proto23["m_columns"][] = "FECHA_PRESCRIPCION";
$proto23["m_columns"][] = "dias_paraprescripcion";
$proto23["m_columns"][] = "ESTADO";
$proto23["m_columns"][] = "ABOGADO_RESP";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "q_prescipcicion";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "q_prescipcicion";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_prescipcicion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_prescipcicion = createSqlQuery_q_prescipcicion();


	
				;

								

$tdataq_prescipcicion[".sqlquery"] = $queryData_q_prescipcicion;



include_once(getabspath("include/q_prescipcicion_events.php"));
$tdataq_prescipcicion[".hasEvents"] = true;

?>