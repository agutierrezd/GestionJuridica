<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'CC_ID',
'EXPEDIENTE',
'DV',
'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO',
'CIUDAD',
'DIRECCION',
'CLASE_SANCION',
'REMITENTE',
'ESTADO',
'TIEMPO_PRES',
'NIT_CEDULA',
'VALOR_SANCION',
'FECHA_EJECUTORIA',
'FECHA_MANDAMIENTO_PAGO',
'FECHA_NOTIFICACION_MANDAMIENTO',
'FECHA_PRESCRIPCION',
'ULTIMA_ACTUACION',
'COMENTARIO_UA',
'ACUERDO_PAGO',
'ABOGADO_RESP',
'EXPEDIENTEREL',
'TIPODOCUMENTO',
'CARACTER' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'CC_ID' => array( 'import_field' ),
'EXPEDIENTE' => array( 'import_field1' ),
'NIT_CEDULA' => array( 'import_field2' ),
'DV' => array( 'import_field3' ),
'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO' => array( 'import_field5' ),
'CIUDAD' => array( 'import_field6' ),
'DIRECCION' => array( 'import_field7' ),
'CLASE_SANCION' => array( 'import_field8' ),
'REMITENTE' => array( 'import_field9' ),
'VALOR_SANCION' => array( 'import_field12' ),
'FECHA_EJECUTORIA' => array( 'import_field15' ),
'FECHA_MANDAMIENTO_PAGO' => array( 'import_field16' ),
'FECHA_NOTIFICACION_MANDAMIENTO' => array( 'import_field17' ),
'ESTADO' => array( 'import_field19' ),
'FECHA_PRESCRIPCION' => array( 'import_field22' ),
'TIEMPO_PRES' => array( 'import_field24' ),
'ULTIMA_ACTUACION' => array( 'import_field10' ),
'COMENTARIO_UA' => array( 'import_field11' ),
'ACUERDO_PAGO' => array( 'import_field13' ),
'ABOGADO_RESP' => array( 'import_field20' ),
'EXPEDIENTEREL' => array( 'import_field4' ),
'TIPODOCUMENTO' => array( 'import_field14' ),
'CARACTER' => array( 'import_field18' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field1',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field19',
'import_field24',
'import_field2',
'import_field12',
'import_field15',
'import_field16',
'import_field17',
'import_field22',
'import_field10',
'import_field11',
'import_field13',
'import_field20',
'import_field4',
'import_field14',
'import_field18' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field5' => 'grid',
'import_field6' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field19' => 'grid',
'import_field24' => 'grid',
'import_field2' => 'grid',
'import_field12' => 'grid',
'import_field15' => 'grid',
'import_field16' => 'grid',
'import_field17' => 'grid',
'import_field22' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field13' => 'grid',
'import_field20' => 'grid',
'import_field4' => 'grid',
'import_field14' => 'grid',
'import_field18' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field12',
'import_field15',
'import_field16',
'import_field17',
'import_field19',
'import_field22',
'import_field24',
'import_field10',
'import_field11',
'import_field13',
'import_field20',
'import_field4',
'import_field14',
'import_field18' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field1',
'import_field3',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field19',
'import_field24',
'import_field2',
'import_field12',
'import_field15',
'import_field16',
'import_field17',
'import_field22',
'import_field10',
'import_field11',
'import_field13',
'import_field20',
'import_field4',
'import_field14',
'import_field18' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field' => array( 'field' => 'CC_ID',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'EXPEDIENTE',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'NIT_CEDULA',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'DV',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'CIUDAD',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'DIRECCION',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'CLASE_SANCION',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'REMITENTE',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'VALOR_SANCION',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'FECHA_EJECUTORIA',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'FECHA_MANDAMIENTO_PAGO',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'FECHA_NOTIFICACION_MANDAMIENTO',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'ESTADO',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'FECHA_PRESCRIPCION',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'TIEMPO_PRES',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'ULTIMA_ACTUACION',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'COMENTARIO_UA',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'ACUERDO_PAGO',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'ABOGADO_RESP',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'EXPEDIENTEREL',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'TIPODOCUMENTO',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'CARACTER',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>