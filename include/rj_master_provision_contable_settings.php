<?php
$tdatarj_master_provision_contable = array();
$tdatarj_master_provision_contable[".searchableFields"] = array();
$tdatarj_master_provision_contable[".ShortName"] = "rj_master_provision_contable";
$tdatarj_master_provision_contable[".OwnerID"] = "";
$tdatarj_master_provision_contable[".OriginalTable"] = "rj_master_provision_contable";


$tdatarj_master_provision_contable[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarj_master_provision_contable[".originalPagesByType"] = $tdatarj_master_provision_contable[".pagesByType"];
$tdatarj_master_provision_contable[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarj_master_provision_contable[".originalPages"] = $tdatarj_master_provision_contable[".pages"];
$tdatarj_master_provision_contable[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarj_master_provision_contable[".originalDefaultPages"] = $tdatarj_master_provision_contable[".defaultPages"];

//	field labels
$fieldLabelsrj_master_provision_contable = array();
$fieldToolTipsrj_master_provision_contable = array();
$pageTitlesrj_master_provision_contable = array();
$placeHoldersrj_master_provision_contable = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_master_provision_contable["Spanish"] = array();
	$fieldToolTipsrj_master_provision_contable["Spanish"] = array();
	$placeHoldersrj_master_provision_contable["Spanish"] = array();
	$pageTitlesrj_master_provision_contable["Spanish"] = array();
	$fieldLabelsrj_master_provision_contable["Spanish"]["pc_id"] = "Pc Id";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["pc_id"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["pc_id"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["oj_id_fk"] = "Exp ID";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["oj_id_fk"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["oj_id_fk"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["date_cal_risk"] = "Fecha de calificación del riesgo";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["date_cal_risk"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["date_cal_risk"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["ppc"] = "Probabilidad de perder el caso";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["ppc"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["ppc"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["valor_pc"] = "Valor de la provisión contable";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["valor_pc"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["valor_pc"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["pc_abogado"] = "Abogado";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["pc_abogado"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["pc_abogado"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["pc_anexo"] = "Anexo";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["pc_anexo"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["pc_anexo"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["sys_user"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["sys_user"] = "";
	$fieldLabelsrj_master_provision_contable["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsrj_master_provision_contable["Spanish"]["sys_date"] = "";
	$placeHoldersrj_master_provision_contable["Spanish"]["sys_date"] = "";
	$pageTitlesrj_master_provision_contable["Spanish"]["add"] = "Provisión Contable";
	if (count($fieldToolTipsrj_master_provision_contable["Spanish"]))
		$tdatarj_master_provision_contable[".isUseToolTips"] = true;
}


	$tdatarj_master_provision_contable[".NCSearch"] = true;



$tdatarj_master_provision_contable[".shortTableName"] = "rj_master_provision_contable";
$tdatarj_master_provision_contable[".nSecOptions"] = 0;

$tdatarj_master_provision_contable[".mainTableOwnerID"] = "";
$tdatarj_master_provision_contable[".entityType"] = 0;
$tdatarj_master_provision_contable[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_master_provision_contable[".strOriginalTableName"] = "rj_master_provision_contable";

	



$tdatarj_master_provision_contable[".showAddInPopup"] = false;

$tdatarj_master_provision_contable[".showEditInPopup"] = false;

$tdatarj_master_provision_contable[".showViewInPopup"] = false;

$tdatarj_master_provision_contable[".listAjax"] = false;
//	temporary
//$tdatarj_master_provision_contable[".listAjax"] = false;

	$tdatarj_master_provision_contable[".audit"] = false;

	$tdatarj_master_provision_contable[".locking"] = false;


$pages = $tdatarj_master_provision_contable[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_master_provision_contable[".edit"] = true;
	$tdatarj_master_provision_contable[".afterEditAction"] = 1;
	$tdatarj_master_provision_contable[".closePopupAfterEdit"] = 1;
	$tdatarj_master_provision_contable[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_master_provision_contable[".add"] = true;
$tdatarj_master_provision_contable[".afterAddAction"] = 1;
$tdatarj_master_provision_contable[".closePopupAfterAdd"] = 1;
$tdatarj_master_provision_contable[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_master_provision_contable[".list"] = true;
}



$tdatarj_master_provision_contable[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_master_provision_contable[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_master_provision_contable[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_master_provision_contable[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_master_provision_contable[".printFriendly"] = true;
}



$tdatarj_master_provision_contable[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_master_provision_contable[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_master_provision_contable[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_master_provision_contable[".isUseAjaxSuggest"] = true;

$tdatarj_master_provision_contable[".rowHighlite"] = true;



						

$tdatarj_master_provision_contable[".ajaxCodeSnippetAdded"] = false;

$tdatarj_master_provision_contable[".buttonsAdded"] = false;

$tdatarj_master_provision_contable[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_master_provision_contable[".isUseTimeForSearch"] = false;


$tdatarj_master_provision_contable[".badgeColor"] = "e07878";


$tdatarj_master_provision_contable[".allSearchFields"] = array();
$tdatarj_master_provision_contable[".filterFields"] = array();
$tdatarj_master_provision_contable[".requiredSearchFields"] = array();

$tdatarj_master_provision_contable[".googleLikeFields"] = array();
$tdatarj_master_provision_contable[".googleLikeFields"][] = "pc_id";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "oj_id_fk";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "date_cal_risk";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "ppc";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "valor_pc";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "pc_abogado";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "pc_anexo";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "sys_user";
$tdatarj_master_provision_contable[".googleLikeFields"][] = "sys_date";



$tdatarj_master_provision_contable[".tableType"] = "list";

$tdatarj_master_provision_contable[".printerPageOrientation"] = 0;
$tdatarj_master_provision_contable[".nPrinterPageScale"] = 100;

$tdatarj_master_provision_contable[".nPrinterSplitRecords"] = 40;

$tdatarj_master_provision_contable[".geocodingEnabled"] = false;










$tdatarj_master_provision_contable[".pageSize"] = 20;

$tdatarj_master_provision_contable[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_master_provision_contable[".strOrderBy"] = $tstrOrderBy;

$tdatarj_master_provision_contable[".orderindexes"] = array();


$tdatarj_master_provision_contable[".sqlHead"] = "SELECT pc_id,  	oj_id_fk,  	date_cal_risk,  	ppc,  	valor_pc,  	pc_abogado,  	pc_anexo,  	sys_user,  	sys_date";
$tdatarj_master_provision_contable[".sqlFrom"] = "FROM rj_master_provision_contable";
$tdatarj_master_provision_contable[".sqlWhereExpr"] = "";
$tdatarj_master_provision_contable[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_master_provision_contable[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_master_provision_contable[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_master_provision_contable[".highlightSearchResults"] = true;

$tableKeysrj_master_provision_contable = array();
$tableKeysrj_master_provision_contable[] = "pc_id";
$tdatarj_master_provision_contable[".Keys"] = $tableKeysrj_master_provision_contable;


$tdatarj_master_provision_contable[".hideMobileList"] = array();




//	pc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pc_id";
	$fdata["GoodName"] = "pc_id";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","pc_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "pc_id";

		$fdata["sourceSingle"] = "pc_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc_id";

	
	
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


	$tdatarj_master_provision_contable["pc_id"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "pc_id";
//	oj_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "oj_id_fk";
	$fdata["GoodName"] = "oj_id_fk";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","oj_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "oj_id_fk";

		$fdata["sourceSingle"] = "oj_id_fk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oj_id_fk";

	
	
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


	$tdatarj_master_provision_contable["oj_id_fk"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "oj_id_fk";
//	date_cal_risk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date_cal_risk";
	$fdata["GoodName"] = "date_cal_risk";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","date_cal_risk");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "date_cal_risk";

		$fdata["sourceSingle"] = "date_cal_risk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "date_cal_risk";

	
	
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
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 5;

	
	
	
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


	$tdatarj_master_provision_contable["date_cal_risk"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "date_cal_risk";
//	ppc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ppc";
	$fdata["GoodName"] = "ppc";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","ppc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ppc";

		$fdata["sourceSingle"] = "ppc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ppc";

	
	
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


	$tdatarj_master_provision_contable["ppc"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "ppc";
//	valor_pc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valor_pc";
	$fdata["GoodName"] = "valor_pc";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","valor_pc");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_pc";

		$fdata["sourceSingle"] = "valor_pc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_pc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatarj_master_provision_contable["valor_pc"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "valor_pc";
//	pc_abogado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pc_abogado";
	$fdata["GoodName"] = "pc_abogado";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","pc_abogado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pc_abogado";

		$fdata["sourceSingle"] = "pc_abogado";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc_abogado";

	
	
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

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

				$edata["LookupWhere"] = "usr_dep = 190";


	
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


	$tdatarj_master_provision_contable["pc_abogado"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "pc_abogado";
//	pc_anexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pc_anexo";
	$fdata["GoodName"] = "pc_anexo";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","pc_anexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pc_anexo";

		$fdata["sourceSingle"] = "pc_anexo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pc_anexo";

	
	
				$fdata["UploadFolder"] = "GesDoc/PC";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatarj_master_provision_contable["pc_anexo"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "pc_anexo";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","sys_user");
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


	$tdatarj_master_provision_contable["sys_user"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "rj_master_provision_contable";
	$fdata["Label"] = GetFieldLabel("rj_master_provision_contable","sys_date");
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


	$tdatarj_master_provision_contable["sys_date"] = $fdata;
		$tdatarj_master_provision_contable[".searchableFields"][] = "sys_date";


$tables_data["rj_master_provision_contable"]=&$tdatarj_master_provision_contable;
$field_labels["rj_master_provision_contable"] = &$fieldLabelsrj_master_provision_contable;
$fieldToolTips["rj_master_provision_contable"] = &$fieldToolTipsrj_master_provision_contable;
$placeHolders["rj_master_provision_contable"] = &$placeHoldersrj_master_provision_contable;
$page_titles["rj_master_provision_contable"] = &$pageTitlesrj_master_provision_contable;


changeTextControlsToDate( "rj_master_provision_contable" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_master_provision_contable"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_master_provision_contable"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="rj_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="rj_master";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "rj_master";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rj_master_provision_contable"][0] = $masterParams;
				$masterTablesData["rj_master_provision_contable"][0]["masterKeys"] = array();
	$masterTablesData["rj_master_provision_contable"][0]["masterKeys"][]="oj_id";
				$masterTablesData["rj_master_provision_contable"][0]["detailKeys"] = array();
	$masterTablesData["rj_master_provision_contable"][0]["detailKeys"][]="oj_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_master_provision_contable()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pc_id,  	oj_id_fk,  	date_cal_risk,  	ppc,  	valor_pc,  	pc_abogado,  	pc_anexo,  	sys_user,  	sys_date";
$proto0["m_strFrom"] = "FROM rj_master_provision_contable";
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
	"m_strName" => "pc_id",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto6["m_sql"] = "pc_id";
$proto6["m_srcTableName"] = "rj_master_provision_contable";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "oj_id_fk",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto8["m_sql"] = "oj_id_fk";
$proto8["m_srcTableName"] = "rj_master_provision_contable";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date_cal_risk",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto10["m_sql"] = "date_cal_risk";
$proto10["m_srcTableName"] = "rj_master_provision_contable";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ppc",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto12["m_sql"] = "ppc";
$proto12["m_srcTableName"] = "rj_master_provision_contable";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_pc",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto14["m_sql"] = "valor_pc";
$proto14["m_srcTableName"] = "rj_master_provision_contable";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pc_abogado",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto16["m_sql"] = "pc_abogado";
$proto16["m_srcTableName"] = "rj_master_provision_contable";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pc_anexo",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto18["m_sql"] = "pc_anexo";
$proto18["m_srcTableName"] = "rj_master_provision_contable";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto20["m_sql"] = "sys_user";
$proto20["m_srcTableName"] = "rj_master_provision_contable";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "rj_master_provision_contable",
	"m_srcTableName" => "rj_master_provision_contable"
));

$proto22["m_sql"] = "sys_date";
$proto22["m_srcTableName"] = "rj_master_provision_contable";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "rj_master_provision_contable";
$proto25["m_srcTableName"] = "rj_master_provision_contable";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "pc_id";
$proto25["m_columns"][] = "oj_id_fk";
$proto25["m_columns"][] = "date_cal_risk";
$proto25["m_columns"][] = "ppc";
$proto25["m_columns"][] = "valor_pc";
$proto25["m_columns"][] = "pc_abogado";
$proto25["m_columns"][] = "pc_anexo";
$proto25["m_columns"][] = "sys_user";
$proto25["m_columns"][] = "sys_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "rj_master_provision_contable";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "rj_master_provision_contable";
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
$proto0["m_srcTableName"]="rj_master_provision_contable";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_master_provision_contable = createSqlQuery_rj_master_provision_contable();


	
				;

									

$tdatarj_master_provision_contable[".sqlquery"] = $queryData_rj_master_provision_contable;



$tdatarj_master_provision_contable[".hasEvents"] = false;

?>