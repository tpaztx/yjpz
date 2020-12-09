<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OrderProdItem {
	
	static $_TSPEC;
	public $add_time = null;
	public $barcode = null;
	public $deleted = null;
	public $discount_amount = null;
	public $discount_rate = null;
	public $goods_amount = null;
	public $goods_code = null;
	public $goods_id = null;
	public $goods_name = null;
	public $goods_unit = null;
	public $tax_code = null;
	public $tax_name = null;
	public $tax_rate = null;
	public $mall_code = null;
	public $pos_user_code = null;
	public $price = null;
	public $qty = null;
	public $pay_amount = null;
	public $update_time = null;
	public $order_price = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'add_time'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'deleted'
			),
			4 => array(
			'var' => 'discount_amount'
			),
			5 => array(
			'var' => 'discount_rate'
			),
			6 => array(
			'var' => 'goods_amount'
			),
			7 => array(
			'var' => 'goods_code'
			),
			8 => array(
			'var' => 'goods_id'
			),
			9 => array(
			'var' => 'goods_name'
			),
			10 => array(
			'var' => 'goods_unit'
			),
			11 => array(
			'var' => 'tax_code'
			),
			12 => array(
			'var' => 'tax_name'
			),
			13 => array(
			'var' => 'tax_rate'
			),
			15 => array(
			'var' => 'mall_code'
			),
			16 => array(
			'var' => 'pos_user_code'
			),
			17 => array(
			'var' => 'price'
			),
			18 => array(
			'var' => 'qty'
			),
			19 => array(
			'var' => 'pay_amount'
			),
			20 => array(
			'var' => 'update_time'
			),
			21 => array(
			'var' => 'order_price'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['add_time'])){
				
				$this->add_time = $vals['add_time'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['deleted'])){
				
				$this->deleted = $vals['deleted'];
			}
			
			
			if (isset($vals['discount_amount'])){
				
				$this->discount_amount = $vals['discount_amount'];
			}
			
			
			if (isset($vals['discount_rate'])){
				
				$this->discount_rate = $vals['discount_rate'];
			}
			
			
			if (isset($vals['goods_amount'])){
				
				$this->goods_amount = $vals['goods_amount'];
			}
			
			
			if (isset($vals['goods_code'])){
				
				$this->goods_code = $vals['goods_code'];
			}
			
			
			if (isset($vals['goods_id'])){
				
				$this->goods_id = $vals['goods_id'];
			}
			
			
			if (isset($vals['goods_name'])){
				
				$this->goods_name = $vals['goods_name'];
			}
			
			
			if (isset($vals['goods_unit'])){
				
				$this->goods_unit = $vals['goods_unit'];
			}
			
			
			if (isset($vals['tax_code'])){
				
				$this->tax_code = $vals['tax_code'];
			}
			
			
			if (isset($vals['tax_name'])){
				
				$this->tax_name = $vals['tax_name'];
			}
			
			
			if (isset($vals['tax_rate'])){
				
				$this->tax_rate = $vals['tax_rate'];
			}
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['pos_user_code'])){
				
				$this->pos_user_code = $vals['pos_user_code'];
			}
			
			
			if (isset($vals['price'])){
				
				$this->price = $vals['price'];
			}
			
			
			if (isset($vals['qty'])){
				
				$this->qty = $vals['qty'];
			}
			
			
			if (isset($vals['pay_amount'])){
				
				$this->pay_amount = $vals['pay_amount'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['order_price'])){
				
				$this->order_price = $vals['order_price'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderProdItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("add_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->add_time); 
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("deleted" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->deleted);
				
			}
			
			
			
			
			if ("discount_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount_amount);
				
			}
			
			
			
			
			if ("discount_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->discount_rate);
				
			}
			
			
			
			
			if ("goods_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_amount);
				
			}
			
			
			
			
			if ("goods_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_code);
				
			}
			
			
			
			
			if ("goods_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->goods_id); 
				
			}
			
			
			
			
			if ("goods_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_name);
				
			}
			
			
			
			
			if ("goods_unit" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_unit);
				
			}
			
			
			
			
			if ("tax_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_code);
				
			}
			
			
			
			
			if ("tax_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_name);
				
			}
			
			
			
			
			if ("tax_rate" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tax_rate);
				
			}
			
			
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("pos_user_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pos_user_code);
				
			}
			
			
			
			
			if ("price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->price);
				
			}
			
			
			
			
			if ("qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->qty); 
				
			}
			
			
			
			
			if ("pay_amount" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pay_amount);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
			}
			
			
			
			
			if ("order_price" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_price);
				
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
		
		$xfer += $output->writeFieldBegin('add_time');
		$xfer += $output->writeI64($this->add_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('deleted');
		$xfer += $output->writeString($this->deleted);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discount_amount');
		$xfer += $output->writeString($this->discount_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('discount_rate');
		$xfer += $output->writeString($this->discount_rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_amount');
		$xfer += $output->writeString($this->goods_amount);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_code');
		$xfer += $output->writeString($this->goods_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_id');
		$xfer += $output->writeI64($this->goods_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_name');
		$xfer += $output->writeString($this->goods_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_unit');
		$xfer += $output->writeString($this->goods_unit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tax_code');
		$xfer += $output->writeString($this->tax_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tax_name');
		$xfer += $output->writeString($this->tax_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('tax_rate');
		$xfer += $output->writeString($this->tax_rate);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mall_code');
		$xfer += $output->writeString($this->mall_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pos_user_code !== null) {
			
			$xfer += $output->writeFieldBegin('pos_user_code');
			$xfer += $output->writeString($this->pos_user_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('price');
		$xfer += $output->writeString($this->price);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('qty');
		$xfer += $output->writeI32($this->qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pay_amount');
		$xfer += $output->writeString($this->pay_amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_price !== null) {
			
			$xfer += $output->writeFieldBegin('order_price');
			$xfer += $output->writeString($this->order_price);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>