<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'cc_coactivo_anexos' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'cc_titulos' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'cc_acuerdo_pago' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'cc_actuaciones' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'fields' => array( 'gridFields' => array( 'EXPEDIENTE',
'NIT_CEDULA',
'DV',
'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO',
'CIUDAD',
'DIRECCION',
'CLASE_SANCION',
'REMITENTE',
'VALOR_SANCION',
'FECHA_MANDAMIENTO_PAGO',
'FECHA_NOTIFICACION_MANDAMIENTO',
'FECHA_PRESCRIPCION',
'ESTADO',
'FECHA_EJECUTORIA',
'TIEMPO_PRES',
'ULTIMA_ACTUACION',
'COMENTARIO_UA',
'ACUERDO_PAGO',
'ABOGADO_RESP',
'EXPEDIENTEREL',
'TIPODOCUMENTO',
'CARACTER' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'EXPEDIENTE' => array( 'integrated_edit_field' ),
'NIT_CEDULA' => array( 'integrated_edit_field1' ),
'DV' => array( 'integrated_edit_field2' ),
'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO' => array( 'integrated_edit_field4' ),
'CIUDAD' => array( 'integrated_edit_field5' ),
'DIRECCION' => array( 'integrated_edit_field6' ),
'CLASE_SANCION' => array( 'integrated_edit_field7' ),
'REMITENTE' => array( 'integrated_edit_field8' ),
'VALOR_SANCION' => array( 'integrated_edit_field11' ),
'FECHA_MANDAMIENTO_PAGO' => array( 'integrated_edit_field15' ),
'FECHA_NOTIFICACION_MANDAMIENTO' => array( 'integrated_edit_field16' ),
'FECHA_PRESCRIPCION' => array( 'integrated_edit_field21' ),
'ESTADO' => array( 'integrated_edit_field18' ),
'FECHA_EJECUTORIA' => array( 'integrated_edit_field14' ),
'TIEMPO_PRES' => array( 'integrated_edit_field23' ),
'ULTIMA_ACTUACION' => array( 'integrated_edit_field9' ),
'COMENTARIO_UA' => array( 'integrated_edit_field10' ),
'ACUERDO_PAGO' => array( 'integrated_edit_field12' ),
'ABOGADO_RESP' => array( 'integrated_edit_field3' ),
'EXPEDIENTEREL' => array( 'integrated_edit_field13' ),
'TIPODOCUMENTO' => array( 'integrated_edit_field17' ),
'CARACTER' => array( 'integrated_edit_field19' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field',
'integrated_edit_field13',
'integrated_edit_field18',
'integrated_edit_field12',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field11',
'integrated_edit_field14',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field4',
'integrated_edit_field17',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field19' ),
'section1' => array( 'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field16',
'integrated_edit_field21',
'integrated_edit_field15',
'integrated_edit_field23',
'integrated_edit_field3' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field' => 'section',
'integrated_edit_field13' => 'section',
'integrated_edit_field18' => 'section',
'integrated_edit_field12' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field8' => 'section',
'integrated_edit_field11' => 'section',
'integrated_edit_field14' => 'section',
'integrated_edit_field9' => 'section',
'integrated_edit_field10' => 'section',
'integrated_edit_field4' => 'section',
'integrated_edit_field17' => 'section',
'integrated_edit_field1' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field19' => 'section',
'integrated_edit_field5' => 'section1',
'integrated_edit_field6' => 'section1',
'integrated_edit_field16' => 'section1',
'integrated_edit_field21' => 'section1',
'integrated_edit_field15' => 'section1',
'integrated_edit_field23' => 'section1',
'integrated_edit_field3' => 'section1' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field13' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field18' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field12' => array( 'location' => 'section',
'cellId' => 'c3' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field8' => array( 'location' => 'section',
'cellId' => 'c5' ),
'integrated_edit_field11' => array( 'location' => 'section',
'cellId' => 'c11' ),
'integrated_edit_field14' => array( 'location' => 'section',
'cellId' => 'c12' ),
'integrated_edit_field9' => array( 'location' => 'section',
'cellId' => 'c9' ),
'integrated_edit_field10' => array( 'location' => 'section',
'cellId' => 'c10' ),
'integrated_edit_field4' => array( 'location' => 'section',
'cellId' => 'c13' ),
'integrated_edit_field17' => array( 'location' => 'section',
'cellId' => 'c14' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c15' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c16' ),
'integrated_edit_field19' => array( 'location' => 'section',
'cellId' => 'c17' ),
'integrated_edit_field5' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field6' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field16' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field21' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field15' => array( 'location' => 'section1',
'cellId' => 'c8' ),
'integrated_edit_field23' => array( 'location' => 'section1',
'cellId' => 'c10' ),
'integrated_edit_field3' => array( 'location' => 'section1',
'cellId' => 'c6' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8',
'integrated_edit_field11',
'integrated_edit_field15',
'integrated_edit_field16',
'integrated_edit_field21',
'integrated_edit_field18',
'integrated_edit_field14',
'integrated_edit_field23',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field12',
'integrated_edit_field3',
'integrated_edit_field13',
'integrated_edit_field17',
'integrated_edit_field19' ),
'tabs' => array( 'tabs' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1,
2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 1,
2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1,
2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1,
2 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1,
2 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 0 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1,
2 ),
'rows' => array( 7 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 8 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field23' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'tabs' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c14' ),
array( 'cell' => 'c15' ),
array( 'cell' => 'c16' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c17' ),
array( 'cell' => 'c18',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2' ),
array( 'cell' => 'c3',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c11' ),
array( 'cell' => 'c12',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field18' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field11' ) ),
'c12' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field14' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c13' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ),
'useFullWidth' => true ),
'c14' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field17' ) ),
'c15' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c16' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c17' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field19' ) ),
'c18' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field16' ) ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field15' ) ),
'c9' => array( 'model' => 'c1',
'items' => array(  ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field23' ) ),
'c11' => array( 'model' => 'c1',
'items' => array(  ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ) ),
'c7' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'EXPEDIENTE',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'NIT_CEDULA',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'DV',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'NOMBRE DE EMPRESA EN EXPEDIENTE DE COBRO COACTIVO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'CIUDAD',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'DIRECCION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'CLASE_SANCION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'REMITENTE',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'VALOR_SANCION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'FECHA_MANDAMIENTO_PAGO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'FECHA_NOTIFICACION_MANDAMIENTO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field21' => array( 'field' => 'FECHA_PRESCRIPCION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'ESTADO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Paso 1',
'type' => 0 ),
array( 'text' => 'Paso 2',
'type' => 0 ) ),
'locations' => array( 'section',
'section1' ) ),
'integrated_edit_field14' => array( 'field' => 'FECHA_EJECUTORIA',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'TIEMPO_PRES',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'ULTIMA_ACTUACION',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'COMENTARIO_UA',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'ACUERDO_PAGO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'ABOGADO_RESP',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'EXPEDIENTEREL',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'EXPEDIENTEREL',
'table' => 'cc_coactivo',
'type' => 3 ) ),
'integrated_edit_field17' => array( 'field' => 'TIPODOCUMENTO',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'CARACTER',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>