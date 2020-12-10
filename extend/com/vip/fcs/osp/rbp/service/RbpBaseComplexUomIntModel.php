<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseComplexUomIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $uomName = null;
	public $currencyUomId = null;
	public $quantityUomId = null;
	public $timeUomCode = null;
	public $enableFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'uomName'
			),
			3 => array(
			'var' => 'currencyUomId'
			),
			4 => array(
			'var' => 'quantityUomId'
			),
			5 => array(
			'var' => 'timeUomCode'
			),
			6 => array(
			'var' => 'enableFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['uomName'])){
				
				$this->uomName = $vals['uomName'];
			}
			
			
			if (isset($vals['currencyUomId'])){
				
				$this->currencyUomId = $vals['currencyUomId'];
			}
			
			
			if (isset($vals['quantityUomId'])){
				
				$this->quantityUomId = $vals['quantityUomId'];
			}
			
			
			if (isset($vals['timeUomCode'])){
				
				$this->timeUomCode = $vals['timeUomCode'];
			}
			
			
			if (isset($vals['enableFlag'])){
				
				$this->enableFlag = $vals['enableFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseComplexUomIntModel';
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
			
			
			
			
			if ("uomName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->uomName);
				
			}
			
			
			
			
			if ("currencyUomId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->currencyUomId); 
				
			}
			
			
			
			
			if ("quantityUomId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->quantityUomId); 
				
			}
			
			
			
			
			if ("timeUomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeUomCode);
				
			}
			
			
			
			
			if ("enableFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableFlag);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->uomName !== null) {
			
			$xfer += $output->writeFieldBegin('uomName');
			$xfer += $output->writeString($this->uomName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyUomId !== null) {
			
			$xfer += $output->writeFieldBegin('currencyUomId');
			$xfer += $output->writeI64($this->currencyUomId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantityUomId !== null) {
			
			$xfer += $output->writeFieldBegin('quantityUomId');
			$xfer += $output->writeI64($this->quantityUomId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeUomCode !== null) {
			
			$xfer += $output->writeFieldBegin('timeUomCode');
			$xfer += $output->writeString($this->timeUomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enableFlag');
			$xfer += $output->writeString($this->enableFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>