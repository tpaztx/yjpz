<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class OfflineOrder {
	
	static $_TSPEC;
	public $order_info = null;
	public $order_prod_items = null;
	public $order_pay_infos = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'order_info'
			),
			2 => array(
			'var' => 'order_prod_items'
			),
			3 => array(
			'var' => 'order_pay_infos'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['order_info'])){
				
				$this->order_info = $vals['order_info'];
			}
			
			
			if (isset($vals['order_prod_items'])){
				
				$this->order_prod_items = $vals['order_prod_items'];
			}
			
			
			if (isset($vals['order_pay_infos'])){
				
				$this->order_pay_infos = $vals['order_pay_infos'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'OfflineOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("order_info" == $schemeField){
				
				$needSkip = false;
				
				$this->order_info = new \vipapis\shanshan\outlet\OrderInfo();
				$this->order_info->read($input);
				
			}
			
			
			
			
			if ("order_prod_items" == $schemeField){
				
				$needSkip = false;
				
				$this->order_prod_items = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\shanshan\outlet\OrderProdItem();
						$elem1->read($input);
						
						$this->order_prod_items[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("order_pay_infos" == $schemeField){
				
				$needSkip = false;
				
				$this->order_pay_infos = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\shanshan\outlet\OrderPayInfo();
						$elem2->read($input);
						
						$this->order_pay_infos[$_size2++] = $elem2;
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
		
		$xfer += $output->writeFieldBegin('order_info');
		
		if (!is_object($this->order_info)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->order_info->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_prod_items');
		
		if (!is_array($this->order_prod_items)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_prod_items as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('order_pay_infos');
		
		if (!is_array($this->order_pay_infos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->order_pay_infos as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>