<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class SizetableConfigs {
	
	static $_TSPEC;
	public $sizeAttrName = null;
	public $isRequired = null;
	public $thresholdStart = null;
	public $thresholdEnd = null;
	public $otherValue = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sizeAttrName'
			),
			2 => array(
			'var' => 'isRequired'
			),
			3 => array(
			'var' => 'thresholdStart'
			),
			4 => array(
			'var' => 'thresholdEnd'
			),
			5 => array(
			'var' => 'otherValue'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sizeAttrName'])){
				
				$this->sizeAttrName = $vals['sizeAttrName'];
			}
			
			
			if (isset($vals['isRequired'])){
				
				$this->isRequired = $vals['isRequired'];
			}
			
			
			if (isset($vals['thresholdStart'])){
				
				$this->thresholdStart = $vals['thresholdStart'];
			}
			
			
			if (isset($vals['thresholdEnd'])){
				
				$this->thresholdEnd = $vals['thresholdEnd'];
			}
			
			
			if (isset($vals['otherValue'])){
				
				$this->otherValue = $vals['otherValue'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SizetableConfigs';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sizeAttrName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sizeAttrName);
				
			}
			
			
			
			
			if ("isRequired" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->isRequired); 
				
			}
			
			
			
			
			if ("thresholdStart" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thresholdStart); 
				
			}
			
			
			
			
			if ("thresholdEnd" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->thresholdEnd); 
				
			}
			
			
			
			
			if ("otherValue" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->otherValue);
				
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
		
		if($this->sizeAttrName !== null) {
			
			$xfer += $output->writeFieldBegin('sizeAttrName');
			$xfer += $output->writeString($this->sizeAttrName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isRequired !== null) {
			
			$xfer += $output->writeFieldBegin('isRequired');
			$xfer += $output->writeByte($this->isRequired);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thresholdStart !== null) {
			
			$xfer += $output->writeFieldBegin('thresholdStart');
			$xfer += $output->writeI32($this->thresholdStart);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thresholdEnd !== null) {
			
			$xfer += $output->writeFieldBegin('thresholdEnd');
			$xfer += $output->writeI32($this->thresholdEnd);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->otherValue !== null) {
			
			$xfer += $output->writeFieldBegin('otherValue');
			$xfer += $output->writeString($this->otherValue);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>