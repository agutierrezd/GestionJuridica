<?php
$tdatarj_tparam_sn = array();
$tdatarj_tparam_sn[".searchableFields"] = array();
$tdatarj_tparam_sn[".ShortName"] = "rj_tparam_sn";
$tdatarj_tparam_sn[".OwnerID"] = "";
$tdatarj_tparam_sn[".OriginalTable"] = "rj_tparam_sn";


$tdatarj_tparam_sn[".pagesByType"] = my_json_decode( "{}" );
$tdatarj_tparam_sn[".originalPagesByType"] = $tdatarj_tparam_sn[".pagesByType"];
$tdatarj_tparam_sn[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatarj_tparam_sn[".originalPages"] = $tdatarj_tparam_sn[".pages"];
$tdatarj_tparam_sn[".defaultPages"] = my_json_decode( "{}" );
$tdatarj_tparam_sn[".originalDefaultPages"] = $tdatarj_tparam_sn[".defaultPages"];

//	field labels
$fieldLabelsrj_tparam_sn = array();
$fieldToolTipsrj_tparam_sn = array();
$pageTitlesrj_tparam_sn = array();
$placeHoldersrj_tparam_sn = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_tparam_sn["Spanish"] = array();
	$fieldToolTipsrj_tparam_sn["Spanish"] = array();
	$placeHoldersrj_tparam_sn["Spanish"] = array();
	$pageTitlesrj_tparam_sn["Spanish"] = array();
	$fieldLabelsrj_tparam_sn["Spanish"]["radicado_ekogui"] = "Radicado Ekogui";
	$fieldToolTipsrj_tparam_sn["Spanish"]["radicado_ekogui"] = "";
	$placeHoldersrj_tparam_sn["Spanish"]["radicado_ekogui"] = "";
	if (count($fieldToolTipsrj_tparam_sn["Spanish"]))
		$tdatarj_tparam_sn[".isUseToolTips"] = true;
}


	$tdatarj_tparam_sn[".NCSearch"] = true;



$tdatarj_tparam_sn[".shortTableName"] = "rj_tparam_sn";
$tdatarj_tparam_sn[".nSecOptions"] = 0;

