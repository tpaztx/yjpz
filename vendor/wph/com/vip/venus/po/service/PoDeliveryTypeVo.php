<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\venus\po\service;

class PoDeliveryTypeVo {
	
	static $_TSPEC;
	public $cooperation_no = null;
	public $po_no = null;
	public $co_mode = null;
	public $po_create_time = null;
	public $po_delivery_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'cooperation_no'
			),
			2 => array(
			'var' => 'po_no'
			),
			3 => array(
			'var' => 'co_mode'
			),
			4 => array(
			'var' => 'po_create_time'
			),
			5 => array(
			'var' => 'po_delivery_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['po_no'])){
				
				$this->po_no = $vals['po_no'];
			}
			
			
			if (isset($vals['co_mode'])){
				
				$this->co_mode = $vals['co_mode'];
			}
			
			
			if (isset($vals['po_create_time'])){
				
				$this->po_create_time = $vals['po_create_time'];
			}
			
			
			if (isset($vals['po_delivery_type'])){
				
				$this->po_delivery_type = $vals['po_delivery_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'PoDeliveryTypeVo';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cooperation_no);
				
			}
			
			
			
			
			if ("po_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_no);
				
			}
			
			
			
			
			if ("co_mode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->co_mode);
				
			}
			
			
			
			
			if ("po_create_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->po_create_time);
				
			}
			
			
			
			
			if ("po_delivery_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->po_delivery_type); 
				
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
		
		if($this->cooperation_no !== null) {
			
			$xfer += $output->writeFieldBegin('cooperation_no');
			$xfer += $output->writeString($this->cooperation_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_no !== null) {
			
			$xfer += $output->writeFieldBegin('po_no');
			$xfer += $output->writeString($this->po_no);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->co_mode !== null) {
			
			$xfer += $output->writeFieldBegin('co_mode');
			$xfer += $output->writeString($this->co_mode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_create_time !== null) {
			
			$xfer += $output->writeFieldBegin('po_create_time');
			$xfer += $output->writeString($this->po_create_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->po_delivery_type !== null) {
			
			$xfer += $output->writeFieldBegin('po_delivery_type');
			$xfer += $output->writeByte($this->po_delivery_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>