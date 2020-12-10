<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorContactModel {
	
	static $_TSPEC;
	public $contactId = null;
	public $vendorId = null;
	public $locationId = null;
	public $contactName = null;
	public $personTitle = null;
	public $department = null;
	public $phoneAreaCode = null;
	public $phoneNumber = null;
	public $phoneExtension = null;
	public $emailAddress = null;
	public $status = null;
	public $sourceContactId = null;
	public $requestId = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'contactId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'locationId'
			),
			4 => array(
			'var' => 'contactName'
			),
			5 => array(
			'var' => 'personTitle'
			),
			6 => array(
			'var' => 'department'
			),
			7 => array(
			'var' => 'phoneAreaCode'
			),
			8 => array(
			'var' => 'phoneNumber'
			),
			9 => array(
			'var' => 'phoneExtension'
			),
			10 => array(
			'var' => 'emailAddress'
			),
			11 => array(
			'var' => 'status'
			),
			12 => array(
			'var' => 'sourceContactId'
			),
			13 => array(
			'var' => 'requestId'
			),
			14 => array(
			'var' => 'createTime'
			),
			15 => array(
			'var' => 'createdBy'
			),
			16 => array(
			'var' => 'updateTime'
			),
			17 => array(
			'var' => 'updatedBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['contactId'])){
				
				$this->contactId = $vals['contactId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['locationId'])){
				
				$this->locationId = $vals['locationId'];
			}
			
			
			if (isset($vals['contactName'])){
				
				$this->contactName = $vals['contactName'];
			}
			
			
			if (isset($vals['personTitle'])){
				
				$this->personTitle = $vals['personTitle'];
			}
			
			
			if (isset($vals['department'])){
				
				$this->department = $vals['department'];
			}
			
			
			if (isset($vals['phoneAreaCode'])){
				
				$this->phoneAreaCode = $vals['phoneAreaCode'];
			}
			
			
			if (isset($vals['phoneNumber'])){
				
				$this->phoneNumber = $vals['phoneNumber'];
			}
			
			
			if (isset($vals['phoneExtension'])){
				
				$this->phoneExtension = $vals['phoneExtension'];
			}
			
			
			if (isset($vals['emailAddress'])){
				
				$this->emailAddress = $vals['emailAddress'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['sourceContactId'])){
				
				$this->sourceContactId = $vals['sourceContactId'];
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
		
		return 'ApVendorContactModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("contactId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->contactId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("locationId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->locationId);
				
			}
			
			
			
			
			if ("contactName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactName);
				
			}
			
			
			
			
			if ("personTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->personTitle);
				
			}
			
			
			
			
			if ("department" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->department);
				
			}
			
			
			
			
			if ("phoneAreaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneAreaCode);
				
			}
			
			
			
			
			if ("phoneNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneNumber);
				
			}
			
			
			
			
			if ("phoneExtension" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phoneExtension);
				
			}
			
			
			
			
			if ("emailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->emailAddress);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("sourceContactId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceContactId);
				
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
		
		if($this->contactId !== null) {
			
			$xfer += $output->writeFieldBegin('contactId');
			$xfer += $output->writeI64($this->contactId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->locationId !== null) {
			
			$xfer += $output->writeFieldBegin('locationId');
			$xfer += $output->writeString($this->locationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->contactName !== null) {
			
			$xfer += $output->writeFieldBegin('contactName');
			$xfer += $output->writeString($this->contactName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->personTitle !== null) {
			
			$xfer += $output->writeFieldBegin('personTitle');
			$xfer += $output->writeString($this->personTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->department !== null) {
			
			$xfer += $output->writeFieldBegin('department');
			$xfer += $output->writeString($this->department);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phoneAreaCode !== null) {
			
			$xfer += $output->writeFieldBegin('phoneAreaCode');
			$xfer += $output->writeString($this->phoneAreaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phoneNumber !== null) {
			
			$xfer += $output->writeFieldBegin('phoneNumber');
			$xfer += $output->writeString($this->phoneNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phoneExtension !== null) {
			
			$xfer += $output->writeFieldBegin('phoneExtension');
			$xfer += $output->writeString($this->phoneExtension);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->emailAddress !== null) {
			
			$xfer += $output->writeFieldBegin('emailAddress');
			$xfer += $output->writeString($this->emailAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sourceContactId !== null) {
			
			$xfer += $output->writeFieldBegin('sourceContactId');
			$xfer += $output->writeString($this->sourceContactId);
			
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