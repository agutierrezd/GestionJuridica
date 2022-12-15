<?php
$tdatacc_titulos = array();
$tdatacc_titulos[".searchableFields"] = array();
$tdatacc_titulos[".ShortName"] = "cc_titulos";
$tdatacc_titulos[".OwnerID"] = "";
$tdatacc_titulos[".OriginalTable"] = "cc_titulos";


$tdatacc_titulos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacc_titulos[".originalPagesByType"] = $tdatacc_titulos[".pagesByType"];
$tdatacc_titulos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacc_titulos[".originalPages"] = $tdatacc_titulos[".pages"];
$tdatacc_titulos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacc_titulos[".originalDefaultPages"] = $tdatacc_titulos[".defaultPages"];

//	field labels
$fieldLabelscc_titulos = array();
$fieldToolTipscc_titulos = array();
$pageTitlescc_titulos = array();
$placeHolderscc_titulos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscc_titulos["Spanish"] = array();
	$fieldToolTipscc_titulos["Spanish"] = array();
	$placeHolderscc_titulos["Spanish"] = array();
	$pageTitlescc_titulos["Spanish"] = array();
	$fieldLabelscc_titulos["Spanish"]["titulo_id"] = "Titulo Id";
	$fieldToolTipscc_titulos["Spanish"]["titulo_id"] = "";
	$placeHolderscc_titulos["Spanish"]["titulo_id"] = "";
	$fieldLabelscc_titulos["Spanish"]["CC_ID_FK"] = "Id";
	$fieldToolTipscc_titulos["Spanish"]["CC_ID_FK"] = "";
	$placeHolderscc_titulos["Spanish"]["CC_ID_FK"] = "";
	$fieldLabelscc_titulos["Spanish"]["numero"] = "Número de título";
	$fieldToolTipscc_titulos["Spanish"]["numero"] = "";
	$placeHolderscc_titulos["Spanish"]["numero"] = "";
	$fieldLabelscc_titulos["Spanish"]["aplicado"] = "¿Aplicado?";
	$fieldToolTipscc_titulos["Spanish"]["aplicado"] = "";
	$placeHolderscc_titulos["Spanish"]["aplicado"] = "";
	$fieldLabelscc_titulos["Spanish"]["fecha"] = "Fecha";
	$fieldToolTipscc_titulos["Spanish"]["fecha"] = "";
	$placeHolderscc_titulos["Spanish"]["fecha"] = "";
	$fieldLabelscc_titulos["Spanish"]["valor"] = "Valor";
	$fieldToolTipscc_titulos["Spanish"]["valor"] = "";
	$placeHolderscc_titulos["Spanish"]["valor"] = "";
	$fieldLabelscc_titulos["Spanish"]["anexo_titulo"] = "Anexo título";
	$fieldToolTipscc_titulos["Spanish"]["anexo_titulo"] = "";
	$placeHolderscc_titulos["Spanish"]["anexo_titulo"] = "";
	$fieldLabelscc_titulos["Spanish"]["obs"] = "Observación";
	$fieldToolTipscc_titulos["Spanish"]["obs"] = "";
	$placeHolderscc_titulos["Spanish"]["obs"] = "";
	if (count($fieldToolTipscc_titulos["Spanish"]))
		$tdatacc_titulos[".isUseToolTips"] = true;
}


	$tdatacc_titulos[".NCSearch"] = true;



$tdatacc_titulos[".shortTableName"] = "cc_titulos";
$tdatacc_titulos[".nSecOptions"] = 0;

$tdatacc_titulos[".mainTableOwnerID"] = "";
$tdatacc_titulos[".entityType"] = 0;
$tdatacc_titulos[".connId"] = "juridica_at_172_18_0_115";


$tdatacc_titulos[".strOriginalTableName"] = "cc_titulos";

	



$tdatacc_titulos[".showAddInPopup"] = false;

$tdatacc_titulos[".showEditInPopup"] = false;

$tdatacc_titulos[".showViewInPopup"] = false;

