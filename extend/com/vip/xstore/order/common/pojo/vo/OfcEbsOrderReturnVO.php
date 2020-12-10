<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class OfcEbsOrderReturnVO {
	
	static $_TSPEC;
	public $id = null;
	public $orderSn = null;
	public $orderEbsScenario = null;
	public $applyType = null;
	public $applyId = null;
	public $extApplyId = null;
	public $userId = null;
	public $transTime = null;
	public $refundType = null;
	public $returnWarehouse = null;
	public $returnMoney = null;
	public $adminAdjustMoney = null;
	public $returnExDiscountMoney = null;
	public $returnCarriage = null;
	public $vipPaidBackCarriage = null;
	public $returnsWay = null;
	public $returnTransportNumber = null;
	public $returnCarrierName = null;
	public $createTime = null;
	public $lastSyncTime = null;
	public $updateTime = null;
	public $isDeleted = null;
	public $isSync = null;
	public $retryCount = null;
	public $refundAmount = null;
	public $moneyDifferent = null;
	public $ctReference = null;
	public $operation = null;
	public $applyTime = null;
	public $channel = null;
	public $companyCode = null;
	
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
			'var' => 'orderEbsScenario'
			),
			4 => array(
			'var' => 'applyType'
			),
			5 => array(
			'var' => 'applyId'
			),
			6 => array(
			'var' => 'extApplyId'
			),
			7 => array(
			'var' => 'userId'
			),
			8 => array(
			'var' => 'transTime'
			),
			9 => array(
			'var' => 'refundType'
			),
			10 => array(
			'var' => 'returnWarehouse'
			),
			11 => array(
			'var' => 'returnMoney'
			),
			12 => array(
			'var' => 'adminAdjustMoney'
			),
			13 => array(
			'var' => 'returnExDiscountMoney'
			),
			14 => array(
			'var' => 'returnCarriage'
			),
			15 => array(
			'var' => 'vipPaidBackCarriage'
			),
			16 => array(
			'var' => 'returnsWay'
			),
			17 => array(
			'var' => 'returnTransportNumber'
			),
			18 => array(
			'var' => 'returnCarrierName'
			),
			19 => array(
			'var' => 'createTime'
			),
			20 => array(
			'var' => 'lastSyncTime'
			),
			21 => array(
			'var' => 'updateTime'
			),
			22 => array(
			'var' => 'isDeleted'
			),
			23 => array(
			'var' => 'isSync'
			),
			24 => array(
			'var' => 'retryCount'
			),
			25 => array(
			'var' => 'refundAmount'
			),
			26 => array(
			'var' => 'moneyDifferent'
			),
			27 => array(
			'var' => 'ctReference'
			),
			28 => array(
			'var' => 'operation'
			),
			29 => array(
			'var' => 'applyTime'
			),
			30 => array(
			'var' => 'channel'
			),
			31 => array(
			'var' => 'companyCode'
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
			
			
			if (isset($vals['orderEbsScenario'])){
				
				$this->orderEbsScenario = $vals['orderEbsScenario'];
			}
			
			
			if (isset($vals['applyType'])){
				
				$this->applyType = $vals['applyType'];
			}
			
			
			if (isset($vals['applyId'])){
				
				$this->applyId = $vals['applyId'];
			}
			
			
			if (isset($vals['extApplyId'])){
				
				$this->extApplyId = $vals['extApplyId'];
			}
			
			
			if (isset($vals['userId'])){
				
				$this->userId = $vals['userId'];
			}
			
			
			if (isset($vals['transTime'])){
				
				$this->transTime = $vals['transTime'];
			}
			
			
			if (isset($vals['refundType'])){
				
				$this->refundType = $vals['refundType'];
			}
			
			
			if (isset($vals['returnWarehouse'])){
				
				$this->returnWarehouse = $vals['returnWarehouse'];
			}
			
			
			if (isset($vals['returnMoney'])){
				
				$this->returnMoney = $vals['returnMoney'];
			}
			
			
			if (isset($vals['adminAdjustMoney'])){
				
				$this->adminAdjustMoney = $vals['adminAdjustMoney'];
			}
			
			
			if (isset($vals['returnExDiscountMoney'])){
				
				$this->returnExDiscountMoney = $vals['returnExDiscountMoney'];
			}
			
			
			if (isset($vals['returnCarriage'])){
				
				$this->returnCarriage = $vals['returnCarriage'];
			}
			
			
			if (isset($vals['vipPaidBackCarriage'])){
				
				$this->vipPaidBackCarriage = $vals['vipPaidBackCarriage'];
			}
			
			
			if (isset($vals['returnsWay'])){
				
				$this->returnsWay = $vals['returnsWay'];
			}
			
			
			if (isset($vals['returnTransportNumber'])){
				
				$this->returnTransportNumber = $vals['returnTransportNumber'];
			}
			
			
			if (isset($vals['returnCarrierName'])){
				
				$this->returnCarrierName = $vals['returnCarrierName'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['lastSyncTime'])){
				
				$this->lastSyncTime = $vals['lastSyncTime'];
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
			
			
			if (isset($vals['refundAmount'])){
				
				$this->refundAmount = $vals['refundAmount'];
			}
			
			
			if (isset($vals['moneyDifferent'])){
				
				$this->moneyDifferent = $vals['moneyDifferent'];
			}
			
			
			if (isset($vals['ctReference'])){
				
				$this->ctReference = $vals['ctReference'];
			}
			
			
			if (isset($vals['operation'])){
				
				$this->operation = $vals['operation'];
			}
			
			
			if (isset($vals['applyTime'])){
				
				$this->applyTime = $vals['applyTime'];
			}
			
			
			if (isset($vals['channel'])){
				
				$this->channel = $vals['channel'];
			}
			
			
			if (isset($vals['companyCode'])){
				
				$this->companyCode = $vals['companyCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfcEbsOrderReturnVO';
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
			
			
			
			
			if ("orderEbsScenario" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->orderEbsScenario); 
				
			}
			
			
			
			
			if ("applyType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->applyType); 
				
			}
			
			
			
			
			if ("applyId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyId); 
				
			}
			
			
			
			
			if ("extApplyId" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extApplyId);
				
			}
			
			
			
			
			if ("userId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->userId); 
				
			}
			
			
			
			
			if ("transTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->transTime); 
				
			}
			
			
			
			
			if ("refundType" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->refundType); 
				
			}
			
			
			
			
			if ("returnWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnWarehouse);
				
			}
			
			
			
			
			if ("returnMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnMoney);
				
			}
			
			
			
			
			if ("adminAdjustMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->adminAdjustMoney);
				
			}
			
			
			
			
			if ("returnExDiscountMoney" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnExDiscountMoney);
				
			}
			
			
			
			
			if ("returnCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCarriage);
				
			}
			
			
			
			
			if ("vipPaidBackCarriage" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vipPaidBackCarriage);
				
			}
			
			
			
			
			if ("returnsWay" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->returnsWay); 
				
			}
			
			
			
			
			if ("returnTransportNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnTransportNumber);
				
			}
			
			
			
			
			if ("returnCarrierName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnCarrierName);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("lastSyncTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastSyncTime); 
				
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
			
			
			
			
			if ("refundAmount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->refundAmount);
				
			}
			
			
			
			
			if ("moneyDifferent" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->moneyDifferent);
				
			}
			
			
			
			
			if ("ctReference" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ctReference);
				
			}
			
			
			
			
			if ("operation" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation); 
				
			}
			
			
			
			
			if ("applyTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->applyTime); 
				
			}
			
			
			
			
			if ("channel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->channel);
				
			}
			
			
			
			
			if ("companyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->companyCode);
				
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
		
		
		if($this->orderEbsScenario !== null) {
			
			$xfer += $output->writeFieldBegin('orderEbsScenario');
			$xfer += $output->writeI32($this->orderEbsScenario);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyType !== null) {
			
			$xfer += $output->writeFieldBegin('applyType');
			$xfer += $output->writeI32($this->applyType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyId !== null) {
			
			$xfer += $output->writeFieldBegin('applyId');
			$xfer += $output->writeI64($this->applyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extApplyId !== null) {
			
			$xfer += $output->writeFieldBegin('extApplyId');
			$xfer += $output->writeString($this->extApplyId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->userId !== null) {
			
			$xfer += $output->writeFieldBegin('userId');
			$xfer += $output->writeI64($this->userId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transTime !== null) {
			
			$xfer += $output->writeFieldBegin('transTime');
			$xfer += $output->writeI64($this->transTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->refundType !== null) {
			
			$xfer += $output->writeFieldBegin('refundType');
			$xfer += $output->writeI32($this->refundType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('returnWarehouse');
			$xfer += $output->writeString($this->returnWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnMoney');
			$xfer += $output->writeString($this->returnMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->adminAdjustMoney !== null) {
			
			$xfer += $output->writeFieldBegin('adminAdjustMoney');
			$xfer += $output->writeString($this->adminAdjustMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnExDiscountMoney !== null) {
			
			$xfer += $output->writeFieldBegin('returnExDiscountMoney');
			$xfer += $output->writeString($this->returnExDiscountMoney);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('returnCarriage');
			$xfer += $output->writeString($this->returnCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vipPaidBackCarriage !== null) {
			
			$xfer += $output->writeFieldBegin('vipPaidBackCarriage');
			$xfer += $output->writeString($this->vipPaidBackCarriage);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnsWay !== null) {
			
			$xfer += $output->writeFieldBegin('returnsWay');
			$xfer += $output->writeI32($this->returnsWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnTransportNumber !== null) {
			
			$xfer += $output->writeFieldBegin('returnTransportNumber');
			$xfer += $output->writeString($this->returnTransportNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnCarrierName !== null) {
			
			$xfer += $output->writeFieldBegin('returnCarrierName');
			$xfer += $output->writeString($this->returnCarrierName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastSyncTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastSyncTime');
			$xfer += $output->writeI64($this->lastSyncTime);
			
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
		
		
		if($this->refundAmount !== null) {
			
			$xfer += $output->writeFieldBegin('refundAmount');
			$xfer += $output->writeString($this->refundAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->moneyDifferent !== null) {
			
			$xfer += $output->writeFieldBegin('moneyDifferent');
			$xfer += $output->writeString($this->moneyDifferent);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ctReference !== null) {
			
			$xfer += $output->writeFieldBegin('ctReference');
			$xfer += $output->writeString($this->ctReference);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->operation !== null) {
			
			$xfer += $output->writeFieldBegin('operation');
			$xfer += $output->writeI32($this->operation);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->applyTime !== null) {
			
			$xfer += $output->writeFieldBegin('applyTime');
			$xfer += $output->writeI64($this->applyTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->channel !== null) {
			
			$xfer += $output->writeFieldBegin('channel');
			$xfer += $output->writeString($this->channel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCode !== null) {
			
			$xfer += $output->writeFieldBegin('companyCode');
			$xfer += $output->writeString($this->companyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>