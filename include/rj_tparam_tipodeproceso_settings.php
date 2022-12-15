<?php
$tdatarj_tparam_tipodeproceso = array();
$tdatarj_tparam_tipodeproceso[".searchableFields"] = array();
$tdatarj_tparam_tipodeproceso[".ShortName"] = "rj_tparam_tipodeproceso";
$tdatarj_tparam_tipodeproceso[".OwnerID"] = "";
$tdatarj_tparam_tipodeproceso[".OriginalTable"] = "rj_tparam_tipodeproceso";


$tdatarj_tparam_tipodeproceso[".pagesByType"] = my_json_decode( "{}" );
$tdatarj_tparam_tipodeproceso[".originalPagesByType"] = $tdatarj_tparam_tipodeproceso[".pagesByType"];
$tdatarj_tparam_tipodeproceso[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatarj_tparam_tipodeproceso[".originalPages"] = $tdatarj_tparam_tipodeproceso[".pages"];
$tdatarj_tparam_tipodeproceso[".defaultPages"] = my_json_decode( "{}" );
$tdatarj_tparam_tipodeproceso[".originalDefaultPages"] = $tdatarj_tparam_tipodeproceso[".defaultPages"];

//	field labels
$fieldLabelsrj_tparam_tipodeproceso = array();
$fieldToolTipsrj_tparam_tipodeproceso = array();
$pageTitlesrj_tparam_tipodeproceso = array();
$placeHoldersrj_tparam_tipodeproceso = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_tparam_tipodeproceso["Spanish"] = array();
	$fieldToolTipsrj_tparam_tipodeproceso["Spanish"] = array();
	$placeHoldersrj_tparam_tipodeproceso["Spanish"] = array();
	$pageTitlesrj_tparam_tipodeproceso["Spanish"] = array();
	$fieldLabelsrj_tparam_tipodeproceso["Spanish"]["tp_id"] = "Tp Id";
	$fieldToolTipsrj_tparam_tipodeproceso["Spanish"]["tp_id"] = "";
	$placeHoldersrj_tparam_tipodeproceso["Spanish"]["tp_id"] = "";
	$fieldLabelsrj_tparam_tipodeproceso["Spanish"]["tipo_proceso"] = "Tipo Proceso";
	$fieldToolTipsrj_tparam_tipodeproceso["Spanish"]["tipo_proceso"] = "";
	$placeHoldersrj_tparam_tipodeproceso["Spanish"]["tipo_proceso"] = "";
	if (count($fieldToolTipsrj_tparam_tipodeproceso["Spanish"]))
		$tdatarj_tparam_tipodeproceso[".isUseToolTips"] = true;
}


	$tdatarj_tparam_tipodeproceso[".NCSearch"] = true;



$tdatarj_tparam_tipodeproceso[".shortTableName"] = "rj_tparam_tipodeproceso";
$tdatarj_tparam_tipodeproceso[".nSecOptions"] = 0;

$tdatarj_tparam_tipodeproceso[".mainTableOwnerID"] = "";
$tdatarj_tparam_tipodeproceso[".entityType"] = 0;
$tdatarj_tparam_tipodeproceso[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_tparam_tipodeproceso[".strOriginalTableName"] = "rj_tparam_tipodeproceso";

	



$tdatarj_tparam_tipodeproceso[".showAddInPopup"] = false;

$tdatarj_tparam_tipodeproceso[".showEditInPopup"] = false;

$tdatarj_tparam_tipodeproceso[".showViewInPopup"] = false;

$tdatarj_tparam_tipodeproceso[".listAjax"] = false;
//	temporary
//$tdatarj_tparam_tipodeproceso[".listAjax"] = false;

	$tdatarj_tparam_tipodeproceso[".audit"] = false;

	$tdatarj_tparam_tipodeproceso[".locking"] = false;


$pages = $tdatarj_tparam_tipodeproceso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_tparam_tipodeproceso[".edit"] = true;
	$tdatarj_tparam_tipodeproceso[".afterEditAction"] = 1;
	$tdatarj_tparam_tipodeproceso[".closePopupAfterEdit"] = 1;
	$tdatarj_tparam_tipodeproceso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_tparam_tipodeproceso[".add"] = true;
$tdatarj_tparam_tipodeproceso[".afterAddAction"] = 1;
$tdatarj_tparam_tipodeproceso[".closePopupAfterAdd"] = 1;
$tdatarj_tparam_tipodeproceso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_tparam_tipodeproceso[".list"] = true;
}



$tdatarj_tparam_tipodeproceso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_tparam_tipodeproceso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_tparam_tipodeproceso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_tparam_tipodeproceso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_tparam_tipodeproceso[".printFriendly"] = true;
}



$tdatarj_tparam_tipodeproceso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_tparam_tipodeproceso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_tparam_tipodeproceso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_tparam_tipodeproceso[".isUseAjaxSuggest"] = true;

$tdatarj_tparam_tipodeproceso[".rowHighlite"] = true;



			

$tdatarj_tparam_tipodeproceso[".ajaxCodeSnippetAdded"] = false;

$tdatarj_tparam_tipodeproceso[".buttonsAdded"] = false;

