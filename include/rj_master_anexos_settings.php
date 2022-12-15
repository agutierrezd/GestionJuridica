<?php
$tdatarj_master_anexos = array();
$tdatarj_master_anexos[".searchableFields"] = array();
$tdatarj_master_anexos[".ShortName"] = "rj_master_anexos";
$tdatarj_master_anexos[".OwnerID"] = "";
$tdatarj_master_anexos[".OriginalTable"] = "rj_master_anexos";


$tdatarj_master_anexos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarj_master_anexos[".originalPagesByType"] = $tdatarj_master_anexos[".pagesByType"];
$tdatarj_master_anexos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarj_master_anexos[".originalPages"] = $tdatarj_master_anexos[".pages"];
$tdatarj_master_anexos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarj_master_anexos[".originalDefaultPages"] = $tdatarj_master_anexos[".defaultPages"];

//	field labels
$fieldLabelsrj_master_anexos = array();
$fieldToolTipsrj_master_anexos = array();
$pageTitlesrj_master_anexos = array();
$placeHoldersrj_master_anexos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_master_anexos["Spanish"] = array();
	$fieldToolTipsrj_master_anexos["Spanish"] = array();
	$placeHoldersrj_master_anexos["Spanish"] = array();
	$pageTitlesrj_master_anexos["Spanish"] = array();
	$fieldLabelsrj_master_anexos["Spanish"]["anexos_id"] = "Anexos Id";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexos_id"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexos_id"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["rj_id_fk"] = "Expediente(s)";
	$fieldToolTipsrj_master_anexos["Spanish"]["rj_id_fk"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["rj_id_fk"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["rj_tipo_anexo"] = "Tipo de documento";
	$fieldToolTipsrj_master_anexos["Spanish"]["rj_tipo_anexo"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["rj_tipo_anexo"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["rj_tipo_nombre"] = "Nombre del anexo";
	$fieldToolTipsrj_master_anexos["Spanish"]["rj_tipo_nombre"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["rj_tipo_nombre"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["anexo_file"] = "Anexo ";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexo_file"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexo_file"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["anexo_fecha"] = "Fecha";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexo_fecha"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexo_fecha"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["anexo_user"] = "Registrado por";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexo_user"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexo_user"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsrj_master_anexos["Spanish"]["sys_date"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["sys_date"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["anexo_folios"] = "No. de folios";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexo_folios"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexo_folios"] = "";
	$fieldLabelsrj_master_anexos["Spanish"]["anexo_paginas"] = "No. de páginas";
	$fieldToolTipsrj_master_anexos["Spanish"]["anexo_paginas"] = "";
	$placeHoldersrj_master_anexos["Spanish"]["anexo_paginas"] = "";
	if (count($fieldToolTipsrj_master_anexos["Spanish"]))
		$tdatarj_master_anexos[".isUseToolTips"] = true;
}


	$tdatarj_master_anexos[".NCSearch"] = true;



$tdatarj_master_anexos[".shortTableName"] = "rj_master_anexos";
$tdatarj_master_anexos[".nSecOptions"] = 0;

$tdatarj_master_anexos[".mainTableOwnerID"] = "";
$tdatarj_master_anexos[".entityType"] = 0;
$tdatarj_master_anexos[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_master_anexos[".strOriginalTableName"] = "rj_master_anexos";

	



$tdatarj_master_anexos[".showAddInPopup"] = false;

$tdatarj_master_anexos[".showEditInPopup"] = false;

$tdatarj_master_anexos[".showViewInPopup"] = false;

$tdatarj_master_anexos[".listAjax"] = false;
//	temporary
//$tdatarj_master_anexos[".listAjax"] = false;

	$tdatarj_master_anexos[".audit"] = false;

	$tdatarj_master_anexos[".locking"] = false;


$pages = $tdatarj_master_anexos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_master_anexos[".edit"] = true;
	$tdatarj_master_anexos[".afterEditAction"] = 1;
	$tdatarj_master_anexos[".closePopupAfterEdit"] = 1;
	$tdatarj_master_anexos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_master_anexos[".add"] = true;
$tdatarj_master_anexos[".afterAddAction"] = 1;
$tdatarj_master_anexos[".closePopupAfterAdd"] = 1;
$tdatarj_master_anexos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_master_anexos[".list"] = true;
}



$tdatarj_master_anexos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_master_anexos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_master_anexos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_master_anexos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_master_anexos[".printFriendly"] = true;
}



$tdatarj_master_anexos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_master_anexos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_master_anexos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_master_anexos[".isUseAjaxSuggest"] = true;

$tdatarj_master_anexos[".rowHighlite"] = true;



						

$tdatarj_master_anexos[".ajaxCodeSnippetAdded"] = false;

$tdatarj_master_anexos[".buttonsAdded"] = false;

$tdatarj_master_anexos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatarj_master_anexos[".isUseTimeForSearch"] = false;


$tdatarj_master_anexos[".badgeColor"] = "2f4f4f";


$tdatarj_master_anexos[".allSearchFields"] = array();
$tdatarj_master_anexos[".filterFields"] = array();
$tdatarj_master_anexos[".requiredSearchFields"] = array();

$tdatarj_master_anexos[".googleLikeFields"] = array();
$tdatarj_master_anexos[".googleLikeFields"][] = "anexos_id";
$tdatarj_master_anexos[".googleLikeFields"][] = "rj_id_fk";
$tdatarj_master_anexos[".googleLikeFields"][] = "rj_tipo_anexo";
$tdatarj_master_anexos[".googleLikeFields"][] = "rj_tipo_nombre";
$tdatarj_master_anexos[".googleLikeFields"][] = "anexo_file";
$tdatarj_master_anexos[".googleLikeFields"][] = "anexo_fecha";
$tdatarj_master_anexos[".googleLikeFields"][] = "anexo_user";
$tdatarj_master_anexos[".googleLikeFields"][] = "sys_date";
$tdatarj_master_anexos[".googleLikeFields"][] = "anexo_folios";
$tdatarj_master_anexos[".googleLikeFields"][] = "anexo_paginas";



$tdatarj_master_anexos[".tableType"] = "list";

$tdatarj_master_anexos[".printerPageOrientation"] = 0;
$tdatarj_master_anexos[".nPrinterPageScale"] = 100;

$tdatarj_master_anexos[".nPrinterSplitRecords"] = 40;

$tdatarj_master_anexos[".geocodingEnabled"] = false;










$tdatarj_master_anexos[".pageSize"] = 20;

$tdatarj_master_anexos[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY anexo_fecha DESC";
$tdatarj_master_anexos[".strOrderBy"] = $tstrOrderBy;

$tdatarj_master_anexos[".orderindexes"] = array();
	$tdatarj_master_anexos[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "anexo_fecha");



$tdatarj_master_anexos[".sqlHead"] = "SELECT anexos_id,  rj_id_fk,  rj_tipo_anexo,  rj_tipo_nombre,  anexo_file,  anexo_fecha,  anexo_user,  sys_date,  anexo_folios,  anexo_paginas";
$tdatarj_master_anexos[".sqlFrom"] = "FROM rj_master_anexos";
$tdatarj_master_anexos[".sqlWhereExpr"] = "";
$tdatarj_master_anexos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_master_anexos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_master_anexos[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_master_anexos[".highlightSearchResults"] = true;

$tableKeysrj_master_anexos = array();
$tableKeysrj_master_anexos[] = "anexos_id";
$tdatarj_master_anexos[".Keys"] = $tableKeysrj_master_anexos;


$tdatarj_master_anexos[".hideMobileList"] = array();




//	anexos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "anexos_id";
	$fdata["GoodName"] = "anexos_id";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexos_id");
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


	$tdatarj_master_anexos["anexos_id"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexos_id";
//	rj_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rj_id_fk";
	$fdata["GoodName"] = "rj_id_fk";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","rj_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "rj_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rj_id_fk";

	
	
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
	$edata["LookupTable"] = "rj_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "oj_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "num_proceso";

	

	
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


	$tdatarj_master_anexos["rj_id_fk"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "rj_id_fk";
//	rj_tipo_anexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rj_tipo_anexo";
	$fdata["GoodName"] = "rj_tipo_anexo";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","rj_tipo_anexo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "rj_tipo_anexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rj_tipo_anexo";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "rj_master_anexos_tipo";
	$edata["LookupConnId"] = "juridica_at_172_18_0_115";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "anexostipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "anexostipo_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatarj_master_anexos["rj_tipo_anexo"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "rj_tipo_anexo";
//	rj_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "rj_tipo_nombre";
	$fdata["GoodName"] = "rj_tipo_nombre";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","rj_tipo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rj_tipo_nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rj_tipo_nombre";

	
	
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


	$tdatarj_master_anexos["rj_tipo_nombre"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "rj_tipo_nombre";
//	anexo_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "anexo_file";
	$fdata["GoodName"] = "anexo_file";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexo_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo_file";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_file";

		$fdata["DeleteAssociatedFile"] = true;

	
		$fdata["UploadCodeExpression"] = true;

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


	$tdatarj_master_anexos["anexo_file"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexo_file";
//	anexo_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "anexo_fecha";
	$fdata["GoodName"] = "anexo_fecha";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexo_fecha");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
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


	$tdatarj_master_anexos["anexo_fecha"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexo_fecha";
//	anexo_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "anexo_user";
	$fdata["GoodName"] = "anexo_user";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexo_user");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "global_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
		
		$edata["autoUpdatable"] = true;

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


	$tdatarj_master_anexos["anexo_user"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexo_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatarj_master_anexos["sys_date"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "sys_date";
//	anexo_folios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "anexo_folios";
	$fdata["GoodName"] = "anexo_folios";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexo_folios");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anexo_folios";

		$fdata["sourceSingle"] = "anexo_folios";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_folios";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatarj_master_anexos["anexo_folios"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexo_folios";
//	anexo_paginas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "anexo_paginas";
	$fdata["GoodName"] = "anexo_paginas";
	$fdata["ownerTable"] = "rj_master_anexos";
	$fdata["Label"] = GetFieldLabel("rj_master_anexos","anexo_paginas");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "anexo_paginas";

		$fdata["sourceSingle"] = "anexo_paginas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_paginas";

	
	
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


	$tdatarj_master_anexos["anexo_paginas"] = $fdata;
		$tdatarj_master_anexos[".searchableFields"][] = "anexo_paginas";


$tables_data["rj_master_anexos"]=&$tdatarj_master_anexos;
$field_labels["rj_master_anexos"] = &$fieldLabelsrj_master_anexos;
$fieldToolTips["rj_master_anexos"] = &$fieldToolTipsrj_master_anexos;
$placeHolders["rj_master_anexos"] = &$placeHoldersrj_master_anexos;
$page_titles["rj_master_anexos"] = &$pageTitlesrj_master_anexos;


changeTextControlsToDate( "rj_master_anexos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_master_anexos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_master_anexos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="rj_master";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="rj_master";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "rj_master";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["rj_master_anexos"][0] = $masterParams;
				$masterTablesData["rj_master_anexos"][0]["masterKeys"] = array();
	$masterTablesData["rj_master_anexos"][0]["masterKeys"][]="oj_id";
				$masterTablesData["rj_master_anexos"][0]["detailKeys"] = array();
	$masterTablesData["rj_master_anexos"][0]["detailKeys"][]="rj_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_master_anexos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "anexos_id,  rj_id_fk,  rj_tipo_anexo,  rj_tipo_nombre,  anexo_file,  anexo_fecha,  anexo_user,  sys_date,  anexo_folios,  anexo_paginas";
$proto0["m_strFrom"] = "FROM rj_master_anexos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY anexo_fecha DESC";
	
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
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto6["m_sql"] = "anexos_id";
$proto6["m_srcTableName"] = "rj_master_anexos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rj_id_fk",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto8["m_sql"] = "rj_id_fk";
$proto8["m_srcTableName"] = "rj_master_anexos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rj_tipo_anexo",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto10["m_sql"] = "rj_tipo_anexo";
$proto10["m_srcTableName"] = "rj_master_anexos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "rj_tipo_nombre",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto12["m_sql"] = "rj_tipo_nombre";
$proto12["m_srcTableName"] = "rj_master_anexos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_file",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto14["m_sql"] = "anexo_file";
$proto14["m_srcTableName"] = "rj_master_anexos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_fecha",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto16["m_sql"] = "anexo_fecha";
$proto16["m_srcTableName"] = "rj_master_anexos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_user",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto18["m_sql"] = "anexo_user";
$proto18["m_srcTableName"] = "rj_master_anexos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto20["m_sql"] = "sys_date";
$proto20["m_srcTableName"] = "rj_master_anexos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_folios",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto22["m_sql"] = "anexo_folios";
$proto22["m_srcTableName"] = "rj_master_anexos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_paginas",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto24["m_sql"] = "anexo_paginas";
$proto24["m_srcTableName"] = "rj_master_anexos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "rj_master_anexos";
$proto27["m_srcTableName"] = "rj_master_anexos";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "anexos_id";
$proto27["m_columns"][] = "rj_id_fk";
$proto27["m_columns"][] = "rj_tipo_anexo";
$proto27["m_columns"][] = "rj_tipo_nombre";
$proto27["m_columns"][] = "anexo_file";
$proto27["m_columns"][] = "anexo_fecha";
$proto27["m_columns"][] = "anexo_user";
$proto27["m_columns"][] = "anexo_folios";
$proto27["m_columns"][] = "anexo_paginas";
$proto27["m_columns"][] = "sys_date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "rj_master_anexos";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "rj_master_anexos";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "anexo_fecha",
	"m_strTable" => "rj_master_anexos",
	"m_srcTableName" => "rj_master_anexos"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="rj_master_anexos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_master_anexos = createSqlQuery_rj_master_anexos();


	
				;

										

$tdatarj_master_anexos[".sqlquery"] = $queryData_rj_master_anexos;



include_once(getabspath("include/rj_master_anexos_events.php"));
$tdatarj_master_anexos[".hasEvents"] = true;

?>