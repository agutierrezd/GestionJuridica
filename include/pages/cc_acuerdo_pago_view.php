<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'cc_plan_pago' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'master' => array( 'cc_coactivo' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'fecha_acuerdo',
'valoracordado',
'pagado',
'anexos',
'sys_user',
'capital',
'intereses',
'fecha_acuerdof' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'fecha_acuerdo' => array( 'integrated_edit_field3' ),
'valoracordado' => array( 'integrated_edit_field4' ),
'pagado' => array( 'integrated_edit_field7' ),
'anexos' => array( 'integrated_edit_field' ),
'sys_user' => array( 'integrated_edit_field8' ),
'capital' => array( 'integrated_edit_field1' ),
'intereses' => array( 'integrated_edit_field2' ),
'fecha_acuerdof' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field7',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field',
'integrated_edit_field8',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field4' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field4' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c12' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field7',
'integrated_edit_field',
'integrated_edit_field8',
'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field5' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 6 ) ) ),
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
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c12' ),
array( 'cell' => 'c13' ) ) ) ),
'cells' => array( 'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c5' => array( 'model' => 'c3',
'items' => array(  ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ),
'useFullWidth' => true ),
'c12' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ) ),
'c13' => array( 'model' => 'c3',
'items' => array(  ) ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c2' => array( 'model' => 'c3',
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
'integrated_edit_field3' => array( 'field' => 'fecha_acuerdo',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'valoracordado',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'valoracordado',
'table' => 'cc_acuerdo_pago',
'type' => 3 ) ),
'integrated_edit_field7' => array( 'field' => 'pagado',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'anexos',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'sys_user',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'capital',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'capital',
'table' => 'cc_acuerdo_pago',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'intereses',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'intereses',
'table' => 'cc_acuerdo_pago',
'type' => 3 ) ),
'integrated_edit_field5' => array( 'field' => 'fecha_acuerdof',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 11,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right' );
		?>