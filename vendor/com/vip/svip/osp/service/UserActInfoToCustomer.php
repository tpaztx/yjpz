<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\svip\osp\service;

class UserActInfoToCustomer {
	
	static $_TSPEC;
	public $orderStatus = null;
	public $actName = null;
	public $orderSn = null;
	public $actCode = null;
	public $subscribeTime = null;
	public $orderTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'orderStatus'
			),
			2 => array(
			'var' => 'actName'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'actCode'
			),
			5 => array(
			'var' => 'subscribeTime'
			),
			6 => array(
			'var' => 'orderTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['actName'])){
				
				$this->actName = $vals['actName'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['actCode'])){
				
				$this->actCode = $vals['actCode'];
			}
			
			
			if (isset($vals['subscribeTime'])){
				
				$this->subscribeTime = $vals['subscribeTime'];
			}
			
			
			if (isset($vals['orderTime'])){
				
				$this->orderTime = $vals['orderTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UserActInfoToCustomer';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("actName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actName);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("actCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actCode);
				
			}
			
			
			
			
			if ("subscribeTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->subscribeTime);
				
			}
			
			
			
			
			if ("orderTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderTime);
				
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
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actName !== null) {
			
			$xfer += $output->writeFieldBegin('actName');
			$xfer += $output->writeString($this->actName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actCode !== null) {
			
			$xfer += $output->writeFieldBegin('actCode');
			$xfer += $output->writeString($this->actCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->subscribeTime !== null) {
			
			$xfer += $output->writeFieldBegin('subscribeTime');
			$xfer += $output->writeI64($this->subscribeTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderTime');
			$xfer += $output->writeI64($this->orderTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>