$tdatacc_titulos[".listAjax"] = false;
//	temporary
//$tdatacc_titulos[".listAjax"] = false;

	$tdatacc_titulos[".audit"] = false;

	$tdatacc_titulos[".locking"] = false;


$pages = $tdatacc_titulos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacc_titulos[".edit"] = true;
	$tdatacc_titulos[".afterEditAction"] = 1;
	$tdatacc_titulos[".closePopupAfterEdit"] = 1;
	$tdatacc_titulos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacc_titulos[".add"] = true;
$tdatacc_titulos[".afterAddAction"] = 1;
$tdatacc_titulos[".closePopupAfterAdd"] = 1;
$tdatacc_titulos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacc_titulos[".list"] = true;
}



$tdatacc_titulos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacc_titulos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacc_titulos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacc_titulos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacc_titulos[".printFriendly"] = true;
}



$tdatacc_titulos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacc_titulos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacc_titulos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacc_titulos[".isUseAjaxSuggest"] = true;

$tdatacc_titulos[".rowHighlite"] = true;



						

$tdatacc_titulos[".ajaxCodeSnippetAdded"] = false;

$tdatacc_titulos[".buttonsAdded"] = false;

$tdatacc_titulos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacc_titulos[".isUseTimeForSearch"] = false;


$tdatacc_titulos[".badgeColor"] = "3cb371";


$tdatacc_titulos[".allSearchFields"] = array();
$tdatacc_titulos[".filterFields"] = array();
$tdatacc_titulos[".requiredSearchFields"] = array();

$tdatacc_titulos[".googleLikeFields"] = array();
$tdatacc_titulos[".googleLikeFields"][] = "titulo_id";
$tdatacc_titulos[".googleLikeFields"][] = "CC_ID_FK";
$tdatacc_titulos[".googleLikeFields"][] = "numero";
$tdatacc_titulos[".googleLikeFields"][] = "anexo_titulo";
$tdatacc_titulos[".googleLikeFields"][] = "obs";
$tdatacc_titulos[".googleLikeFields"][] = "aplicado";
$tdatacc_titulos[".googleLikeFields"][] = "fecha";
$tdatacc_titulos[".googleLikeFields"][] = "valor";



$tdatacc_titulos[".tableType"] = "list";

$tdatacc_titulos[".printerPageOrientation"] = 0;
$tdatacc_titulos[".nPrinterPageScale"] = 100;

$tdatacc_titulos[".nPrinterSplitRecords"] = 40;

$tdatacc_titulos[".geocodingEnabled"] = false;










$tdatacc_titulos[".pageSize"] = 20;

$tdatacc_titulos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacc_titulos[".strOrderBy"] = $tstrOrderBy;

$tdatacc_titulos[".orderindexes"] = array();


$tdatacc_titulos[".sqlHead"] = "SELECT titulo_id,  	CC_ID_FK,  	numero,  	anexo_titulo,  	obs,  	aplicado,  	fecha,  	valor";
$tdatacc_titulos[".sqlFrom"] = "FROM cc_titulos";
$tdatacc_titulos[".sqlWhereExpr"] = "";
$tdatacc_titulos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacc_titulos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacc_titulos[".arrGroupsPerPage"] = $arrGPP;

$tdatacc_titulos[".highlightSearchResults"] = true;

$tableKeyscc_titulos = array();
$tableKeyscc_titulos[] = "titulo_id";
$tdatacc_titulos[".Keys"] = $tableKeyscc_titulos;


$tdatacc_titulos[".hideMobileList"] = array();




