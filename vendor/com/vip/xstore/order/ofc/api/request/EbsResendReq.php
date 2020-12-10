<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class EbsResendReq {
	
	static $_TSPEC;
	public $innerScenarioCode = null;
	public $userId = null;
	public $orderSn = null;
	public $applyId = null;
	public $bizTime = null;
	public $resend = null;
	public $extData = null;
	public $resendId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'innerScenarioCode'
			),
			2 => array(
			'var' => 'userId'
			),
			3 => array(
			'var' => 'orderSn'
			),
			4 => array(
			'var' => 'applyId'
			),
			5 => array(
			'var' => 'bizTime'
			),
			6 => array(
			'var' => 'resend'
			),
			7 => array(
			'var' => 'extData'
			),
			8 => array(
			'var' => 'resendId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['innerScenarioCode'])){
				
				$this->innerScenarioCode = $vals['innerScenarioCode'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['applyId'])){
				
				$this->applyId = $vals['applyId'];
			}
			
			
			if (isset($vals['bizTime'])){
				
				$this->bizTime = $vals['bizTime'];
			}
			
			
			if (isset($vals['resend'])){
				
				$this->resend = $vals['resend'];
			}
			
			
			if (isset($vals['extData'])){
				
				$this->extData = $vals['extData'];
			}
			
			
			if (isset($vals['resendId'])){
				
				$this->resendId = $vals['resendId'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'EbsResendReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("innerScenarioCode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->innerScenarioCode); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("applyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyId); 
				
			}
			
			
			
			
			if ("bizTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->bizTime); 
				
			}
			
			
			
			
			if ("resend" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->resend); 
				
			}
			
			
			
			
			if ("extData" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extData);
				
			}
			
			
			
			
			if ("resendId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->resendId); 
				
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
		
		if($this->innerScenarioCode !== null) {
			
			$xfer += $output->writeFieldBegin('innerScenarioCode');
			$xfer += $output->writeI32($this->innerScenarioCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyId !== null) {
			
			$xfer += $output->writeFieldBegin('applyId');
			$xfer += $output->writeI64($this->applyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bizTime !== null) {
			
			$xfer += $output->writeFieldBegin('bizTime');
			$xfer += $output->writeI64($this->bizTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resend !== null) {
			
			$xfer += $output->writeFieldBegin('resend');
			$xfer += $output->writeI32($this->resend);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extData !== null) {
			
			$xfer += $output->writeFieldBegin('extData');
			$xfer += $output->writeString($this->extData);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resendId !== null) {
			
			$xfer += $output->writeFieldBegin('resendId');
			$xfer += $output->writeI64($this->resendId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>