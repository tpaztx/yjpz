<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OnlineOrderResult {
	
	static $_TSPEC;
	public $online_order = null;
	public $order_prodcuts = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'online_order'
			),
			2 => array(
			'var' => 'order_prodcuts'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['online_order'])){
				
				$this->online_order = $vals['online_order'];
			}
			
			
			if (isset($vals['order_prodcuts'])){
				
				$this->order_prodcuts = $vals['order_prodcuts'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OnlineOrderResult';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("online_order" == $schemeField){
				
				$needSkip = false;
				
				$this->online_order = new \vipapis\shanshan\outlet\OnlineOrder();
				$this->online_order->read($input);
				
			}
			
			
			
			
			if ("order_prodcuts" == $schemeField){
				
				$needSkip = false;
				
				$this->order_prodcuts = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\shanshan\outlet\OnlineOrderProduct();
						$elem0->read($input);
						
						$this->order_prodcuts[$_size0++] = $elem0;
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
		
		if($this->online_order !== null) {
			
			$xfer += $output->writeFieldBegin('online_order');
			
			if (!is_object($this->online_order)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->online_order->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_prodcuts !== null) {
			
			$xfer += $output->writeFieldBegin('order_prodcuts');
			
			if (!is_array($this->order_prodcuts)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->order_prodcuts as $iter0){
				
				
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