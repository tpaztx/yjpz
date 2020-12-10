<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OnlineOrderProduct {
	
	static $_TSPEC;
	public $sku_id = null;
	public $outer_sku_id = null;
	public $quantity = null;
	public $title = null;
	public $size = null;
	public $price = null;
	public $customization = null;
	public $color = null;
	public $goods_line_money = null;
	public $act_subtotal = null;
	public $coupon_subtotal = null;
	public $pay_subtotal = null;
	public $all_subtotal = null;
	public $barcode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sku_id'
			),
			2 => array(
			'var' => 'outer_sku_id'
			),
			3 => array(
			'var' => 'quantity'
			),
			4 => array(
			'var' => 'title'
			),
			5 => array(
			'var' => 'size'
			),
			6 => array(
			'var' => 'price'
			),
			7 => array(
			'var' => 'customization'
			),
			8 => array(
			'var' => 'color'
			),
			9 => array(
			'var' => 'goods_line_money'
			),
			10 => array(
			'var' => 'act_subtotal'
			),
			11 => array(
			'var' => 'coupon_subtotal'
			),
			12 => array(
			'var' => 'pay_subtotal'
			),
			13 => array(
			'var' => 'all_subtotal'
			),
			14 => array(
			'var' => 'barcode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sku_id'])){
				
				$this->sku_id = $vals['sku_id'];
			}
			
			
			if (isset($vals['outer_sku_id'])){
				
				$this->outer_sku_id = $vals['outer_sku_id'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['title'])){
				
				$this->title = $vals['title'];
			}
			
			
			if (isset($vals['size'])){
				
				$this->size = $vals['size'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['customization'])){
				
				$this->customization = $vals['customization'];
			}
			
			
			if (isset($vals['color'])){
				
				$this->color = $vals['color'];
			}
			
			
			if (isset($vals['goods_line_money'])){
				
				$this->goods_line_money = $vals['goods_line_money'];
			}
			
			
			if (isset($vals['act_subtotal'])){
				
				$this->act_subtotal = $vals['act_subtotal'];
			}
			
			
			if (isset($vals['coupon_subtotal'])){
				
				$this->coupon_subtotal = $vals['coupon_subtotal'];
			}
			
			
			if (isset($vals['pay_subtotal'])){
				
				$this->pay_subtotal = $vals['pay_subtotal'];
			}
			
			
			if (isset($vals['all_subtotal'])){
				
				$this->all_subtotal = $vals['all_subtotal'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OnlineOrderProduct';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->sku_id); 
				
			}
			
			
			
			
			if ("outer_sku_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->outer_sku_id);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->quantity);
				
			}
			
			
			
			
			if ("title" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->title);
				
			}
			
			
			
			
			if ("size" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->size);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("customization" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->customization);
				
			}
			
			
			
			
			if ("color" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->color);
				
			}
			
			
			
			
			if ("goods_line_money" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_line_money);
				
			}
			
			
			
			
			if ("act_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->act_subtotal);
				
			}
			
			
			
			
			if ("coupon_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_subtotal);
				
			}
			
			
			
			
			if ("pay_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_subtotal);
				
			}
			
			
			
			
			if ("all_subtotal" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->all_subtotal);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
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
		
		if($this->sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('sku_id');
			$xfer += $output->writeI64($this->sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->outer_sku_id !== null) {
			
			$xfer += $output->writeFieldBegin('outer_sku_id');
			$xfer += $output->writeString($this->outer_sku_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeString($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->title !== null) {
			
			$xfer += $output->writeFieldBegin('title');
			$xfer += $output->writeString($this->title);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->size !== null) {
			
			$xfer += $output->writeFieldBegin('size');
			$xfer += $output->writeString($this->size);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->price !== null) {
			
			$xfer += $output->writeFieldBegin('price');
			$xfer += $output->writeString($this->price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customization !== null) {
			
			$xfer += $output->writeFieldBegin('customization');
			$xfer += $output->writeString($this->customization);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->color !== null) {
			
			$xfer += $output->writeFieldBegin('color');
			$xfer += $output->writeString($this->color);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_line_money !== null) {
			
			$xfer += $output->writeFieldBegin('goods_line_money');
			$xfer += $output->writeString($this->goods_line_money);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->act_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('act_subtotal');
			$xfer += $output->writeString($this->act_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_subtotal');
			$xfer += $output->writeString($this->coupon_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->pay_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('pay_subtotal');
			$xfer += $output->writeString($this->pay_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->all_subtotal !== null) {
			
			$xfer += $output->writeFieldBegin('all_subtotal');
			$xfer += $output->writeString($this->all_subtotal);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>