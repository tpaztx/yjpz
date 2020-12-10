<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\osp\rbp\service;

class RbpBaseSettleIntModel {
	
	static $_TSPEC;
	public $id = null;
	public $settleCode = null;
	public $settleName = null;
	public $companyCode = null;
	public $paySign = null;
	public $mutlPayFlag = null;
	public $categoryCode = null;
	public $categoryName = null;
	public $preAccount = null;
	public $preAccountRemark = null;
	public $feeAccount = null;
	public $feeAccountRemark = null;
	public $comments = null;
	public $enableFlag = null;
	public $rentInvoiceMode = null;
	public $leaseInvoiceMode = null;
	public $rentCollectionFlag = null;
	public $leaseCollectionFlag = null;
	public $accountingCode = null;
	public $collectionFlag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'settleCode'
			),
			3 => array(
			'var' => 'settleName'
			),
			4 => array(
			'var' => 'companyCode'
			),
			5 => array(
			'var' => 'paySign'
			),
			6 => array(
			'var' => 'mutlPayFlag'
			),
			7 => array(
			'var' => 'categoryCode'
			),
			8 => array(
			'var' => 'categoryName'
			),
			9 => array(
			'var' => 'preAccount'
			),
			10 => array(
			'var' => 'preAccountRemark'
			),
			11 => array(
			'var' => 'feeAccount'
			),
			12 => array(
			'var' => 'feeAccountRemark'
			),
			13 => array(
			'var' => 'comments'
			),
			14 => array(
			'var' => 'enableFlag'
			),
			15 => array(
			'var' => 'rentInvoiceMode'
			),
			16 => array(
			'var' => 'leaseInvoiceMode'
			),
			17 => array(
			'var' => 'rentCollectionFlag'
			),
			18 => array(
			'var' => 'leaseCollectionFlag'
			),
			19 => array(
			'var' => 'accountingCode'
			),
			20 => array(
			'var' => 'collectionFlag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['settleCode'])){
				
				$this->settleCode = $vals['settleCode'];
			}
			
			
			if (isset($vals['settleName'])){
				
				$this->settleName = $vals['settleName'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
			if (isset($vals['paySign'])){
				
				$this->paySign = $vals['paySign'];
			}
			
			
			if (isset($vals['mutlPayFlag'])){
				
				$this->mutlPayFlag = $vals['mutlPayFlag'];
			}
			
			
			if (isset($vals['categoryCode'])){
				
				$this->categoryCode = $vals['categoryCode'];
			}
			
			
			if (isset($vals['categoryName'])){
				
				$this->categoryName = $vals['categoryName'];
			}
			
			
			if (isset($vals['preAccount'])){
				
				$this->preAccount = $vals['preAccount'];
			}
			
			
			if (isset($vals['preAccountRemark'])){
				
				$this->preAccountRemark = $vals['preAccountRemark'];
			}
			
			
			if (isset($vals['feeAccount'])){
				
				$this->feeAccount = $vals['feeAccount'];
			}
			
			
			if (isset($vals['feeAccountRemark'])){
				
				$this->feeAccountRemark = $vals['feeAccountRemark'];
			}
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
			if (isset($vals['enableFlag'])){
				
				$this->enableFlag = $vals['enableFlag'];
			}
			
			
			if (isset($vals['rentInvoiceMode'])){
				
				$this->rentInvoiceMode = $vals['rentInvoiceMode'];
			}
			
			
			if (isset($vals['leaseInvoiceMode'])){
				
				$this->leaseInvoiceMode = $vals['leaseInvoiceMode'];
			}
			
			
			if (isset($vals['rentCollectionFlag'])){
				
				$this->rentCollectionFlag = $vals['rentCollectionFlag'];
			}
			
			
			if (isset($vals['leaseCollectionFlag'])){
				
				$this->leaseCollectionFlag = $vals['leaseCollectionFlag'];
			}
			
			
			if (isset($vals['accountingCode'])){
				
				$this->accountingCode = $vals['accountingCode'];
			}
			
			
			if (isset($vals['collectionFlag'])){
				
				$this->collectionFlag = $vals['collectionFlag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RbpBaseSettleIntModel';
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
			
			
			
			
			if ("settleCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleCode);
				
			}
			
			
			
			
			if ("settleName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->settleName);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
			}
			
			
			
			
			if ("paySign" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->paySign); 
				
			}
			
			
			
			
			if ("mutlPayFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mutlPayFlag);
				
			}
			
			
			
			
			if ("categoryCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryCode);
				
			}
			
			
			
			
			if ("categoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->categoryName);
				
			}
			
			
			
			
			if ("preAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preAccount);
				
			}
			
			
			
			
			if ("preAccountRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->preAccountRemark);
				
			}
			
			
			
			
			if ("feeAccount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeAccount);
				
			}
			
			
			
			
			if ("feeAccountRemark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeAccountRemark);
				
			}
			
			
			
			
			if ("comments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comments);
				
			}
			
			
			
			
			if ("enableFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->enableFlag);
				
			}
			
			
			
			
			if ("rentInvoiceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rentInvoiceMode);
				
			}
			
			
			
			
			if ("leaseInvoiceMode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leaseInvoiceMode);
				
			}
			
			
			
			
			if ("rentCollectionFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rentCollectionFlag);
				
			}
			
			
			
			
			if ("leaseCollectionFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->leaseCollectionFlag);
				
			}
			
			
			
			
			if ("accountingCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountingCode);
				
			}
			
			
			
			
			if ("collectionFlag" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->collectionFlag);
				
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
		
		
		if($this->settleCode !== null) {
			
			$xfer += $output->writeFieldBegin('settleCode');
			$xfer += $output->writeString($this->settleCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->settleName !== null) {
			
			$xfer += $output->writeFieldBegin('settleName');
			$xfer += $output->writeString($this->settleName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySign !== null) {
			
			$xfer += $output->writeFieldBegin('paySign');
			$xfer += $output->writeI64($this->paySign);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mutlPayFlag !== null) {
			
			$xfer += $output->writeFieldBegin('mutlPayFlag');
			$xfer += $output->writeString($this->mutlPayFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryCode !== null) {
			
			$xfer += $output->writeFieldBegin('categoryCode');
			$xfer += $output->writeString($this->categoryCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->categoryName !== null) {
			
			$xfer += $output->writeFieldBegin('categoryName');
			$xfer += $output->writeString($this->categoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preAccount !== null) {
			
			$xfer += $output->writeFieldBegin('preAccount');
			$xfer += $output->writeString($this->preAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->preAccountRemark !== null) {
			
			$xfer += $output->writeFieldBegin('preAccountRemark');
			$xfer += $output->writeString($this->preAccountRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeAccount !== null) {
			
			$xfer += $output->writeFieldBegin('feeAccount');
			$xfer += $output->writeString($this->feeAccount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeAccountRemark !== null) {
			
			$xfer += $output->writeFieldBegin('feeAccountRemark');
			$xfer += $output->writeString($this->feeAccountRemark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->comments !== null) {
			
			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeString($this->comments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->enableFlag !== null) {
			
			$xfer += $output->writeFieldBegin('enableFlag');
			$xfer += $output->writeString($this->enableFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rentInvoiceMode !== null) {
			
			$xfer += $output->writeFieldBegin('rentInvoiceMode');
			$xfer += $output->writeString($this->rentInvoiceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leaseInvoiceMode !== null) {
			
			$xfer += $output->writeFieldBegin('leaseInvoiceMode');
			$xfer += $output->writeString($this->leaseInvoiceMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rentCollectionFlag !== null) {
			
			$xfer += $output->writeFieldBegin('rentCollectionFlag');
			$xfer += $output->writeString($this->rentCollectionFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leaseCollectionFlag !== null) {
			
			$xfer += $output->writeFieldBegin('leaseCollectionFlag');
			$xfer += $output->writeString($this->leaseCollectionFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountingCode !== null) {
			
			$xfer += $output->writeFieldBegin('accountingCode');
			$xfer += $output->writeString($this->accountingCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->collectionFlag !== null) {
			
			$xfer += $output->writeFieldBegin('collectionFlag');
			$xfer += $output->writeString($this->collectionFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>