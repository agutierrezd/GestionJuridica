<?php
$tdatacc_tparam_estado = array();
$tdatacc_tparam_estado[".searchableFields"] = array();
$tdatacc_tparam_estado[".ShortName"] = "cc_tparam_estado";
$tdatacc_tparam_estado[".OwnerID"] = "";
$tdatacc_tparam_estado[".OriginalTable"] = "cc_tparam_estado";


$tdatacc_tparam_estado[".pagesByType"] = my_json_decode( "{}" );
$tdatacc_tparam_estado[".originalPagesByType"] = $tdatacc_tparam_estado[".pagesByType"];
$tdatacc_tparam_estado[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatacc_tparam_estado[".originalPages"] = $tdatacc_tparam_estado[".pages"];
$tdatacc_tparam_estado[".defaultPages"] = my_json_decode( "{}" );
$tdatacc_tparam_estado[".originalDefaultPages"] = $tdatacc_tparam_estado[".defaultPages"];

//	field labels
$fieldLabelscc_tparam_estado = array();
$fieldToolTipscc_tparam_estado = array();
$pageTitlescc_tparam_estado = array();
$placeHolderscc_tparam_estado = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_tparam_estado["Spanish"] = array();
	$fieldToolTipscc_tparam_estado["Spanish"] = array();
	$placeHolderscc_tparam_estado["Spanish"] = array();
	$pageTitlescc_tparam_estado["Spanish"] = array();
	$fieldLabelscc_tparam_estado["Spanish"]["estado_id"] = "Estado Id";
	$fieldToolTipscc_tparam_estado["Spanish"]["estado_id"] = "";
	$placeHolderscc_tparam_estado["Spanish"]["estado_id"] = "";
	$fieldLabelscc_tparam_estado["Spanish"]["ESTADO"] = "ESTADO";
	$fieldToolTipscc_tparam_estado["Spanish"]["ESTADO"] = "";
	$placeHolderscc_tparam_estado["Spanish"]["ESTADO"] = "";
	if (count($fieldToolTipscc_tparam_estado["Spanish"]))
		$tdatacc_tparam_estado[".isUseToolTips"] = true;
}


	$tdatacc_tparam_estado[".NCSearch"] = true;



$tdatacc_tparam_estado[".shortTableName"] = "cc_tparam_estado";
$tdatacc_tparam_estado[".nSecOptions"] = 0;

