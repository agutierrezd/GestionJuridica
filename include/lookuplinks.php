<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["cc_tparam_tipodoc"] ) ) {
			$lookupTableLinks["cc_tparam_tipodoc"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_tipodoc"]["cc_coactivo.TIPODOCUMENTO"] )) {
			$lookupTableLinks["cc_tparam_tipodoc"]["cc_coactivo.TIPODOCUMENTO"] = array();
		}
		$lookupTableLinks["cc_tparam_tipodoc"]["cc_coactivo.TIPODOCUMENTO"]["edit"] = array("table" => "cc_coactivo", "field" => "TIPODOCUMENTO", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_caracter"] ) ) {
			$lookupTableLinks["cc_tparam_caracter"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_caracter"]["cc_coactivo.CARACTER"] )) {
			$lookupTableLinks["cc_tparam_caracter"]["cc_coactivo.CARACTER"] = array();
		}
		$lookupTableLinks["cc_tparam_caracter"]["cc_coactivo.CARACTER"]["edit"] = array("table" => "cc_coactivo", "field" => "CARACTER", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_clase_sancion"] ) ) {
			$lookupTableLinks["cc_tparam_clase_sancion"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_clase_sancion"]["cc_coactivo.CLASE_SANCION"] )) {
			$lookupTableLinks["cc_tparam_clase_sancion"]["cc_coactivo.CLASE_SANCION"] = array();
		}
		$lookupTableLinks["cc_tparam_clase_sancion"]["cc_coactivo.CLASE_SANCION"]["edit"] = array("table" => "cc_coactivo", "field" => "CLASE_SANCION", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_remitente"] ) ) {
			$lookupTableLinks["cc_tparam_remitente"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_remitente"]["cc_coactivo.REMITENTE"] )) {
			$lookupTableLinks["cc_tparam_remitente"]["cc_coactivo.REMITENTE"] = array();
		}
		$lookupTableLinks["cc_tparam_remitente"]["cc_coactivo.REMITENTE"]["edit"] = array("table" => "cc_coactivo", "field" => "REMITENTE", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_estado"] ) ) {
			$lookupTableLinks["cc_tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_estado"]["cc_coactivo.ESTADO"] )) {
			$lookupTableLinks["cc_tparam_estado"]["cc_coactivo.ESTADO"] = array();
		}
		$lookupTableLinks["cc_tparam_estado"]["cc_coactivo.ESTADO"]["edit"] = array("table" => "cc_coactivo", "field" => "ESTADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["cc_coactivo.ABOGADO_RESP"] )) {
			$lookupTableLinks["global_users_find"]["cc_coactivo.ABOGADO_RESP"] = array();
		}
		$lookupTableLinks["global_users_find"]["cc_coactivo.ABOGADO_RESP"]["edit"] = array("table" => "cc_coactivo", "field" => "ABOGADO_RESP", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_tiempo_prescripcion"] ) ) {
			$lookupTableLinks["cc_tparam_tiempo_prescripcion"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_tiempo_prescripcion"]["cc_coactivo.TIEMPO_PRES"] )) {
			$lookupTableLinks["cc_tparam_tiempo_prescripcion"]["cc_coactivo.TIEMPO_PRES"] = array();
		}
		$lookupTableLinks["cc_tparam_tiempo_prescripcion"]["cc_coactivo.TIEMPO_PRES"]["edit"] = array("table" => "cc_coactivo", "field" => "TIEMPO_PRES", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_sn"] ) ) {
			$lookupTableLinks["cc_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_sn"]["cc_coactivo.ACUERDO_PAGO"] )) {
			$lookupTableLinks["cc_tparam_sn"]["cc_coactivo.ACUERDO_PAGO"] = array();
		}
		$lookupTableLinks["cc_tparam_sn"]["cc_coactivo.ACUERDO_PAGO"]["edit"] = array("table" => "cc_coactivo", "field" => "ACUERDO_PAGO", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_coactivo"] ) ) {
			$lookupTableLinks["cc_coactivo"] = array();
		}
		if( !isset( $lookupTableLinks["cc_coactivo"]["cc_coactivo_anexos.cc_id_fk"] )) {
			$lookupTableLinks["cc_coactivo"]["cc_coactivo_anexos.cc_id_fk"] = array();
		}
		$lookupTableLinks["cc_coactivo"]["cc_coactivo_anexos.cc_id_fk"]["edit"] = array("table" => "cc_coactivo_anexos", "field" => "cc_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_coactivo_anexos_tipo"] ) ) {
			$lookupTableLinks["cc_coactivo_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["cc_coactivo_anexos_tipo"]["cc_coactivo_anexos.cc_tipo_anexo"] )) {
			$lookupTableLinks["cc_coactivo_anexos_tipo"]["cc_coactivo_anexos.cc_tipo_anexo"] = array();
		}
		$lookupTableLinks["cc_coactivo_anexos_tipo"]["cc_coactivo_anexos.cc_tipo_anexo"]["edit"] = array("table" => "cc_coactivo_anexos", "field" => "cc_tipo_anexo", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_sn"] ) ) {
			$lookupTableLinks["cc_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_sn"]["cc_titulos.aplicado"] )) {
			$lookupTableLinks["cc_tparam_sn"]["cc_titulos.aplicado"] = array();
		}
		$lookupTableLinks["cc_tparam_sn"]["cc_titulos.aplicado"]["edit"] = array("table" => "cc_titulos", "field" => "aplicado", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_sn"] ) ) {
			$lookupTableLinks["cc_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_sn"]["cc_acuerdo_pago.pagado"] )) {
			$lookupTableLinks["cc_tparam_sn"]["cc_acuerdo_pago.pagado"] = array();
		}
		$lookupTableLinks["cc_tparam_sn"]["cc_acuerdo_pago.pagado"]["edit"] = array("table" => "cc_acuerdo_pago", "field" => "pagado", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_acuerdo_pago"] ) ) {
			$lookupTableLinks["cc_acuerdo_pago"] = array();
		}
		if( !isset( $lookupTableLinks["cc_acuerdo_pago"]["cc_plan_pago.acuerdo_id_fk"] )) {
			$lookupTableLinks["cc_acuerdo_pago"]["cc_plan_pago.acuerdo_id_fk"] = array();
		}
		$lookupTableLinks["cc_acuerdo_pago"]["cc_plan_pago.acuerdo_id_fk"]["edit"] = array("table" => "cc_plan_pago", "field" => "acuerdo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_sn"] ) ) {
			$lookupTableLinks["cc_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.pagado"] )) {
			$lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.pagado"] = array();
		}
		$lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.pagado"]["edit"] = array("table" => "cc_plan_pago", "field" => "pagado", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_sn"] ) ) {
			$lookupTableLinks["cc_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.confirmado"] )) {
			$lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.confirmado"] = array();
		}
		$lookupTableLinks["cc_tparam_sn"]["cc_plan_pago.confirmado"]["edit"] = array("table" => "cc_plan_pago", "field" => "confirmado", "page" => "edit");
		if( !isset( $lookupTableLinks["cc_tparam_estado"] ) ) {
			$lookupTableLinks["cc_tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["cc_tparam_estado"]["q_prescipcicion.ESTADO"] )) {
			$lookupTableLinks["cc_tparam_estado"]["q_prescipcicion.ESTADO"] = array();
		}
		$lookupTableLinks["cc_tparam_estado"]["q_prescipcicion.ESTADO"]["edit"] = array("table" => "q_prescipcicion", "field" => "ESTADO", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["q_prescipcicion.ABOGADO_RESP"] )) {
			$lookupTableLinks["global_users_find"]["q_prescipcicion.ABOGADO_RESP"] = array();
		}
		$lookupTableLinks["global_users_find"]["q_prescipcicion.ABOGADO_RESP"]["edit"] = array("table" => "q_prescipcicion", "field" => "ABOGADO_RESP", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["q_actuaciones.ABOGADO_RESP"] )) {
			$lookupTableLinks["global_users_find"]["q_actuaciones.ABOGADO_RESP"] = array();
		}
		$lookupTableLinks["global_users_find"]["q_actuaciones.ABOGADO_RESP"]["edit"] = array("table" => "q_actuaciones", "field" => "ABOGADO_RESP", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_tipodeproceso"] ) ) {
			$lookupTableLinks["rj_tparam_tipodeproceso"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_tipodeproceso"]["rj_master.tipo_proceso_fk"] )) {
			$lookupTableLinks["rj_tparam_tipodeproceso"]["rj_master.tipo_proceso_fk"] = array();
		}
		$lookupTableLinks["rj_tparam_tipodeproceso"]["rj_master.tipo_proceso_fk"]["edit"] = array("table" => "rj_master", "field" => "tipo_proceso_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_estado"] ) ) {
			$lookupTableLinks["rj_tparam_estado"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_estado"]["rj_master.estado_id_fk"] )) {
			$lookupTableLinks["rj_tparam_estado"]["rj_master.estado_id_fk"] = array();
		}
		$lookupTableLinks["rj_tparam_estado"]["rj_master.estado_id_fk"]["edit"] = array("table" => "rj_master", "field" => "estado_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["rj_master.municipio_fk"] )) {
			$lookupTableLinks["q_divipola"]["rj_master.municipio_fk"] = array();
		}
		$lookupTableLinks["q_divipola"]["rj_master.municipio_fk"]["edit"] = array("table" => "rj_master", "field" => "municipio_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["rj_master.apoderado_oaj"] )) {
			$lookupTableLinks["global_users_find"]["rj_master.apoderado_oaj"] = array();
		}
		$lookupTableLinks["global_users_find"]["rj_master.apoderado_oaj"]["edit"] = array("table" => "rj_master", "field" => "apoderado_oaj", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_sn"] ) ) {
			$lookupTableLinks["rj_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_sn"]["rj_master.contestacion_demanda"] )) {
			$lookupTableLinks["rj_tparam_sn"]["rj_master.contestacion_demanda"] = array();
		}
		$lookupTableLinks["rj_tparam_sn"]["rj_master.contestacion_demanda"]["edit"] = array("table" => "rj_master", "field" => "contestacion_demanda", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_etapajudicial"] ) ) {
			$lookupTableLinks["rj_tparam_etapajudicial"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_etapajudicial"]["rj_master.etapa_judicial"] )) {
			$lookupTableLinks["rj_tparam_etapajudicial"]["rj_master.etapa_judicial"] = array();
		}
		$lookupTableLinks["rj_tparam_etapajudicial"]["rj_master.etapa_judicial"]["edit"] = array("table" => "rj_master", "field" => "etapa_judicial", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_probabilidadperdercas"] ) ) {
			$lookupTableLinks["rj_tparam_probabilidadperdercas"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_probabilidadperdercas"]["rj_master.propabilidad_perder_caso"] )) {
			$lookupTableLinks["rj_tparam_probabilidadperdercas"]["rj_master.propabilidad_perder_caso"] = array();
		}
		$lookupTableLinks["rj_tparam_probabilidadperdercas"]["rj_master.propabilidad_perder_caso"]["edit"] = array("table" => "rj_master", "field" => "propabilidad_perder_caso", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_sn"] ) ) {
			$lookupTableLinks["rj_tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_sn"]["rj_master.radicado_ekogui"] )) {
			$lookupTableLinks["rj_tparam_sn"]["rj_master.radicado_ekogui"] = array();
		}
		$lookupTableLinks["rj_tparam_sn"]["rj_master.radicado_ekogui"]["edit"] = array("table" => "rj_master", "field" => "radicado_ekogui", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_tparam_calidad"] ) ) {
			$lookupTableLinks["rj_tparam_calidad"] = array();
		}
		if( !isset( $lookupTableLinks["rj_tparam_calidad"]["rj_master.calidad"] )) {
			$lookupTableLinks["rj_tparam_calidad"]["rj_master.calidad"] = array();
		}
		$lookupTableLinks["rj_tparam_calidad"]["rj_master.calidad"]["edit"] = array("table" => "rj_master", "field" => "calidad", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_master"] ) ) {
			$lookupTableLinks["rj_master"] = array();
		}
		if( !isset( $lookupTableLinks["rj_master"]["rj_master_audiencias.rj_di_fk"] )) {
			$lookupTableLinks["rj_master"]["rj_master_audiencias.rj_di_fk"] = array();
		}
		$lookupTableLinks["rj_master"]["rj_master_audiencias.rj_di_fk"]["edit"] = array("table" => "rj_master_audiencias", "field" => "rj_di_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_master"] ) ) {
			$lookupTableLinks["rj_master"] = array();
		}
		if( !isset( $lookupTableLinks["rj_master"]["rj_master_anexos.rj_id_fk"] )) {
			$lookupTableLinks["rj_master"]["rj_master_anexos.rj_id_fk"] = array();
		}
		$lookupTableLinks["rj_master"]["rj_master_anexos.rj_id_fk"]["edit"] = array("table" => "rj_master_anexos", "field" => "rj_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_master_anexos_tipo"] ) ) {
			$lookupTableLinks["rj_master_anexos_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["rj_master_anexos_tipo"]["rj_master_anexos.rj_tipo_anexo"] )) {
			$lookupTableLinks["rj_master_anexos_tipo"]["rj_master_anexos.rj_tipo_anexo"] = array();
		}
		$lookupTableLinks["rj_master_anexos_tipo"]["rj_master_anexos.rj_tipo_anexo"]["edit"] = array("table" => "rj_master_anexos", "field" => "rj_tipo_anexo", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["rj_master_anexos.anexo_user"] )) {
			$lookupTableLinks["global_users"]["rj_master_anexos.anexo_user"] = array();
		}
		$lookupTableLinks["global_users"]["rj_master_anexos.anexo_user"]["edit"] = array("table" => "rj_master_anexos", "field" => "anexo_user", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["sc_master.asignado"] )) {
			$lookupTableLinks["global_users_find"]["sc_master.asignado"] = array();
		}
		$lookupTableLinks["global_users_find"]["sc_master.asignado"]["edit"] = array("table" => "sc_master", "field" => "asignado", "page" => "edit");
		if( !isset( $lookupTableLinks["sc_tparam_tipo"] ) ) {
			$lookupTableLinks["sc_tparam_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["sc_tparam_tipo"]["sc_master.tipo_fk"] )) {
			$lookupTableLinks["sc_tparam_tipo"]["sc_master.tipo_fk"] = array();
		}
		$lookupTableLinks["sc_tparam_tipo"]["sc_master.tipo_fk"]["edit"] = array("table" => "sc_master", "field" => "tipo_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["sc_tparam_tema"] ) ) {
			$lookupTableLinks["sc_tparam_tema"] = array();
		}
		if( !isset( $lookupTableLinks["sc_tparam_tema"]["sc_master.tema_fk"] )) {
			$lookupTableLinks["sc_tparam_tema"]["sc_master.tema_fk"] = array();
		}
		$lookupTableLinks["sc_tparam_tema"]["sc_master.tema_fk"]["edit"] = array("table" => "sc_master", "field" => "tema_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["sc_tparam_estadoentrega"] ) ) {
			$lookupTableLinks["sc_tparam_estadoentrega"] = array();
		}
		if( !isset( $lookupTableLinks["sc_tparam_estadoentrega"]["sc_master.estado_entrega_fk"] )) {
			$lookupTableLinks["sc_tparam_estadoentrega"]["sc_master.estado_entrega_fk"] = array();
		}
		$lookupTableLinks["sc_tparam_estadoentrega"]["sc_master.estado_entrega_fk"]["edit"] = array("table" => "sc_master", "field" => "estado_entrega_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["rj_master"] ) ) {
			$lookupTableLinks["rj_master"] = array();
		}
		if( !isset( $lookupTableLinks["rj_master"]["rj_master_provision_contable.oj_id_fk"] )) {
			$lookupTableLinks["rj_master"]["rj_master_provision_contable.oj_id_fk"] = array();
		}
		$lookupTableLinks["rj_master"]["rj_master_provision_contable.oj_id_fk"]["edit"] = array("table" => "rj_master_provision_contable", "field" => "oj_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_find"] ) ) {
			$lookupTableLinks["global_users_find"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_find"]["rj_master_provision_contable.pc_abogado"] )) {
			$lookupTableLinks["global_users_find"]["rj_master_provision_contable.pc_abogado"] = array();
		}
		$lookupTableLinks["global_users_find"]["rj_master_provision_contable.pc_abogado"]["edit"] = array("table" => "rj_master_provision_contable", "field" => "pc_abogado", "page" => "edit");
}

?>