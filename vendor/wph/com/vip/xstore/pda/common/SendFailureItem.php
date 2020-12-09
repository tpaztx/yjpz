<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\common;

class SendFailureItem {
	
	static $_TSPEC;
	public $transferring_no = null;
	public $barcode = null;
	public $quantity = null;
	public $send_quantity = null;
	public $tx_id = null;
	public $is_done = null;
	public $sent_status = null;
	public $sent_msg = null;
	public $remark = null;
	public $create_time = null;
	public $update_time = null;
	public $box_no = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			21 => array(
			'var' => 'transferring_no'
			),
			22 => array(
			'var' => 'barcode'
			),
			23 => array(
			'var' => 'quantity'
			),
			24 => array(
			'var' => 'send_quantity'
			),
			25 => array(
			'var' => 'tx_id'
			),
			26 => array(
			'var' => 'is_done'
			),
			27 => array(
			'var' => 'sent_status'
			),
			28 => array(
			'var' => 'sent_msg'
			),
			29 => array(
			'var' => 'remark'
			),
			30 => array(
			'var' => 'create_time'
			),
			31 => array(
			'var' => 'update_time'
			),
			32 => array(
			'var' => 'box_no'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['transferring_no'])){
				
				$this->transferring_no = $vals['transferring_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['send_quantity'])){
				
				$this->send_quantity = $vals['send_quantity'];
			}
			
			
			if (isset($vals['tx_id'])){
				
				$this->tx_id = $vals['tx_id'];
			}
			
			
			if (isset($vals['is_done'])){
				
				$this->is_done = $vals['is_done'];
			}
			
			
			if (isset($vals['sent_status'])){
				
				$this->sent_status = $vals['sent_status'];
			}
			
			
			if (isset($vals['sent_msg'])){
				
				$this->sent_msg = $vals['sent_msg'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
			if (isset($vals['create_time'])){
				
				$this->create_time = $vals['create_time'];
			}
			
			
			if (isset($vals['update_time'])){
				
				$this->update_time = $vals['update_time'];
			}
			
			
			if (isset($vals['box_no'])){
				
				$this->box_no = $vals['box_no'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SendFailureItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("transferring_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_no);
				
			}
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("send_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->send_quantity); 
				
			}
			
			
			
			
			if ("tx_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_id);
				
			}
			
			
			
			
			if ("is_done" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_done); 
				
			}
			
			
			
			
			if ("sent_status" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sent_status);
				
			}
			
			
			
			
			if ("sent_msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->sent_msg);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
			}
			
			
			
			
			if ("create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->create_time);
				
			}
			
			
			
			
			if ("update_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->update_time);
				
			}
			
			
			
			
			if ("box_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->box_no);
				
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
		
		if($this->transferring_no !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_no');
			$xfer += $output->writeString($this->transferring_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcode !== null) {
			
			$xfer += $output->writeFieldBegin('barcode');
			$xfer += $output->writeString($this->barcode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->quantity !== null) {
			
			$xfer += $output->writeFieldBegin('quantity');
			$xfer += $output->writeI32($this->quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->send_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('send_quantity');
			$xfer += $output->writeI32($this->send_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_id !== null) {
			
			$xfer += $output->writeFieldBegin('tx_id');
			$xfer += $output->writeString($this->tx_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->is_done !== null) {
			
			$xfer += $output->writeFieldBegin('is_done');
			$xfer += $output->writeI32($this->is_done);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sent_status !== null) {
			
			$xfer += $output->writeFieldBegin('sent_status');
			$xfer += $output->writeString($this->sent_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->sent_msg !== null) {
			
			$xfer += $output->writeFieldBegin('sent_msg');
			$xfer += $output->writeString($this->sent_msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time !== null) {
			
			$xfer += $output->writeFieldBegin('create_time');
			$xfer += $output->writeString($this->create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->update_time !== null) {
			
			$xfer += $output->writeFieldBegin('update_time');
			$xfer += $output->writeString($this->update_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->box_no !== null) {
			
			$xfer += $output->writeFieldBegin('box_no');
			$xfer += $output->writeString($this->box_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>