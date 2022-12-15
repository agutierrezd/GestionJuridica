<?php
$tdatarj_tparam_etapajudicial = array();
$tdatarj_tparam_etapajudicial[".searchableFields"] = array();
$tdatarj_tparam_etapajudicial[".ShortName"] = "rj_tparam_etapajudicial";
$tdatarj_tparam_etapajudicial[".OwnerID"] = "";
$tdatarj_tparam_etapajudicial[".OriginalTable"] = "rj_tparam_etapajudicial";


$tdatarj_tparam_etapajudicial[".pagesByType"] = my_json_decode( "{}" );
$tdatarj_tparam_etapajudicial[".originalPagesByType"] = $tdatarj_tparam_etapajudicial[".pagesByType"];
$tdatarj_tparam_etapajudicial[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatarj_tparam_etapajudicial[".originalPages"] = $tdatarj_tparam_etapajudicial[".pages"];
$tdatarj_tparam_etapajudicial[".defaultPages"] = my_json_decode( "{}" );
$tdatarj_tparam_etapajudicial[".originalDefaultPages"] = $tdatarj_tparam_etapajudicial[".defaultPages"];

//	field labels
$fieldLabelsrj_tparam_etapajudicial = array();
$fieldToolTipsrj_tparam_etapajudicial = array();
$pageTitlesrj_tparam_etapajudicial = array();
$placeHoldersrj_tparam_etapajudicial = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_tparam_etapajudicial["Spanish"] = array();
	$fieldToolTipsrj_tparam_etapajudicial["Spanish"] = array();
	$placeHoldersrj_tparam_etapajudicial["Spanish"] = array();
	$pageTitlesrj_tparam_etapajudicial["Spanish"] = array();
	$fieldLabelsrj_tparam_etapajudicial["Spanish"]["ej_id"] = "Ej Id";
	$fieldToolTipsrj_tparam_etapajudicial["Spanish"]["ej_id"] = "";
	$placeHoldersrj_tparam_etapajudicial["Spanish"]["ej_id"] = "";
	$fieldLabelsrj_tparam_etapajudicial["Spanish"]["etapa_judicial"] = "Etapa Judicial";
	$fieldToolTipsrj_tparam_etapajudicial["Spanish"]["etapa_judicial"] = "";
	$placeHoldersrj_tparam_etapajudicial["Spanish"]["etapa_judicial"] = "";
	if (count($fieldToolTipsrj_tparam_etapajudicial["Spanish"]))
		$tdatarj_tparam_etapajudicial[".isUseToolTips"] = true;
}


	$tdatarj_tparam_etapajudicial[".NCSearch"] = true;



$tdatarj_tparam_etapajudicial[".shortTableName"] = "rj_tparam_etapajudicial";
$tdatarj_tparam_etapajudicial[".nSecOptions"] = 0;

