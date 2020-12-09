<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

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
	public $propsMap = null;
	public $weight = null;
	public $viewarea = null;
	public $status = null;
	public $sort = null;
	
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
			'var' => 'propsMap'
			),
			12 => array(
			'var' => 'weight'
			),
			13 => array(
			'var' => 'viewarea'
			),
			14 => array(
			'var' => 'status'
			),
			15 => array(
			'var' => 'sort'
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
			
			
			if (isset($vals['propsMap'])){
				
				$this->propsMap = $vals['propsMap'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['viewarea'])){
				
				$this->viewarea = $vals['viewarea'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
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
				
				$names = \com\vip\osp\category\api\comm\TagType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->tagType = $k;
						break;
					}
					
				}
				
				
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
			
			
			
			
			if ("propsMap" == $schemeField){
				
				$needSkip = false;
				
				$this->propsMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key1 = '';
						$input->readString($key1);
						
						$val1 = '';
						$input->readString($val1);
						
						$this->propsMap[$key1] = $val1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->weight); 
				
			}
			
			
			
			
			if ("viewarea" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->viewarea); 
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
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
		
		$em = new \com\vip\osp\category\api\comm\TagType; 
		$output->writeString($em::$__names[$this->tagType]);  
		
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
		
		
		if($this->propsMap !== null) {
			
			$xfer += $output->writeFieldBegin('propsMap');
			
			if (!is_array($this->propsMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->propsMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeI32($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->viewarea !== null) {
			
			$xfer += $output->writeFieldBegin('viewarea');
			$xfer += $output->writeI32($this->viewarea);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>