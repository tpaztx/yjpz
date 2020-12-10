<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\order\receiving;

class XUPReceivingOrderRequest {
	
	static $_TSPEC;
	public $source = null;
	public $client_id = null;
	public $pda_version = null;
	public $receiving_type = null;
	public $create_time_range = null;
	public $order_nos = null;
	public $action_types = null;
	public $page = null;
	public $page_size = null;
	public $delivery_warehouse_code = null;
	public $receiving_warehouse_code = null;
	public $company_code = null;
	public $transferring_type = null;
	public $receiving_time_range = null;
	public $delivery_time_range = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			51 => array(
			'var' => 'source'
			),
			52 => array(
			'var' => 'client_id'
			),
			53 => array(
			'var' => 'pda_version'
			),
			60 => array(
			'var' => 'receiving_type'
			),
			61 => array(
			'var' => 'create_time_range'
			),
			62 => array(
			'var' => 'order_nos'
			),
			63 => array(
			'var' => 'action_types'
			),
			64 => array(
			'var' => 'page'
			),
			65 => array(
			'var' => 'page_size'
			),
			1 => array(
			'var' => 'delivery_warehouse_code'
			),
			2 => array(
			'var' => 'receiving_warehouse_code'
			),
			3 => array(
			'var' => 'company_code'
			),
			4 => array(
			'var' => 'transferring_type'
			),
			5 => array(
			'var' => 'receiving_time_range'
			),
			6 => array(
			'var' => 'delivery_time_range'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['pda_version'])){
				
				$this->pda_version = $vals['pda_version'];
			}
			
			
			if (isset($vals['receiving_type'])){
				
				$this->receiving_type = $vals['receiving_type'];
			}
			
			
			if (isset($vals['create_time_range'])){
				
				$this->create_time_range = $vals['create_time_range'];
			}
			
			
			if (isset($vals['order_nos'])){
				
				$this->order_nos = $vals['order_nos'];
			}
			
			
			if (isset($vals['action_types'])){
				
				$this->action_types = $vals['action_types'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
			if (isset($vals['delivery_warehouse_code'])){
				
				$this->delivery_warehouse_code = $vals['delivery_warehouse_code'];
			}
			
			
			if (isset($vals['receiving_warehouse_code'])){
				
				$this->receiving_warehouse_code = $vals['receiving_warehouse_code'];
			}
			
			
			if (isset($vals['company_code'])){
				
				$this->company_code = $vals['company_code'];
			}
			
			
			if (isset($vals['transferring_type'])){
				
				$this->transferring_type = $vals['transferring_type'];
			}
			
			
			if (isset($vals['receiving_time_range'])){
				
				$this->receiving_time_range = $vals['receiving_time_range'];
			}
			
			
			if (isset($vals['delivery_time_range'])){
				
				$this->delivery_time_range = $vals['delivery_time_range'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'XUPReceivingOrderRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_id);
				
			}
			
			
			
			
			if ("pda_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pda_version);
				
			}
			
			
			
			
			if ("receiving_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->receiving_type); 
				
			}
			
			
			
			
			if ("create_time_range" == $schemeField){
				
				$needSkip = false;
				
				$this->create_time_range = new \com\vip\xstore\pda\common\TimeRange();
				$this->create_time_range->read($input);
				
			}
			
			
			
			
			if ("order_nos" == $schemeField){
				
				$needSkip = false;
				
				$this->order_nos = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->order_nos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("action_types" == $schemeField){
				
				$needSkip = false;
				
				$this->action_types = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readByte($elem1); 
						
						$this->action_types[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
			}
			
			
			
			
			if ("delivery_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->delivery_warehouse_code);
				
			}
			
			
			
			
			if ("receiving_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->receiving_warehouse_code);
				
			}
			
			
			
			
			if ("company_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->company_code);
				
			}
			
			
			
			
			if ("transferring_type" == $schemeField){
				
				$needSkip = false;
				$input->readByte($this->transferring_type); 
				
			}
			
			
			
			
			if ("receiving_time_range" == $schemeField){
				
				$needSkip = false;
				
				$this->receiving_time_range = new \com\vip\xstore\pda\common\TimeRange();
				$this->receiving_time_range->read($input);
				
			}
			
			
			
			
			if ("delivery_time_range" == $schemeField){
				
				$needSkip = false;
				
				$this->delivery_time_range = new \com\vip\xstore\pda\common\TimeRange();
				$this->delivery_time_range->read($input);
				
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
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeString($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pda_version !== null) {
			
			$xfer += $output->writeFieldBegin('pda_version');
			$xfer += $output->writeString($this->pda_version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiving_type !== null) {
			
			$xfer += $output->writeFieldBegin('receiving_type');
			$xfer += $output->writeByte($this->receiving_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->create_time_range !== null) {
			
			$xfer += $output->writeFieldBegin('create_time_range');
			
			if (!is_object($this->create_time_range)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->create_time_range->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->order_nos !== null) {
			
			$xfer += $output->writeFieldBegin('order_nos');
			
			if (!is_array($this->order_nos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->order_nos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->action_types !== null) {
			
			$xfer += $output->writeFieldBegin('action_types');
			
			if (!is_array($this->action_types)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->action_types as $iter0){
				
				$xfer += $output->writeByte($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->delivery_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_warehouse_code');
			$xfer += $output->writeString($this->delivery_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiving_warehouse_code !== null) {
			
			$xfer += $output->writeFieldBegin('receiving_warehouse_code');
			$xfer += $output->writeString($this->receiving_warehouse_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->company_code !== null) {
			
			$xfer += $output->writeFieldBegin('company_code');
			$xfer += $output->writeString($this->company_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->transferring_type !== null) {
			
			$xfer += $output->writeFieldBegin('transferring_type');
			$xfer += $output->writeByte($this->transferring_type);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->receiving_time_range !== null) {
			
			$xfer += $output->writeFieldBegin('receiving_time_range');
			
			if (!is_object($this->receiving_time_range)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->receiving_time_range->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->delivery_time_range !== null) {
			
			$xfer += $output->writeFieldBegin('delivery_time_range');
			
			if (!is_object($this->delivery_time_range)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->delivery_time_range->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>