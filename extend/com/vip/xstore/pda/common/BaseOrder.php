<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\common;

class BaseOrder {
	
	static $_TSPEC;
	public $company_code = null;
	public $transferring_no = null;
	public $delivery_warehouse_code = null;
	public $delivery_warehouse = null;
	public $receiving_warehouse_code = null;
	public $receiving_warehouse = null;
	public $transferring_type = null;
	public $planning_quantity = null;
	public $expect_quantity = null;
	public $plan_arriving_date = null;
	public $total_item = null;
	public $total_confirmed = null;
	public $total_diff = null;
	public $approval_user = null;
	public $goods_type = null;
	public $create_time = null;
	public $create_by = null;
	public $approval_source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			50 => array(
			'var' => 'company_code'
			),
			51 => array(
			'var' => 'transferring_no'
			),
			52 => array(
			'var' => 'delivery_warehouse_code'
			),
			53 => array(
			'var' => 'delivery_warehouse'
			),
			54 => array(
			'var' => 'receiving_warehouse_code'
			),
			55 => array(
			'var' => 'receiving_warehouse'
			),
			56 => array(
			'var' => 'transferring_type'
			),
			57 => array(
			'var' => 'planning_quantity'
			),
			58 => array(
			'var' => 'expect_quantity'
			),
			59 => array(
			'var' => 'plan_arriving_date'
			),
			60 => array(
			'var' => 'total_item'
			),
			61 => array(
			'var' => 'total_confirmed'
			),
			62 => array(
			'var' => 'total_diff'
			),
			63 => array(
			'var' => 'approval_user'
			),
			64 => array(
			'var' => 'goods_type'
			),
			65 => array(
			'var' => 'create_time'
			),
			66 => array(
			'var' => 'create_by'
			),
			67 => array(
			'var' => 'approval_source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['transferring_no'])){
				
				$this->transferring_no = $vals['transferring_no'];
			}
			
			
			if (isset($vals['delivery_warehouse_code'])){
				
				$this->delivery_warehouse_code = $vals['delivery_warehouse_code'];
			}
			
			
			if (isset($vals['delivery_warehouse'])){
				
				$this->delivery_warehouse = $vals['delivery_warehouse'];
			}
			
			
			if (isset($vals['receiving_warehouse_code'])){
				
				$this->receiving_warehouse_code = $vals['receiving_warehouse_code'];
			}
			
			
			if (isset($vals['receiving_warehouse'])){
				
				$this->receiving_warehouse = $vals['receiving_warehouse'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['planning_quantity'])){
				
				$this->planning_quantity = $vals['planning_quantity'];
			}
			
			
			if (isset($vals['expect_quantity'])){
				
				$this->expect_quantity = $vals['expect_quantity'];
			}
			
			
			if (isset($vals['plan_arriving_date'])){
				
				$this->plan_arriving_date = $vals['plan_arriving_date'];
			}
			
			
			if (isset($vals['total_item'])){
				
				$this->total_item = $vals['total_item'];
			}
			
			
			if (isset($vals['total_confirmed'])){
				
				$this->total_confirmed = $vals['total_confirmed'];
			}
			
			
			if (isset($vals['total_diff'])){
				
				$this->total_diff = $vals['total_diff'];
			}
			
			
			if (isset($vals['approval_user'])){
				
				$this->approval_user = $vals['approval_user'];
			}
			
			
			if (isset($vals['goods_type'])){
				
				$this->goods_type = $vals['goods_type'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['create_by'])){
				
				$this->create_by = $vals['create_by'];
			}
			
			
			if (isset($vals['approval_source'])){
				
				$this->approval_source = $vals['approval_source'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BaseOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("transferring_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_no);
				
			}
			
			
			
			
			if ("delivery_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse_code);
				
			}
			
			
			
			
			if ("delivery_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse);
				
			}
			
			
			
			
			if ("receiving_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiving_warehouse_code);
				
			}
			
			
			
			
			if ("receiving_warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiving_warehouse);
				
			}
			
			
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transferring_type); 
				
			}
			
			
			
			
			if ("planning_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planning_quantity); 
				
			}
			
			
			
			
			if ("expect_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expect_quantity); 
				
			}
			
			
			
			
			if ("plan_arriving_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->plan_arriving_date);
				
			}
			
			
			
			
			if ("total_item" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_item); 
				
			}
			
			
			
			
			if ("total_confirmed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_confirmed); 
				
			}
			
			
			
			
			if ("total_diff" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_diff); 
				
			}
			
			
			
			
			if ("approval_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_user);
				
			}
			
			
			
			
			if ("goods_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->goods_type); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("create_by" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_by);
				
			}
			
			
			
			
			if ("approval_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_source);
				
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
		
		$xfer += $output->writeFieldBegin('company_code');
		$xfer += $output->writeString($this->company_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_no');
		$xfer += $output->writeString($this->transferring_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_warehouse_code');
		$xfer += $output->writeString($this->delivery_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('delivery_warehouse');
		$xfer += $output->writeString($this->delivery_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiving_warehouse_code');
		$xfer += $output->writeString($this->receiving_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('receiving_warehouse');
		$xfer += $output->writeString($this->receiving_warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('transferring_type');
		$xfer += $output->writeByte($this->transferring_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('planning_quantity');
		$xfer += $output->writeI32($this->planning_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('expect_quantity');
		$xfer += $output->writeI32($this->expect_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->plan_arriving_date !== null) {
			
			$xfer += $output->writeFieldBegin('plan_arriving_date');
			$xfer += $output->writeString($this->plan_arriving_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('total_item');
		$xfer += $output->writeI32($this->total_item);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_confirmed');
		$xfer += $output->writeI32($this->total_confirmed);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('total_diff');
		$xfer += $output->writeI32($this->total_diff);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->approval_user !== null) {
			
			$xfer += $output->writeFieldBegin('approval_user');
			$xfer += $output->writeString($this->approval_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->goods_type !== null) {
			
			$xfer += $output->writeFieldBegin('goods_type');
			$xfer += $output->writeByte($this->goods_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_by !== null) {
			
			$xfer += $output->writeFieldBegin('create_by');
			$xfer += $output->writeString($this->create_by);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_source !== null) {
			
			$xfer += $output->writeFieldBegin('approval_source');
			$xfer += $output->writeString($this->approval_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>