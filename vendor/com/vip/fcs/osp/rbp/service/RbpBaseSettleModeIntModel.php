<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseSettleModeIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $settleModeName = null;
	public $settleCode = null;
	public $companyCode = null;
	public $standardCode = null;
	public $processMethodCode = null;
	public $disassembleFlag = null;
	public $writeFlag = null;
	public $hasTaxFlag = null;
	public $taxCode = null;
	public $taxRate = null;
	public $leastFlag = null;
	public $payPlanFlag = null;
	public $settleModeDesc = null;
	public $enableFlag = null;
	public $chargeTimeFlag = null;
	public $anniversaryFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'settleModeName'
			),
			3 => array(
			'var' => 'settleCode'
			),
			4 => array(
			'var' => 'companyCode'
			),
			5 => array(
			'var' => 'standardCode'
			),
			6 => array(
			'var' => 'processMethodCode'
			),
			7 => array(
			'var' => 'disassembleFlag'
			),
			8 => array(
			'var' => 'writeFlag'
			),
			9 => array(
			'var' => 'hasTaxFlag'
			),
			10 => array(
			'var' => 'taxCode'
			),
			11 => array(
			'var' => 'taxRate'
			),
			12 => array(
			'var' => 'leastFlag'
			),
			13 => array(
			'var' => 'payPlanFlag'
			),
			14 => array(
			'var' => 'settleModeDesc'
			),
			15 => array(
			'var' => 'enableFlag'
			),
			16 => array(
			'var' => 'chargeTimeFlag'
			),
			17 => array(
			'var' => 'anniversaryFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['settleModeName'])){
				
				$this->settleModeName = $vals['settleModeName'];
			}
			
			
			if (isset($vals['settleCode'])){
				
				$this->settleCode = $vals['settleCode'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['standardCode'])){
				
				$this->standardCode = $vals['standardCode'];
			}
			
			
			if (isset($vals['processMethodCode'])){
				
				$this->processMethodCode = $vals['processMethodCode'];
			}
			
			
			if (isset($vals['disassembleFlag'])){
				
				$this->disassembleFlag = $vals['disassembleFlag'];
			}
			
			
			if (isset($vals['writeFlag'])){
				
				$this->writeFlag = $vals['writeFlag'];
			}
			
			
			if (isset($vals['hasTaxFlag'])){
				
				$this->hasTaxFlag = $vals['hasTaxFlag'];
			}
			
			
			if (isset($vals['taxCode'])){
				
				$this->taxCode = $vals['taxCode'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['leastFlag'])){
				
				$this->leastFlag = $vals['leastFlag'];
			}
			
			
			if (isset($vals['payPlanFlag'])){
				
				$this->payPlanFlag = $vals['payPlanFlag'];
			}
			
			
			if (isset($vals['settleModeDesc'])){
				
				$this->settleModeDesc = $vals['settleModeDesc'];
			}
			
			
			if (isset($vals['enableFlag'])){
				
				$this->enableFlag = $vals['enableFlag'];
			}
			
			
			if (isset($vals['chargeTimeFlag'])){
				
				$this->chargeTimeFlag = $vals['chargeTimeFlag'];
			}
			
			
			if (isset($vals['anniversaryFlag'])){
				
				$this->anniversaryFlag = $vals['anniversaryFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseSettleModeIntModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("settleModeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleModeName);
				
			}
			
			
			
			
			if ("settleCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleCode);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("standardCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->standardCode);
				
			}
			
			
			
			
			if ("processMethodCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->processMethodCode);
				
			}
			
			
			
			
			if ("disassembleFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->disassembleFlag);
				
			}
			
			
			
			
			if ("writeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->writeFlag);
				
			}
			
			
			
			
			if ("hasTaxFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->hasTaxFlag);
				
			}
			
			
			
			
			if ("taxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxCode);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("leastFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leastFlag);
				
			}
			
			
			
			
			if ("payPlanFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payPlanFlag);
				
			}
			
			
			
			
			if ("settleModeDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleModeDesc);
				
			}
			
			
			
			
			if ("enableFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableFlag);
				
			}
			
			
			
			
			if ("chargeTimeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chargeTimeFlag);
				
			}
			
			
			
			
			if ("anniversaryFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->anniversaryFlag);
				
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
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleModeName !== null) {
			
			$xfer += $output->writeFieldBegin('settleModeName');
			$xfer += $output->writeString($this->settleModeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleCode !== null) {
			
			$xfer += $output->writeFieldBegin('settleCode');
			$xfer += $output->writeString($this->settleCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->standardCode !== null) {
			
			$xfer += $output->writeFieldBegin('standardCode');
			$xfer += $output->writeString($this->standardCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->processMethodCode !== null) {
			
			$xfer += $output->writeFieldBegin('processMethodCode');
			$xfer += $output->writeString($this->processMethodCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->disassembleFlag !== null) {
			
			$xfer += $output->writeFieldBegin('disassembleFlag');
			$xfer += $output->writeString($this->disassembleFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->writeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('writeFlag');
			$xfer += $output->writeString($this->writeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->hasTaxFlag !== null) {
			
			$xfer += $output->writeFieldBegin('hasTaxFlag');
			$xfer += $output->writeString($this->hasTaxFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxCode');
			$xfer += $output->writeString($this->taxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leastFlag !== null) {
			
			$xfer += $output->writeFieldBegin('leastFlag');
			$xfer += $output->writeString($this->leastFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payPlanFlag !== null) {
			
			$xfer += $output->writeFieldBegin('payPlanFlag');
			$xfer += $output->writeString($this->payPlanFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleModeDesc !== null) {
			
			$xfer += $output->writeFieldBegin('settleModeDesc');
			$xfer += $output->writeString($this->settleModeDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enableFlag');
			$xfer += $output->writeString($this->enableFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeTimeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('chargeTimeFlag');
			$xfer += $output->writeString($this->chargeTimeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->anniversaryFlag !== null) {
			
			$xfer += $output->writeFieldBegin('anniversaryFlag');
			$xfer += $output->writeString($this->anniversaryFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>