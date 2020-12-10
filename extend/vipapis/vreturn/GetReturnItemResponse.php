<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vreturn;

class GetReturnItemResponse {
	
	static $_TSPEC;
	public $return_sn = null;
	public $out_time = null;
	public $total_cases = null;
	public $total_sku = null;
	public $total_qty = null;
	public $total_detail = null;
	public $items = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'return_sn'
			),
			2 => array(
			'var' => 'out_time'
			),
			3 => array(
			'var' => 'total_cases'
			),
			4 => array(
			'var' => 'total_sku'
			),
			5 => array(
			'var' => 'total_qty'
			),
			6 => array(
			'var' => 'total_detail'
			),
			7 => array(
			'var' => 'items'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['return_sn'])){
				
				$this->return_sn = $vals['return_sn'];
			}
			
			
			if (isset($vals['out_time'])){
				
				$this->out_time = $vals['out_time'];
			}
			
			
			if (isset($vals['total_cases'])){
				
				$this->total_cases = $vals['total_cases'];
			}
			
			
			if (isset($vals['total_sku'])){
				
				$this->total_sku = $vals['total_sku'];
			}
			
			
			if (isset($vals['total_qty'])){
				
				$this->total_qty = $vals['total_qty'];
			}
			
			
			if (isset($vals['total_detail'])){
				
				$this->total_detail = $vals['total_detail'];
			}
			
			
			if (isset($vals['items'])){
				
				$this->items = $vals['items'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetReturnItemResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("return_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_sn);
				
			}
			
			
			
			
			if ("out_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->out_time);
				
			}
			
			
			
			
			if ("total_cases" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_cases); 
				
			}
			
			
			
			
			if ("total_sku" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_sku); 
				
			}
			
			
			
			
			if ("total_qty" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_qty); 
				
			}
			
			
			
			
			if ("total_detail" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_detail); 
				
			}
			
			
			
			
			if ("items" == $schemeField){
				
				$needSkip = false;
				
				$this->items = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vreturn\ReturnOrderItem();
						$elem0->read($input);
						
						$this->items[$_size0++] = $elem0;
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
		
		if($this->return_sn !== null) {
			
			$xfer += $output->writeFieldBegin('return_sn');
			$xfer += $output->writeString($this->return_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->out_time !== null) {
			
			$xfer += $output->writeFieldBegin('out_time');
			$xfer += $output->writeString($this->out_time);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_cases !== null) {
			
			$xfer += $output->writeFieldBegin('total_cases');
			$xfer += $output->writeI32($this->total_cases);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_sku !== null) {
			
			$xfer += $output->writeFieldBegin('total_sku');
			$xfer += $output->writeI32($this->total_sku);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_qty !== null) {
			
			$xfer += $output->writeFieldBegin('total_qty');
			$xfer += $output->writeI32($this->total_qty);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_detail !== null) {
			
			$xfer += $output->writeFieldBegin('total_detail');
			$xfer += $output->writeI32($this->total_detail);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->items !== null) {
			
			$xfer += $output->writeFieldBegin('items');
			
			if (!is_array($this->items)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->items as $iter0){
				
				
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