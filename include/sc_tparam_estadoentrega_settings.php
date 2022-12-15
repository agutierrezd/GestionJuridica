<?php
$tdatasc_tparam_estadoentrega = array();
$tdatasc_tparam_estadoentrega[".searchableFields"] = array();
$tdatasc_tparam_estadoentrega[".ShortName"] = "sc_tparam_estadoentrega";
$tdatasc_tparam_estadoentrega[".OwnerID"] = "";
$tdatasc_tparam_estadoentrega[".OriginalTable"] = "sc_tparam_estadoentrega";


$tdatasc_tparam_estadoentrega[".pagesByType"] = my_json_decode( "{}" );
$tdatasc_tparam_estadoentrega[".originalPagesByType"] = $tdatasc_tparam_estadoentrega[".pagesByType"];
$tdatasc_tparam_estadoentrega[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatasc_tparam_estadoentrega[".originalPages"] = $tdatasc_tparam_estadoentrega[".pages"];
$tdatasc_tparam_estadoentrega[".defaultPages"] = my_json_decode( "{}" );
$tdatasc_tparam_estadoentrega[".originalDefaultPages"] = $tdatasc_tparam_estadoentrega[".defaultPages"];

//	field labels
$fieldLabelssc_tparam_estadoentrega = array();
$fieldToolTipssc_tparam_estadoentrega = array();
$pageTitlessc_tparam_estadoentrega = array();
$placeHolderssc_tparam_estadoentrega = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssc_tparam_estadoentrega["Spanish"] = array();
	$fieldToolTipssc_tparam_estadoentrega["Spanish"] = array();
	$placeHolderssc_tparam_estadoentrega["Spanish"] = array();
	$pageTitlessc_tparam_estadoentrega["Spanish"] = array();
	$fieldLabelssc_tparam_estadoentrega["Spanish"]["estado_entrega_id"] = "Estado Entrega Id";
	$fieldToolTipssc_tparam_estadoentrega["Spanish"]["estado_entrega_id"] = "";
	$placeHolderssc_tparam_estadoentrega["Spanish"]["estado_entrega_id"] = "";
	$fieldLabelssc_tparam_estadoentrega["Spanish"]["estado_entrega"] = "Estado Entrega";
	$fieldToolTipssc_tparam_estadoentrega["Spanish"]["estado_entrega"] = "";
	$placeHolderssc_tparam_estadoentrega["Spanish"]["estado_entrega"] = "";
	if (count($fieldToolTipssc_tparam_estadoentrega["Spanish"]))
		$tdatasc_tparam_estadoentrega[".isUseToolTips"] = true;
}


	$tdatasc_tparam_estadoentrega[".NCSearch"] = true;



$tdatasc_tparam_estadoentrega[".shortTableName"] = "sc_tparam_estadoentrega";
$tdatasc_tparam_estadoentrega[".nSecOptions"] = 0;

$tdatasc_tparam_estadoentrega[".mainTableOwnerID"] = "";
$tdatasc_tparam_estadoentrega[".entityType"] = 0;
$tdatasc_tparam_estadoentrega[".connId"] = "juridica_at_172_18_0_115";


$tdatasc_tparam_estadoentrega[".strOriginalTableName"] = "sc_tparam_estadoentrega";

	



$tdatasc_tparam_estadoentrega[".showAddInPopup"] = false;

$tdatasc_tparam_estadoentrega[".showEditInPopup"] = false;

$tdatasc_tparam_estadoentrega[".showViewInPopup"] = false;

$tdatasc_tparam_estadoentrega[".listAjax"] = false;
//	temporary
//$tdatasc_tparam_estadoentrega[".listAjax"] = false;

	$tdatasc_tparam_estadoentrega[".audit"] = false;

	$tdatasc_tparam_estadoentrega[".locking"] = false;


