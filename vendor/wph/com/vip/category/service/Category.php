<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class Category {
	
	static $_TSPEC;
	public $categoryId = null;
	public $name = null;
	public $englishname = null;
	public $description = null;
	public $type = null;
	public $keywords = null;
	public $hierarchyId = null;
	public $lastUpdateTime = null;
	public $majorParentCategoryid = null;
	public $foreignname = null;
	public $maxsalenum = null;
	public $minisalenum = null;
	public $showType = null;
	public $timeLineId = null;
	public $status = null;
	public $categoryPaths = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'englishname'
			),
			4 => array(
			'var' => 'description'
			),
			5 => array(
			'var' => 'type'
			),
			6 => array(
			'var' => 'keywords'
			),
			7 => array(
			'var' => 'hierarchyId'
			),
			8 => array(
			'var' => 'lastUpdateTime'
			),
			9 => array(
			'var' => 'majorParentCategoryid'
			),
			10 => array(
			'var' => 'foreignname'
			),
			11 => array(
			'var' => 'maxsalenum'
			),
			12 => array(
			'var' => 'minisalenum'
			),
			13 => array(
			'var' => 'showType'
			),
			14 => array(
			'var' => 'timeLineId'
			),
			15 => array(
			'var' => 'status'
			),
			16 => array(
			'var' => 'categoryPaths'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['englishname'])){
				
				$this->englishname = $vals['englishname'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['keywords'])){
				
				$this->keywords = $vals['keywords'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['lastUpdateTime'])){
				
				$this->lastUpdateTime = $vals['lastUpdateTime'];
			}
			
			
			if (isset($vals['majorParentCategoryid'])){
				
				$this->majorParentCategoryid = $vals['majorParentCategoryid'];
			}
			
			
			if (isset($vals['foreignname'])){
				
				$this->foreignname = $vals['foreignname'];
			}
			
			
			if (isset($vals['maxsalenum'])){
				
				$this->maxsalenum = $vals['maxsalenum'];
			}
			
			
			if (isset($vals['minisalenum'])){
				
				$this->minisalenum = $vals['minisalenum'];
			}
			
			
			if (isset($vals['showType'])){
				
				$this->showType = $vals['showType'];
			}
			
			
			if (isset($vals['timeLineId'])){
				
				$this->timeLineId = $vals['timeLineId'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['categoryPaths'])){
				
				$this->categoryPaths = $vals['categoryPaths'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Category';
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
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("englishname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->englishname);
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\CategoryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("keywords" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->keywords);
				
			}
			
			
			
			
			if ("hierarchyId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->hierarchyId); 
				
			}
			
			
			
			
			if ("lastUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateTime); 
				
			}
			
			
			
			
			if ("majorParentCategoryid" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->majorParentCategoryid); 
				
			}
			
			
			
			
			if ("foreignname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->foreignname);
				
			}
			
			
			
			
			if ("maxsalenum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->maxsalenum); 
				
			}
			
			
			
			
			if ("minisalenum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->minisalenum); 
				
			}
			
			
			
			
			if ("showType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->showType); 
				
			}
			
			
			
			
			if ("timeLineId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->timeLineId); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->status); 
				
			}
			
			
			
			
			if ("categoryPaths" == $schemeField){
				
				$needSkip = false;
				
				$this->categoryPaths = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\CategoryPath();
						$elem0->read($input);
						
						$this->categoryPaths[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->englishname !== null) {
			
			$xfer += $output->writeFieldBegin('englishname');
			$xfer += $output->writeString($this->englishname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('type');
		
		$em = new \com\vip\category\service\CategoryType; 
		$output->writeString($em::$__names[$this->type]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->keywords !== null) {
			
			$xfer += $output->writeFieldBegin('keywords');
			$xfer += $output->writeString($this->keywords);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lastUpdateTime');
		$xfer += $output->writeI64($this->lastUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->majorParentCategoryid !== null) {
			
			$xfer += $output->writeFieldBegin('majorParentCategoryid');
			$xfer += $output->writeI32($this->majorParentCategoryid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->foreignname !== null) {
			
			$xfer += $output->writeFieldBegin('foreignname');
			$xfer += $output->writeString($this->foreignname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->maxsalenum !== null) {
			
			$xfer += $output->writeFieldBegin('maxsalenum');
			$xfer += $output->writeI32($this->maxsalenum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->minisalenum !== null) {
			
			$xfer += $output->writeFieldBegin('minisalenum');
			$xfer += $output->writeI32($this->minisalenum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->showType !== null) {
			
			$xfer += $output->writeFieldBegin('showType');
			$xfer += $output->writeI32($this->showType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeLineId !== null) {
			
			$xfer += $output->writeFieldBegin('timeLineId');
			$xfer += $output->writeI32($this->timeLineId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeByte($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryPaths !== null) {
			
			$xfer += $output->writeFieldBegin('categoryPaths');
			
			if (!is_array($this->categoryPaths)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryPaths as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>