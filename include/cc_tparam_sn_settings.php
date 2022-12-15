<?php
$tdatacc_tparam_sn = array();
$tdatacc_tparam_sn[".searchableFields"] = array();
$tdatacc_tparam_sn[".ShortName"] = "cc_tparam_sn";
$tdatacc_tparam_sn[".OwnerID"] = "";
$tdatacc_tparam_sn[".OriginalTable"] = "cc_tparam_sn";


$tdatacc_tparam_sn[".pagesByType"] = my_json_decode( "{}" );
$tdatacc_tparam_sn[".originalPagesByType"] = $tdatacc_tparam_sn[".pagesByType"];
$tdatacc_tparam_sn[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacc_tparam_sn[".originalPages"] = $tdatacc_tparam_sn[".pages"];
$tdatacc_tparam_sn[".defaultPages"] = my_json_decode( "{}" );
$tdatacc_tparam_sn[".originalDefaultPages"] = $tdatacc_tparam_sn[".defaultPages"];

//	field labels
$fieldLabelscc_tparam_sn = array();
$fieldToolTipscc_tparam_sn = array();
$pageTitlescc_tparam_sn = array();
$placeHolderscc_tparam_sn = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_tparam_sn["Spanish"] = array();
	$fieldToolTipscc_tparam_sn["Spanish"] = array();
	$placeHolderscc_tparam_sn["Spanish"] = array();
	$pageTitlescc_tparam_sn["Spanish"] = array();
	$fieldLabelscc_tparam_sn["Spanish"]["estado_id"] = "Estado Id";
	$fieldToolTipscc_tparam_sn["Spanish"]["estado_id"] = "";
	$placeHolderscc_tparam_sn["Spanish"]["estado_id"] = "";
	$fieldLabelscc_tparam_sn["Spanish"]["ESTADO"] = "ESTADO";
	$fieldToolTipscc_tparam_sn["Spanish"]["ESTADO"] = "";
	$placeHolderscc_tparam_sn["Spanish"]["ESTADO"] = "";
	if (count($fieldToolTipscc_tparam_sn["Spanish"]))
		$tdatacc_tparam_sn[".isUseToolTips"] = true;
}


	$tdatacc_tparam_sn[".NCSearch"] = true;



$tdatacc_tparam_sn[".shortTableName"] = "cc_tparam_sn";
$tdatacc_tparam_sn[".nSecOptions"] = 0;