//	titulo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "titulo_id";
	$fdata["GoodName"] = "titulo_id";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","titulo_id");
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


	$tdatacc_titulos["titulo_id"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "titulo_id";
//	CC_ID_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CC_ID_FK";
	$fdata["GoodName"] = "CC_ID_FK";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","CC_ID_FK");
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


	$tdatacc_titulos["CC_ID_FK"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "CC_ID_FK";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","numero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
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


		$edata["strEditMask"] = "999999999999999";

	



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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Número ya existe  %value% ya existe", "messageType" => "Text");

	
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


	$tdatacc_titulos["numero"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "numero";
//	anexo_titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "anexo_titulo";
	$fdata["GoodName"] = "anexo_titulo";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","anexo_titulo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "anexo_titulo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "anexo_titulo";

	
	
				$fdata["UploadFolder"] = "titulos";

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


	$tdatacc_titulos["anexo_titulo"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "anexo_titulo";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","obs");
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


	$tdatacc_titulos["obs"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "obs";
//	aplicado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "aplicado";
	$fdata["GoodName"] = "aplicado";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","aplicado");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "aplicado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "aplicado";

	
	
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
	$edata["LinkFieldType"] = 3;
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


	$tdatacc_titulos["aplicado"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "aplicado";
//	fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha";
	$fdata["GoodName"] = "fecha";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha";

	
	
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


	$tdatacc_titulos["fecha"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "fecha";
//	valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "valor";
	$fdata["GoodName"] = "valor";
	$fdata["ownerTable"] = "cc_titulos";
	$fdata["Label"] = GetFieldLabel("cc_titulos","valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor";

	
	
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


	$tdatacc_titulos["valor"] = $fdata;
		$tdatacc_titulos[".searchableFields"][] = "valor";


$tables_data["cc_titulos"]=&$tdatacc_titulos;
$field_labels["cc_titulos"] = &$fieldLabelscc_titulos;
$fieldToolTips["cc_titulos"] = &$fieldToolTipscc_titulos;
$placeHolders["cc_titulos"] = &$placeHolderscc_titulos;
$page_titles["cc_titulos"] = &$pageTitlescc_titulos;


changeTextControlsToDate( "cc_titulos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["cc_titulos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["cc_titulos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="cc_coactivo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="cc_coactivo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "cc_coactivo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["cc_titulos"][0] = $masterParams;
				$masterTablesData["cc_titulos"][0]["masterKeys"] = array();
	$masterTablesData["cc_titulos"][0]["masterKeys"][]="CC_ID";
				$masterTablesData["cc_titulos"][0]["detailKeys"] = array();
	$masterTablesData["cc_titulos"][0]["detailKeys"][]="CC_ID_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_cc_titulos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "titulo_id,  	CC_ID_FK,  	numero,  	anexo_titulo,  	obs,  	aplicado,  	fecha,  	valor";
$proto0["m_strFrom"] = "FROM cc_titulos";
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
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto6["m_sql"] = "titulo_id";
$proto6["m_srcTableName"] = "cc_titulos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CC_ID_FK",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto8["m_sql"] = "CC_ID_FK";
$proto8["m_srcTableName"] = "cc_titulos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto10["m_sql"] = "numero";
$proto10["m_srcTableName"] = "cc_titulos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "anexo_titulo",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto12["m_sql"] = "anexo_titulo";
$proto12["m_srcTableName"] = "cc_titulos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto14["m_sql"] = "obs";
$proto14["m_srcTableName"] = "cc_titulos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "aplicado",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto16["m_sql"] = "aplicado";
$proto16["m_srcTableName"] = "cc_titulos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto18["m_sql"] = "fecha";
$proto18["m_srcTableName"] = "cc_titulos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "valor",
	"m_strTable" => "cc_titulos",
	"m_srcTableName" => "cc_titulos"
));

$proto20["m_sql"] = "valor";
$proto20["m_srcTableName"] = "cc_titulos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "cc_titulos";
$proto23["m_srcTableName"] = "cc_titulos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "titulo_id";
$proto23["m_columns"][] = "CC_ID_FK";
$proto23["m_columns"][] = "numero";
$proto23["m_columns"][] = "anexo_titulo";
$proto23["m_columns"][] = "obs";
$proto23["m_columns"][] = "aplicado";
$proto23["m_columns"][] = "fecha";
$proto23["m_columns"][] = "valor";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "cc_titulos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "cc_titulos";
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
$proto0["m_srcTableName"]="cc_titulos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_cc_titulos = createSqlQuery_cc_titulos();


	
				;

								

$tdatacc_titulos[".sqlquery"] = $queryData_cc_titulos;



$tdatacc_titulos[".hasEvents"] = false;

?>