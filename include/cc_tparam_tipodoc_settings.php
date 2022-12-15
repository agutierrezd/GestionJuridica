<?php
$tdatacc_tparam_tipodoc = array();
$tdatacc_tparam_tipodoc[".searchableFields"] = array();
$tdatacc_tparam_tipodoc[".ShortName"] = "cc_tparam_tipodoc";
$tdatacc_tparam_tipodoc[".OwnerID"] = "";
$tdatacc_tparam_tipodoc[".OriginalTable"] = "cc_tparam_tipodoc";


$tdatacc_tparam_tipodoc[".pagesByType"] = my_json_decode( "{}" );
$tdatacc_tparam_tipodoc[".originalPagesByType"] = $tdatacc_tparam_tipodoc[".pagesByType"];
$tdatacc_tparam_tipodoc[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacc_tparam_tipodoc[".originalPages"] = $tdatacc_tparam_tipodoc[".pages"];
$tdatacc_tparam_tipodoc[".defaultPages"] = my_json_decode( "{}" );
$tdatacc_tparam_tipodoc[".originalDefaultPages"] = $tdatacc_tparam_tipodoc[".defaultPages"];

//	field labels
$fieldLabelscc_tparam_tipodoc = array();
$fieldToolTipscc_tparam_tipodoc = array();
$pageTitlescc_tparam_tipodoc = array();
$placeHolderscc_tparam_tipodoc = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_tparam_tipodoc["Spanish"] = array();
	$fieldToolTipscc_tparam_tipodoc["Spanish"] = array();
	$placeHolderscc_tparam_tipodoc["Spanish"] = array();
	$pageTitlescc_tparam_tipodoc["Spanish"] = array();
	$fieldLabelscc_tparam_tipodoc["Spanish"]["td_id"] = "Td Id";
	$fieldToolTipscc_tparam_tipodoc["Spanish"]["td_id"] = "";
	$placeHolderscc_tparam_tipodoc["Spanish"]["td_id"] = "";
	$fieldLabelscc_tparam_tipodoc["Spanish"]["td"] = "Td";
	$fieldToolTipscc_tparam_tipodoc["Spanish"]["td"] = "";
	$placeHolderscc_tparam_tipodoc["Spanish"]["td"] = "";
	if (count($fieldToolTipscc_tparam_tipodoc["Spanish"]))
		$tdatacc_tparam_tipodoc[".isUseToolTips"] = true;
}


	$tdatacc_tparam_tipodoc[".NCSearch"] = true;



$tdatacc_tparam_tipodoc[".shortTableName"] = "cc_tparam_tipodoc";
$tdatacc_tparam_tipodoc[".nSecOptions"] = 0;

