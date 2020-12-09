<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class BipDiagramModel {
	
	static $_TSPEC;
	public $id = null;
	public $diagramName = null;
	public $diagramType = null;
	public $diagramFieldsDefine = null;
	public $reportId = null;
	public $refreshDataId = null;
	public $createUser = null;
	public $updateUser = null;
	public $createTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	public $sequence = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'diagramName'
			),
			3 => array(
			'var' => 'diagramType'
			),
			4 => array(
			'var' => 'diagramFieldsDefine'
			),
			5 => array(
			'var' => 'reportId'
			),
			6 => array(
			'var' => 'refreshDataId'
			),
			7 => array(
			'var' => 'createUser'
			),
			8 => array(
			'var' => 'updateUser'
			),
			9 => array(
			'var' => 'createTime'
			),
			10 => array(
			'var' => 'updateTime'
			),
			11 => array(
			'var' => 'isDeleted'
			),
			12 => array(
			'var' => 'sequence'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['diagramName'])){
				
				$this->diagramName = $vals['diagramName'];
			}
			
			
			if (isset($vals['diagramType'])){
				
				$this->diagramType = $vals['diagramType'];
			}
			
			
			if (isset($vals['diagramFieldsDefine'])){
				
				$this->diagramFieldsDefine = $vals['diagramFieldsDefine'];
			}
			
			
			if (isset($vals['reportId'])){
				
				$this->reportId = $vals['reportId'];
			}
			
			
			if (isset($vals['refreshDataId'])){
				
				$this->refreshDataId = $vals['refreshDataId'];
			}
			
			
			if (isset($vals['createUser'])){
				
				$this->createUser = $vals['createUser'];
			}
			
			
			if (isset($vals['updateUser'])){
				
				$this->updateUser = $vals['updateUser'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['sequence'])){
				
				$this->sequence = $vals['sequence'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BipDiagramModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("diagramName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diagramName);
				
			}
			
			
			
			
			if ("diagramType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->diagramType); 
				
			}
			
			
			
			
			if ("diagramFieldsDefine" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->diagramFieldsDefine);
				
			}
			
			
			
			
			if ("reportId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reportId); 
				
			}
			
			
			
			
			if ("refreshDataId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refreshDataId); 
				
			}
			
			
			
			
			if ("createUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createUser);
				
			}
			
			
			
			
			if ("updateUser" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateUser);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("sequence" == $schemeField){
				
				$needSkip = false;
				$input->readI16($this->sequence); 
				
			}
			
			
			
			if($needSkip){
				
				\Osp\Protocol\ProtocolUtil::skip($input);
			}
			
			$input->readFieldEnd();
		}
		
		$input->readStructEnd();
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('diagramName');
		$xfer += $output->writeString($this->diagramName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('diagramType');
		$xfer += $output->writeI32($this->diagramType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('diagramFieldsDefine');
		$xfer += $output->writeString($this->diagramFieldsDefine);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('reportId');
		$xfer += $output->writeI64($this->reportId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refreshDataId');
		$xfer += $output->writeI64($this->refreshDataId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createUser');
		$xfer += $output->writeString($this->createUser);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateUser');
		$xfer += $output->writeString($this->updateUser);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('createTime');
		$xfer += $output->writeI64($this->createTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('updateTime');
		$xfer += $output->writeI64($this->updateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('isDeleted');
		$xfer += $output->writeI32($this->isDeleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sequence');
		$xfer += $output->writeI16($this->sequence);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>