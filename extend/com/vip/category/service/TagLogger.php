<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class TagLogger {
	
	static $_TSPEC;
	public $tagGroupSn = null;
	public $tagSn = null;
	public $operator = null;
	public $operateTime = null;
	public $operateType = null;
	public $desc = null;
	
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
			'var' => 'operator'
			),
			4 => array(
			'var' => 'operateTime'
			),
			5 => array(
			'var' => 'operateType'
			),
			6 => array(
			'var' => 'desc'
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
			
			
			if (isset($vals['operator'])){
				
				$this->operator = $vals['operator'];
			}
			
			
			if (isset($vals['operateTime'])){
				
				$this->operateTime = $vals['operateTime'];
			}
			
			
			if (isset($vals['operateType'])){
				
				$this->operateType = $vals['operateType'];
			}
			
			
			if (isset($vals['desc'])){
				
				$this->desc = $vals['desc'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'TagLogger';
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
			
			
			
			
			if ("operator" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operator);
				
			}
			
			
			
			
			if ("operateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->operateTime); 
				
			}
			
			
			
			
			if ("operateType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\category\service\UpdateType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->operateType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->desc);
				
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
		
		
		if($this->operator !== null) {
			
			$xfer += $output->writeFieldBegin('operator');
			$xfer += $output->writeString($this->operator);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateTime !== null) {
			
			$xfer += $output->writeFieldBegin('operateTime');
			$xfer += $output->writeI64($this->operateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operateType !== null) {
			
			$xfer += $output->writeFieldBegin('operateType');
			
			$em = new \com\vip\category\service\UpdateType; 
			$output->writeString($em::$__names[$this->operateType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->desc !== null) {
			
			$xfer += $output->writeFieldBegin('desc');
			$xfer += $output->writeString($this->desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>