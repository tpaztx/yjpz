<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class CooperationNo {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $cooperation_no = null;
	public $warehouse = null;
	public $sell_time_from = null;
	public $sell_time_to = null;
	public $schedule_id = null;
	public $cooperation_name = null;
	public $is_store_delivery = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'cooperation_no'
			),
			3 => array(
			'var' => 'warehouse'
			),
			4 => array(
			'var' => 'sell_time_from'
			),
			5 => array(
			'var' => 'sell_time_to'
			),
			6 => array(
			'var' => 'schedule_id'
			),
			7 => array(
			'var' => 'cooperation_name'
			),
			8 => array(
			'var' => 'is_store_delivery'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['sell_time_from'])){
				
				$this->sell_time_from = $vals['sell_time_from'];
			}
			
			
			if (isset($vals['sell_time_to'])){
				
				$this->sell_time_to = $vals['sell_time_to'];
			}
			
			
			if (isset($vals['schedule_id'])){
				
				$this->schedule_id = $vals['schedule_id'];
			}
			
			
			if (isset($vals['cooperation_name'])){
				
				$this->cooperation_name = $vals['cooperation_name'];
			}
			
			
			if (isset($vals['is_store_delivery'])){
				
				$this->is_store_delivery = $vals['is_store_delivery'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CooperationNo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("sell_time_from" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_time_from);
				
			}
			
			
			
			
			if ("sell_time_to" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sell_time_to);
				
			}
			
			
			
			
			if ("schedule_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->schedule_id); 
				
			}
			
			
			
			
			if ("cooperation_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_name);
				
			}
			
			
			
			
			if ("is_store_delivery" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_store_delivery); 
				
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
		
		if($this->vendor_id !== null) {
			
			$xfer += $output->writeFieldBegin('vendor_id');
			$xfer += $output->writeI32($this->vendor_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeI32($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse');
			$xfer += $output->writeString($this->warehouse);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_time_from !== null) {
			
			$xfer += $output->writeFieldBegin('sell_time_from');
			$xfer += $output->writeString($this->sell_time_from);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sell_time_to !== null) {
			
			$xfer += $output->writeFieldBegin('sell_time_to');
			$xfer += $output->writeString($this->sell_time_to);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->schedule_id !== null) {
			
			$xfer += $output->writeFieldBegin('schedule_id');
			$xfer += $output->writeI32($this->schedule_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cooperation_name !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_name');
			$xfer += $output->writeString($this->cooperation_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_store_delivery !== null) {
			
			$xfer += $output->writeFieldBegin('is_store_delivery');
			$xfer += $output->writeI32($this->is_store_delivery);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>