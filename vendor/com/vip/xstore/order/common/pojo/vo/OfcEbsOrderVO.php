<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class OfcEbsOrderVO {
	
	static $_TSPEC;
	public $id = null;
	public $orderSn = null;
	public $extOrderSn = null;
	public $orderEbsScenario = null;
	public $userId = null;
	public $orderExtFlags = null;
	public $transTime = null;
	public $warehouse = null;
	public $orderAddTime = null;
	public $saleSite = null;
	public $carrierName = null;
	public $specialType = null;
	public $channel = null;
	public $detailedAddr = null;
	public $invoiceType = null;
	public $invoiceTitle = null;
	public $invoiceMoney = null;
	public $currency = null;
	public $createTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	public $isSync = null;
	public $retryCount = null;
	public $transportNumber = null;
	public $carriage = null;
	public $referenceOrderSn = null;
	public $lastSyncTime = null;
	public $discountAmount = null;
	public $discountRate = null;
	public $totalMoney = null;
	public $activityDiffDiscountMoney = null;
	public $operation = null;
	public $money = null;
	public $moneyOnDelivery = null;
	public $isMoneyOnDelivery = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'extOrderSn'
			),
			4 => array(
			'var' => 'orderEbsScenario'
			),
			5 => array(
			'var' => 'userId'
			),
			6 => array(
			'var' => 'orderExtFlags'
			),
			7 => array(
			'var' => 'transTime'
			),
			8 => array(
			'var' => 'warehouse'
			),
			9 => array(
			'var' => 'orderAddTime'
			),
			10 => array(
			'var' => 'saleSite'
			),
			11 => array(
			'var' => 'carrierName'
			),
			12 => array(
			'var' => 'specialType'
			),
			13 => array(
			'var' => 'channel'
			),
			14 => array(
			'var' => 'detailedAddr'
			),
			15 => array(
			'var' => 'invoiceType'
			),
			16 => array(
			'var' => 'invoiceTitle'
			),
			17 => array(
			'var' => 'invoiceMoney'
			),
			18 => array(
			'var' => 'currency'
			),
			19 => array(
			'var' => 'createTime'
			),
			20 => array(
			'var' => 'updateTime'
			),
			21 => array(
			'var' => 'isDeleted'
			),
			22 => array(
			'var' => 'isSync'
			),
			23 => array(
			'var' => 'retryCount'
			),
			24 => array(
			'var' => 'transportNumber'
			),
			25 => array(
			'var' => 'carriage'
			),
			26 => array(
			'var' => 'referenceOrderSn'
			),
			27 => array(
			'var' => 'lastSyncTime'
			),
			28 => array(
			'var' => 'discountAmount'
			),
			29 => array(
			'var' => 'discountRate'
			),
			30 => array(
			'var' => 'totalMoney'
			),
			31 => array(
			'var' => 'activityDiffDiscountMoney'
			),
			32 => array(
			'var' => 'operation'
			),
			33 => array(
			'var' => 'money'
			),
			34 => array(
			'var' => 'moneyOnDelivery'
			),
			35 => array(
			'var' => 'isMoneyOnDelivery'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['extOrderSn'])){
				
				$this->extOrderSn = $vals['extOrderSn'];
			}
			
			
			if (isset($vals['orderEbsScenario'])){
				
				$this->orderEbsScenario = $vals['orderEbsScenario'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['orderExtFlags'])){
				
				$this->orderExtFlags = $vals['orderExtFlags'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderAddTime'])){
				
				$this->orderAddTime = $vals['orderAddTime'];
			}
			
			
			if (isset($vals['saleSite'])){
				
				$this->saleSite = $vals['saleSite'];
			}
			
			
			if (isset($vals['carrierName'])){
				
				$this->carrierName = $vals['carrierName'];
			}
			
			
			if (isset($vals['specialType'])){
				
				$this->specialType = $vals['specialType'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['detailedAddr'])){
				
				$this->detailedAddr = $vals['detailedAddr'];
			}
			
			
			if (isset($vals['invoiceType'])){
				
				$this->invoiceType = $vals['invoiceType'];
			}
			
			
			if (isset($vals['invoiceTitle'])){
				
				$this->invoiceTitle = $vals['invoiceTitle'];
			}
			
			
			if (isset($vals['invoiceMoney'])){
				
				$this->invoiceMoney = $vals['invoiceMoney'];
			}
			
			
			if (isset($vals['currency'])){
				
				$this->currency = $vals['currency'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
			if (isset($vals['isDeleted'])){
				
				$this->isDeleted = $vals['isDeleted'];
			}
			
			
			if (isset($vals['isSync'])){
				
				$this->isSync = $vals['isSync'];
			}
			
			
			if (isset($vals['retryCount'])){
				
				$this->retryCount = $vals['retryCount'];
			}
			
			
			if (isset($vals['transportNumber'])){
				
				$this->transportNumber = $vals['transportNumber'];
			}
			
			
			if (isset($vals['carriage'])){
				
				$this->carriage = $vals['carriage'];
			}
			
			
			if (isset($vals['referenceOrderSn'])){
				
				$this->referenceOrderSn = $vals['referenceOrderSn'];
			}
			
			
			if (isset($vals['lastSyncTime'])){
				
				$this->lastSyncTime = $vals['lastSyncTime'];
			}
			
			
			if (isset($vals['discountAmount'])){
				
				$this->discountAmount = $vals['discountAmount'];
			}
			
			
			if (isset($vals['discountRate'])){
				
				$this->discountRate = $vals['discountRate'];
			}
			
			
			if (isset($vals['totalMoney'])){
				
				$this->totalMoney = $vals['totalMoney'];
			}
			
			
			if (isset($vals['activityDiffDiscountMoney'])){
				
				$this->activityDiffDiscountMoney = $vals['activityDiffDiscountMoney'];
			}
			
			
			if (isset($vals['operation'])){
				
				$this->operation = $vals['operation'];
			}
			
			
			if (isset($vals['money'])){
				
				$this->money = $vals['money'];
			}
			
			
			if (isset($vals['moneyOnDelivery'])){
				
				$this->moneyOnDelivery = $vals['moneyOnDelivery'];
			}
			
			
			if (isset($vals['isMoneyOnDelivery'])){
				
				$this->isMoneyOnDelivery = $vals['isMoneyOnDelivery'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfcEbsOrderVO';
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
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("extOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderSn);
				
			}
			
			
			
			
			if ("orderEbsScenario" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderEbsScenario); 
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("orderExtFlags" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderExtFlags);
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("orderAddTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->orderAddTime); 
				
			}
			
			
			
			
			if ("saleSite" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->saleSite);
				
			}
			
			
			
			
			if ("carrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrierName);
				
			}
			
			
			
			
			if ("specialType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->specialType); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("detailedAddr" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detailedAddr);
				
			}
			
			
			
			
			if ("invoiceType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->invoiceType); 
				
			}
			
			
			
			
			if ("invoiceTitle" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceTitle);
				
			}
			
			
			
			
			if ("invoiceMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->invoiceMoney);
				
			}
			
			
			
			
			if ("currency" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currency);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime); 
				
			}
			
			
			
			
			if ("isDeleted" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isDeleted); 
				
			}
			
			
			
			
			if ("isSync" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isSync); 
				
			}
			
			
			
			
			if ("retryCount" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->retryCount); 
				
			}
			
			
			
			
			if ("transportNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transportNumber);
				
			}
			
			
			
			
			if ("carriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carriage);
				
			}
			
			
			
			
			if ("referenceOrderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->referenceOrderSn);
				
			}
			
			
			
			
			if ("lastSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastSyncTime); 
				
			}
			
			
			
			
			if ("discountAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountAmount);
				
			}
			
			
			
			
			if ("discountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountRate);
				
			}
			
			
			
			
			if ("totalMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->totalMoney);
				
			}
			
			
			
			
			if ("activityDiffDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->activityDiffDiscountMoney);
				
			}
			
			
			
			
			if ("operation" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation); 
				
			}
			
			
			
			
			if ("money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->money);
				
			}
			
			
			
			
			if ("moneyOnDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moneyOnDelivery);
				
			}
			
			
			
			
			if ("isMoneyOnDelivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->isMoneyOnDelivery); 
				
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
		
		
		if($this->orderSn !== null) {
			
			$xfer += $output->writeFieldBegin('orderSn');
			$xfer += $output->writeString($this->orderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderSn');
			$xfer += $output->writeString($this->extOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderEbsScenario !== null) {
			
			$xfer += $output->writeFieldBegin('orderEbsScenario');
			$xfer += $output->writeI32($this->orderEbsScenario);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderExtFlags !== null) {
			
			$xfer += $output->writeFieldBegin('orderExtFlags');
			$xfer += $output->writeString($this->orderExtFlags);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTime !== null) {
			
			$xfer += $output->writeFieldBegin('transTime');
			$xfer += $output->writeI64($this->transTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAddTime !== null) {
			
			$xfer += $output->writeFieldBegin('orderAddTime');
			$xfer += $output->writeI64($this->orderAddTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->saleSite !== null) {
			
			$xfer += $output->writeFieldBegin('saleSite');
			$xfer += $output->writeString($this->saleSite);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carrierName !== null) {
			
			$xfer += $output->writeFieldBegin('carrierName');
			$xfer += $output->writeString($this->carrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialType !== null) {
			
			$xfer += $output->writeFieldBegin('specialType');
			$xfer += $output->writeI32($this->specialType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->detailedAddr !== null) {
			
			$xfer += $output->writeFieldBegin('detailedAddr');
			$xfer += $output->writeString($this->detailedAddr);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceType !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceType');
			$xfer += $output->writeI32($this->invoiceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceTitle !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceTitle');
			$xfer += $output->writeString($this->invoiceTitle);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->invoiceMoney !== null) {
			
			$xfer += $output->writeFieldBegin('invoiceMoney');
			$xfer += $output->writeString($this->invoiceMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currency !== null) {
			
			$xfer += $output->writeFieldBegin('currency');
			$xfer += $output->writeString($this->currency);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateTime !== null) {
			
			$xfer += $output->writeFieldBegin('updateTime');
			$xfer += $output->writeI64($this->updateTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isDeleted !== null) {
			
			$xfer += $output->writeFieldBegin('isDeleted');
			$xfer += $output->writeI32($this->isDeleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isSync !== null) {
			
			$xfer += $output->writeFieldBegin('isSync');
			$xfer += $output->writeI32($this->isSync);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->retryCount !== null) {
			
			$xfer += $output->writeFieldBegin('retryCount');
			$xfer += $output->writeI32($this->retryCount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transportNumber !== null) {
			
			$xfer += $output->writeFieldBegin('transportNumber');
			$xfer += $output->writeString($this->transportNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->carriage !== null) {
			
			$xfer += $output->writeFieldBegin('carriage');
			$xfer += $output->writeString($this->carriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->referenceOrderSn !== null) {
			
			$xfer += $output->writeFieldBegin('referenceOrderSn');
			$xfer += $output->writeString($this->referenceOrderSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastSyncTime');
			$xfer += $output->writeI64($this->lastSyncTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountAmount !== null) {
			
			$xfer += $output->writeFieldBegin('discountAmount');
			$xfer += $output->writeString($this->discountAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountRate');
			$xfer += $output->writeString($this->discountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->totalMoney !== null) {
			
			$xfer += $output->writeFieldBegin('totalMoney');
			$xfer += $output->writeString($this->totalMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->activityDiffDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('activityDiffDiscountMoney');
			$xfer += $output->writeString($this->activityDiffDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operation !== null) {
			
			$xfer += $output->writeFieldBegin('operation');
			$xfer += $output->writeI32($this->operation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->money !== null) {
			
			$xfer += $output->writeFieldBegin('money');
			$xfer += $output->writeString($this->money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moneyOnDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('moneyOnDelivery');
			$xfer += $output->writeString($this->moneyOnDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isMoneyOnDelivery !== null) {
			
			$xfer += $output->writeFieldBegin('isMoneyOnDelivery');
			$xfer += $output->writeI32($this->isMoneyOnDelivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>