<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbljuridica_at_172_18_0_115__cc_actuaciones;
	var $tbljuridica_at_172_18_0_115__cc_acuerdo_pago;
	var $tbljuridica_at_172_18_0_115__cc_coactivo;
	var $tbljuridica_at_172_18_0_115__cc_coactivo_anexos;
	var $tbljuridica_at_172_18_0_115__cc_coactivo_anexos_tipo;
	var $tbljuridica_at_172_18_0_115__cc_gesionjuridica_v103_uggroups;
	var $tbljuridica_at_172_18_0_115__cc_gesionjuridica_v103_ugmembers;
	var $tbljuridica_at_172_18_0_115__cc_gesionjuridica_v103_ugrights;
	var $tbljuridica_at_172_18_0_115__cc_plan_pago;
	var $tbljuridica_at_172_18_0_115__cc_titulos;
	var $tbljuridica_at_172_18_0_115__cc_tparam_caracter;
	var $tbljuridica_at_172_18_0_115__cc_tparam_clase_sancion;
	var $tbljuridica_at_172_18_0_115__cc_tparam_estado;
	var $tbljuridica_at_172_18_0_115__cc_tparam_remitente;
	var $tbljuridica_at_172_18_0_115__cc_tparam_sn;
	var $tbljuridica_at_172_18_0_115__cc_tparam_tiempo_prescripcion;
	var $tbljuridica_at_172_18_0_115__cc_tparam_tipodoc;
	var $tbljuridica_at_172_18_0_115__q_actuaciones;
	var $tbljuridica_at_172_18_0_115__q_prescipcicion;
	var $tbljuridica_at_172_18_0_115__rj_master;
	var $tbljuridica_at_172_18_0_115__rj_master_anexos;
	var $tbljuridica_at_172_18_0_115__rj_master_anexos_tipo;
	var $tbljuridica_at_172_18_0_115__rj_master_audiencias;
	var $tbljuridica_at_172_18_0_115__rj_master_provision_contable;
	var $tbljuridica_at_172_18_0_115__rj_tparam_calidad;
	var $tbljuridica_at_172_18_0_115__rj_tparam_estado;
	var $tbljuridica_at_172_18_0_115__rj_tparam_etapajudicial;
	var $tbljuridica_at_172_18_0_115__rj_tparam_probabilidadperdercas;
	var $tbljuridica_at_172_18_0_115__rj_tparam_sn;
	var $tbljuridica_at_172_18_0_115__rj_tparam_tipodeproceso;
	var $tbljuridica_at_172_18_0_115__sc_master;
	var $tbljuridica_at_172_18_0_115__sc_tparam_estadoentrega;
	var $tbljuridica_at_172_18_0_115__sc_tparam_tema;
	var $tbljuridica_at_172_18_0_115__sc_tparam_tipo;
	var $tblmcit_users_at_172_18_0_115__global_users;
	var $tblmcit_users_at_172_18_0_115__q_divipola;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "cc_actuaciones", "varname" => "juridica_at_172_18_0_115__cc_actuaciones", "altvarname" => "cc_actuaciones", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_acuerdo_pago", "varname" => "juridica_at_172_18_0_115__cc_acuerdo_pago", "altvarname" => "cc_acuerdo_pago", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_coactivo", "varname" => "juridica_at_172_18_0_115__cc_coactivo", "altvarname" => "cc_coactivo", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_coactivo_anexos", "varname" => "juridica_at_172_18_0_115__cc_coactivo_anexos", "altvarname" => "cc_coactivo_anexos", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_coactivo_anexos_tipo", "varname" => "juridica_at_172_18_0_115__cc_coactivo_anexos_tipo", "altvarname" => "cc_coactivo_anexos_tipo", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_gesionjuridica_v103_uggroups", "varname" => "juridica_at_172_18_0_115__cc_gesionjuridica_v103_uggroups", "altvarname" => "cc_gesionjuridica_v103_uggroups", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_gesionjuridica_v103_ugmembers", "varname" => "juridica_at_172_18_0_115__cc_gesionjuridica_v103_ugmembers", "altvarname" => "cc_gesionjuridica_v103_ugmembers", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_gesionjuridica_v103_ugrights", "varname" => "juridica_at_172_18_0_115__cc_gesionjuridica_v103_ugrights", "altvarname" => "cc_gesionjuridica_v103_ugrights", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_plan_pago", "varname" => "juridica_at_172_18_0_115__cc_plan_pago", "altvarname" => "cc_plan_pago", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_titulos", "varname" => "juridica_at_172_18_0_115__cc_titulos", "altvarname" => "cc_titulos", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_caracter", "varname" => "juridica_at_172_18_0_115__cc_tparam_caracter", "altvarname" => "cc_tparam_caracter", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_clase_sancion", "varname" => "juridica_at_172_18_0_115__cc_tparam_clase_sancion", "altvarname" => "cc_tparam_clase_sancion", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_estado", "varname" => "juridica_at_172_18_0_115__cc_tparam_estado", "altvarname" => "cc_tparam_estado", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_remitente", "varname" => "juridica_at_172_18_0_115__cc_tparam_remitente", "altvarname" => "cc_tparam_remitente", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_sn", "varname" => "juridica_at_172_18_0_115__cc_tparam_sn", "altvarname" => "cc_tparam_sn", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_tiempo_prescripcion", "varname" => "juridica_at_172_18_0_115__cc_tparam_tiempo_prescripcion", "altvarname" => "cc_tparam_tiempo_prescripcion", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "cc_tparam_tipodoc", "varname" => "juridica_at_172_18_0_115__cc_tparam_tipodoc", "altvarname" => "cc_tparam_tipodoc", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "q_actuaciones", "varname" => "juridica_at_172_18_0_115__q_actuaciones", "altvarname" => "q_actuaciones", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "q_prescipcicion", "varname" => "juridica_at_172_18_0_115__q_prescipcicion", "altvarname" => "q_prescipcicion", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_master", "varname" => "juridica_at_172_18_0_115__rj_master", "altvarname" => "rj_master", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_master_anexos", "varname" => "juridica_at_172_18_0_115__rj_master_anexos", "altvarname" => "rj_master_anexos", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_master_anexos_tipo", "varname" => "juridica_at_172_18_0_115__rj_master_anexos_tipo", "altvarname" => "rj_master_anexos_tipo", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_master_audiencias", "varname" => "juridica_at_172_18_0_115__rj_master_audiencias", "altvarname" => "rj_master_audiencias", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_master_provision_contable", "varname" => "juridica_at_172_18_0_115__rj_master_provision_contable", "altvarname" => "rj_master_provision_contable", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_calidad", "varname" => "juridica_at_172_18_0_115__rj_tparam_calidad", "altvarname" => "rj_tparam_calidad", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_estado", "varname" => "juridica_at_172_18_0_115__rj_tparam_estado", "altvarname" => "rj_tparam_estado", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_etapajudicial", "varname" => "juridica_at_172_18_0_115__rj_tparam_etapajudicial", "altvarname" => "rj_tparam_etapajudicial", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_probabilidadperdercas", "varname" => "juridica_at_172_18_0_115__rj_tparam_probabilidadperdercas", "altvarname" => "rj_tparam_probabilidadperdercas", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_sn", "varname" => "juridica_at_172_18_0_115__rj_tparam_sn", "altvarname" => "rj_tparam_sn", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "rj_tparam_tipodeproceso", "varname" => "juridica_at_172_18_0_115__rj_tparam_tipodeproceso", "altvarname" => "rj_tparam_tipodeproceso", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "sc_master", "varname" => "juridica_at_172_18_0_115__sc_master", "altvarname" => "sc_master", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "sc_tparam_estadoentrega", "varname" => "juridica_at_172_18_0_115__sc_tparam_estadoentrega", "altvarname" => "sc_tparam_estadoentrega", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "sc_tparam_tema", "varname" => "juridica_at_172_18_0_115__sc_tparam_tema", "altvarname" => "sc_tparam_tema", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "sc_tparam_tipo", "varname" => "juridica_at_172_18_0_115__sc_tparam_tipo", "altvarname" => "sc_tparam_tipo", "connId" => "juridica_at_172_18_0_115", "schema" => "", "connName" => "juridica at 172.18.0.115");
		$this->lstTables[] = array("name" => "global_users", "varname" => "mcit_users_at_172_18_0_115__global_users", "altvarname" => "global_users", "connId" => "mcit_users_at_172_18_0_115", "schema" => "", "connName" => "mcit_users at 172.18.0.115");
		$this->lstTables[] = array("name" => "q_divipola", "varname" => "mcit_users_at_172_18_0_115__q_divipola", "altvarname" => "q_divipola", "connId" => "mcit_users_at_172_18_0_115", "schema" => "", "connName" => "mcit_users at 172.18.0.115");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>