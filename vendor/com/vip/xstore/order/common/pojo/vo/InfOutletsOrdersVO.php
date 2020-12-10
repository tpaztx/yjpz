<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfOutletsOrdersVO {
	
	static $_TSPEC;
	public $id = null;
	public $orderNum = null;
	public $payTime = null;
	public $orderStatus = null;
	public $orderType = null;
	public $payAmt = null;
	public $accountTime = null;
	public $addTime = null;
	public $channel = null;
	public $deleted = null;
	public $djlb = null;
	public $extOrderNum = null;
	public $goodsAmt = null;
	public $orderAmt = null;
	public $orderJf = null;
	public $plazaCode = null;
	public $posNo = null;
	public $posSeq = null;
	public $posUsercode = null;
	public $pOrderNum = null;
	public $shopId = null;
	public $updateTime = null;
	public $usrCid = null;
	public $procTime = null;
	public $procStatus = null;
	public $errorCount = null;
	public $errorMsg = null;
	public $itemCreateTime = null;
	public $itemUpdateTime = null;
	public $isDeleted = null;
	public $operationMode = null;
	public $tailAmt = null;
	public $carriage = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderNum'
			),
			3 => array(
			'var' => 'payTime'
			),
			4 => array(
			'var' => 'orderStatus'
			),
			5 => array(
			'var' => 'orderType'
			),
			6 => array(
			'var' => 'payAmt'
			),
			7 => array(
			'var' => 'accountTime'
			),
			8 => array(
			'var' => 'addTime'
			),
			9 => array(
			'var' => 'channel'
			),
			10 => array(
			'var' => 'deleted'
			),
			11 => array(
			'var' => 'djlb'
			),
			12 => array(
			'var' => 'extOrderNum'
			),
			13 => array(
			'var' => 'goodsAmt'
			),
			14 => array(
			'var' => 'orderAmt'
			),
			15 => array(
			'var' => 'orderJf'
			),
			16 => array(
			'var' => 'plazaCode'
			),
			17 => array(
			'var' => 'posNo'
			),
			18 => array(
			'var' => 'posSeq'
			),
			19 => array(
			'var' => 'posUsercode'
			),
			20 => array(
			'var' => 'pOrderNum'
			),
			21 => array(
			'var' => 'shopId'
			),
			22 => array(
			'var' => 'updateTime'
			),
			23 => array(
			'var' => 'usrCid'
			),
			24 => array(
			'var' => 'procTime'
			),
			25 => array(
			'var' => 'procStatus'
			),
			26 => array(
			'var' => 'errorCount'
			),
			27 => array(
			'var' => 'errorMsg'
			),
			28 => array(
			'var' => 'itemCreateTime'
			),
			29 => array(
			'var' => 'itemUpdateTime'
			),
			30 => array(
			'var' => 'isDeleted'
			),
			31 => array(
			'var' => 'operationMode'
			),
			32 => array(
			'var' => 'tailAmt'
			),
			33 => array(
			'var' => 'carriage'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderNum'])){
				
				$this->orderNum = $vals['orderNum'];
			}
			
			
			if (isset($vals['payTime'])){
				
				$this->payTime = $vals['payTime'];
			}
			
			
			if (isset($vals['orderStatus'])){
				
				$this->orderStatus = $vals['orderStatus'];
			}
			
			
			if (isset($vals['orderType'])){
				
				$this->orderType = $vals['orderType'];
			}
			
			
			if (isset($vals['payAmt'])){
				
				$this->payAmt = $vals['payAmt'];
			}
			
			
			if (isset($vals['accountTime'])){
				
				$this->accountTime = $vals['accountTime'];
			}
			
			
			if (isset($vals['addTime'])){
				
				$this->addTime = $vals['addTime'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['djlb'])){
				
				$this->djlb = $vals['djlb'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['goodsAmt'])){
				
				$this->goodsAmt = $vals['goodsAmt'];
			}
			
			
			if (isset($vals['orderAmt'])){
				
				$this->orderAmt = $vals['orderAmt'];
			}
			
			
			if (isset($vals['orderJf'])){
				
				$this->orderJf = $vals['orderJf'];
			}
			
			
			if (isset($vals['plazaCode'])){
				
				$this->plazaCode = $vals['plazaCode'];
			}
			
			
			if (isset($vals['posNo'])){
				
				$this->posNo = $vals['posNo'];
			}
			
			
			if (isset($vals['posSeq'])){
				
				$this->posSeq = $vals['posSeq'];
			}
			
			
			if (isset($vals['posUsercode'])){
				
				$this->posUsercode = $vals['posUsercode'];
			}
			
			
			if (isset($vals['pOrderNum'])){
				
				$this->pOrderNum = $vals['pOrderNum'];
			}
			
			
			if (isset($vals['shopId'])){
				
				$this->shopId = $vals['shopId'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['usrCid'])){
				
				$this->usrCid = $vals['usrCid'];
			}
			
			
			if (isset($vals['procTime'])){
				
				$this->procTime = $vals['procTime'];
			}
			
			
			if (isset($vals['procStatus'])){
				
				$this->procStatus = $vals['procStatus'];
			}
			
			
			if (isset($vals['errorCount'])){
				
				$this->errorCount = $vals['errorCount'];
			}
			
			
			if (isset($vals['errorMsg'])){
				
				$this->errorMsg = $vals['errorMsg'];
			}
			
			
			if (isset($vals['itemCreateTime'])){
				
				$this->itemCreateTime = $vals['itemCreateTime'];
			}
			
			
			if (isset($vals['itemUpdateTime'])){
				
				$this->itemUpdateTime = $vals['itemUpdateTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['operationMode'])){
				
				$this->operationMode = $vals['operationMode'];
			}
			
			
			if (isset($vals['tailAmt'])){
				
				$this->tailAmt = $vals['tailAmt'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfOutletsOrdersVO';
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
			
			
			
			
			if ("orderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderNum);
				
			}
			
			
			
			
			if ("payTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->payTime); 
				
			}
			
			
			
			
			if ("orderStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderStatus); 
				
			}
			
			
			
			
			if ("orderType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderType); 
				
			}
			
			
			
			
			if ("payAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payAmt);
				
			}
			
			
			
			
			if ("accountTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accountTime); 
				
			}
			
			
			
			
			if ("addTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->addTime); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("djlb" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->djlb);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("goodsAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsAmt);
				
			}
			
			
			
			
			if ("orderAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderAmt);
				
			}
			
			
			
			
			if ("orderJf" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderJf);
				
			}
			
			
			
			
			if ("plazaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plazaCode);
				
			}
			
			
			
			
			if ("posNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posNo);
				
			}
			
			
			
			
			if ("posSeq" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posSeq);
				
			}
			
			
			
			
			if ("posUsercode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posUsercode);
				
			}
			
			
			
			
			if ("pOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pOrderNum);
				
			}
			
			
			
			
			if ("shopId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopId);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("usrCid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->usrCid);
				
			}
			
			
			
			
			if ("procTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->procTime); 
				
			}
			
			
			
			
			if ("procStatus" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->procStatus); 
				
			}
			
			
			
			
			if ("errorCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->errorCount); 
				
			}
			
			
			
			
			if ("errorMsg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->errorMsg);
				
			}
			
			
			
			
			if ("itemCreateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemCreateTime); 
				
			}
			
			
			
			
			if ("itemUpdateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->itemUpdateTime); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("operationMode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operationMode); 
				
			}
			
			
			
			
			if ("tailAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tailAmt);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
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
		
		
		if($this->orderNum !== null) {
			
			$xfer += $output->writeFieldBegin('orderNum');
			$xfer += $output->writeString($this->orderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payTime !== null) {
			
			$xfer += $output->writeFieldBegin('payTime');
			$xfer += $output->writeI64($this->payTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderStatus !== null) {
			
			$xfer += $output->writeFieldBegin('orderStatus');
			$xfer += $output->writeI32($this->orderStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderType !== null) {
			
			$xfer += $output->writeFieldBegin('orderType');
			$xfer += $output->writeI32($this->orderType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->payAmt !== null) {
			
			$xfer += $output->writeFieldBegin('payAmt');
			$xfer += $output->writeString($this->payAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountTime !== null) {
			
			$xfer += $output->writeFieldBegin('accountTime');
			$xfer += $output->writeI64($this->accountTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addTime !== null) {
			
			$xfer += $output->writeFieldBegin('addTime');
			$xfer += $output->writeI64($this->addTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deleted !== null) {
			
			$xfer += $output->writeFieldBegin('deleted');
			$xfer += $output->writeString($this->deleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->djlb !== null) {
			
			$xfer += $output->writeFieldBegin('djlb');
			$xfer += $output->writeString($this->djlb);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsAmt !== null) {
			
			$xfer += $output->writeFieldBegin('goodsAmt');
			$xfer += $output->writeString($this->goodsAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmt !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmt');
			$xfer += $output->writeString($this->orderAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderJf !== null) {
			
			$xfer += $output->writeFieldBegin('orderJf');
			$xfer += $output->writeString($this->orderJf);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plazaCode !== null) {
			
			$xfer += $output->writeFieldBegin('plazaCode');
			$xfer += $output->writeString($this->plazaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posNo !== null) {
			
			$xfer += $output->writeFieldBegin('posNo');
			$xfer += $output->writeString($this->posNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posSeq !== null) {
			
			$xfer += $output->writeFieldBegin('posSeq');
			$xfer += $output->writeString($this->posSeq);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posUsercode !== null) {
			
			$xfer += $output->writeFieldBegin('posUsercode');
			$xfer += $output->writeString($this->posUsercode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('pOrderNum');
			$xfer += $output->writeString($this->pOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopId !== null) {
			
			$xfer += $output->writeFieldBegin('shopId');
			$xfer += $output->writeString($this->shopId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->usrCid !== null) {
			
			$xfer += $output->writeFieldBegin('usrCid');
			$xfer += $output->writeString($this->usrCid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procTime !== null) {
			
			$xfer += $output->writeFieldBegin('procTime');
			$xfer += $output->writeI64($this->procTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procStatus !== null) {
			
			$xfer += $output->writeFieldBegin('procStatus');
			$xfer += $output->writeI32($this->procStatus);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorCount !== null) {
			
			$xfer += $output->writeFieldBegin('errorCount');
			$xfer += $output->writeI32($this->errorCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->errorMsg !== null) {
			
			$xfer += $output->writeFieldBegin('errorMsg');
			$xfer += $output->writeString($this->errorMsg);
			
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
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operationMode !== null) {
			
			$xfer += $output->writeFieldBegin('operationMode');
			$xfer += $output->writeI32($this->operationMode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tailAmt !== null) {
			
			$xfer += $output->writeFieldBegin('tailAmt');
			$xfer += $output->writeString($this->tailAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>