<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBasePayTimeIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $payTimeName = null;
	public $companyCode = null;
	public $timeUomCode = null;
	public $paymentResolveFlag = null;
	public $billResolveFlag = null;
	public $payCronExp = null;
	public $payHelpCronExp = null;
	public $billCronExp = null;
	public $billHelpCronExp = null;
	public $enableFlag = null;
	public $payCurrentPeriodOffset = null;
	public $billCurrentPeriodOffset = null;
	public $chargeCronExp = null;
	public $chargeHelpCronExp = null;
	public $chargeCurrentPeriodOffset = null;
	public $resolveLastFlag = null;
	public $payLogicChoice = null;
	public $billLogicChoice = null;
	public $payTimeUomCode = null;
	public $billTimeUomCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'payTimeName'
			),
			3 => array(
			'var' => 'companyCode'
			),
			4 => array(
			'var' => 'timeUomCode'
			),
			5 => array(
			'var' => 'paymentResolveFlag'
			),
			6 => array(
			'var' => 'billResolveFlag'
			),
			7 => array(
			'var' => 'payCronExp'
			),
			8 => array(
			'var' => 'payHelpCronExp'
			),
			9 => array(
			'var' => 'billCronExp'
			),
			10 => array(
			'var' => 'billHelpCronExp'
			),
			11 => array(
			'var' => 'enableFlag'
			),
			12 => array(
			'var' => 'payCurrentPeriodOffset'
			),
			13 => array(
			'var' => 'billCurrentPeriodOffset'
			),
			14 => array(
			'var' => 'chargeCronExp'
			),
			15 => array(
			'var' => 'chargeHelpCronExp'
			),
			16 => array(
			'var' => 'chargeCurrentPeriodOffset'
			),
			17 => array(
			'var' => 'resolveLastFlag'
			),
			18 => array(
			'var' => 'payLogicChoice'
			),
			19 => array(
			'var' => 'billLogicChoice'
			),
			20 => array(
			'var' => 'payTimeUomCode'
			),
			21 => array(
			'var' => 'billTimeUomCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['payTimeName'])){
				
				$this->payTimeName = $vals['payTimeName'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['timeUomCode'])){
				
				$this->timeUomCode = $vals['timeUomCode'];
			}
			
			
			if (isset($vals['paymentResolveFlag'])){
				
				$this->paymentResolveFlag = $vals['paymentResolveFlag'];
			}
			
			
			if (isset($vals['billResolveFlag'])){
				
				$this->billResolveFlag = $vals['billResolveFlag'];
			}
			
			
			if (isset($vals['payCronExp'])){
				
				$this->payCronExp = $vals['payCronExp'];
			}
			
			
			if (isset($vals['payHelpCronExp'])){
				
				$this->payHelpCronExp = $vals['payHelpCronExp'];
			}
			
			
			if (isset($vals['billCronExp'])){
				
				$this->billCronExp = $vals['billCronExp'];
			}
			
			
			if (isset($vals['billHelpCronExp'])){
				
				$this->billHelpCronExp = $vals['billHelpCronExp'];
			}
			
			
			if (isset($vals['enableFlag'])){
				
				$this->enableFlag = $vals['enableFlag'];
			}
			
			
			if (isset($vals['payCurrentPeriodOffset'])){
				
				$this->payCurrentPeriodOffset = $vals['payCurrentPeriodOffset'];
			}
			
			
			if (isset($vals['billCurrentPeriodOffset'])){
				
				$this->billCurrentPeriodOffset = $vals['billCurrentPeriodOffset'];
			}
			
			
			if (isset($vals['chargeCronExp'])){
				
				$this->chargeCronExp = $vals['chargeCronExp'];
			}
			
			
			if (isset($vals['chargeHelpCronExp'])){
				
				$this->chargeHelpCronExp = $vals['chargeHelpCronExp'];
			}
			
			
			if (isset($vals['chargeCurrentPeriodOffset'])){
				
				$this->chargeCurrentPeriodOffset = $vals['chargeCurrentPeriodOffset'];
			}
			
			
			if (isset($vals['resolveLastFlag'])){
				
				$this->resolveLastFlag = $vals['resolveLastFlag'];
			}
			
			
			if (isset($vals['payLogicChoice'])){
				
				$this->payLogicChoice = $vals['payLogicChoice'];
			}
			
			
			if (isset($vals['billLogicChoice'])){
				
				$this->billLogicChoice = $vals['billLogicChoice'];
			}
			
			
			if (isset($vals['payTimeUomCode'])){
				
				$this->payTimeUomCode = $vals['payTimeUomCode'];
			}
			
			
			if (isset($vals['billTimeUomCode'])){
				
				$this->billTimeUomCode = $vals['billTimeUomCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBasePayTimeIntModel';
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
			
			
			
			
			if ("payTimeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTimeName);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("timeUomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->timeUomCode);
				
			}
			
			
			
			
			if ("paymentResolveFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paymentResolveFlag);
				
			}
			
			
			
			
			if ("billResolveFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billResolveFlag);
				
			}
			
			
			
			
			if ("payCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payCronExp);
				
			}
			
			
			
			
			if ("payHelpCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payHelpCronExp);
				
			}
			
			
			
			
			if ("billCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billCronExp);
				
			}
			
			
			
			
			if ("billHelpCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billHelpCronExp);
				
			}
			
			
			
			
			if ("enableFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableFlag);
				
			}
			
			
			
			
			if ("payCurrentPeriodOffset" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payCurrentPeriodOffset); 
				
			}
			
			
			
			
			if ("billCurrentPeriodOffset" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->billCurrentPeriodOffset); 
				
			}
			
			
			
			
			if ("chargeCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chargeCronExp);
				
			}
			
			
			
			
			if ("chargeHelpCronExp" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->chargeHelpCronExp);
				
			}
			
			
			
			
			if ("chargeCurrentPeriodOffset" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->chargeCurrentPeriodOffset); 
				
			}
			
			
			
			
			if ("resolveLastFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->resolveLastFlag);
				
			}
			
			
			
			
			if ("payLogicChoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payLogicChoice);
				
			}
			
			
			
			
			if ("billLogicChoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billLogicChoice);
				
			}
			
			
			
			
			if ("payTimeUomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payTimeUomCode);
				
			}
			
			
			
			
			if ("billTimeUomCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billTimeUomCode);
				
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
		
		
		if($this->payTimeName !== null) {
			
			$xfer += $output->writeFieldBegin('payTimeName');
			$xfer += $output->writeString($this->payTimeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->timeUomCode !== null) {
			
			$xfer += $output->writeFieldBegin('timeUomCode');
			$xfer += $output->writeString($this->timeUomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paymentResolveFlag !== null) {
			
			$xfer += $output->writeFieldBegin('paymentResolveFlag');
			$xfer += $output->writeString($this->paymentResolveFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billResolveFlag !== null) {
			
			$xfer += $output->writeFieldBegin('billResolveFlag');
			$xfer += $output->writeString($this->billResolveFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('payCronExp');
			$xfer += $output->writeString($this->payCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payHelpCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('payHelpCronExp');
			$xfer += $output->writeString($this->payHelpCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('billCronExp');
			$xfer += $output->writeString($this->billCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billHelpCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('billHelpCronExp');
			$xfer += $output->writeString($this->billHelpCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enableFlag');
			$xfer += $output->writeString($this->enableFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payCurrentPeriodOffset !== null) {
			
			$xfer += $output->writeFieldBegin('payCurrentPeriodOffset');
			$xfer += $output->writeI64($this->payCurrentPeriodOffset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billCurrentPeriodOffset !== null) {
			
			$xfer += $output->writeFieldBegin('billCurrentPeriodOffset');
			$xfer += $output->writeI64($this->billCurrentPeriodOffset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('chargeCronExp');
			$xfer += $output->writeString($this->chargeCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeHelpCronExp !== null) {
			
			$xfer += $output->writeFieldBegin('chargeHelpCronExp');
			$xfer += $output->writeString($this->chargeHelpCronExp);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->chargeCurrentPeriodOffset !== null) {
			
			$xfer += $output->writeFieldBegin('chargeCurrentPeriodOffset');
			$xfer += $output->writeI64($this->chargeCurrentPeriodOffset);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resolveLastFlag !== null) {
			
			$xfer += $output->writeFieldBegin('resolveLastFlag');
			$xfer += $output->writeString($this->resolveLastFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payLogicChoice !== null) {
			
			$xfer += $output->writeFieldBegin('payLogicChoice');
			$xfer += $output->writeString($this->payLogicChoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billLogicChoice !== null) {
			
			$xfer += $output->writeFieldBegin('billLogicChoice');
			$xfer += $output->writeString($this->billLogicChoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTimeUomCode !== null) {
			
			$xfer += $output->writeFieldBegin('payTimeUomCode');
			$xfer += $output->writeString($this->payTimeUomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billTimeUomCode !== null) {
			
			$xfer += $output->writeFieldBegin('billTimeUomCode');
			$xfer += $output->writeString($this->billTimeUomCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>