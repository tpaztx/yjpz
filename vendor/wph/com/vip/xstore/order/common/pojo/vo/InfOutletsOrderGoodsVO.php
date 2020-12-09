<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\common\pojo\vo;

class InfOutletsOrderGoodsVO {
	
	static $_TSPEC;
	public $id = null;
	public $outletsOrdersId = null;
	public $addTime = null;
	public $barcode = null;
	public $deleted = null;
	public $discountAmt = null;
	public $discountRate = null;
	public $goodsAmt = null;
	public $goodsCode = null;
	public $goodsId = null;
	public $goodsName = null;
	public $goodsUnit = null;
	public $taxCode = null;
	public $taxName = null;
	public $taxRate = null;
	public $orderAmt = null;
	public $plazaCode = null;
	public $posUsercode = null;
	public $price = null;
	public $qty = null;
	public $updateTime = null;
	public $itemCreateTime = null;
	public $itemUpdateTime = null;
	public $orderPrice = null;
	
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
			'var' => 'barcode'
			),
			5 => array(
			'var' => 'deleted'
			),
			6 => array(
			'var' => 'discountAmt'
			),
			7 => array(
			'var' => 'discountRate'
			),
			8 => array(
			'var' => 'goodsAmt'
			),
			9 => array(
			'var' => 'goodsCode'
			),
			10 => array(
			'var' => 'goodsId'
			),
			11 => array(
			'var' => 'goodsName'
			),
			12 => array(
			'var' => 'goodsUnit'
			),
			13 => array(
			'var' => 'taxCode'
			),
			14 => array(
			'var' => 'taxName'
			),
			15 => array(
			'var' => 'taxRate'
			),
			16 => array(
			'var' => 'orderAmt'
			),
			17 => array(
			'var' => 'plazaCode'
			),
			18 => array(
			'var' => 'posUsercode'
			),
			19 => array(
			'var' => 'price'
			),
			20 => array(
			'var' => 'qty'
			),
			21 => array(
			'var' => 'updateTime'
			),
			22 => array(
			'var' => 'itemCreateTime'
			),
			23 => array(
			'var' => 'itemUpdateTime'
			),
			24 => array(
			'var' => 'orderPrice'
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
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['discountAmt'])){
				
				$this->discountAmt = $vals['discountAmt'];
			}
			
			
			if (isset($vals['discountRate'])){
				
				$this->discountRate = $vals['discountRate'];
			}
			
			
			if (isset($vals['goodsAmt'])){
				
				$this->goodsAmt = $vals['goodsAmt'];
			}
			
			
			if (isset($vals['goodsCode'])){
				
				$this->goodsCode = $vals['goodsCode'];
			}
			
			
			if (isset($vals['goodsId'])){
				
				$this->goodsId = $vals['goodsId'];
			}
			
			
			if (isset($vals['goodsName'])){
				
				$this->goodsName = $vals['goodsName'];
			}
			
			
			if (isset($vals['goodsUnit'])){
				
				$this->goodsUnit = $vals['goodsUnit'];
			}
			
			
			if (isset($vals['taxCode'])){
				
				$this->taxCode = $vals['taxCode'];
			}
			
			
			if (isset($vals['taxName'])){
				
				$this->taxName = $vals['taxName'];
			}
			
			
			if (isset($vals['taxRate'])){
				
				$this->taxRate = $vals['taxRate'];
			}
			
			
			if (isset($vals['orderAmt'])){
				
				$this->orderAmt = $vals['orderAmt'];
			}
			
			
			if (isset($vals['plazaCode'])){
				
				$this->plazaCode = $vals['plazaCode'];
			}
			
			
			if (isset($vals['posUsercode'])){
				
				$this->posUsercode = $vals['posUsercode'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
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
			
			
			if (isset($vals['orderPrice'])){
				
				$this->orderPrice = $vals['orderPrice'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'InfOutletsOrderGoodsVO';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("discountAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountAmt);
				
			}
			
			
			
			
			if ("discountRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discountRate);
				
			}
			
			
			
			
			if ("goodsAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsAmt);
				
			}
			
			
			
			
			if ("goodsCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsCode);
				
			}
			
			
			
			
			if ("goodsId" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goodsId); 
				
			}
			
			
			
			
			if ("goodsName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsName);
				
			}
			
			
			
			
			if ("goodsUnit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goodsUnit);
				
			}
			
			
			
			
			if ("taxCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxCode);
				
			}
			
			
			
			
			if ("taxName" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxName);
				
			}
			
			
			
			
			if ("taxRate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->taxRate);
				
			}
			
			
			
			
			if ("orderAmt" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderAmt);
				
			}
			
			
			
			
			if ("plazaCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plazaCode);
				
			}
			
			
			
			
			if ("posUsercode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->posUsercode);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
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
			
			
			
			
			if ("orderPrice" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderPrice);
				
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
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->deleted !== null) {
			
			$xfer += $output->writeFieldBegin('deleted');
			$xfer += $output->writeString($this->deleted);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountAmt !== null) {
			
			$xfer += $output->writeFieldBegin('discountAmt');
			$xfer += $output->writeString($this->discountAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->discountRate !== null) {
			
			$xfer += $output->writeFieldBegin('discountRate');
			$xfer += $output->writeString($this->discountRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsAmt !== null) {
			
			$xfer += $output->writeFieldBegin('goodsAmt');
			$xfer += $output->writeString($this->goodsAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsCode !== null) {
			
			$xfer += $output->writeFieldBegin('goodsCode');
			$xfer += $output->writeString($this->goodsCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsId !== null) {
			
			$xfer += $output->writeFieldBegin('goodsId');
			$xfer += $output->writeI64($this->goodsId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsName !== null) {
			
			$xfer += $output->writeFieldBegin('goodsName');
			$xfer += $output->writeString($this->goodsName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goodsUnit !== null) {
			
			$xfer += $output->writeFieldBegin('goodsUnit');
			$xfer += $output->writeString($this->goodsUnit);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxCode !== null) {
			
			$xfer += $output->writeFieldBegin('taxCode');
			$xfer += $output->writeString($this->taxCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxName !== null) {
			
			$xfer += $output->writeFieldBegin('taxName');
			$xfer += $output->writeString($this->taxName);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->taxRate !== null) {
			
			$xfer += $output->writeFieldBegin('taxRate');
			$xfer += $output->writeString($this->taxRate);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->orderAmt !== null) {
			
			$xfer += $output->writeFieldBegin('orderAmt');
			$xfer += $output->writeString($this->orderAmt);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->plazaCode !== null) {
			
			$xfer += $output->writeFieldBegin('plazaCode');
			$xfer += $output->writeString($this->plazaCode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->posUsercode !== null) {
			
			$xfer += $output->writeFieldBegin('posUsercode');
			$xfer += $output->writeString($this->posUsercode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->qty !== null) {
			
			$xfer += $output->writeFieldBegin('qty');
			$xfer += $output->writeI32($this->qty);
			
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
		
		
		if($this->orderPrice !== null) {
			
			$xfer += $output->writeFieldBegin('orderPrice');
			$xfer += $output->writeString($this->orderPrice);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>