<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorBankModel {
	
	static $_TSPEC;
	public $vendorBrankId = null;
	public $vendorId = null;
	public $locationId = null;
	public $bankType = null;
	public $bankName = null;
	public $bankShortName = null;
	public $bankAccount = null;
	public $status = null;
	public $requestId = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorBrankId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'locationId'
			),
			4 => array(
			'var' => 'bankType'
			),
			5 => array(
			'var' => 'bankName'
			),
			6 => array(
			'var' => 'bankShortName'
			),
			7 => array(
			'var' => 'bankAccount'
			),
			8 => array(
			'var' => 'status'
			),
			9 => array(
			'var' => 'requestId'
			),
			10 => array(
			'var' => 'createTime'
			),
			11 => array(
			'var' => 'createdBy'
			),
			12 => array(
			'var' => 'updateTime'
			),
			13 => array(
			'var' => 'updatedBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorBrankId'])){
				
				$this->vendorBrankId = $vals['vendorBrankId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['locationId'])){
				
				$this->locationId = $vals['locationId'];
			}
			
			
			if (isset($vals['bankType'])){
				
				$this->bankType = $vals['bankType'];
			}
			
			
			if (isset($vals['bankName'])){
				
				$this->bankName = $vals['bankName'];
			}
			
			
			if (isset($vals['bankShortName'])){
				
				$this->bankShortName = $vals['bankShortName'];
			}
			
			
			if (isset($vals['bankAccount'])){
				
				$this->bankAccount = $vals['bankAccount'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['updatedBy'])){
				
				$this->updatedBy = $vals['updatedBy'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApVendorBankModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorBrankId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorBrankId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("locationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->locationId); 
				
			}
			
			
			
			
			if ("bankType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankType);
				
			}
			
			
			
			
			if ("bankName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankName);
				
			}
			
			
			
			
			if ("bankShortName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankShortName);
				
			}
			
			
			
			
			if ("bankAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankAccount);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestId); 
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createdBy);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updatedBy);
				
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
		
		if($this->vendorBrankId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBrankId');
			$xfer += $output->writeI64($this->vendorBrankId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->locationId !== null) {
			
			$xfer += $output->writeFieldBegin('locationId');
			$xfer += $output->writeI64($this->locationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankType !== null) {
			
			$xfer += $output->writeFieldBegin('bankType');
			$xfer += $output->writeString($this->bankType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankName !== null) {
			
			$xfer += $output->writeFieldBegin('bankName');
			$xfer += $output->writeString($this->bankName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankShortName !== null) {
			
			$xfer += $output->writeFieldBegin('bankShortName');
			$xfer += $output->writeString($this->bankShortName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankAccount !== null) {
			
			$xfer += $output->writeFieldBegin('bankAccount');
			$xfer += $output->writeString($this->bankAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeI64($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeString($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeString($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>