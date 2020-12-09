<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\common;

class SubmitFlow {
	
	static $_TSPEC;
	public $barcode = null;
	public $product_name = null;
	public $confirmed_quantity = null;
	public $approval_user_name = null;
	public $approval_date = null;
	public $approval_source = null;
	public $sent_status = null;
	public $sent_msg = null;
	public $tx_id = null;
	public $box_no = null;
	public $over_reason = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'barcode'
			),
			2 => array(
			'var' => 'product_name'
			),
			3 => array(
			'var' => 'confirmed_quantity'
			),
			4 => array(
			'var' => 'approval_user_name'
			),
			5 => array(
			'var' => 'approval_date'
			),
			6 => array(
			'var' => 'approval_source'
			),
			7 => array(
			'var' => 'sent_status'
			),
			8 => array(
			'var' => 'sent_msg'
			),
			9 => array(
			'var' => 'tx_id'
			),
			10 => array(
			'var' => 'box_no'
			),
			11 => array(
			'var' => 'over_reason'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['product_name'])){
				
				$this->product_name = $vals['product_name'];
			}
			
			
			if (isset($vals['confirmed_quantity'])){
				
				$this->confirmed_quantity = $vals['confirmed_quantity'];
			}
			
			
			if (isset($vals['approval_user_name'])){
				
				$this->approval_user_name = $vals['approval_user_name'];
			}
			
			
			if (isset($vals['approval_date'])){
				
				$this->approval_date = $vals['approval_date'];
			}
			
			
			if (isset($vals['approval_source'])){
				
				$this->approval_source = $vals['approval_source'];
			}
			
			
			if (isset($vals['sent_status'])){
				
				$this->sent_status = $vals['sent_status'];
			}
			
			
			if (isset($vals['sent_msg'])){
				
				$this->sent_msg = $vals['sent_msg'];
			}
			
			
			if (isset($vals['tx_id'])){
				
				$this->tx_id = $vals['tx_id'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
			if (isset($vals['over_reason'])){
				
				$this->over_reason = $vals['over_reason'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SubmitFlow';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("product_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->product_name);
				
			}
			
			
			
			
			if ("confirmed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->confirmed_quantity); 
				
			}
			
			
			
			
			if ("approval_user_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_user_name);
				
			}
			
			
			
			
			if ("approval_date" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_date);
				
			}
			
			
			
			
			if ("approval_source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->approval_source);
				
			}
			
			
			
			
			if ("sent_status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sent_status); 
				
			}
			
			
			
			
			if ("sent_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sent_msg);
				
			}
			
			
			
			
			if ("tx_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_id);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
			}
			
			
			
			
			if ("over_reason" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->over_reason);
				
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
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->product_name !== null) {
			
			$xfer += $output->writeFieldBegin('product_name');
			$xfer += $output->writeString($this->product_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->confirmed_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('confirmed_quantity');
			$xfer += $output->writeI32($this->confirmed_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_user_name !== null) {
			
			$xfer += $output->writeFieldBegin('approval_user_name');
			$xfer += $output->writeString($this->approval_user_name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_date !== null) {
			
			$xfer += $output->writeFieldBegin('approval_date');
			$xfer += $output->writeString($this->approval_date);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->approval_source !== null) {
			
			$xfer += $output->writeFieldBegin('approval_source');
			$xfer += $output->writeString($this->approval_source);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('sent_status');
		$xfer += $output->writeI32($this->sent_status);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sent_msg !== null) {
			
			$xfer += $output->writeFieldBegin('sent_msg');
			$xfer += $output->writeString($this->sent_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_id !== null) {
			
			$xfer += $output->writeFieldBegin('tx_id');
			$xfer += $output->writeString($this->tx_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->over_reason !== null) {
			
			$xfer += $output->writeFieldBegin('over_reason');
			$xfer += $output->writeString($this->over_reason);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>