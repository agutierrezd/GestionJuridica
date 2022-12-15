<?php
$tdataglobal_users_find = array();
$tdataglobal_users_find[".searchableFields"] = array();
$tdataglobal_users_find[".ShortName"] = "global_users_find";
$tdataglobal_users_find[".OwnerID"] = "";
$tdataglobal_users_find[".OriginalTable"] = "global_users";


$tdataglobal_users_find[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataglobal_users_find[".originalPagesByType"] = $tdataglobal_users_find[".pagesByType"];
$tdataglobal_users_find[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataglobal_users_find[".originalPages"] = $tdataglobal_users_find[".pages"];
$tdataglobal_users_find[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdataglobal_users_find[".originalDefaultPages"] = $tdataglobal_users_find[".defaultPages"];

//	field labels
$fieldLabelsglobal_users_find = array();
$fieldToolTipsglobal_users_find = array();
$pageTitlesglobal_users_find = array();
$placeHoldersglobal_users_find = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_users_find["Spanish"] = array();
	$fieldToolTipsglobal_users_find["Spanish"] = array();
	$placeHoldersglobal_users_find["Spanish"] = array();
	$pageTitlesglobal_users_find["Spanish"] = array();
	$fieldLabelsglobal_users_find["Spanish"]["idusrglobal"] = "Idusrglobal";
	$fieldToolTipsglobal_users_find["Spanish"]["idusrglobal"] = "";
	$placeHoldersglobal_users_find["Spanish"]["idusrglobal"] = "";
	$fieldLabelsglobal_users_find["Spanish"]["usr_email"] = "Correo electrónico";
	$fieldToolTipsglobal_users_find["Spanish"]["usr_email"] = "";
	$placeHoldersglobal_users_find["Spanish"]["usr_email"] = "";
	$fieldLabelsglobal_users_find["Spanish"]["usr_nombresfull"] = "Nombres";
	$fieldToolTipsglobal_users_find["Spanish"]["usr_nombresfull"] = "";
	$placeHoldersglobal_users_find["Spanish"]["usr_nombresfull"] = "";
	$fieldLabelsglobal_users_find["Spanish"]["usr_personalid"] = "Documento";
	$fieldToolTipsglobal_users_find["Spanish"]["usr_personalid"] = "";
	$placeHoldersglobal_users_find["Spanish"]["usr_personalid"] = "";
	$fieldLabelsglobal_users_find["Spanish"]["usr_dep"] = "Usr Dep";
	$fieldToolTipsglobal_users_find["Spanish"]["usr_dep"] = "";
	$placeHoldersglobal_users_find["Spanish"]["usr_dep"] = "";
	$fieldLabelsglobal_users_find["Spanish"]["Username"] = "Username";
	$fieldToolTipsglobal_users_find["Spanish"]["Username"] = "";
	$placeHoldersglobal_users_find["Spanish"]["Username"] = "";
	if (count($fieldToolTipsglobal_users_find["Spanish"]))
		$tdataglobal_users_find[".isUseToolTips"] = true;
}


	$tdataglobal_users_find[".NCSearch"] = true;



$tdataglobal_users_find[".shortTableName"] = "global_users_find";
$tdataglobal_users_find[".nSecOptions"] = 0;

$tdataglobal_users_find[".mainTableOwnerID"] = "";
$tdataglobal_users_find[".entityType"] = 1;
$tdataglobal_users_find[".connId"] = "mcit_users_at_172_18_0_115";


$tdataglobal_users_find[".strOriginalTableName"] = "global_users";

	



$tdataglobal_users_find[".showAddInPopup"] = false;

$tdataglobal_users_find[".showEditInPopup"] = false;

$tdataglobal_users_find[".showViewInPopup"] = false;

$tdataglobal_users_find[".listAjax"] = false;
//	temporary
//$tdataglobal_users_find[".listAjax"] = false;

	$tdataglobal_users_find[".audit"] = false;

	$tdataglobal_users_find[".locking"] = false;


$pages = $tdataglobal_users_find[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_users_find[".edit"] = true;
	$tdataglobal_users_find[".afterEditAction"] = 1;
	$tdataglobal_users_find[".closePopupAfterEdit"] = 1;
	$tdataglobal_users_find[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_users_find[".add"] = true;
$tdataglobal_users_find[".afterAddAction"] = 1;
$tdataglobal_users_find[".closePopupAfterAdd"] = 1;
$tdataglobal_users_find[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_users_find[".list"] = true;
}



$tdataglobal_users_find[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_users_find[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_users_find[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_users_find[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_users_find[".printFriendly"] = true;
}



$tdataglobal_users_find[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_users_find[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_users_find[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_users_find[".isUseAjaxSuggest"] = true;

$tdataglobal_users_find[".rowHighlite"] = true;



			

$tdataglobal_users_find[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_users_find[".buttonsAdded"] = false;

$tdataglobal_users_find[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_users_find[".isUseTimeForSearch"] = false;


$tdataglobal_users_find[".badgeColor"] = "DB7093";


$tdataglobal_users_find[".allSearchFields"] = array();
$tdataglobal_users_find[".filterFields"] = array();
$tdataglobal_users_find[".requiredSearchFields"] = array();

$tdataglobal_users_find[".googleLikeFields"] = array();
$tdataglobal_users_find[".googleLikeFields"][] = "idusrglobal";
$tdataglobal_users_find[".googleLikeFields"][] = "Username";
$tdataglobal_users_find[".googleLikeFields"][] = "usr_personalid";
$tdataglobal_users_find[".googleLikeFields"][] = "usr_nombresfull";
$tdataglobal_users_find[".googleLikeFields"][] = "usr_email";
$tdataglobal_users_find[".googleLikeFields"][] = "usr_dep";



$tdataglobal_users_find[".tableType"] = "list";

$tdataglobal_users_find[".printerPageOrientation"] = 0;
$tdataglobal_users_find[".nPrinterPageScale"] = 100;

$tdataglobal_users_find[".nPrinterSplitRecords"] = 40;

$tdataglobal_users_find[".geocodingEnabled"] = false;










$tdataglobal_users_find[".pageSize"] = 20;

$tdataglobal_users_find[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_users_find[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_users_find[".orderindexes"] = array();


$tdataglobal_users_find[".sqlHead"] = "SELECT idusrglobal,  Username,  usr_personalid,  usr_nombresfull,  usr_email,  usr_dep";
$tdataglobal_users_find[".sqlFrom"] = "FROM global_users";
$tdataglobal_users_find[".sqlWhereExpr"] = "(usr_nombresfull <> \"\")";
$tdataglobal_users_find[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_users_find[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_users_find[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_users_find[".highlightSearchResults"] = true;

$tableKeysglobal_users_find = array();
$tableKeysglobal_users_find[] = "idusrglobal";
$tdataglobal_users_find[".Keys"] = $tableKeysglobal_users_find;


$tdataglobal_users_find[".hideMobileList"] = array();




//	idusrglobal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idusrglobal";
	$fdata["GoodName"] = "idusrglobal";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","idusrglobal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idusrglobal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal";

	
	
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


	$tdataglobal_users_find["idusrglobal"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "idusrglobal";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

		$fdata["sourceSingle"] = "Username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataglobal_users_find["Username"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "Username";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdataglobal_users_find["usr_personalid"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "usr_personalid";
//	usr_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usr_nombresfull";
	$fdata["GoodName"] = "usr_nombresfull";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","usr_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataglobal_users_find["usr_nombresfull"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "usr_nombresfull";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataglobal_users_find["usr_email"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "usr_email";
//	usr_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_dep";
	$fdata["GoodName"] = "usr_dep";
	$fdata["ownerTable"] = "global_users";
	$fdata["Label"] = GetFieldLabel("global_users_find","usr_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "usr_dep";

		$fdata["sourceSingle"] = "usr_dep";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_dep";

	
	
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


	$tdataglobal_users_find["usr_dep"] = $fdata;
		$tdataglobal_users_find[".searchableFields"][] = "usr_dep";


$tables_data["global_users_find"]=&$tdataglobal_users_find;
$field_labels["global_users_find"] = &$fieldLabelsglobal_users_find;
$fieldToolTips["global_users_find"] = &$fieldToolTipsglobal_users_find;
$placeHolders["global_users_find"] = &$placeHoldersglobal_users_find;
$page_titles["global_users_find"] = &$pageTitlesglobal_users_find;


changeTextControlsToDate( "global_users_find" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_users_find"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_users_find"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_users_find()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idusrglobal,  Username,  usr_personalid,  usr_nombresfull,  usr_email,  usr_dep";
$proto0["m_strFrom"] = "FROM global_users";
$proto0["m_strWhere"] = "(usr_nombresfull <> \"\")";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "usr_nombresfull <> \"\"";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "<> \"\"";
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
	"m_strName" => "idusrglobal",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto6["m_sql"] = "idusrglobal";
$proto6["m_srcTableName"] = "global_users_find";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto8["m_sql"] = "Username";
$proto8["m_srcTableName"] = "global_users_find";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto10["m_sql"] = "usr_personalid";
$proto10["m_srcTableName"] = "global_users_find";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_nombresfull",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto12["m_sql"] = "usr_nombresfull";
$proto12["m_srcTableName"] = "global_users_find";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto14["m_sql"] = "usr_email";
$proto14["m_srcTableName"] = "global_users_find";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_dep",
	"m_strTable" => "global_users",
	"m_srcTableName" => "global_users_find"
));

$proto16["m_sql"] = "usr_dep";
$proto16["m_srcTableName"] = "global_users_find";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "global_users";
$proto19["m_srcTableName"] = "global_users_find";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "idusrglobal";
$proto19["m_columns"][] = "id_fk";
$proto19["m_columns"][] = "Username";
$proto19["m_columns"][] = "Password";
$proto19["m_columns"][] = "usr_email";
$proto19["m_columns"][] = "usr_name";
$proto19["m_columns"][] = "usr_lname";
$proto19["m_columns"][] = "usr_nombresfull";
$proto19["m_columns"][] = "usr_personalid";
$proto19["m_columns"][] = "usr_inicial";
$proto19["m_columns"][] = "usr_sessini";
$proto19["m_columns"][] = "usr_image";
$proto19["m_columns"][] = "usr_status_nomina";
$proto19["m_columns"][] = "usr_status";
$proto19["m_columns"][] = "usr_rdnkey";
$proto19["m_columns"][] = "usr_type_vinc";
$proto19["m_columns"][] = "usr_type_vinculacion";
$proto19["m_columns"][] = "usr_status_sol";
$proto19["m_columns"][] = "usr_dependencia";
$proto19["m_columns"][] = "user_dep";
$proto19["m_columns"][] = "usr_entidad";
$proto19["m_columns"][] = "usr_not";
$proto19["m_columns"][] = "usr_not_msj";
$proto19["m_columns"][] = "usr_jefe";
$proto19["m_columns"][] = "usr_minequipo_lider";
$proto19["m_columns"][] = "usr_minequipo_grupo";
$proto19["m_columns"][] = "global_rol_me";
$proto19["m_columns"][] = "global_rol_gh";
$proto19["m_columns"][] = "global_rol_almacen";
$proto19["m_columns"][] = "global_rol_ci";
$proto19["m_columns"][] = "global_rol_contratos";
$proto19["m_columns"][] = "global_rol_hojar";
$proto19["m_columns"][] = "global_rol_inmuebles";
$proto19["m_columns"][] = "global_rol_siis";
$proto19["m_columns"][] = "global_rol_cpanel";
$proto19["m_columns"][] = "global_rol_dashboard";
$proto19["m_columns"][] = "global_rol_zf";
$proto19["m_columns"][] = "global_rol_sipi";
$proto19["m_columns"][] = "global_rol_cej";
$proto19["m_columns"][] = "global_rol_jc3";
$proto19["m_columns"][] = "global_rol_th";
$proto19["m_columns"][] = "global_rol_sid";
$proto19["m_columns"][] = "global_rol";
$proto19["m_columns"][] = "global_rol_cont";
$proto19["m_columns"][] = "globla_rol_ct";
$proto19["m_columns"][] = "global_rol_procjur";
$proto19["m_columns"][] = "global_rol_comacc";
$proto19["m_columns"][] = "global_rol_gestion";
$proto19["m_columns"][] = "global_rol_ciudadano";
$proto19["m_columns"][] = "global_rol_ciudadano_dep";
$proto19["m_columns"][] = "sys_user";
$proto19["m_columns"][] = "sys_date";
$proto19["m_columns"][] = "sys_time";
$proto19["m_columns"][] = "sys_ntries_usr";
$proto19["m_columns"][] = "sys_registrationdate_usr";
$proto19["m_columns"][] = "sys_expiration_usr";
$proto19["m_columns"][] = "sys_disabledate_usr";
$proto19["m_columns"][] = "sys_upd_fecha";
$proto19["m_columns"][] = "sys_upd_user";
$proto19["m_columns"][] = "sys_upd_time";
$proto19["m_columns"][] = "sys_update_info";
$proto19["m_columns"][] = "sys_update_family_info";
$proto19["m_columns"][] = "usr_update_almacen";
$proto19["m_columns"][] = "sys_anio";
$proto19["m_columns"][] = "ctrl";
$proto19["m_columns"][] = "usr_datebirth";
$proto19["m_columns"][] = "usr_dep_sup";
$proto19["m_columns"][] = "usr_dep";
$proto19["m_columns"][] = "usr_piso";
$proto19["m_columns"][] = "usr_cargo";
$proto19["m_columns"][] = "usr_regpago";
$proto19["m_columns"][] = "usr_extension";
$proto19["m_columns"][] = "ctrl_pedidoalmacen";
$proto19["m_columns"][] = "ctrl_contacto";
$proto19["m_columns"][] = "usr_emergencia";
$proto19["m_columns"][] = "upd_date";
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "groupid";
$proto19["m_columns"][] = "habilita_almacen";
$proto19["m_columns"][] = "estado_vinculacion_mincit";
$proto19["m_columns"][] = "usr_firma";
$proto19["m_columns"][] = "usr_firma_b";
$proto19["m_columns"][] = "usr_hojaruta";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$proto19["m_columns"][] = "usr_edl";
$proto19["m_columns"][] = "phone";
$proto19["m_columns"][] = "phone1";
$proto19["m_columns"][] = "usr_directivo";
$proto19["m_columns"][] = "ext_security_id";
$proto19["m_columns"][] = "covid_sn";
$proto19["m_columns"][] = "covid_fecha";
$proto19["m_columns"][] = "vacuna_sn";
$proto19["m_columns"][] = "vacuna_nombre";
$proto19["m_columns"][] = "vacuna_a_fecha";
$proto19["m_columns"][] = "vacuna_b_fechaprog";
$proto19["m_columns"][] = "vacuna_b_fecha";
$proto19["m_columns"][] = "vacuna_c_fecha";
$proto19["m_columns"][] = "vacuna_consentimiento_sn";
$proto19["m_columns"][] = "vacuna_obs";
$proto19["m_columns"][] = "vacuna_dosis";
$proto19["m_columns"][] = "vacuna_interes";
$proto19["m_columns"][] = "vacuna_etapa";
$proto19["m_columns"][] = "vacuna_autoriza";
$proto19["m_columns"][] = "vacuna_autoriza_email";
$proto19["m_columns"][] = "ext_security_id1";
$proto19["m_columns"][] = "ext_security_id2";
$proto19["m_columns"][] = "ext_security_id3";
$proto19["m_columns"][] = "ext_security_id4";
$proto19["m_columns"][] = "apikey";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "global_users";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "global_users_find";
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
$proto0["m_srcTableName"]="global_users_find";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_users_find = createSqlQuery_global_users_find();


	
				;

						

$tdataglobal_users_find[".sqlquery"] = $queryData_global_users_find;



$tdataglobal_users_find[".hasEvents"] = false;

?>