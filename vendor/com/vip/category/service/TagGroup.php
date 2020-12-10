<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagGroup {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $name = null;
	public $dataType = null;
	public $timeType = null;
	public $relativeTime = null;
	public $startTime = null;
	public $endTime = null;
	public $status = null;
	public $identifier = null;
	public $tagGroupPropsList = null;
	public $operateGroupSn = null;
	public $operateGroupName = null;
	public $mutex = null;
	public $specifiedCate = null;
	public $desc = null;
	public $tagList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagGroupSn'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'dataType'
			),
			4 => array(
			'var' => 'timeType'
			),
			5 => array(
			'var' => 'relativeTime'
			),
			6 => array(
			'var' => 'startTime'
			),
			7 => array(
			'var' => 'endTime'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'identifier'
			),
			10 => array(
			'var' => 'tagGroupPropsList'
			),
			11 => array(
			'var' => 'operateGroupSn'
			),
			12 => array(
			'var' => 'operateGroupName'
			),
			13 => array(
			'var' => 'mutex'
			),
			14 => array(
			'var' => 'specifiedCate'
			),
			15 => array(
			'var' => 'desc'
			),
			16 => array(
			'var' => 'tagList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagGroupSn'])){
				
				$this->tagGroupSn = $vals['tagGroupSn'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['dataType'])){
				
				$this->dataType = $vals['dataType'];
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
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['identifier'])){
				
				$this->identifier = $vals['identifier'];
			}
			
			
			if (isset($vals['tagGroupPropsList'])){
				
				$this->tagGroupPropsList = $vals['tagGroupPropsList'];
			}
			
			
			if (isset($vals['operateGroupSn'])){
				
				$this->operateGroupSn = $vals['operateGroupSn'];
			}
			
			
			if (isset($vals['operateGroupName'])){
				
				$this->operateGroupName = $vals['operateGroupName'];
			}
			
			
			if (isset($vals['mutex'])){
				
				$this->mutex = $vals['mutex'];
			}
			
			
			if (isset($vals['specifiedCate'])){
				
				$this->specifiedCate = $vals['specifiedCate'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
			if (isset($vals['tagList'])){
				
				$this->tagList = $vals['tagList'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagGroup';
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
			
			
			
			
			if ("identifier" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->identifier); 
				
			}
			
			
			
			
			if ("tagGroupPropsList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagGroupPropsList = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\category\service\TagGroupProps();
						$elem1->read($input);
						
						$this->tagGroupPropsList[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("operateGroupSn" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operateGroupSn); 
				
			}
			
			
			
			
			if ("operateGroupName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operateGroupName);
				
			}
			
			
			
			
			if ("mutex" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->mutex); 
				
			}
			
			
			
			
			if ("specifiedCate" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->specifiedCate); 
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
			}
			
			
			
			
			if ("tagList" == $schemeField){
				
				$needSkip = false;
				
				$this->tagList = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\category\service\Tag();
						$elem2->read($input);
						
						$this->tagList[$_size2++] = $elem2;
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
		
		
		if($this->timeType !== null) {
			
			$xfer += $output->writeFieldBegin('timeType');
			$xfer += $output->writeByte($this->timeType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			
			$em = new \com\vip\category\service\Status; 
			$output->writeString($em::$__names[$this->status]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('identifier');
		$xfer += $output->writeByte($this->identifier);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tagGroupPropsList !== null) {
			
			$xfer += $output->writeFieldBegin('tagGroupPropsList');
			
			if (!is_array($this->tagGroupPropsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagGroupPropsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateGroupSn !== null) {
			
			$xfer += $output->writeFieldBegin('operateGroupSn');
			$xfer += $output->writeI32($this->operateGroupSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateGroupName !== null) {
			
			$xfer += $output->writeFieldBegin('operateGroupName');
			$xfer += $output->writeString($this->operateGroupName);
			
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
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagList !== null) {
			
			$xfer += $output->writeFieldBegin('tagList');
			
			if (!is_array($this->tagList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagList as $iter0){
				
				
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