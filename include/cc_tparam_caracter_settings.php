<?php
$tdatacc_tparam_caracter = array();
$tdatacc_tparam_caracter[".searchableFields"] = array();
$tdatacc_tparam_caracter[".ShortName"] = "cc_tparam_caracter";
$tdatacc_tparam_caracter[".OwnerID"] = "";
$tdatacc_tparam_caracter[".OriginalTable"] = "cc_tparam_caracter";


$tdatacc_tparam_caracter[".pagesByType"] = my_json_decode( "{}" );
$tdatacc_tparam_caracter[".originalPagesByType"] = $tdatacc_tparam_caracter[".pagesByType"];
$tdatacc_tparam_caracter[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacc_tparam_caracter[".originalPages"] = $tdatacc_tparam_caracter[".pages"];
$tdatacc_tparam_caracter[".defaultPages"] = my_json_decode( "{}" );
$tdatacc_tparam_caracter[".originalDefaultPages"] = $tdatacc_tparam_caracter[".defaultPages"];

//	field labels
$fieldLabelscc_tparam_caracter = array();
$fieldToolTipscc_tparam_caracter = array();
$pageTitlescc_tparam_caracter = array();
$placeHolderscc_tparam_caracter = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_tparam_caracter["Spanish"] = array();
	$fieldToolTipscc_tparam_caracter["Spanish"] = array();
	$placeHolderscc_tparam_caracter["Spanish"] = array();
	$pageTitlescc_tparam_caracter["Spanish"] = array();
	$fieldLabelscc_tparam_caracter["Spanish"]["car_id"] = "Car Id";
	$fieldToolTipscc_tparam_caracter["Spanish"]["car_id"] = "";
	$placeHolderscc_tparam_caracter["Spanish"]["car_id"] = "";
	$fieldLabelscc_tparam_caracter["Spanish"]["caracter_n"] = "Caracter N";
	$fieldToolTipscc_tparam_caracter["Spanish"]["caracter_n"] = "";
	$placeHolderscc_tparam_caracter["Spanish"]["caracter_n"] = "";
	if (count($fieldToolTipscc_tparam_caracter["Spanish"]))
		$tdatacc_tparam_caracter[".isUseToolTips"] = true;
}


	$tdatacc_tparam_caracter[".NCSearch"] = true;



$tdatacc_tparam_caracter[".shortTableName"] = "cc_tparam_caracter";
$tdatacc_tparam_caracter[".nSecOptions"] = 0;

