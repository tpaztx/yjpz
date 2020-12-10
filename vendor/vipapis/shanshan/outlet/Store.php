<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class Store {
	
	static $_TSPEC;
	public $id = null;
	public $mall_code = null;
	public $offline_store_id = null;
	public $offline_store_name = null;
	public $offline_store_location = null;
	public $offline_store_type = null;
	public $store_status = null;
	public $online_store_id = null;
	public $erp_join_status = null;
	public $update_time = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'id'
			),
			2 => array(
			'var' => 'mall_code'
			),
			3 => array(
			'var' => 'offline_store_id'
			),
			4 => array(
			'var' => 'offline_store_name'
			),
			5 => array(
			'var' => 'offline_store_location'
			),
			6 => array(
			'var' => 'offline_store_type'
			),
			7 => array(
			'var' => 'store_status'
			),
			8 => array(
			'var' => 'online_store_id'
			),
			9 => array(
			'var' => 'erp_join_status'
			),
			10 => array(
			'var' => 'update_time'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['id'])){
				
				$this->id = $vals['id'];
			}
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['offline_store_id'])){
				
				$this->offline_store_id = $vals['offline_store_id'];
			}
			
			
			if (isset($vals['offline_store_name'])){
				
				$this->offline_store_name = $vals['offline_store_name'];
			}
			
			
			if (isset($vals['offline_store_location'])){
				
				$this->offline_store_location = $vals['offline_store_location'];
			}
			
			
			if (isset($vals['offline_store_type'])){
				
				$this->offline_store_type = $vals['offline_store_type'];
			}
			
			
			if (isset($vals['store_status'])){
				
				$this->store_status = $vals['store_status'];
			}
			
			
			if (isset($vals['online_store_id'])){
				
				$this->online_store_id = $vals['online_store_id'];
			}
			
			
			if (isset($vals['erp_join_status'])){
				
				$this->erp_join_status = $vals['erp_join_status'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'Store';
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
			
			
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("offline_store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_id);
				
			}
			
			
			
			
			if ("offline_store_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_name);
				
			}
			
			
			
			
			if ("offline_store_location" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_location);
				
			}
			
			
			
			
			if ("offline_store_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->offline_store_type); 
				
			}
			
			
			
			
			if ("store_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->store_status); 
				
			}
			
			
			
			
			if ("online_store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->online_store_id);
				
			}
			
			
			
			
			if ("erp_join_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->erp_join_status); 
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->update_time); 
				
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
		
		$xfer += $output->writeFieldBegin('id');
		$xfer += $output->writeI64($this->id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mall_code !== null) {
			
			$xfer += $output->writeFieldBegin('mall_code');
			$xfer += $output->writeString($this->mall_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_id !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_id');
			$xfer += $output->writeString($this->offline_store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_name !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_name');
			$xfer += $output->writeString($this->offline_store_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_location !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_location');
			$xfer += $output->writeString($this->offline_store_location);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->offline_store_type !== null) {
			
			$xfer += $output->writeFieldBegin('offline_store_type');
			$xfer += $output->writeI32($this->offline_store_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->store_status !== null) {
			
			$xfer += $output->writeFieldBegin('store_status');
			$xfer += $output->writeI32($this->store_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->online_store_id !== null) {
			
			$xfer += $output->writeFieldBegin('online_store_id');
			$xfer += $output->writeString($this->online_store_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->erp_join_status !== null) {
			
			$xfer += $output->writeFieldBegin('erp_join_status');
			$xfer += $output->writeI32($this->erp_join_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeI64($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>