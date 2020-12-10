<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderRecheck {
	
	static $_TSPEC;
	public $rc_id = null;
	public $wo_no = null;
	public $rc_status = null;
	public $is_new = null;
	public $rc_designate_user = null;
	public $rc_designate_group = null;
	public $create_time = null;
	public $rc_group = null;
	public $rc_user = null;
	public $rc_time = null;
	public $expire_time = null;
	public $content = null;
	public $handle_content = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'rc_id'
			),
			2 => array(
			'var' => 'wo_no'
			),
			3 => array(
			'var' => 'rc_status'
			),
			4 => array(
			'var' => 'is_new'
			),
			5 => array(
			'var' => 'rc_designate_user'
			),
			6 => array(
			'var' => 'rc_designate_group'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'rc_group'
			),
			9 => array(
			'var' => 'rc_user'
			),
			10 => array(
			'var' => 'rc_time'
			),
			11 => array(
			'var' => 'expire_time'
			),
			12 => array(
			'var' => 'content'
			),
			13 => array(
			'var' => 'handle_content'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['rc_id'])){
				
				$this->rc_id = $vals['rc_id'];
			}
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['rc_status'])){
				
				$this->rc_status = $vals['rc_status'];
			}
			
			
			if (isset($vals['is_new'])){
				
				$this->is_new = $vals['is_new'];
			}
			
			
			if (isset($vals['rc_designate_user'])){
				
				$this->rc_designate_user = $vals['rc_designate_user'];
			}
			
			
			if (isset($vals['rc_designate_group'])){
				
				$this->rc_designate_group = $vals['rc_designate_group'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['rc_group'])){
				
				$this->rc_group = $vals['rc_group'];
			}
			
			
			if (isset($vals['rc_user'])){
				
				$this->rc_user = $vals['rc_user'];
			}
			
			
			if (isset($vals['rc_time'])){
				
				$this->rc_time = $vals['rc_time'];
			}
			
			
			if (isset($vals['expire_time'])){
				
				$this->expire_time = $vals['expire_time'];
			}
			
			
			if (isset($vals['content'])){
				
				$this->content = $vals['content'];
			}
			
			
			if (isset($vals['handle_content'])){
				
				$this->handle_content = $vals['handle_content'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderRecheck';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("rc_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->rc_id); 
				
			}
			
			
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("rc_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->rc_status); 
				
			}
			
			
			
			
			if ("is_new" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_new); 
				
			}
			
			
			
			
			if ("rc_designate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rc_designate_user);
				
			}
			
			
			
			
			if ("rc_designate_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rc_designate_group);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("rc_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rc_group);
				
			}
			
			
			
			
			if ("rc_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rc_user);
				
			}
			
			
			
			
			if ("rc_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->rc_time);
				
			}
			
			
			
			
			if ("expire_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expire_time);
				
			}
			
			
			
			
			if ("content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->content);
				
			}
			
			
			
			
			if ("handle_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handle_content);
				
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
		
		if($this->rc_id !== null) {
			
			$xfer += $output->writeFieldBegin('rc_id');
			$xfer += $output->writeI64($this->rc_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wo_no !== null) {
			
			$xfer += $output->writeFieldBegin('wo_no');
			$xfer += $output->writeString($this->wo_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_status !== null) {
			
			$xfer += $output->writeFieldBegin('rc_status');
			$xfer += $output->writeI32($this->rc_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_new !== null) {
			
			$xfer += $output->writeFieldBegin('is_new');
			$xfer += $output->writeI32($this->is_new);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_designate_user !== null) {
			
			$xfer += $output->writeFieldBegin('rc_designate_user');
			$xfer += $output->writeString($this->rc_designate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_designate_group !== null) {
			
			$xfer += $output->writeFieldBegin('rc_designate_group');
			$xfer += $output->writeString($this->rc_designate_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_group !== null) {
			
			$xfer += $output->writeFieldBegin('rc_group');
			$xfer += $output->writeString($this->rc_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_user !== null) {
			
			$xfer += $output->writeFieldBegin('rc_user');
			$xfer += $output->writeString($this->rc_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->rc_time !== null) {
			
			$xfer += $output->writeFieldBegin('rc_time');
			$xfer += $output->writeString($this->rc_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expire_time !== null) {
			
			$xfer += $output->writeFieldBegin('expire_time');
			$xfer += $output->writeString($this->expire_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->content !== null) {
			
			$xfer += $output->writeFieldBegin('content');
			$xfer += $output->writeString($this->content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handle_content !== null) {
			
			$xfer += $output->writeFieldBegin('handle_content');
			$xfer += $output->writeString($this->handle_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>