$tdatacc_tparam_sn[".mainTableOwnerID"] = "";
$tdatacc_tparam_sn[".entityType"] = 0;
$tdatacc_tparam_sn[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_tparam_sn[".strOriginalTableName"] = "cc_tparam_sn";

	



$tdatacc_tparam_sn[".showAddInPopup"] = false;

$tdatacc_tparam_sn[".showEditInPopup"] = false;

$tdatacc_tparam_sn[".showViewInPopup"] = false;

$tdatacc_tparam_sn[".listAjax"] = false;
//	temporary
//$tdatacc_tparam_sn[".listAjax"] = false;

	$tdatacc_tparam_sn[".audit"] = false;

	$tdatacc_tparam_sn[".locking"] = false;


$pages = $tdatacc_tparam_sn[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_tparam_sn[".edit"] = true;
	$tdatacc_tparam_sn[".afterEditAction"] = 1;
	$tdatacc_tparam_sn[".closePopupAfterEdit"] = 1;
	$tdatacc_tparam_sn[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_tparam_sn[".add"] = true;
$tdatacc_tparam_sn[".afterAddAction"] = 1;
$tdatacc_tparam_sn[".closePopupAfterAdd"] = 1;
$tdatacc_tparam_sn[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_tparam_sn[".list"] = true;
}



$tdatacc_tparam_sn[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_tparam_sn[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_tparam_sn[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_tparam_sn[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_tparam_sn[".printFriendly"] = true;
}



$tdatacc_tparam_sn[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_tparam_sn[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_tparam_sn[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_tparam_sn[".isUseAjaxSuggest"] = true;

$tdatacc_tparam_sn[".rowHighlite"] = true;



			

$tdatacc_tparam_sn[".ajaxCodeSnippetAdded"] = false;

$tdatacc_tparam_sn[".buttonsAdded"] = false;

$tdatacc_tparam_sn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_tparam_sn[".isUseTimeForSearch"] = false;


$tdatacc_tparam_sn[".badgeColor"] = "E8926F";


$tdatacc_tparam_sn[".allSearchFields"] = array();
$tdatacc_tparam_sn[".filterFields"] = array();
$tdatacc_tparam_sn[".requiredSearchFields"] = array();

$tdatacc_tparam_sn[".googleLikeFields"] = array();
$tdatacc_tparam_sn[".googleLikeFields"][] = "estado_id";
$tdatacc_tparam_sn[".googleLikeFields"][] = "ESTADO";



$tdatacc_tparam_sn[".tableType"] = "list";

$tdatacc_tparam_sn[".printerPageOrientation"] = 0;
$tdatacc_tparam_sn[".nPrinterPageScale"] = 100;

$tdatacc_tparam_sn[".nPrinterSplitRecords"] = 40;

$tdatacc_tparam_sn[".geocodingEnabled"] = false;










$tdatacc_tparam_sn[".pageSize"] = 20;

$tdatacc_tparam_sn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_tparam_sn[".strOrderBy"] = $tstrOrderBy;

$tdatacc_tparam_sn[".orderindexes"] = array();


$tdatacc_tparam_sn[".sqlHead"] = "SELECT estado_id,  	ESTADO";
$tdatacc_tparam_sn[".sqlFrom"] = "FROM cc_tparam_sn";
$tdatacc_tparam_sn[".sqlWhereExpr"] = "";
$tdatacc_tparam_sn[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_tparam_sn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_tparam_sn[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_tparam_sn[".highlightSearchResults"] = true;

$tableKeyscc_tparam_sn = array();
$tableKeyscc_tparam_sn[] = "estado_id";
$tdatacc_tparam_sn[".Keys"] = $tableKeyscc_tparam_sn;


$tdatacc_tparam_sn[".hideMobileList"] = array();




//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "cc_tparam_sn";
	$fdata["Label"] = GetFieldLabel("cc_tparam_sn","estado_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estado_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_id";

	
	
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


	$tdatacc_tparam_sn["estado_id"] = $fdata;
		$tdatacc_tparam_sn[".searchableFields"][] = "estado_id";
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "cc_tparam_sn";
	$fdata["Label"] = GetFieldLabel("cc_tparam_sn","ESTADO");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatacc_tparam_sn["ESTADO"] = $fdata;
		$tdatacc_tparam_sn[".searchableFields"][] = "ESTADO";


$tables_data["cc_tparam_sn"]=&$tdatacc_tparam_sn;
$field_labels["cc_tparam_sn"] = &$fieldLabelscc_tparam_sn;
$fieldToolTips["cc_tparam_sn"] = &$fieldToolTipscc_tparam_sn;
$placeHolders["cc_tparam_sn"] = &$placeHolderscc_tparam_sn;
$page_titles["cc_tparam_sn"] = &$pageTitlescc_tparam_sn;


changeTextControlsToDate( "cc_tparam_sn" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_tparam_sn"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_tparam_sn"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_tparam_sn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_id,  	ESTADO";
$proto0["m_strFrom"] = "FROM cc_tparam_sn";
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
	"m_strName" => "estado_id",
	"m_strTable" => "cc_tparam_sn",
	"m_srcTableName" => "cc_tparam_sn"
));

$proto6["m_sql"] = "estado_id";
$proto6["m_srcTableName"] = "cc_tparam_sn";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "cc_tparam_sn",
	"m_srcTableName" => "cc_tparam_sn"
));

$proto8["m_sql"] = "ESTADO";
$proto8["m_srcTableName"] = "cc_tparam_sn";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cc_tparam_sn";
$proto11["m_srcTableName"] = "cc_tparam_sn";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_id";
$proto11["m_columns"][] = "ESTADO";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cc_tparam_sn";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cc_tparam_sn";
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
$proto0["m_srcTableName"]="cc_tparam_sn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_tparam_sn = createSqlQuery_cc_tparam_sn();


	
				;

		

$tdatacc_tparam_sn[".sqlquery"] = $queryData_cc_tparam_sn;



$tdatacc_tparam_sn[".hasEvents"] = false;

?>