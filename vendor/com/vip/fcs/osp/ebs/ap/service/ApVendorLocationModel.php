<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorLocationModel {
	
	static $_TSPEC;
	public $locationId = null;
	public $vendorId = null;
	public $locationCode = null;
	public $addressStyle = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $county = null;
	public $address = null;
	public $state = null;
	public $postalCode = null;
	public $billAddrPhone = null;
	public $billBankAccount = null;
	public $email = null;
	public $billProvince = null;
	public $billCity = null;
	public $billTaker = null;
	public $billRcvaddr = null;
	public $billTakerPhone = null;
	public $bankAccName = null;
	public $startDateActive = null;
	public $endDateActive = null;
	public $status = null;
	public $purchasingSiteFlag = null;
	public $paySiteFlag = null;
	public $requestId = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'locationId'
			),
			2 => array(
			'var' => 'vendorId'
			),
			3 => array(
			'var' => 'locationCode'
			),
			4 => array(
			'var' => 'addressStyle'
			),
			5 => array(
			'var' => 'country'
			),
			6 => array(
			'var' => 'province'
			),
			7 => array(
			'var' => 'city'
			),
			8 => array(
			'var' => 'county'
			),
			9 => array(
			'var' => 'address'
			),
			10 => array(
			'var' => 'state'
			),
			11 => array(
			'var' => 'postalCode'
			),
			12 => array(
			'var' => 'billAddrPhone'
			),
			13 => array(
			'var' => 'billBankAccount'
			),
			14 => array(
			'var' => 'email'
			),
			15 => array(
			'var' => 'billProvince'
			),
			16 => array(
			'var' => 'billCity'
			),
			17 => array(
			'var' => 'billTaker'
			),
			18 => array(
			'var' => 'billRcvaddr'
			),
			19 => array(
			'var' => 'billTakerPhone'
			),
			20 => array(
			'var' => 'bankAccName'
			),
			21 => array(
			'var' => 'startDateActive'
			),
			22 => array(
			'var' => 'endDateActive'
			),
			23 => array(
			'var' => 'status'
			),
			24 => array(
			'var' => 'purchasingSiteFlag'
			),
			25 => array(
			'var' => 'paySiteFlag'
			),
			26 => array(
			'var' => 'requestId'
			),
			27 => array(
			'var' => 'createTime'
			),
			28 => array(
			'var' => 'createdBy'
			),
			29 => array(
			'var' => 'updateTime'
			),
			30 => array(
			'var' => 'updatedBy'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['locationId'])){
				
				$this->locationId = $vals['locationId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['locationCode'])){
				
				$this->locationCode = $vals['locationCode'];
			}
			
			
			if (isset($vals['addressStyle'])){
				
				$this->addressStyle = $vals['addressStyle'];
			}
			
			
			if (isset($vals['country'])){
				
				$this->country = $vals['country'];
			}
			
			
			if (isset($vals['province'])){
				
				$this->province = $vals['province'];
			}
			
			
			if (isset($vals['city'])){
				
				$this->city = $vals['city'];
			}
			
			
			if (isset($vals['county'])){
				
				$this->county = $vals['county'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['state'])){
				
				$this->state = $vals['state'];
			}
			
			
			if (isset($vals['postalCode'])){
				
				$this->postalCode = $vals['postalCode'];
			}
			
			
			if (isset($vals['billAddrPhone'])){
				
				$this->billAddrPhone = $vals['billAddrPhone'];
			}
			
			
			if (isset($vals['billBankAccount'])){
				
				$this->billBankAccount = $vals['billBankAccount'];
			}
			
			
			if (isset($vals['email'])){
				
				$this->email = $vals['email'];
			}
			
			
			if (isset($vals['billProvince'])){
				
				$this->billProvince = $vals['billProvince'];
			}
			
			
			if (isset($vals['billCity'])){
				
				$this->billCity = $vals['billCity'];
			}
			
			
			if (isset($vals['billTaker'])){
				
				$this->billTaker = $vals['billTaker'];
			}
			
			
			if (isset($vals['billRcvaddr'])){
				
				$this->billRcvaddr = $vals['billRcvaddr'];
			}
			
			
			if (isset($vals['billTakerPhone'])){
				
				$this->billTakerPhone = $vals['billTakerPhone'];
			}
			
			
			if (isset($vals['bankAccName'])){
				
				$this->bankAccName = $vals['bankAccName'];
			}
			
			
			if (isset($vals['startDateActive'])){
				
				$this->startDateActive = $vals['startDateActive'];
			}
			
			
			if (isset($vals['endDateActive'])){
				
				$this->endDateActive = $vals['endDateActive'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['purchasingSiteFlag'])){
				
				$this->purchasingSiteFlag = $vals['purchasingSiteFlag'];
			}
			
			
			if (isset($vals['paySiteFlag'])){
				
				$this->paySiteFlag = $vals['paySiteFlag'];
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
		
		return 'ApVendorLocationModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("locationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->locationId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("locationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->locationCode);
				
			}
			
			
			
			
			if ("addressStyle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->addressStyle);
				
			}
			
			
			
			
			if ("country" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->country);
				
			}
			
			
			
			
			if ("province" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province);
				
			}
			
			
			
			
			if ("city" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city);
				
			}
			
			
			
			
			if ("county" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->county);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("state" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->state);
				
			}
			
			
			
			
			if ("postalCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postalCode);
				
			}
			
			
			
			
			if ("billAddrPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billAddrPhone);
				
			}
			
			
			
			
			if ("billBankAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billBankAccount);
				
			}
			
			
			
			
			if ("email" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->email);
				
			}
			
			
			
			
			if ("billProvince" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billProvince);
				
			}
			
			
			
			
			if ("billCity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billCity);
				
			}
			
			
			
			
			if ("billTaker" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billTaker);
				
			}
			
			
			
			
			if ("billRcvaddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billRcvaddr);
				
			}
			
			
			
			
			if ("billTakerPhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billTakerPhone);
				
			}
			
			
			
			
			if ("bankAccName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->bankAccName);
				
			}
			
			
			
			
			if ("startDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startDateActive);
				
			}
			
			
			
			
			if ("endDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endDateActive);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("purchasingSiteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchasingSiteFlag);
				
			}
			
			
			
			
			if ("paySiteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySiteFlag);
				
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
		
		if($this->locationId !== null) {
			
			$xfer += $output->writeFieldBegin('locationId');
			$xfer += $output->writeI64($this->locationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->locationCode !== null) {
			
			$xfer += $output->writeFieldBegin('locationCode');
			$xfer += $output->writeString($this->locationCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addressStyle !== null) {
			
			$xfer += $output->writeFieldBegin('addressStyle');
			$xfer += $output->writeString($this->addressStyle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->country !== null) {
			
			$xfer += $output->writeFieldBegin('country');
			$xfer += $output->writeString($this->country);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province !== null) {
			
			$xfer += $output->writeFieldBegin('province');
			$xfer += $output->writeString($this->province);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city !== null) {
			
			$xfer += $output->writeFieldBegin('city');
			$xfer += $output->writeString($this->city);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->county !== null) {
			
			$xfer += $output->writeFieldBegin('county');
			$xfer += $output->writeString($this->county);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state !== null) {
			
			$xfer += $output->writeFieldBegin('state');
			$xfer += $output->writeString($this->state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postalCode !== null) {
			
			$xfer += $output->writeFieldBegin('postalCode');
			$xfer += $output->writeString($this->postalCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billAddrPhone !== null) {
			
			$xfer += $output->writeFieldBegin('billAddrPhone');
			$xfer += $output->writeString($this->billAddrPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billBankAccount !== null) {
			
			$xfer += $output->writeFieldBegin('billBankAccount');
			$xfer += $output->writeString($this->billBankAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->email !== null) {
			
			$xfer += $output->writeFieldBegin('email');
			$xfer += $output->writeString($this->email);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billProvince !== null) {
			
			$xfer += $output->writeFieldBegin('billProvince');
			$xfer += $output->writeString($this->billProvince);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billCity !== null) {
			
			$xfer += $output->writeFieldBegin('billCity');
			$xfer += $output->writeString($this->billCity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTaker !== null) {
			
			$xfer += $output->writeFieldBegin('billTaker');
			$xfer += $output->writeString($this->billTaker);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billRcvaddr !== null) {
			
			$xfer += $output->writeFieldBegin('billRcvaddr');
			$xfer += $output->writeString($this->billRcvaddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTakerPhone !== null) {
			
			$xfer += $output->writeFieldBegin('billTakerPhone');
			$xfer += $output->writeString($this->billTakerPhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bankAccName !== null) {
			
			$xfer += $output->writeFieldBegin('bankAccName');
			$xfer += $output->writeString($this->bankAccName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('startDateActive');
			$xfer += $output->writeI64($this->startDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('endDateActive');
			$xfer += $output->writeI64($this->endDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->purchasingSiteFlag !== null) {
			
			$xfer += $output->writeFieldBegin('purchasingSiteFlag');
			$xfer += $output->writeString($this->purchasingSiteFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySiteFlag !== null) {
			
			$xfer += $output->writeFieldBegin('paySiteFlag');
			$xfer += $output->writeString($this->paySiteFlag);
			
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