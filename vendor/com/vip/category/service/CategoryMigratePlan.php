<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryMigratePlan {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $isEnable = null;
	public $operateMode = null;
	public $errorCodeMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'categoryName'
			),
			3 => array(
			'var' => 'isEnable'
			),
			4 => array(
			'var' => 'operateMode'
			),
			5 => array(
			'var' => 'errorCodeMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['isEnable'])){
				
				$this->isEnable = $vals['isEnable'];
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
		
		return 'CategoryMigratePlan';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("categoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryName);
				
			}
			
			
			
			
			if ("isEnable" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isEnable); 
				
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
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isEnable !== null) {
			
			$xfer += $output->writeFieldBegin('isEnable');
			$xfer += $output->writeI32($this->isEnable);
			
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