<?php
$tdatarj_master = array();
$tdatarj_master[".searchableFields"] = array();
$tdatarj_master[".ShortName"] = "rj_master";
$tdatarj_master[".OwnerID"] = "";
$tdatarj_master[".OriginalTable"] = "rj_master";


$tdatarj_master[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatarj_master[".originalPagesByType"] = $tdatarj_master[".pagesByType"];
$tdatarj_master[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatarj_master[".originalPages"] = $tdatarj_master[".pages"];
$tdatarj_master[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatarj_master[".originalDefaultPages"] = $tdatarj_master[".defaultPages"];

//	field labels
$fieldLabelsrj_master = array();
$fieldToolTipsrj_master = array();
$pageTitlesrj_master = array();
$placeHoldersrj_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsrj_master["Spanish"] = array();
	$fieldToolTipsrj_master["Spanish"] = array();
	$placeHoldersrj_master["Spanish"] = array();
	$pageTitlesrj_master["Spanish"] = array();
	$fieldLabelsrj_master["Spanish"]["oj_id"] = "Identificador";
	$fieldToolTipsrj_master["Spanish"]["oj_id"] = "";
	$placeHoldersrj_master["Spanish"]["oj_id"] = "";
	$fieldLabelsrj_master["Spanish"]["tipo_proceso_fk"] = "Tipo Proceso";
	$fieldToolTipsrj_master["Spanish"]["tipo_proceso_fk"] = "";
	$placeHoldersrj_master["Spanish"]["tipo_proceso_fk"] = "";
	$fieldLabelsrj_master["Spanish"]["num_proceso"] = "Número de Proceso";
	$fieldToolTipsrj_master["Spanish"]["num_proceso"] = "";
	$placeHoldersrj_master["Spanish"]["num_proceso"] = "";
	$fieldLabelsrj_master["Spanish"]["estado_id_fk"] = "Estado";
	$fieldToolTipsrj_master["Spanish"]["estado_id_fk"] = "";
	$placeHoldersrj_master["Spanish"]["estado_id_fk"] = "";
	$fieldLabelsrj_master["Spanish"]["hechos"] = "Hechos";
	$fieldToolTipsrj_master["Spanish"]["hechos"] = "";
	$placeHoldersrj_master["Spanish"]["hechos"] = "";
	$fieldLabelsrj_master["Spanish"]["municipio_fk"] = "Municipio";
	$fieldToolTipsrj_master["Spanish"]["municipio_fk"] = "";
	$placeHoldersrj_master["Spanish"]["municipio_fk"] = "";
	$fieldLabelsrj_master["Spanish"]["causas"] = "Causas";
	$fieldToolTipsrj_master["Spanish"]["causas"] = "";
	$placeHoldersrj_master["Spanish"]["causas"] = "";
	$fieldLabelsrj_master["Spanish"]["doc_demandante"] = "Documento contraparte";
	$fieldToolTipsrj_master["Spanish"]["doc_demandante"] = "";
	$placeHoldersrj_master["Spanish"]["doc_demandante"] = "";
	$fieldLabelsrj_master["Spanish"]["nom_demandante"] = "Contraparte";
	$fieldToolTipsrj_master["Spanish"]["nom_demandante"] = "";
	$placeHoldersrj_master["Spanish"]["nom_demandante"] = "";
	$fieldLabelsrj_master["Spanish"]["apoderado_demandante"] = "Apoderado Demandante";
	$fieldToolTipsrj_master["Spanish"]["apoderado_demandante"] = "";
	$placeHoldersrj_master["Spanish"]["apoderado_demandante"] = "";
	$fieldLabelsrj_master["Spanish"]["nom_demandado"] = "Vinculados";
	$fieldToolTipsrj_master["Spanish"]["nom_demandado"] = "";
	$placeHoldersrj_master["Spanish"]["nom_demandado"] = "";
	$fieldLabelsrj_master["Spanish"]["despacho_actual"] = "Despacho Actual";
	$fieldToolTipsrj_master["Spanish"]["despacho_actual"] = "";
	$placeHoldersrj_master["Spanish"]["despacho_actual"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_presentacion_demanda"] = "Fecha Presentacion Demanda";
	$fieldToolTipsrj_master["Spanish"]["fecha_presentacion_demanda"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_presentacion_demanda"] = "";
	$fieldLabelsrj_master["Spanish"]["pretenciones"] = "Pretenciones";
	$fieldToolTipsrj_master["Spanish"]["pretenciones"] = "";
	$placeHoldersrj_master["Spanish"]["pretenciones"] = "";
	$fieldLabelsrj_master["Spanish"]["cuantia_pretension"] = "Cuantía pretensión";
	$fieldToolTipsrj_master["Spanish"]["cuantia_pretension"] = "";
	$placeHoldersrj_master["Spanish"]["cuantia_pretension"] = "";
	$fieldLabelsrj_master["Spanish"]["cuantia_pretension_index"] = "Cuantia Pretension Index";
	$fieldToolTipsrj_master["Spanish"]["cuantia_pretension_index"] = "";
	$placeHoldersrj_master["Spanish"]["cuantia_pretension_index"] = "";
	$fieldLabelsrj_master["Spanish"]["apoderado_oajtemp"] = "Apoderado Oajtemp";
	$fieldToolTipsrj_master["Spanish"]["apoderado_oajtemp"] = "";
	$placeHoldersrj_master["Spanish"]["apoderado_oajtemp"] = "";
	$fieldLabelsrj_master["Spanish"]["apoderado_oaj"] = "Apoderado OAJ";
	$fieldToolTipsrj_master["Spanish"]["apoderado_oaj"] = "";
	$placeHoldersrj_master["Spanish"]["apoderado_oaj"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_admision_demanda"] = "Fecha admisión demanda";
	$fieldToolTipsrj_master["Spanish"]["fecha_admision_demanda"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_admision_demanda"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_radicado_oaj"] = "Fecha Radicado OAJ";
	$fieldToolTipsrj_master["Spanish"]["fecha_radicado_oaj"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_radicado_oaj"] = "";
	$fieldLabelsrj_master["Spanish"]["contestacion_demanda"] = "Contestación Demanda";
	$fieldToolTipsrj_master["Spanish"]["contestacion_demanda"] = "";
	$placeHoldersrj_master["Spanish"]["contestacion_demanda"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_constestacion_demanda"] = "Fecha Contestación Demanda";
	$fieldToolTipsrj_master["Spanish"]["fecha_constestacion_demanda"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_constestacion_demanda"] = "";
	$fieldLabelsrj_master["Spanish"]["etapa_judicial"] = "Etapa Judicial";
	$fieldToolTipsrj_master["Spanish"]["etapa_judicial"] = "";
	$placeHoldersrj_master["Spanish"]["etapa_judicial"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_provision_contable"] = "Fecha Provision Contable";
	$fieldToolTipsrj_master["Spanish"]["fecha_provision_contable"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_provision_contable"] = "";
	$fieldLabelsrj_master["Spanish"]["valor_provision_contable"] = "Valor Provision Contable";
	$fieldToolTipsrj_master["Spanish"]["valor_provision_contable"] = "";
	$placeHoldersrj_master["Spanish"]["valor_provision_contable"] = "";
	$fieldLabelsrj_master["Spanish"]["propabilidad_perder_caso"] = "Propabilidad Perder Caso";
	$fieldToolTipsrj_master["Spanish"]["propabilidad_perder_caso"] = "";
	$placeHoldersrj_master["Spanish"]["propabilidad_perder_caso"] = "";
	$fieldLabelsrj_master["Spanish"]["observacion_perder_caso"] = "Observacion Perder Caso";
	$fieldToolTipsrj_master["Spanish"]["observacion_perder_caso"] = "";
	$placeHoldersrj_master["Spanish"]["observacion_perder_caso"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_proxima_actualizacion"] = "Fecha Proxima Actualizacion";
	$fieldToolTipsrj_master["Spanish"]["fecha_proxima_actualizacion"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_proxima_actualizacion"] = "";
	$fieldLabelsrj_master["Spanish"]["radicado_ekogui"] = "Radicado Ekogui";
	$fieldToolTipsrj_master["Spanish"]["radicado_ekogui"] = "";
	$placeHoldersrj_master["Spanish"]["radicado_ekogui"] = "";
	$fieldLabelsrj_master["Spanish"]["fecha_radicado_ekogui"] = "Fecha Radicado Ekogui";
	$fieldToolTipsrj_master["Spanish"]["fecha_radicado_ekogui"] = "";
	$placeHoldersrj_master["Spanish"]["fecha_radicado_ekogui"] = "";
	$fieldLabelsrj_master["Spanish"]["ekogui_id"] = "Ekogui Id";
	$fieldToolTipsrj_master["Spanish"]["ekogui_id"] = "";
	$placeHoldersrj_master["Spanish"]["ekogui_id"] = "";
	$fieldLabelsrj_master["Spanish"]["carpeta"] = "Carpeta";
	$fieldToolTipsrj_master["Spanish"]["carpeta"] = "";
	$placeHoldersrj_master["Spanish"]["carpeta"] = "";
	$fieldLabelsrj_master["Spanish"]["CAJA"] = "Caja";
	$fieldToolTipsrj_master["Spanish"]["CAJA"] = "";
	$placeHoldersrj_master["Spanish"]["CAJA"] = "";
	$fieldLabelsrj_master["Spanish"]["estado_proceso"] = "Estado Proceso";
	$fieldToolTipsrj_master["Spanish"]["estado_proceso"] = "";
	$placeHoldersrj_master["Spanish"]["estado_proceso"] = "";
	$fieldLabelsrj_master["Spanish"]["id_oaj"] = "ID OAJ";
	$fieldToolTipsrj_master["Spanish"]["id_oaj"] = "";
	$placeHoldersrj_master["Spanish"]["id_oaj"] = "";
	$fieldLabelsrj_master["Spanish"]["calidad"] = "Calidad";
	$fieldToolTipsrj_master["Spanish"]["calidad"] = "";
	$placeHoldersrj_master["Spanish"]["calidad"] = "";
	$pageTitlesrj_master["Spanish"]["edit"] = "Modificar expediente";
	if (count($fieldToolTipsrj_master["Spanish"]))
		$tdatarj_master[".isUseToolTips"] = true;
}


	$tdatarj_master[".NCSearch"] = true;


	$tdatarj_master[".scrollGridBody"] = true;

$tdatarj_master[".shortTableName"] = "rj_master";
$tdatarj_master[".nSecOptions"] = 0;

$tdatarj_master[".mainTableOwnerID"] = "";
$tdatarj_master[".entityType"] = 0;
$tdatarj_master[".connId"] = "juridica_at_172_18_0_115";


$tdatarj_master[".strOriginalTableName"] = "rj_master";

	



$tdatarj_master[".showAddInPopup"] = false;

$tdatarj_master[".showEditInPopup"] = false;

$tdatarj_master[".showViewInPopup"] = false;

$tdatarj_master[".listAjax"] = false;
//	temporary
//$tdatarj_master[".listAjax"] = false;

	$tdatarj_master[".audit"] = false;

	$tdatarj_master[".locking"] = false;


$pages = $tdatarj_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatarj_master[".edit"] = true;
	$tdatarj_master[".afterEditAction"] = 1;
	$tdatarj_master[".closePopupAfterEdit"] = 1;
	$tdatarj_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatarj_master[".add"] = true;
$tdatarj_master[".afterAddAction"] = 1;
$tdatarj_master[".closePopupAfterAdd"] = 1;
$tdatarj_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatarj_master[".list"] = true;
}



$tdatarj_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatarj_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatarj_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatarj_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatarj_master[".printFriendly"] = true;
}



$tdatarj_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatarj_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatarj_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatarj_master[".isUseAjaxSuggest"] = true;

$tdatarj_master[".rowHighlite"] = true;



			

$tdatarj_master[".ajaxCodeSnippetAdded"] = false;

$tdatarj_master[".buttonsAdded"] = false;

$tdatarj_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarj_master[".isUseTimeForSearch"] = false;


$tdatarj_master[".badgeColor"] = "CD5C5C";


$tdatarj_master[".allSearchFields"] = array();
$tdatarj_master[".filterFields"] = array();
$tdatarj_master[".requiredSearchFields"] = array();

$tdatarj_master[".googleLikeFields"] = array();
$tdatarj_master[".googleLikeFields"][] = "oj_id";
$tdatarj_master[".googleLikeFields"][] = "id_oaj";
$tdatarj_master[".googleLikeFields"][] = "tipo_proceso_fk";
$tdatarj_master[".googleLikeFields"][] = "num_proceso";
$tdatarj_master[".googleLikeFields"][] = "estado_id_fk";
$tdatarj_master[".googleLikeFields"][] = "hechos";
$tdatarj_master[".googleLikeFields"][] = "municipio_fk";
$tdatarj_master[".googleLikeFields"][] = "causas";
$tdatarj_master[".googleLikeFields"][] = "doc_demandante";
$tdatarj_master[".googleLikeFields"][] = "nom_demandante";
$tdatarj_master[".googleLikeFields"][] = "apoderado_demandante";
$tdatarj_master[".googleLikeFields"][] = "nom_demandado";
$tdatarj_master[".googleLikeFields"][] = "despacho_actual";
$tdatarj_master[".googleLikeFields"][] = "fecha_presentacion_demanda";
$tdatarj_master[".googleLikeFields"][] = "pretenciones";
$tdatarj_master[".googleLikeFields"][] = "cuantia_pretension";
$tdatarj_master[".googleLikeFields"][] = "cuantia_pretension_index";
$tdatarj_master[".googleLikeFields"][] = "apoderado_oajtemp";
$tdatarj_master[".googleLikeFields"][] = "apoderado_oaj";
$tdatarj_master[".googleLikeFields"][] = "fecha_admision_demanda";
$tdatarj_master[".googleLikeFields"][] = "fecha_radicado_oaj";
$tdatarj_master[".googleLikeFields"][] = "contestacion_demanda";
$tdatarj_master[".googleLikeFields"][] = "fecha_constestacion_demanda";
$tdatarj_master[".googleLikeFields"][] = "etapa_judicial";
$tdatarj_master[".googleLikeFields"][] = "fecha_provision_contable";
$tdatarj_master[".googleLikeFields"][] = "valor_provision_contable";
$tdatarj_master[".googleLikeFields"][] = "propabilidad_perder_caso";
$tdatarj_master[".googleLikeFields"][] = "observacion_perder_caso";
$tdatarj_master[".googleLikeFields"][] = "fecha_proxima_actualizacion";
$tdatarj_master[".googleLikeFields"][] = "radicado_ekogui";
$tdatarj_master[".googleLikeFields"][] = "fecha_radicado_ekogui";
$tdatarj_master[".googleLikeFields"][] = "ekogui_id";
$tdatarj_master[".googleLikeFields"][] = "carpeta";
$tdatarj_master[".googleLikeFields"][] = "CAJA";
$tdatarj_master[".googleLikeFields"][] = "estado_proceso";
$tdatarj_master[".googleLikeFields"][] = "calidad";



$tdatarj_master[".tableType"] = "list";

$tdatarj_master[".printerPageOrientation"] = 0;
$tdatarj_master[".nPrinterPageScale"] = 100;

$tdatarj_master[".nPrinterSplitRecords"] = 40;

$tdatarj_master[".geocodingEnabled"] = false;




$tdatarj_master[".isDisplayLoading"] = true;






$tdatarj_master[".pageSize"] = 20;

$tdatarj_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatarj_master[".strOrderBy"] = $tstrOrderBy;

$tdatarj_master[".orderindexes"] = array();


$tdatarj_master[".sqlHead"] = "SELECT oj_id,  	id_oaj,  	tipo_proceso_fk,  	num_proceso,  	estado_id_fk,  	hechos,  	municipio_fk,  	causas,  	doc_demandante,  	nom_demandante,  	apoderado_demandante,  	nom_demandado,  	despacho_actual,  	fecha_presentacion_demanda,  	pretenciones,  	cuantia_pretension,  	cuantia_pretension_index,  	apoderado_oajtemp,  	apoderado_oaj,  	fecha_admision_demanda,  	fecha_radicado_oaj,  	contestacion_demanda,  	fecha_constestacion_demanda,  	etapa_judicial,  	fecha_provision_contable,  	valor_provision_contable,  	propabilidad_perder_caso,  	observacion_perder_caso,  	fecha_proxima_actualizacion,  	radicado_ekogui,  	fecha_radicado_ekogui,  	ekogui_id,  	carpeta,  	CAJA,  	estado_proceso,  	calidad";
$tdatarj_master[".sqlFrom"] = "FROM rj_master";
$tdatarj_master[".sqlWhereExpr"] = "";
$tdatarj_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarj_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarj_master[".arrGroupsPerPage"] = $arrGPP;

$tdatarj_master[".highlightSearchResults"] = true;

$tableKeysrj_master = array();
$tableKeysrj_master[] = "oj_id";
$tdatarj_master[".Keys"] = $tableKeysrj_master;


$tdatarj_master[".hideMobileList"] = array();




//	oj_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "oj_id";
	$fdata["GoodName"] = "oj_id";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","oj_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "oj_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oj_id";

	
	
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


	$tdatarj_master["oj_id"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "oj_id";
//	id_oaj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_oaj";
	$fdata["GoodName"] = "id_oaj";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","id_oaj");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_oaj";

		$fdata["sourceSingle"] = "id_oaj";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_oaj";

	
	
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


	$tdatarj_master["id_oaj"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "id_oaj";
//	tipo_proceso_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tipo_proceso_fk";
	$fdata["GoodName"] = "tipo_proceso_fk";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","tipo_proceso_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_proceso_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_proceso_fk";

	
	
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
	$edata["LookupTable"] = "rj_tparam_tipodeproceso";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tp_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "tipo_proceso";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "oj_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarj_master["tipo_proceso_fk"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "tipo_proceso_fk";
//	num_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "num_proceso";
	$fdata["GoodName"] = "num_proceso";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","num_proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_proceso";

	
	
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


	$tdatarj_master["num_proceso"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "num_proceso";
//	estado_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "estado_id_fk";
	$fdata["GoodName"] = "estado_id_fk";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","estado_id_fk");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "estado_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_id_fk";

	
	
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
	$edata["LookupTable"] = "rj_tparam_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "est_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "estado_id_fk";

	

	
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


	$tdatarj_master["estado_id_fk"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "estado_id_fk";
//	hechos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "hechos";
	$fdata["GoodName"] = "hechos";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","hechos");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "hechos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "hechos";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatarj_master["hechos"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "hechos";
//	municipio_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "municipio_fk";
	$fdata["GoodName"] = "municipio_fk";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","municipio_fk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "municipio_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio_fk";

	
	
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
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
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


	$tdatarj_master["municipio_fk"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "municipio_fk";
//	causas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "causas";
	$fdata["GoodName"] = "causas";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","causas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "causas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "causas";

	
	
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


	$tdatarj_master["causas"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "causas";
//	doc_demandante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "doc_demandante";
	$fdata["GoodName"] = "doc_demandante";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","doc_demandante");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "doc_demandante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "doc_demandante";

	
	
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


	$tdatarj_master["doc_demandante"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "doc_demandante";
//	nom_demandante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nom_demandante";
	$fdata["GoodName"] = "nom_demandante";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","nom_demandante");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_demandante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_demandante";

	
	
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


	$tdatarj_master["nom_demandante"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "nom_demandante";
//	apoderado_demandante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "apoderado_demandante";
	$fdata["GoodName"] = "apoderado_demandante";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","apoderado_demandante");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apoderado_demandante";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apoderado_demandante";

	
	
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


	$tdatarj_master["apoderado_demandante"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "apoderado_demandante";
//	nom_demandado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "nom_demandado";
	$fdata["GoodName"] = "nom_demandado";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","nom_demandado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_demandado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_demandado";

	
	
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


	$tdatarj_master["nom_demandado"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "nom_demandado";
//	despacho_actual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "despacho_actual";
	$fdata["GoodName"] = "despacho_actual";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","despacho_actual");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "despacho_actual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "despacho_actual";

	
	
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


	$tdatarj_master["despacho_actual"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "despacho_actual";
//	fecha_presentacion_demanda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "fecha_presentacion_demanda";
	$fdata["GoodName"] = "fecha_presentacion_demanda";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_presentacion_demanda");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_presentacion_demanda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_presentacion_demanda";

	
	
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
	$edata["InitialYearFactor"] = 35;
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


	$tdatarj_master["fecha_presentacion_demanda"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_presentacion_demanda";
//	pretenciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "pretenciones";
	$fdata["GoodName"] = "pretenciones";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","pretenciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "pretenciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pretenciones";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatarj_master["pretenciones"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "pretenciones";
//	cuantia_pretension
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cuantia_pretension";
	$fdata["GoodName"] = "cuantia_pretension";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","cuantia_pretension");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuantia_pretension";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuantia_pretension";

	
	
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


	$tdatarj_master["cuantia_pretension"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "cuantia_pretension";
//	cuantia_pretension_index
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cuantia_pretension_index";
	$fdata["GoodName"] = "cuantia_pretension_index";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","cuantia_pretension_index");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cuantia_pretension_index";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuantia_pretension_index";

	
	
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


	$tdatarj_master["cuantia_pretension_index"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "cuantia_pretension_index";
//	apoderado_oajtemp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "apoderado_oajtemp";
	$fdata["GoodName"] = "apoderado_oajtemp";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","apoderado_oajtemp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apoderado_oajtemp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apoderado_oajtemp";

	
	
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


	$tdatarj_master["apoderado_oajtemp"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "apoderado_oajtemp";
//	apoderado_oaj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "apoderado_oaj";
	$fdata["GoodName"] = "apoderado_oaj";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","apoderado_oaj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apoderado_oaj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apoderado_oaj";

	
	
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
	$edata["LookupTable"] = "global_users_find";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

				$edata["LookupWhere"] = "usr_dep = 190";


	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "oj_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarj_master["apoderado_oaj"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "apoderado_oaj";
//	fecha_admision_demanda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "fecha_admision_demanda";
	$fdata["GoodName"] = "fecha_admision_demanda";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_admision_demanda");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_admision_demanda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_admision_demanda";

	
	
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

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 35;
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


	$tdatarj_master["fecha_admision_demanda"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_admision_demanda";
//	fecha_radicado_oaj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "fecha_radicado_oaj";
	$fdata["GoodName"] = "fecha_radicado_oaj";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_radicado_oaj");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_radicado_oaj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_radicado_oaj";

	
	
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

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 35;
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


	$tdatarj_master["fecha_radicado_oaj"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_radicado_oaj";
//	contestacion_demanda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "contestacion_demanda";
	$fdata["GoodName"] = "contestacion_demanda";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","contestacion_demanda");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contestacion_demanda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contestacion_demanda";

	
	
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
	$edata["LookupTable"] = "rj_tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "radicado_ekogui";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "radicado_ekogui";

	

	
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


	$tdatarj_master["contestacion_demanda"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "contestacion_demanda";
//	fecha_constestacion_demanda
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "fecha_constestacion_demanda";
	$fdata["GoodName"] = "fecha_constestacion_demanda";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_constestacion_demanda");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_constestacion_demanda";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_constestacion_demanda";

	
	
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
	$edata["InitialYearFactor"] = 35;
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


	$tdatarj_master["fecha_constestacion_demanda"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_constestacion_demanda";
//	etapa_judicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "etapa_judicial";
	$fdata["GoodName"] = "etapa_judicial";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","etapa_judicial");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "rj_tparam_etapajudicial";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ej_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "etapa_judicial";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "oj_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarj_master["etapa_judicial"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "etapa_judicial";
//	fecha_provision_contable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "fecha_provision_contable";
	$fdata["GoodName"] = "fecha_provision_contable";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_provision_contable");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "fecha_provision_contable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_provision_contable";

	
	
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


	$tdatarj_master["fecha_provision_contable"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_provision_contable";
//	valor_provision_contable
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "valor_provision_contable";
	$fdata["GoodName"] = "valor_provision_contable";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","valor_provision_contable");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "valor_provision_contable";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_provision_contable";

	
	
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


	$tdatarj_master["valor_provision_contable"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "valor_provision_contable";
//	propabilidad_perder_caso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "propabilidad_perder_caso";
	$fdata["GoodName"] = "propabilidad_perder_caso";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","propabilidad_perder_caso");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "propabilidad_perder_caso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "propabilidad_perder_caso";

	
	
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
	$edata["LookupTable"] = "rj_tparam_probabilidadperdercas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ppc_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "propabilidad_perder_caso";

	

	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "oj_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatarj_master["propabilidad_perder_caso"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "propabilidad_perder_caso";
//	observacion_perder_caso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "observacion_perder_caso";
	$fdata["GoodName"] = "observacion_perder_caso";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","observacion_perder_caso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "observacion_perder_caso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "observacion_perder_caso";

	
	
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


	$tdatarj_master["observacion_perder_caso"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "observacion_perder_caso";
//	fecha_proxima_actualizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "fecha_proxima_actualizacion";
	$fdata["GoodName"] = "fecha_proxima_actualizacion";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_proxima_actualizacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_proxima_actualizacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_proxima_actualizacion";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "oj_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatarj_master["fecha_proxima_actualizacion"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_proxima_actualizacion";
//	radicado_ekogui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "radicado_ekogui";
	$fdata["GoodName"] = "radicado_ekogui";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","radicado_ekogui");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "radicado_ekogui";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "radicado_ekogui";

	
	
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
	$edata["LookupTable"] = "rj_tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "radicado_ekogui";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "radicado_ekogui";

	

	
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


	$tdatarj_master["radicado_ekogui"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "radicado_ekogui";
//	fecha_radicado_ekogui
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "fecha_radicado_ekogui";
	$fdata["GoodName"] = "fecha_radicado_ekogui";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","fecha_radicado_ekogui");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_radicado_ekogui";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_radicado_ekogui";

	
	
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

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 35;
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


	$tdatarj_master["fecha_radicado_ekogui"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "fecha_radicado_ekogui";
//	ekogui_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ekogui_id";
	$fdata["GoodName"] = "ekogui_id";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","ekogui_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ekogui_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ekogui_id";

	
	
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


	$tdatarj_master["ekogui_id"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "ekogui_id";
//	carpeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "carpeta";
	$fdata["GoodName"] = "carpeta";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","carpeta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "carpeta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "carpeta";

	
	
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


	$tdatarj_master["carpeta"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "carpeta";
//	CAJA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "CAJA";
	$fdata["GoodName"] = "CAJA";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","CAJA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CAJA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CAJA";

	
	
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


	$tdatarj_master["CAJA"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "CAJA";
//	estado_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "estado_proceso";
	$fdata["GoodName"] = "estado_proceso";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","estado_proceso");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "estado_proceso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_proceso";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatarj_master["estado_proceso"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "estado_proceso";
//	calidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "calidad";
	$fdata["GoodName"] = "calidad";
	$fdata["ownerTable"] = "rj_master";
	$fdata["Label"] = GetFieldLabel("rj_master","calidad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "calidad";

		$fdata["sourceSingle"] = "calidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calidad";

	
	
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
	$edata["LookupTable"] = "rj_tparam_calidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "calidad";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "calidad";

	

	
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


	$tdatarj_master["calidad"] = $fdata;
		$tdatarj_master[".searchableFields"][] = "calidad";


$tables_data["rj_master"]=&$tdatarj_master;
$field_labels["rj_master"] = &$fieldLabelsrj_master;
$fieldToolTips["rj_master"] = &$fieldToolTipsrj_master;
$placeHolders["rj_master"] = &$placeHoldersrj_master;
$page_titles["rj_master"] = &$pageTitlesrj_master;


changeTextControlsToDate( "rj_master" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["rj_master"] = array();
//	rj_master_audiencias
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="rj_master_audiencias";
		$detailsParam["dOriginalTable"] = "rj_master_audiencias";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "rj_master_audiencias";
	$detailsParam["dCaptionTable"] = GetTableCaption("rj_master_audiencias");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["rj_master"][$dIndex] = $detailsParam;

	
		$detailsTablesData["rj_master"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["masterKeys"][]="oj_id";

				$detailsTablesData["rj_master"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["detailKeys"][]="rj_di_fk";
//	rj_master_anexos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="rj_master_anexos";
		$detailsParam["dOriginalTable"] = "rj_master_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "rj_master_anexos";
	$detailsParam["dCaptionTable"] = GetTableCaption("rj_master_anexos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["rj_master"][$dIndex] = $detailsParam;

	
		$detailsTablesData["rj_master"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["masterKeys"][]="oj_id";

				$detailsTablesData["rj_master"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["detailKeys"][]="rj_id_fk";
//	rj_master_provision_contable
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="rj_master_provision_contable";
		$detailsParam["dOriginalTable"] = "rj_master_provision_contable";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "rj_master_provision_contable";
	$detailsParam["dCaptionTable"] = GetTableCaption("rj_master_provision_contable");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["rj_master"][$dIndex] = $detailsParam;

	
		$detailsTablesData["rj_master"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["masterKeys"][]="oj_id";

				$detailsTablesData["rj_master"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["rj_master"][$dIndex]["detailKeys"][]="oj_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["rj_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_rj_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "oj_id,  	id_oaj,  	tipo_proceso_fk,  	num_proceso,  	estado_id_fk,  	hechos,  	municipio_fk,  	causas,  	doc_demandante,  	nom_demandante,  	apoderado_demandante,  	nom_demandado,  	despacho_actual,  	fecha_presentacion_demanda,  	pretenciones,  	cuantia_pretension,  	cuantia_pretension_index,  	apoderado_oajtemp,  	apoderado_oaj,  	fecha_admision_demanda,  	fecha_radicado_oaj,  	contestacion_demanda,  	fecha_constestacion_demanda,  	etapa_judicial,  	fecha_provision_contable,  	valor_provision_contable,  	propabilidad_perder_caso,  	observacion_perder_caso,  	fecha_proxima_actualizacion,  	radicado_ekogui,  	fecha_radicado_ekogui,  	ekogui_id,  	carpeta,  	CAJA,  	estado_proceso,  	calidad";
$proto0["m_strFrom"] = "FROM rj_master";
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
	"m_strName" => "oj_id",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto6["m_sql"] = "oj_id";
$proto6["m_srcTableName"] = "rj_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_oaj",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto8["m_sql"] = "id_oaj";
$proto8["m_srcTableName"] = "rj_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_proceso_fk",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto10["m_sql"] = "tipo_proceso_fk";
$proto10["m_srcTableName"] = "rj_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "num_proceso",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto12["m_sql"] = "num_proceso";
$proto12["m_srcTableName"] = "rj_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_id_fk",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto14["m_sql"] = "estado_id_fk";
$proto14["m_srcTableName"] = "rj_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "hechos",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto16["m_sql"] = "hechos";
$proto16["m_srcTableName"] = "rj_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_fk",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto18["m_sql"] = "municipio_fk";
$proto18["m_srcTableName"] = "rj_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "causas",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto20["m_sql"] = "causas";
$proto20["m_srcTableName"] = "rj_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "doc_demandante",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto22["m_sql"] = "doc_demandante";
$proto22["m_srcTableName"] = "rj_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_demandante",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto24["m_sql"] = "nom_demandante";
$proto24["m_srcTableName"] = "rj_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "apoderado_demandante",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto26["m_sql"] = "apoderado_demandante";
$proto26["m_srcTableName"] = "rj_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_demandado",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto28["m_sql"] = "nom_demandado";
$proto28["m_srcTableName"] = "rj_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "despacho_actual",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto30["m_sql"] = "despacho_actual";
$proto30["m_srcTableName"] = "rj_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_presentacion_demanda",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto32["m_sql"] = "fecha_presentacion_demanda";
$proto32["m_srcTableName"] = "rj_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "pretenciones",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto34["m_sql"] = "pretenciones";
$proto34["m_srcTableName"] = "rj_master";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cuantia_pretension",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto36["m_sql"] = "cuantia_pretension";
$proto36["m_srcTableName"] = "rj_master";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cuantia_pretension_index",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto38["m_sql"] = "cuantia_pretension_index";
$proto38["m_srcTableName"] = "rj_master";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "apoderado_oajtemp",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto40["m_sql"] = "apoderado_oajtemp";
$proto40["m_srcTableName"] = "rj_master";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "apoderado_oaj",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto42["m_sql"] = "apoderado_oaj";
$proto42["m_srcTableName"] = "rj_master";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_admision_demanda",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto44["m_sql"] = "fecha_admision_demanda";
$proto44["m_srcTableName"] = "rj_master";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_radicado_oaj",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto46["m_sql"] = "fecha_radicado_oaj";
$proto46["m_srcTableName"] = "rj_master";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "contestacion_demanda",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto48["m_sql"] = "contestacion_demanda";
$proto48["m_srcTableName"] = "rj_master";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_constestacion_demanda",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto50["m_sql"] = "fecha_constestacion_demanda";
$proto50["m_srcTableName"] = "rj_master";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "etapa_judicial",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto52["m_sql"] = "etapa_judicial";
$proto52["m_srcTableName"] = "rj_master";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_provision_contable",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto54["m_sql"] = "fecha_provision_contable";
$proto54["m_srcTableName"] = "rj_master";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_provision_contable",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto56["m_sql"] = "valor_provision_contable";
$proto56["m_srcTableName"] = "rj_master";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "propabilidad_perder_caso",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto58["m_sql"] = "propabilidad_perder_caso";
$proto58["m_srcTableName"] = "rj_master";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "observacion_perder_caso",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto60["m_sql"] = "observacion_perder_caso";
$proto60["m_srcTableName"] = "rj_master";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_proxima_actualizacion",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto62["m_sql"] = "fecha_proxima_actualizacion";
$proto62["m_srcTableName"] = "rj_master";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "radicado_ekogui",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto64["m_sql"] = "radicado_ekogui";
$proto64["m_srcTableName"] = "rj_master";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_radicado_ekogui",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto66["m_sql"] = "fecha_radicado_ekogui";
$proto66["m_srcTableName"] = "rj_master";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ekogui_id",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto68["m_sql"] = "ekogui_id";
$proto68["m_srcTableName"] = "rj_master";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "carpeta",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto70["m_sql"] = "carpeta";
$proto70["m_srcTableName"] = "rj_master";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CAJA",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto72["m_sql"] = "CAJA";
$proto72["m_srcTableName"] = "rj_master";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_proceso",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto74["m_sql"] = "estado_proceso";
$proto74["m_srcTableName"] = "rj_master";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "calidad",
	"m_strTable" => "rj_master",
	"m_srcTableName" => "rj_master"
));

$proto76["m_sql"] = "calidad";
$proto76["m_srcTableName"] = "rj_master";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto78=array();
$proto78["m_link"] = "SQLL_MAIN";
			$proto79=array();
$proto79["m_strName"] = "rj_master";
$proto79["m_srcTableName"] = "rj_master";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "oj_id";
$proto79["m_columns"][] = "id_oaj";
$proto79["m_columns"][] = "tipo_proceso_fk";
$proto79["m_columns"][] = "num_proceso";
$proto79["m_columns"][] = "estado_id_fk";
$proto79["m_columns"][] = "hechos";
$proto79["m_columns"][] = "municipio_fk";
$proto79["m_columns"][] = "causas";
$proto79["m_columns"][] = "doc_demandante";
$proto79["m_columns"][] = "nom_demandante";
$proto79["m_columns"][] = "apoderado_demandante";
$proto79["m_columns"][] = "nom_demandado";
$proto79["m_columns"][] = "despacho_actual";
$proto79["m_columns"][] = "fecha_presentacion_demanda";
$proto79["m_columns"][] = "pretenciones";
$proto79["m_columns"][] = "cuantia_pretension";
$proto79["m_columns"][] = "cuantia_pretension_index";
$proto79["m_columns"][] = "apoderado_oajtemp";
$proto79["m_columns"][] = "apoderado_oaj";
$proto79["m_columns"][] = "fecha_admision_demanda";
$proto79["m_columns"][] = "fecha_radicado_oaj";
$proto79["m_columns"][] = "contestacion_demanda";
$proto79["m_columns"][] = "fecha_constestacion_demanda";
$proto79["m_columns"][] = "etapa_judicial";
$proto79["m_columns"][] = "fecha_provision_contable";
$proto79["m_columns"][] = "valor_provision_contable";
$proto79["m_columns"][] = "propabilidad_perder_caso";
$proto79["m_columns"][] = "observacion_perder_caso";
$proto79["m_columns"][] = "fecha_proxima_actualizacion";
$proto79["m_columns"][] = "radicado_ekogui";
$proto79["m_columns"][] = "fecha_radicado_ekogui";
$proto79["m_columns"][] = "ekogui_id";
$proto79["m_columns"][] = "carpeta";
$proto79["m_columns"][] = "CAJA";
$proto79["m_columns"][] = "estado_proceso";
$proto79["m_columns"][] = "calidad";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "rj_master";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "rj_master";
$proto80=array();
$proto80["m_sql"] = "";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="rj_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_rj_master = createSqlQuery_rj_master();


	
				;

																																				

$tdatarj_master[".sqlquery"] = $queryData_rj_master;



$tdatarj_master[".hasEvents"] = false;

?>