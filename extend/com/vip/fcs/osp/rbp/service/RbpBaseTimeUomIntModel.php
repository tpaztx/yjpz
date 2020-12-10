<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseTimeUomIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $timeUomName = null;
	public $paymentEnable = null;
	public $cronExpress = null;
	public $enableFlag = null;
	public $timeUomCode = null;
	public $complexEnable = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'timeUomName'
			),
			3 => array(
			'var' => 'paymentEnable'
			),
			4 => array(
			'var' => 'cronExpress'
			),
			5 => array(
			'var' => 'enableFlag'
			),
			6 => array(
			'var' => 'timeUomCode'
			),
			7 => array(
			'var' => 'complexEnable'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['timeUomName'])){
				
				$this->timeUomName = $vals['timeUomName'];
			}
			
			
			if (isset($vals['paymentEnable'])){
				
				$this->paymentEnable = $vals['paymentEnable'];
			}
			
			
			if (isset($vals['cronExpress'])){
				
				$this->cronExpress = $vals['cronExpress'];
			}
			
			
			if (isset($vals['enableFlag'])){
				
				$this->enableFlag = $vals['enableFlag'];
			}
			
			
			if (isset($vals['timeUomCode'])){
				
				$this->timeUomCode = $vals['timeUomCode'];
			}
			
			
			if (isset($vals['complexEnable'])){
				
				$this->complexEnable = $vals['complexEnable'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseTimeUomIntModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("timeUomName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeUomName);
				
			}
			
			
			
			
			if ("paymentEnable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentEnable);
				
			}
			
			
			
			
			if ("cronExpress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cronExpress);
				
			}
			
			
			
			
			if ("enableFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableFlag);
				
			}
			
			
			
			
			if ("timeUomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeUomCode);
				
			}
			
			
			
			
			if ("complexEnable" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->complexEnable);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeUomName !== null) {
			
			$xfer += $output->writeFieldBegin('timeUomName');
			$xfer += $output->writeString($this->timeUomName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentEnable !== null) {
			
			$xfer += $output->writeFieldBegin('paymentEnable');
			$xfer += $output->writeString($this->paymentEnable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cronExpress !== null) {
			
			$xfer += $output->writeFieldBegin('cronExpress');
			$xfer += $output->writeString($this->cronExpress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enableFlag');
			$xfer += $output->writeString($this->enableFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeUomCode !== null) {
			
			$xfer += $output->writeFieldBegin('timeUomCode');
			$xfer += $output->writeString($this->timeUomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->complexEnable !== null) {
			
			$xfer += $output->writeFieldBegin('complexEnable');
			$xfer += $output->writeString($this->complexEnable);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>