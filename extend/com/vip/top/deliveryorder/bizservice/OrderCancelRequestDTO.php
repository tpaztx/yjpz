<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\top\deliveryorder\bizservice;

class OrderCancelRequestDTO {
	
	static $_TSPEC;
	public $warehouse = null;
	public $orderSn = null;
	public $cancelTime = null;
	public $mergeFlag = null;
	public $mergeOrderSns = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'warehouse'
			),
			2 => array(
			'var' => 'orderSn'
			),
			3 => array(
			'var' => 'cancelTime'
			),
			4 => array(
			'var' => 'mergeFlag'
			),
			5 => array(
			'var' => 'mergeOrderSns'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['warehouse'])){
				
				$this->warehouse = $vals['warehouse'];
			}
			
			
			if (isset($vals['orderSn'])){
				
				$this->orderSn = $vals['orderSn'];
			}
			
			
			if (isset($vals['cancelTime'])){
				
				$this->cancelTime = $vals['cancelTime'];
			}
			
			
			if (isset($vals['mergeFlag'])){
				
				$this->mergeFlag = $vals['mergeFlag'];
			}
			
			
			if (isset($vals['mergeOrderSns'])){
				
				$this->mergeOrderSns = $vals['mergeOrderSns'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OrderCancelRequestDTO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("warehouse" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->warehouse);
				
			}
			
			
			
			
			if ("orderSn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->orderSn);
				
			}
			
			
			
			
			if ("cancelTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->cancelTime);
				
			}
			
			
			
			
			if ("mergeFlag" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->mergeFlag); 
				
			}
			
			
			
			
			if ("mergeOrderSns" == $schemeField){
				
				$needSkip = false;
				
				$this->mergeOrderSns = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->mergeOrderSns[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('warehouse');
		$xfer += $output->writeString($this->warehouse);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('orderSn');
		$xfer += $output->writeString($this->orderSn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cancelTime');
		$xfer += $output->writeI64($this->cancelTime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->mergeFlag !== null) {
			
			$xfer += $output->writeFieldBegin('mergeFlag');
			$xfer += $output->writeI32($this->mergeFlag);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mergeOrderSns !== null) {
			
			$xfer += $output->writeFieldBegin('mergeOrderSns');
			
			if (!is_array($this->mergeOrderSns)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mergeOrderSns as $iter0){
				
				$xfer += $output->writeString($iter0);
				
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