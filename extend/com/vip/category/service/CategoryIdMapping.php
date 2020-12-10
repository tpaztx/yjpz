<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryIdMapping {
	
	static $_TSPEC;
	public $preCategoryId = null;
	public $preCategoryName = null;
	public $newCategoryId = null;
	public $newCategoryName = null;
	public $operateMode = null;
	public $errorCodeMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'preCategoryId'
			),
			2 => array(
			'var' => 'preCategoryName'
			),
			3 => array(
			'var' => 'newCategoryId'
			),
			4 => array(
			'var' => 'newCategoryName'
			),
			5 => array(
			'var' => 'operateMode'
			),
			6 => array(
			'var' => 'errorCodeMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['preCategoryId'])){
				
				$this->preCategoryId = $vals['preCategoryId'];
			}
			
			
			if (isset($vals['preCategoryName'])){
				
				$this->preCategoryName = $vals['preCategoryName'];
			}
			
			
			if (isset($vals['newCategoryId'])){
				
				$this->newCategoryId = $vals['newCategoryId'];
			}
			
			
			if (isset($vals['newCategoryName'])){
				
				$this->newCategoryName = $vals['newCategoryName'];
			}
			
			
			if (isset($vals['operateMode'])){
				
				$this->operateMode = $vals['operateMode'];
			}
			
			
			if (isset($vals['errorCodeMessage'])){
				
				$this->errorCodeMessage = $vals['errorCodeMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryIdMapping';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("preCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->preCategoryId); 
				
			}
			
			
			
			
			if ("preCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preCategoryName);
				
			}
			
			
			
			
			if ("newCategoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->newCategoryId); 
				
			}
			
			
			
			
			if ("newCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newCategoryName);
				
			}
			
			
			
			
			if ("operateMode" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\OperationType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->operateMode = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("errorCodeMessage" == $schemeField){
				
				$needSkip = false;
				
				$this->errorCodeMessage = new \com\vip\category\service\ErrorCodeMessage();
				$this->errorCodeMessage->read($input);
				
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
		
		if($this->preCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('preCategoryId');
			$xfer += $output->writeI32($this->preCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('preCategoryName');
			$xfer += $output->writeString($this->preCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCategoryId !== null) {
			
			$xfer += $output->writeFieldBegin('newCategoryId');
			$xfer += $output->writeI32($this->newCategoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('newCategoryName');
			$xfer += $output->writeString($this->newCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateMode !== null) {
			
			$xfer += $output->writeFieldBegin('operateMode');
			
			$em = new \com\vip\category\service\OperationType; 
			$output->writeString($em::$__names[$this->operateMode]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCodeMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errorCodeMessage');
			
			if (!is_object($this->errorCodeMessage)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->errorCodeMessage->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>