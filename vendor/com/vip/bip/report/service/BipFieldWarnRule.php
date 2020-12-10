<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\bip\report\service;

class BipFieldWarnRule {
	
	static $_TSPEC;
	public $type = null;
	public $include = null;
	public $op = null;
	public $value1 = null;
	public $value2 = null;
	public $indicator1 = null;
	public $indicator2 = null;
	public $offsetOp1 = null;
	public $offsetOp2 = null;
	public $offsetVal1 = null;
	public $offsetVal2 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'include'
			),
			3 => array(
			'var' => 'op'
			),
			4 => array(
			'var' => 'value1'
			),
			5 => array(
			'var' => 'value2'
			),
			6 => array(
			'var' => 'indicator1'
			),
			7 => array(
			'var' => 'indicator2'
			),
			8 => array(
			'var' => 'offsetOp1'
			),
			9 => array(
			'var' => 'offsetOp2'
			),
			10 => array(
			'var' => 'offsetVal1'
			),
			11 => array(
			'var' => 'offsetVal2'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['include'])){
				
				$this->include = $vals['include'];
			}
			
			
			if (isset($vals['op'])){
				
				$this->op = $vals['op'];
			}
			
			
			if (isset($vals['value1'])){
				
				$this->value1 = $vals['value1'];
			}
			
			
			if (isset($vals['value2'])){
				
				$this->value2 = $vals['value2'];
			}
			
			
			if (isset($vals['indicator1'])){
				
				$this->indicator1 = $vals['indicator1'];
			}
			
			
			if (isset($vals['indicator2'])){
				
				$this->indicator2 = $vals['indicator2'];
			}
			
			
			if (isset($vals['offsetOp1'])){
				
				$this->offsetOp1 = $vals['offsetOp1'];
			}
			
			
			if (isset($vals['offsetOp2'])){
				
				$this->offsetOp2 = $vals['offsetOp2'];
			}
			
			
			if (isset($vals['offsetVal1'])){
				
				$this->offsetVal1 = $vals['offsetVal1'];
			}
			
			
			if (isset($vals['offsetVal2'])){
				
				$this->offsetVal2 = $vals['offsetVal2'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BipFieldWarnRule';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("include" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->include);
				
			}
			
			
			
			
			if ("op" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->op);
				
			}
			
			
			
			
			if ("value1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value1);
				
			}
			
			
			
			
			if ("value2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value2);
				
			}
			
			
			
			
			if ("indicator1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->indicator1);
				
			}
			
			
			
			
			if ("indicator2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->indicator2);
				
			}
			
			
			
			
			if ("offsetOp1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offsetOp1);
				
			}
			
			
			
			
			if ("offsetOp2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offsetOp2);
				
			}
			
			
			
			
			if ("offsetVal1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offsetVal1);
				
			}
			
			
			
			
			if ("offsetVal2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offsetVal2);
				
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
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->include !== null) {
			
			$xfer += $output->writeFieldBegin('include');
			$xfer += $output->writeString($this->include);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->op !== null) {
			
			$xfer += $output->writeFieldBegin('op');
			$xfer += $output->writeString($this->op);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->value1 !== null) {
			
			$xfer += $output->writeFieldBegin('value1');
			$xfer += $output->writeString($this->value1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->value2 !== null) {
			
			$xfer += $output->writeFieldBegin('value2');
			$xfer += $output->writeString($this->value2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->indicator1 !== null) {
			
			$xfer += $output->writeFieldBegin('indicator1');
			$xfer += $output->writeString($this->indicator1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->indicator2 !== null) {
			
			$xfer += $output->writeFieldBegin('indicator2');
			$xfer += $output->writeString($this->indicator2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offsetOp1 !== null) {
			
			$xfer += $output->writeFieldBegin('offsetOp1');
			$xfer += $output->writeString($this->offsetOp1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offsetOp2 !== null) {
			
			$xfer += $output->writeFieldBegin('offsetOp2');
			$xfer += $output->writeString($this->offsetOp2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offsetVal1 !== null) {
			
			$xfer += $output->writeFieldBegin('offsetVal1');
			$xfer += $output->writeString($this->offsetVal1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offsetVal2 !== null) {
			
			$xfer += $output->writeFieldBegin('offsetVal2');
			$xfer += $output->writeString($this->offsetVal2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>