<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoDetailInfoModel {
	
	static $_TSPEC;
	public $type = null;
	public $vendorCode = null;
	public $vendorId = null;
	public $vendorName = null;
	public $warehouse = null;
	public $brandName = null;
	public $buyer = null;
	public $buyerCode = null;
	public $createTime = null;
	public $lastModifiedTime = null;
	public $po = null;
	public $goodsNo = null;
	public $goodsBarCode = null;
	public $currencyCode = null;
	public $priceIncludingTax = null;
	public $priceExcludingTax = null;
	public $goodDesc = null;
	public $qty = null;
	public $tradeModel = null;
	public $lineNum = null;
	public $tagPrice = null;
	public $brandSn = null;
	public $skuId = null;
	public $wmsWarehouse = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'vendorId'
			),
			4 => array(
			'var' => 'vendorName'
			),
			5 => array(
			'var' => 'warehouse'
			),
			6 => array(
			'var' => 'brandName'
			),
			7 => array(
			'var' => 'buyer'
			),
			8 => array(
			'var' => 'buyerCode'
			),
			9 => array(
			'var' => 'createTime'
			),
			10 => array(
			'var' => 'lastModifiedTime'
			),
			11 => array(
			'var' => 'po'
			),
			12 => array(
			'var' => 'goodsNo'
			),
			13 => array(
			'var' => 'goodsBarCode'
			),
			14 => array(
			'var' => 'currencyCode'
			),
			15 => array(
			'var' => 'priceIncludingTax'
			),
			16 => array(
			'var' => 'priceExcludingTax'
			),
			17 => array(
			'var' => 'goodDesc'
			),
			18 => array(
			'var' => 'qty'
			),
			19 => array(
			'var' => 'tradeModel'
			),
			20 => array(
			'var' => 'lineNum'
			),
			21 => array(
			'var' => 'tagPrice'
			),
			22 => array(
			'var' => 'brandSn'
			),
			23 => array(
			'var' => 'skuId'
			),
			24 => array(
			'var' => 'wmsWarehouse'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['vendorId'])){
				
				$this->vendorId = $vals['vendorId'];
			}
			
			
			if (isset($vals['vendorName'])){
				
				$this->vendorName = $vals['vendorName'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyerCode'])){
				
				$this->buyerCode = $vals['buyerCode'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['lastModifiedTime'])){
				
				$this->lastModifiedTime = $vals['lastModifiedTime'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['goodsBarCode'])){
				
				$this->goodsBarCode = $vals['goodsBarCode'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
			if (isset($vals['priceIncludingTax'])){
				
				$this->priceIncludingTax = $vals['priceIncludingTax'];
			}
			
			
			if (isset($vals['priceExcludingTax'])){
				
				$this->priceExcludingTax = $vals['priceExcludingTax'];
			}
			
			
			if (isset($vals['goodDesc'])){
				
				$this->goodDesc = $vals['goodDesc'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['lineNum'])){
				
				$this->lineNum = $vals['lineNum'];
			}
			
			
			if (isset($vals['tagPrice'])){
				
				$this->tagPrice = $vals['tagPrice'];
			}
			
			
			if (isset($vals['brandSn'])){
				
				$this->brandSn = $vals['brandSn'];
			}
			
			
			if (isset($vals['skuId'])){
				
				$this->skuId = $vals['skuId'];
			}
			
			
			if (isset($vals['wmsWarehouse'])){
				
				$this->wmsWarehouse = $vals['wmsWarehouse'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoDetailInfoModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("vendorId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendorId); 
				
			}
			
			
			
			
			if ("vendorName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorName);
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyerCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyerCode);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime); 
				
			}
			
			
			
			
			if ("lastModifiedTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->lastModifiedTime); 
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("goodsBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsBarCode);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
			}
			
			
			
			
			if ("priceIncludingTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceIncludingTax);
				
			}
			
			
			
			
			if ("priceExcludingTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceExcludingTax);
				
			}
			
			
			
			
			if ("goodDesc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodDesc);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("tradeModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeModel);
				
			}
			
			
			
			
			if ("lineNum" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->lineNum); 
				
			}
			
			
			
			
			if ("tagPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagPrice);
				
			}
			
			
			
			
			if ("brandSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandSn);
				
			}
			
			
			
			
			if ("skuId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->skuId); 
				
			}
			
			
			
			
			if ("wmsWarehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wmsWarehouse);
				
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
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorId !== null) {
			
			$xfer += $output->writeFieldBegin('vendorId');
			$xfer += $output->writeI32($this->vendorId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorName !== null) {
			
			$xfer += $output->writeFieldBegin('vendorName');
			$xfer += $output->writeString($this->vendorName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyer !== null) {
			
			$xfer += $output->writeFieldBegin('buyer');
			$xfer += $output->writeString($this->buyer);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->buyerCode !== null) {
			
			$xfer += $output->writeFieldBegin('buyerCode');
			$xfer += $output->writeString($this->buyerCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTime !== null) {
			
			$xfer += $output->writeFieldBegin('createTime');
			$xfer += $output->writeI64($this->createTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lastModifiedTime !== null) {
			
			$xfer += $output->writeFieldBegin('lastModifiedTime');
			$xfer += $output->writeI64($this->lastModifiedTime);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodsBarCode');
			$xfer += $output->writeString($this->goodsBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceIncludingTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceIncludingTax');
			$xfer += $output->writeString($this->priceIncludingTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceExcludingTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceExcludingTax');
			$xfer += $output->writeString($this->priceExcludingTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodDesc !== null) {
			
			$xfer += $output->writeFieldBegin('goodDesc');
			$xfer += $output->writeString($this->goodDesc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeModel !== null) {
			
			$xfer += $output->writeFieldBegin('tradeModel');
			$xfer += $output->writeString($this->tradeModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->lineNum !== null) {
			
			$xfer += $output->writeFieldBegin('lineNum');
			$xfer += $output->writeI32($this->lineNum);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagPrice !== null) {
			
			$xfer += $output->writeFieldBegin('tagPrice');
			$xfer += $output->writeString($this->tagPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandSn !== null) {
			
			$xfer += $output->writeFieldBegin('brandSn');
			$xfer += $output->writeString($this->brandSn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->skuId !== null) {
			
			$xfer += $output->writeFieldBegin('skuId');
			$xfer += $output->writeI64($this->skuId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wmsWarehouse !== null) {
			
			$xfer += $output->writeFieldBegin('wmsWarehouse');
			$xfer += $output->writeString($this->wmsWarehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>