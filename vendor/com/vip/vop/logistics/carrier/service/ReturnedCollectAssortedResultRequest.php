<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\logistics\carrier\service;

class ReturnedCollectAssortedResultRequest {
	
	static $_TSPEC;
	public $batch_no = null;
	public $carrier_code = null;
	public $cage_sn = null;
	public $cage_name = null;
	public $return_warehouse_code = null;
	public $cage_time = null;
	public $cage_package_list = null;
	
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
			'var' => 'cage_sn'
			),
			4 => array(
			'var' => 'cage_name'
			),
			5 => array(
			'var' => 'return_warehouse_code'
			),
			6 => array(
			'var' => 'cage_time'
			),
			7 => array(
			'var' => 'cage_package_list'
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
			
			
			if (isset($vals['cage_sn'])){
				
				$this->cage_sn = $vals['cage_sn'];
			}
			
			
			if (isset($vals['cage_name'])){
				
				$this->cage_name = $vals['cage_name'];
			}
			
			
			if (isset($vals['return_warehouse_code'])){
				
				$this->return_warehouse_code = $vals['return_warehouse_code'];
			}
			
			
			if (isset($vals['cage_time'])){
				
				$this->cage_time = $vals['cage_time'];
			}
			
			
			if (isset($vals['cage_package_list'])){
				
				$this->cage_package_list = $vals['cage_package_list'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ReturnedCollectAssortedResultRequest';
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
			
			
			
			
			if ("cage_sn" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cage_sn);
				
			}
			
			
			
			
			if ("cage_name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cage_name);
				
			}
			
			
			
			
			if ("return_warehouse_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->return_warehouse_code);
				
			}
			
			
			
			
			if ("cage_time" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->cage_time);
				
			}
			
			
			
			
			if ("cage_package_list" == $schemeField){
				
				$needSkip = false;
				
				$this->cage_package_list = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						
						$elem0 = new \com\vip\vop\logistics\carrier\service\CagePackage();
						$elem0->read($input);
						
						$this->cage_package_list[$_size0++] = $elem0;
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
		
		$xfer += $output->writeFieldBegin('batch_no');
		$xfer += $output->writeString($this->batch_no);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('carrier_code');
		$xfer += $output->writeString($this->carrier_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cage_sn');
		$xfer += $output->writeString($this->cage_sn);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cage_name');
		$xfer += $output->writeString($this->cage_name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('return_warehouse_code');
		$xfer += $output->writeString($this->return_warehouse_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cage_time');
		$xfer += $output->writeString($this->cage_time);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('cage_package_list');
		
		if (!is_array($this->cage_package_list)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->cage_package_list as $iter0){
			
			
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