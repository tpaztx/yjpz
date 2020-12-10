<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\jitx;

class AuditWarehouseModel {
	
	static $_TSPEC;
	public $batch_no = null;
	public $warehouse_code = null;
	public $warehouse_name = null;
	public $province_name = null;
	public $city_name = null;
	public $region_name = null;
	public $town_name = null;
	public $address = null;
	public $linkman = null;
	public $phone = null;
	public $mail = null;
	public $cc_mail = null;
	public $warehouse_type = null;
	public $is_pre_transport_no = null;
	public $audit_status = null;
	public $apply_type = null;
	public $auditor = null;
	public $audit_time = null;
	public $reject_reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			2 => array(
			'var' => 'warehouse_code'
			),
			3 => array(
			'var' => 'warehouse_name'
			),
			4 => array(
			'var' => 'province_name'
			),
			5 => array(
			'var' => 'city_name'
			),
			6 => array(
			'var' => 'region_name'
			),
			7 => array(
			'var' => 'town_name'
			),
			8 => array(
			'var' => 'address'
			),
			9 => array(
			'var' => 'linkman'
			),
			10 => array(
			'var' => 'phone'
			),
			12 => array(
			'var' => 'mail'
			),
			13 => array(
			'var' => 'cc_mail'
			),
			14 => array(
			'var' => 'warehouse_type'
			),
			15 => array(
			'var' => 'is_pre_transport_no'
			),
			16 => array(
			'var' => 'audit_status'
			),
			17 => array(
			'var' => 'apply_type'
			),
			18 => array(
			'var' => 'auditor'
			),
			19 => array(
			'var' => 'audit_time'
			),
			20 => array(
			'var' => 'reject_reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['warehouse_code'])){
				
				$this->warehouse_code = $vals['warehouse_code'];
			}
			
			
			if (isset($vals['warehouse_name'])){
				
				$this->warehouse_name = $vals['warehouse_name'];
			}
			
			
			if (isset($vals['province_name'])){
				
				$this->province_name = $vals['province_name'];
			}
			
			
			if (isset($vals['city_name'])){
				
				$this->city_name = $vals['city_name'];
			}
			
			
			if (isset($vals['region_name'])){
				
				$this->region_name = $vals['region_name'];
			}
			
			
			if (isset($vals['town_name'])){
				
				$this->town_name = $vals['town_name'];
			}
			
			
			if (isset($vals['address'])){
				
				$this->address = $vals['address'];
			}
			
			
			if (isset($vals['linkman'])){
				
				$this->linkman = $vals['linkman'];
			}
			
			
			if (isset($vals['phone'])){
				
				$this->phone = $vals['phone'];
			}
			
			
			if (isset($vals['mail'])){
				
				$this->mail = $vals['mail'];
			}
			
			
			if (isset($vals['cc_mail'])){
				
				$this->cc_mail = $vals['cc_mail'];
			}
			
			
			if (isset($vals['warehouse_type'])){
				
				$this->warehouse_type = $vals['warehouse_type'];
			}
			
			
			if (isset($vals['is_pre_transport_no'])){
				
				$this->is_pre_transport_no = $vals['is_pre_transport_no'];
			}
			
			
			if (isset($vals['audit_status'])){
				
				$this->audit_status = $vals['audit_status'];
			}
			
			
			if (isset($vals['apply_type'])){
				
				$this->apply_type = $vals['apply_type'];
			}
			
			
			if (isset($vals['auditor'])){
				
				$this->auditor = $vals['auditor'];
			}
			
			
			if (isset($vals['audit_time'])){
				
				$this->audit_time = $vals['audit_time'];
			}
			
			
			if (isset($vals['reject_reason'])){
				
				$this->reject_reason = $vals['reject_reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'AuditWarehouseModel';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("batch_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->batch_no);
				
			}
			
			
			
			
			if ("warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_code);
				
			}
			
			
			
			
			if ("warehouse_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse_name);
				
			}
			
			
			
			
			if ("province_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->province_name);
				
			}
			
			
			
			
			if ("city_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->city_name);
				
			}
			
			
			
			
			if ("region_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->region_name);
				
			}
			
			
			
			
			if ("town_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->town_name);
				
			}
			
			
			
			
			if ("address" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->address);
				
			}
			
			
			
			
			if ("linkman" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->linkman);
				
			}
			
			
			
			
			if ("phone" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->phone);
				
			}
			
			
			
			
			if ("mail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mail);
				
			}
			
			
			
			
			if ("cc_mail" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cc_mail);
				
			}
			
			
			
			
			if ("warehouse_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->warehouse_type); 
				
			}
			
			
			
			
			if ("is_pre_transport_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_pre_transport_no); 
				
			}
			
			
			
			
			if ("audit_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->audit_status); 
				
			}
			
			
			
			
			if ("apply_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->apply_type); 
				
			}
			
			
			
			
			if ("auditor" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->auditor);
				
			}
			
			
			
			
			if ("audit_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->audit_time);
				
			}
			
			
			
			
			if ("reject_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->reject_reason);
				
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
		
		if($this->batch_no !== null) {
			
			$xfer += $output->writeFieldBegin('batch_no');
			$xfer += $output->writeString($this->batch_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_code');
			$xfer += $output->writeString($this->warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_name !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_name');
			$xfer += $output->writeString($this->warehouse_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->province_name !== null) {
			
			$xfer += $output->writeFieldBegin('province_name');
			$xfer += $output->writeString($this->province_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->city_name !== null) {
			
			$xfer += $output->writeFieldBegin('city_name');
			$xfer += $output->writeString($this->city_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->region_name !== null) {
			
			$xfer += $output->writeFieldBegin('region_name');
			$xfer += $output->writeString($this->region_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->town_name !== null) {
			
			$xfer += $output->writeFieldBegin('town_name');
			$xfer += $output->writeString($this->town_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->address !== null) {
			
			$xfer += $output->writeFieldBegin('address');
			$xfer += $output->writeString($this->address);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->linkman !== null) {
			
			$xfer += $output->writeFieldBegin('linkman');
			$xfer += $output->writeString($this->linkman);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->phone !== null) {
			
			$xfer += $output->writeFieldBegin('phone');
			$xfer += $output->writeString($this->phone);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mail !== null) {
			
			$xfer += $output->writeFieldBegin('mail');
			$xfer += $output->writeString($this->mail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->cc_mail !== null) {
			
			$xfer += $output->writeFieldBegin('cc_mail');
			$xfer += $output->writeString($this->cc_mail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('warehouse_type');
		$xfer += $output->writeI32($this->warehouse_type);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->is_pre_transport_no !== null) {
			
			$xfer += $output->writeFieldBegin('is_pre_transport_no');
			$xfer += $output->writeI32($this->is_pre_transport_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_status !== null) {
			
			$xfer += $output->writeFieldBegin('audit_status');
			$xfer += $output->writeI32($this->audit_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->apply_type !== null) {
			
			$xfer += $output->writeFieldBegin('apply_type');
			$xfer += $output->writeI32($this->apply_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->auditor !== null) {
			
			$xfer += $output->writeFieldBegin('auditor');
			$xfer += $output->writeString($this->auditor);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->audit_time !== null) {
			
			$xfer += $output->writeFieldBegin('audit_time');
			$xfer += $output->writeString($this->audit_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reject_reason !== null) {
			
			$xfer += $output->writeFieldBegin('reject_reason');
			$xfer += $output->writeString($this->reject_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>