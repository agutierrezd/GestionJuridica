<?php
$tdatacc_acuerdo_pago = array();
$tdatacc_acuerdo_pago[".searchableFields"] = array();
$tdatacc_acuerdo_pago[".ShortName"] = "cc_acuerdo_pago";
$tdatacc_acuerdo_pago[".OwnerID"] = "";
$tdatacc_acuerdo_pago[".OriginalTable"] = "cc_acuerdo_pago";


$tdatacc_acuerdo_pago[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_acuerdo_pago[".originalPagesByType"] = $tdatacc_acuerdo_pago[".pagesByType"];
$tdatacc_acuerdo_pago[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_acuerdo_pago[".originalPages"] = $tdatacc_acuerdo_pago[".pages"];
$tdatacc_acuerdo_pago[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_acuerdo_pago[".originalDefaultPages"] = $tdatacc_acuerdo_pago[".defaultPages"];

//	field labels
$fieldLabelscc_acuerdo_pago = array();
$fieldToolTipscc_acuerdo_pago = array();
$pageTitlescc_acuerdo_pago = array();
$placeHolderscc_acuerdo_pago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_acuerdo_pago["Spanish"] = array();
	$fieldToolTipscc_acuerdo_pago["Spanish"] = array();
	$placeHolderscc_acuerdo_pago["Spanish"] = array();
	$pageTitlescc_acuerdo_pago["Spanish"] = array();
	$fieldLabelscc_acuerdo_pago["Spanish"]["titulo_id"] = "Titulo Id";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["titulo_id"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["titulo_id"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["CC_ID_FK"] = "CC ID FK";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["CC_ID_FK"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["CC_ID_FK"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["cuota"] = "Cuota | Mes";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["cuota"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["cuota"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["fecha_acuerdo"] = "Fecha Acuerdo";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["fecha_acuerdo"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["fecha_acuerdo"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["valoracordado"] = "Valor de la deuda";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["valoracordado"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["valoracordado"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["valorpagado"] = "Valor pagado";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["valorpagado"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["valorpagado"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["fecha_pago"] = "Fecha Pago";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["fecha_pago"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["fecha_pago"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["pagado"] = "¿Cuenta saldada?";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["pagado"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["pagado"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["anexos"] = "Acuerdo de pago";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["anexos"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["anexos"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["sys_last_date"] = "Sys Last Date";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["sys_last_date"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["sys_last_date"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["sys_user"] = "Diligenciado por:";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["sys_user"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["sys_user"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["capital"] = "Valor sanción";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["capital"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["capital"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["intereses"] = "Valor intereses | Actualización";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["intereses"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["intereses"] = "";
	$fieldLabelscc_acuerdo_pago["Spanish"]["fecha_acuerdof"] = "Fecha de finalización";
	$fieldToolTipscc_acuerdo_pago["Spanish"]["fecha_acuerdof"] = "";
	$placeHolderscc_acuerdo_pago["Spanish"]["fecha_acuerdof"] = "";
	if (count($fieldToolTipscc_acuerdo_pago["Spanish"]))
		$tdatacc_acuerdo_pago[".isUseToolTips"] = true;
}


	$tdatacc_acuerdo_pago[".NCSearch"] = true;



$tdatacc_acuerdo_pago[".shortTableName"] = "cc_acuerdo_pago";
$tdatacc_acuerdo_pago[".nSecOptions"] = 0;

$tdatacc_acuerdo_pago[".mainTableOwnerID"] = "";
$tdatacc_acuerdo_pago[".entityType"] = 0;
$tdatacc_acuerdo_pago[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_acuerdo_pago[".strOriginalTableName"] = "cc_acuerdo_pago";

	



$tdatacc_acuerdo_pago[".showAddInPopup"] = false;

$tdatacc_acuerdo_pago[".showEditInPopup"] = false;

$tdatacc_acuerdo_pago[".showViewInPopup"] = false;

$tdatacc_acuerdo_pago[".listAjax"] = false;
//	temporary
//$tdatacc_acuerdo_pago[".listAjax"] = false;

	$tdatacc_acuerdo_pago[".audit"] = false;

	$tdatacc_acuerdo_pago[".locking"] = false;


$pages = $tdatacc_acuerdo_pago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_acuerdo_pago[".edit"] = true;
	$tdatacc_acuerdo_pago[".afterEditAction"] = 1;
	$tdatacc_acuerdo_pago[".closePopupAfterEdit"] = 1;
	$tdatacc_acuerdo_pago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_acuerdo_pago[".add"] = true;
$tdatacc_acuerdo_pago[".afterAddAction"] = 1;
$tdatacc_acuerdo_pago[".closePopupAfterAdd"] = 1;
$tdatacc_acuerdo_pago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_acuerdo_pago[".list"] = true;
}



$tdatacc_acuerdo_pago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_acuerdo_pago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_acuerdo_pago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_acuerdo_pago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_acuerdo_pago[".printFriendly"] = true;
}



$tdatacc_acuerdo_pago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_acuerdo_pago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_acuerdo_pago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_acuerdo_pago[".isUseAjaxSuggest"] = true;

$tdatacc_acuerdo_pago[".rowHighlite"] = true;



						

$tdatacc_acuerdo_pago[".ajaxCodeSnippetAdded"] = false;

$tdatacc_acuerdo_pago[".buttonsAdded"] = false;

$tdatacc_acuerdo_pago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_acuerdo_pago[".isUseTimeForSearch"] = false;


$tdatacc_acuerdo_pago[".badgeColor"] = "daa520";


$tdatacc_acuerdo_pago[".allSearchFields"] = array();
$tdatacc_acuerdo_pago[".filterFields"] = array();
$tdatacc_acuerdo_pago[".requiredSearchFields"] = array();

$tdatacc_acuerdo_pago[".googleLikeFields"] = array();
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "titulo_id";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "CC_ID_FK";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "cuota";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "fecha_acuerdo";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "fecha_acuerdof";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "valoracordado";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "valorpagado";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "capital";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "intereses";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "fecha_pago";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "pagado";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "anexos";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "sys_last_date";
$tdatacc_acuerdo_pago[".googleLikeFields"][] = "sys_user";



$tdatacc_acuerdo_pago[".tableType"] = "list";

$tdatacc_acuerdo_pago[".printerPageOrientation"] = 0;
$tdatacc_acuerdo_pago[".nPrinterPageScale"] = 100;

$tdatacc_acuerdo_pago[".nPrinterSplitRecords"] = 40;

$tdatacc_acuerdo_pago[".geocodingEnabled"] = false;










$tdatacc_acuerdo_pago[".pageSize"] = 20;

$tdatacc_acuerdo_pago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_acuerdo_pago[".strOrderBy"] = $tstrOrderBy;

$tdatacc_acuerdo_pago[".orderindexes"] = array();


$tdatacc_acuerdo_pago[".sqlHead"] = "SELECT titulo_id,  	CC_ID_FK,  	cuota,  	fecha_acuerdo,  	fecha_acuerdof,  	valoracordado,  	valorpagado,  	capital,  	intereses,  	fecha_pago,  	pagado,  	anexos,  	sys_last_date,  	sys_user";
$tdatacc_acuerdo_pago[".sqlFrom"] = "FROM cc_acuerdo_pago";
$tdatacc_acuerdo_pago[".sqlWhereExpr"] = "";
$tdatacc_acuerdo_pago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_acuerdo_pago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_acuerdo_pago[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_acuerdo_pago[".highlightSearchResults"] = true;

$tableKeyscc_acuerdo_pago = array();
$tableKeyscc_acuerdo_pago[] = "titulo_id";
$tdatacc_acuerdo_pago[".Keys"] = $tableKeyscc_acuerdo_pago;


$tdatacc_acuerdo_pago[".hideMobileList"] = array();




//	titulo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "titulo_id";
	$fdata["GoodName"] = "titulo_id";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","titulo_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "titulo_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "titulo_id";

	
	
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


	$tdatacc_acuerdo_pago["titulo_id"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "titulo_id";
//	CC_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CC_ID_FK";
	$fdata["GoodName"] = "CC_ID_FK";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","CC_ID_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CC_ID_FK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CC_ID_FK";

	
	
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


	$tdatacc_acuerdo_pago["CC_ID_FK"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "CC_ID_FK";
//	cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cuota";
	$fdata["GoodName"] = "cuota";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","cuota");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuota";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuota";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
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


	$tdatacc_acuerdo_pago["cuota"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "cuota";
//	fecha_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_acuerdo";
	$fdata["GoodName"] = "fecha_acuerdo";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","fecha_acuerdo");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_acuerdo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_acuerdo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacc_acuerdo_pago["fecha_acuerdo"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "fecha_acuerdo";
//	fecha_acuerdof
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fecha_acuerdof";
	$fdata["GoodName"] = "fecha_acuerdof";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","fecha_acuerdof");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_acuerdof";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_acuerdof";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacc_acuerdo_pago["fecha_acuerdof"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "fecha_acuerdof";
//	valoracordado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valoracordado";
	$fdata["GoodName"] = "valoracordado";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","valoracordado");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valoracordado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valoracordado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacc_acuerdo_pago["valoracordado"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "valoracordado";
//	valorpagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "valorpagado";
	$fdata["GoodName"] = "valorpagado";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","valorpagado");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valorpagado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valorpagado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacc_acuerdo_pago["valorpagado"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "valorpagado";
//	capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "capital";
	$fdata["GoodName"] = "capital";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","capital");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "capital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capital";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacc_acuerdo_pago["capital"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "capital";
//	intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "intereses";
	$fdata["GoodName"] = "intereses";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","intereses");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "intereses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intereses";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacc_acuerdo_pago["intereses"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "intereses";
//	fecha_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "fecha_pago";
	$fdata["GoodName"] = "fecha_pago";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","fecha_pago");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_pago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacc_acuerdo_pago["fecha_pago"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "fecha_pago";
//	pagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "pagado";
	$fdata["GoodName"] = "pagado";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","pagado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "pagado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pagado";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "cc_tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ESTADO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatacc_acuerdo_pago["pagado"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "pagado";
//	anexos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "anexos";
	$fdata["GoodName"] = "anexos";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","anexos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "anexos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexos";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "acuerdos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "PDF");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
							$edata["acceptFileTypes"] = "pdf";
			$edata["acceptFileTypesHtml"] = ".pdf";
		$edata["acceptFileTypes"] = "(".$edata["acceptFileTypes"].")$";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatacc_acuerdo_pago["anexos"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "anexos";
//	sys_last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_last_date";
	$fdata["GoodName"] = "sys_last_date";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","sys_last_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_last_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 0;
	$edata["LastYearFactor"] = 1;

	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatacc_acuerdo_pago["sys_last_date"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "sys_last_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "cc_acuerdo_pago";
	$fdata["Label"] = GetFieldLabel("cc_acuerdo_pago","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

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


	$tdatacc_acuerdo_pago["sys_user"] = $fdata;
		$tdatacc_acuerdo_pago[".searchableFields"][] = "sys_user";


$tables_data["cc_acuerdo_pago"]=&$tdatacc_acuerdo_pago;
$field_labels["cc_acuerdo_pago"] = &$fieldLabelscc_acuerdo_pago;
$fieldToolTips["cc_acuerdo_pago"] = &$fieldToolTipscc_acuerdo_pago;
$placeHolders["cc_acuerdo_pago"] = &$placeHolderscc_acuerdo_pago;
$page_titles["cc_acuerdo_pago"] = &$pageTitlescc_acuerdo_pago;


changeTextControlsToDate( "cc_acuerdo_pago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_acuerdo_pago"] = array();
//	cc_plan_pago
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="cc_plan_pago";
		$detailsParam["dOriginalTable"] = "cc_plan_pago";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "cc_plan_pago";
	$detailsParam["dCaptionTable"] = GetTableCaption("cc_plan_pago");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["cc_acuerdo_pago"][$dIndex] = $detailsParam;

	
		$detailsTablesData["cc_acuerdo_pago"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["cc_acuerdo_pago"][$dIndex]["masterKeys"][]="titulo_id";

				$detailsTablesData["cc_acuerdo_pago"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["cc_acuerdo_pago"][$dIndex]["detailKeys"][]="acuerdo_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_acuerdo_pago"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cc_coactivo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cc_coactivo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cc_coactivo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cc_acuerdo_pago"][0] = $masterParams;
				$masterTablesData["cc_acuerdo_pago"][0]["masterKeys"] = array();
	$masterTablesData["cc_acuerdo_pago"][0]["masterKeys"][]="CC_ID";
				$masterTablesData["cc_acuerdo_pago"][0]["detailKeys"] = array();
	$masterTablesData["cc_acuerdo_pago"][0]["detailKeys"][]="CC_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_acuerdo_pago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "titulo_id,  	CC_ID_FK,  	cuota,  	fecha_acuerdo,  	fecha_acuerdof,  	valoracordado,  	valorpagado,  	capital,  	intereses,  	fecha_pago,  	pagado,  	anexos,  	sys_last_date,  	sys_user";
$proto0["m_strFrom"] = "FROM cc_acuerdo_pago";
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
	"m_strName" => "titulo_id",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto6["m_sql"] = "titulo_id";
$proto6["m_srcTableName"] = "cc_acuerdo_pago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CC_ID_FK",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto8["m_sql"] = "CC_ID_FK";
$proto8["m_srcTableName"] = "cc_acuerdo_pago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cuota",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto10["m_sql"] = "cuota";
$proto10["m_srcTableName"] = "cc_acuerdo_pago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_acuerdo",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto12["m_sql"] = "fecha_acuerdo";
$proto12["m_srcTableName"] = "cc_acuerdo_pago";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_acuerdof",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto14["m_sql"] = "fecha_acuerdof";
$proto14["m_srcTableName"] = "cc_acuerdo_pago";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valoracordado",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto16["m_sql"] = "valoracordado";
$proto16["m_srcTableName"] = "cc_acuerdo_pago";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "valorpagado",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto18["m_sql"] = "valorpagado";
$proto18["m_srcTableName"] = "cc_acuerdo_pago";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "capital",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto20["m_sql"] = "capital";
$proto20["m_srcTableName"] = "cc_acuerdo_pago";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "intereses",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto22["m_sql"] = "intereses";
$proto22["m_srcTableName"] = "cc_acuerdo_pago";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_pago",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto24["m_sql"] = "fecha_pago";
$proto24["m_srcTableName"] = "cc_acuerdo_pago";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "pagado",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto26["m_sql"] = "pagado";
$proto26["m_srcTableName"] = "cc_acuerdo_pago";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "anexos",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto28["m_sql"] = "anexos";
$proto28["m_srcTableName"] = "cc_acuerdo_pago";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_date",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto30["m_sql"] = "sys_last_date";
$proto30["m_srcTableName"] = "cc_acuerdo_pago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "cc_acuerdo_pago",
	"m_srcTableName" => "cc_acuerdo_pago"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "cc_acuerdo_pago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "cc_acuerdo_pago";
$proto35["m_srcTableName"] = "cc_acuerdo_pago";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "titulo_id";
$proto35["m_columns"][] = "CC_ID_FK";
$proto35["m_columns"][] = "cuota";
$proto35["m_columns"][] = "fecha_acuerdo";
$proto35["m_columns"][] = "fecha_acuerdof";
$proto35["m_columns"][] = "valoracordado";
$proto35["m_columns"][] = "valorpagado";
$proto35["m_columns"][] = "capital";
$proto35["m_columns"][] = "intereses";
$proto35["m_columns"][] = "fecha_pago";
$proto35["m_columns"][] = "pagado";
$proto35["m_columns"][] = "anexos";
$proto35["m_columns"][] = "sys_last_date";
$proto35["m_columns"][] = "sys_user";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "cc_acuerdo_pago";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "cc_acuerdo_pago";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_acuerdo_pago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_acuerdo_pago = createSqlQuery_cc_acuerdo_pago();


	
				;

														

$tdatacc_acuerdo_pago[".sqlquery"] = $queryData_cc_acuerdo_pago;



$tdatacc_acuerdo_pago[".hasEvents"] = false;

?>