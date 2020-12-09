<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class CategoriesQueryRequest {
	
	static $_TSPEC;
	public $categoryId = null;
	public $categoryName = null;
	public $categoryType = null;
	public $categoryStatus = null;
	public $isPublishCategory = null;
	public $pageModel = null;
	
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
			'var' => 'categoryType'
			),
			4 => array(
			'var' => 'categoryStatus'
			),
			5 => array(
			'var' => 'isPublishCategory'
			),
			6 => array(
			'var' => 'pageModel'
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
			
			
			if (isset($vals['categoryType'])){
				
				$this->categoryType = $vals['categoryType'];
			}
			
			
			if (isset($vals['categoryStatus'])){
				
				$this->categoryStatus = $vals['categoryStatus'];
			}
			
			
			if (isset($vals['isPublishCategory'])){
				
				$this->isPublishCategory = $vals['isPublishCategory'];
			}
			
			
			if (isset($vals['pageModel'])){
				
				$this->pageModel = $vals['pageModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoriesQueryRequest';
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
			
			
			
			
			if ("categoryType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->categoryType); 
				
			}
			
			
			
			
			if ("categoryStatus" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->categoryStatus); 
				
			}
			
			
			
			
			if ("isPublishCategory" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPublishCategory); 
				
			}
			
			
			
			
			if ("pageModel" == $schemeField){
				
				$needSkip = false;
				
				$this->pageModel = new \com\vip\category\service\PageModel();
				$this->pageModel->read($input);
				
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
		
		
		if($this->categoryType !== null) {
			
			$xfer += $output->writeFieldBegin('categoryType');
			$xfer += $output->writeByte($this->categoryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryStatus !== null) {
			
			$xfer += $output->writeFieldBegin('categoryStatus');
			$xfer += $output->writeByte($this->categoryStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPublishCategory !== null) {
			
			$xfer += $output->writeFieldBegin('isPublishCategory');
			$xfer += $output->writeByte($this->isPublishCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pageModel !== null) {
			
			$xfer += $output->writeFieldBegin('pageModel');
			
			if (!is_object($this->pageModel)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pageModel->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>