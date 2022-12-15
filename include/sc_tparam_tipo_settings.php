<?php
$tdatasc_tparam_tipo = array();
$tdatasc_tparam_tipo[".searchableFields"] = array();
$tdatasc_tparam_tipo[".ShortName"] = "sc_tparam_tipo";
$tdatasc_tparam_tipo[".OwnerID"] = "";
$tdatasc_tparam_tipo[".OriginalTable"] = "sc_tparam_tipo";


$tdatasc_tparam_tipo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"]}" );
$tdatasc_tparam_tipo[".originalPagesByType"] = $tdatasc_tparam_tipo[".pagesByType"];
$tdatasc_tparam_tipo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"]}" ) );
$tdatasc_tparam_tipo[".originalPages"] = $tdatasc_tparam_tipo[".pages"];
$tdatasc_tparam_tipo[".defaultPages"] = my_json_decode( "{\"add\":\"add\"}" );
$tdatasc_tparam_tipo[".originalDefaultPages"] = $tdatasc_tparam_tipo[".defaultPages"];

//	field labels
$fieldLabelssc_tparam_tipo = array();
$fieldToolTipssc_tparam_tipo = array();
$pageTitlessc_tparam_tipo = array();
$placeHolderssc_tparam_tipo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssc_tparam_tipo["Spanish"] = array();
	$fieldToolTipssc_tparam_tipo["Spanish"] = array();
	$placeHolderssc_tparam_tipo["Spanish"] = array();
	$pageTitlessc_tparam_tipo["Spanish"] = array();
	$fieldLabelssc_tparam_tipo["Spanish"]["tipo_id"] = "Tipo Id";
	$fieldToolTipssc_tparam_tipo["Spanish"]["tipo_id"] = "";
	$placeHolderssc_tparam_tipo["Spanish"]["tipo_id"] = "";
	$fieldLabelssc_tparam_tipo["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipssc_tparam_tipo["Spanish"]["tipo"] = "";
	$placeHolderssc_tparam_tipo["Spanish"]["tipo"] = "";
	if (count($fieldToolTipssc_tparam_tipo["Spanish"]))
		$tdatasc_tparam_tipo[".isUseToolTips"] = true;
}


	$tdatasc_tparam_tipo[".NCSearch"] = true;



$tdatasc_tparam_tipo[".shortTableName"] = "sc_tparam_tipo";
$tdatasc_tparam_tipo[".nSecOptions"] = 0;

$tdatasc_tparam_tipo[".mainTableOwnerID"] = "";
$tdatasc_tparam_tipo[".entityType"] = 0;
$tdatasc_tparam_tipo[".connId"] = "juridica_at_172_18_0_115";


$tdatasc_tparam_tipo[".strOriginalTableName"] = "sc_tparam_tipo";

	



$tdatasc_tparam_tipo[".showAddInPopup"] = false;

$tdatasc_tparam_tipo[".showEditInPopup"] = false;

$tdatasc_tparam_tipo[".showViewInPopup"] = false;

$tdatasc_tparam_tipo[".listAjax"] = false;
//	temporary
//$tdatasc_tparam_tipo[".listAjax"] = false;

	$tdatasc_tparam_tipo[".audit"] = false;

	$tdatasc_tparam_tipo[".locking"] = false;


$pages = $tdatasc_tparam_tipo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasc_tparam_tipo[".edit"] = true;
	$tdatasc_tparam_tipo[".afterEditAction"] = 1;
	$tdatasc_tparam_tipo[".closePopupAfterEdit"] = 1;
	$tdatasc_tparam_tipo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasc_tparam_tipo[".add"] = true;
$tdatasc_tparam_tipo[".afterAddAction"] = 1;
$tdatasc_tparam_tipo[".closePopupAfterAdd"] = 1;
$tdatasc_tparam_tipo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasc_tparam_tipo[".list"] = true;
}



$tdatasc_tparam_tipo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasc_tparam_tipo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasc_tparam_tipo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasc_tparam_tipo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasc_tparam_tipo[".printFriendly"] = true;
}



$tdatasc_tparam_tipo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasc_tparam_tipo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasc_tparam_tipo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasc_tparam_tipo[".isUseAjaxSuggest"] = true;

$tdatasc_tparam_tipo[".rowHighlite"] = true;



			

$tdatasc_tparam_tipo[".ajaxCodeSnippetAdded"] = false;

$tdatasc_tparam_tipo[".buttonsAdded"] = false;

