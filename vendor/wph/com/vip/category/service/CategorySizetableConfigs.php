<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategorySizetableConfigs {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $sizeTypeId = null;
	public $sizeTypeName = null;
	public $sizetableConfigList = null;
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
			'var' => 'sizeTypeId'
			),
			4 => array(
			'var' => 'sizeTypeName'
			),
			5 => array(
			'var' => 'sizetableConfigList'
			),
			6 => array(
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
			
			
			if (isset($vals['sizeTypeId'])){
				
				$this->sizeTypeId = $vals['sizeTypeId'];
			}
			
			
			if (isset($vals['sizeTypeName'])){
				
				$this->sizeTypeName = $vals['sizeTypeName'];
			}
			
			
			if (isset($vals['sizetableConfigList'])){
				
				$this->sizetableConfigList = $vals['sizetableConfigList'];
			}
			
			
			if (isset($vals['errorCodeMessage'])){
				
				$this->errorCodeMessage = $vals['errorCodeMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategorySizetableConfigs';
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
			
			
			
			
			if ("sizeTypeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sizeTypeId); 
				
			}
			
			
			
			
			if ("sizeTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeTypeName);
				
			}
			
			
			
			
			if ("sizetableConfigList" == $schemeField){
				
				$needSkip = false;
				
				$this->sizetableConfigList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\SizetableConfigs();
						$elem0->read($input);
						
						$this->sizetableConfigList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		
		if($this->sizeTypeId !== null) {
			
			$xfer += $output->writeFieldBegin('sizeTypeId');
			$xfer += $output->writeI32($this->sizeTypeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizeTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeTypeName');
			$xfer += $output->writeString($this->sizeTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sizetableConfigList !== null) {
			
			$xfer += $output->writeFieldBegin('sizetableConfigList');
			
			if (!is_array($this->sizetableConfigList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->sizetableConfigList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
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