$pages = $tdatasc_tparam_estadoentrega[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasc_tparam_estadoentrega[".edit"] = true;
	$tdatasc_tparam_estadoentrega[".afterEditAction"] = 1;
	$tdatasc_tparam_estadoentrega[".closePopupAfterEdit"] = 1;
	$tdatasc_tparam_estadoentrega[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasc_tparam_estadoentrega[".add"] = true;
$tdatasc_tparam_estadoentrega[".afterAddAction"] = 1;
$tdatasc_tparam_estadoentrega[".closePopupAfterAdd"] = 1;
$tdatasc_tparam_estadoentrega[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasc_tparam_estadoentrega[".list"] = true;
}



$tdatasc_tparam_estadoentrega[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasc_tparam_estadoentrega[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasc_tparam_estadoentrega[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasc_tparam_estadoentrega[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasc_tparam_estadoentrega[".printFriendly"] = true;
}



$tdatasc_tparam_estadoentrega[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasc_tparam_estadoentrega[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasc_tparam_estadoentrega[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasc_tparam_estadoentrega[".isUseAjaxSuggest"] = true;

$tdatasc_tparam_estadoentrega[".rowHighlite"] = true;



			

$tdatasc_tparam_estadoentrega[".ajaxCodeSnippetAdded"] = false;

$tdatasc_tparam_estadoentrega[".buttonsAdded"] = false;

$tdatasc_tparam_estadoentrega[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasc_tparam_estadoentrega[".isUseTimeForSearch"] = false;


$tdatasc_tparam_estadoentrega[".badgeColor"] = "00C2C5";


$tdatasc_tparam_estadoentrega[".allSearchFields"] = array();
$tdatasc_tparam_estadoentrega[".filterFields"] = array();
$tdatasc_tparam_estadoentrega[".requiredSearchFields"] = array();

$tdatasc_tparam_estadoentrega[".googleLikeFields"] = array();
$tdatasc_tparam_estadoentrega[".googleLikeFields"][] = "estado_entrega_id";
$tdatasc_tparam_estadoentrega[".googleLikeFields"][] = "estado_entrega";



$tdatasc_tparam_estadoentrega[".tableType"] = "list";

$tdatasc_tparam_estadoentrega[".printerPageOrientation"] = 0;
$tdatasc_tparam_estadoentrega[".nPrinterPageScale"] = 100;

$tdatasc_tparam_estadoentrega[".nPrinterSplitRecords"] = 40;

$tdatasc_tparam_estadoentrega[".geocodingEnabled"] = false;










$tdatasc_tparam_estadoentrega[".pageSize"] = 20;

$tdatasc_tparam_estadoentrega[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasc_tparam_estadoentrega[".strOrderBy"] = $tstrOrderBy;

$tdatasc_tparam_estadoentrega[".orderindexes"] = array();


$tdatasc_tparam_estadoentrega[".sqlHead"] = "SELECT estado_entrega_id,  	estado_entrega";
$tdatasc_tparam_estadoentrega[".sqlFrom"] = "FROM sc_tparam_estadoentrega";
$tdatasc_tparam_estadoentrega[".sqlWhereExpr"] = "";
$tdatasc_tparam_estadoentrega[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasc_tparam_estadoentrega[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasc_tparam_estadoentrega[".arrGroupsPerPage"] = $arrGPP;

$tdatasc_tparam_estadoentrega[".highlightSearchResults"] = true;

$tableKeyssc_tparam_estadoentrega = array();
$tableKeyssc_tparam_estadoentrega[] = "estado_entrega_id";
$tdatasc_tparam_estadoentrega[".Keys"] = $tableKeyssc_tparam_estadoentrega;


$tdatasc_tparam_estadoentrega[".hideMobileList"] = array();




//	estado_entrega_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_entrega_id";
	$fdata["GoodName"] = "estado_entrega_id";
	$fdata["ownerTable"] = "sc_tparam_estadoentrega";
	$fdata["Label"] = GetFieldLabel("sc_tparam_estadoentrega","estado_entrega_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "estado_entrega_id";

		$fdata["sourceSingle"] = "estado_entrega_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_entrega_id";

	
	
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


	$tdatasc_tparam_estadoentrega["estado_entrega_id"] = $fdata;
		$tdatasc_tparam_estadoentrega[".searchableFields"][] = "estado_entrega_id";
//	estado_entrega
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "estado_entrega";
	$fdata["GoodName"] = "estado_entrega";
	$fdata["ownerTable"] = "sc_tparam_estadoentrega";
	$fdata["Label"] = GetFieldLabel("sc_tparam_estadoentrega","estado_entrega");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_entrega";

		$fdata["sourceSingle"] = "estado_entrega";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_entrega";

	
	
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


	$tdatasc_tparam_estadoentrega["estado_entrega"] = $fdata;
		$tdatasc_tparam_estadoentrega[".searchableFields"][] = "estado_entrega";


$tables_data["sc_tparam_estadoentrega"]=&$tdatasc_tparam_estadoentrega;
$field_labels["sc_tparam_estadoentrega"] = &$fieldLabelssc_tparam_estadoentrega;
$fieldToolTips["sc_tparam_estadoentrega"] = &$fieldToolTipssc_tparam_estadoentrega;
$placeHolders["sc_tparam_estadoentrega"] = &$placeHolderssc_tparam_estadoentrega;
$page_titles["sc_tparam_estadoentrega"] = &$pageTitlessc_tparam_estadoentrega;


changeTextControlsToDate( "sc_tparam_estadoentrega" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sc_tparam_estadoentrega"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sc_tparam_estadoentrega"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sc_tparam_estadoentrega()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_entrega_id,  	estado_entrega";
$proto0["m_strFrom"] = "FROM sc_tparam_estadoentrega";
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
	"m_strName" => "estado_entrega_id",
	"m_strTable" => "sc_tparam_estadoentrega",
	"m_srcTableName" => "sc_tparam_estadoentrega"
));

$proto6["m_sql"] = "estado_entrega_id";
$proto6["m_srcTableName"] = "sc_tparam_estadoentrega";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_entrega",
	"m_strTable" => "sc_tparam_estadoentrega",
	"m_srcTableName" => "sc_tparam_estadoentrega"
));

$proto8["m_sql"] = "estado_entrega";
$proto8["m_srcTableName"] = "sc_tparam_estadoentrega";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sc_tparam_estadoentrega";
$proto11["m_srcTableName"] = "sc_tparam_estadoentrega";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_entrega_id";
$proto11["m_columns"][] = "estado_entrega";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sc_tparam_estadoentrega";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sc_tparam_estadoentrega";
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
$proto0["m_srcTableName"]="sc_tparam_estadoentrega";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sc_tparam_estadoentrega = createSqlQuery_sc_tparam_estadoentrega();


	
				;

		

$tdatasc_tparam_estadoentrega[".sqlquery"] = $queryData_sc_tparam_estadoentrega;



$tdatasc_tparam_estadoentrega[".hasEvents"] = false;

?>