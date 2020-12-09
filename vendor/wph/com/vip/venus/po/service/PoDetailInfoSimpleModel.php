<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoDetailInfoSimpleModel {
	
	static $_TSPEC;
	public $type = null;
	public $brandName = null;
	public $po = null;
	public $goodsNo = null;
	public $goodsBarCode = null;
	public $currencyCode = null;
	public $goodDesc = null;
	public $qty = null;
	public $tradeModel = null;
	public $price = null;
	public $priceIncludingTax = null;
	public $priceExcludingTax = null;
	public $brandCode = null;
	public $receiveQty = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'type'
			),
			2 => array(
			'var' => 'brandName'
			),
			3 => array(
			'var' => 'po'
			),
			4 => array(
			'var' => 'goodsNo'
			),
			5 => array(
			'var' => 'goodsBarCode'
			),
			6 => array(
			'var' => 'currencyCode'
			),
			7 => array(
			'var' => 'goodDesc'
			),
			8 => array(
			'var' => 'qty'
			),
			9 => array(
			'var' => 'tradeModel'
			),
			10 => array(
			'var' => 'price'
			),
			11 => array(
			'var' => 'priceIncludingTax'
			),
			12 => array(
			'var' => 'priceExcludingTax'
			),
			13 => array(
			'var' => 'brandCode'
			),
			14 => array(
			'var' => 'receiveQty'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
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
			
			
			if (isset($vals['goodDesc'])){
				
				$this->goodDesc = $vals['goodDesc'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['priceIncludingTax'])){
				
				$this->priceIncludingTax = $vals['priceIncludingTax'];
			}
			
			
			if (isset($vals['priceExcludingTax'])){
				
				$this->priceExcludingTax = $vals['priceExcludingTax'];
			}
			
			
			if (isset($vals['brandCode'])){
				
				$this->brandCode = $vals['brandCode'];
			}
			
			
			if (isset($vals['receiveQty'])){
				
				$this->receiveQty = $vals['receiveQty'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoDetailInfoSimpleModel';
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
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
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
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("priceIncludingTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceIncludingTax);
				
			}
			
			
			
			
			if ("priceExcludingTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceExcludingTax);
				
			}
			
			
			
			
			if ("brandCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandCode);
				
			}
			
			
			
			
			if ("receiveQty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->receiveQty); 
				
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
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
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
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
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
		
		
		if($this->brandCode !== null) {
			
			$xfer += $output->writeFieldBegin('brandCode');
			$xfer += $output->writeString($this->brandCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiveQty !== null) {
			
			$xfer += $output->writeFieldBegin('receiveQty');
			$xfer += $output->writeI32($this->receiveQty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>