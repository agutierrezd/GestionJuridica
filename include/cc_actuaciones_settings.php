<?php
$tdatacc_actuaciones = array();
$tdatacc_actuaciones[".searchableFields"] = array();
$tdatacc_actuaciones[".ShortName"] = "cc_actuaciones";
$tdatacc_actuaciones[".OwnerID"] = "";
$tdatacc_actuaciones[".OriginalTable"] = "cc_actuaciones";


$tdatacc_actuaciones[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_actuaciones[".originalPagesByType"] = $tdatacc_actuaciones[".pagesByType"];
$tdatacc_actuaciones[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_actuaciones[".originalPages"] = $tdatacc_actuaciones[".pages"];
$tdatacc_actuaciones[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_actuaciones[".originalDefaultPages"] = $tdatacc_actuaciones[".defaultPages"];

//	field labels
$fieldLabelscc_actuaciones = array();
$fieldToolTipscc_actuaciones = array();
$pageTitlescc_actuaciones = array();
$placeHolderscc_actuaciones = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_actuaciones["Spanish"] = array();
	$fieldToolTipscc_actuaciones["Spanish"] = array();
	$placeHolderscc_actuaciones["Spanish"] = array();
	$pageTitlescc_actuaciones["Spanish"] = array();
	$fieldLabelscc_actuaciones["Spanish"]["actuacion_id"] = "Actuacion Id";
	$fieldToolTipscc_actuaciones["Spanish"]["actuacion_id"] = "";
	$placeHolderscc_actuaciones["Spanish"]["actuacion_id"] = "";
	$fieldLabelscc_actuaciones["Spanish"]["CC_ID_FK"] = "CC ID FK";
	$fieldToolTipscc_actuaciones["Spanish"]["CC_ID_FK"] = "";
	$placeHolderscc_actuaciones["Spanish"]["CC_ID_FK"] = "";
	$fieldLabelscc_actuaciones["Spanish"]["proxima_actuacion"] = "Proxima Actuación";
	$fieldToolTipscc_actuaciones["Spanish"]["proxima_actuacion"] = "";
	$placeHolderscc_actuaciones["Spanish"]["proxima_actuacion"] = "";
	$fieldLabelscc_actuaciones["Spanish"]["fecha_actuacion"] = "Fecha de próxima actuación";
	$fieldToolTipscc_actuaciones["Spanish"]["fecha_actuacion"] = "";
	$placeHolderscc_actuaciones["Spanish"]["fecha_actuacion"] = "";
	$fieldLabelscc_actuaciones["Spanish"]["sys_last_date"] = "Fecha registro";
	$fieldToolTipscc_actuaciones["Spanish"]["sys_last_date"] = "";
	$placeHolderscc_actuaciones["Spanish"]["sys_last_date"] = "";
	$fieldLabelscc_actuaciones["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipscc_actuaciones["Spanish"]["sys_user"] = "";
	$placeHolderscc_actuaciones["Spanish"]["sys_user"] = "";
	if (count($fieldToolTipscc_actuaciones["Spanish"]))
		$tdatacc_actuaciones[".isUseToolTips"] = true;
}


	$tdatacc_actuaciones[".NCSearch"] = true;



$tdatacc_actuaciones[".shortTableName"] = "cc_actuaciones";
$tdatacc_actuaciones[".nSecOptions"] = 0;

$tdatacc_actuaciones[".mainTableOwnerID"] = "";
$tdatacc_actuaciones[".entityType"] = 0;
$tdatacc_actuaciones[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_actuaciones[".strOriginalTableName"] = "cc_actuaciones";

	



$tdatacc_actuaciones[".showAddInPopup"] = false;

$tdatacc_actuaciones[".showEditInPopup"] = false;

$tdatacc_actuaciones[".showViewInPopup"] = false;

$tdatacc_actuaciones[".listAjax"] = false;
//	temporary
//$tdatacc_actuaciones[".listAjax"] = false;

	$tdatacc_actuaciones[".audit"] = false;

	$tdatacc_actuaciones[".locking"] = false;


$pages = $tdatacc_actuaciones[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_actuaciones[".edit"] = true;
	$tdatacc_actuaciones[".afterEditAction"] = 1;
	$tdatacc_actuaciones[".closePopupAfterEdit"] = 1;
	$tdatacc_actuaciones[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_actuaciones[".add"] = true;
$tdatacc_actuaciones[".afterAddAction"] = 1;
$tdatacc_actuaciones[".closePopupAfterAdd"] = 1;
$tdatacc_actuaciones[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_actuaciones[".list"] = true;
}



$tdatacc_actuaciones[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_actuaciones[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_actuaciones[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_actuaciones[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_actuaciones[".printFriendly"] = true;
}



$tdatacc_actuaciones[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_actuaciones[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_actuaciones[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_actuaciones[".isUseAjaxSuggest"] = true;

$tdatacc_actuaciones[".rowHighlite"] = true;



						

$tdatacc_actuaciones[".ajaxCodeSnippetAdded"] = false;

$tdatacc_actuaciones[".buttonsAdded"] = false;

$tdatacc_actuaciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_actuaciones[".isUseTimeForSearch"] = false;


$tdatacc_actuaciones[".badgeColor"] = "9acd32";


$tdatacc_actuaciones[".allSearchFields"] = array();
$tdatacc_actuaciones[".filterFields"] = array();
$tdatacc_actuaciones[".requiredSearchFields"] = array();

$tdatacc_actuaciones[".googleLikeFields"] = array();
$tdatacc_actuaciones[".googleLikeFields"][] = "actuacion_id";
$tdatacc_actuaciones[".googleLikeFields"][] = "CC_ID_FK";
$tdatacc_actuaciones[".googleLikeFields"][] = "proxima_actuacion";
$tdatacc_actuaciones[".googleLikeFields"][] = "fecha_actuacion";
$tdatacc_actuaciones[".googleLikeFields"][] = "sys_last_date";
$tdatacc_actuaciones[".googleLikeFields"][] = "sys_user";



$tdatacc_actuaciones[".tableType"] = "list";

$tdatacc_actuaciones[".printerPageOrientation"] = 0;
$tdatacc_actuaciones[".nPrinterPageScale"] = 100;

$tdatacc_actuaciones[".nPrinterSplitRecords"] = 40;

$tdatacc_actuaciones[".geocodingEnabled"] = false;










$tdatacc_actuaciones[".pageSize"] = 20;

$tdatacc_actuaciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_actuaciones[".strOrderBy"] = $tstrOrderBy;

$tdatacc_actuaciones[".orderindexes"] = array();


$tdatacc_actuaciones[".sqlHead"] = "SELECT actuacion_id,  	CC_ID_FK,  	proxima_actuacion,  	fecha_actuacion,  	sys_last_date,  	sys_user";
$tdatacc_actuaciones[".sqlFrom"] = "FROM cc_actuaciones";
$tdatacc_actuaciones[".sqlWhereExpr"] = "";
$tdatacc_actuaciones[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_actuaciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_actuaciones[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_actuaciones[".highlightSearchResults"] = true;

$tableKeyscc_actuaciones = array();
$tableKeyscc_actuaciones[] = "actuacion_id";
$tdatacc_actuaciones[".Keys"] = $tableKeyscc_actuaciones;


$tdatacc_actuaciones[".hideMobileList"] = array();




//	actuacion_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "actuacion_id";
	$fdata["GoodName"] = "actuacion_id";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","actuacion_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatacc_actuaciones["actuacion_id"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "actuacion_id";
//	CC_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CC_ID_FK";
	$fdata["GoodName"] = "CC_ID_FK";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","CC_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CC_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CC_ID_FK";

	
	
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


	$tdatacc_actuaciones["CC_ID_FK"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "CC_ID_FK";
//	proxima_actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "proxima_actuacion";
	$fdata["GoodName"] = "proxima_actuacion";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","proxima_actuacion");
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


	$tdatacc_actuaciones["proxima_actuacion"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "proxima_actuacion";
//	fecha_actuacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_actuacion";
	$fdata["GoodName"] = "fecha_actuacion";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","fecha_actuacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_actuacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_actuacion";

	
	
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
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_actuaciones["fecha_actuacion"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "fecha_actuacion";
//	sys_last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_last_date";
	$fdata["GoodName"] = "sys_last_date";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","sys_last_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_last_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_date";

	
	
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


	$tdatacc_actuaciones["sys_last_date"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "sys_last_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "cc_actuaciones";
	$fdata["Label"] = GetFieldLabel("cc_actuaciones","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
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
		$fdata["filterTotalFields"] = "actuacion_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacc_actuaciones["sys_user"] = $fdata;
		$tdatacc_actuaciones[".searchableFields"][] = "sys_user";


$tables_data["cc_actuaciones"]=&$tdatacc_actuaciones;
$field_labels["cc_actuaciones"] = &$fieldLabelscc_actuaciones;
$fieldToolTips["cc_actuaciones"] = &$fieldToolTipscc_actuaciones;
$placeHolders["cc_actuaciones"] = &$placeHolderscc_actuaciones;
$page_titles["cc_actuaciones"] = &$pageTitlescc_actuaciones;


changeTextControlsToDate( "cc_actuaciones" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_actuaciones"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_actuaciones"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cc_coactivo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cc_coactivo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cc_coactivo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cc_actuaciones"][0] = $masterParams;
				$masterTablesData["cc_actuaciones"][0]["masterKeys"] = array();
	$masterTablesData["cc_actuaciones"][0]["masterKeys"][]="CC_ID";
				$masterTablesData["cc_actuaciones"][0]["detailKeys"] = array();
	$masterTablesData["cc_actuaciones"][0]["detailKeys"][]="CC_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_actuaciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "actuacion_id,  	CC_ID_FK,  	proxima_actuacion,  	fecha_actuacion,  	sys_last_date,  	sys_user";
$proto0["m_strFrom"] = "FROM cc_actuaciones";
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
	"m_strName" => "actuacion_id",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto6["m_sql"] = "actuacion_id";
$proto6["m_srcTableName"] = "cc_actuaciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CC_ID_FK",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto8["m_sql"] = "CC_ID_FK";
$proto8["m_srcTableName"] = "cc_actuaciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "proxima_actuacion",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto10["m_sql"] = "proxima_actuacion";
$proto10["m_srcTableName"] = "cc_actuaciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_actuacion",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto12["m_sql"] = "fecha_actuacion";
$proto12["m_srcTableName"] = "cc_actuaciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_date",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto14["m_sql"] = "sys_last_date";
$proto14["m_srcTableName"] = "cc_actuaciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "cc_actuaciones",
	"m_srcTableName" => "cc_actuaciones"
));

$proto16["m_sql"] = "sys_user";
$proto16["m_srcTableName"] = "cc_actuaciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "cc_actuaciones";
$proto19["m_srcTableName"] = "cc_actuaciones";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "actuacion_id";
$proto19["m_columns"][] = "CC_ID_FK";
$proto19["m_columns"][] = "proxima_actuacion";
$proto19["m_columns"][] = "fecha_actuacion";
$proto19["m_columns"][] = "sys_last_date";
$proto19["m_columns"][] = "sys_user";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "cc_actuaciones";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "cc_actuaciones";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_actuaciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_actuaciones = createSqlQuery_cc_actuaciones();


	
				;

						

$tdatacc_actuaciones[".sqlquery"] = $queryData_cc_actuaciones;



$tdatacc_actuaciones[".hasEvents"] = false;

?>