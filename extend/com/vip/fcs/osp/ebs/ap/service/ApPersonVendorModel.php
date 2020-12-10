<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\ap\service;

class ApPersonVendorModel {
	
	static $_TSPEC;
	public $personVendorId = null;
	public $batchNumber = null;
	public $psEmployeeId = null;
	public $fullName = null;
	public $employeeNum = null;
	public $hireDate = null;
	public $sex = null;
	public $type = null;
	public $employeeId = null;
	public $vendorId = null;
	public $processGroupId = null;
	public $processStatus = null;
	public $processDate = null;
	public $processMessage = null;
	public $creationDate = null;
	public $createdBy = null;
	public $lastUpdatedBy = null;
	public $lastUpdateDate = null;
	public $lastUpdateLogin = null;
	public $programApplicationId = null;
	public $programId = null;
	public $programUpdateDate = null;
	public $requestId = null;
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
	public $attribute11 = null;
	public $attribute12 = null;
	public $attribute13 = null;
	public $attribute14 = null;
	public $attribute15 = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'personVendorId'
			),
			2 => array(
			'var' => 'batchNumber'
			),
			3 => array(
			'var' => 'psEmployeeId'
			),
			4 => array(
			'var' => 'fullName'
			),
			5 => array(
			'var' => 'employeeNum'
			),
			6 => array(
			'var' => 'hireDate'
			),
			7 => array(
			'var' => 'sex'
			),
			8 => array(
			'var' => 'type'
			),
			9 => array(
			'var' => 'employeeId'
			),
			10 => array(
			'var' => 'vendorId'
			),
			11 => array(
			'var' => 'processGroupId'
			),
			12 => array(
			'var' => 'processStatus'
			),
			13 => array(
			'var' => 'processDate'
			),
			14 => array(
			'var' => 'processMessage'
			),
			15 => array(
			'var' => 'creationDate'
			),
			16 => array(
			'var' => 'createdBy'
			),
			17 => array(
			'var' => 'lastUpdatedBy'
			),
			18 => array(
			'var' => 'lastUpdateDate'
			),
			19 => array(
			'var' => 'lastUpdateLogin'
			),
			20 => array(
			'var' => 'programApplicationId'
			),
			21 => array(
			'var' => 'programId'
			),
			22 => array(
			'var' => 'programUpdateDate'
			),
			23 => array(
			'var' => 'requestId'
			),
			24 => array(
			'var' => 'attributeCategory'
			),
			25 => array(
			'var' => 'attribute1'
			),
			26 => array(
			'var' => 'attribute2'
			),
			27 => array(
			'var' => 'attribute3'
			),
			28 => array(
			'var' => 'attribute4'
			),
			29 => array(
			'var' => 'attribute5'
			),
			30 => array(
			'var' => 'attribute6'
			),
			31 => array(
			'var' => 'attribute7'
			),
			32 => array(
			'var' => 'attribute8'
			),
			33 => array(
			'var' => 'attribute9'
			),
			34 => array(
			'var' => 'attribute10'
			),
			35 => array(
			'var' => 'attribute11'
			),
			36 => array(
			'var' => 'attribute12'
			),
			37 => array(
			'var' => 'attribute13'
			),
			38 => array(
			'var' => 'attribute14'
			),
			39 => array(
			'var' => 'attribute15'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['personVendorId'])){
				
				$this->personVendorId = $vals['personVendorId'];
			}
			
			
			if (isset($vals['batchNumber'])){
				
				$this->batchNumber = $vals['batchNumber'];
			}
			
			
			if (isset($vals['psEmployeeId'])){
				
				$this->psEmployeeId = $vals['psEmployeeId'];
			}
			
			
			if (isset($vals['fullName'])){
				
				$this->fullName = $vals['fullName'];
			}
			
			
			if (isset($vals['employeeNum'])){
				
				$this->employeeNum = $vals['employeeNum'];
			}
			
			
			if (isset($vals['hireDate'])){
				
				$this->hireDate = $vals['hireDate'];
			}
			
			
			if (isset($vals['sex'])){
				
				$this->sex = $vals['sex'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['employeeId'])){
				
				$this->employeeId = $vals['employeeId'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['processGroupId'])){
				
				$this->processGroupId = $vals['processGroupId'];
			}
			
			
			if (isset($vals['processStatus'])){
				
				$this->processStatus = $vals['processStatus'];
			}
			
			
			if (isset($vals['processDate'])){
				
				$this->processDate = $vals['processDate'];
			}
			
			
			if (isset($vals['processMessage'])){
				
				$this->processMessage = $vals['processMessage'];
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
			
			
			if (isset($vals['programApplicationId'])){
				
				$this->programApplicationId = $vals['programApplicationId'];
			}
			
			
			if (isset($vals['programId'])){
				
				$this->programId = $vals['programId'];
			}
			
			
			if (isset($vals['programUpdateDate'])){
				
				$this->programUpdateDate = $vals['programUpdateDate'];
			}
			
			
			if (isset($vals['requestId'])){
				
				$this->requestId = $vals['requestId'];
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
			
			
			if (isset($vals['attribute11'])){
				
				$this->attribute11 = $vals['attribute11'];
			}
			
			
			if (isset($vals['attribute12'])){
				
				$this->attribute12 = $vals['attribute12'];
			}
			
			
			if (isset($vals['attribute13'])){
				
				$this->attribute13 = $vals['attribute13'];
			}
			
			
			if (isset($vals['attribute14'])){
				
				$this->attribute14 = $vals['attribute14'];
			}
			
			
			if (isset($vals['attribute15'])){
				
				$this->attribute15 = $vals['attribute15'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ApPersonVendorModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("personVendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->personVendorId); 
				
			}
			
			
			
			
			if ("batchNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNumber);
				
			}
			
			
			
			
			if ("psEmployeeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->psEmployeeId); 
				
			}
			
			
			
			
			if ("fullName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fullName);
				
			}
			
			
			
			
			if ("employeeNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->employeeNum);
				
			}
			
			
			
			
			if ("hireDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->hireDate);
				
			}
			
			
			
			
			if ("sex" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sex);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("employeeId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->employeeId); 
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->vendorId); 
				
			}
			
			
			
			
			if ("processGroupId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->processGroupId); 
				
			}
			
			
			
			
			if ("processStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processStatus);
				
			}
			
			
			
			
			if ("processDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->processDate);
				
			}
			
			
			
			
			if ("processMessage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processMessage);
				
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
			
			
			
			
			if ("programApplicationId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->programApplicationId); 
				
			}
			
			
			
			
			if ("programId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->programId); 
				
			}
			
			
			
			
			if ("programUpdateDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->programUpdateDate);
				
			}
			
			
			
			
			if ("requestId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->requestId); 
				
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
			
			
			
			
			if ("attribute11" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute11);
				
			}
			
			
			
			
			if ("attribute12" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute12);
				
			}
			
			
			
			
			if ("attribute13" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute13);
				
			}
			
			
			
			
			if ("attribute14" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute14);
				
			}
			
			
			
			
			if ("attribute15" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->attribute15);
				
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
		
		if($this->personVendorId !== null) {
			
			$xfer += $output->writeFieldBegin('personVendorId');
			$xfer += $output->writeI64($this->personVendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('batchNumber');
		$xfer += $output->writeString($this->batchNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('psEmployeeId');
		$xfer += $output->writeI64($this->psEmployeeId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('fullName');
		$xfer += $output->writeString($this->fullName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('employeeNum');
		$xfer += $output->writeString($this->employeeNum);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hireDate');
		$xfer += $output->writeI64($this->hireDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sex');
		$xfer += $output->writeString($this->sex);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		$xfer += $output->writeString($this->type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->employeeId !== null) {
			
			$xfer += $output->writeFieldBegin('employeeId');
			$xfer += $output->writeI64($this->employeeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI64($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processGroupId !== null) {
			
			$xfer += $output->writeFieldBegin('processGroupId');
			$xfer += $output->writeI64($this->processGroupId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processStatus !== null) {
			
			$xfer += $output->writeFieldBegin('processStatus');
			$xfer += $output->writeString($this->processStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processDate !== null) {
			
			$xfer += $output->writeFieldBegin('processDate');
			$xfer += $output->writeI64($this->processDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processMessage !== null) {
			
			$xfer += $output->writeFieldBegin('processMessage');
			$xfer += $output->writeString($this->processMessage);
			
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
		
		
		if($this->programApplicationId !== null) {
			
			$xfer += $output->writeFieldBegin('programApplicationId');
			$xfer += $output->writeI64($this->programApplicationId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->programId !== null) {
			
			$xfer += $output->writeFieldBegin('programId');
			$xfer += $output->writeI64($this->programId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->programUpdateDate !== null) {
			
			$xfer += $output->writeFieldBegin('programUpdateDate');
			$xfer += $output->writeI64($this->programUpdateDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->requestId !== null) {
			
			$xfer += $output->writeFieldBegin('requestId');
			$xfer += $output->writeI64($this->requestId);
			
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
		
		
		if($this->attribute11 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute11');
			$xfer += $output->writeString($this->attribute11);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute12 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute12');
			$xfer += $output->writeString($this->attribute12);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute13 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute13');
			$xfer += $output->writeString($this->attribute13);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute14 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute14');
			$xfer += $output->writeString($this->attribute14);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attribute15 !== null) {
			
			$xfer += $output->writeFieldBegin('attribute15');
			$xfer += $output->writeString($this->attribute15);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>