<?php
			$optionsArray = array( 'totals' => array( 'audiencia_id' => array( 'totalsType' => '' ),
'rj_di_fk' => array( 'totalsType' => '' ),
'expediente' => array( 'totalsType' => '' ),
'fecha_audiencia' => array( 'totalsType' => '' ),
'hora_audiencia' => array( 'totalsType' => '' ),
'juzgado' => array( 'totalsType' => '' ),
'sys_date' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'realizada' => array( 'totalsType' => '' ),
'obs_audiencia' => array( 'totalsType' => '' ),
'rsys_user' => array( 'totalsType' => '' ),
'rsys_date' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'audiencia_id',
'rj_di_fk',
'expediente',
'fecha_audiencia',
'hora_audiencia',
'juzgado',
'sys_user',
'obs_audiencia' ),
'exportFields' => array( 'audiencia_id',
'rj_di_fk',
'expediente',
'fecha_audiencia',
'hora_audiencia',
'juzgado',
'sys_user',
'obs_audiencia' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'audiencia_id' => array( 'export_field' ),
'rj_di_fk' => array( 'export_field1' ),
'expediente' => array( 'export_field2' ),
'fecha_audiencia' => array( 'export_field3' ),
'hora_audiencia' => array( 'export_field4' ),
'juzgado' => array( 'export_field5' ),
'sys_user' => array( 'export_field7' ),
'obs_audiencia' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8' ) ),
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
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field7',
'export_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'audiencia_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'rj_di_fk',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'expediente',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'fecha_audiencia',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'hora_audiencia',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'juzgado',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'sys_user',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'obs_audiencia',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>