$tdatarj_tparam_sn[".mainTableOwnerID"] = "";
$tdatarj_tparam_sn[".entityType"] = 0;
$tdatarj_tparam_sn[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_tparam_sn[".strOriginalTableName"] = "rj_tparam_sn";

	



$tdatarj_tparam_sn[".showAddInPopup"] = false;

$tdatarj_tparam_sn[".showEditInPopup"] = false;

$tdatarj_tparam_sn[".showViewInPopup"] = false;

$tdatarj_tparam_sn[".listAjax"] = false;
//	temporary
//$tdatarj_tparam_sn[".listAjax"] = false;

	$tdatarj_tparam_sn[".audit"] = false;

	$tdatarj_tparam_sn[".locking"] = false;


$pages = $tdatarj_tparam_sn[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_tparam_sn[".edit"] = true;
	$tdatarj_tparam_sn[".afterEditAction"] = 1;
	$tdatarj_tparam_sn[".closePopupAfterEdit"] = 1;
	$tdatarj_tparam_sn[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_tparam_sn[".add"] = true;
$tdatarj_tparam_sn[".afterAddAction"] = 1;
$tdatarj_tparam_sn[".closePopupAfterAdd"] = 1;
$tdatarj_tparam_sn[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_tparam_sn[".list"] = true;
}



$tdatarj_tparam_sn[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_tparam_sn[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_tparam_sn[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_tparam_sn[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_tparam_sn[".printFriendly"] = true;
}



$tdatarj_tparam_sn[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_tparam_sn[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_tparam_sn[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_tparam_sn[".isUseAjaxSuggest"] = true;

$tdatarj_tparam_sn[".rowHighlite"] = true;



			

$tdatarj_tparam_sn[".ajaxCodeSnippetAdded"] = false;

$tdatarj_tparam_sn[".buttonsAdded"] = false;

$tdatarj_tparam_sn[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_tparam_sn[".isUseTimeForSearch"] = false;


$tdatarj_tparam_sn[".badgeColor"] = "6DA5C8";


$tdatarj_tparam_sn[".allSearchFields"] = array();
$tdatarj_tparam_sn[".filterFields"] = array();
$tdatarj_tparam_sn[".requiredSearchFields"] = array();

$tdatarj_tparam_sn[".googleLikeFields"] = array();
$tdatarj_tparam_sn[".googleLikeFields"][] = "radicado_ekogui";



$tdatarj_tparam_sn[".tableType"] = "list";

$tdatarj_tparam_sn[".printerPageOrientation"] = 0;
$tdatarj_tparam_sn[".nPrinterPageScale"] = 100;

$tdatarj_tparam_sn[".nPrinterSplitRecords"] = 40;

$tdatarj_tparam_sn[".geocodingEnabled"] = false;










$tdatarj_tparam_sn[".pageSize"] = 20;

$tdatarj_tparam_sn[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_tparam_sn[".strOrderBy"] = $tstrOrderBy;

$tdatarj_tparam_sn[".orderindexes"] = array();


$tdatarj_tparam_sn[".sqlHead"] = "SELECT radicado_ekogui";
$tdatarj_tparam_sn[".sqlFrom"] = "FROM rj_tparam_sn";
$tdatarj_tparam_sn[".sqlWhereExpr"] = "";
$tdatarj_tparam_sn[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_tparam_sn[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_tparam_sn[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_tparam_sn[".highlightSearchResults"] = true;

$tableKeysrj_tparam_sn = array();
$tdatarj_tparam_sn[".Keys"] = $tableKeysrj_tparam_sn;


$tdatarj_tparam_sn[".hideMobileList"] = array();




//	radicado_ekogui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "radicado_ekogui";
	$fdata["GoodName"] = "radicado_ekogui";
	$fdata["ownerTable"] = "rj_tparam_sn";
	$fdata["Label"] = GetFieldLabel("rj_tparam_sn","radicado_ekogui");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "radicado_ekogui";

		$fdata["sourceSingle"] = "radicado_ekogui";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "radicado_ekogui";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdatarj_tparam_sn["radicado_ekogui"] = $fdata;
		$tdatarj_tparam_sn[".searchableFields"][] = "radicado_ekogui";


$tables_data["rj_tparam_sn"]=&$tdatarj_tparam_sn;
$field_labels["rj_tparam_sn"] = &$fieldLabelsrj_tparam_sn;
$fieldToolTips["rj_tparam_sn"] = &$fieldToolTipsrj_tparam_sn;
$placeHolders["rj_tparam_sn"] = &$placeHoldersrj_tparam_sn;
$page_titles["rj_tparam_sn"] = &$pageTitlesrj_tparam_sn;


changeTextControlsToDate( "rj_tparam_sn" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_tparam_sn"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_tparam_sn"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_tparam_sn()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "radicado_ekogui";
$proto0["m_strFrom"] = "FROM rj_tparam_sn";
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
	"m_strName" => "radicado_ekogui",
	"m_strTable" => "rj_tparam_sn",
	"m_srcTableName" => "rj_tparam_sn"
));

$proto6["m_sql"] = "radicado_ekogui";
$proto6["m_srcTableName"] = "rj_tparam_sn";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "rj_tparam_sn";
$proto9["m_srcTableName"] = "rj_tparam_sn";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "radicado_ekogui";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "rj_tparam_sn";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "rj_tparam_sn";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rj_tparam_sn";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_tparam_sn = createSqlQuery_rj_tparam_sn();


	
				;

	

$tdatarj_tparam_sn[".sqlquery"] = $queryData_rj_tparam_sn;



$tdatarj_tparam_sn[".hasEvents"] = false;

?>