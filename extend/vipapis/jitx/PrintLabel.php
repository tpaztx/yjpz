<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class PrintLabel {
	
	static $_TSPEC;
	public $carrier_code = null;
	public $carrier_name = null;
	public $oqc_date = null;
	public $is_gather_pack = null;
	public $package_seq = null;
	public $is_last_box = null;
	public $is_pre_pack = null;
	public $material_type = null;
	public $order_sn = null;
	public $is_exchange = null;
	public $box_no = null;
	public $transport_type = null;
	public $delivery_warehouse = null;
	public $pick_code = null;
	public $master_transport_no = null;
	public $sub_transport_no = null;
	public $buyer = null;
	public $buyer_tel = null;
	public $buyer_mobile = null;
	public $buyer_address = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'carrier_code'
			),
			2 => array(
			'var' => 'carrier_name'
			),
			3 => array(
			'var' => 'oqc_date'
			),
			4 => array(
			'var' => 'is_gather_pack'
			),
			5 => array(
			'var' => 'package_seq'
			),
			6 => array(
			'var' => 'is_last_box'
			),
			7 => array(
			'var' => 'is_pre_pack'
			),
			8 => array(
			'var' => 'material_type'
			),
			9 => array(
			'var' => 'order_sn'
			),
			10 => array(
			'var' => 'is_exchange'
			),
			11 => array(
			'var' => 'box_no'
			),
			12 => array(
			'var' => 'transport_type'
			),
			13 => array(
			'var' => 'delivery_warehouse'
			),
			14 => array(
			'var' => 'pick_code'
			),
			15 => array(
			'var' => 'master_transport_no'
			),
			16 => array(
			'var' => 'sub_transport_no'
			),
			17 => array(
			'var' => 'buyer'
			),
			18 => array(
			'var' => 'buyer_tel'
			),
			19 => array(
			'var' => 'buyer_mobile'
			),
			20 => array(
			'var' => 'buyer_address'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_name'])){
				
				$this->carrier_name = $vals['carrier_name'];
			}
			
			
			if (isset($vals['oqc_date'])){
				
				$this->oqc_date = $vals['oqc_date'];
			}
			
			
			if (isset($vals['is_gather_pack'])){
				
				$this->is_gather_pack = $vals['is_gather_pack'];
			}
			
			
			if (isset($vals['package_seq'])){
				
				$this->package_seq = $vals['package_seq'];
			}
			
			
			if (isset($vals['is_last_box'])){
				
				$this->is_last_box = $vals['is_last_box'];
			}
			
			
			if (isset($vals['is_pre_pack'])){
				
				$this->is_pre_pack = $vals['is_pre_pack'];
			}
			
			
			if (isset($vals['material_type'])){
				
				$this->material_type = $vals['material_type'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
			if (isset($vals['is_exchange'])){
				
				$this->is_exchange = $vals['is_exchange'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['transport_type'])){
				
				$this->transport_type = $vals['transport_type'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['pick_code'])){
				
				$this->pick_code = $vals['pick_code'];
			}
			
			
			if (isset($vals['master_transport_no'])){
				
				$this->master_transport_no = $vals['master_transport_no'];
			}
			
			
			if (isset($vals['sub_transport_no'])){
				
				$this->sub_transport_no = $vals['sub_transport_no'];
			}
			
			
			if (isset($vals['buyer'])){
				
				$this->buyer = $vals['buyer'];
			}
			
			
			if (isset($vals['buyer_tel'])){
				
				$this->buyer_tel = $vals['buyer_tel'];
			}
			
			
			if (isset($vals['buyer_mobile'])){
				
				$this->buyer_mobile = $vals['buyer_mobile'];
			}
			
			
			if (isset($vals['buyer_address'])){
				
				$this->buyer_address = $vals['buyer_address'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PrintLabel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_name);
				
			}
			
			
			
			
			if ("oqc_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->oqc_date);
				
			}
			
			
			
			
			if ("is_gather_pack" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_gather_pack); 
				
			}
			
			
			
			
			if ("package_seq" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->package_seq); 
				
			}
			
			
			
			
			if ("is_last_box" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_last_box); 
				
			}
			
			
			
			
			if ("is_pre_pack" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_pre_pack); 
				
			}
			
			
			
			
			if ("material_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->material_type);
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
			}
			
			
			
			
			if ("is_exchange" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_exchange); 
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("transport_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transport_type);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("pick_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pick_code);
				
			}
			
			
			
			
			if ("master_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->master_transport_no);
				
			}
			
			
			
			
			if ("sub_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sub_transport_no);
				
			}
			
			
			
			
			if ("buyer" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer);
				
			}
			
			
			
			
			if ("buyer_tel" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_tel);
				
			}
			
			
			
			
			if ("buyer_mobile" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_mobile);
				
			}
			
			
			
			
			if ("buyer_address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->buyer_address);
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_name');
		$xfer += $output->writeString($this->carrier_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('oqc_date');
		$xfer += $output->writeString($this->oqc_date);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_gather_pack');
		$xfer += $output->writeI32($this->is_gather_pack);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('package_seq');
		$xfer += $output->writeI32($this->package_seq);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_last_box');
		$xfer += $output->writeI32($this->is_last_box);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_pre_pack');
		$xfer += $output->writeI32($this->is_pre_pack);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->material_type !== null) {
			
			$xfer += $output->writeFieldBegin('material_type');
			$xfer += $output->writeString($this->material_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('order_sn');
		$xfer += $output->writeString($this->order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('is_exchange');
		$xfer += $output->writeI32($this->is_exchange);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('box_no');
		$xfer += $output->writeString($this->box_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->transport_type !== null) {
			
			$xfer += $output->writeFieldBegin('transport_type');
			$xfer += $output->writeString($this->transport_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('delivery_warehouse');
		$xfer += $output->writeString($this->delivery_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pick_code');
		$xfer += $output->writeString($this->pick_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('master_transport_no');
		$xfer += $output->writeString($this->master_transport_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sub_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('sub_transport_no');
			$xfer += $output->writeString($this->sub_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('buyer');
		$xfer += $output->writeString($this->buyer);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->buyer_tel !== null) {
			
			$xfer += $output->writeFieldBegin('buyer_tel');
			$xfer += $output->writeString($this->buyer_tel);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('buyer_mobile');
		$xfer += $output->writeString($this->buyer_mobile);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('buyer_address');
		$xfer += $output->writeString($this->buyer_address);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>