$tdatacc_tparam_caracter[".mainTableOwnerID"] = "";
$tdatacc_tparam_caracter[".entityType"] = 0;
$tdatacc_tparam_caracter[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_tparam_caracter[".strOriginalTableName"] = "cc_tparam_caracter";

	



$tdatacc_tparam_caracter[".showAddInPopup"] = false;

$tdatacc_tparam_caracter[".showEditInPopup"] = false;

$tdatacc_tparam_caracter[".showViewInPopup"] = false;

$tdatacc_tparam_caracter[".listAjax"] = false;
//	temporary
//$tdatacc_tparam_caracter[".listAjax"] = false;

	$tdatacc_tparam_caracter[".audit"] = false;

	$tdatacc_tparam_caracter[".locking"] = false;


$pages = $tdatacc_tparam_caracter[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_tparam_caracter[".edit"] = true;
	$tdatacc_tparam_caracter[".afterEditAction"] = 1;
	$tdatacc_tparam_caracter[".closePopupAfterEdit"] = 1;
	$tdatacc_tparam_caracter[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_tparam_caracter[".add"] = true;
$tdatacc_tparam_caracter[".afterAddAction"] = 1;
$tdatacc_tparam_caracter[".closePopupAfterAdd"] = 1;
$tdatacc_tparam_caracter[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_tparam_caracter[".list"] = true;
}



$tdatacc_tparam_caracter[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_tparam_caracter[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_tparam_caracter[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_tparam_caracter[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_tparam_caracter[".printFriendly"] = true;
}



$tdatacc_tparam_caracter[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_tparam_caracter[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_tparam_caracter[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_tparam_caracter[".isUseAjaxSuggest"] = true;

$tdatacc_tparam_caracter[".rowHighlite"] = true;



			

$tdatacc_tparam_caracter[".ajaxCodeSnippetAdded"] = false;

$tdatacc_tparam_caracter[".buttonsAdded"] = false;

$tdatacc_tparam_caracter[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_tparam_caracter[".isUseTimeForSearch"] = false;


$tdatacc_tparam_caracter[".badgeColor"] = "7B68EE";


$tdatacc_tparam_caracter[".allSearchFields"] = array();
$tdatacc_tparam_caracter[".filterFields"] = array();
$tdatacc_tparam_caracter[".requiredSearchFields"] = array();

$tdatacc_tparam_caracter[".googleLikeFields"] = array();
$tdatacc_tparam_caracter[".googleLikeFields"][] = "car_id";
$tdatacc_tparam_caracter[".googleLikeFields"][] = "caracter_n";



$tdatacc_tparam_caracter[".tableType"] = "list";

$tdatacc_tparam_caracter[".printerPageOrientation"] = 0;
$tdatacc_tparam_caracter[".nPrinterPageScale"] = 100;

$tdatacc_tparam_caracter[".nPrinterSplitRecords"] = 40;

$tdatacc_tparam_caracter[".geocodingEnabled"] = false;










$tdatacc_tparam_caracter[".pageSize"] = 20;

$tdatacc_tparam_caracter[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_tparam_caracter[".strOrderBy"] = $tstrOrderBy;

$tdatacc_tparam_caracter[".orderindexes"] = array();


$tdatacc_tparam_caracter[".sqlHead"] = "SELECT car_id,  	caracter_n";
$tdatacc_tparam_caracter[".sqlFrom"] = "FROM cc_tparam_caracter";
$tdatacc_tparam_caracter[".sqlWhereExpr"] = "";
$tdatacc_tparam_caracter[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_tparam_caracter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_tparam_caracter[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_tparam_caracter[".highlightSearchResults"] = true;

$tableKeyscc_tparam_caracter = array();
$tableKeyscc_tparam_caracter[] = "car_id";
$tdatacc_tparam_caracter[".Keys"] = $tableKeyscc_tparam_caracter;


$tdatacc_tparam_caracter[".hideMobileList"] = array();




//	car_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "car_id";
	$fdata["GoodName"] = "car_id";
	$fdata["ownerTable"] = "cc_tparam_caracter";
	$fdata["Label"] = GetFieldLabel("cc_tparam_caracter","car_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "car_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "car_id";

	
	
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


	$tdatacc_tparam_caracter["car_id"] = $fdata;
		$tdatacc_tparam_caracter[".searchableFields"][] = "car_id";
//	caracter_n
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "caracter_n";
	$fdata["GoodName"] = "caracter_n";
	$fdata["ownerTable"] = "cc_tparam_caracter";
	$fdata["Label"] = GetFieldLabel("cc_tparam_caracter","caracter_n");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "caracter_n";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caracter_n";

	
	
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


	$tdatacc_tparam_caracter["caracter_n"] = $fdata;
		$tdatacc_tparam_caracter[".searchableFields"][] = "caracter_n";


$tables_data["cc_tparam_caracter"]=&$tdatacc_tparam_caracter;
$field_labels["cc_tparam_caracter"] = &$fieldLabelscc_tparam_caracter;
$fieldToolTips["cc_tparam_caracter"] = &$fieldToolTipscc_tparam_caracter;
$placeHolders["cc_tparam_caracter"] = &$placeHolderscc_tparam_caracter;
$page_titles["cc_tparam_caracter"] = &$pageTitlescc_tparam_caracter;


changeTextControlsToDate( "cc_tparam_caracter" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_tparam_caracter"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_tparam_caracter"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_tparam_caracter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "car_id,  	caracter_n";
$proto0["m_strFrom"] = "FROM cc_tparam_caracter";
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
	"m_strName" => "car_id",
	"m_strTable" => "cc_tparam_caracter",
	"m_srcTableName" => "cc_tparam_caracter"
));

$proto6["m_sql"] = "car_id";
$proto6["m_srcTableName"] = "cc_tparam_caracter";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "caracter_n",
	"m_strTable" => "cc_tparam_caracter",
	"m_srcTableName" => "cc_tparam_caracter"
));

$proto8["m_sql"] = "caracter_n";
$proto8["m_srcTableName"] = "cc_tparam_caracter";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cc_tparam_caracter";
$proto11["m_srcTableName"] = "cc_tparam_caracter";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "car_id";
$proto11["m_columns"][] = "caracter_n";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cc_tparam_caracter";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cc_tparam_caracter";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_tparam_caracter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_tparam_caracter = createSqlQuery_cc_tparam_caracter();


	
				;

		

$tdatacc_tparam_caracter[".sqlquery"] = $queryData_cc_tparam_caracter;



$tdatacc_tparam_caracter[".hasEvents"] = false;

?>