$tdatarj_tparam_etapajudicial[".mainTableOwnerID"] = "";
$tdatarj_tparam_etapajudicial[".entityType"] = 0;
$tdatarj_tparam_etapajudicial[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_tparam_etapajudicial[".strOriginalTableName"] = "rj_tparam_etapajudicial";

	



$tdatarj_tparam_etapajudicial[".showAddInPopup"] = false;

$tdatarj_tparam_etapajudicial[".showEditInPopup"] = false;

$tdatarj_tparam_etapajudicial[".showViewInPopup"] = false;

$tdatarj_tparam_etapajudicial[".listAjax"] = false;
//	temporary
//$tdatarj_tparam_etapajudicial[".listAjax"] = false;

	$tdatarj_tparam_etapajudicial[".audit"] = false;

	$tdatarj_tparam_etapajudicial[".locking"] = false;


$pages = $tdatarj_tparam_etapajudicial[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_tparam_etapajudicial[".edit"] = true;
	$tdatarj_tparam_etapajudicial[".afterEditAction"] = 1;
	$tdatarj_tparam_etapajudicial[".closePopupAfterEdit"] = 1;
	$tdatarj_tparam_etapajudicial[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_tparam_etapajudicial[".add"] = true;
$tdatarj_tparam_etapajudicial[".afterAddAction"] = 1;
$tdatarj_tparam_etapajudicial[".closePopupAfterAdd"] = 1;
$tdatarj_tparam_etapajudicial[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_tparam_etapajudicial[".list"] = true;
}



$tdatarj_tparam_etapajudicial[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_tparam_etapajudicial[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_tparam_etapajudicial[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_tparam_etapajudicial[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_tparam_etapajudicial[".printFriendly"] = true;
}



$tdatarj_tparam_etapajudicial[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_tparam_etapajudicial[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_tparam_etapajudicial[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_tparam_etapajudicial[".isUseAjaxSuggest"] = true;

$tdatarj_tparam_etapajudicial[".rowHighlite"] = true;



			

$tdatarj_tparam_etapajudicial[".ajaxCodeSnippetAdded"] = false;

$tdatarj_tparam_etapajudicial[".buttonsAdded"] = false;

$tdatarj_tparam_etapajudicial[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_tparam_etapajudicial[".isUseTimeForSearch"] = false;


$tdatarj_tparam_etapajudicial[".badgeColor"] = "6493EA";


$tdatarj_tparam_etapajudicial[".allSearchFields"] = array();
$tdatarj_tparam_etapajudicial[".filterFields"] = array();
$tdatarj_tparam_etapajudicial[".requiredSearchFields"] = array();

$tdatarj_tparam_etapajudicial[".googleLikeFields"] = array();
$tdatarj_tparam_etapajudicial[".googleLikeFields"][] = "ej_id";
$tdatarj_tparam_etapajudicial[".googleLikeFields"][] = "etapa_judicial";



$tdatarj_tparam_etapajudicial[".tableType"] = "list";

$tdatarj_tparam_etapajudicial[".printerPageOrientation"] = 0;
$tdatarj_tparam_etapajudicial[".nPrinterPageScale"] = 100;

$tdatarj_tparam_etapajudicial[".nPrinterSplitRecords"] = 40;

$tdatarj_tparam_etapajudicial[".geocodingEnabled"] = false;










$tdatarj_tparam_etapajudicial[".pageSize"] = 20;

$tdatarj_tparam_etapajudicial[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_tparam_etapajudicial[".strOrderBy"] = $tstrOrderBy;

$tdatarj_tparam_etapajudicial[".orderindexes"] = array();


$tdatarj_tparam_etapajudicial[".sqlHead"] = "SELECT ej_id,  	etapa_judicial";
$tdatarj_tparam_etapajudicial[".sqlFrom"] = "FROM rj_tparam_etapajudicial";
$tdatarj_tparam_etapajudicial[".sqlWhereExpr"] = "";
$tdatarj_tparam_etapajudicial[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_tparam_etapajudicial[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_tparam_etapajudicial[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_tparam_etapajudicial[".highlightSearchResults"] = true;

$tableKeysrj_tparam_etapajudicial = array();
$tdatarj_tparam_etapajudicial[".Keys"] = $tableKeysrj_tparam_etapajudicial;


$tdatarj_tparam_etapajudicial[".hideMobileList"] = array();




//	ej_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ej_id";
	$fdata["GoodName"] = "ej_id";
	$fdata["ownerTable"] = "rj_tparam_etapajudicial";
	$fdata["Label"] = GetFieldLabel("rj_tparam_etapajudicial","ej_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ej_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ej_id";

	
	
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


	$tdatarj_tparam_etapajudicial["ej_id"] = $fdata;
		$tdatarj_tparam_etapajudicial[".searchableFields"][] = "ej_id";
//	etapa_judicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "etapa_judicial";
	$fdata["GoodName"] = "etapa_judicial";
	$fdata["ownerTable"] = "rj_tparam_etapajudicial";
	$fdata["Label"] = GetFieldLabel("rj_tparam_etapajudicial","etapa_judicial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "etapa_judicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "etapa_judicial";

	
	
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


	$tdatarj_tparam_etapajudicial["etapa_judicial"] = $fdata;
		$tdatarj_tparam_etapajudicial[".searchableFields"][] = "etapa_judicial";


$tables_data["rj_tparam_etapajudicial"]=&$tdatarj_tparam_etapajudicial;
$field_labels["rj_tparam_etapajudicial"] = &$fieldLabelsrj_tparam_etapajudicial;
$fieldToolTips["rj_tparam_etapajudicial"] = &$fieldToolTipsrj_tparam_etapajudicial;
$placeHolders["rj_tparam_etapajudicial"] = &$placeHoldersrj_tparam_etapajudicial;
$page_titles["rj_tparam_etapajudicial"] = &$pageTitlesrj_tparam_etapajudicial;


changeTextControlsToDate( "rj_tparam_etapajudicial" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_tparam_etapajudicial"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_tparam_etapajudicial"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_tparam_etapajudicial()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ej_id,  	etapa_judicial";
$proto0["m_strFrom"] = "FROM rj_tparam_etapajudicial";
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
	"m_strName" => "ej_id",
	"m_strTable" => "rj_tparam_etapajudicial",
	"m_srcTableName" => "rj_tparam_etapajudicial"
));

$proto6["m_sql"] = "ej_id";
$proto6["m_srcTableName"] = "rj_tparam_etapajudicial";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "etapa_judicial",
	"m_strTable" => "rj_tparam_etapajudicial",
	"m_srcTableName" => "rj_tparam_etapajudicial"
));

$proto8["m_sql"] = "etapa_judicial";
$proto8["m_srcTableName"] = "rj_tparam_etapajudicial";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "rj_tparam_etapajudicial";
$proto11["m_srcTableName"] = "rj_tparam_etapajudicial";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ej_id";
$proto11["m_columns"][] = "etapa_judicial";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "rj_tparam_etapajudicial";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "rj_tparam_etapajudicial";
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
$proto0["m_srcTableName"]="rj_tparam_etapajudicial";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_tparam_etapajudicial = createSqlQuery_rj_tparam_etapajudicial();


	
				;

		

$tdatarj_tparam_etapajudicial[".sqlquery"] = $queryData_rj_tparam_etapajudicial;



$tdatarj_tparam_etapajudicial[".hasEvents"] = false;

?>