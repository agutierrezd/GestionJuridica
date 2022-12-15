<?php
$tdatarj_master_audiencias = array();
$tdatarj_master_audiencias[".searchableFields"] = array();
$tdatarj_master_audiencias[".ShortName"] = "rj_master_audiencias";
$tdatarj_master_audiencias[".OwnerID"] = "";
$tdatarj_master_audiencias[".OriginalTable"] = "rj_master_audiencias";


$tdatarj_master_audiencias[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarj_master_audiencias[".originalPagesByType"] = $tdatarj_master_audiencias[".pagesByType"];
$tdatarj_master_audiencias[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarj_master_audiencias[".originalPages"] = $tdatarj_master_audiencias[".pages"];
$tdatarj_master_audiencias[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarj_master_audiencias[".originalDefaultPages"] = $tdatarj_master_audiencias[".defaultPages"];

//	field labels
$fieldLabelsrj_master_audiencias = array();
$fieldToolTipsrj_master_audiencias = array();
$pageTitlesrj_master_audiencias = array();
$placeHoldersrj_master_audiencias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_master_audiencias["Spanish"] = array();
	$fieldToolTipsrj_master_audiencias["Spanish"] = array();
	$placeHoldersrj_master_audiencias["Spanish"] = array();
	$pageTitlesrj_master_audiencias["Spanish"] = array();
	$fieldLabelsrj_master_audiencias["Spanish"]["audiencia_id"] = "Audiencia Id";
	$fieldToolTipsrj_master_audiencias["Spanish"]["audiencia_id"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["audiencia_id"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["rj_di_fk"] = "Exp ID";
	$fieldToolTipsrj_master_audiencias["Spanish"]["rj_di_fk"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["rj_di_fk"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["expediente"] = "Expediente";
	$fieldToolTipsrj_master_audiencias["Spanish"]["expediente"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["expediente"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["fecha_audiencia"] = "Fecha Audiencia";
	$fieldToolTipsrj_master_audiencias["Spanish"]["fecha_audiencia"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["fecha_audiencia"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["hora_audiencia"] = "Hora Audiencia";
	$fieldToolTipsrj_master_audiencias["Spanish"]["hora_audiencia"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["hora_audiencia"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["juzgado"] = "Juzgado";
	$fieldToolTipsrj_master_audiencias["Spanish"]["juzgado"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["juzgado"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsrj_master_audiencias["Spanish"]["sys_date"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["sys_date"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["sys_user"] = "Registrado por:";
	$fieldToolTipsrj_master_audiencias["Spanish"]["sys_user"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["sys_user"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["realizada"] = "Realizada";
	$fieldToolTipsrj_master_audiencias["Spanish"]["realizada"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["realizada"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["obs_audiencia"] = "Obs Audiencia";
	$fieldToolTipsrj_master_audiencias["Spanish"]["obs_audiencia"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["obs_audiencia"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["rsys_user"] = "Rsys User";
	$fieldToolTipsrj_master_audiencias["Spanish"]["rsys_user"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["rsys_user"] = "";
	$fieldLabelsrj_master_audiencias["Spanish"]["rsys_date"] = "Rsys Date";
	$fieldToolTipsrj_master_audiencias["Spanish"]["rsys_date"] = "";
	$placeHoldersrj_master_audiencias["Spanish"]["rsys_date"] = "";
	if (count($fieldToolTipsrj_master_audiencias["Spanish"]))
		$tdatarj_master_audiencias[".isUseToolTips"] = true;
}


	$tdatarj_master_audiencias[".NCSearch"] = true;



$tdatarj_master_audiencias[".shortTableName"] = "rj_master_audiencias";
$tdatarj_master_audiencias[".nSecOptions"] = 0;

$tdatarj_master_audiencias[".mainTableOwnerID"] = "";
$tdatarj_master_audiencias[".entityType"] = 0;
$tdatarj_master_audiencias[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_master_audiencias[".strOriginalTableName"] = "rj_master_audiencias";

	



$tdatarj_master_audiencias[".showAddInPopup"] = false;

$tdatarj_master_audiencias[".showEditInPopup"] = false;

$tdatarj_master_audiencias[".showViewInPopup"] = false;

$tdatarj_master_audiencias[".listAjax"] = false;
//	temporary
//$tdatarj_master_audiencias[".listAjax"] = false;

	$tdatarj_master_audiencias[".audit"] = false;

	$tdatarj_master_audiencias[".locking"] = false;


$pages = $tdatarj_master_audiencias[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_master_audiencias[".edit"] = true;
	$tdatarj_master_audiencias[".afterEditAction"] = 1;
	$tdatarj_master_audiencias[".closePopupAfterEdit"] = 1;
	$tdatarj_master_audiencias[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_master_audiencias[".add"] = true;
$tdatarj_master_audiencias[".afterAddAction"] = 1;
$tdatarj_master_audiencias[".closePopupAfterAdd"] = 1;
$tdatarj_master_audiencias[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_master_audiencias[".list"] = true;
}



$tdatarj_master_audiencias[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_master_audiencias[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_master_audiencias[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_master_audiencias[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_master_audiencias[".printFriendly"] = true;
}



$tdatarj_master_audiencias[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_master_audiencias[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_master_audiencias[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_master_audiencias[".isUseAjaxSuggest"] = true;

$tdatarj_master_audiencias[".rowHighlite"] = true;



						

$tdatarj_master_audiencias[".ajaxCodeSnippetAdded"] = false;

$tdatarj_master_audiencias[".buttonsAdded"] = false;

$tdatarj_master_audiencias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_master_audiencias[".isUseTimeForSearch"] = true;


$tdatarj_master_audiencias[".badgeColor"] = "6da5c8";


$tdatarj_master_audiencias[".allSearchFields"] = array();
$tdatarj_master_audiencias[".filterFields"] = array();
$tdatarj_master_audiencias[".requiredSearchFields"] = array();

$tdatarj_master_audiencias[".googleLikeFields"] = array();
$tdatarj_master_audiencias[".googleLikeFields"][] = "audiencia_id";
$tdatarj_master_audiencias[".googleLikeFields"][] = "rj_di_fk";
$tdatarj_master_audiencias[".googleLikeFields"][] = "expediente";
$tdatarj_master_audiencias[".googleLikeFields"][] = "fecha_audiencia";
$tdatarj_master_audiencias[".googleLikeFields"][] = "hora_audiencia";
$tdatarj_master_audiencias[".googleLikeFields"][] = "juzgado";
$tdatarj_master_audiencias[".googleLikeFields"][] = "sys_date";
$tdatarj_master_audiencias[".googleLikeFields"][] = "sys_user";
$tdatarj_master_audiencias[".googleLikeFields"][] = "realizada";
$tdatarj_master_audiencias[".googleLikeFields"][] = "obs_audiencia";
$tdatarj_master_audiencias[".googleLikeFields"][] = "rsys_user";
$tdatarj_master_audiencias[".googleLikeFields"][] = "rsys_date";



$tdatarj_master_audiencias[".tableType"] = "list";

$tdatarj_master_audiencias[".printerPageOrientation"] = 0;
$tdatarj_master_audiencias[".nPrinterPageScale"] = 100;

$tdatarj_master_audiencias[".nPrinterSplitRecords"] = 40;

$tdatarj_master_audiencias[".geocodingEnabled"] = false;










$tdatarj_master_audiencias[".pageSize"] = 20;

$tdatarj_master_audiencias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_master_audiencias[".strOrderBy"] = $tstrOrderBy;

$tdatarj_master_audiencias[".orderindexes"] = array();


$tdatarj_master_audiencias[".sqlHead"] = "SELECT audiencia_id,  	rj_di_fk,  	expediente,  	fecha_audiencia,  	hora_audiencia,  	juzgado,  	sys_date,  	sys_user,  	realizada,  	obs_audiencia,  	rsys_user,  	rsys_date";
$tdatarj_master_audiencias[".sqlFrom"] = "FROM rj_master_audiencias";
$tdatarj_master_audiencias[".sqlWhereExpr"] = "";
$tdatarj_master_audiencias[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_master_audiencias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_master_audiencias[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_master_audiencias[".highlightSearchResults"] = true;

$tableKeysrj_master_audiencias = array();
$tableKeysrj_master_audiencias[] = "audiencia_id";
$tdatarj_master_audiencias[".Keys"] = $tableKeysrj_master_audiencias;


$tdatarj_master_audiencias[".hideMobileList"] = array();




//	audiencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "audiencia_id";
	$fdata["GoodName"] = "audiencia_id";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","audiencia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "audiencia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "audiencia_id";

	
	
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


	$tdatarj_master_audiencias["audiencia_id"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "audiencia_id";
//	rj_di_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rj_di_fk";
	$fdata["GoodName"] = "rj_di_fk";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","rj_di_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "rj_di_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rj_di_fk";

	
	
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
	$edata["LookupTable"] = "rj_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "oj_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "num_proceso";

	

	
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


	$tdatarj_master_audiencias["rj_di_fk"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "rj_di_fk";
//	expediente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "expediente";
	$fdata["GoodName"] = "expediente";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","expediente");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "expediente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "expediente";

	
	
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


	$tdatarj_master_audiencias["expediente"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "expediente";
//	fecha_audiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_audiencia";
	$fdata["GoodName"] = "fecha_audiencia";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","fecha_audiencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_audiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_audiencia";

	
	
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
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



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


	$tdatarj_master_audiencias["fecha_audiencia"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "fecha_audiencia";
//	hora_audiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "hora_audiencia";
	$fdata["GoodName"] = "hora_audiencia";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","hora_audiencia");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "hora_audiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hora_audiencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
				$hours = 12;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 1,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatarj_master_audiencias["hora_audiencia"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "hora_audiencia";
//	juzgado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "juzgado";
	$fdata["GoodName"] = "juzgado";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","juzgado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "juzgado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "juzgado";

	
	
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


	$tdatarj_master_audiencias["juzgado"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "juzgado";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
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


	$tdatarj_master_audiencias["sys_date"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "sys_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","sys_user");
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
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarj_master_audiencias["sys_user"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "sys_user";
//	realizada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "realizada";
	$fdata["GoodName"] = "realizada";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","realizada");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "realizada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "realizada";

	
	
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


	$tdatarj_master_audiencias["realizada"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "realizada";
//	obs_audiencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "obs_audiencia";
	$fdata["GoodName"] = "obs_audiencia";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","obs_audiencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "obs_audiencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs_audiencia";

	
	
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


	$tdatarj_master_audiencias["obs_audiencia"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "obs_audiencia";
//	rsys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rsys_user";
	$fdata["GoodName"] = "rsys_user";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","rsys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rsys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsys_user";

	
	
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


	$tdatarj_master_audiencias["rsys_user"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "rsys_user";
//	rsys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "rsys_date";
	$fdata["GoodName"] = "rsys_date";
	$fdata["ownerTable"] = "rj_master_audiencias";
	$fdata["Label"] = GetFieldLabel("rj_master_audiencias","rsys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "rsys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rsys_date";

	
	
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


	$tdatarj_master_audiencias["rsys_date"] = $fdata;
		$tdatarj_master_audiencias[".searchableFields"][] = "rsys_date";


$tables_data["rj_master_audiencias"]=&$tdatarj_master_audiencias;
$field_labels["rj_master_audiencias"] = &$fieldLabelsrj_master_audiencias;
$fieldToolTips["rj_master_audiencias"] = &$fieldToolTipsrj_master_audiencias;
$placeHolders["rj_master_audiencias"] = &$placeHoldersrj_master_audiencias;
$page_titles["rj_master_audiencias"] = &$pageTitlesrj_master_audiencias;


changeTextControlsToDate( "rj_master_audiencias" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_master_audiencias"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_master_audiencias"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="rj_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="rj_master";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "rj_master";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rj_master_audiencias"][0] = $masterParams;
				$masterTablesData["rj_master_audiencias"][0]["masterKeys"] = array();
	$masterTablesData["rj_master_audiencias"][0]["masterKeys"][]="oj_id";
				$masterTablesData["rj_master_audiencias"][0]["detailKeys"] = array();
	$masterTablesData["rj_master_audiencias"][0]["detailKeys"][]="rj_di_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_master_audiencias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "audiencia_id,  	rj_di_fk,  	expediente,  	fecha_audiencia,  	hora_audiencia,  	juzgado,  	sys_date,  	sys_user,  	realizada,  	obs_audiencia,  	rsys_user,  	rsys_date";
$proto0["m_strFrom"] = "FROM rj_master_audiencias";
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
	"m_strName" => "audiencia_id",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto6["m_sql"] = "audiencia_id";
$proto6["m_srcTableName"] = "rj_master_audiencias";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rj_di_fk",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto8["m_sql"] = "rj_di_fk";
$proto8["m_srcTableName"] = "rj_master_audiencias";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "expediente",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto10["m_sql"] = "expediente";
$proto10["m_srcTableName"] = "rj_master_audiencias";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_audiencia",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto12["m_sql"] = "fecha_audiencia";
$proto12["m_srcTableName"] = "rj_master_audiencias";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "hora_audiencia",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto14["m_sql"] = "hora_audiencia";
$proto14["m_srcTableName"] = "rj_master_audiencias";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "juzgado",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto16["m_sql"] = "juzgado";
$proto16["m_srcTableName"] = "rj_master_audiencias";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto18["m_sql"] = "sys_date";
$proto18["m_srcTableName"] = "rj_master_audiencias";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto20["m_sql"] = "sys_user";
$proto20["m_srcTableName"] = "rj_master_audiencias";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "realizada",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto22["m_sql"] = "realizada";
$proto22["m_srcTableName"] = "rj_master_audiencias";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "obs_audiencia",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto24["m_sql"] = "obs_audiencia";
$proto24["m_srcTableName"] = "rj_master_audiencias";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "rsys_user",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto26["m_sql"] = "rsys_user";
$proto26["m_srcTableName"] = "rj_master_audiencias";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "rsys_date",
	"m_strTable" => "rj_master_audiencias",
	"m_srcTableName" => "rj_master_audiencias"
));

$proto28["m_sql"] = "rsys_date";
$proto28["m_srcTableName"] = "rj_master_audiencias";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "rj_master_audiencias";
$proto31["m_srcTableName"] = "rj_master_audiencias";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "audiencia_id";
$proto31["m_columns"][] = "rj_di_fk";
$proto31["m_columns"][] = "expediente";
$proto31["m_columns"][] = "fecha_audiencia";
$proto31["m_columns"][] = "hora_audiencia";
$proto31["m_columns"][] = "juzgado";
$proto31["m_columns"][] = "sys_date";
$proto31["m_columns"][] = "sys_user";
$proto31["m_columns"][] = "realizada";
$proto31["m_columns"][] = "obs_audiencia";
$proto31["m_columns"][] = "rsys_user";
$proto31["m_columns"][] = "rsys_date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "rj_master_audiencias";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "rj_master_audiencias";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rj_master_audiencias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_master_audiencias = createSqlQuery_rj_master_audiencias();


	
				;

												

$tdatarj_master_audiencias[".sqlquery"] = $queryData_rj_master_audiencias;



$tdatarj_master_audiencias[".hasEvents"] = false;

?>