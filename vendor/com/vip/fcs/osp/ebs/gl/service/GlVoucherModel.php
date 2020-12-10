<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class GlVoucherModel {
	
	static $_TSPEC;
	public $srcHeaderId = null;
	public $batchNumber = null;
	public $batchName = null;
	public $headerName = null;
	public $headerDesc = null;
	public $sourceName = null;
	public $bookId = null;
	public $postFlag = null;
	public $periodName = null;
	public $currencyCode = null;
	public $categoryName = null;
	public $operationCode = null;
	public $creatorEmpNo = null;
	public $creatorName = null;
	public $approverName = null;
	public $postEmpName = null;
	public $accountingDate = null;
	public $currencyDate = null;
	public $glVoucherLine = null;
	public $processStatus = null;
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
	public $context = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'srcHeaderId'
			),
			2 => array(
			'var' => 'batchNumber'
			),
			3 => array(
			'var' => 'batchName'
			),
			4 => array(
			'var' => 'headerName'
			),
			5 => array(
			'var' => 'headerDesc'
			),
			6 => array(
			'var' => 'sourceName'
			),
			7 => array(
			'var' => 'bookId'
			),
			8 => array(
			'var' => 'postFlag'
			),
			9 => array(
			'var' => 'periodName'
			),
			10 => array(
			'var' => 'currencyCode'
			),
			11 => array(
			'var' => 'categoryName'
			),
			12 => array(
			'var' => 'operationCode'
			),
			13 => array(
			'var' => 'creatorEmpNo'
			),
			14 => array(
			'var' => 'creatorName'
			),
			15 => array(
			'var' => 'approverName'
			),
			16 => array(
			'var' => 'postEmpName'
			),
			17 => array(
			'var' => 'accountingDate'
			),
			18 => array(
			'var' => 'currencyDate'
			),
			19 => array(
			'var' => 'glVoucherLine'
			),
			20 => array(
			'var' => 'processStatus'
			),
			21 => array(
			'var' => 'attribute1'
			),
			22 => array(
			'var' => 'attribute2'
			),
			23 => array(
			'var' => 'attribute3'
			),
			24 => array(
			'var' => 'attribute4'
			),
			25 => array(
			'var' => 'attribute5'
			),
			26 => array(
			'var' => 'attribute6'
			),
			27 => array(
			'var' => 'attribute7'
			),
			28 => array(
			'var' => 'attribute8'
			),
			29 => array(
			'var' => 'attribute9'
			),
			30 => array(
			'var' => 'attribute10'
			),
			31 => array(
			'var' => 'attribute11'
			),
			32 => array(
			'var' => 'attribute12'
			),
			33 => array(
			'var' => 'attribute13'
			),
			34 => array(
			'var' => 'attribute14'
			),
			35 => array(
			'var' => 'attribute15'
			),
			36 => array(
			'var' => 'context'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcHeaderId'])){
				
				$this->srcHeaderId = $vals['srcHeaderId'];
			}
			
			
			if (isset($vals['batchNumber'])){
				
				$this->batchNumber = $vals['batchNumber'];
			}
			
			
			if (isset($vals['batchName'])){
				
				$this->batchName = $vals['batchName'];
			}
			
			
			if (isset($vals['headerName'])){
				
				$this->headerName = $vals['headerName'];
			}
			
			
			if (isset($vals['headerDesc'])){
				
				$this->headerDesc = $vals['headerDesc'];
			}
			
			
			if (isset($vals['sourceName'])){
				
				$this->sourceName = $vals['sourceName'];
			}
			
			
			if (isset($vals['bookId'])){
				
				$this->bookId = $vals['bookId'];
			}
			
			
			if (isset($vals['postFlag'])){
				
				$this->postFlag = $vals['postFlag'];
			}
			
			
			if (isset($vals['periodName'])){
				
				$this->periodName = $vals['periodName'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['operationCode'])){
				
				$this->operationCode = $vals['operationCode'];
			}
			
			
			if (isset($vals['creatorEmpNo'])){
				
				$this->creatorEmpNo = $vals['creatorEmpNo'];
			}
			
			
			if (isset($vals['creatorName'])){
				
				$this->creatorName = $vals['creatorName'];
			}
			
			
			if (isset($vals['approverName'])){
				
				$this->approverName = $vals['approverName'];
			}
			
			
			if (isset($vals['postEmpName'])){
				
				$this->postEmpName = $vals['postEmpName'];
			}
			
			
			if (isset($vals['accountingDate'])){
				
				$this->accountingDate = $vals['accountingDate'];
			}
			
			
			if (isset($vals['currencyDate'])){
				
				$this->currencyDate = $vals['currencyDate'];
			}
			
			
			if (isset($vals['glVoucherLine'])){
				
				$this->glVoucherLine = $vals['glVoucherLine'];
			}
			
			
			if (isset($vals['processStatus'])){
				
				$this->processStatus = $vals['processStatus'];
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
			
			
			if (isset($vals['context'])){
				
				$this->context = $vals['context'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GlVoucherModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("srcHeaderId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcHeaderId);
				
			}
			
			
			
			
			if ("batchNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchNumber);
				
			}
			
			
			
			
			if ("batchName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batchName);
				
			}
			
			
			
			
			if ("headerName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerName);
				
			}
			
			
			
			
			if ("headerDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->headerDesc);
				
			}
			
			
			
			
			if ("sourceName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sourceName);
				
			}
			
			
			
			
			if ("bookId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->bookId); 
				
			}
			
			
			
			
			if ("postFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postFlag);
				
			}
			
			
			
			
			if ("periodName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->periodName);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("categoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryName);
				
			}
			
			
			
			
			if ("operationCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->operationCode);
				
			}
			
			
			
			
			if ("creatorEmpNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatorEmpNo);
				
			}
			
			
			
			
			if ("creatorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->creatorName);
				
			}
			
			
			
			
			if ("approverName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approverName);
				
			}
			
			
			
			
			if ("postEmpName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->postEmpName);
				
			}
			
			
			
			
			if ("accountingDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountingDate);
				
			}
			
			
			
			
			if ("currencyDate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyDate);
				
			}
			
			
			
			
			if ("glVoucherLine" == $schemeField){
				
				$needSkip = false;
				
				$this->glVoucherLine = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\fcs\osp\ebs\gl\service\VoucherLineModel();
						$elem0->read($input);
						
						$this->glVoucherLine[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("processStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processStatus);
				
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
			
			
			
			
			if ("context" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->context);
				
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
		
		$xfer += $output->writeFieldBegin('srcHeaderId');
		$xfer += $output->writeString($this->srcHeaderId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchNumber');
		$xfer += $output->writeString($this->batchNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('batchName');
		$xfer += $output->writeString($this->batchName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('headerName');
		$xfer += $output->writeString($this->headerName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('headerDesc');
		$xfer += $output->writeString($this->headerDesc);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sourceName');
		$xfer += $output->writeString($this->sourceName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('bookId');
		$xfer += $output->writeI32($this->bookId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('postFlag');
		$xfer += $output->writeString($this->postFlag);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('periodName');
		$xfer += $output->writeString($this->periodName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('currencyCode');
		$xfer += $output->writeString($this->currencyCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryName');
		$xfer += $output->writeString($this->categoryName);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('operationCode');
		$xfer += $output->writeString($this->operationCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('creatorEmpNo');
		$xfer += $output->writeString($this->creatorEmpNo);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->creatorName !== null) {
			
			$xfer += $output->writeFieldBegin('creatorName');
			$xfer += $output->writeString($this->creatorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approverName !== null) {
			
			$xfer += $output->writeFieldBegin('approverName');
			$xfer += $output->writeString($this->approverName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->postEmpName !== null) {
			
			$xfer += $output->writeFieldBegin('postEmpName');
			$xfer += $output->writeString($this->postEmpName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('accountingDate');
		$xfer += $output->writeString($this->accountingDate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('currencyDate');
		$xfer += $output->writeString($this->currencyDate);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->glVoucherLine !== null) {
			
			$xfer += $output->writeFieldBegin('glVoucherLine');
			
			if (!is_array($this->glVoucherLine)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->glVoucherLine as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processStatus !== null) {
			
			$xfer += $output->writeFieldBegin('processStatus');
			$xfer += $output->writeString($this->processStatus);
			
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
		
		
		if($this->context !== null) {
			
			$xfer += $output->writeFieldBegin('context');
			$xfer += $output->writeString($this->context);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>