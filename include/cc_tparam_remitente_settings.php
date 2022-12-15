<?php
$tdatacc_tparam_remitente = array();
$tdatacc_tparam_remitente[".searchableFields"] = array();
$tdatacc_tparam_remitente[".ShortName"] = "cc_tparam_remitente";
$tdatacc_tparam_remitente[".OwnerID"] = "";
$tdatacc_tparam_remitente[".OriginalTable"] = "cc_tparam_remitente";


$tdatacc_tparam_remitente[".pagesByType"] = my_json_decode( "{}" );
$tdatacc_tparam_remitente[".originalPagesByType"] = $tdatacc_tparam_remitente[".pagesByType"];
$tdatacc_tparam_remitente[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacc_tparam_remitente[".originalPages"] = $tdatacc_tparam_remitente[".pages"];
$tdatacc_tparam_remitente[".defaultPages"] = my_json_decode( "{}" );
$tdatacc_tparam_remitente[".originalDefaultPages"] = $tdatacc_tparam_remitente[".defaultPages"];

//	field labels
$fieldLabelscc_tparam_remitente = array();
$fieldToolTipscc_tparam_remitente = array();
$pageTitlescc_tparam_remitente = array();
$placeHolderscc_tparam_remitente = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_tparam_remitente["Spanish"] = array();
	$fieldToolTipscc_tparam_remitente["Spanish"] = array();
	$placeHolderscc_tparam_remitente["Spanish"] = array();
	$pageTitlescc_tparam_remitente["Spanish"] = array();
	$fieldLabelscc_tparam_remitente["Spanish"]["remitente_id"] = "Remitente Id";
	$fieldToolTipscc_tparam_remitente["Spanish"]["remitente_id"] = "";
	$placeHolderscc_tparam_remitente["Spanish"]["remitente_id"] = "";
	$fieldLabelscc_tparam_remitente["Spanish"]["REMITENTE"] = "REMITENTE";
	$fieldToolTipscc_tparam_remitente["Spanish"]["REMITENTE"] = "";
	$placeHolderscc_tparam_remitente["Spanish"]["REMITENTE"] = "";
	if (count($fieldToolTipscc_tparam_remitente["Spanish"]))
		$tdatacc_tparam_remitente[".isUseToolTips"] = true;
}


	$tdatacc_tparam_remitente[".NCSearch"] = true;



$tdatacc_tparam_remitente[".shortTableName"] = "cc_tparam_remitente";
$tdatacc_tparam_remitente[".nSecOptions"] = 0;

$tdatacc_tparam_remitente[".mainTableOwnerID"] = "";
$tdatacc_tparam_remitente[".entityType"] = 0;
$tdatacc_tparam_remitente[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_tparam_remitente[".strOriginalTableName"] = "cc_tparam_remitente";

	



$tdatacc_tparam_remitente[".showAddInPopup"] = false;

$tdatacc_tparam_remitente[".showEditInPopup"] = false;

$tdatacc_tparam_remitente[".showViewInPopup"] = false;

$tdatacc_tparam_remitente[".listAjax"] = false;
//	temporary
//$tdatacc_tparam_remitente[".listAjax"] = false;

	$tdatacc_tparam_remitente[".audit"] = false;

	$tdatacc_tparam_remitente[".locking"] = false;


$pages = $tdatacc_tparam_remitente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_tparam_remitente[".edit"] = true;
	$tdatacc_tparam_remitente[".afterEditAction"] = 1;
	$tdatacc_tparam_remitente[".closePopupAfterEdit"] = 1;
	$tdatacc_tparam_remitente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_tparam_remitente[".add"] = true;
$tdatacc_tparam_remitente[".afterAddAction"] = 1;
$tdatacc_tparam_remitente[".closePopupAfterAdd"] = 1;
$tdatacc_tparam_remitente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_tparam_remitente[".list"] = true;
}



$tdatacc_tparam_remitente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_tparam_remitente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_tparam_remitente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_tparam_remitente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_tparam_remitente[".printFriendly"] = true;
}



$tdatacc_tparam_remitente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_tparam_remitente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_tparam_remitente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_tparam_remitente[".isUseAjaxSuggest"] = true;

$tdatacc_tparam_remitente[".rowHighlite"] = true;



			

$tdatacc_tparam_remitente[".ajaxCodeSnippetAdded"] = false;

$tdatacc_tparam_remitente[".buttonsAdded"] = false;

