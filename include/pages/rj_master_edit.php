<?php
			$optionsArray = array( 'details' => array( 'rj_master_audiencias' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'rj_master_anexos' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'rj_master_provision_contable' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'tipo_proceso_fk',
'id_oaj',
'carpeta',
'CAJA',
'ekogui_id',
'fecha_radicado_ekogui',
'radicado_ekogui',
'fecha_proxima_actualizacion',
'observacion_perder_caso',
'propabilidad_perder_caso',
'valor_provision_contable',
'fecha_provision_contable',
'etapa_judicial',
'fecha_constestacion_demanda',
'contestacion_demanda',
'fecha_radicado_oaj',
'fecha_admision_demanda',
'apoderado_oaj',
'cuantia_pretension',
'pretenciones',
'fecha_presentacion_demanda',
'despacho_actual',
'nom_demandado',
'apoderado_demandante',
'nom_demandante',
'doc_demandante',
'causas',
'municipio_fk',
'hechos',
'estado_id_fk',
'calidad',
'num_proceso',
'estado_proceso' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'tipo_proceso_fk' => array( 'integrated_edit_field' ),
'id_oaj' => array( 'integrated_edit_field15' ),
'carpeta' => array( 'integrated_edit_field30' ),
'CAJA' => array( 'integrated_edit_field31' ),
'ekogui_id' => array( 'integrated_edit_field29' ),
'fecha_radicado_ekogui' => array( 'integrated_edit_field28' ),
'radicado_ekogui' => array( 'integrated_edit_field27' ),
'fecha_proxima_actualizacion' => array( 'integrated_edit_field26' ),
'observacion_perder_caso' => array( 'integrated_edit_field25' ),
'propabilidad_perder_caso' => array( 'integrated_edit_field24' ),
'valor_provision_contable' => array( 'integrated_edit_field23' ),
'fecha_provision_contable' => array( 'integrated_edit_field22' ),
'etapa_judicial' => array( 'integrated_edit_field21' ),
'fecha_constestacion_demanda' => array( 'integrated_edit_field20' ),
'contestacion_demanda' => array( 'integrated_edit_field19' ),
'fecha_radicado_oaj' => array( 'integrated_edit_field18' ),
'fecha_admision_demanda' => array( 'integrated_edit_field17' ),
'apoderado_oaj' => array( 'integrated_edit_field16' ),
'cuantia_pretension' => array( 'integrated_edit_field13' ),
'pretenciones' => array( 'integrated_edit_field12' ),
'fecha_presentacion_demanda' => array( 'integrated_edit_field11' ),
'despacho_actual' => array( 'integrated_edit_field10' ),
'nom_demandado' => array( 'integrated_edit_field9' ),
'apoderado_demandante' => array( 'integrated_edit_field8' ),
'nom_demandante' => array( 'integrated_edit_field7' ),
'doc_demandante' => array( 'integrated_edit_field6' ),
'causas' => array( 'integrated_edit_field5' ),
'municipio_fk' => array( 'integrated_edit_field4' ),
'hechos' => array( 'integrated_edit_field3' ),
'estado_id_fk' => array( 'integrated_edit_field2' ),
'calidad' => array( 'integrated_edit_field14' ),
'num_proceso' => array( 'integrated_edit_field1' ),
'estado_proceso' => array( 'integrated_edit_field32' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'expand_menu_button',
'collapse_button',
'loginform_login',
'username_button' ),
'left' => array( 'logo1',
'expand_button',
'menu' ),
'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field30',
'integrated_edit_field32',
'integrated_edit_field31',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field24',
'integrated_edit_field25',
'integrated_edit_field26',
'integrated_edit_field27',
'integrated_edit_field28',
'integrated_edit_field29',
'integrated_edit_field13',
'integrated_edit_field16',
'integrated_edit_field17',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field20',
'integrated_edit_field21',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field1',
'integrated_edit_field14',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field15',
'integrated_edit_field' ),
'section1' => array( 'details_preview1' ),
'section2' => array( 'details_preview' ),
'section3' => array( 'details_preview2' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field30' => 'section',
'integrated_edit_field32' => 'section',
'integrated_edit_field31' => 'section',
'integrated_edit_field22' => 'section',
'integrated_edit_field23' => 'section',
'integrated_edit_field24' => 'section',
'integrated_edit_field25' => 'section',
'integrated_edit_field26' => 'section',
'integrated_edit_field27' => 'section',
'integrated_edit_field28' => 'section',
'integrated_edit_field29' => 'section',
'integrated_edit_field13' => 'section',
'integrated_edit_field16' => 'section',
'integrated_edit_field17' => 'section',
'integrated_edit_field18' => 'section',
'integrated_edit_field19' => 'section',
'integrated_edit_field20' => 'section',
'integrated_edit_field21' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field5' => 'section',
'integrated_edit_field6' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field9' => 'section',
'integrated_edit_field10' => 'section',
'integrated_edit_field11' => 'section',
'integrated_edit_field12' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field14' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field3' => 'section',
'integrated_edit_field15' => 'section',
'integrated_edit_field' => 'section',
'details_preview1' => 'section1',
'details_preview' => 'section2',
'details_preview2' => 'section3' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field30' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field32' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field31' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field22' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field23' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field24' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field25' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field26' => array( 'location' => 'section',
'cellId' => 'c8' ),
'integrated_edit_field27' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field28' => array( 'location' => 'section',
'cellId' => 'c10' ),
'integrated_edit_field29' => array( 'location' => 'section',
'cellId' => 'c11' ),
'integrated_edit_field13' => array( 'location' => 'section',
'cellId' => 'c12' ),
'integrated_edit_field16' => array( 'location' => 'section',
'cellId' => 'c15' ),
'integrated_edit_field17' => array( 'location' => 'section',
'cellId' => 'c18' ),
'integrated_edit_field18' => array( 'location' => 'section',
'cellId' => 'c19' ),
'integrated_edit_field19' => array( 'location' => 'section',
'cellId' => 'c20' ),
'integrated_edit_field20' => array( 'location' => 'section',
'cellId' => 'c21' ),
'integrated_edit_field21' => array( 'location' => 'section',
'cellId' => 'c22' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c24' ),
'integrated_edit_field5' => array( 'location' => 'section',
'cellId' => 'c25' ),
'integrated_edit_field6' => array( 'location' => 'section',
'cellId' => 'c27' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c28' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c29' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c30' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c31' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c32' ),
'integrated_edit_field12' => array( 'location' => 'section',
'cellId' => 'c33' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c34' ),
'integrated_edit_field14' => array( 'location' => 'section',
'cellId' => 'c35' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c36' ),
'integrated_edit_field3' => array( 'location' => 'section',
'cellId' => 'c37' ),
'integrated_edit_field15' => array( 'location' => 'section',
'cellId' => 'c38' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c39' ),
'details_preview1' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'details_preview' => array( 'location' => 'section2',
'cellId' => 'c1' ),
'details_preview2' => array( 'location' => 'section3',
'cellId' => 'c1' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'expand_button' => 5 ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field15',
'integrated_edit_field30',
'integrated_edit_field31',
'integrated_edit_field29',
'integrated_edit_field28',
'integrated_edit_field27',
'integrated_edit_field26',
'integrated_edit_field25',
'integrated_edit_field24',
'integrated_edit_field23',
'integrated_edit_field22',
'integrated_edit_field21',
'integrated_edit_field20',
'integrated_edit_field19',
'integrated_edit_field18',
'integrated_edit_field17',
'integrated_edit_field16',
'integrated_edit_field13',
'integrated_edit_field12',
'integrated_edit_field11',
'integrated_edit_field10',
'integrated_edit_field9',
'integrated_edit_field8',
'integrated_edit_field7',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field4',
'integrated_edit_field3',
'integrated_edit_field2',
'integrated_edit_field14',
'integrated_edit_field1',
'integrated_edit_field32' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'collapse_button' => array( 'collapse_button' ),
'logo' => array( 'logo1' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'adminarea_link' => array( 'adminarea_link' ),
'userinfo_link' => array( 'userinfo_link' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'tabs' => array( 'tabs' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c5' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c38' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c39' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c40' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c34' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c35' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c36' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c37' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c24' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c25' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c26' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c27' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c28' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c29' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c30' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c31' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c32' => array( 'cols' => array( 2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c33' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 1 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 2 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 0 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 1 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 2 ),
'rows' => array( 8 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 0 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 1 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 2 ),
'rows' => array( 9 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c21' => array( 'cols' => array( 0 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c22' => array( 'cols' => array( 1 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c23' => array( 'cols' => array( 2 ),
'rows' => array( 10 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 11 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 1 ),
'rows' => array( 11 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field23' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 11 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 12 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field24' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 12 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field25' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 2 ),
'rows' => array( 12 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field26' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 13 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field27' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1 ),
'rows' => array( 13 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field28' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 2 ),
'rows' => array( 13 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field29' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field30' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field31' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 14 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field32' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 15 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section2' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section3' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 1 ) ) ) ),
'cells' => array( 'c5' => array( 'model' => 'c3',
'items' => array( 'tabs' ),
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c38' ),
array( 'cell' => 'c39' ),
array( 'cell' => 'c40' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c34' ),
array( 'cell' => 'c35' ),
array( 'cell' => 'c36' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c37',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c24' ),
array( 'cell' => 'c25' ),
array( 'cell' => 'c26' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c27' ),
array( 'cell' => 'c28' ),
array( 'cell' => 'c29' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c30' ),
array( 'cell' => 'c31' ),
array( 'cell' => 'c32' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c33',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ),
array( 'cell' => 'c14' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c15' ),
array( 'cell' => 'c16' ),
array( 'cell' => 'c17' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c18' ),
array( 'cell' => 'c19' ),
array( 'cell' => 'c20' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c21' ),
array( 'cell' => 'c22' ),
array( 'cell' => 'c23' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field30' ),
'useFullWidth' => true ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field32' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field31' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field22' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field23' ) ),
'c5' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field24' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field25' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field26' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field27' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field28' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field29' ) ),
'c12' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c13' => array( 'model' => 'c1',
'items' => array(  ) ),
'c14' => array( 'model' => 'c1',
'items' => array(  ) ),
'c15' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field16' ) ),
'c16' => array( 'model' => 'c1',
'items' => array(  ) ),
'c17' => array( 'model' => 'c1',
'items' => array(  ) ),
'c18' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field17' ) ),
'c19' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field18' ) ),
'c20' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field19' ) ),
'c21' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field20' ) ),
'c22' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21' ) ),
'c23' => array( 'model' => 'c1',
'items' => array(  ) ),
'c24' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ) ),
'c25' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c26' => array( 'model' => 'c1',
'items' => array(  ) ),
'c27' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c28' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c29' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c30' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c31' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c32' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c33' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ),
'useFullWidth' => true ),
'c34' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c35' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field14' ) ),
'c36' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c37' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ),
'useFullWidth' => true ),
'c38' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field15' ) ),
'c39' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c40' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview1' ),
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section2' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview' ),
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview2' ),
'useFullWidth' => true ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header',
'title' => array( 'page' => 'edit',
'table' => 'rj_master',
'type' => 7 ) ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 'tipo_proceso_fk',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'id_oaj',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'id_oaj',
'table' => 'rj_master',
'type' => 3 ) ),
'integrated_edit_field30' => array( 'field' => 'carpeta',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field31' => array( 'field' => 'CAJA',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field29' => array( 'field' => 'ekogui_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field28' => array( 'field' => 'fecha_radicado_ekogui',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field27' => array( 'field' => 'radicado_ekogui',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field26' => array( 'field' => 'fecha_proxima_actualizacion',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field25' => array( 'field' => 'observacion_perder_caso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field24' => array( 'field' => 'propabilidad_perder_caso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'valor_provision_contable',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'fecha_provision_contable',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field21' => array( 'field' => 'etapa_judicial',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field20' => array( 'field' => 'fecha_constestacion_demanda',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field19' => array( 'field' => 'contestacion_demanda',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'fecha_radicado_oaj',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field17' => array( 'field' => 'fecha_admision_demanda',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field16' => array( 'field' => 'apoderado_oaj',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field13' => array( 'field' => 'cuantia_pretension',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'pretenciones',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'fecha_presentacion_demanda',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'despacho_actual',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'nom_demandado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'apoderado_demandante',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'nom_demandante',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'doc_demandante',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'causas',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'municipio_fk',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'hechos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'estado_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'calidad',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'logo1' => array( 'type' => 'logo' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'integrated_edit_field1' => array( 'field' => 'num_proceso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field32' => array( 'field' => 'estado_proceso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'rj_master_provision_contable',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'rj_master_anexos',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Proceso',
'type' => 0 ),
array( 'text' => 'Gestion documental',
'type' => 0 ),
array( 'text' => 'Audiencias',
'type' => 0 ),
array( 'text' => 'Provisión contable',
'type' => 0 ) ),
'locations' => array( 'section',
'section1',
'section3',
'section2' ) ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'rj_master_audiencias',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>