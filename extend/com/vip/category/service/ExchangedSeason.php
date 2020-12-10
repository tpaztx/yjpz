<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\category\service;

class ExchangedSeason {
	
	static $_TSPEC;
	public $reasonId = null;
	public $reasonDesc = null;
	public $reasonType = null;
	public $reasonTip = null;
	public $status = null;
	public $isDefault = null;
	public $isUploadImg = null;
	public $errorCodeMessage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonId'
			),
			2 => array(
			'var' => 'reasonDesc'
			),
			3 => array(
			'var' => 'reasonType'
			),
			4 => array(
			'var' => 'reasonTip'
			),
			5 => array(
			'var' => 'status'
			),
			6 => array(
			'var' => 'isDefault'
			),
			7 => array(
			'var' => 'isUploadImg'
			),
			8 => array(
			'var' => 'errorCodeMessage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonId'])){
				
				$this->reasonId = $vals['reasonId'];
			}
			
			
			if (isset($vals['reasonDesc'])){
				
				$this->reasonDesc = $vals['reasonDesc'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['reasonTip'])){
				
				$this->reasonTip = $vals['reasonTip'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['isDefault'])){
				
				$this->isDefault = $vals['isDefault'];
			}
			
			
			if (isset($vals['isUploadImg'])){
				
				$this->isUploadImg = $vals['isUploadImg'];
			}
			
			
			if (isset($vals['errorCodeMessage'])){
				
				$this->errorCodeMessage = $vals['errorCodeMessage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ExchangedSeason';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("reasonId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->reasonId); 
				
			}
			
			
			
			
			if ("reasonDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonDesc);
				
			}
			
			
			
			
			if ("reasonType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->reasonType); 
				
			}
			
			
			
			
			if ("reasonTip" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reasonTip);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
			}
			
			
			
			
			if ("isDefault" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDefault); 
				
			}
			
			
			
			
			if ("isUploadImg" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isUploadImg); 
				
			}
			
			
			
			
			if ("errorCodeMessage" == $schemeField){
				
				$needSkip = false;
				
				$this->errorCodeMessage = new \com\vip\category\service\ErrorCodeMessage();
				$this->errorCodeMessage->read($input);
				
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
		
		if($this->reasonId !== null) {
			
			$xfer += $output->writeFieldBegin('reasonId');
			$xfer += $output->writeI64($this->reasonId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonDesc !== null) {
			
			$xfer += $output->writeFieldBegin('reasonDesc');
			$xfer += $output->writeString($this->reasonDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeI32($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonTip !== null) {
			
			$xfer += $output->writeFieldBegin('reasonTip');
			$xfer += $output->writeString($this->reasonTip);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDefault !== null) {
			
			$xfer += $output->writeFieldBegin('isDefault');
			$xfer += $output->writeI32($this->isDefault);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isUploadImg !== null) {
			
			$xfer += $output->writeFieldBegin('isUploadImg');
			$xfer += $output->writeI32($this->isUploadImg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCodeMessage !== null) {
			
			$xfer += $output->writeFieldBegin('errorCodeMessage');
			
			if (!is_object($this->errorCodeMessage)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->errorCodeMessage->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>