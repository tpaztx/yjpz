<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ReportLogisticsRequest {
	
	static $_TSPEC;
	public $batch_no = null;
	public $carrier_code = null;
	public $carrier_order_sn = null;
	public $logistics_no = null;
	public $sub_logistics_no = null;
	public $biz_type = null;
	public $op_time = null;
	public $freight = null;
	public $weight = null;
	public $volume = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'batch_no'
			),
			2 => array(
			'var' => 'carrier_code'
			),
			3 => array(
			'var' => 'carrier_order_sn'
			),
			4 => array(
			'var' => 'logistics_no'
			),
			5 => array(
			'var' => 'sub_logistics_no'
			),
			6 => array(
			'var' => 'biz_type'
			),
			7 => array(
			'var' => 'op_time'
			),
			8 => array(
			'var' => 'freight'
			),
			9 => array(
			'var' => 'weight'
			),
			10 => array(
			'var' => 'volume'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['batch_no'])){
				
				$this->batch_no = $vals['batch_no'];
			}
			
			
			if (isset($vals['carrier_code'])){
				
				$this->carrier_code = $vals['carrier_code'];
			}
			
			
			if (isset($vals['carrier_order_sn'])){
				
				$this->carrier_order_sn = $vals['carrier_order_sn'];
			}
			
			
			if (isset($vals['logistics_no'])){
				
				$this->logistics_no = $vals['logistics_no'];
			}
			
			
			if (isset($vals['sub_logistics_no'])){
				
				$this->sub_logistics_no = $vals['sub_logistics_no'];
			}
			
			
			if (isset($vals['biz_type'])){
				
				$this->biz_type = $vals['biz_type'];
			}
			
			
			if (isset($vals['op_time'])){
				
				$this->op_time = $vals['op_time'];
			}
			
			
			if (isset($vals['freight'])){
				
				$this->freight = $vals['freight'];
			}
			
			
			if (isset($vals['weight'])){
				
				$this->weight = $vals['weight'];
			}
			
			
			if (isset($vals['volume'])){
				
				$this->volume = $vals['volume'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReportLogisticsRequest';
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
			
			
			
			
			if ("carrier_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_code);
				
			}
			
			
			
			
			if ("carrier_order_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->carrier_order_sn);
				
			}
			
			
			
			
			if ("logistics_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->logistics_no);
				
			}
			
			
			
			
			if ("sub_logistics_no" == $schemeField){
				
				$needSkip = false;
				
				$this->sub_logistics_no = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readString($elem1);
						
						$this->sub_logistics_no[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("biz_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->biz_type);
				
			}
			
			
			
			
			if ("op_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->op_time);
				
			}
			
			
			
			
			if ("freight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->freight);
				
			}
			
			
			
			
			if ("weight" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->weight);
				
			}
			
			
			
			
			if ("volume" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->volume);
				
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
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_order_sn');
		$xfer += $output->writeString($this->carrier_order_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('logistics_no');
		$xfer += $output->writeString($this->logistics_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sub_logistics_no !== null) {
			
			$xfer += $output->writeFieldBegin('sub_logistics_no');
			
			if (!is_array($this->sub_logistics_no)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->sub_logistics_no as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('biz_type');
		$xfer += $output->writeString($this->biz_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('op_time');
		$xfer += $output->writeString($this->op_time);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->freight !== null) {
			
			$xfer += $output->writeFieldBegin('freight');
			$xfer += $output->writeDouble($this->freight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->weight !== null) {
			
			$xfer += $output->writeFieldBegin('weight');
			$xfer += $output->writeDouble($this->weight);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->volume !== null) {
			
			$xfer += $output->writeFieldBegin('volume');
			$xfer += $output->writeDouble($this->volume);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>