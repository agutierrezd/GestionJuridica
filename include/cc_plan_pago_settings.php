<?php
$tdatacc_plan_pago = array();
$tdatacc_plan_pago[".searchableFields"] = array();
$tdatacc_plan_pago[".ShortName"] = "cc_plan_pago";
$tdatacc_plan_pago[".OwnerID"] = "";
$tdatacc_plan_pago[".OriginalTable"] = "cc_plan_pago";


$tdatacc_plan_pago[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_plan_pago[".originalPagesByType"] = $tdatacc_plan_pago[".pagesByType"];
$tdatacc_plan_pago[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_plan_pago[".originalPages"] = $tdatacc_plan_pago[".pages"];
$tdatacc_plan_pago[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_plan_pago[".originalDefaultPages"] = $tdatacc_plan_pago[".defaultPages"];

//	field labels
$fieldLabelscc_plan_pago = array();
$fieldToolTipscc_plan_pago = array();
$pageTitlescc_plan_pago = array();
$placeHolderscc_plan_pago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_plan_pago["Spanish"] = array();
	$fieldToolTipscc_plan_pago["Spanish"] = array();
	$placeHolderscc_plan_pago["Spanish"] = array();
	$pageTitlescc_plan_pago["Spanish"] = array();
	$fieldLabelscc_plan_pago["Spanish"]["titulo_id"] = "Titulo Id";
	$fieldToolTipscc_plan_pago["Spanish"]["titulo_id"] = "";
	$placeHolderscc_plan_pago["Spanish"]["titulo_id"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["acuerdo_id_fk"] = "Acuerdo Id Fk";
	$fieldToolTipscc_plan_pago["Spanish"]["acuerdo_id_fk"] = "";
	$placeHolderscc_plan_pago["Spanish"]["acuerdo_id_fk"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["cuota"] = "Num. cuota";
	$fieldToolTipscc_plan_pago["Spanish"]["cuota"] = "";
	$placeHolderscc_plan_pago["Spanish"]["cuota"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["fecha_acuerdo"] = "Fecha programada";
	$fieldToolTipscc_plan_pago["Spanish"]["fecha_acuerdo"] = "";
	$placeHolderscc_plan_pago["Spanish"]["fecha_acuerdo"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["valoracordado"] = "Valor programado";
	$fieldToolTipscc_plan_pago["Spanish"]["valoracordado"] = "";
	$placeHolderscc_plan_pago["Spanish"]["valoracordado"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["valorpagado"] = "Valor pagado";
	$fieldToolTipscc_plan_pago["Spanish"]["valorpagado"] = "";
	$placeHolderscc_plan_pago["Spanish"]["valorpagado"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["capital"] = "Aporte a capital";
	$fieldToolTipscc_plan_pago["Spanish"]["capital"] = "";
	$placeHolderscc_plan_pago["Spanish"]["capital"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["intereses"] = "Aporte a intereses";
	$fieldToolTipscc_plan_pago["Spanish"]["intereses"] = "";
	$placeHolderscc_plan_pago["Spanish"]["intereses"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["fecha_pago"] = "Fecha de pago";
	$fieldToolTipscc_plan_pago["Spanish"]["fecha_pago"] = "";
	$placeHolderscc_plan_pago["Spanish"]["fecha_pago"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["pagado"] = "¿Pago realizado?";
	$fieldToolTipscc_plan_pago["Spanish"]["pagado"] = "";
	$placeHolderscc_plan_pago["Spanish"]["pagado"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["anexos"] = "Soporte de pago";
	$fieldToolTipscc_plan_pago["Spanish"]["anexos"] = "";
	$placeHolderscc_plan_pago["Spanish"]["anexos"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["sys_last_date"] = "Última fecha de actividad";
	$fieldToolTipscc_plan_pago["Spanish"]["sys_last_date"] = "";
	$placeHolderscc_plan_pago["Spanish"]["sys_last_date"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["sys_user"] = "Actualizado por:";
	$fieldToolTipscc_plan_pago["Spanish"]["sys_user"] = "";
	$placeHolderscc_plan_pago["Spanish"]["sys_user"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["confirmado"] = "¿Pago confirmado?";
	$fieldToolTipscc_plan_pago["Spanish"]["confirmado"] = "";
	$placeHolderscc_plan_pago["Spanish"]["confirmado"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["anexo_confirmado"] = "Soporte confirmación";
	$fieldToolTipscc_plan_pago["Spanish"]["anexo_confirmado"] = "";
	$placeHolderscc_plan_pago["Spanish"]["anexo_confirmado"] = "";
	$fieldLabelscc_plan_pago["Spanish"]["obs"] = "Observaciones";
	$fieldToolTipscc_plan_pago["Spanish"]["obs"] = "";
	$placeHolderscc_plan_pago["Spanish"]["obs"] = "";
	if (count($fieldToolTipscc_plan_pago["Spanish"]))
		$tdatacc_plan_pago[".isUseToolTips"] = true;
}


	$tdatacc_plan_pago[".NCSearch"] = true;



$tdatacc_plan_pago[".shortTableName"] = "cc_plan_pago";
$tdatacc_plan_pago[".nSecOptions"] = 0;

$tdatacc_plan_pago[".mainTableOwnerID"] = "";
$tdatacc_plan_pago[".entityType"] = 0;
$tdatacc_plan_pago[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_plan_pago[".strOriginalTableName"] = "cc_plan_pago";

	



$tdatacc_plan_pago[".showAddInPopup"] = false;

$tdatacc_plan_pago[".showEditInPopup"] = false;

$tdatacc_plan_pago[".showViewInPopup"] = false;

$tdatacc_plan_pago[".listAjax"] = false;
//	temporary
//$tdatacc_plan_pago[".listAjax"] = false;

	$tdatacc_plan_pago[".audit"] = false;

	$tdatacc_plan_pago[".locking"] = false;


$pages = $tdatacc_plan_pago[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_plan_pago[".edit"] = true;
	$tdatacc_plan_pago[".afterEditAction"] = 1;
	$tdatacc_plan_pago[".closePopupAfterEdit"] = 1;
	$tdatacc_plan_pago[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_plan_pago[".add"] = true;
$tdatacc_plan_pago[".afterAddAction"] = 1;
$tdatacc_plan_pago[".closePopupAfterAdd"] = 1;
$tdatacc_plan_pago[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_plan_pago[".list"] = true;
}



$tdatacc_plan_pago[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_plan_pago[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_plan_pago[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_plan_pago[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_plan_pago[".printFriendly"] = true;
}



$tdatacc_plan_pago[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_plan_pago[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_plan_pago[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_plan_pago[".isUseAjaxSuggest"] = true;

$tdatacc_plan_pago[".rowHighlite"] = true;



						

$tdatacc_plan_pago[".ajaxCodeSnippetAdded"] = false;

$tdatacc_plan_pago[".buttonsAdded"] = false;

$tdatacc_plan_pago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_plan_pago[".isUseTimeForSearch"] = false;


$tdatacc_plan_pago[".badgeColor"] = "4169E1";


$tdatacc_plan_pago[".allSearchFields"] = array();
$tdatacc_plan_pago[".filterFields"] = array();
$tdatacc_plan_pago[".requiredSearchFields"] = array();

$tdatacc_plan_pago[".googleLikeFields"] = array();
$tdatacc_plan_pago[".googleLikeFields"][] = "titulo_id";
$tdatacc_plan_pago[".googleLikeFields"][] = "acuerdo_id_fk";
$tdatacc_plan_pago[".googleLikeFields"][] = "cuota";
$tdatacc_plan_pago[".googleLikeFields"][] = "fecha_acuerdo";
$tdatacc_plan_pago[".googleLikeFields"][] = "valoracordado";
$tdatacc_plan_pago[".googleLikeFields"][] = "valorpagado";
$tdatacc_plan_pago[".googleLikeFields"][] = "capital";
$tdatacc_plan_pago[".googleLikeFields"][] = "intereses";
$tdatacc_plan_pago[".googleLikeFields"][] = "fecha_pago";
$tdatacc_plan_pago[".googleLikeFields"][] = "pagado";
$tdatacc_plan_pago[".googleLikeFields"][] = "confirmado";
$tdatacc_plan_pago[".googleLikeFields"][] = "anexo_confirmado";
$tdatacc_plan_pago[".googleLikeFields"][] = "anexos";
$tdatacc_plan_pago[".googleLikeFields"][] = "obs";
$tdatacc_plan_pago[".googleLikeFields"][] = "sys_last_date";
$tdatacc_plan_pago[".googleLikeFields"][] = "sys_user";



$tdatacc_plan_pago[".tableType"] = "list";

$tdatacc_plan_pago[".printerPageOrientation"] = 0;
$tdatacc_plan_pago[".nPrinterPageScale"] = 100;

$tdatacc_plan_pago[".nPrinterSplitRecords"] = 40;

$tdatacc_plan_pago[".geocodingEnabled"] = false;










$tdatacc_plan_pago[".pageSize"] = 20;

$tdatacc_plan_pago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_plan_pago[".strOrderBy"] = $tstrOrderBy;

$tdatacc_plan_pago[".orderindexes"] = array();


$tdatacc_plan_pago[".sqlHead"] = "SELECT titulo_id,  	acuerdo_id_fk,  	cuota,  	fecha_acuerdo,  	valoracordado,  	valorpagado,  	capital,  	intereses,  	fecha_pago,  	pagado,  	confirmado,  	anexo_confirmado,  	anexos,  	obs,  	sys_last_date,  	sys_user";
$tdatacc_plan_pago[".sqlFrom"] = "FROM cc_plan_pago";
$tdatacc_plan_pago[".sqlWhereExpr"] = "";
$tdatacc_plan_pago[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_plan_pago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_plan_pago[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_plan_pago[".highlightSearchResults"] = true;

$tableKeyscc_plan_pago = array();
$tableKeyscc_plan_pago[] = "titulo_id";
$tdatacc_plan_pago[".Keys"] = $tableKeyscc_plan_pago;


$tdatacc_plan_pago[".hideMobileList"] = array();




//	titulo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "titulo_id";
	$fdata["GoodName"] = "titulo_id";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","titulo_id");
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


	$tdatacc_plan_pago["titulo_id"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "titulo_id";
//	acuerdo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "acuerdo_id_fk";
	$fdata["GoodName"] = "acuerdo_id_fk";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","acuerdo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "acuerdo_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "acuerdo_id_fk";

	
	
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
	$edata["LookupTable"] = "cc_acuerdo_pago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "titulo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "titulo_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacc_plan_pago["acuerdo_id_fk"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "acuerdo_id_fk";
//	cuota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cuota";
	$fdata["GoodName"] = "cuota";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","cuota");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatacc_plan_pago["cuota"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "cuota";
//	fecha_acuerdo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fecha_acuerdo";
	$fdata["GoodName"] = "fecha_acuerdo";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","fecha_acuerdo");
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


	$tdatacc_plan_pago["fecha_acuerdo"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "fecha_acuerdo";
//	valoracordado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "valoracordado";
	$fdata["GoodName"] = "valoracordado";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","valoracordado");
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


	$tdatacc_plan_pago["valoracordado"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "valoracordado";
//	valorpagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "valorpagado";
	$fdata["GoodName"] = "valorpagado";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","valorpagado");
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


	$tdatacc_plan_pago["valorpagado"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "valorpagado";
//	capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "capital";
	$fdata["GoodName"] = "capital";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","capital");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "capital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capital";

	
	
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


	$tdatacc_plan_pago["capital"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "capital";
//	intereses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "intereses";
	$fdata["GoodName"] = "intereses";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","intereses");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "intereses";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "intereses";

	
	
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


	$tdatacc_plan_pago["intereses"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "intereses";
//	fecha_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "fecha_pago";
	$fdata["GoodName"] = "fecha_pago";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","fecha_pago");
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


	$tdatacc_plan_pago["fecha_pago"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "fecha_pago";
//	pagado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pagado";
	$fdata["GoodName"] = "pagado";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","pagado");
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


	$tdatacc_plan_pago["pagado"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "pagado";
//	confirmado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "confirmado";
	$fdata["GoodName"] = "confirmado";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","confirmado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "confirmado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "confirmado";

	
	
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


	$tdatacc_plan_pago["confirmado"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "confirmado";
//	anexo_confirmado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "anexo_confirmado";
	$fdata["GoodName"] = "anexo_confirmado";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","anexo_confirmado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo_confirmado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_confirmado";

	
	
				$fdata["UploadFolder"] = "confirmacion";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatacc_plan_pago["anexo_confirmado"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "anexo_confirmado";
//	anexos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "anexos";
	$fdata["GoodName"] = "anexos";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","anexos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "anexos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexos";

	
	
				$fdata["UploadFolder"] = "pagos";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatacc_plan_pago["anexos"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "anexos";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacc_plan_pago["obs"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "obs";
//	sys_last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_last_date";
	$fdata["GoodName"] = "sys_last_date";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","sys_last_date");
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


	$tdatacc_plan_pago["sys_last_date"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "sys_last_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "cc_plan_pago";
	$fdata["Label"] = GetFieldLabel("cc_plan_pago","sys_user");
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


	$tdatacc_plan_pago["sys_user"] = $fdata;
		$tdatacc_plan_pago[".searchableFields"][] = "sys_user";


$tables_data["cc_plan_pago"]=&$tdatacc_plan_pago;
$field_labels["cc_plan_pago"] = &$fieldLabelscc_plan_pago;
$fieldToolTips["cc_plan_pago"] = &$fieldToolTipscc_plan_pago;
$placeHolders["cc_plan_pago"] = &$placeHolderscc_plan_pago;
$page_titles["cc_plan_pago"] = &$pageTitlescc_plan_pago;


changeTextControlsToDate( "cc_plan_pago" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_plan_pago"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_plan_pago"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cc_acuerdo_pago";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cc_acuerdo_pago";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cc_acuerdo_pago";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cc_plan_pago"][0] = $masterParams;
				$masterTablesData["cc_plan_pago"][0]["masterKeys"] = array();
	$masterTablesData["cc_plan_pago"][0]["masterKeys"][]="titulo_id";
				$masterTablesData["cc_plan_pago"][0]["detailKeys"] = array();
	$masterTablesData["cc_plan_pago"][0]["detailKeys"][]="acuerdo_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_plan_pago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "titulo_id,  	acuerdo_id_fk,  	cuota,  	fecha_acuerdo,  	valoracordado,  	valorpagado,  	capital,  	intereses,  	fecha_pago,  	pagado,  	confirmado,  	anexo_confirmado,  	anexos,  	obs,  	sys_last_date,  	sys_user";
$proto0["m_strFrom"] = "FROM cc_plan_pago";
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
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto6["m_sql"] = "titulo_id";
$proto6["m_srcTableName"] = "cc_plan_pago";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "acuerdo_id_fk",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto8["m_sql"] = "acuerdo_id_fk";
$proto8["m_srcTableName"] = "cc_plan_pago";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cuota",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto10["m_sql"] = "cuota";
$proto10["m_srcTableName"] = "cc_plan_pago";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_acuerdo",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto12["m_sql"] = "fecha_acuerdo";
$proto12["m_srcTableName"] = "cc_plan_pago";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "valoracordado",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto14["m_sql"] = "valoracordado";
$proto14["m_srcTableName"] = "cc_plan_pago";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "valorpagado",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto16["m_sql"] = "valorpagado";
$proto16["m_srcTableName"] = "cc_plan_pago";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "capital",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto18["m_sql"] = "capital";
$proto18["m_srcTableName"] = "cc_plan_pago";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "intereses",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto20["m_sql"] = "intereses";
$proto20["m_srcTableName"] = "cc_plan_pago";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_pago",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto22["m_sql"] = "fecha_pago";
$proto22["m_srcTableName"] = "cc_plan_pago";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pagado",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto24["m_sql"] = "pagado";
$proto24["m_srcTableName"] = "cc_plan_pago";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "confirmado",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto26["m_sql"] = "confirmado";
$proto26["m_srcTableName"] = "cc_plan_pago";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_confirmado",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto28["m_sql"] = "anexo_confirmado";
$proto28["m_srcTableName"] = "cc_plan_pago";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "anexos",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto30["m_sql"] = "anexos";
$proto30["m_srcTableName"] = "cc_plan_pago";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto32["m_sql"] = "obs";
$proto32["m_srcTableName"] = "cc_plan_pago";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_date",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto34["m_sql"] = "sys_last_date";
$proto34["m_srcTableName"] = "cc_plan_pago";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "cc_plan_pago",
	"m_srcTableName" => "cc_plan_pago"
));

$proto36["m_sql"] = "sys_user";
$proto36["m_srcTableName"] = "cc_plan_pago";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "cc_plan_pago";
$proto39["m_srcTableName"] = "cc_plan_pago";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "titulo_id";
$proto39["m_columns"][] = "acuerdo_id_fk";
$proto39["m_columns"][] = "cuota";
$proto39["m_columns"][] = "fecha_acuerdo";
$proto39["m_columns"][] = "valoracordado";
$proto39["m_columns"][] = "valorpagado";
$proto39["m_columns"][] = "capital";
$proto39["m_columns"][] = "intereses";
$proto39["m_columns"][] = "fecha_pago";
$proto39["m_columns"][] = "pagado";
$proto39["m_columns"][] = "confirmado";
$proto39["m_columns"][] = "anexo_confirmado";
$proto39["m_columns"][] = "anexos";
$proto39["m_columns"][] = "obs";
$proto39["m_columns"][] = "sys_last_date";
$proto39["m_columns"][] = "sys_user";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "cc_plan_pago";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "cc_plan_pago";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_plan_pago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_plan_pago = createSqlQuery_cc_plan_pago();


	
				;

																

$tdatacc_plan_pago[".sqlquery"] = $queryData_cc_plan_pago;



$tdatacc_plan_pago[".hasEvents"] = false;

?>