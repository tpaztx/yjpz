<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class VendorBillItemSource {
	
	static $_TSPEC;
	public $defCode = null;
	public $taxCode = null;
	public $feeItem = null;
	public $feeDef = null;
	public $vendorCode = null;
	public $vendorName = null;
	public $busiAssistantName = null;
	public $dept = null;
	public $brand = null;
	public $cooperationTypeName = null;
	public $comments = null;
	public $amount = null;
	public $currencyCode = null;
	public $storehouse = null;
	public $so = null;
	public $po = null;
	public $initDeductWay = null;
	public $orgName = null;
	public $deductWay = null;
	public $finalOrgName = null;
	public $status = null;
	public $accountant = null;
	public $seqNo = null;
	public $billNumber = null;
	public $creationDate = null;
	public $itemNo = null;
	public $itemDesc = null;
	public $itemPriceAdjustQuantity = null;
	public $itemPriceAdjustAmount = null;
	public $priceAdjustClosingDate = null;
	public $priceAdjustStartDateActive = null;
	public $priceAdjustEndDateActive = null;
	public $signTime = null;
	public $startDate = null;
	public $endDate = null;
	public $accountantName = null;
	public $id = null;
	public $taxRate = null;
	public $brandName = null;
	public $vendorGoodsNo = null;
	public $itemSize = null;
	public $quantity = null;
	public $extOrderNum = null;
	public $poWarehouseType = null;
	public $poDeliveryType = null;
	public $grossMarginRate = null;
	public $returnDocNo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'defCode'
			),
			2 => array(
			'var' => 'taxCode'
			),
			3 => array(
			'var' => 'feeItem'
			),
			4 => array(
			'var' => 'feeDef'
			),
			5 => array(
			'var' => 'vendorCode'
			),
			6 => array(
			'var' => 'vendorName'
			),
			7 => array(
			'var' => 'busiAssistantName'
			),
			8 => array(
			'var' => 'dept'
			),
			9 => array(
			'var' => 'brand'
			),
			10 => array(
			'var' => 'cooperationTypeName'
			),
			11 => array(
			'var' => 'comments'
			),
			12 => array(
			'var' => 'amount'
			),
			13 => array(
			'var' => 'currencyCode'
			),
			14 => array(
			'var' => 'storehouse'
			),
			15 => array(
			'var' => 'so'
			),
			16 => array(
			'var' => 'po'
			),
			17 => array(
			'var' => 'initDeductWay'
			),
			18 => array(
			'var' => 'orgName'
			),
			19 => array(
			'var' => 'deductWay'
			),
			20 => array(
			'var' => 'finalOrgName'
			),
			21 => array(
			'var' => 'status'
			),
			22 => array(
			'var' => 'accountant'
			),
			23 => array(
			'var' => 'seqNo'
			),
			24 => array(
			'var' => 'billNumber'
			),
			25 => array(
			'var' => 'creationDate'
			),
			26 => array(
			'var' => 'itemNo'
			),
			27 => array(
			'var' => 'itemDesc'
			),
			28 => array(
			'var' => 'itemPriceAdjustQuantity'
			),
			29 => array(
			'var' => 'itemPriceAdjustAmount'
			),
			30 => array(
			'var' => 'priceAdjustClosingDate'
			),
			31 => array(
			'var' => 'priceAdjustStartDateActive'
			),
			32 => array(
			'var' => 'priceAdjustEndDateActive'
			),
			33 => array(
			'var' => 'signTime'
			),
			34 => array(
			'var' => 'startDate'
			),
			35 => array(
			'var' => 'endDate'
			),
			36 => array(
			'var' => 'accountantName'
			),
			37 => array(
			'var' => 'id'
			),
			38 => array(
			'var' => 'taxRate'
			),
			39 => array(
			'var' => 'brandName'
			),
			40 => array(
			'var' => 'vendorGoodsNo'
			),
			41 => array(
			'var' => 'itemSize'
			),
			42 => array(
			'var' => 'quantity'
			),
			43 => array(
			'var' => 'extOrderNum'
			),
			44 => array(
			'var' => 'poWarehouseType'
			),
			45 => array(
			'var' => 'poDeliveryType'
			),
			46 => array(
			'var' => 'grossMarginRate'
			),
			47 => array(
			'var' => 'returnDocNo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['defCode'])){
				
				$this->defCode = $vals['defCode'];
			}
			
			
			if (isset($vals['taxCode'])){
				
				$this->taxCode = $vals['taxCode'];
			}
			
			
			if (isset($vals['feeItem'])){
				
				$this->feeItem = $vals['feeItem'];
			}
			
			
			if (isset($vals['feeDef'])){
				
				$this->feeDef = $vals['feeDef'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['busiAssistantName'])){
				
				$this->busiAssistantName = $vals['busiAssistantName'];
			}
			
			
			if (isset($vals['dept'])){
				
				$this->dept = $vals['dept'];
			}
			
			
			if (isset($vals['brand'])){
				
				$this->brand = $vals['brand'];
			}
			
			
			if (isset($vals['cooperationTypeName'])){
				
				$this->cooperationTypeName = $vals['cooperationTypeName'];
			}
			
			
			if (isset($vals['comments'])){
				
				$this->comments = $vals['comments'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['storehouse'])){
				
				$this->storehouse = $vals['storehouse'];
			}
			
			
			if (isset($vals['so'])){
				
				$this->so = $vals['so'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['initDeductWay'])){
				
				$this->initDeductWay = $vals['initDeductWay'];
			}
			
			
			if (isset($vals['orgName'])){
				
				$this->orgName = $vals['orgName'];
			}
			
			
			if (isset($vals['deductWay'])){
				
				$this->deductWay = $vals['deductWay'];
			}
			
			
			if (isset($vals['finalOrgName'])){
				
				$this->finalOrgName = $vals['finalOrgName'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
			if (isset($vals['accountant'])){
				
				$this->accountant = $vals['accountant'];
			}
			
			
			if (isset($vals['seqNo'])){
				
				$this->seqNo = $vals['seqNo'];
			}
			
			
			if (isset($vals['billNumber'])){
				
				$this->billNumber = $vals['billNumber'];
			}
			
			
			if (isset($vals['creationDate'])){
				
				$this->creationDate = $vals['creationDate'];
			}
			
			
			if (isset($vals['itemNo'])){
				
				$this->itemNo = $vals['itemNo'];
			}
			
			
			if (isset($vals['itemDesc'])){
				
				$this->itemDesc = $vals['itemDesc'];
			}
			
			
			if (isset($vals['itemPriceAdjustQuantity'])){
				
				$this->itemPriceAdjustQuantity = $vals['itemPriceAdjustQuantity'];
			}
			
			
			if (isset($vals['itemPriceAdjustAmount'])){
				
				$this->itemPriceAdjustAmount = $vals['itemPriceAdjustAmount'];
			}
			
			
			if (isset($vals['priceAdjustClosingDate'])){
				
				$this->priceAdjustClosingDate = $vals['priceAdjustClosingDate'];
			}
			
			
			if (isset($vals['priceAdjustStartDateActive'])){
				
				$this->priceAdjustStartDateActive = $vals['priceAdjustStartDateActive'];
			}
			
			
			if (isset($vals['priceAdjustEndDateActive'])){
				
				$this->priceAdjustEndDateActive = $vals['priceAdjustEndDateActive'];
			}
			
			
			if (isset($vals['signTime'])){
				
				$this->signTime = $vals['signTime'];
			}
			
			
			if (isset($vals['startDate'])){
				
				$this->startDate = $vals['startDate'];
			}
			
			
			if (isset($vals['endDate'])){
				
				$this->endDate = $vals['endDate'];
			}
			
			
			if (isset($vals['accountantName'])){
				
				$this->accountantName = $vals['accountantName'];
			}
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['vendorGoodsNo'])){
				
				$this->vendorGoodsNo = $vals['vendorGoodsNo'];
			}
			
			
			if (isset($vals['itemSize'])){
				
				$this->itemSize = $vals['itemSize'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['extOrderNum'])){
				
				$this->extOrderNum = $vals['extOrderNum'];
			}
			
			
			if (isset($vals['poWarehouseType'])){
				
				$this->poWarehouseType = $vals['poWarehouseType'];
			}
			
			
			if (isset($vals['poDeliveryType'])){
				
				$this->poDeliveryType = $vals['poDeliveryType'];
			}
			
			
			if (isset($vals['grossMarginRate'])){
				
				$this->grossMarginRate = $vals['grossMarginRate'];
			}
			
			
			if (isset($vals['returnDocNo'])){
				
				$this->returnDocNo = $vals['returnDocNo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VendorBillItemSource';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("defCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defCode);
				
			}
			
			
			
			
			if ("taxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxCode);
				
			}
			
			
			
			
			if ("feeItem" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeItem);
				
			}
			
			
			
			
			if ("feeDef" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->feeDef);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("busiAssistantName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->busiAssistantName);
				
			}
			
			
			
			
			if ("dept" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->dept);
				
			}
			
			
			
			
			if ("brand" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand);
				
			}
			
			
			
			
			if ("cooperationTypeName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperationTypeName);
				
			}
			
			
			
			
			if ("comments" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->comments);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("storehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->storehouse);
				
			}
			
			
			
			
			if ("so" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->so);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("initDeductWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->initDeductWay);
				
			}
			
			
			
			
			if ("orgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orgName);
				
			}
			
			
			
			
			if ("deductWay" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deductWay);
				
			}
			
			
			
			
			if ("finalOrgName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->finalOrgName);
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->status);
				
			}
			
			
			
			
			if ("accountant" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->accountant); 
				
			}
			
			
			
			
			if ("seqNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->seqNo);
				
			}
			
			
			
			
			if ("billNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNumber);
				
			}
			
			
			
			
			if ("creationDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->creationDate);
				
			}
			
			
			
			
			if ("itemNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemNo);
				
			}
			
			
			
			
			if ("itemDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemDesc);
				
			}
			
			
			
			
			if ("itemPriceAdjustQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->itemPriceAdjustQuantity);
				
			}
			
			
			
			
			if ("itemPriceAdjustAmount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->itemPriceAdjustAmount);
				
			}
			
			
			
			
			if ("priceAdjustClosingDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustClosingDate);
				
			}
			
			
			
			
			if ("priceAdjustStartDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustStartDateActive);
				
			}
			
			
			
			
			if ("priceAdjustEndDateActive" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->priceAdjustEndDateActive);
				
			}
			
			
			
			
			if ("signTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->signTime);
				
			}
			
			
			
			
			if ("startDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->startDate);
				
			}
			
			
			
			
			if ("endDate" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endDate);
				
			}
			
			
			
			
			if ("accountantName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->accountantName);
				
			}
			
			
			
			
			if ("id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->id); 
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("vendorGoodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorGoodsNo);
				
			}
			
			
			
			
			if ("itemSize" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->itemSize);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->quantity);
				
			}
			
			
			
			
			if ("extOrderNum" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->extOrderNum);
				
			}
			
			
			
			
			if ("poWarehouseType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poWarehouseType);
				
			}
			
			
			
			
			if ("poDeliveryType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->poDeliveryType);
				
			}
			
			
			
			
			if ("grossMarginRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->grossMarginRate);
				
			}
			
			
			
			
			if ("returnDocNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->returnDocNo);
				
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
		
		if($this->defCode !== null) {
			
			$xfer += $output->writeFieldBegin('defCode');
			$xfer += $output->writeString($this->defCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxCode');
			$xfer += $output->writeString($this->taxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeItem !== null) {
			
			$xfer += $output->writeFieldBegin('feeItem');
			$xfer += $output->writeString($this->feeItem);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->feeDef !== null) {
			
			$xfer += $output->writeFieldBegin('feeDef');
			$xfer += $output->writeString($this->feeDef);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->busiAssistantName !== null) {
			
			$xfer += $output->writeFieldBegin('busiAssistantName');
			$xfer += $output->writeString($this->busiAssistantName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->dept !== null) {
			
			$xfer += $output->writeFieldBegin('dept');
			$xfer += $output->writeString($this->dept);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand !== null) {
			
			$xfer += $output->writeFieldBegin('brand');
			$xfer += $output->writeString($this->brand);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperationTypeName !== null) {
			
			$xfer += $output->writeFieldBegin('cooperationTypeName');
			$xfer += $output->writeString($this->cooperationTypeName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->comments !== null) {
			
			$xfer += $output->writeFieldBegin('comments');
			$xfer += $output->writeString($this->comments);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->amount !== null) {
			
			$xfer += $output->writeFieldBegin('amount');
			$xfer += $output->writeDouble($this->amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->storehouse !== null) {
			
			$xfer += $output->writeFieldBegin('storehouse');
			$xfer += $output->writeString($this->storehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->so !== null) {
			
			$xfer += $output->writeFieldBegin('so');
			$xfer += $output->writeString($this->so);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->initDeductWay !== null) {
			
			$xfer += $output->writeFieldBegin('initDeductWay');
			$xfer += $output->writeString($this->initDeductWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orgName !== null) {
			
			$xfer += $output->writeFieldBegin('orgName');
			$xfer += $output->writeString($this->orgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deductWay !== null) {
			
			$xfer += $output->writeFieldBegin('deductWay');
			$xfer += $output->writeString($this->deductWay);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->finalOrgName !== null) {
			
			$xfer += $output->writeFieldBegin('finalOrgName');
			$xfer += $output->writeString($this->finalOrgName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeString($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountant !== null) {
			
			$xfer += $output->writeFieldBegin('accountant');
			$xfer += $output->writeI64($this->accountant);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->seqNo !== null) {
			
			$xfer += $output->writeFieldBegin('seqNo');
			$xfer += $output->writeString($this->seqNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->billNumber !== null) {
			
			$xfer += $output->writeFieldBegin('billNumber');
			$xfer += $output->writeString($this->billNumber);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->creationDate !== null) {
			
			$xfer += $output->writeFieldBegin('creationDate');
			$xfer += $output->writeI64($this->creationDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemNo !== null) {
			
			$xfer += $output->writeFieldBegin('itemNo');
			$xfer += $output->writeString($this->itemNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemDesc !== null) {
			
			$xfer += $output->writeFieldBegin('itemDesc');
			$xfer += $output->writeString($this->itemDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemPriceAdjustQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('itemPriceAdjustQuantity');
			$xfer += $output->writeDouble($this->itemPriceAdjustQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemPriceAdjustAmount !== null) {
			
			$xfer += $output->writeFieldBegin('itemPriceAdjustAmount');
			$xfer += $output->writeDouble($this->itemPriceAdjustAmount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustClosingDate !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustClosingDate');
			$xfer += $output->writeI64($this->priceAdjustClosingDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustStartDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustStartDateActive');
			$xfer += $output->writeI64($this->priceAdjustStartDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceAdjustEndDateActive !== null) {
			
			$xfer += $output->writeFieldBegin('priceAdjustEndDateActive');
			$xfer += $output->writeI64($this->priceAdjustEndDateActive);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->signTime !== null) {
			
			$xfer += $output->writeFieldBegin('signTime');
			$xfer += $output->writeI64($this->signTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->startDate !== null) {
			
			$xfer += $output->writeFieldBegin('startDate');
			$xfer += $output->writeI64($this->startDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->endDate !== null) {
			
			$xfer += $output->writeFieldBegin('endDate');
			$xfer += $output->writeI64($this->endDate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->accountantName !== null) {
			
			$xfer += $output->writeFieldBegin('accountantName');
			$xfer += $output->writeString($this->accountantName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->id !== null) {
			
			$xfer += $output->writeFieldBegin('id');
			$xfer += $output->writeI64($this->id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorGoodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('vendorGoodsNo');
			$xfer += $output->writeString($this->vendorGoodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->itemSize !== null) {
			
			$xfer += $output->writeFieldBegin('itemSize');
			$xfer += $output->writeString($this->itemSize);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeDouble($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->extOrderNum !== null) {
			
			$xfer += $output->writeFieldBegin('extOrderNum');
			$xfer += $output->writeString($this->extOrderNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poWarehouseType !== null) {
			
			$xfer += $output->writeFieldBegin('poWarehouseType');
			$xfer += $output->writeString($this->poWarehouseType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->poDeliveryType !== null) {
			
			$xfer += $output->writeFieldBegin('poDeliveryType');
			$xfer += $output->writeString($this->poDeliveryType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossMarginRate !== null) {
			
			$xfer += $output->writeFieldBegin('grossMarginRate');
			$xfer += $output->writeString($this->grossMarginRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->returnDocNo !== null) {
			
			$xfer += $output->writeFieldBegin('returnDocNo');
			$xfer += $output->writeString($this->returnDocNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>