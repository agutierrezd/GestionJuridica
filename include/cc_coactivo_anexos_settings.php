<?php
$tdatacc_coactivo_anexos = array();
$tdatacc_coactivo_anexos[".searchableFields"] = array();
$tdatacc_coactivo_anexos[".ShortName"] = "cc_coactivo_anexos";
$tdatacc_coactivo_anexos[".OwnerID"] = "";
$tdatacc_coactivo_anexos[".OriginalTable"] = "cc_coactivo_anexos";


$tdatacc_coactivo_anexos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_coactivo_anexos[".originalPagesByType"] = $tdatacc_coactivo_anexos[".pagesByType"];
$tdatacc_coactivo_anexos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_coactivo_anexos[".originalPages"] = $tdatacc_coactivo_anexos[".pages"];
$tdatacc_coactivo_anexos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_coactivo_anexos[".originalDefaultPages"] = $tdatacc_coactivo_anexos[".defaultPages"];

//	field labels
$fieldLabelscc_coactivo_anexos = array();
$fieldToolTipscc_coactivo_anexos = array();
$pageTitlescc_coactivo_anexos = array();
$placeHolderscc_coactivo_anexos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_coactivo_anexos["Spanish"] = array();
	$fieldToolTipscc_coactivo_anexos["Spanish"] = array();
	$placeHolderscc_coactivo_anexos["Spanish"] = array();
	$pageTitlescc_coactivo_anexos["Spanish"] = array();
	$fieldLabelscc_coactivo_anexos["Spanish"]["anexos_id"] = "Anexos Id";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["anexos_id"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["anexos_id"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["cc_id_fk"] = "Cc Id Fk";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["cc_id_fk"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["cc_id_fk"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["cc_tipo_anexo"] = "Documento";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["cc_tipo_anexo"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["cc_tipo_anexo"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["anexo_file"] = "Anexo";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["anexo_file"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["anexo_file"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["anexo_fecha"] = "Fecha documento";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["anexo_fecha"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["anexo_fecha"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["anexo_user"] = "Registrado por";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["anexo_user"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["anexo_user"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["sys_date"] = "Fecha de registro";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["sys_date"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["sys_date"] = "";
	$fieldLabelscc_coactivo_anexos["Spanish"]["cc_tipo_nombre"] = "Nombre del anexo";
	$fieldToolTipscc_coactivo_anexos["Spanish"]["cc_tipo_nombre"] = "";
	$placeHolderscc_coactivo_anexos["Spanish"]["cc_tipo_nombre"] = "";
	if (count($fieldToolTipscc_coactivo_anexos["Spanish"]))
		$tdatacc_coactivo_anexos[".isUseToolTips"] = true;
}


	$tdatacc_coactivo_anexos[".NCSearch"] = true;



$tdatacc_coactivo_anexos[".shortTableName"] = "cc_coactivo_anexos";
$tdatacc_coactivo_anexos[".nSecOptions"] = 0;

$tdatacc_coactivo_anexos[".mainTableOwnerID"] = "";
$tdatacc_coactivo_anexos[".entityType"] = 0;
$tdatacc_coactivo_anexos[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_coactivo_anexos[".strOriginalTableName"] = "cc_coactivo_anexos";

	



$tdatacc_coactivo_anexos[".showAddInPopup"] = false;

$tdatacc_coactivo_anexos[".showEditInPopup"] = false;

$tdatacc_coactivo_anexos[".showViewInPopup"] = false;

$tdatacc_coactivo_anexos[".listAjax"] = false;
//	temporary
//$tdatacc_coactivo_anexos[".listAjax"] = false;

	$tdatacc_coactivo_anexos[".audit"] = false;

	$tdatacc_coactivo_anexos[".locking"] = false;


$pages = $tdatacc_coactivo_anexos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_coactivo_anexos[".edit"] = true;
	$tdatacc_coactivo_anexos[".afterEditAction"] = 1;
	$tdatacc_coactivo_anexos[".closePopupAfterEdit"] = 1;
	$tdatacc_coactivo_anexos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_coactivo_anexos[".add"] = true;
$tdatacc_coactivo_anexos[".afterAddAction"] = 1;
$tdatacc_coactivo_anexos[".closePopupAfterAdd"] = 1;
$tdatacc_coactivo_anexos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_coactivo_anexos[".list"] = true;
}



$tdatacc_coactivo_anexos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_coactivo_anexos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_coactivo_anexos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_coactivo_anexos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_coactivo_anexos[".printFriendly"] = true;
}



$tdatacc_coactivo_anexos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_coactivo_anexos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_coactivo_anexos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_coactivo_anexos[".isUseAjaxSuggest"] = true;

$tdatacc_coactivo_anexos[".rowHighlite"] = true;



						

$tdatacc_coactivo_anexos[".ajaxCodeSnippetAdded"] = false;

$tdatacc_coactivo_anexos[".buttonsAdded"] = false;

$tdatacc_coactivo_anexos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_coactivo_anexos[".isUseTimeForSearch"] = false;


$tdatacc_coactivo_anexos[".badgeColor"] = "0080ff";


$tdatacc_coactivo_anexos[".allSearchFields"] = array();
$tdatacc_coactivo_anexos[".filterFields"] = array();
$tdatacc_coactivo_anexos[".requiredSearchFields"] = array();

$tdatacc_coactivo_anexos[".googleLikeFields"] = array();
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "anexos_id";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "cc_id_fk";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "cc_tipo_anexo";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "cc_tipo_nombre";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "anexo_file";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "anexo_fecha";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "anexo_user";
$tdatacc_coactivo_anexos[".googleLikeFields"][] = "sys_date";



$tdatacc_coactivo_anexos[".tableType"] = "list";

$tdatacc_coactivo_anexos[".printerPageOrientation"] = 0;
$tdatacc_coactivo_anexos[".nPrinterPageScale"] = 100;

$tdatacc_coactivo_anexos[".nPrinterSplitRecords"] = 40;

$tdatacc_coactivo_anexos[".geocodingEnabled"] = false;










$tdatacc_coactivo_anexos[".pageSize"] = 20;

$tdatacc_coactivo_anexos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_coactivo_anexos[".strOrderBy"] = $tstrOrderBy;

$tdatacc_coactivo_anexos[".orderindexes"] = array();


$tdatacc_coactivo_anexos[".sqlHead"] = "SELECT anexos_id,  	cc_id_fk,  	cc_tipo_anexo,  	cc_tipo_nombre,  	anexo_file,  	anexo_fecha,  	anexo_user,  	sys_date";
$tdatacc_coactivo_anexos[".sqlFrom"] = "FROM cc_coactivo_anexos";
$tdatacc_coactivo_anexos[".sqlWhereExpr"] = "";
$tdatacc_coactivo_anexos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_coactivo_anexos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_coactivo_anexos[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_coactivo_anexos[".highlightSearchResults"] = true;

$tableKeyscc_coactivo_anexos = array();
$tableKeyscc_coactivo_anexos[] = "anexos_id";
$tdatacc_coactivo_anexos[".Keys"] = $tableKeyscc_coactivo_anexos;


$tdatacc_coactivo_anexos[".hideMobileList"] = array();




//	anexos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "anexos_id";
	$fdata["GoodName"] = "anexos_id";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","anexos_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "anexos_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexos_id";

	
	
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


	$tdatacc_coactivo_anexos["anexos_id"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "anexos_id";
//	cc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cc_id_fk";
	$fdata["GoodName"] = "cc_id_fk";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","cc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc_id_fk";

	
	
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
	$edata["LookupTable"] = "cc_coactivo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CC_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "CC_ID";

	

	
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


	$tdatacc_coactivo_anexos["cc_id_fk"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "cc_id_fk";
//	cc_tipo_anexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cc_tipo_anexo";
	$fdata["GoodName"] = "cc_tipo_anexo";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","cc_tipo_anexo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cc_tipo_anexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc_tipo_anexo";

	
	
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
	$edata["LookupTable"] = "cc_coactivo_anexos_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "anexostipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "anexostipo_nombre";

	

	
	$edata["LookupOrderBy"] = "anexostipo_nombre";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacc_coactivo_anexos["cc_tipo_anexo"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "cc_tipo_anexo";
//	cc_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cc_tipo_nombre";
	$fdata["GoodName"] = "cc_tipo_nombre";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","cc_tipo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cc_tipo_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cc_tipo_nombre";

	
	
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


	$tdatacc_coactivo_anexos["cc_tipo_nombre"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "cc_tipo_nombre";
//	anexo_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "anexo_file";
	$fdata["GoodName"] = "anexo_file";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","anexo_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_file";

		$fdata["DeleteAssociatedFile"] = true;

	
				$fdata["UploadFolder"] = "anexos";

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


	$tdatacc_coactivo_anexos["anexo_file"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "anexo_file";
//	anexo_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anexo_fecha";
	$fdata["GoodName"] = "anexo_fecha";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","anexo_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "anexo_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_fecha";

	
	
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

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 10;
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


	$tdatacc_coactivo_anexos["anexo_fecha"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "anexo_fecha";
//	anexo_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "anexo_user";
	$fdata["GoodName"] = "anexo_user";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","anexo_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_user";

	
	
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


	$tdatacc_coactivo_anexos["anexo_user"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "anexo_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "cc_coactivo_anexos";
	$fdata["Label"] = GetFieldLabel("cc_coactivo_anexos","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
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

	
	
		$edata["DateEditType"] = 5;
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


	$tdatacc_coactivo_anexos["sys_date"] = $fdata;
		$tdatacc_coactivo_anexos[".searchableFields"][] = "sys_date";


$tables_data["cc_coactivo_anexos"]=&$tdatacc_coactivo_anexos;
$field_labels["cc_coactivo_anexos"] = &$fieldLabelscc_coactivo_anexos;
$fieldToolTips["cc_coactivo_anexos"] = &$fieldToolTipscc_coactivo_anexos;
$placeHolders["cc_coactivo_anexos"] = &$placeHolderscc_coactivo_anexos;
$page_titles["cc_coactivo_anexos"] = &$pageTitlescc_coactivo_anexos;


changeTextControlsToDate( "cc_coactivo_anexos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_coactivo_anexos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_coactivo_anexos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cc_coactivo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cc_coactivo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cc_coactivo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cc_coactivo_anexos"][0] = $masterParams;
				$masterTablesData["cc_coactivo_anexos"][0]["masterKeys"] = array();
	$masterTablesData["cc_coactivo_anexos"][0]["masterKeys"][]="CC_ID";
				$masterTablesData["cc_coactivo_anexos"][0]["detailKeys"] = array();
	$masterTablesData["cc_coactivo_anexos"][0]["detailKeys"][]="cc_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_coactivo_anexos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "anexos_id,  	cc_id_fk,  	cc_tipo_anexo,  	cc_tipo_nombre,  	anexo_file,  	anexo_fecha,  	anexo_user,  	sys_date";
$proto0["m_strFrom"] = "FROM cc_coactivo_anexos";
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
	"m_strName" => "anexos_id",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto6["m_sql"] = "anexos_id";
$proto6["m_srcTableName"] = "cc_coactivo_anexos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cc_id_fk",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto8["m_sql"] = "cc_id_fk";
$proto8["m_srcTableName"] = "cc_coactivo_anexos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cc_tipo_anexo",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto10["m_sql"] = "cc_tipo_anexo";
$proto10["m_srcTableName"] = "cc_coactivo_anexos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cc_tipo_nombre",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto12["m_sql"] = "cc_tipo_nombre";
$proto12["m_srcTableName"] = "cc_coactivo_anexos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_file",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto14["m_sql"] = "anexo_file";
$proto14["m_srcTableName"] = "cc_coactivo_anexos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_fecha",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto16["m_sql"] = "anexo_fecha";
$proto16["m_srcTableName"] = "cc_coactivo_anexos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_user",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto18["m_sql"] = "anexo_user";
$proto18["m_srcTableName"] = "cc_coactivo_anexos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "cc_coactivo_anexos",
	"m_srcTableName" => "cc_coactivo_anexos"
));

$proto20["m_sql"] = "sys_date";
$proto20["m_srcTableName"] = "cc_coactivo_anexos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cc_coactivo_anexos";
$proto23["m_srcTableName"] = "cc_coactivo_anexos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "anexos_id";
$proto23["m_columns"][] = "cc_id_fk";
$proto23["m_columns"][] = "cc_tipo_anexo";
$proto23["m_columns"][] = "cc_tipo_nombre";
$proto23["m_columns"][] = "anexo_file";
$proto23["m_columns"][] = "anexo_fecha";
$proto23["m_columns"][] = "anexo_user";
$proto23["m_columns"][] = "sys_date";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cc_coactivo_anexos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cc_coactivo_anexos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="cc_coactivo_anexos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_coactivo_anexos = createSqlQuery_cc_coactivo_anexos();


	
				;

								

$tdatacc_coactivo_anexos[".sqlquery"] = $queryData_cc_coactivo_anexos;



$tdatacc_coactivo_anexos[".hasEvents"] = false;

?>