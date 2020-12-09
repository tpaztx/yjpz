<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PriceInfoNoTaxModel {
	
	static $_TSPEC;
	public $goodsBarCode = null;
	public $po = null;
	public $vendorCode = null;
	public $type = null;
	public $priceType = null;
	public $priceExcludingTax = null;
	public $tradeModel = null;
	public $currencyCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'goodsBarCode'
			),
			2 => array(
			'var' => 'po'
			),
			3 => array(
			'var' => 'vendorCode'
			),
			4 => array(
			'var' => 'type'
			),
			5 => array(
			'var' => 'priceType'
			),
			6 => array(
			'var' => 'priceExcludingTax'
			),
			7 => array(
			'var' => 'tradeModel'
			),
			8 => array(
			'var' => 'currencyCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['goodsBarCode'])){
				
				$this->goodsBarCode = $vals['goodsBarCode'];
			}
			
			
			if (isset($vals['po'])){
				
				$this->po = $vals['po'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['priceType'])){
				
				$this->priceType = $vals['priceType'];
			}
			
			
			if (isset($vals['priceExcludingTax'])){
				
				$this->priceExcludingTax = $vals['priceExcludingTax'];
			}
			
			
			if (isset($vals['tradeModel'])){
				
				$this->tradeModel = $vals['tradeModel'];
			}
			
			
			if (isset($vals['currencyCode'])){
				
				$this->currencyCode = $vals['currencyCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PriceInfoNoTaxModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("goodsBarCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsBarCode);
				
			}
			
			
			
			
			if ("po" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->type);
				
			}
			
			
			
			
			if ("priceType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceType);
				
			}
			
			
			
			
			if ("priceExcludingTax" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->priceExcludingTax);
				
			}
			
			
			
			
			if ("tradeModel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tradeModel);
				
			}
			
			
			
			
			if ("currencyCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->currencyCode);
				
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
		
		if($this->goodsBarCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodsBarCode');
			$xfer += $output->writeString($this->goodsBarCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po !== null) {
			
			$xfer += $output->writeFieldBegin('po');
			$xfer += $output->writeString($this->po);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->vendorCode !== null) {
			
			$xfer += $output->writeFieldBegin('vendorCode');
			$xfer += $output->writeString($this->vendorCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->type !== null) {
			
			$xfer += $output->writeFieldBegin('type');
			$xfer += $output->writeString($this->type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceType !== null) {
			
			$xfer += $output->writeFieldBegin('priceType');
			$xfer += $output->writeString($this->priceType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->priceExcludingTax !== null) {
			
			$xfer += $output->writeFieldBegin('priceExcludingTax');
			$xfer += $output->writeString($this->priceExcludingTax);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tradeModel !== null) {
			
			$xfer += $output->writeFieldBegin('tradeModel');
			$xfer += $output->writeString($this->tradeModel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->currencyCode !== null) {
			
			$xfer += $output->writeFieldBegin('currencyCode');
			$xfer += $output->writeString($this->currencyCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>