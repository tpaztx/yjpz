<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApVendorContactFrvisModel {
	
	static $_TSPEC;
	public $vendorSeqId = null;
	public $sourceCode = null;
	public $vendorCode = null;
	public $contactId = null;
	public $department = null;
	public $contactName = null;
	public $areaCode = null;
	public $phone = null;
	public $emailAddress = null;
	public $invalidDate = null;
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
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'contactId'
			),
			5 => array(
			'var' => 'department'
			),
			6 => array(
			'var' => 'contactName'
			),
			7 => array(
			'var' => 'areaCode'
			),
			8 => array(
			'var' => 'phone'
			),
			9 => array(
			'var' => 'emailAddress'
			),
			10 => array(
			'var' => 'invalidDate'
			),
			11 => array(
			'var' => 'segment1'
			),
			12 => array(
			'var' => 'segment2'
			),
			13 => array(
			'var' => 'segment3'
			),
			14 => array(
			'var' => 'segment4'
			),
			15 => array(
			'var' => 'segment5'
			),
			16 => array(
			'var' => 'segment6'
			),
			17 => array(
			'var' => 'segment7'
			),
			18 => array(
			'var' => 'segment8'
			),
			19 => array(
			'var' => 'segment9'
			),
			20 => array(
			'var' => 'segment10'
			),
			21 => array(
			'var' => 'segment11'
			),
			22 => array(
			'var' => 'segment12'
			),
			23 => array(
			'var' => 'segment13'
			),
			24 => array(
			'var' => 'segment14'
			),
			25 => array(
			'var' => 'segment15'
			),
			26 => array(
			'var' => 'segment16'
			),
			27 => array(
			'var' => 'segment17'
			),
			28 => array(
			'var' => 'segment18'
			),
			29 => array(
			'var' => 'segment19'
			),
			30 => array(
			'var' => 'segment20'
			),
			31 => array(
			'var' => 'attributeCategory'
			),
			32 => array(
			'var' => 'attribute1'
			),
			33 => array(
			'var' => 'attribute2'
			),
			34 => array(
			'var' => 'attribute3'
			),
			35 => array(
			'var' => 'attribute4'
			),
			36 => array(
			'var' => 'attribute5'
			),
			37 => array(
			'var' => 'attribute6'
			),
			38 => array(
			'var' => 'attribute7'
			),
			39 => array(
			'var' => 'attribute8'
			),
			40 => array(
			'var' => 'attribute9'
			),
			41 => array(
			'var' => 'attribute10'
			),
			42 => array(
			'var' => 'creationDate'
			),
			43 => array(
			'var' => 'createdBy'
			),
			44 => array(
			'var' => 'lastUpdatedBy'
			),
			45 => array(
			'var' => 'lastUpdateDate'
			),
			46 => array(
			'var' => 'lastUpdateLogin'
			),
			47 => array(
			'var' => 'requestId'
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
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['contactId'])){
				
				$this->contactId = $vals['contactId'];
			}
			
			
			if (isset($vals['department'])){
				
				$this->department = $vals['department'];
			}
			
			
			if (isset($vals['contactName'])){
				
				$this->contactName = $vals['contactName'];
			}
			
			
			if (isset($vals['areaCode'])){
				
				$this->areaCode = $vals['areaCode'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['emailAddress'])){
				
				$this->emailAddress = $vals['emailAddress'];
			}
			
			
			if (isset($vals['invalidDate'])){
				
				$this->invalidDate = $vals['invalidDate'];
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
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApVendorContactFrvisModel';
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
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("contactId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactId);
				
			}
			
			
			
			
			if ("department" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->department);
				
			}
			
			
			
			
			if ("contactName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contactName);
				
			}
			
			
			
			
			if ("areaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->areaCode);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("emailAddress" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->emailAddress);
				
			}
			
			
			
			
			if ("invalidDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invalidDate);
				
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
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contactId');
		$xfer += $output->writeString($this->contactId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('department');
		$xfer += $output->writeString($this->department);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('contactName');
		$xfer += $output->writeString($this->contactName);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		if($this->emailAddress !== null) {
			
			$xfer += $output->writeFieldBegin('emailAddress');
			$xfer += $output->writeString($this->emailAddress);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invalidDate !== null) {
			
			$xfer += $output->writeFieldBegin('invalidDate');
			$xfer += $output->writeString($this->invalidDate);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>