<?php
$tdatasc_tparam_tema = array();
$tdatasc_tparam_tema[".searchableFields"] = array();
$tdatasc_tparam_tema[".ShortName"] = "sc_tparam_tema";
$tdatasc_tparam_tema[".OwnerID"] = "";
$tdatasc_tparam_tema[".OriginalTable"] = "sc_tparam_tema";


$tdatasc_tparam_tema[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdatasc_tparam_tema[".originalPagesByType"] = $tdatasc_tparam_tema[".pagesByType"];
$tdatasc_tparam_tema[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdatasc_tparam_tema[".originalPages"] = $tdatasc_tparam_tema[".pages"];
$tdatasc_tparam_tema[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdatasc_tparam_tema[".originalDefaultPages"] = $tdatasc_tparam_tema[".defaultPages"];

//	field labels
$fieldLabelssc_tparam_tema = array();
$fieldToolTipssc_tparam_tema = array();
$pageTitlessc_tparam_tema = array();
$placeHolderssc_tparam_tema = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssc_tparam_tema["Spanish"] = array();
	$fieldToolTipssc_tparam_tema["Spanish"] = array();
	$placeHolderssc_tparam_tema["Spanish"] = array();
	$pageTitlessc_tparam_tema["Spanish"] = array();
	$fieldLabelssc_tparam_tema["Spanish"]["tema_id"] = "Tema Id";
	$fieldToolTipssc_tparam_tema["Spanish"]["tema_id"] = "";
	$placeHolderssc_tparam_tema["Spanish"]["tema_id"] = "";
	$fieldLabelssc_tparam_tema["Spanish"]["tema"] = "Tema";
	$fieldToolTipssc_tparam_tema["Spanish"]["tema"] = "";
	$placeHolderssc_tparam_tema["Spanish"]["tema"] = "";
	if (count($fieldToolTipssc_tparam_tema["Spanish"]))
		$tdatasc_tparam_tema[".isUseToolTips"] = true;
}


	$tdatasc_tparam_tema[".NCSearch"] = true;



$tdatasc_tparam_tema[".shortTableName"] = "sc_tparam_tema";
$tdatasc_tparam_tema[".nSecOptions"] = 0;

$tdatasc_tparam_tema[".mainTableOwnerID"] = "";
$tdatasc_tparam_tema[".entityType"] = 0;
$tdatasc_tparam_tema[".connId"] = "juridica_at_172_18_0_115";


$tdatasc_tparam_tema[".strOriginalTableName"] = "sc_tparam_tema";

	



$tdatasc_tparam_tema[".showAddInPopup"] = false;

$tdatasc_tparam_tema[".showEditInPopup"] = false;

$tdatasc_tparam_tema[".showViewInPopup"] = false;

$tdatasc_tparam_tema[".listAjax"] = false;
//	temporary
//$tdatasc_tparam_tema[".listAjax"] = false;

	$tdatasc_tparam_tema[".audit"] = false;

	$tdatasc_tparam_tema[".locking"] = false;


$pages = $tdatasc_tparam_tema[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasc_tparam_tema[".edit"] = true;
	$tdatasc_tparam_tema[".afterEditAction"] = 1;
	$tdatasc_tparam_tema[".closePopupAfterEdit"] = 1;
	$tdatasc_tparam_tema[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasc_tparam_tema[".add"] = true;
$tdatasc_tparam_tema[".afterAddAction"] = 1;
$tdatasc_tparam_tema[".closePopupAfterAdd"] = 1;
$tdatasc_tparam_tema[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasc_tparam_tema[".list"] = true;
}



$tdatasc_tparam_tema[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasc_tparam_tema[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasc_tparam_tema[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasc_tparam_tema[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasc_tparam_tema[".printFriendly"] = true;
}



$tdatasc_tparam_tema[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasc_tparam_tema[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasc_tparam_tema[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasc_tparam_tema[".isUseAjaxSuggest"] = true;

$tdatasc_tparam_tema[".rowHighlite"] = true;



			

$tdatasc_tparam_tema[".ajaxCodeSnippetAdded"] = false;

$tdatasc_tparam_tema[".buttonsAdded"] = false;

$tdatasc_tparam_tema[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasc_tparam_tema[".isUseTimeForSearch"] = false;


$tdatasc_tparam_tema[".badgeColor"] = "D2AF80";


$tdatasc_tparam_tema[".allSearchFields"] = array();
$tdatasc_tparam_tema[".filterFields"] = array();
$tdatasc_tparam_tema[".requiredSearchFields"] = array();

$tdatasc_tparam_tema[".googleLikeFields"] = array();
$tdatasc_tparam_tema[".googleLikeFields"][] = "tema_id";
$tdatasc_tparam_tema[".googleLikeFields"][] = "tema";



$tdatasc_tparam_tema[".tableType"] = "list";

$tdatasc_tparam_tema[".printerPageOrientation"] = 0;
$tdatasc_tparam_tema[".nPrinterPageScale"] = 100;

$tdatasc_tparam_tema[".nPrinterSplitRecords"] = 40;

$tdatasc_tparam_tema[".geocodingEnabled"] = false;










$tdatasc_tparam_tema[".pageSize"] = 20;

$tdatasc_tparam_tema[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasc_tparam_tema[".strOrderBy"] = $tstrOrderBy;

$tdatasc_tparam_tema[".orderindexes"] = array();


$tdatasc_tparam_tema[".sqlHead"] = "SELECT tema_id,  	tema";
$tdatasc_tparam_tema[".sqlFrom"] = "FROM sc_tparam_tema";
$tdatasc_tparam_tema[".sqlWhereExpr"] = "";
$tdatasc_tparam_tema[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasc_tparam_tema[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasc_tparam_tema[".arrGroupsPerPage"] = $arrGPP;

$tdatasc_tparam_tema[".highlightSearchResults"] = true;

$tableKeyssc_tparam_tema = array();
$tableKeyssc_tparam_tema[] = "tema_id";
$tdatasc_tparam_tema[".Keys"] = $tableKeyssc_tparam_tema;


$tdatasc_tparam_tema[".hideMobileList"] = array();




//	tema_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tema_id";
	$fdata["GoodName"] = "tema_id";
	$fdata["ownerTable"] = "sc_tparam_tema";
	$fdata["Label"] = GetFieldLabel("sc_tparam_tema","tema_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tema_id";

		$fdata["sourceSingle"] = "tema_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tema_id";

	
	
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


	$tdatasc_tparam_tema["tema_id"] = $fdata;
		$tdatasc_tparam_tema[".searchableFields"][] = "tema_id";
//	tema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tema";
	$fdata["GoodName"] = "tema";
	$fdata["ownerTable"] = "sc_tparam_tema";
	$fdata["Label"] = GetFieldLabel("sc_tparam_tema","tema");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tema";

		$fdata["sourceSingle"] = "tema";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tema";

	
	
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El término  %value% ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatasc_tparam_tema["tema"] = $fdata;
		$tdatasc_tparam_tema[".searchableFields"][] = "tema";


$tables_data["sc_tparam_tema"]=&$tdatasc_tparam_tema;
$field_labels["sc_tparam_tema"] = &$fieldLabelssc_tparam_tema;
$fieldToolTips["sc_tparam_tema"] = &$fieldToolTipssc_tparam_tema;
$placeHolders["sc_tparam_tema"] = &$placeHolderssc_tparam_tema;
$page_titles["sc_tparam_tema"] = &$pageTitlessc_tparam_tema;


changeTextControlsToDate( "sc_tparam_tema" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sc_tparam_tema"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sc_tparam_tema"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sc_tparam_tema()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tema_id,  	tema";
$proto0["m_strFrom"] = "FROM sc_tparam_tema";
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
	"m_strName" => "tema_id",
	"m_strTable" => "sc_tparam_tema",
	"m_srcTableName" => "sc_tparam_tema"
));

$proto6["m_sql"] = "tema_id";
$proto6["m_srcTableName"] = "sc_tparam_tema";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tema",
	"m_strTable" => "sc_tparam_tema",
	"m_srcTableName" => "sc_tparam_tema"
));

$proto8["m_sql"] = "tema";
$proto8["m_srcTableName"] = "sc_tparam_tema";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sc_tparam_tema";
$proto11["m_srcTableName"] = "sc_tparam_tema";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tema_id";
$proto11["m_columns"][] = "tema";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sc_tparam_tema";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sc_tparam_tema";
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
$proto0["m_srcTableName"]="sc_tparam_tema";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sc_tparam_tema = createSqlQuery_sc_tparam_tema();


	
				;

		

$tdatasc_tparam_tema[".sqlquery"] = $queryData_sc_tparam_tema;



$tdatasc_tparam_tema[".hasEvents"] = false;

?>