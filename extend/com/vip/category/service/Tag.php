<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class Tag {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $tagSn = null;
	public $name = null;
	public $dataType = null;
	public $cornerFlag = null;
	public $viewarea = null;
	public $sort = null;
	public $status = null;
	public $tagPropsList = null;
	public $tagCategoryList = null;
	public $description = null;
	public $definition = null;
	public $startTime = null;
	public $endTime = null;
	public $isProductView = null;
	public $isVendorUsed = null;
	public $isPdcUsed = null;
	public $isTipsPrior = null;
	public $isSearchPrior = null;
	public $usedRangeList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'tagSn'
			),
			3 => array(
			'var' => 'name'
			),
			4 => array(
			'var' => 'dataType'
			),
			5 => array(
			'var' => 'cornerFlag'
			),
			6 => array(
			'var' => 'viewarea'
			),
			7 => array(
			'var' => 'sort'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'tagPropsList'
			),
			10 => array(
			'var' => 'tagCategoryList'
			),
			11 => array(
			'var' => 'description'
			),
			12 => array(
			'var' => 'definition'
			),
			13 => array(
			'var' => 'startTime'
			),
			14 => array(
			'var' => 'endTime'
			),
			15 => array(
			'var' => 'isProductView'
			),
			16 => array(
			'var' => 'isVendorUsed'
			),
			17 => array(
			'var' => 'isPdcUsed'
			),
			18 => array(
			'var' => 'isTipsPrior'
			),
			19 => array(
			'var' => 'isSearchPrior'
			),
			20 => array(
			'var' => 'usedRangeList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
			}
			
			
			if (isset($vals['cornerFlag'])){
				
				$this->cornerFlag = $vals['cornerFlag'];
			}
			
			
			if (isset($vals['viewarea'])){
				
				$this->viewarea = $vals['viewarea'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['tagPropsList'])){
				
				$this->tagPropsList = $vals['tagPropsList'];
			}
			
			
			if (isset($vals['tagCategoryList'])){
				
				$this->tagCategoryList = $vals['tagCategoryList'];
			}
			
			
			if (isset($vals['description'])){
				
				$this->description = $vals['description'];
			}
			
			
			if (isset($vals['definition'])){
				
				$this->definition = $vals['definition'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['isProductView'])){
				
				$this->isProductView = $vals['isProductView'];
			}
			
			
			if (isset($vals['isVendorUsed'])){
				
				$this->isVendorUsed = $vals['isVendorUsed'];
			}
			
			
			if (isset($vals['isPdcUsed'])){
				
				$this->isPdcUsed = $vals['isPdcUsed'];
			}
			
			
			if (isset($vals['isTipsPrior'])){
				
				$this->isTipsPrior = $vals['isTipsPrior'];
			}
			
			
			if (isset($vals['isSearchPrior'])){
				
				$this->isSearchPrior = $vals['isSearchPrior'];
			}
			
			
			if (isset($vals['usedRangeList'])){
				
				$this->usedRangeList = $vals['usedRangeList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Tag';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagGroupSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagGroupSn); 
				
			}
			
			
			
			
			if ("tagSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagSn); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("dataType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\TagType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->dataType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("cornerFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cornerFlag); 
				
			}
			
			
			
			
			if ("viewarea" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->viewarea); 
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sort); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\Status::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->status = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("tagPropsList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagPropsList = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\category\service\TagProps();
						$elem0->read($input);
						
						$this->tagPropsList[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tagCategoryList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagCategoryList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\service\TagCategoryInfo();
						$elem1->read($input);
						
						$this->tagCategoryList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("description" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->description);
				
			}
			
			
			
			
			if ("definition" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->definition);
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("isProductView" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isProductView); 
				
			}
			
			
			
			
			if ("isVendorUsed" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isVendorUsed); 
				
			}
			
			
			
			
			if ("isPdcUsed" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isPdcUsed); 
				
			}
			
			
			
			
			if ("isTipsPrior" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isTipsPrior); 
				
			}
			
			
			
			
			if ("isSearchPrior" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isSearchPrior); 
				
			}
			
			
			
			
			if ("usedRangeList" == $schemeField){
				
				$needSkip = false;
				
				$this->usedRangeList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\category\service\TagUsedRange();
						$elem2->read($input);
						
						$this->usedRangeList[$_size2++] = $elem2;
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
		
		if($this->tagGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupSn');
			$xfer += $output->writeI32($this->tagGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagSn !== null) {
			
			$xfer += $output->writeFieldBegin('tagSn');
			$xfer += $output->writeI32($this->tagSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dataType !== null) {
			
			$xfer += $output->writeFieldBegin('dataType');
			
			$em = new \com\vip\category\service\TagType; 
			$output->writeString($em::$__names[$this->dataType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cornerFlag !== null) {
			
			$xfer += $output->writeFieldBegin('cornerFlag');
			$xfer += $output->writeByte($this->cornerFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->viewarea !== null) {
			
			$xfer += $output->writeFieldBegin('viewarea');
			$xfer += $output->writeI32($this->viewarea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI64($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \com\vip\category\service\Status; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagPropsList !== null) {
			
			$xfer += $output->writeFieldBegin('tagPropsList');
			
			if (!is_array($this->tagPropsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagPropsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagCategoryList !== null) {
			
			$xfer += $output->writeFieldBegin('tagCategoryList');
			
			if (!is_array($this->tagCategoryList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagCategoryList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->description !== null) {
			
			$xfer += $output->writeFieldBegin('description');
			$xfer += $output->writeString($this->description);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->definition !== null) {
			
			$xfer += $output->writeFieldBegin('definition');
			$xfer += $output->writeString($this->definition);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startTime !== null) {
			
			$xfer += $output->writeFieldBegin('startTime');
			$xfer += $output->writeI64($this->startTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endTime !== null) {
			
			$xfer += $output->writeFieldBegin('endTime');
			$xfer += $output->writeI64($this->endTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isProductView !== null) {
			
			$xfer += $output->writeFieldBegin('isProductView');
			$xfer += $output->writeByte($this->isProductView);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isVendorUsed !== null) {
			
			$xfer += $output->writeFieldBegin('isVendorUsed');
			$xfer += $output->writeByte($this->isVendorUsed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isPdcUsed !== null) {
			
			$xfer += $output->writeFieldBegin('isPdcUsed');
			$xfer += $output->writeByte($this->isPdcUsed);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isTipsPrior !== null) {
			
			$xfer += $output->writeFieldBegin('isTipsPrior');
			$xfer += $output->writeByte($this->isTipsPrior);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSearchPrior !== null) {
			
			$xfer += $output->writeFieldBegin('isSearchPrior');
			$xfer += $output->writeByte($this->isSearchPrior);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usedRangeList !== null) {
			
			$xfer += $output->writeFieldBegin('usedRangeList');
			
			if (!is_array($this->usedRangeList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->usedRangeList as $iter0){
				
				
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