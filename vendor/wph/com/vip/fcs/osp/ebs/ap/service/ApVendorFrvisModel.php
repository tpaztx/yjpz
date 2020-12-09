<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorFrvisModel {
	
	static $_TSPEC;
	public $vendorSeqId = null;
	public $sourceCode = null;
	public $processFlag = null;
	public $vendorName = null;
	public $vendorCode = null;
	public $vatRegistrationNum = null;
	public $goodCategory = null;
	public $brand = null;
	public $sellingMode = null;
	public $existReturnRate = null;
	public $department = null;
	public $payType = null;
	public $tBillStartDate = null;
	public $monthlyDate = null;
	public $actionCode = null;
	public $vendorSiteCode = null;
	public $progressPayRate = null;
	public $paymentTerm = null;
	public $isShipSale = null;
	public $country = null;
	public $province = null;
	public $city = null;
	public $officeAddress = null;
	public $officePhone = null;
	public $segment1 = null;
	public $segment2 = null;
	public $segment3 = null;
	public $segment4 = null;
	public $segment5 = null;
	public $segment6 = null;
	public $segment7 = null;
	public $segment8 = null;
	public $segment9 = null;
	public $segment10 = null;
	public $segment11 = null;
	public $segment12 = null;
	public $segment13 = null;
	public $segment14 = null;
	public $segment15 = null;
	public $segment16 = null;
	public $segment17 = null;
	public $segment18 = null;
	public $segment19 = null;
	public $segment20 = null;
	public $attributeCategory = null;
	public $attribute1 = null;
	public $attribute2 = null;
	public $attribute3 = null;
	public $attribute4 = null;
	public $attribute5 = null;
	public $attribute6 = null;
	public $attribute7 = null;
	public $attribute8 = null;
	public $attribute9 = null;
	public $attribute10 = null;
	public $creationDate = null;
	public $createdBy = null;
	public $lastUpdatedBy = null;
	public $lastUpdateDate = null;
	public $lastUpdateLogin = null;
	public $requestId = null;
	public $vendorId = null;
	public $vendorSiteId = null;
	public $vendorContact = null;
	public $vendorBank = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendorSeqId'
			),
			2 => array(
			'var' => 'sourceCode'
			),
			3 => array(
			'var' => 'processFlag'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'vendorCode'
			),
			6 => array(
			'var' => 'vatRegistrationNum'
			),
			7 => array(
			'var' => 'goodCategory'
			),
			8 => array(
			'var' => 'brand'
			),
			9 => array(
			'var' => 'sellingMode'
			),
			10 => array(
			'var' => 'existReturnRate'
			),
			11 => array(
			'var' => 'department'
			),
			12 => array(
			'var' => 'payType'
			),
			13 => array(
			'var' => 'tBillStartDate'
			),
			14 => array(
			'var' => 'monthlyDate'
			),
			15 => array(
			'var' => 'actionCode'
			),
			16 => array(
			'var' => 'vendorSiteCode'
			),
			17 => array(
			'var' => 'progressPayRate'
			),
			18 => array(
			'var' => 'paymentTerm'
			),
			19 => array(
			'var' => 'isShipSale'
			),
			20 => array(
			'var' => 'country'
			),
			21 => array(
			'var' => 'province'
			),
			22 => array(
			'var' => 'city'
			),
			23 => array(
			'var' => 'officeAddress'
			),
			24 => array(
			'var' => 'officePhone'
			),
			25 => array(
			'var' => 'segment1'
			),
			26 => array(
			'var' => 'segment2'
			),
			27 => array(
			'var' => 'segment3'
			),
			28 => array(
			'var' => 'segment4'
			),
			29 => array(
			'var' => 'segment5'
			),
			30 => array(
			'var' => 'segment6'
			),
			31 => array(
			'var' => 'segment7'
			),
			32 => array(
			'var' => 'segment8'
			),
			33 => array(
			'var' => 'segment9'
			),
			34 => array(
			'var' => 'segment10'
			),
			35 => array(
			'var' => 'segment11'
			),
			36 => array(
			'var' => 'segment12'
			),
			37 => array(
			'var' => 'segment13'
			),
			38 => array(
			'var' => 'segment14'
			),
			39 => array(
			'var' => 'segment15'
			),
			40 => array(
			'var' => 'segment16'
			),
			41 => array(
			'var' => 'segment17'
			),
			42 => array(
			'var' => 'segment18'
			),
			43 => array(
			'var' => 'segment19'
			),
			44 => array(
			'var' => 'segment20'
			),
			45 => array(
			'var' => 'attributeCategory'
			),
			46 => array(
			'var' => 'attribute1'
			),
			47 => array(
			'var' => 'attribute2'
			),
			48 => array(
			'var' => 'attribute3'
			),
			49 => array(
			'var' => 'attribute4'
			),
			50 => array(
			'var' => 'attribute5'
			),
			51 => array(
			'var' => 'attribute6'
			),
			52 => array(
			'var' => 'attribute7'
			),
			53 => array(
			'var' => 'attribute8'
			),
			54 => array(
			'var' => 'attribute9'
			),
			55 => array(
			'var' => 'attribute10'
			),
			56 => array(
			'var' => 'creationDate'
			),
			57 => array(
			'var' => 'createdBy'
			),
			58 => array(
			'var' => 'lastUpdatedBy'
			),
			59 => array(
			'var' => 'lastUpdateDate'
			),
			60 => array(
			'var' => 'lastUpdateLogin'
			),
			61 => array(
			'var' => 'requestId'
			),
			62 => array(
			'var' => 'vendorId'
			),
			63 => array(
			'var' => 'vendorSiteId'
			),
			64 => array(
			'var' => 'vendorContact'
			),
			65 => array(
			'var' => 'vendorBank'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendorSeqId'])){
				
				$this->vendorSeqId = $vals['vendorSeqId'];
			}
			
			
			if (isset($vals['sourceCode'])){
				
				$this->sourceCode = $vals['sourceCode'];
			}
			
			
			if (isset($vals['processFlag'])){
				
				$this->processFlag = $vals['processFlag'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vatRegistrationNum'])){
				
				$this->vatRegistrationNum = $vals['vatRegistrationNum'];
			}
			
			
			if (isset($vals['goodCategory'])){
				
				$this->goodCategory = $vals['goodCategory'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['sellingMode'])){
				
				$this->sellingMode = $vals['sellingMode'];
			}
			
			
			if (isset($vals['existReturnRate'])){
				
				$this->existReturnRate = $vals['existReturnRate'];
			}
			
			
			if (isset($vals['department'])){
				
				$this->department = $vals['department'];
			}
			
			
			if (isset($vals['payType'])){
				
				$this->payType = $vals['payType'];
			}
			
			
			if (isset($vals['tBillStartDate'])){
				
				$this->tBillStartDate = $vals['tBillStartDate'];
			}
			
			
			if (isset($vals['monthlyDate'])){
				
				$this->monthlyDate = $vals['monthlyDate'];
			}
			
			
			if (isset($vals['actionCode'])){
				
				$this->actionCode = $vals['actionCode'];
			}
			
			
			if (isset($vals['vendorSiteCode'])){
				
				$this->vendorSiteCode = $vals['vendorSiteCode'];
			}
			
			
			if (isset($vals['progressPayRate'])){
				
				$this->progressPayRate = $vals['progressPayRate'];
			}
			
			
			if (isset($vals['paymentTerm'])){
				
				$this->paymentTerm = $vals['paymentTerm'];
			}
			
			
			if (isset($vals['isShipSale'])){
				
				$this->isShipSale = $vals['isShipSale'];
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
			
			
			if (isset($vals['officeAddress'])){
				
				$this->officeAddress = $vals['officeAddress'];
			}
			
			
			if (isset($vals['officePhone'])){
				
				$this->officePhone = $vals['officePhone'];
			}
			
			
			if (isset($vals['segment1'])){
				
				$this->segment1 = $vals['segment1'];
			}
			
			
			if (isset($vals['segment2'])){
				
				$this->segment2 = $vals['segment2'];
			}
			
			
			if (isset($vals['segment3'])){
				
				$this->segment3 = $vals['segment3'];
			}
			
			
			if (isset($vals['segment4'])){
				
				$this->segment4 = $vals['segment4'];
			}
			
			
			if (isset($vals['segment5'])){
				
				$this->segment5 = $vals['segment5'];
			}
			
			
			if (isset($vals['segment6'])){
				
				$this->segment6 = $vals['segment6'];
			}
			
			
			if (isset($vals['segment7'])){
				
				$this->segment7 = $vals['segment7'];
			}
			
			
			if (isset($vals['segment8'])){
				
				$this->segment8 = $vals['segment8'];
			}
			
			
			if (isset($vals['segment9'])){
				
				$this->segment9 = $vals['segment9'];
			}
			
			
			if (isset($vals['segment10'])){
				
				$this->segment10 = $vals['segment10'];
			}
			
			
			if (isset($vals['segment11'])){
				
				$this->segment11 = $vals['segment11'];
			}
			
			
			if (isset($vals['segment12'])){
				
				$this->segment12 = $vals['segment12'];
			}
			
			
			if (isset($vals['segment13'])){
				
				$this->segment13 = $vals['segment13'];
			}
			
			
			if (isset($vals['segment14'])){
				
				$this->segment14 = $vals['segment14'];
			}
			
			
			if (isset($vals['segment15'])){
				
				$this->segment15 = $vals['segment15'];
			}
			
			
			if (isset($vals['segment16'])){
				
				$this->segment16 = $vals['segment16'];
			}
			
			
			if (isset($vals['segment17'])){
				
				$this->segment17 = $vals['segment17'];
			}
			
			
			if (isset($vals['segment18'])){
				
				$this->segment18 = $vals['segment18'];
			}
			
			
			if (isset($vals['segment19'])){
				
				$this->segment19 = $vals['segment19'];
			}
			
			
			if (isset($vals['segment20'])){
				
				$this->segment20 = $vals['segment20'];
			}
			
			
			if (isset($vals['attributeCategory'])){
				
				$this->attributeCategory = $vals['attributeCategory'];
			}
			
			
			if (isset($vals['attribute1'])){
				
				$this->attribute1 = $vals['attribute1'];
			}
			
			
			if (isset($vals['attribute2'])){
				
				$this->attribute2 = $vals['attribute2'];
			}
			
			
			if (isset($vals['attribute3'])){
				
				$this->attribute3 = $vals['attribute3'];
			}
			
			
			if (isset($vals['attribute4'])){
				
				$this->attribute4 = $vals['attribute4'];
			}
			
			
			if (isset($vals['attribute5'])){
				
				$this->attribute5 = $vals['attribute5'];
			}
			
			
			if (isset($vals['attribute6'])){
				
				$this->attribute6 = $vals['attribute6'];
			}
			
			
			if (isset($vals['attribute7'])){
				
				$this->attribute7 = $vals['attribute7'];
			}
			
			
			if (isset($vals['attribute8'])){
				
				$this->attribute8 = $vals['attribute8'];
			}
			
			
			if (isset($vals['attribute9'])){
				
				$this->attribute9 = $vals['attribute9'];
			}
			
			
			if (isset($vals['attribute10'])){
				
				$this->attribute10 = $vals['attribute10'];
			}
			
			
			if (isset($vals['creationDate'])){
				
				$this->creationDate = $vals['creationDate'];
			}
			
			
			if (isset($vals['createdBy'])){
				
				$this->createdBy = $vals['createdBy'];
			}
			
			
			if (isset($vals['lastUpdatedBy'])){
				
				$this->lastUpdatedBy = $vals['lastUpdatedBy'];
			}
			
			
			if (isset($vals['lastUpdateDate'])){
				
				$this->lastUpdateDate = $vals['lastUpdateDate'];
			}
			
			
			if (isset($vals['lastUpdateLogin'])){
				
				$this->lastUpdateLogin = $vals['lastUpdateLogin'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorSiteId'])){
				
				$this->vendorSiteId = $vals['vendorSiteId'];
			}
			
			
			if (isset($vals['vendorContact'])){
				
				$this->vendorContact = $vals['vendorContact'];
			}
			
			
			if (isset($vals['vendorBank'])){
				
				$this->vendorBank = $vals['vendorBank'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApVendorFrvisModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendorSeqId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorSeqId);
				
			}
			
			
			
			
			if ("sourceCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceCode);
				
			}
			
			
			
			
			if ("processFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processFlag);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vatRegistrationNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vatRegistrationNum);
				
			}
			
			
			
			
			if ("goodCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodCategory);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("sellingMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sellingMode);
				
			}
			
			
			
			
			if ("existReturnRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->existReturnRate);
				
			}
			
			
			
			
			if ("department" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->department);
				
			}
			
			
			
			
			if ("payType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payType);
				
			}
			
			
			
			
			if ("tBillStartDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tBillStartDate);
				
			}
			
			
			
			
			if ("monthlyDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->monthlyDate);
				
			}
			
			
			
			
			if ("actionCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->actionCode);
				
			}
			
			
			
			
			if ("vendorSiteCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorSiteCode);
				
			}
			
			
			
			
			if ("progressPayRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->progressPayRate);
				
			}
			
			
			
			
			if ("paymentTerm" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentTerm);
				
			}
			
			
			
			
			if ("isShipSale" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isShipSale);
				
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
			
			
			
			
			if ("officeAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officeAddress);
				
			}
			
			
			
			
			if ("officePhone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->officePhone);
				
			}
			
			
			
			
			if ("segment1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment1);
				
			}
			
			
			
			
			if ("segment2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment2);
				
			}
			
			
			
			
			if ("segment3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment3);
				
			}
			
			
			
			
			if ("segment4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment4);
				
			}
			
			
			
			
			if ("segment5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment5);
				
			}
			
			
			
			
			if ("segment6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment6);
				
			}
			
			
			
			
			if ("segment7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment7);
				
			}
			
			
			
			
			if ("segment8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment8);
				
			}
			
			
			
			
			if ("segment9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment9);
				
			}
			
			
			
			
			if ("segment10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment10);
				
			}
			
			
			
			
			if ("segment11" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment11);
				
			}
			
			
			
			
			if ("segment12" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment12);
				
			}
			
			
			
			
			if ("segment13" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment13);
				
			}
			
			
			
			
			if ("segment14" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment14);
				
			}
			
			
			
			
			if ("segment15" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment15);
				
			}
			
			
			
			
			if ("segment16" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment16);
				
			}
			
			
			
			
			if ("segment17" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment17);
				
			}
			
			
			
			
			if ("segment18" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment18);
				
			}
			
			
			
			
			if ("segment19" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment19);
				
			}
			
			
			
			
			if ("segment20" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->segment20);
				
			}
			
			
			
			
			if ("attributeCategory" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attributeCategory);
				
			}
			
			
			
			
			if ("attribute1" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute1);
				
			}
			
			
			
			
			if ("attribute2" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute2);
				
			}
			
			
			
			
			if ("attribute3" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute3);
				
			}
			
			
			
			
			if ("attribute4" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute4);
				
			}
			
			
			
			
			if ("attribute5" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute5);
				
			}
			
			
			
			
			if ("attribute6" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute6);
				
			}
			
			
			
			
			if ("attribute7" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute7);
				
			}
			
			
			
			
			if ("attribute8" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute8);
				
			}
			
			
			
			
			if ("attribute9" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute9);
				
			}
			
			
			
			
			if ("attribute10" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute10);
				
			}
			
			
			
			
			if ("creationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->creationDate);
				
			}
			
			
			
			
			if ("createdBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createdBy); 
				
			}
			
			
			
			
			if ("lastUpdatedBy" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdatedBy); 
				
			}
			
			
			
			
			if ("lastUpdateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateDate);
				
			}
			
			
			
			
			if ("lastUpdateLogin" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastUpdateLogin); 
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorSiteId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorSiteId); 
				
			}
			
			
			
			
			if ("vendorContact" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorContact = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorContactFrvisModel();
						$elem0->read($input);
						
						$this->vendorContact[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("vendorBank" == $schemeField){
				
				$needSkip = false;
				
				$this->vendorBank = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\fcs\osp\ebs\ap\service\ApVendorBankFrvisModel();
						$elem1->read($input);
						
						$this->vendorBank[$_size1++] = $elem1;
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
		
		$xfer += $output->writeFieldBegin('vendorSeqId');
		$xfer += $output->writeString($this->vendorSeqId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceCode');
		$xfer += $output->writeString($this->sourceCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->processFlag !== null) {
			
			$xfer += $output->writeFieldBegin('processFlag');
			$xfer += $output->writeString($this->processFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorName');
		$xfer += $output->writeString($this->vendorName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vatRegistrationNum !== null) {
			
			$xfer += $output->writeFieldBegin('vatRegistrationNum');
			$xfer += $output->writeString($this->vatRegistrationNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodCategory !== null) {
			
			$xfer += $output->writeFieldBegin('goodCategory');
			$xfer += $output->writeString($this->goodCategory);
			
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
		
		
		if($this->existReturnRate !== null) {
			
			$xfer += $output->writeFieldBegin('existReturnRate');
			$xfer += $output->writeString($this->existReturnRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->department !== null) {
			
			$xfer += $output->writeFieldBegin('department');
			$xfer += $output->writeString($this->department);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payType !== null) {
			
			$xfer += $output->writeFieldBegin('payType');
			$xfer += $output->writeString($this->payType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tBillStartDate !== null) {
			
			$xfer += $output->writeFieldBegin('tBillStartDate');
			$xfer += $output->writeString($this->tBillStartDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->monthlyDate !== null) {
			
			$xfer += $output->writeFieldBegin('monthlyDate');
			$xfer += $output->writeString($this->monthlyDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actionCode !== null) {
			
			$xfer += $output->writeFieldBegin('actionCode');
			$xfer += $output->writeString($this->actionCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSiteCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSiteCode');
			$xfer += $output->writeString($this->vendorSiteCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->progressPayRate !== null) {
			
			$xfer += $output->writeFieldBegin('progressPayRate');
			$xfer += $output->writeString($this->progressPayRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentTerm !== null) {
			
			$xfer += $output->writeFieldBegin('paymentTerm');
			$xfer += $output->writeString($this->paymentTerm);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShipSale !== null) {
			
			$xfer += $output->writeFieldBegin('isShipSale');
			$xfer += $output->writeString($this->isShipSale);
			
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
		
		
		if($this->officeAddress !== null) {
			
			$xfer += $output->writeFieldBegin('officeAddress');
			$xfer += $output->writeString($this->officeAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->officePhone !== null) {
			
			$xfer += $output->writeFieldBegin('officePhone');
			$xfer += $output->writeString($this->officePhone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment1 !== null) {
			
			$xfer += $output->writeFieldBegin('segment1');
			$xfer += $output->writeString($this->segment1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment2 !== null) {
			
			$xfer += $output->writeFieldBegin('segment2');
			$xfer += $output->writeString($this->segment2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment3 !== null) {
			
			$xfer += $output->writeFieldBegin('segment3');
			$xfer += $output->writeString($this->segment3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment4 !== null) {
			
			$xfer += $output->writeFieldBegin('segment4');
			$xfer += $output->writeString($this->segment4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment5 !== null) {
			
			$xfer += $output->writeFieldBegin('segment5');
			$xfer += $output->writeString($this->segment5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment6 !== null) {
			
			$xfer += $output->writeFieldBegin('segment6');
			$xfer += $output->writeString($this->segment6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment7 !== null) {
			
			$xfer += $output->writeFieldBegin('segment7');
			$xfer += $output->writeString($this->segment7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment8 !== null) {
			
			$xfer += $output->writeFieldBegin('segment8');
			$xfer += $output->writeString($this->segment8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment9 !== null) {
			
			$xfer += $output->writeFieldBegin('segment9');
			$xfer += $output->writeString($this->segment9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment10 !== null) {
			
			$xfer += $output->writeFieldBegin('segment10');
			$xfer += $output->writeString($this->segment10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment11 !== null) {
			
			$xfer += $output->writeFieldBegin('segment11');
			$xfer += $output->writeString($this->segment11);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment12 !== null) {
			
			$xfer += $output->writeFieldBegin('segment12');
			$xfer += $output->writeString($this->segment12);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment13 !== null) {
			
			$xfer += $output->writeFieldBegin('segment13');
			$xfer += $output->writeString($this->segment13);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment14 !== null) {
			
			$xfer += $output->writeFieldBegin('segment14');
			$xfer += $output->writeString($this->segment14);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment15 !== null) {
			
			$xfer += $output->writeFieldBegin('segment15');
			$xfer += $output->writeString($this->segment15);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment16 !== null) {
			
			$xfer += $output->writeFieldBegin('segment16');
			$xfer += $output->writeString($this->segment16);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment17 !== null) {
			
			$xfer += $output->writeFieldBegin('segment17');
			$xfer += $output->writeString($this->segment17);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment18 !== null) {
			
			$xfer += $output->writeFieldBegin('segment18');
			$xfer += $output->writeString($this->segment18);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment19 !== null) {
			
			$xfer += $output->writeFieldBegin('segment19');
			$xfer += $output->writeString($this->segment19);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->segment20 !== null) {
			
			$xfer += $output->writeFieldBegin('segment20');
			$xfer += $output->writeString($this->segment20);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeCategory !== null) {
			
			$xfer += $output->writeFieldBegin('attributeCategory');
			$xfer += $output->writeString($this->attributeCategory);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute1 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute1');
			$xfer += $output->writeString($this->attribute1);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute2 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute2');
			$xfer += $output->writeString($this->attribute2);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute3 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute3');
			$xfer += $output->writeString($this->attribute3);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute4 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute4');
			$xfer += $output->writeString($this->attribute4);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute5 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute5');
			$xfer += $output->writeString($this->attribute5);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute6 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute6');
			$xfer += $output->writeString($this->attribute6);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute7 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute7');
			$xfer += $output->writeString($this->attribute7);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute8 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute8');
			$xfer += $output->writeString($this->attribute8);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute9 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute9');
			$xfer += $output->writeString($this->attribute9);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute10 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute10');
			$xfer += $output->writeString($this->attribute10);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationDate !== null) {
			
			$xfer += $output->writeFieldBegin('creationDate');
			$xfer += $output->writeI64($this->creationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createdBy !== null) {
			
			$xfer += $output->writeFieldBegin('createdBy');
			$xfer += $output->writeI64($this->createdBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdatedBy !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdatedBy');
			$xfer += $output->writeI64($this->lastUpdatedBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateDate !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateDate');
			$xfer += $output->writeI64($this->lastUpdateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastUpdateLogin !== null) {
			
			$xfer += $output->writeFieldBegin('lastUpdateLogin');
			$xfer += $output->writeI64($this->lastUpdateLogin);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeI64($this->requestId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorSiteId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorSiteId');
			$xfer += $output->writeI64($this->vendorSiteId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorContact !== null) {
			
			$xfer += $output->writeFieldBegin('vendorContact');
			
			if (!is_array($this->vendorContact)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorContact as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorBank !== null) {
			
			$xfer += $output->writeFieldBegin('vendorBank');
			
			if (!is_array($this->vendorBank)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->vendorBank as $iter0){
				
				
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