<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorAllModel {
	
	static $_TSPEC;
	public $vendorId = null;
	public $vendorName = null;
	public $vendorNameAlt = null;
	public $vendorCode = null;
	public $enabledFlag = null;
	public $employeeId = null;
	public $vendorTypeLookupCode = null;
	public $parentVendorId = null;
	public $termsId = null;
	public $setOfBooksId = null;
	public $invoiceCurrencyCode = null;
	public $paymentCurrencyCode = null;
	public $holdAllPaymentsFlag = null;
	public $holdFuturePaymentsFlag = null;
	public $holdUnmatchedInvoicesFlag = null;
	public $holdReason = null;
	public $startDateActive = null;
	public $endDateActive = null;
	public $overseasSellFlag = null;
	public $zfDeferDays = null;
	public $goodsCategory = null;
	public $brand = null;
	public $sellingMode = null;
	public $existReturn = null;
	public $deptNo = null;
	public $relationshipVendor = null;
	public $zfProgressRate = null;
	public $zfSettlementMode = null;
	public $zfNBillType = null;
	public $vendorSettlementMode = null;
	public $newFlowStartDate = null;
	public $jxNBillType = null;
	public $htDefaultCurrency = null;
	public $vatRegistrationNum = null;
	public $validationNumber = null;
	public $excludeFreightFromDiscount = null;
	public $allowAwtFlag = null;
	public $newFlowFlag = null;
	public $newFlowFlagClear = null;
	public $settlementRate = null;
	public $gjRate = null;
	public $rmaRate = null;
	public $createDebitMemoFlag = null;
	public $niNumber = null;
	public $paymentMethodCode = null;
	public $processForApplicabilityFlag = null;
	public $allowOffsetTaxFlag = null;
	public $selfAssessFlag = null;
	public $taxClassificationCode = null;
	public $requestId = null;
	public $createTime = null;
	public $createdBy = null;
	public $updateTime = null;
	public $updatedBy = null;
	public $apVendorLocationModel = null;
	public $apVendorContactModel = null;
	public $apVendorBankModel = null;
	public $apVendorSiteModel = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorId'
			),
			2 => array(
			'var' => 'vendorName'
			),
			3 => array(
			'var' => 'vendorNameAlt'
			),
			4 => array(
			'var' => 'vendorCode'
			),
			5 => array(
			'var' => 'enabledFlag'
			),
			6 => array(
			'var' => 'employeeId'
			),
			7 => array(
			'var' => 'vendorTypeLookupCode'
			),
			8 => array(
			'var' => 'parentVendorId'
			),
			9 => array(
			'var' => 'termsId'
			),
			10 => array(
			'var' => 'setOfBooksId'
			),
			11 => array(
			'var' => 'invoiceCurrencyCode'
			),
			12 => array(
			'var' => 'paymentCurrencyCode'
			),
			13 => array(
			'var' => 'holdAllPaymentsFlag'
			),
			14 => array(
			'var' => 'holdFuturePaymentsFlag'
			),
			15 => array(
			'var' => 'holdUnmatchedInvoicesFlag'
			),
			16 => array(
			'var' => 'holdReason'
			),
			17 => array(
			'var' => 'startDateActive'
			),
			18 => array(
			'var' => 'endDateActive'
			),
			19 => array(
			'var' => 'overseasSellFlag'
			),
			20 => array(
			'var' => 'zfDeferDays'
			),
			21 => array(
			'var' => 'goodsCategory'
			),
			22 => array(
			'var' => 'brand'
			),
			23 => array(
			'var' => 'sellingMode'
			),
			24 => array(
			'var' => 'existReturn'
			),
			25 => array(
			'var' => 'deptNo'
			),
			26 => array(
			'var' => 'relationshipVendor'
			),
			27 => array(
			'var' => 'zfProgressRate'
			),
			28 => array(
			'var' => 'zfSettlementMode'
			),
			29 => array(
			'var' => 'zfNBillType'
			),
			30 => array(
			'var' => 'vendorSettlementMode'
			),
			31 => array(
			'var' => 'newFlowStartDate'
			),
			32 => array(
			'var' => 'jxNBillType'
			),
			33 => array(
			'var' => 'htDefaultCurrency'
			),
			34 => array(
			'var' => 'vatRegistrationNum'
			),
			35 => array(
			'var' => 'validationNumber'
			),
			36 => array(
			'var' => 'excludeFreightFromDiscount'
			),
			37 => array(
			'var' => 'allowAwtFlag'
			),
			38 => array(
			'var' => 'newFlowFlag'
			),
			39 => array(
			'var' => 'newFlowFlagClear'
			),
			40 => array(
			'var' => 'settlementRate'
			),
			41 => array(
			'var' => 'gjRate'
			),
			42 => array(
			'var' => 'rmaRate'
			),
			43 => array(
			'var' => 'createDebitMemoFlag'
			),
			44 => array(
			'var' => 'niNumber'
			),
			45 => array(
			'var' => 'paymentMethodCode'
			),
			46 => array(
			'var' => 'processForApplicabilityFlag'
			),
			47 => array(
			'var' => 'allowOffsetTaxFlag'
			),
			48 => array(
			'var' => 'selfAssessFlag'
			),
			49 => array(
			'var' => 'taxClassificationCode'
			),
			50 => array(
			'var' => 'requestId'
			),
			51 => array(
			'var' => 'createTime'
			),
			52 => array(
			'var' => 'createdBy'
			),
			53 => array(
			'var' => 'updateTime'
			),
			54 => array(
			'var' => 'updatedBy'
			),
			55 => array(
			'var' => 'apVendorLocationModel'
			),
			56 => array(
			'var' => 'apVendorContactModel'
			),
			57 => array(
			'var' => 'apVendorBankModel'
			),
			58 => array(
			'var' => 'apVendorSiteModel'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['vendorNameAlt'])){
				
				$this->vendorNameAlt = $vals['vendorNameAlt'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['enabledFlag'])){
				
				$this->enabledFlag = $vals['enabledFlag'];
			}
			
			
			if (isset($vals['employeeId'])){
				
				$this->employeeId = $vals['employeeId'];
			}
			
			
			if (isset($vals['vendorTypeLookupCode'])){
				
				$this->vendorTypeLookupCode = $vals['vendorTypeLookupCode'];
			}
			
			
			if (isset($vals['parentVendorId'])){
				
				$this->parentVendorId = $vals['parentVendorId'];
			}
			
			
			if (isset($vals['termsId'])){
				
				$this->termsId = $vals['termsId'];
			}
			
			
			if (isset($vals['setOfBooksId'])){
				
				$this->setOfBooksId = $vals['setOfBooksId'];
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
			
			
			if (isset($vals['holdUnmatchedInvoicesFlag'])){
				
				$this->holdUnmatchedInvoicesFlag = $vals['holdUnmatchedInvoicesFlag'];
			}
			
			
			if (isset($vals['holdReason'])){
				
				$this->holdReason = $vals['holdReason'];
			}
			
			
			if (isset($vals['startDateActive'])){
				
				$this->startDateActive = $vals['startDateActive'];
			}
			
			
			if (isset($vals['endDateActive'])){
				
				$this->endDateActive = $vals['endDateActive'];
			}
			
			
			if (isset($vals['overseasSellFlag'])){
				
				$this->overseasSellFlag = $vals['overseasSellFlag'];
			}
			
			
			if (isset($vals['zfDeferDays'])){
				
				$this->zfDeferDays = $vals['zfDeferDays'];
			}
			
			
			if (isset($vals['goodsCategory'])){
				
				$this->goodsCategory = $vals['goodsCategory'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['existReturn'])){
				
				$this->existReturn = $vals['existReturn'];
			}
			
			
			if (isset($vals['deptNo'])){
				
				$this->deptNo = $vals['deptNo'];
			}
			
			
			if (isset($vals['relationshipVendor'])){
				
				$this->relationshipVendor = $vals['relationshipVendor'];
			}
			
			
			if (isset($vals['zfProgressRate'])){
				
				$this->zfProgressRate = $vals['zfProgressRate'];
			}
			
			
			if (isset($vals['zfSettlementMode'])){
				
				$this->zfSettlementMode = $vals['zfSettlementMode'];
			}
			
			
			if (isset($vals['zfNBillType'])){
				
				$this->zfNBillType = $vals['zfNBillType'];
			}
			
			
			if (isset($vals['vendorSettlementMode'])){
				
				$this->vendorSettlementMode = $vals['vendorSettlementMode'];
			}
			
			
			if (isset($vals['newFlowStartDate'])){
				
				$this->newFlowStartDate = $vals['newFlowStartDate'];
			}
			
			
			if (isset($vals['jxNBillType'])){
				
				$this->jxNBillType = $vals['jxNBillType'];
			}
			
			
			if (isset($vals['htDefaultCurrency'])){
				
				$this->htDefaultCurrency = $vals['htDefaultCurrency'];
			}
			
			
			if (isset($vals['vatRegistrationNum'])){
				
				$this->vatRegistrationNum = $vals['vatRegistrationNum'];
			}
			
			
			if (isset($vals['validationNumber'])){
				
				$this->validationNumber = $vals['validationNumber'];
			}
			
			
			if (isset($vals['excludeFreightFromDiscount'])){
				
				$this->excludeFreightFromDiscount = $vals['excludeFreightFromDiscount'];
			}
			
			
			if (isset($vals['allowAwtFlag'])){
				
				$this->allowAwtFlag = $vals['allowAwtFlag'];
			}
			
			
			if (isset($vals['newFlowFlag'])){
				
				$this->newFlowFlag = $vals['newFlowFlag'];
			}
			
			
			if (isset($vals['newFlowFlagClear'])){
				
				$this->newFlowFlagClear = $vals['newFlowFlagClear'];
			}
			
			
			if (isset($vals['settlementRate'])){
				
				$this->settlementRate = $vals['settlementRate'];
			}
			
			
			if (isset($vals['gjRate'])){
				
				$this->gjRate = $vals['gjRate'];
			}
			
			
			if (isset($vals['rmaRate'])){
				
				$this->rmaRate = $vals['rmaRate'];
			}
			
			
			if (isset($vals['createDebitMemoFlag'])){
				
				$this->createDebitMemoFlag = $vals['createDebitMemoFlag'];
			}
			
			
			if (isset($vals['niNumber'])){
				
				$this->niNumber = $vals['niNumber'];
			}
			
			
			if (isset($vals['paymentMethodCode'])){
				
				$this->paymentMethodCode = $vals['paymentMethodCode'];
			}
			
			
			if (isset($vals['processForApplicabilityFlag'])){
				
				$this->processForApplicabilityFlag = $vals['processForApplicabilityFlag'];
			}
			
			
			if (isset($vals['allowOffsetTaxFlag'])){
				
				$this->allowOffsetTaxFlag = $vals['allowOffsetTaxFlag'];
			}
			
			
			if (isset($vals['selfAssessFlag'])){
				
				$this->selfAssessFlag = $vals['selfAssessFlag'];
			}
			
			
			if (isset($vals['taxClassificationCode'])){
				
				$this->taxClassificationCode = $vals['taxClassificationCode'];
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
			
			
			if (isset($vals['apVendorLocationModel'])){
				
				$this->apVendorLocationModel = $vals['apVendorLocationModel'];
			}
			
			
			if (isset($vals['apVendorContactModel'])){
				
				$this->apVendorContactModel = $vals['apVendorContactModel'];
			}
			
			
			if (isset($vals['apVendorBankModel'])){
				
				$this->apVendorBankModel = $vals['apVendorBankModel'];
			}
			
			
			if (isset($vals['apVendorSiteModel'])){
				
				$this->apVendorSiteModel = $vals['apVendorSiteModel'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApVendorAllModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("vendorNameAlt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorNameAlt);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("enabledFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enabledFlag);
				
			}
			
			
			
			
			if ("employeeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->employeeId); 
				
			}
			
			
			
			
			if ("vendorTypeLookupCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorTypeLookupCode);
				
			}
			
			
			
			
			if ("parentVendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->parentVendorId); 
				
			}
			
			
			
			
			if ("termsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->termsId); 
				
			}
			
			
			
			
			if ("setOfBooksId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->setOfBooksId); 
				
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
			
			
			
			
			if ("holdUnmatchedInvoicesFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdUnmatchedInvoicesFlag);
				
			}
			
			
			
			
			if ("holdReason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->holdReason);
				
			}
			
			
			
			
			if ("startDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startDateActive);
				
			}
			
			
			
			
			if ("endDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endDateActive);
				
			}
			
			
			
			
			if ("overseasSellFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->overseasSellFlag);
				
			}
			
			
			
			
			if ("zfDeferDays" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zfDeferDays);
				
			}
			
			
			
			
			if ("goodsCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsCategory);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingMode);
				
			}
			
			
			
			
			if ("existReturn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->existReturn);
				
			}
			
			
			
			
			if ("deptNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deptNo);
				
			}
			
			
			
			
			if ("relationshipVendor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->relationshipVendor);
				
			}
			
			
			
			
			if ("zfProgressRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zfProgressRate);
				
			}
			
			
			
			
			if ("zfSettlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zfSettlementMode);
				
			}
			
			
			
			
			if ("zfNBillType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->zfNBillType);
				
			}
			
			
			
			
			if ("vendorSettlementMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorSettlementMode);
				
			}
			
			
			
			
			if ("newFlowStartDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newFlowStartDate);
				
			}
			
			
			
			
			if ("jxNBillType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->jxNBillType);
				
			}
			
			
			
			
			if ("htDefaultCurrency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->htDefaultCurrency);
				
			}
			
			
			
			
			if ("vatRegistrationNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vatRegistrationNum);
				
			}
			
			
			
			
			if ("validationNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->validationNumber);
				
			}
			
			
			
			
			if ("excludeFreightFromDiscount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->excludeFreightFromDiscount);
				
			}
			
			
			
			
			if ("allowAwtFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allowAwtFlag);
				
			}
			
			
			
			
			if ("newFlowFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newFlowFlag);
				
			}
			
			
			
			
			if ("newFlowFlagClear" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->newFlowFlagClear);
				
			}
			
			
			
			
			if ("settlementRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settlementRate);
				
			}
			
			
			
			
			if ("gjRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->gjRate);
				
			}
			
			
			
			
			if ("rmaRate" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->rmaRate);
				
			}
			
			
			
			
			if ("createDebitMemoFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createDebitMemoFlag);
				
			}
			
			
			
			
			if ("niNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->niNumber);
				
			}
			
			
			
			
			if ("paymentMethodCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentMethodCode);
				
			}
			
			
			
			
			if ("processForApplicabilityFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processForApplicabilityFlag);
				
			}
			
			
			
			
			if ("allowOffsetTaxFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->allowOffsetTaxFlag);
				
			}
			
			
			
			
			if ("selfAssessFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->selfAssessFlag);
				
			}
			
			
			
			
			if ("taxClassificationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxClassificationCode);
				
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
			
			
			
			
			if ("apVendorLocationModel" == $schemeField){
				
				$needSkip = false;
				
				$this->apVendorLocationModel = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorLocationModel();
						$elem0->read($input);
						
						$this->apVendorLocationModel[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("apVendorContactModel" == $schemeField){
				
				$needSkip = false;
				
				$this->apVendorContactModel = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorContactModel();
						$elem1->read($input);
						
						$this->apVendorContactModel[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("apVendorBankModel" == $schemeField){
				
				$needSkip = false;
				
				$this->apVendorBankModel = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorBankModel();
						$elem2->read($input);
						
						$this->apVendorBankModel[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("apVendorSiteModel" == $schemeField){
				
				$needSkip = false;
				
				$this->apVendorSiteModel = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorSiteModel();
						$elem3->read($input);
						
						$this->apVendorSiteModel[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorNameAlt !== null) {
			
			$xfer += $output->writeFieldBegin('vendorNameAlt');
			$xfer += $output->writeString($this->vendorNameAlt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enabledFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enabledFlag');
			$xfer += $output->writeString($this->enabledFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->employeeId !== null) {
			
			$xfer += $output->writeFieldBegin('employeeId');
			$xfer += $output->writeI64($this->employeeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorTypeLookupCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorTypeLookupCode');
			$xfer += $output->writeString($this->vendorTypeLookupCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->parentVendorId !== null) {
			
			$xfer += $output->writeFieldBegin('parentVendorId');
			$xfer += $output->writeI64($this->parentVendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->termsId !== null) {
			
			$xfer += $output->writeFieldBegin('termsId');
			$xfer += $output->writeI64($this->termsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->setOfBooksId !== null) {
			
			$xfer += $output->writeFieldBegin('setOfBooksId');
			$xfer += $output->writeI64($this->setOfBooksId);
			
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
		
		
		if($this->holdUnmatchedInvoicesFlag !== null) {
			
			$xfer += $output->writeFieldBegin('holdUnmatchedInvoicesFlag');
			$xfer += $output->writeString($this->holdUnmatchedInvoicesFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->holdReason !== null) {
			
			$xfer += $output->writeFieldBegin('holdReason');
			$xfer += $output->writeString($this->holdReason);
			
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
		
		
		if($this->overseasSellFlag !== null) {
			
			$xfer += $output->writeFieldBegin('overseasSellFlag');
			$xfer += $output->writeString($this->overseasSellFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zfDeferDays !== null) {
			
			$xfer += $output->writeFieldBegin('zfDeferDays');
			$xfer += $output->writeString($this->zfDeferDays);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsCategory !== null) {
			
			$xfer += $output->writeFieldBegin('goodsCategory');
			$xfer += $output->writeString($this->goodsCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sellingMode !== null) {
			
			$xfer += $output->writeFieldBegin('sellingMode');
			$xfer += $output->writeString($this->sellingMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->existReturn !== null) {
			
			$xfer += $output->writeFieldBegin('existReturn');
			$xfer += $output->writeString($this->existReturn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deptNo !== null) {
			
			$xfer += $output->writeFieldBegin('deptNo');
			$xfer += $output->writeString($this->deptNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->relationshipVendor !== null) {
			
			$xfer += $output->writeFieldBegin('relationshipVendor');
			$xfer += $output->writeString($this->relationshipVendor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zfProgressRate !== null) {
			
			$xfer += $output->writeFieldBegin('zfProgressRate');
			$xfer += $output->writeString($this->zfProgressRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zfSettlementMode !== null) {
			
			$xfer += $output->writeFieldBegin('zfSettlementMode');
			$xfer += $output->writeString($this->zfSettlementMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->zfNBillType !== null) {
			
			$xfer += $output->writeFieldBegin('zfNBillType');
			$xfer += $output->writeString($this->zfNBillType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSettlementMode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSettlementMode');
			$xfer += $output->writeString($this->vendorSettlementMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newFlowStartDate !== null) {
			
			$xfer += $output->writeFieldBegin('newFlowStartDate');
			$xfer += $output->writeString($this->newFlowStartDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->jxNBillType !== null) {
			
			$xfer += $output->writeFieldBegin('jxNBillType');
			$xfer += $output->writeString($this->jxNBillType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->htDefaultCurrency !== null) {
			
			$xfer += $output->writeFieldBegin('htDefaultCurrency');
			$xfer += $output->writeString($this->htDefaultCurrency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vatRegistrationNum !== null) {
			
			$xfer += $output->writeFieldBegin('vatRegistrationNum');
			$xfer += $output->writeString($this->vatRegistrationNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->validationNumber !== null) {
			
			$xfer += $output->writeFieldBegin('validationNumber');
			$xfer += $output->writeString($this->validationNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->excludeFreightFromDiscount !== null) {
			
			$xfer += $output->writeFieldBegin('excludeFreightFromDiscount');
			$xfer += $output->writeString($this->excludeFreightFromDiscount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allowAwtFlag !== null) {
			
			$xfer += $output->writeFieldBegin('allowAwtFlag');
			$xfer += $output->writeString($this->allowAwtFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newFlowFlag !== null) {
			
			$xfer += $output->writeFieldBegin('newFlowFlag');
			$xfer += $output->writeString($this->newFlowFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->newFlowFlagClear !== null) {
			
			$xfer += $output->writeFieldBegin('newFlowFlagClear');
			$xfer += $output->writeString($this->newFlowFlagClear);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settlementRate !== null) {
			
			$xfer += $output->writeFieldBegin('settlementRate');
			$xfer += $output->writeString($this->settlementRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->gjRate !== null) {
			
			$xfer += $output->writeFieldBegin('gjRate');
			$xfer += $output->writeDouble($this->gjRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rmaRate !== null) {
			
			$xfer += $output->writeFieldBegin('rmaRate');
			$xfer += $output->writeDouble($this->rmaRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createDebitMemoFlag !== null) {
			
			$xfer += $output->writeFieldBegin('createDebitMemoFlag');
			$xfer += $output->writeString($this->createDebitMemoFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->niNumber !== null) {
			
			$xfer += $output->writeFieldBegin('niNumber');
			$xfer += $output->writeString($this->niNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentMethodCode !== null) {
			
			$xfer += $output->writeFieldBegin('paymentMethodCode');
			$xfer += $output->writeString($this->paymentMethodCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processForApplicabilityFlag !== null) {
			
			$xfer += $output->writeFieldBegin('processForApplicabilityFlag');
			$xfer += $output->writeString($this->processForApplicabilityFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->allowOffsetTaxFlag !== null) {
			
			$xfer += $output->writeFieldBegin('allowOffsetTaxFlag');
			$xfer += $output->writeString($this->allowOffsetTaxFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->selfAssessFlag !== null) {
			
			$xfer += $output->writeFieldBegin('selfAssessFlag');
			$xfer += $output->writeString($this->selfAssessFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxClassificationCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxClassificationCode');
			$xfer += $output->writeString($this->taxClassificationCode);
			
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
		
		
		if($this->apVendorLocationModel !== null) {
			
			$xfer += $output->writeFieldBegin('apVendorLocationModel');
			
			if (!is_array($this->apVendorLocationModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->apVendorLocationModel as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apVendorContactModel !== null) {
			
			$xfer += $output->writeFieldBegin('apVendorContactModel');
			
			if (!is_array($this->apVendorContactModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->apVendorContactModel as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apVendorBankModel !== null) {
			
			$xfer += $output->writeFieldBegin('apVendorBankModel');
			
			if (!is_array($this->apVendorBankModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->apVendorBankModel as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apVendorSiteModel !== null) {
			
			$xfer += $output->writeFieldBegin('apVendorSiteModel');
			
			if (!is_array($this->apVendorSiteModel)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->apVendorSiteModel as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>