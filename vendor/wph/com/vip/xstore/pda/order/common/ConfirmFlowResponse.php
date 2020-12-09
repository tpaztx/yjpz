<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\common;

class ConfirmFlowResponse {
	
	static $_TSPEC;
	public $is_succeed = null;
	public $total_expect_quantity = null;
	public $total_submit_quantity = null;
	public $total_confirmed_quantity = null;
	public $leaving_quantity = null;
	public $diffs = null;
	public $tx_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			21 => array(
			'var' => 'is_succeed'
			),
			22 => array(
			'var' => 'total_expect_quantity'
			),
			23 => array(
			'var' => 'total_submit_quantity'
			),
			24 => array(
			'var' => 'total_confirmed_quantity'
			),
			25 => array(
			'var' => 'leaving_quantity'
			),
			26 => array(
			'var' => 'diffs'
			),
			27 => array(
			'var' => 'tx_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['is_succeed'])){
				
				$this->is_succeed = $vals['is_succeed'];
			}
			
			
			if (isset($vals['total_expect_quantity'])){
				
				$this->total_expect_quantity = $vals['total_expect_quantity'];
			}
			
			
			if (isset($vals['total_submit_quantity'])){
				
				$this->total_submit_quantity = $vals['total_submit_quantity'];
			}
			
			
			if (isset($vals['total_confirmed_quantity'])){
				
				$this->total_confirmed_quantity = $vals['total_confirmed_quantity'];
			}
			
			
			if (isset($vals['leaving_quantity'])){
				
				$this->leaving_quantity = $vals['leaving_quantity'];
			}
			
			
			if (isset($vals['diffs'])){
				
				$this->diffs = $vals['diffs'];
			}
			
			
			if (isset($vals['tx_id'])){
				
				$this->tx_id = $vals['tx_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConfirmFlowResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("is_succeed" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->is_succeed); 
				
			}
			
			
			
			
			if ("total_expect_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_expect_quantity); 
				
			}
			
			
			
			
			if ("total_submit_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_submit_quantity); 
				
			}
			
			
			
			
			if ("total_confirmed_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->total_confirmed_quantity); 
				
			}
			
			
			
			
			if ("leaving_quantity" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->leaving_quantity); 
				
			}
			
			
			
			
			if ("diffs" == $schemeField){
				
				$needSkip = false;
				
				$this->diffs = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\xstore\pda\order\common\DifferenceItem();
						$elem0->read($input);
						
						$this->diffs[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tx_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tx_id);
				
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
		
		$xfer += $output->writeFieldBegin('is_succeed');
		$xfer += $output->writeI32($this->is_succeed);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->total_expect_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('total_expect_quantity');
			$xfer += $output->writeI32($this->total_expect_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_submit_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('total_submit_quantity');
			$xfer += $output->writeI32($this->total_submit_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->total_confirmed_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('total_confirmed_quantity');
			$xfer += $output->writeI32($this->total_confirmed_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->leaving_quantity !== null) {
			
			$xfer += $output->writeFieldBegin('leaving_quantity');
			$xfer += $output->writeI32($this->leaving_quantity);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->diffs !== null) {
			
			$xfer += $output->writeFieldBegin('diffs');
			
			if (!is_array($this->diffs)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->diffs as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tx_id !== null) {
			
			$xfer += $output->writeFieldBegin('tx_id');
			$xfer += $output->writeString($this->tx_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>