<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\common;

class DifferenceItem {
	
	static $_TSPEC;
	public $barcode = null;
	public $confirmed_quantity = null;
	public $expect_quantity = null;
	public $submit_quantity = null;
	public $stock = null;
	public $diff_stock = null;
	public $diff_quantity = null;
	public $failures = null;
	public $forbid_status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			21 => array(
			'var' => 'barcode'
			),
			22 => array(
			'var' => 'confirmed_quantity'
			),
			23 => array(
			'var' => 'expect_quantity'
			),
			24 => array(
			'var' => 'submit_quantity'
			),
			25 => array(
			'var' => 'stock'
			),
			26 => array(
			'var' => 'diff_stock'
			),
			27 => array(
			'var' => 'diff_quantity'
			),
			28 => array(
			'var' => 'failures'
			),
			29 => array(
			'var' => 'forbid_status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['barcode'])){
				
				$this->barcode = $vals['barcode'];
			}
			
			
			if (isset($vals['confirmed_quantity'])){
				
				$this->confirmed_quantity = $vals['confirmed_quantity'];
			}
			
			
			if (isset($vals['expect_quantity'])){
				
				$this->expect_quantity = $vals['expect_quantity'];
			}
			
			
			if (isset($vals['submit_quantity'])){
				
				$this->submit_quantity = $vals['submit_quantity'];
			}
			
			
			if (isset($vals['stock'])){
				
				$this->stock = $vals['stock'];
			}
			
			
			if (isset($vals['diff_stock'])){
				
				$this->diff_stock = $vals['diff_stock'];
			}
			
			
			if (isset($vals['diff_quantity'])){
				
				$this->diff_quantity = $vals['diff_quantity'];
			}
			
			
			if (isset($vals['failures'])){
				
				$this->failures = $vals['failures'];
			}
			
			
			if (isset($vals['forbid_status'])){
				
				$this->forbid_status = $vals['forbid_status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DifferenceItem';
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
			
			
			
			
			if ("confirmed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->confirmed_quantity); 
				
			}
			
			
			
			
			if ("expect_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->expect_quantity); 
				
			}
			
			
			
			
			if ("submit_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->submit_quantity); 
				
			}
			
			
			
			
			if ("stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->stock); 
				
			}
			
			
			
			
			if ("diff_stock" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->diff_stock); 
				
			}
			
			
			
			
			if ("diff_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->diff_quantity); 
				
			}
			
			
			
			
			if ("failures" == $schemeField){
				
				$needSkip = false;
				
				$this->failures = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\pda\order\common\FailureItem();
						$elem0->read($input);
						
						$this->failures[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("forbid_status" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->forbid_status); 
				
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
		
		$xfer += $output->writeFieldBegin('barcode');
		$xfer += $output->writeString($this->barcode);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->confirmed_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('confirmed_quantity');
			$xfer += $output->writeI32($this->confirmed_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->expect_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('expect_quantity');
			$xfer += $output->writeI32($this->expect_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->submit_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('submit_quantity');
			$xfer += $output->writeI32($this->submit_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->stock !== null) {
			
			$xfer += $output->writeFieldBegin('stock');
			$xfer += $output->writeI32($this->stock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diff_stock !== null) {
			
			$xfer += $output->writeFieldBegin('diff_stock');
			$xfer += $output->writeI32($this->diff_stock);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diff_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('diff_quantity');
			$xfer += $output->writeI32($this->diff_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->failures !== null) {
			
			$xfer += $output->writeFieldBegin('failures');
			
			if (!is_array($this->failures)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->failures as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->forbid_status !== null) {
			
			$xfer += $output->writeFieldBegin('forbid_status');
			$xfer += $output->writeByte($this->forbid_status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>