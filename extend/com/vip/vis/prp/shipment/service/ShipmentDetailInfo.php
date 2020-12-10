<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vis\prp\shipment\service;

class ShipmentDetailInfo {
	
	static $_TSPEC;
	public $shipMentNo = null;
	public $barcode = null;
	public $goodsNo = null;
	public $goodsName = null;
	public $brandName = null;
	public $thirdCategoryName = null;
	public $defectiveLevel = null;
	public $color = null;
	public $size = null;
	public $volume = null;
	public $grossWeight = null;
	public $quantity = null;
	public $caseQuantity = null;
	public $shopCode = null;
	public $actualReceivedQuantity = null;
	public $createBy = null;
	public $updateBy = null;
	public $createTime = null;
	public $updateTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'shipMentNo'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'goodsNo'
			),
			4 => array(
			'var' => 'goodsName'
			),
			5 => array(
			'var' => 'brandName'
			),
			6 => array(
			'var' => 'thirdCategoryName'
			),
			7 => array(
			'var' => 'defectiveLevel'
			),
			8 => array(
			'var' => 'color'
			),
			9 => array(
			'var' => 'size'
			),
			10 => array(
			'var' => 'volume'
			),
			11 => array(
			'var' => 'grossWeight'
			),
			12 => array(
			'var' => 'quantity'
			),
			13 => array(
			'var' => 'caseQuantity'
			),
			14 => array(
			'var' => 'shopCode'
			),
			15 => array(
			'var' => 'actualReceivedQuantity'
			),
			16 => array(
			'var' => 'createBy'
			),
			17 => array(
			'var' => 'updateBy'
			),
			18 => array(
			'var' => 'createTime'
			),
			19 => array(
			'var' => 'updateTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['shipMentNo'])){
				
				$this->shipMentNo = $vals['shipMentNo'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['goodsNo'])){
				
				$this->goodsNo = $vals['goodsNo'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['brandName'])){
				
				$this->brandName = $vals['brandName'];
			}
			
			
			if (isset($vals['thirdCategoryName'])){
				
				$this->thirdCategoryName = $vals['thirdCategoryName'];
			}
			
			
			if (isset($vals['defectiveLevel'])){
				
				$this->defectiveLevel = $vals['defectiveLevel'];
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
			
			
			if (isset($vals['shopCode'])){
				
				$this->shopCode = $vals['shopCode'];
			}
			
			
			if (isset($vals['actualReceivedQuantity'])){
				
				$this->actualReceivedQuantity = $vals['actualReceivedQuantity'];
			}
			
			
			if (isset($vals['createBy'])){
				
				$this->createBy = $vals['createBy'];
			}
			
			
			if (isset($vals['updateBy'])){
				
				$this->updateBy = $vals['updateBy'];
			}
			
			
			if (isset($vals['createTime'])){
				
				$this->createTime = $vals['createTime'];
			}
			
			
			if (isset($vals['updateTime'])){
				
				$this->updateTime = $vals['updateTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ShipmentDetailInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("shipMentNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shipMentNo);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("goodsNo" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsNo);
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("brandName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brandName);
				
			}
			
			
			
			
			if ("thirdCategoryName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->thirdCategoryName);
				
			}
			
			
			
			
			if ("defectiveLevel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->defectiveLevel);
				
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
			
			
			
			
			if ("shopCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shopCode);
				
			}
			
			
			
			
			if ("actualReceivedQuantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->actualReceivedQuantity); 
				
			}
			
			
			
			
			if ("createBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->createBy);
				
			}
			
			
			
			
			if ("updateBy" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->updateBy);
				
			}
			
			
			
			
			if ("createTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->createTime);
				
			}
			
			
			
			
			if ("updateTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->updateTime);
				
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
		
		if($this->shipMentNo !== null) {
			
			$xfer += $output->writeFieldBegin('shipMentNo');
			$xfer += $output->writeString($this->shipMentNo);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsNo !== null) {
			
			$xfer += $output->writeFieldBegin('goodsNo');
			$xfer += $output->writeString($this->goodsNo);
			
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
		
		
		if($this->thirdCategoryName !== null) {
			
			$xfer += $output->writeFieldBegin('thirdCategoryName');
			$xfer += $output->writeString($this->thirdCategoryName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->defectiveLevel !== null) {
			
			$xfer += $output->writeFieldBegin('defectiveLevel');
			$xfer += $output->writeString($this->defectiveLevel);
			
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
		
		
		if($this->shopCode !== null) {
			
			$xfer += $output->writeFieldBegin('shopCode');
			$xfer += $output->writeString($this->shopCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->actualReceivedQuantity !== null) {
			
			$xfer += $output->writeFieldBegin('actualReceivedQuantity');
			$xfer += $output->writeI32($this->actualReceivedQuantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createBy !== null) {
			
			$xfer += $output->writeFieldBegin('createBy');
			$xfer += $output->writeString($this->createBy);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->updateBy !== null) {
			
			$xfer += $output->writeFieldBegin('updateBy');
			$xfer += $output->writeString($this->updateBy);
			
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>