$tdatarj_tparam_tipodeproceso[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_tparam_tipodeproceso[".isUseTimeForSearch"] = false;


$tdatarj_tparam_tipodeproceso[".badgeColor"] = "4169E1";


$tdatarj_tparam_tipodeproceso[".allSearchFields"] = array();
$tdatarj_tparam_tipodeproceso[".filterFields"] = array();
$tdatarj_tparam_tipodeproceso[".requiredSearchFields"] = array();

$tdatarj_tparam_tipodeproceso[".googleLikeFields"] = array();
$tdatarj_tparam_tipodeproceso[".googleLikeFields"][] = "tp_id";
$tdatarj_tparam_tipodeproceso[".googleLikeFields"][] = "tipo_proceso";



$tdatarj_tparam_tipodeproceso[".tableType"] = "list";

$tdatarj_tparam_tipodeproceso[".printerPageOrientation"] = 0;
$tdatarj_tparam_tipodeproceso[".nPrinterPageScale"] = 100;

$tdatarj_tparam_tipodeproceso[".nPrinterSplitRecords"] = 40;

$tdatarj_tparam_tipodeproceso[".geocodingEnabled"] = false;










$tdatarj_tparam_tipodeproceso[".pageSize"] = 20;

$tdatarj_tparam_tipodeproceso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_tparam_tipodeproceso[".strOrderBy"] = $tstrOrderBy;

$tdatarj_tparam_tipodeproceso[".orderindexes"] = array();


$tdatarj_tparam_tipodeproceso[".sqlHead"] = "SELECT tp_id,  	tipo_proceso";
$tdatarj_tparam_tipodeproceso[".sqlFrom"] = "FROM rj_tparam_tipodeproceso";
$tdatarj_tparam_tipodeproceso[".sqlWhereExpr"] = "";
$tdatarj_tparam_tipodeproceso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_tparam_tipodeproceso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_tparam_tipodeproceso[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_tparam_tipodeproceso[".highlightSearchResults"] = true;

$tableKeysrj_tparam_tipodeproceso = array();
$tdatarj_tparam_tipodeproceso[".Keys"] = $tableKeysrj_tparam_tipodeproceso;


$tdatarj_tparam_tipodeproceso[".hideMobileList"] = array();




//	tp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tp_id";
	$fdata["GoodName"] = "tp_id";
	$fdata["ownerTable"] = "rj_tparam_tipodeproceso";
	$fdata["Label"] = GetFieldLabel("rj_tparam_tipodeproceso","tp_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tp_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tp_id";

	
	
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


	$tdatarj_tparam_tipodeproceso["tp_id"] = $fdata;
		$tdatarj_tparam_tipodeproceso[".searchableFields"][] = "tp_id";
//	tipo_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo_proceso";
	$fdata["GoodName"] = "tipo_proceso";
	$fdata["ownerTable"] = "rj_tparam_tipodeproceso";
	$fdata["Label"] = GetFieldLabel("rj_tparam_tipodeproceso","tipo_proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo_proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_proceso";

	
	
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


	$tdatarj_tparam_tipodeproceso["tipo_proceso"] = $fdata;
		$tdatarj_tparam_tipodeproceso[".searchableFields"][] = "tipo_proceso";


$tables_data["rj_tparam_tipodeproceso"]=&$tdatarj_tparam_tipodeproceso;
$field_labels["rj_tparam_tipodeproceso"] = &$fieldLabelsrj_tparam_tipodeproceso;
$fieldToolTips["rj_tparam_tipodeproceso"] = &$fieldToolTipsrj_tparam_tipodeproceso;
$placeHolders["rj_tparam_tipodeproceso"] = &$placeHoldersrj_tparam_tipodeproceso;
$page_titles["rj_tparam_tipodeproceso"] = &$pageTitlesrj_tparam_tipodeproceso;


changeTextControlsToDate( "rj_tparam_tipodeproceso" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_tparam_tipodeproceso"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_tparam_tipodeproceso"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_tparam_tipodeproceso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tp_id,  	tipo_proceso";
$proto0["m_strFrom"] = "FROM rj_tparam_tipodeproceso";
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
	"m_strName" => "tp_id",
	"m_strTable" => "rj_tparam_tipodeproceso",
	"m_srcTableName" => "rj_tparam_tipodeproceso"
));

$proto6["m_sql"] = "tp_id";
$proto6["m_srcTableName"] = "rj_tparam_tipodeproceso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_proceso",
	"m_strTable" => "rj_tparam_tipodeproceso",
	"m_srcTableName" => "rj_tparam_tipodeproceso"
));

$proto8["m_sql"] = "tipo_proceso";
$proto8["m_srcTableName"] = "rj_tparam_tipodeproceso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rj_tparam_tipodeproceso";
$proto11["m_srcTableName"] = "rj_tparam_tipodeproceso";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tp_id";
$proto11["m_columns"][] = "tipo_proceso";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rj_tparam_tipodeproceso";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rj_tparam_tipodeproceso";
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
$proto0["m_srcTableName"]="rj_tparam_tipodeproceso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_tparam_tipodeproceso = createSqlQuery_rj_tparam_tipodeproceso();


	
				;

		

$tdatarj_tparam_tipodeproceso[".sqlquery"] = $queryData_rj_tparam_tipodeproceso;



$tdatarj_tparam_tipodeproceso[".hasEvents"] = false;

?>