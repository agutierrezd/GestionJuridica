<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_q_prescipcicion  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		if ($data['dias_paraprescripcion']>0)
  $record["dias_paraprescripcion_css"].='background:green;color:white';

if ($data['dias_paraprescripcion']<0)
  $record["dias_paraprescripcion_css"].='background:yellow';

if ($data['dias_paraprescripcion'] == "")
  $record["dias_paraprescripcion_css"].='background:red';
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>