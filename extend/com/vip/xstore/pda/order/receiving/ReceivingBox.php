<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\receiving;

class ReceivingBox {
	
	static $_TSPEC;
	public $box_no = null;
	public $planning_quantity = null;
	public $confirmed_quantity = null;
	public $action_type = null;
	public $approval_user = null;
	public $approval_time = null;
	public $approval_source = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'box_no'
			),
			2 => array(
			'var' => 'planning_quantity'
			),
			3 => array(
			'var' => 'confirmed_quantity'
			),
			4 => array(
			'var' => 'action_type'
			),
			5 => array(
			'var' => 'approval_user'
			),
			6 => array(
			'var' => 'approval_time'
			),
			7 => array(
			'var' => 'approval_source'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['planning_quantity'])){
				
				$this->planning_quantity = $vals['planning_quantity'];
			}
			
			
			if (isset($vals['confirmed_quantity'])){
				
				$this->confirmed_quantity = $vals['confirmed_quantity'];
			}
			
			
			if (isset($vals['action_type'])){
				
				$this->action_type = $vals['action_type'];
			}
			
			
			if (isset($vals['approval_user'])){
				
				$this->approval_user = $vals['approval_user'];
			}
			
			
			if (isset($vals['approval_time'])){
				
				$this->approval_time = $vals['approval_time'];
			}
			
			
			if (isset($vals['approval_source'])){
				
				$this->approval_source = $vals['approval_source'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReceivingBox';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("planning_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->planning_quantity); 
				
			}
			
			
			
			
			if ("confirmed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->confirmed_quantity); 
				
			}
			
			
			
			
			if ("action_type" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->action_type); 
				
			}
			
			
			
			
			if ("approval_user" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_user);
				
			}
			
			
			
			
			if ("approval_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_time);
				
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
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('planning_quantity');
		$xfer += $output->writeI32($this->planning_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('confirmed_quantity');
		$xfer += $output->writeI32($this->confirmed_quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->action_type !== null) {
			
			$xfer += $output->writeFieldBegin('action_type');
			$xfer += $output->writeI32($this->action_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_user !== null) {
			
			$xfer += $output->writeFieldBegin('approval_user');
			$xfer += $output->writeString($this->approval_user);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_time !== null) {
			
			$xfer += $output->writeFieldBegin('approval_time');
			$xfer += $output->writeString($this->approval_time);
			
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