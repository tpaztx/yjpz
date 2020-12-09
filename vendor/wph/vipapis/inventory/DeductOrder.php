<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\inventory;

class DeductOrder {
	
	static $_TSPEC;
	public $occupied_order_sn = null;
	public $barcodes = null;
	public $order_sn = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'occupied_order_sn'
			),
			2 => array(
			'var' => 'barcodes'
			),
			3 => array(
			'var' => 'order_sn'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['occupied_order_sn'])){
				
				$this->occupied_order_sn = $vals['occupied_order_sn'];
			}
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
			if (isset($vals['order_sn'])){
				
				$this->order_sn = $vals['order_sn'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DeductOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("occupied_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->occupied_order_sn);
				
			}
			
			
			
			
			if ("barcodes" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodes = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\inventory\DeductOrderDetail();
						$elem0->read($input);
						
						$this->barcodes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->order_sn);
				
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
		
		if($this->occupied_order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('occupied_order_sn');
			$xfer += $output->writeString($this->occupied_order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->barcodes !== null) {
			
			$xfer += $output->writeFieldBegin('barcodes');
			
			if (!is_array($this->barcodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->barcodes as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_sn !== null) {
			
			$xfer += $output->writeFieldBegin('order_sn');
			$xfer += $output->writeString($this->order_sn);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>