$tdatacc_tparam_tipodoc[".mainTableOwnerID"] = "";
$tdatacc_tparam_tipodoc[".entityType"] = 0;
$tdatacc_tparam_tipodoc[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_tparam_tipodoc[".strOriginalTableName"] = "cc_tparam_tipodoc";

	



$tdatacc_tparam_tipodoc[".showAddInPopup"] = false;

$tdatacc_tparam_tipodoc[".showEditInPopup"] = false;

$tdatacc_tparam_tipodoc[".showViewInPopup"] = false;

$tdatacc_tparam_tipodoc[".listAjax"] = false;
//	temporary
//$tdatacc_tparam_tipodoc[".listAjax"] = false;

	$tdatacc_tparam_tipodoc[".audit"] = false;

	$tdatacc_tparam_tipodoc[".locking"] = false;


$pages = $tdatacc_tparam_tipodoc[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_tparam_tipodoc[".edit"] = true;
	$tdatacc_tparam_tipodoc[".afterEditAction"] = 1;
	$tdatacc_tparam_tipodoc[".closePopupAfterEdit"] = 1;
	$tdatacc_tparam_tipodoc[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_tparam_tipodoc[".add"] = true;
$tdatacc_tparam_tipodoc[".afterAddAction"] = 1;
$tdatacc_tparam_tipodoc[".closePopupAfterAdd"] = 1;
$tdatacc_tparam_tipodoc[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_tparam_tipodoc[".list"] = true;
}



$tdatacc_tparam_tipodoc[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_tparam_tipodoc[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_tparam_tipodoc[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_tparam_tipodoc[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_tparam_tipodoc[".printFriendly"] = true;
}



$tdatacc_tparam_tipodoc[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_tparam_tipodoc[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_tparam_tipodoc[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_tparam_tipodoc[".isUseAjaxSuggest"] = true;

$tdatacc_tparam_tipodoc[".rowHighlite"] = true;



			

$tdatacc_tparam_tipodoc[".ajaxCodeSnippetAdded"] = false;

$tdatacc_tparam_tipodoc[".buttonsAdded"] = false;

$tdatacc_tparam_tipodoc[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_tparam_tipodoc[".isUseTimeForSearch"] = false;


$tdatacc_tparam_tipodoc[".badgeColor"] = "EDCA00";


$tdatacc_tparam_tipodoc[".allSearchFields"] = array();
$tdatacc_tparam_tipodoc[".filterFields"] = array();
$tdatacc_tparam_tipodoc[".requiredSearchFields"] = array();

$tdatacc_tparam_tipodoc[".googleLikeFields"] = array();
$tdatacc_tparam_tipodoc[".googleLikeFields"][] = "td_id";
$tdatacc_tparam_tipodoc[".googleLikeFields"][] = "td";



$tdatacc_tparam_tipodoc[".tableType"] = "list";

$tdatacc_tparam_tipodoc[".printerPageOrientation"] = 0;
$tdatacc_tparam_tipodoc[".nPrinterPageScale"] = 100;

$tdatacc_tparam_tipodoc[".nPrinterSplitRecords"] = 40;

$tdatacc_tparam_tipodoc[".geocodingEnabled"] = false;










$tdatacc_tparam_tipodoc[".pageSize"] = 20;

$tdatacc_tparam_tipodoc[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_tparam_tipodoc[".strOrderBy"] = $tstrOrderBy;

$tdatacc_tparam_tipodoc[".orderindexes"] = array();


$tdatacc_tparam_tipodoc[".sqlHead"] = "SELECT td_id,  	td";
$tdatacc_tparam_tipodoc[".sqlFrom"] = "FROM cc_tparam_tipodoc";
$tdatacc_tparam_tipodoc[".sqlWhereExpr"] = "";
$tdatacc_tparam_tipodoc[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_tparam_tipodoc[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_tparam_tipodoc[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_tparam_tipodoc[".highlightSearchResults"] = true;

$tableKeyscc_tparam_tipodoc = array();
$tableKeyscc_tparam_tipodoc[] = "td_id";
$tdatacc_tparam_tipodoc[".Keys"] = $tableKeyscc_tparam_tipodoc;


$tdatacc_tparam_tipodoc[".hideMobileList"] = array();




//	td_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "td_id";
	$fdata["GoodName"] = "td_id";
	$fdata["ownerTable"] = "cc_tparam_tipodoc";
	$fdata["Label"] = GetFieldLabel("cc_tparam_tipodoc","td_id");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "td_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "td_id";

	
	
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


	$tdatacc_tparam_tipodoc["td_id"] = $fdata;
		$tdatacc_tparam_tipodoc[".searchableFields"][] = "td_id";
//	td
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "td";
	$fdata["GoodName"] = "td";
	$fdata["ownerTable"] = "cc_tparam_tipodoc";
	$fdata["Label"] = GetFieldLabel("cc_tparam_tipodoc","td");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "td";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "td";

	
	
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


	$tdatacc_tparam_tipodoc["td"] = $fdata;
		$tdatacc_tparam_tipodoc[".searchableFields"][] = "td";


$tables_data["cc_tparam_tipodoc"]=&$tdatacc_tparam_tipodoc;
$field_labels["cc_tparam_tipodoc"] = &$fieldLabelscc_tparam_tipodoc;
$fieldToolTips["cc_tparam_tipodoc"] = &$fieldToolTipscc_tparam_tipodoc;
$placeHolders["cc_tparam_tipodoc"] = &$placeHolderscc_tparam_tipodoc;
$page_titles["cc_tparam_tipodoc"] = &$pageTitlescc_tparam_tipodoc;


changeTextControlsToDate( "cc_tparam_tipodoc" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_tparam_tipodoc"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_tparam_tipodoc"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_tparam_tipodoc()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "td_id,  	td";
$proto0["m_strFrom"] = "FROM cc_tparam_tipodoc";
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
	"m_strName" => "td_id",
	"m_strTable" => "cc_tparam_tipodoc",
	"m_srcTableName" => "cc_tparam_tipodoc"
));

$proto6["m_sql"] = "td_id";
$proto6["m_srcTableName"] = "cc_tparam_tipodoc";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "td",
	"m_strTable" => "cc_tparam_tipodoc",
	"m_srcTableName" => "cc_tparam_tipodoc"
));

$proto8["m_sql"] = "td";
$proto8["m_srcTableName"] = "cc_tparam_tipodoc";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cc_tparam_tipodoc";
$proto11["m_srcTableName"] = "cc_tparam_tipodoc";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "td_id";
$proto11["m_columns"][] = "td";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cc_tparam_tipodoc";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cc_tparam_tipodoc";
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
$proto0["m_srcTableName"]="cc_tparam_tipodoc";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_tparam_tipodoc = createSqlQuery_cc_tparam_tipodoc();


	
				;

		

$tdatacc_tparam_tipodoc[".sqlquery"] = $queryData_cc_tparam_tipodoc;



$tdatacc_tparam_tipodoc[".hasEvents"] = false;

?>