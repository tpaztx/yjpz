<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderStep {
	
	static $_TSPEC;
	public $step_id = null;
	public $wo_no = null;
	public $step_type = null;
	public $step_fsid = null;
	public $step_name = null;
	public $create_time = null;
	public $designate_user = null;
	public $designate_group = null;
	public $assign_group = null;
	public $assign_user = null;
	public $handle_content = null;
	public $handled_group = null;
	public $handled_user = null;
	public $handled_time = null;
	public $step_state = null;
	public $expect_end_time = null;
	public $addition_property = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'step_id'
			),
			2 => array(
			'var' => 'wo_no'
			),
			3 => array(
			'var' => 'step_type'
			),
			4 => array(
			'var' => 'step_fsid'
			),
			5 => array(
			'var' => 'step_name'
			),
			7 => array(
			'var' => 'create_time'
			),
			8 => array(
			'var' => 'designate_user'
			),
			9 => array(
			'var' => 'designate_group'
			),
			10 => array(
			'var' => 'assign_group'
			),
			11 => array(
			'var' => 'assign_user'
			),
			12 => array(
			'var' => 'handle_content'
			),
			13 => array(
			'var' => 'handled_group'
			),
			14 => array(
			'var' => 'handled_user'
			),
			15 => array(
			'var' => 'handled_time'
			),
			16 => array(
			'var' => 'step_state'
			),
			17 => array(
			'var' => 'expect_end_time'
			),
			18 => array(
			'var' => 'addition_property'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['step_id'])){
				
				$this->step_id = $vals['step_id'];
			}
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['step_type'])){
				
				$this->step_type = $vals['step_type'];
			}
			
			
			if (isset($vals['step_fsid'])){
				
				$this->step_fsid = $vals['step_fsid'];
			}
			
			
			if (isset($vals['step_name'])){
				
				$this->step_name = $vals['step_name'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['designate_user'])){
				
				$this->designate_user = $vals['designate_user'];
			}
			
			
			if (isset($vals['designate_group'])){
				
				$this->designate_group = $vals['designate_group'];
			}
			
			
			if (isset($vals['assign_group'])){
				
				$this->assign_group = $vals['assign_group'];
			}
			
			
			if (isset($vals['assign_user'])){
				
				$this->assign_user = $vals['assign_user'];
			}
			
			
			if (isset($vals['handle_content'])){
				
				$this->handle_content = $vals['handle_content'];
			}
			
			
			if (isset($vals['handled_group'])){
				
				$this->handled_group = $vals['handled_group'];
			}
			
			
			if (isset($vals['handled_user'])){
				
				$this->handled_user = $vals['handled_user'];
			}
			
			
			if (isset($vals['handled_time'])){
				
				$this->handled_time = $vals['handled_time'];
			}
			
			
			if (isset($vals['step_state'])){
				
				$this->step_state = $vals['step_state'];
			}
			
			
			if (isset($vals['expect_end_time'])){
				
				$this->expect_end_time = $vals['expect_end_time'];
			}
			
			
			if (isset($vals['addition_property'])){
				
				$this->addition_property = $vals['addition_property'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderStep';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("step_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->step_id); 
				
			}
			
			
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("step_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->step_type); 
				
			}
			
			
			
			
			if ("step_fsid" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->step_fsid);
				
			}
			
			
			
			
			if ("step_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->step_name);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("designate_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->designate_user);
				
			}
			
			
			
			
			if ("designate_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->designate_group);
				
			}
			
			
			
			
			if ("assign_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assign_group);
				
			}
			
			
			
			
			if ("assign_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->assign_user);
				
			}
			
			
			
			
			if ("handle_content" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handle_content);
				
			}
			
			
			
			
			if ("handled_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handled_group);
				
			}
			
			
			
			
			if ("handled_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handled_user);
				
			}
			
			
			
			
			if ("handled_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->handled_time);
				
			}
			
			
			
			
			if ("step_state" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->step_state); 
				
			}
			
			
			
			
			if ("expect_end_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expect_end_time);
				
			}
			
			
			
			
			if ("addition_property" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->addition_property); 
				
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
		
		if($this->step_id !== null) {
			
			$xfer += $output->writeFieldBegin('step_id');
			$xfer += $output->writeI64($this->step_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->wo_no !== null) {
			
			$xfer += $output->writeFieldBegin('wo_no');
			$xfer += $output->writeString($this->wo_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_type !== null) {
			
			$xfer += $output->writeFieldBegin('step_type');
			$xfer += $output->writeI32($this->step_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_fsid !== null) {
			
			$xfer += $output->writeFieldBegin('step_fsid');
			$xfer += $output->writeString($this->step_fsid);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_name !== null) {
			
			$xfer += $output->writeFieldBegin('step_name');
			$xfer += $output->writeString($this->step_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->designate_user !== null) {
			
			$xfer += $output->writeFieldBegin('designate_user');
			$xfer += $output->writeString($this->designate_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->designate_group !== null) {
			
			$xfer += $output->writeFieldBegin('designate_group');
			$xfer += $output->writeString($this->designate_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assign_group !== null) {
			
			$xfer += $output->writeFieldBegin('assign_group');
			$xfer += $output->writeString($this->assign_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->assign_user !== null) {
			
			$xfer += $output->writeFieldBegin('assign_user');
			$xfer += $output->writeString($this->assign_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handle_content !== null) {
			
			$xfer += $output->writeFieldBegin('handle_content');
			$xfer += $output->writeString($this->handle_content);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handled_group !== null) {
			
			$xfer += $output->writeFieldBegin('handled_group');
			$xfer += $output->writeString($this->handled_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handled_user !== null) {
			
			$xfer += $output->writeFieldBegin('handled_user');
			$xfer += $output->writeString($this->handled_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->handled_time !== null) {
			
			$xfer += $output->writeFieldBegin('handled_time');
			$xfer += $output->writeString($this->handled_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->step_state !== null) {
			
			$xfer += $output->writeFieldBegin('step_state');
			$xfer += $output->writeI32($this->step_state);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_end_time !== null) {
			
			$xfer += $output->writeFieldBegin('expect_end_time');
			$xfer += $output->writeString($this->expect_end_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->addition_property !== null) {
			
			$xfer += $output->writeFieldBegin('addition_property');
			$xfer += $output->writeI32($this->addition_property);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>