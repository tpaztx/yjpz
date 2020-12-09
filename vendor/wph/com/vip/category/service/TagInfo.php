<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagInfo {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $tagGroupName = null;
	public $tagSn = null;
	public $tagName = null;
	public $tagType = null;
	public $cornerFlag = null;
	public $timeType = null;
	public $relativeTime = null;
	public $startTime = null;
	public $endTime = null;
	public $weight = null;
	public $identifier = null;
	public $definition = null;
	public $desc = null;
	public $operateGroupSn = null;
	public $mutex = null;
	public $specifiedCate = null;
	public $tagProps = null;
	public $isProductView = null;
	public $isVendorUsed = null;
	public $isPdcUsed = null;
	public $isTipsPrior = null;
	public $isSearchPrior = null;
	public $tagCategoryList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'tagGroupName'
			),
			3 => array(
			'var' => 'tagSn'
			),
			4 => array(
			'var' => 'tagName'
			),
			5 => array(
			'var' => 'tagType'
			),
			6 => array(
			'var' => 'cornerFlag'
			),
			7 => array(
			'var' => 'timeType'
			),
			8 => array(
			'var' => 'relativeTime'
			),
			9 => array(
			'var' => 'startTime'
			),
			10 => array(
			'var' => 'endTime'
			),
			11 => array(
			'var' => 'weight'
			),
			12 => array(
			'var' => 'identifier'
			),
			13 => array(
			'var' => 'definition'
			),
			14 => array(
			'var' => 'desc'
			),
			15 => array(
			'var' => 'operateGroupSn'
			),
			16 => array(
			'var' => 'mutex'
			),
			17 => array(
			'var' => 'specifiedCate'
			),
			18 => array(
			'var' => 'tagProps'
			),
			19 => array(
			'var' => 'isProductView'
			),
			20 => array(
			'var' => 'isVendorUsed'
			),
			21 => array(
			'var' => 'isPdcUsed'
			),
			22 => array(
			'var' => 'isTipsPrior'
			),
			23 => array(
			'var' => 'isSearchPrior'
			),
			24 => array(
			'var' => 'tagCategoryList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['tagGroupName'])){
				
				$this->tagGroupName = $vals['tagGroupName'];
			}
			
			
			if (isset($vals['tagSn'])){
				
				$this->tagSn = $vals['tagSn'];
			}
			
			
			if (isset($vals['tagName'])){
				
				$this->tagName = $vals['tagName'];
			}
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['cornerFlag'])){
				
				$this->cornerFlag = $vals['cornerFlag'];
			}
			
			
			if (isset($vals['timeType'])){
				
				$this->timeType = $vals['timeType'];
			}
			
			
			if (isset($vals['relativeTime'])){
				
				$this->relativeTime = $vals['relativeTime'];
			}
			
			
			if (isset($vals['startTime'])){
				
				$this->startTime = $vals['startTime'];
			}
			
			
			if (isset($vals['endTime'])){
				
				$this->endTime = $vals['endTime'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
			if (isset($vals['definition'])){
				
				$this->definition = $vals['definition'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['operateGroupSn'])){
				
				$this->operateGroupSn = $vals['operateGroupSn'];
			}
			
			
			if (isset($vals['mutex'])){
				
				$this->mutex = $vals['mutex'];
			}
			
			
			if (isset($vals['specifiedCate'])){
				
				$this->specifiedCate = $vals['specifiedCate'];
			}
			
			
			if (isset($vals['tagProps'])){
				
				$this->tagProps = $vals['tagProps'];
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
			
			
			if (isset($vals['tagCategoryList'])){
				
				$this->tagCategoryList = $vals['tagCategoryList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagInfo';
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
			
			
			
			
			if ("tagGroupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagGroupName);
				
			}
			
			
			
			
			if ("tagSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagSn); 
				
			}
			
			
			
			
			if ("tagName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagName);
				
			}
			
			
			
			
			if ("tagType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->tagType); 
				
			}
			
			
			
			
			if ("cornerFlag" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->cornerFlag); 
				
			}
			
			
			
			
			if ("timeType" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->timeType); 
				
			}
			
			
			
			
			if ("relativeTime" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->relativeTime); 
				
			}
			
			
			
			
			if ("startTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startTime); 
				
			}
			
			
			
			
			if ("endTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endTime); 
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight); 
				
			}
			
			
			
			
			if ("identifier" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->identifier); 
				
			}
			
			
			
			
			if ("definition" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->definition);
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("operateGroupSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateGroupSn); 
				
			}
			
			
			
			
			if ("mutex" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->mutex); 
				
			}
			
			
			
			
			if ("specifiedCate" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specifiedCate); 
				
			}
			
			
			
			
			if ("tagProps" == $schemeField){
				
				$needSkip = false;
				
				$this->tagProps = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->tagProps[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		$xfer += $output->writeFieldBegin('tagGroupSn');
		$xfer += $output->writeI32($this->tagGroupSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagGroupName');
		$xfer += $output->writeString($this->tagGroupName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagSn');
		$xfer += $output->writeI32($this->tagSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagName');
		$xfer += $output->writeString($this->tagName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tagType');
		$xfer += $output->writeByte($this->tagType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cornerFlag');
		$xfer += $output->writeByte($this->cornerFlag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('timeType');
		$xfer += $output->writeByte($this->timeType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->relativeTime !== null) {
			
			$xfer += $output->writeFieldBegin('relativeTime');
			$xfer += $output->writeI32($this->relativeTime);
			
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
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('identifier');
		$xfer += $output->writeByte($this->identifier);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->definition !== null) {
			
			$xfer += $output->writeFieldBegin('definition');
			$xfer += $output->writeString($this->definition);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('operateGroupSn');
			$xfer += $output->writeI32($this->operateGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mutex !== null) {
			
			$xfer += $output->writeFieldBegin('mutex');
			$xfer += $output->writeByte($this->mutex);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specifiedCate !== null) {
			
			$xfer += $output->writeFieldBegin('specifiedCate');
			$xfer += $output->writeByte($this->specifiedCate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagProps !== null) {
			
			$xfer += $output->writeFieldBegin('tagProps');
			
			if (!is_array($this->tagProps)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->tagProps as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>