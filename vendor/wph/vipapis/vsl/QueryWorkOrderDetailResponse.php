<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class QueryWorkOrderDetailResponse {
	
	static $_TSPEC;
	public $work_info = null;
	public $work_order = null;
	public $work_attachments = null;
	public $work_goods = null;
	public $work_rechecks = null;
	public $work_steps = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			2 => array(
			'var' => 'work_info'
			),
			3 => array(
			'var' => 'work_order'
			),
			4 => array(
			'var' => 'work_attachments'
			),
			5 => array(
			'var' => 'work_goods'
			),
			6 => array(
			'var' => 'work_rechecks'
			),
			7 => array(
			'var' => 'work_steps'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['work_info'])){
				
				$this->work_info = $vals['work_info'];
			}
			
			
			if (isset($vals['work_order'])){
				
				$this->work_order = $vals['work_order'];
			}
			
			
			if (isset($vals['work_attachments'])){
				
				$this->work_attachments = $vals['work_attachments'];
			}
			
			
			if (isset($vals['work_goods'])){
				
				$this->work_goods = $vals['work_goods'];
			}
			
			
			if (isset($vals['work_rechecks'])){
				
				$this->work_rechecks = $vals['work_rechecks'];
			}
			
			
			if (isset($vals['work_steps'])){
				
				$this->work_steps = $vals['work_steps'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryWorkOrderDetailResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("work_info" == $schemeField){
				
				$needSkip = false;
				
				$this->work_info = new \vipapis\vsl\WorkInfo();
				$this->work_info->read($input);
				
			}
			
			
			
			
			if ("work_order" == $schemeField){
				
				$needSkip = false;
				
				$this->work_order = new \vipapis\vsl\WorkOrder();
				$this->work_order->read($input);
				
			}
			
			
			
			
			if ("work_attachments" == $schemeField){
				
				$needSkip = false;
				
				$this->work_attachments = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \vipapis\vsl\WorkOrderAttachment();
						$elem0->read($input);
						
						$this->work_attachments[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("work_goods" == $schemeField){
				
				$needSkip = false;
				
				$this->work_goods = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \vipapis\vsl\WorkOrderGoods();
						$elem1->read($input);
						
						$this->work_goods[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("work_rechecks" == $schemeField){
				
				$needSkip = false;
				
				$this->work_rechecks = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \vipapis\vsl\WorkOrderRecheck();
						$elem2->read($input);
						
						$this->work_rechecks[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("work_steps" == $schemeField){
				
				$needSkip = false;
				
				$this->work_steps = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						
						$elem3 = new \vipapis\vsl\WorkOrderStep();
						$elem3->read($input);
						
						$this->work_steps[$_size3++] = $elem3;
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
		
		if($this->work_info !== null) {
			
			$xfer += $output->writeFieldBegin('work_info');
			
			if (!is_object($this->work_info)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->work_info->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_order !== null) {
			
			$xfer += $output->writeFieldBegin('work_order');
			
			if (!is_object($this->work_order)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->work_order->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_attachments !== null) {
			
			$xfer += $output->writeFieldBegin('work_attachments');
			
			if (!is_array($this->work_attachments)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_attachments as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_goods !== null) {
			
			$xfer += $output->writeFieldBegin('work_goods');
			
			if (!is_array($this->work_goods)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_goods as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_rechecks !== null) {
			
			$xfer += $output->writeFieldBegin('work_rechecks');
			
			if (!is_array($this->work_rechecks)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_rechecks as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->work_steps !== null) {
			
			$xfer += $output->writeFieldBegin('work_steps');
			
			if (!is_array($this->work_steps)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->work_steps as $iter0){
				
				
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