$tdatacc_tparam_estado[".mainTableOwnerID"] = "";
$tdatacc_tparam_estado[".entityType"] = 0;
$tdatacc_tparam_estado[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_tparam_estado[".strOriginalTableName"] = "cc_tparam_estado";

	



$tdatacc_tparam_estado[".showAddInPopup"] = false;

$tdatacc_tparam_estado[".showEditInPopup"] = false;

$tdatacc_tparam_estado[".showViewInPopup"] = false;

$tdatacc_tparam_estado[".listAjax"] = false;
//	temporary
//$tdatacc_tparam_estado[".listAjax"] = false;

	$tdatacc_tparam_estado[".audit"] = false;

	$tdatacc_tparam_estado[".locking"] = false;


$pages = $tdatacc_tparam_estado[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_tparam_estado[".edit"] = true;
	$tdatacc_tparam_estado[".afterEditAction"] = 1;
	$tdatacc_tparam_estado[".closePopupAfterEdit"] = 1;
	$tdatacc_tparam_estado[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_tparam_estado[".add"] = true;
$tdatacc_tparam_estado[".afterAddAction"] = 1;
$tdatacc_tparam_estado[".closePopupAfterAdd"] = 1;
$tdatacc_tparam_estado[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_tparam_estado[".list"] = true;
}



$tdatacc_tparam_estado[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_tparam_estado[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_tparam_estado[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_tparam_estado[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_tparam_estado[".printFriendly"] = true;
}



$tdatacc_tparam_estado[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_tparam_estado[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_tparam_estado[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_tparam_estado[".isUseAjaxSuggest"] = true;

$tdatacc_tparam_estado[".rowHighlite"] = true;



			

$tdatacc_tparam_estado[".ajaxCodeSnippetAdded"] = false;

$tdatacc_tparam_estado[".buttonsAdded"] = false;

$tdatacc_tparam_estado[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_tparam_estado[".isUseTimeForSearch"] = false;


$tdatacc_tparam_estado[".badgeColor"] = "2F4F4F";


$tdatacc_tparam_estado[".allSearchFields"] = array();
$tdatacc_tparam_estado[".filterFields"] = array();
$tdatacc_tparam_estado[".requiredSearchFields"] = array();

$tdatacc_tparam_estado[".googleLikeFields"] = array();
$tdatacc_tparam_estado[".googleLikeFields"][] = "estado_id";
$tdatacc_tparam_estado[".googleLikeFields"][] = "ESTADO";



$tdatacc_tparam_estado[".tableType"] = "list";

$tdatacc_tparam_estado[".printerPageOrientation"] = 0;
$tdatacc_tparam_estado[".nPrinterPageScale"] = 100;

$tdatacc_tparam_estado[".nPrinterSplitRecords"] = 40;

$tdatacc_tparam_estado[".geocodingEnabled"] = false;










$tdatacc_tparam_estado[".pageSize"] = 20;

$tdatacc_tparam_estado[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_tparam_estado[".strOrderBy"] = $tstrOrderBy;

$tdatacc_tparam_estado[".orderindexes"] = array();


$tdatacc_tparam_estado[".sqlHead"] = "SELECT estado_id,  	ESTADO";
$tdatacc_tparam_estado[".sqlFrom"] = "FROM cc_tparam_estado";
$tdatacc_tparam_estado[".sqlWhereExpr"] = "";
$tdatacc_tparam_estado[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_tparam_estado[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_tparam_estado[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_tparam_estado[".highlightSearchResults"] = true;

$tableKeyscc_tparam_estado = array();
$tableKeyscc_tparam_estado[] = "estado_id";
$tdatacc_tparam_estado[".Keys"] = $tableKeyscc_tparam_estado;


$tdatacc_tparam_estado[".hideMobileList"] = array();




//	estado_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "estado_id";
	$fdata["GoodName"] = "estado_id";
	$fdata["ownerTable"] = "cc_tparam_estado";
	$fdata["Label"] = GetFieldLabel("cc_tparam_estado","estado_id");
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


	$tdatacc_tparam_estado["estado_id"] = $fdata;
		$tdatacc_tparam_estado[".searchableFields"][] = "estado_id";
//	ESTADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ESTADO";
	$fdata["GoodName"] = "ESTADO";
	$fdata["ownerTable"] = "cc_tparam_estado";
	$fdata["Label"] = GetFieldLabel("cc_tparam_estado","ESTADO");
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


	$tdatacc_tparam_estado["ESTADO"] = $fdata;
		$tdatacc_tparam_estado[".searchableFields"][] = "ESTADO";


$tables_data["cc_tparam_estado"]=&$tdatacc_tparam_estado;
$field_labels["cc_tparam_estado"] = &$fieldLabelscc_tparam_estado;
$fieldToolTips["cc_tparam_estado"] = &$fieldToolTipscc_tparam_estado;
$placeHolders["cc_tparam_estado"] = &$placeHolderscc_tparam_estado;
$page_titles["cc_tparam_estado"] = &$pageTitlescc_tparam_estado;


changeTextControlsToDate( "cc_tparam_estado" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_tparam_estado"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_tparam_estado"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_tparam_estado()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "estado_id,  	ESTADO";
$proto0["m_strFrom"] = "FROM cc_tparam_estado";
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
	"m_strTable" => "cc_tparam_estado",
	"m_srcTableName" => "cc_tparam_estado"
));

$proto6["m_sql"] = "estado_id";
$proto6["m_srcTableName"] = "cc_tparam_estado";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ESTADO",
	"m_strTable" => "cc_tparam_estado",
	"m_srcTableName" => "cc_tparam_estado"
));

$proto8["m_sql"] = "ESTADO";
$proto8["m_srcTableName"] = "cc_tparam_estado";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "cc_tparam_estado";
$proto11["m_srcTableName"] = "cc_tparam_estado";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "estado_id";
$proto11["m_columns"][] = "ESTADO";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "cc_tparam_estado";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "cc_tparam_estado";
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
$proto0["m_srcTableName"]="cc_tparam_estado";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_tparam_estado = createSqlQuery_cc_tparam_estado();


	
				;

		

$tdatacc_tparam_estado[".sqlquery"] = $queryData_cc_tparam_estado;



$tdatacc_tparam_estado[".hasEvents"] = false;

?>