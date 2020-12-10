<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorSiteModel {
	
	static $_TSPEC;
	public $vendorSiteId = null;
	public $locationId = null;
	public $vendorId = null;
	public $purchasingSiteFlag = null;
	public $paySiteFlag = null;
	public $areaCode = null;
	public $phone = null;
	public $shipToLocationId = null;
	public $billToLocationId = null;
	public $inactiveDate = null;
	public $fax = null;
	public $faxAreaCode = null;
	public $vatCode = null;
	public $acctsPayCodeCombinationId = null;
	public $prepayCodeCombinationId = null;
	public $termsId = null;
	public $payDateBasisLookupCode = null;
	public $invoiceCurrencyCode = null;
	public $paymentCurrencyCode = null;
	public $holdAllPaymentsFlag = null;
	public $holdFuturePaymentsFlag = null;
	public $holdReason = null;
	public $holdUnmatchedInvoicesFlag = null;
	public $billAddr = null;
	public $validationNumber = null;
	public $excludeFreightFromDiscount = null;
	public $vatRegistrationNum = null;
	public $orgId = null;
	public $primaryPaySiteFlag = null;
	public $status = null;
	public $requestId = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $vendorSiteCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorSiteId'
			),
			2 => array(
			'var' => 'locationId'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'purchasingSiteFlag'
			),
			5 => array(
			'var' => 'paySiteFlag'
			),
			6 => array(
			'var' => 'areaCode'
			),
			7 => array(
			'var' => 'phone'
			),
			8 => array(
			'var' => 'shipToLocationId'
			),
			9 => array(
			'var' => 'billToLocationId'
			),
			10 => array(
			'var' => 'inactiveDate'
			),
			11 => array(
			'var' => 'fax'
			),
			12 => array(
			'var' => 'faxAreaCode'
			),
			13 => array(
			'var' => 'vatCode'
			),
			14 => array(
			'var' => 'acctsPayCodeCombinationId'
			),
			15 => array(
			'var' => 'prepayCodeCombinationId'
			),
			16 => array(
			'var' => 'termsId'
			),
			17 => array(
			'var' => 'payDateBasisLookupCode'
			),
			18 => array(
			'var' => 'invoiceCurrencyCode'
			),
			19 => array(
			'var' => 'paymentCurrencyCode'
			),
			20 => array(
			'var' => 'holdAllPaymentsFlag'
			),
			21 => array(
			'var' => 'holdFuturePaymentsFlag'
			),
			22 => array(
			'var' => 'holdReason'
			),
			23 => array(
			'var' => 'holdUnmatchedInvoicesFlag'
			),
			24 => array(
			'var' => 'billAddr'
			),
			25 => array(
			'var' => 'validationNumber'
			),
			26 => array(
			'var' => 'excludeFreightFromDiscount'
			),
			27 => array(
			'var' => 'vatRegistrationNum'
			),
			28 => array(
			'var' => 'orgId'
			),
			29 => array(
			'var' => 'primaryPaySiteFlag'
			),
			30 => array(
			'var' => 'status'
			),
			31 => array(
			'var' => 'requestId'
			),
			32 => array(
			'var' => 'createTime'
			),
			33 => array(
			'var' => 'createdBy'
			),
			34 => array(
			'var' => 'updateTime'
			),
			35 => array(
			'var' => 'updatedBy'
			),
			36 => array(
			'var' => 'vendorSiteCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorSiteId'])){
				
				$this->vendorSiteId = $vals['vendorSiteId'];
			}
			
			
			if (isset($vals['locationId'])){
				
				$this->locationId = $vals['locationId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['purchasingSiteFlag'])){
				
				$this->purchasingSiteFlag = $vals['purchasingSiteFlag'];
			}
			
			
			if (isset($vals['paySiteFlag'])){
				
				$this->paySiteFlag = $vals['paySiteFlag'];
			}
			
			
			if (isset($vals['areaCode'])){
				
				$this->areaCode = $vals['areaCode'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['shipToLocationId'])){
				
				$this->shipToLocationId = $vals['shipToLocationId'];
			}
			
			
			if (isset($vals['billToLocationId'])){
				
				$this->billToLocationId = $vals['billToLocationId'];
			}
			
			
			if (isset($vals['inactiveDate'])){
				
				$this->inactiveDate = $vals['inactiveDate'];
			}
			
			
			if (isset($vals['fax'])){
				
				$this->fax = $vals['fax'];
			}
			
			
			if (isset($vals['faxAreaCode'])){
				
				$this->faxAreaCode = $vals['faxAreaCode'];
			}
			
			
			if (isset($vals['vatCode'])){
				
				$this->vatCode = $vals['vatCode'];
			}
			
			
			if (isset($vals['acctsPayCodeCombinationId'])){
				
				$this->acctsPayCodeCombinationId = $vals['acctsPayCodeCombinationId'];
			}
			
			
			if (isset($vals['prepayCodeCombinationId'])){
				
				$this->prepayCodeCombinationId = $vals['prepayCodeCombinationId'];
			}
			
			
			if (isset($vals['termsId'])){
				
				$this->termsId = $vals['termsId'];
			}
			
			
			if (isset($vals['payDateBasisLookupCode'])){
				
				$this->payDateBasisLookupCode = $vals['payDateBasisLookupCode'];
			}
			
			
			if (isset($vals['invoiceCurrencyCode'])){
				
				$this->invoiceCurrencyCode = $vals['invoiceCurrencyCode'];
			}
			
			
			if (isset($vals['paymentCurrencyCode'])){
				
				$this->paymentCurrencyCode = $vals['paymentCurrencyCode'];
			}
			
			
			if (isset($vals['holdAllPaymentsFlag'])){
				
				$this->holdAllPaymentsFlag = $vals['holdAllPaymentsFlag'];
			}
			
			
			if (isset($vals['holdFuturePaymentsFlag'])){
				
				$this->holdFuturePaymentsFlag = $vals['holdFuturePaymentsFlag'];
			}
			
			
			if (isset($vals['holdReason'])){
				
				$this->holdReason = $vals['holdReason'];
			}
			
			
			if (isset($vals['holdUnmatchedInvoicesFlag'])){
				
				$this->holdUnmatchedInvoicesFlag = $vals['holdUnmatchedInvoicesFlag'];
			}
			
			
			if (isset($vals['billAddr'])){
				
				$this->billAddr = $vals['billAddr'];
			}
			
			
			if (isset($vals['validationNumber'])){
				
				$this->validationNumber = $vals['validationNumber'];
			}
			
			
			if (isset($vals['excludeFreightFromDiscount'])){
				
				$this->excludeFreightFromDiscount = $vals['excludeFreightFromDiscount'];
			}
			
			
			if (isset($vals['vatRegistrationNum'])){
				
				$this->vatRegistrationNum = $vals['vatRegistrationNum'];
			}
			
			
			if (isset($vals['orgId'])){
				
				$this->orgId = $vals['orgId'];
			}
			
			
			if (isset($vals['primaryPaySiteFlag'])){
				
				$this->primaryPaySiteFlag = $vals['primaryPaySiteFlag'];
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
			
			
			if (isset($vals['vendorSiteCode'])){
				
				$this->vendorSiteCode = $vals['vendorSiteCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApVendorSiteModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorSiteId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorSiteId); 
				
			}
			
			
			
			
			if ("locationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->locationId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("purchasingSiteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->purchasingSiteFlag);
				
			}
			
			
			
			
			if ("paySiteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySiteFlag);
				
			}
			
			
			
			
			if ("areaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaCode);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("shipToLocationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->shipToLocationId); 
				
			}
			
			
			
			
			if ("billToLocationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->billToLocationId); 
				
			}
			
			
			
			
			if ("inactiveDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->inactiveDate);
				
			}
			
			
			
			
			if ("fax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fax);
				
			}
			
			
			
			
			if ("faxAreaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->faxAreaCode);
				
			}
			
			
			
			
			if ("vatCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vatCode);
				
			}
			
			
			
			
			if ("acctsPayCodeCombinationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->acctsPayCodeCombinationId); 
				
			}
			
			
			
			
			if ("prepayCodeCombinationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->prepayCodeCombinationId); 
				
			}
			
			
			
			
			if ("termsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->termsId); 
				
			}
			
			
			
			
			if ("payDateBasisLookupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payDateBasisLookupCode);
				
			}
			
			
			
			
			if ("invoiceCurrencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceCurrencyCode);
				
			}
			
			
			
			
			if ("paymentCurrencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentCurrencyCode);
				
			}
			
			
			
			
			if ("holdAllPaymentsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdAllPaymentsFlag);
				
			}
			
			
			
			
			if ("holdFuturePaymentsFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdFuturePaymentsFlag);
				
			}
			
			
			
			
			if ("holdReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdReason);
				
			}
			
			
			
			
			if ("holdUnmatchedInvoicesFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdUnmatchedInvoicesFlag);
				
			}
			
			
			
			
			if ("billAddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billAddr);
				
			}
			
			
			
			
			if ("validationNumber" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->validationNumber); 
				
			}
			
			
			
			
			if ("excludeFreightFromDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->excludeFreightFromDiscount);
				
			}
			
			
			
			
			if ("vatRegistrationNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vatRegistrationNum);
				
			}
			
			
			
			
			if ("orgId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orgId); 
				
			}
			
			
			
			
			if ("primaryPaySiteFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->primaryPaySiteFlag);
				
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
				$input->readI64($this->createdBy); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
			}
			
			
			
			
			if ("updatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updatedBy); 
				
			}
			
			
			
			
			if ("vendorSiteCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorSiteCode);
				
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
		
		if($this->vendorSiteId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSiteId');
			$xfer += $output->writeI64($this->vendorSiteId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
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
		
		
		if($this->areaCode !== null) {
			
			$xfer += $output->writeFieldBegin('areaCode');
			$xfer += $output->writeString($this->areaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shipToLocationId !== null) {
			
			$xfer += $output->writeFieldBegin('shipToLocationId');
			$xfer += $output->writeI64($this->shipToLocationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billToLocationId !== null) {
			
			$xfer += $output->writeFieldBegin('billToLocationId');
			$xfer += $output->writeI64($this->billToLocationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->inactiveDate !== null) {
			
			$xfer += $output->writeFieldBegin('inactiveDate');
			$xfer += $output->writeI64($this->inactiveDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fax !== null) {
			
			$xfer += $output->writeFieldBegin('fax');
			$xfer += $output->writeString($this->fax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->faxAreaCode !== null) {
			
			$xfer += $output->writeFieldBegin('faxAreaCode');
			$xfer += $output->writeString($this->faxAreaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vatCode !== null) {
			
			$xfer += $output->writeFieldBegin('vatCode');
			$xfer += $output->writeString($this->vatCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->acctsPayCodeCombinationId !== null) {
			
			$xfer += $output->writeFieldBegin('acctsPayCodeCombinationId');
			$xfer += $output->writeI64($this->acctsPayCodeCombinationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->prepayCodeCombinationId !== null) {
			
			$xfer += $output->writeFieldBegin('prepayCodeCombinationId');
			$xfer += $output->writeI64($this->prepayCodeCombinationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->termsId !== null) {
			
			$xfer += $output->writeFieldBegin('termsId');
			$xfer += $output->writeI64($this->termsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payDateBasisLookupCode !== null) {
			
			$xfer += $output->writeFieldBegin('payDateBasisLookupCode');
			$xfer += $output->writeString($this->payDateBasisLookupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceCurrencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceCurrencyCode');
			$xfer += $output->writeString($this->invoiceCurrencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentCurrencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('paymentCurrencyCode');
			$xfer += $output->writeString($this->paymentCurrencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdAllPaymentsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('holdAllPaymentsFlag');
			$xfer += $output->writeString($this->holdAllPaymentsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdFuturePaymentsFlag !== null) {
			
			$xfer += $output->writeFieldBegin('holdFuturePaymentsFlag');
			$xfer += $output->writeString($this->holdFuturePaymentsFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdReason !== null) {
			
			$xfer += $output->writeFieldBegin('holdReason');
			$xfer += $output->writeString($this->holdReason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdUnmatchedInvoicesFlag !== null) {
			
			$xfer += $output->writeFieldBegin('holdUnmatchedInvoicesFlag');
			$xfer += $output->writeString($this->holdUnmatchedInvoicesFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billAddr !== null) {
			
			$xfer += $output->writeFieldBegin('billAddr');
			$xfer += $output->writeString($this->billAddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validationNumber !== null) {
			
			$xfer += $output->writeFieldBegin('validationNumber');
			$xfer += $output->writeI64($this->validationNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->excludeFreightFromDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('excludeFreightFromDiscount');
			$xfer += $output->writeString($this->excludeFreightFromDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vatRegistrationNum !== null) {
			
			$xfer += $output->writeFieldBegin('vatRegistrationNum');
			$xfer += $output->writeString($this->vatRegistrationNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgId !== null) {
			
			$xfer += $output->writeFieldBegin('orgId');
			$xfer += $output->writeI64($this->orgId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->primaryPaySiteFlag !== null) {
			
			$xfer += $output->writeFieldBegin('primaryPaySiteFlag');
			$xfer += $output->writeString($this->primaryPaySiteFlag);
			
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
			$xfer += $output->writeI64($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('updatedBy');
			$xfer += $output->writeI64($this->updatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSiteCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSiteCode');
			$xfer += $output->writeString($this->vendorSiteCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>