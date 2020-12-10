<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoryStandard {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $brandId = null;
	public $brandCname = null;
	public $attributeId = null;
	public $attributeName = null;
	public $optionId = null;
	public $optionName = null;
	public $customoption = null;
	public $createTime = null;
	public $updateTime = null;
	public $operator = null;
	
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
			'var' => 'brandId'
			),
			4 => array(
			'var' => 'brandCname'
			),
			5 => array(
			'var' => 'attributeId'
			),
			6 => array(
			'var' => 'attributeName'
			),
			7 => array(
			'var' => 'optionId'
			),
			8 => array(
			'var' => 'optionName'
			),
			9 => array(
			'var' => 'customoption'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'updateTime'
			),
			12 => array(
			'var' => 'operator'
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
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
			if (isset($vals['brandCname'])){
				
				$this->brandCname = $vals['brandCname'];
			}
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['attributeName'])){
				
				$this->attributeName = $vals['attributeName'];
			}
			
			
			if (isset($vals['optionId'])){
				
				$this->optionId = $vals['optionId'];
			}
			
			
			if (isset($vals['optionName'])){
				
				$this->optionName = $vals['optionName'];
			}
			
			
			if (isset($vals['customoption'])){
				
				$this->customoption = $vals['customoption'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryStandard';
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
			
			
			
			
			if ("brandId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->brandId); 
				
			}
			
			
			
			
			if ("brandCname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCname);
				
			}
			
			
			
			
			if ("attributeId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->attributeId); 
				
			}
			
			
			
			
			if ("attributeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeName);
				
			}
			
			
			
			
			if ("optionId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->optionId); 
				
			}
			
			
			
			
			if ("optionName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->optionName);
				
			}
			
			
			
			
			if ("customoption" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customoption);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
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
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandCname !== null) {
			
			$xfer += $output->writeFieldBegin('brandCname');
			$xfer += $output->writeString($this->brandCname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeId !== null) {
			
			$xfer += $output->writeFieldBegin('attributeId');
			$xfer += $output->writeI32($this->attributeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeName !== null) {
			
			$xfer += $output->writeFieldBegin('attributeName');
			$xfer += $output->writeString($this->attributeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionId !== null) {
			
			$xfer += $output->writeFieldBegin('optionId');
			$xfer += $output->writeI32($this->optionId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->optionName !== null) {
			
			$xfer += $output->writeFieldBegin('optionName');
			$xfer += $output->writeString($this->optionName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customoption !== null) {
			
			$xfer += $output->writeFieldBegin('customoption');
			$xfer += $output->writeString($this->customoption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>