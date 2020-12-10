<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class RentOrderItem {
	
	static $_TSPEC;
	public $detail_id = null;
	public $contract_id = null;
	public $operation_mode = null;
	public $vendor_name = null;
	public $shop_id = null;
	public $sales_date = null;
	public $goods_code = null;
	public $brand_code = null;
	public $brand_name = null;
	public $order_num = null;
	public $payment_method = null;
	public $payment_name = null;
	public $sales_qty = null;
	public $sales_tax_amount = null;
	public $sales_net_amount = null;
	public $customer_unit_number = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'detail_id'
			),
			2 => array(
			'var' => 'contract_id'
			),
			3 => array(
			'var' => 'operation_mode'
			),
			4 => array(
			'var' => 'vendor_name'
			),
			5 => array(
			'var' => 'shop_id'
			),
			6 => array(
			'var' => 'sales_date'
			),
			7 => array(
			'var' => 'goods_code'
			),
			8 => array(
			'var' => 'brand_code'
			),
			9 => array(
			'var' => 'brand_name'
			),
			10 => array(
			'var' => 'order_num'
			),
			11 => array(
			'var' => 'payment_method'
			),
			12 => array(
			'var' => 'payment_name'
			),
			13 => array(
			'var' => 'sales_qty'
			),
			14 => array(
			'var' => 'sales_tax_amount'
			),
			15 => array(
			'var' => 'sales_net_amount'
			),
			16 => array(
			'var' => 'customer_unit_number'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['detail_id'])){
				
				$this->detail_id = $vals['detail_id'];
			}
			
			
			if (isset($vals['contract_id'])){
				
				$this->contract_id = $vals['contract_id'];
			}
			
			
			if (isset($vals['operation_mode'])){
				
				$this->operation_mode = $vals['operation_mode'];
			}
			
			
			if (isset($vals['vendor_name'])){
				
				$this->vendor_name = $vals['vendor_name'];
			}
			
			
			if (isset($vals['shop_id'])){
				
				$this->shop_id = $vals['shop_id'];
			}
			
			
			if (isset($vals['sales_date'])){
				
				$this->sales_date = $vals['sales_date'];
			}
			
			
			if (isset($vals['goods_code'])){
				
				$this->goods_code = $vals['goods_code'];
			}
			
			
			if (isset($vals['brand_code'])){
				
				$this->brand_code = $vals['brand_code'];
			}
			
			
			if (isset($vals['brand_name'])){
				
				$this->brand_name = $vals['brand_name'];
			}
			
			
			if (isset($vals['order_num'])){
				
				$this->order_num = $vals['order_num'];
			}
			
			
			if (isset($vals['payment_method'])){
				
				$this->payment_method = $vals['payment_method'];
			}
			
			
			if (isset($vals['payment_name'])){
				
				$this->payment_name = $vals['payment_name'];
			}
			
			
			if (isset($vals['sales_qty'])){
				
				$this->sales_qty = $vals['sales_qty'];
			}
			
			
			if (isset($vals['sales_tax_amount'])){
				
				$this->sales_tax_amount = $vals['sales_tax_amount'];
			}
			
			
			if (isset($vals['sales_net_amount'])){
				
				$this->sales_net_amount = $vals['sales_net_amount'];
			}
			
			
			if (isset($vals['customer_unit_number'])){
				
				$this->customer_unit_number = $vals['customer_unit_number'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'RentOrderItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("detail_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->detail_id);
				
			}
			
			
			
			
			if ("contract_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->contract_id);
				
			}
			
			
			
			
			if ("operation_mode" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->operation_mode); 
				
			}
			
			
			
			
			if ("vendor_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendor_name);
				
			}
			
			
			
			
			if ("shop_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->shop_id);
				
			}
			
			
			
			
			if ("sales_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sales_date);
				
			}
			
			
			
			
			if ("goods_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->goods_code);
				
			}
			
			
			
			
			if ("brand_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_code);
				
			}
			
			
			
			
			if ("brand_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->brand_name);
				
			}
			
			
			
			
			if ("order_num" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_num);
				
			}
			
			
			
			
			if ("payment_method" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payment_method);
				
			}
			
			
			
			
			if ("payment_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->payment_name);
				
			}
			
			
			
			
			if ("sales_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sales_qty); 
				
			}
			
			
			
			
			if ("sales_tax_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sales_tax_amount);
				
			}
			
			
			
			
			if ("sales_net_amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->sales_net_amount);
				
			}
			
			
			
			
			if ("customer_unit_number" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->customer_unit_number); 
				
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
		
		$xfer += $output->writeFieldBegin('detail_id');
		$xfer += $output->writeString($this->detail_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->contract_id !== null) {
			
			$xfer += $output->writeFieldBegin('contract_id');
			$xfer += $output->writeString($this->contract_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('operation_mode');
		$xfer += $output->writeI32($this->operation_mode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('vendor_name');
		$xfer += $output->writeString($this->vendor_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('shop_id');
		$xfer += $output->writeString($this->shop_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_date');
		$xfer += $output->writeString($this->sales_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('goods_code');
		$xfer += $output->writeString($this->goods_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->brand_code !== null) {
			
			$xfer += $output->writeFieldBegin('brand_code');
			$xfer += $output->writeString($this->brand_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brand_name !== null) {
			
			$xfer += $output->writeFieldBegin('brand_name');
			$xfer += $output->writeString($this->brand_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_num !== null) {
			
			$xfer += $output->writeFieldBegin('order_num');
			$xfer += $output->writeString($this->order_num);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('payment_method');
		$xfer += $output->writeString($this->payment_method);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('payment_name');
		$xfer += $output->writeString($this->payment_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_qty');
		$xfer += $output->writeI32($this->sales_qty);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('sales_tax_amount');
		$xfer += $output->writeDouble($this->sales_tax_amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sales_net_amount !== null) {
			
			$xfer += $output->writeFieldBegin('sales_net_amount');
			$xfer += $output->writeDouble($this->sales_net_amount);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->customer_unit_number !== null) {
			
			$xfer += $output->writeFieldBegin('customer_unit_number');
			$xfer += $output->writeI32($this->customer_unit_number);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>