$tdatacc_tparam_remitente[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_tparam_remitente[".isUseTimeForSearch"] = false;


$tdatacc_tparam_remitente[".badgeColor"] = "2F4F4F";


$tdatacc_tparam_remitente[".allSearchFields"] = array();
$tdatacc_tparam_remitente[".filterFields"] = array();
$tdatacc_tparam_remitente[".requiredSearchFields"] = array();

$tdatacc_tparam_remitente[".googleLikeFields"] = array();
$tdatacc_tparam_remitente[".googleLikeFields"][] = "remitente_id";
$tdatacc_tparam_remitente[".googleLikeFields"][] = "REMITENTE";



$tdatacc_tparam_remitente[".tableType"] = "list";

$tdatacc_tparam_remitente[".printerPageOrientation"] = 0;
$tdatacc_tparam_remitente[".nPrinterPageScale"] = 100;

$tdatacc_tparam_remitente[".nPrinterSplitRecords"] = 40;

$tdatacc_tparam_remitente[".geocodingEnabled"] = false;










$tdatacc_tparam_remitente[".pageSize"] = 20;

$tdatacc_tparam_remitente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_tparam_remitente[".strOrderBy"] = $tstrOrderBy;

$tdatacc_tparam_remitente[".orderindexes"] = array();


$tdatacc_tparam_remitente[".sqlHead"] = "SELECT remitente_id,  	REMITENTE";
$tdatacc_tparam_remitente[".sqlFrom"] = "FROM cc_tparam_remitente";
$tdatacc_tparam_remitente[".sqlWhereExpr"] = "";
$tdatacc_tparam_remitente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_tparam_remitente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_tparam_remitente[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_tparam_remitente[".highlightSearchResults"] = true;

$tableKeyscc_tparam_remitente = array();
$tableKeyscc_tparam_remitente[] = "remitente_id";
$tdatacc_tparam_remitente[".Keys"] = $tableKeyscc_tparam_remitente;


$tdatacc_tparam_remitente[".hideMobileList"] = array();




//	remitente_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "remitente_id";
	$fdata["GoodName"] = "remitente_id";
	$fdata["ownerTable"] = "cc_tparam_remitente";
	$fdata["Label"] = GetFieldLabel("cc_tparam_remitente","remitente_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "remitente_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "remitente_id";

	
	
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


	$tdatacc_tparam_remitente["remitente_id"] = $fdata;
		$tdatacc_tparam_remitente[".searchableFields"][] = "remitente_id";
//	REMITENTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "REMITENTE";
	$fdata["GoodName"] = "REMITENTE";
	$fdata["ownerTable"] = "cc_tparam_remitente";
	$fdata["Label"] = GetFieldLabel("cc_tparam_remitente","REMITENTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "REMITENTE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REMITENTE";

	
	
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


	$tdatacc_tparam_remitente["REMITENTE"] = $fdata;
		$tdatacc_tparam_remitente[".searchableFields"][] = "REMITENTE";


$tables_data["cc_tparam_remitente"]=&$tdatacc_tparam_remitente;
$field_labels["cc_tparam_remitente"] = &$fieldLabelscc_tparam_remitente;
$fieldToolTips["cc_tparam_remitente"] = &$fieldToolTipscc_tparam_remitente;
$placeHolders["cc_tparam_remitente"] = &$placeHolderscc_tparam_remitente;
$page_titles["cc_tparam_remitente"] = &$pageTitlescc_tparam_remitente;


changeTextControlsToDate( "cc_tparam_remitente" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_tparam_remitente"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_tparam_remitente"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_tparam_remitente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "remitente_id,  	REMITENTE";
$proto0["m_strFrom"] = "FROM cc_tparam_remitente";
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
	"m_strName" => "remitente_id",
	"m_strTable" => "cc_tparam_remitente",
	"m_srcTableName" => "cc_tparam_remitente"
));

$proto6["m_sql"] = "remitente_id";
$proto6["m_srcTableName"] = "cc_tparam_remitente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "REMITENTE",
	"m_strTable" => "cc_tparam_remitente",
	"m_srcTableName" => "cc_tparam_remitente"
));

$proto8["m_sql"] = "REMITENTE";
$proto8["m_srcTableName"] = "cc_tparam_remitente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cc_tparam_remitente";
$proto11["m_srcTableName"] = "cc_tparam_remitente";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "remitente_id";
$proto11["m_columns"][] = "REMITENTE";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cc_tparam_remitente";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cc_tparam_remitente";
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
$proto0["m_srcTableName"]="cc_tparam_remitente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_tparam_remitente = createSqlQuery_cc_tparam_remitente();


	
				;

		

$tdatacc_tparam_remitente[".sqlquery"] = $queryData_cc_tparam_remitente;



$tdatacc_tparam_remitente[".hasEvents"] = false;

?>