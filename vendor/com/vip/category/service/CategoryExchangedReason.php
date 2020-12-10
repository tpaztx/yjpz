<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryExchangedReason {
	
	static $_TSPEC;
	public $categoryId = null;
	public $reasonId = null;
	public $isShow = null;
	public $operateMode = null;
	public $errorCodeMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'reasonId'
			),
			3 => array(
			'var' => 'isShow'
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
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['isShow'])){
				
				$this->isShow = $vals['isShow'];
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
		
		return 'CategoryExchangedReason';
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
			
			
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reasonId); 
				
			}
			
			
			
			
			if ("isShow" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isShow); 
				
			}
			
			
			
			
			if ("operateMode" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->operateMode); 
				
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
		
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI64($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShow !== null) {
			
			$xfer += $output->writeFieldBegin('isShow');
			$xfer += $output->writeByte($this->isShow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateMode !== null) {
			
			$xfer += $output->writeFieldBegin('operateMode');
			$xfer += $output->writeByte($this->operateMode);
			
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