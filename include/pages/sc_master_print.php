<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'totals' => array( 'ordinal_id' => array( 'totalsType' => '' ),
'procedencia' => array( 'totalsType' => '' ),
'radicado' => array( 'totalsType' => '' ),
'radicado_fecha' => array( 'totalsType' => '' ),
'recepcion_fecha' => array( 'totalsType' => '' ),
'razon_social_nombre' => array( 'totalsType' => '' ),
'asunto' => array( 'totalsType' => '' ),
'asignado' => array( 'totalsType' => '' ),
'asignado_email' => array( 'totalsType' => '' ),
'sc_color' => array( 'totalsType' => '' ),
'tipo_fk' => array( 'totalsType' => '' ),
'tema_fk' => array( 'totalsType' => '' ),
'fecha_control' => array( 'totalsType' => '' ),
'fecha_respuesta' => array( 'totalsType' => '' ),
'estado_entrega_fk' => array( 'totalsType' => '' ),
'observaciones' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'ordinal_id',
'procedencia',
'radicado',
'recepcion_fecha',
'razon_social_nombre',
'asunto',
'asignado',
'tipo_fk',
'tema_fk',
'fecha_control',
'fecha_respuesta',
'estado_entrega_fk',
'observaciones',
'sys_user',
'asignado_email' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'ordinal_id' => array( 'simple_grid_field',
'simple_grid_field3' ),
'procedencia' => array( 'simple_grid_field1',
'simple_grid_field16' ),
'radicado' => array( 'simple_grid_field2',
'simple_grid_field17' ),
'recepcion_fecha' => array( 'simple_grid_field4',
'simple_grid_field18' ),
'razon_social_nombre' => array( 'simple_grid_field5',
'simple_grid_field19' ),
'asunto' => array( 'simple_grid_field6',
'simple_grid_field20' ),
'asignado' => array( 'simple_grid_field7',
'simple_grid_field21' ),
'tipo_fk' => array( 'simple_grid_field8',
'simple_grid_field22' ),
'tema_fk' => array( 'simple_grid_field9',
'simple_grid_field23' ),
'fecha_control' => array( 'simple_grid_field10',
'simple_grid_field24' ),
'fecha_respuesta' => array( 'simple_grid_field11',
'simple_grid_field25' ),
'estado_entrega_fk' => array( 'simple_grid_field12',
'simple_grid_field26' ),
'observaciones' => array( 'simple_grid_field13',
'simple_grid_field27' ),
'sys_user' => array( 'simple_grid_field14',
'simple_grid_field28' ),
'asignado_email' => array( 'simple_grid_field15',
'simple_grid_field29' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'grid' => array( 'simple_grid_field3',
'simple_grid_field',
'simple_grid_field16',
'simple_grid_field1',
'simple_grid_field17',
'simple_grid_field2',
'simple_grid_field18',
'simple_grid_field4',
'simple_grid_field19',
'simple_grid_field5',
'simple_grid_field20',
'simple_grid_field6',
'simple_grid_field21',
'simple_grid_field7',
'simple_grid_field22',
'simple_grid_field8',
'simple_grid_field23',
'simple_grid_field9',
'simple_grid_field24',
'simple_grid_field10',
'simple_grid_field25',
'simple_grid_field11',
'simple_grid_field26',
'simple_grid_field12',
'simple_grid_field27',
'simple_grid_field13',
'simple_grid_field28',
'simple_grid_field14',
'simple_grid_field29',
'simple_grid_field15' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_pages' => 'above-grid',
'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'simple_grid_field3' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field27' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field28' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field29' => 'grid',
'simple_grid_field15' => 'grid' ),
'itemLocations' => array( 'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field27' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'simple_grid_field28' => array( 'location' => 'grid',
'cellId' => 'headcell_field13' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field13' ),
'simple_grid_field29' => array( 'location' => 'grid',
'cellId' => 'headcell_field14' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field14' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'print_pdf' => array( 'print_pdf' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15' ),
'grid_field_label' => array( 'simple_grid_field3',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25',
'simple_grid_field26',
'simple_grid_field27',
'simple_grid_field28',
'simple_grid_field29' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'ordinal_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'procedencia_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'radicado_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'recepcion_fecha_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'razon_social_nombre_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'asunto_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'asignado_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'tipo_fk_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'tema_fk_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'fecha_control_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'fecha_respuesta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'estado_entrega_fk_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'observaciones_fieldheadercolumn' ),
'items' => array( 'simple_grid_field27' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'sys_user_fieldheadercolumn' ),
'items' => array( 'simple_grid_field28' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'asignado_email_fieldheadercolumn' ),
'items' => array( 'simple_grid_field29' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'ordinal_id_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'procedencia_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'radicado_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'recepcion_fecha_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'razon_social_nombre_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'asunto_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'asignado_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'tipo_fk_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'tema_fk_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'fecha_control_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'fecha_respuesta_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'estado_entrega_fk_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'observaciones_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'sys_user_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'asignado_email_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ),
array( 'cell' => 'headcell_field13' ),
array( 'cell' => 'headcell_field14' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ),
array( 'cell' => 'cell_field13' ),
array( 'cell' => 'cell_field14' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ),
array( 'cell' => 'footcell_field13' ),
array( 'cell' => 'footcell_field14' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'ordinal_id',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'ordinal_id',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'procedencia',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'procedencia',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'radicado',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'radicado',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'recepcion_fecha',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'recepcion_fecha',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'razon_social_nombre',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'razon_social_nombre',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'asunto',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'asunto',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'asignado',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'asignado',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'tipo_fk',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'tipo_fk',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'tema_fk',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'tema_fk',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'fecha_control',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'fecha_control',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'fecha_respuesta',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'fecha_respuesta',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'estado_entrega_fk',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'estado_entrega_fk',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field27' ),
'field' => 'observaciones',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'observaciones',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field13' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field28' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'cell_field13' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'sys_user',
'columnName' => 'field' ),
'footcell_field13' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field14' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field29' ),
'field' => 'asignado_email',
'columnName' => 'field' ),
'cell_field14' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'asignado_email',
'columnName' => 'field' ),
'footcell_field14' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'simple_grid_field' => array( 'field' => 'ordinal_id',
'type' => 'grid_field' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'ordinal_id' ),
'simple_grid_field1' => array( 'field' => 'procedencia',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'procedencia' ),
'simple_grid_field2' => array( 'field' => 'radicado',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'radicado' ),
'simple_grid_field4' => array( 'field' => 'recepcion_fecha',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'recepcion_fecha' ),
'simple_grid_field5' => array( 'field' => 'razon_social_nombre',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'razon_social_nombre' ),
'simple_grid_field6' => array( 'field' => 'asunto',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'asunto' ),
'simple_grid_field7' => array( 'field' => 'asignado',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'asignado' ),
'simple_grid_field8' => array( 'field' => 'tipo_fk',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'tipo_fk' ),
'simple_grid_field9' => array( 'field' => 'tema_fk',
'type' => 'grid_field' ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'tema_fk' ),
'simple_grid_field10' => array( 'field' => 'fecha_control',
'type' => 'grid_field' ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 'fecha_control' ),
'simple_grid_field11' => array( 'field' => 'fecha_respuesta',
'type' => 'grid_field' ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'fecha_respuesta' ),
'simple_grid_field12' => array( 'field' => 'estado_entrega_fk',
'type' => 'grid_field' ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 'estado_entrega_fk' ),
'simple_grid_field13' => array( 'field' => 'observaciones',
'type' => 'grid_field' ),
'simple_grid_field27' => array( 'type' => 'grid_field_label',
'field' => 'observaciones' ),
'simple_grid_field14' => array( 'field' => 'sys_user',
'type' => 'grid_field' ),
'simple_grid_field28' => array( 'type' => 'grid_field_label',
'field' => 'sys_user' ),
'simple_grid_field15' => array( 'field' => 'asignado_email',
'type' => 'grid_field' ),
'simple_grid_field29' => array( 'type' => 'grid_field_label',
'field' => 'asignado_email' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>