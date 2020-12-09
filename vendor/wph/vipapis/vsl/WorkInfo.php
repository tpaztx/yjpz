<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkInfo {
	
	static $_TSPEC;
	public $wo_no = null;
	public $wo_status = null;
	public $create_time = null;
	public $modify_time = null;
	public $expect_begin_time = null;
	public $expect_finish_time = null;
	public $current_handle_user = null;
	public $current_handle_group = null;
	public $current_step_expect_finish_time = null;
	public $pc1_name = null;
	public $pc1_id = null;
	public $pc2_name = null;
	public $pc2_id = null;
	public $pc3_name = null;
	public $pc3_id = null;
	public $problem_desc = null;
	public $state_detail = null;
	public $additions = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wo_no'
			),
			2 => array(
			'var' => 'wo_status'
			),
			3 => array(
			'var' => 'create_time'
			),
			4 => array(
			'var' => 'modify_time'
			),
			5 => array(
			'var' => 'expect_begin_time'
			),
			6 => array(
			'var' => 'expect_finish_time'
			),
			7 => array(
			'var' => 'current_handle_user'
			),
			8 => array(
			'var' => 'current_handle_group'
			),
			9 => array(
			'var' => 'current_step_expect_finish_time'
			),
			10 => array(
			'var' => 'pc1_name'
			),
			11 => array(
			'var' => 'pc1_id'
			),
			12 => array(
			'var' => 'pc2_name'
			),
			13 => array(
			'var' => 'pc2_id'
			),
			14 => array(
			'var' => 'pc3_name'
			),
			15 => array(
			'var' => 'pc3_id'
			),
			16 => array(
			'var' => 'problem_desc'
			),
			17 => array(
			'var' => 'state_detail'
			),
			18 => array(
			'var' => 'additions'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wo_no'])){
				
				$this->wo_no = $vals['wo_no'];
			}
			
			
			if (isset($vals['wo_status'])){
				
				$this->wo_status = $vals['wo_status'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['modify_time'])){
				
				$this->modify_time = $vals['modify_time'];
			}
			
			
			if (isset($vals['expect_begin_time'])){
				
				$this->expect_begin_time = $vals['expect_begin_time'];
			}
			
			
			if (isset($vals['expect_finish_time'])){
				
				$this->expect_finish_time = $vals['expect_finish_time'];
			}
			
			
			if (isset($vals['current_handle_user'])){
				
				$this->current_handle_user = $vals['current_handle_user'];
			}
			
			
			if (isset($vals['current_handle_group'])){
				
				$this->current_handle_group = $vals['current_handle_group'];
			}
			
			
			if (isset($vals['current_step_expect_finish_time'])){
				
				$this->current_step_expect_finish_time = $vals['current_step_expect_finish_time'];
			}
			
			
			if (isset($vals['pc1_name'])){
				
				$this->pc1_name = $vals['pc1_name'];
			}
			
			
			if (isset($vals['pc1_id'])){
				
				$this->pc1_id = $vals['pc1_id'];
			}
			
			
			if (isset($vals['pc2_name'])){
				
				$this->pc2_name = $vals['pc2_name'];
			}
			
			
			if (isset($vals['pc2_id'])){
				
				$this->pc2_id = $vals['pc2_id'];
			}
			
			
			if (isset($vals['pc3_name'])){
				
				$this->pc3_name = $vals['pc3_name'];
			}
			
			
			if (isset($vals['pc3_id'])){
				
				$this->pc3_id = $vals['pc3_id'];
			}
			
			
			if (isset($vals['problem_desc'])){
				
				$this->problem_desc = $vals['problem_desc'];
			}
			
			
			if (isset($vals['state_detail'])){
				
				$this->state_detail = $vals['state_detail'];
			}
			
			
			if (isset($vals['additions'])){
				
				$this->additions = $vals['additions'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkInfo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wo_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->wo_no);
				
			}
			
			
			
			
			if ("wo_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->wo_status); 
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("modify_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->modify_time);
				
			}
			
			
			
			
			if ("expect_begin_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expect_begin_time);
				
			}
			
			
			
			
			if ("expect_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->expect_finish_time);
				
			}
			
			
			
			
			if ("current_handle_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->current_handle_user);
				
			}
			
			
			
			
			if ("current_handle_group" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->current_handle_group);
				
			}
			
			
			
			
			if ("current_step_expect_finish_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->current_step_expect_finish_time);
				
			}
			
			
			
			
			if ("pc1_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc1_name);
				
			}
			
			
			
			
			if ("pc1_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc1_id);
				
			}
			
			
			
			
			if ("pc2_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc2_name);
				
			}
			
			
			
			
			if ("pc2_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc2_id);
				
			}
			
			
			
			
			if ("pc3_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3_name);
				
			}
			
			
			
			
			if ("pc3_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pc3_id);
				
			}
			
			
			
			
			if ("problem_desc" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->problem_desc);
				
			}
			
			
			
			
			if ("state_detail" == $schemeField){
				
				$needSkip = false;
				
				$this->state_detail = new \vipapis\vsl\WorkOrderStateDetail();
				$this->state_detail->read($input);
				
			}
			
			
			
			
			if ("additions" == $schemeField){
				
				$needSkip = false;
				
				$this->additions = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vsl\WorkOrderAddition();
						$elem0->read($input);
						
						$this->additions[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
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
		
		$xfer += $output->writeFieldBegin('wo_no');
		$xfer += $output->writeString($this->wo_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('wo_status');
		$xfer += $output->writeI32($this->wo_status);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('create_time');
		$xfer += $output->writeString($this->create_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->modify_time !== null) {
			
			$xfer += $output->writeFieldBegin('modify_time');
			$xfer += $output->writeString($this->modify_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_begin_time !== null) {
			
			$xfer += $output->writeFieldBegin('expect_begin_time');
			$xfer += $output->writeString($this->expect_begin_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('expect_finish_time');
			$xfer += $output->writeString($this->expect_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->current_handle_user !== null) {
			
			$xfer += $output->writeFieldBegin('current_handle_user');
			$xfer += $output->writeString($this->current_handle_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->current_handle_group !== null) {
			
			$xfer += $output->writeFieldBegin('current_handle_group');
			$xfer += $output->writeString($this->current_handle_group);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->current_step_expect_finish_time !== null) {
			
			$xfer += $output->writeFieldBegin('current_step_expect_finish_time');
			$xfer += $output->writeString($this->current_step_expect_finish_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pc1_name');
		$xfer += $output->writeString($this->pc1_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pc1_id !== null) {
			
			$xfer += $output->writeFieldBegin('pc1_id');
			$xfer += $output->writeString($this->pc1_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pc2_name');
		$xfer += $output->writeString($this->pc2_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pc2_id !== null) {
			
			$xfer += $output->writeFieldBegin('pc2_id');
			$xfer += $output->writeString($this->pc2_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('pc3_name');
		$xfer += $output->writeString($this->pc3_name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pc3_id !== null) {
			
			$xfer += $output->writeFieldBegin('pc3_id');
			$xfer += $output->writeString($this->pc3_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->problem_desc !== null) {
			
			$xfer += $output->writeFieldBegin('problem_desc');
			$xfer += $output->writeString($this->problem_desc);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->state_detail !== null) {
			
			$xfer += $output->writeFieldBegin('state_detail');
			
			if (!is_object($this->state_detail)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->state_detail->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->additions !== null) {
			
			$xfer += $output->writeFieldBegin('additions');
			
			if (!is_array($this->additions)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->additions as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>