$tdatasc_tparam_tipo[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasc_tparam_tipo[".isUseTimeForSearch"] = false;


$tdatasc_tparam_tipo[".badgeColor"] = "D2AF80";


$tdatasc_tparam_tipo[".allSearchFields"] = array();
$tdatasc_tparam_tipo[".filterFields"] = array();
$tdatasc_tparam_tipo[".requiredSearchFields"] = array();

$tdatasc_tparam_tipo[".googleLikeFields"] = array();
$tdatasc_tparam_tipo[".googleLikeFields"][] = "tipo_id";
$tdatasc_tparam_tipo[".googleLikeFields"][] = "tipo";



$tdatasc_tparam_tipo[".tableType"] = "list";

$tdatasc_tparam_tipo[".printerPageOrientation"] = 0;
$tdatasc_tparam_tipo[".nPrinterPageScale"] = 100;

$tdatasc_tparam_tipo[".nPrinterSplitRecords"] = 40;

$tdatasc_tparam_tipo[".geocodingEnabled"] = false;










$tdatasc_tparam_tipo[".pageSize"] = 20;

$tdatasc_tparam_tipo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasc_tparam_tipo[".strOrderBy"] = $tstrOrderBy;

$tdatasc_tparam_tipo[".orderindexes"] = array();


$tdatasc_tparam_tipo[".sqlHead"] = "SELECT tipo_id,  	tipo";
$tdatasc_tparam_tipo[".sqlFrom"] = "FROM sc_tparam_tipo";
$tdatasc_tparam_tipo[".sqlWhereExpr"] = "";
$tdatasc_tparam_tipo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasc_tparam_tipo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasc_tparam_tipo[".arrGroupsPerPage"] = $arrGPP;

$tdatasc_tparam_tipo[".highlightSearchResults"] = true;

$tableKeyssc_tparam_tipo = array();
$tableKeyssc_tparam_tipo[] = "tipo_id";
$tdatasc_tparam_tipo[".Keys"] = $tableKeyssc_tparam_tipo;


$tdatasc_tparam_tipo[".hideMobileList"] = array();




//	tipo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "tipo_id";
	$fdata["GoodName"] = "tipo_id";
	$fdata["ownerTable"] = "sc_tparam_tipo";
	$fdata["Label"] = GetFieldLabel("sc_tparam_tipo","tipo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "tipo_id";

		$fdata["sourceSingle"] = "tipo_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_id";

	
	
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


	$tdatasc_tparam_tipo["tipo_id"] = $fdata;
		$tdatasc_tparam_tipo[".searchableFields"][] = "tipo_id";
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "sc_tparam_tipo";
	$fdata["Label"] = GetFieldLabel("sc_tparam_tipo","tipo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tipo";

		$fdata["sourceSingle"] = "tipo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";

	
	
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


	$tdatasc_tparam_tipo["tipo"] = $fdata;
		$tdatasc_tparam_tipo[".searchableFields"][] = "tipo";


$tables_data["sc_tparam_tipo"]=&$tdatasc_tparam_tipo;
$field_labels["sc_tparam_tipo"] = &$fieldLabelssc_tparam_tipo;
$fieldToolTips["sc_tparam_tipo"] = &$fieldToolTipssc_tparam_tipo;
$placeHolders["sc_tparam_tipo"] = &$placeHolderssc_tparam_tipo;
$page_titles["sc_tparam_tipo"] = &$pageTitlessc_tparam_tipo;


changeTextControlsToDate( "sc_tparam_tipo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sc_tparam_tipo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sc_tparam_tipo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sc_tparam_tipo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "tipo_id,  	tipo";
$proto0["m_strFrom"] = "FROM sc_tparam_tipo";
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
	"m_strName" => "tipo_id",
	"m_strTable" => "sc_tparam_tipo",
	"m_srcTableName" => "sc_tparam_tipo"
));

$proto6["m_sql"] = "tipo_id";
$proto6["m_srcTableName"] = "sc_tparam_tipo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "sc_tparam_tipo",
	"m_srcTableName" => "sc_tparam_tipo"
));

$proto8["m_sql"] = "tipo";
$proto8["m_srcTableName"] = "sc_tparam_tipo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "sc_tparam_tipo";
$proto11["m_srcTableName"] = "sc_tparam_tipo";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "tipo_id";
$proto11["m_columns"][] = "tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "sc_tparam_tipo";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "sc_tparam_tipo";
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
$proto0["m_srcTableName"]="sc_tparam_tipo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sc_tparam_tipo = createSqlQuery_sc_tparam_tipo();


	
				;

		

$tdatasc_tparam_tipo[".sqlquery"] = $queryData_sc_tparam_tipo;



$tdatasc_tparam_tipo[".hasEvents"] = false;

?>