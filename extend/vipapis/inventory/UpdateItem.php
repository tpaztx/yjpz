<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class UpdateItem {
	
	static $_TSPEC;
	public $batch_no = null;
	public $barcode = null;
	public $cooperation_no = null;
	public $warehouse = null;
	public $quantity = null;
	public $circuit_break_ack_flag = null;
	public $warehouse_flag = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			2 => array(
			'var' => 'barcode'
			),
			3 => array(
			'var' => 'cooperation_no'
			),
			4 => array(
			'var' => 'warehouse'
			),
			5 => array(
			'var' => 'quantity'
			),
			6 => array(
			'var' => 'circuit_break_ack_flag'
			),
			7 => array(
			'var' => 'warehouse_flag'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['cooperation_no'])){
				
				$this->cooperation_no = $vals['cooperation_no'];
			}
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['quantity'])){
				
				$this->quantity = $vals['quantity'];
			}
			
			
			if (isset($vals['circuit_break_ack_flag'])){
				
				$this->circuit_break_ack_flag = $vals['circuit_break_ack_flag'];
			}
			
			
			if (isset($vals['warehouse_flag'])){
				
				$this->warehouse_flag = $vals['warehouse_flag'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateItem';
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
			
			
			
			
			if ("barcode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->barcode);
				
			}
			
			
			
			
			if ("cooperation_no" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->cooperation_no); 
				
			}
			
			
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->quantity); 
				
			}
			
			
			
			
			if ("circuit_break_ack_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->circuit_break_ack_flag); 
				
			}
			
			
			
			
			if ("warehouse_flag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->warehouse_flag); 
				
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
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
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
		
		
		$xfer += $output->writeFieldBegin('quantity');
		$xfer += $output->writeI32($this->quantity);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->circuit_break_ack_flag !== null) {
			
			$xfer += $output->writeFieldBegin('circuit_break_ack_flag');
			$xfer += $output->writeI32($this->circuit_break_ack_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->warehouse_flag !== null) {
			
			$xfer += $output->writeFieldBegin('warehouse_flag');
			$xfer += $output->writeI32($this->warehouse_flag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>