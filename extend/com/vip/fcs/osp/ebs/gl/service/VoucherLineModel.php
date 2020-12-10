<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\ebs\gl\service;

class VoucherLineModel {
	
	static $_TSPEC;
	public $srcLineId = null;
	public $segment1 = null;
	public $segment2 = null;
	public $segment3 = null;
	public $segment4 = null;
	public $segment5 = null;
	public $segment6 = null;
	public $enteredAmount = null;
	public $accountedAmount = null;
	public $crDr = null;
	public $lineDesc = null;
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
			'var' => 'srcLineId'
			),
			2 => array(
			'var' => 'segment1'
			),
			3 => array(
			'var' => 'segment2'
			),
			4 => array(
			'var' => 'segment3'
			),
			5 => array(
			'var' => 'segment4'
			),
			6 => array(
			'var' => 'segment5'
			),
			7 => array(
			'var' => 'segment6'
			),
			8 => array(
			'var' => 'enteredAmount'
			),
			9 => array(
			'var' => 'accountedAmount'
			),
			10 => array(
			'var' => 'crDr'
			),
			11 => array(
			'var' => 'lineDesc'
			),
			12 => array(
			'var' => 'processStatus'
			),
			13 => array(
			'var' => 'attribute1'
			),
			14 => array(
			'var' => 'attribute2'
			),
			15 => array(
			'var' => 'attribute3'
			),
			16 => array(
			'var' => 'attribute4'
			),
			17 => array(
			'var' => 'attribute5'
			),
			18 => array(
			'var' => 'attribute6'
			),
			19 => array(
			'var' => 'attribute7'
			),
			20 => array(
			'var' => 'attribute8'
			),
			21 => array(
			'var' => 'attribute9'
			),
			22 => array(
			'var' => 'attribute10'
			),
			23 => array(
			'var' => 'attribute11'
			),
			24 => array(
			'var' => 'attribute12'
			),
			25 => array(
			'var' => 'attribute13'
			),
			26 => array(
			'var' => 'attribute14'
			),
			27 => array(
			'var' => 'attribute15'
			),
			28 => array(
			'var' => 'context'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['srcLineId'])){
				
				$this->srcLineId = $vals['srcLineId'];
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
			
			
			if (isset($vals['enteredAmount'])){
				
				$this->enteredAmount = $vals['enteredAmount'];
			}
			
			
			if (isset($vals['accountedAmount'])){
				
				$this->accountedAmount = $vals['accountedAmount'];
			}
			
			
			if (isset($vals['crDr'])){
				
				$this->crDr = $vals['crDr'];
			}
			
			
			if (isset($vals['lineDesc'])){
				
				$this->lineDesc = $vals['lineDesc'];
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
		
		return 'VoucherLineModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("srcLineId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->srcLineId);
				
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
			
			
			
			
			if ("enteredAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->enteredAmount);
				
			}
			
			
			
			
			if ("accountedAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->accountedAmount);
				
			}
			
			
			
			
			if ("crDr" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->crDr); 
				
			}
			
			
			
			
			if ("lineDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineDesc);
				
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
		
		$xfer += $output->writeFieldBegin('srcLineId');
		$xfer += $output->writeString($this->srcLineId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment1');
		$xfer += $output->writeString($this->segment1);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment2');
		$xfer += $output->writeString($this->segment2);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment3');
		$xfer += $output->writeString($this->segment3);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment4');
		$xfer += $output->writeString($this->segment4);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment5');
		$xfer += $output->writeString($this->segment5);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('segment6');
		$xfer += $output->writeString($this->segment6);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->enteredAmount !== null) {
			
			$xfer += $output->writeFieldBegin('enteredAmount');
			$xfer += $output->writeDouble($this->enteredAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountedAmount !== null) {
			
			$xfer += $output->writeFieldBegin('accountedAmount');
			$xfer += $output->writeDouble($this->accountedAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('crDr');
		$xfer += $output->writeI32($this->crDr);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->lineDesc !== null) {
			
			$xfer += $output->writeFieldBegin('lineDesc');
			$xfer += $output->writeString($this->lineDesc);
			
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