<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfOutletsOrderPayVO {
	
	static $_TSPEC;
	public $id = null;
	public $outletsOrdersId = null;
	public $addTime = null;
	public $deleted = null;
	public $payAmt = null;
	public $payBatch = null;
	public $payChannel = null;
	public $payCode = null;
	public $payName = null;
	public $payNo = null;
	public $paySource = null;
	public $payStatus = null;
	public $payTime = null;
	public $plazaCode = null;
	public $rmk = null;
	public $traceno = null;
	public $tranno = null;
	public $updateTime = null;
	public $itemCreateTime = null;
	public $itemUpdateTime = null;
	public $isInvoice = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'outletsOrdersId'
			),
			3 => array(
			'var' => 'addTime'
			),
			4 => array(
			'var' => 'deleted'
			),
			5 => array(
			'var' => 'payAmt'
			),
			6 => array(
			'var' => 'payBatch'
			),
			7 => array(
			'var' => 'payChannel'
			),
			8 => array(
			'var' => 'payCode'
			),
			9 => array(
			'var' => 'payName'
			),
			10 => array(
			'var' => 'payNo'
			),
			11 => array(
			'var' => 'paySource'
			),
			12 => array(
			'var' => 'payStatus'
			),
			13 => array(
			'var' => 'payTime'
			),
			14 => array(
			'var' => 'plazaCode'
			),
			15 => array(
			'var' => 'rmk'
			),
			16 => array(
			'var' => 'traceno'
			),
			17 => array(
			'var' => 'tranno'
			),
			18 => array(
			'var' => 'updateTime'
			),
			19 => array(
			'var' => 'itemCreateTime'
			),
			20 => array(
			'var' => 'itemUpdateTime'
			),
			21 => array(
			'var' => 'isInvoice'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['outletsOrdersId'])){
				
				$this->outletsOrdersId = $vals['outletsOrdersId'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['payAmt'])){
				
				$this->payAmt = $vals['payAmt'];
			}
			
			
			if (isset($vals['payBatch'])){
				
				$this->payBatch = $vals['payBatch'];
			}
			
			
			if (isset($vals['payChannel'])){
				
				$this->payChannel = $vals['payChannel'];
			}
			
			
			if (isset($vals['payCode'])){
				
				$this->payCode = $vals['payCode'];
			}
			
			
			if (isset($vals['payName'])){
				
				$this->payName = $vals['payName'];
			}
			
			
			if (isset($vals['payNo'])){
				
				$this->payNo = $vals['payNo'];
			}
			
			
			if (isset($vals['paySource'])){
				
				$this->paySource = $vals['paySource'];
			}
			
			
			if (isset($vals['payStatus'])){
				
				$this->payStatus = $vals['payStatus'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['plazaCode'])){
				
				$this->plazaCode = $vals['plazaCode'];
			}
			
			
			if (isset($vals['rmk'])){
				
				$this->rmk = $vals['rmk'];
			}
			
			
			if (isset($vals['traceno'])){
				
				$this->traceno = $vals['traceno'];
			}
			
			
			if (isset($vals['tranno'])){
				
				$this->tranno = $vals['tranno'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['itemCreateTime'])){
				
				$this->itemCreateTime = $vals['itemCreateTime'];
			}
			
			
			if (isset($vals['itemUpdateTime'])){
				
				$this->itemUpdateTime = $vals['itemUpdateTime'];
			}
			
			
			if (isset($vals['isInvoice'])){
				
				$this->isInvoice = $vals['isInvoice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfOutletsOrderPayVO';
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
			
			
			
			
			if ("outletsOrdersId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->outletsOrdersId); 
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime); 
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("payAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAmt);
				
			}
			
			
			
			
			if ("payBatch" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payBatch);
				
			}
			
			
			
			
			if ("payChannel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payChannel);
				
			}
			
			
			
			
			if ("payCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payCode);
				
			}
			
			
			
			
			if ("payName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payName);
				
			}
			
			
			
			
			if ("payNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payNo);
				
			}
			
			
			
			
			if ("paySource" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->paySource);
				
			}
			
			
			
			
			if ("payStatus" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payStatus);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime); 
				
			}
			
			
			
			
			if ("plazaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plazaCode);
				
			}
			
			
			
			
			if ("rmk" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rmk);
				
			}
			
			
			
			
			if ("traceno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->traceno);
				
			}
			
			
			
			
			if ("tranno" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tranno);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("itemCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemCreateTime); 
				
			}
			
			
			
			
			if ("itemUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemUpdateTime); 
				
			}
			
			
			
			
			if ("isInvoice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->isInvoice);
				
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
		
		
		if($this->outletsOrdersId !== null) {
			
			$xfer += $output->writeFieldBegin('outletsOrdersId');
			$xfer += $output->writeI64($this->outletsOrdersId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deleted !== null) {
			
			$xfer += $output->writeFieldBegin('deleted');
			$xfer += $output->writeString($this->deleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAmt !== null) {
			
			$xfer += $output->writeFieldBegin('payAmt');
			$xfer += $output->writeString($this->payAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payBatch !== null) {
			
			$xfer += $output->writeFieldBegin('payBatch');
			$xfer += $output->writeString($this->payBatch);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payChannel !== null) {
			
			$xfer += $output->writeFieldBegin('payChannel');
			$xfer += $output->writeString($this->payChannel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payCode !== null) {
			
			$xfer += $output->writeFieldBegin('payCode');
			$xfer += $output->writeString($this->payCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payName !== null) {
			
			$xfer += $output->writeFieldBegin('payName');
			$xfer += $output->writeString($this->payName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payNo !== null) {
			
			$xfer += $output->writeFieldBegin('payNo');
			$xfer += $output->writeString($this->payNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->paySource !== null) {
			
			$xfer += $output->writeFieldBegin('paySource');
			$xfer += $output->writeString($this->paySource);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payStatus !== null) {
			
			$xfer += $output->writeFieldBegin('payStatus');
			$xfer += $output->writeString($this->payStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plazaCode !== null) {
			
			$xfer += $output->writeFieldBegin('plazaCode');
			$xfer += $output->writeString($this->plazaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rmk !== null) {
			
			$xfer += $output->writeFieldBegin('rmk');
			$xfer += $output->writeString($this->rmk);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->traceno !== null) {
			
			$xfer += $output->writeFieldBegin('traceno');
			$xfer += $output->writeString($this->traceno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tranno !== null) {
			
			$xfer += $output->writeFieldBegin('tranno');
			$xfer += $output->writeString($this->tranno);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemCreateTime !== null) {
			
			$xfer += $output->writeFieldBegin('itemCreateTime');
			$xfer += $output->writeI64($this->itemCreateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemUpdateTime !== null) {
			
			$xfer += $output->writeFieldBegin('itemUpdateTime');
			$xfer += $output->writeI64($this->itemUpdateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isInvoice !== null) {
			
			$xfer += $output->writeFieldBegin('isInvoice');
			$xfer += $output->writeString($this->isInvoice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>