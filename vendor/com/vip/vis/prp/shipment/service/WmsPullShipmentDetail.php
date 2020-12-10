<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class WmsPullShipmentDetail {
	
	static $_TSPEC;
	public $barcode = null;
	public $goodsName = null;
	public $brandName = null;
	public $thirdCategoryname = null;
	public $color = null;
	public $size = null;
	public $volume = null;
	public $grossWeight = null;
	public $quantity = null;
	public $caseQuantity = null;
	public $actualReceivedQuantity = null;
	public $shopCode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'goodsName'
			),
			3 => array(
			'var' => 'brandName'
			),
			4 => array(
			'var' => 'thirdCategoryname'
			),
			5 => array(
			'var' => 'color'
			),
			6 => array(
			'var' => 'size'
			),
			7 => array(
			'var' => 'volume'
			),
			8 => array(
			'var' => 'grossWeight'
			),
			9 => array(
			'var' => 'quantity'
			),
			10 => array(
			'var' => 'caseQuantity'
			),
			11 => array(
			'var' => 'actualReceivedQuantity'
			),
			12 => array(
			'var' => 'shopCode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['thirdCategoryname'])){
				
				$this->thirdCategoryname = $vals['thirdCategoryname'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
			if (isset($vals['grossWeight'])){
				
				$this->grossWeight = $vals['grossWeight'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['caseQuantity'])){
				
				$this->caseQuantity = $vals['caseQuantity'];
			}
			
			
			if (isset($vals['actualReceivedQuantity'])){
				
				$this->actualReceivedQuantity = $vals['actualReceivedQuantity'];
			}
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WmsPullShipmentDetail';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("thirdCategoryname" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCategoryname);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
			}
			
			
			
			
			if ("grossWeight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->grossWeight);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("caseQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->caseQuantity); 
				
			}
			
			
			
			
			if ("actualReceivedQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actualReceivedQuantity); 
				
			}
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopCode);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandName !== null) {
			
			$xfer += $output->writeFieldBegin('brandName');
			$xfer += $output->writeString($this->brandName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->thirdCategoryname !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCategoryname');
			$xfer += $output->writeString($this->thirdCategoryname);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->grossWeight !== null) {
			
			$xfer += $output->writeFieldBegin('grossWeight');
			$xfer += $output->writeDouble($this->grossWeight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->caseQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('caseQuantity');
			$xfer += $output->writeI32($this->caseQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReceivedQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('actualReceivedQuantity');
			$xfer += $output->writeI32($this->actualReceivedQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeString($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>