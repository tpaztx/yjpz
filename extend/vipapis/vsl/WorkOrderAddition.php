<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderAddition {
	
	static $_TSPEC;
	public $wt_id = null;
	public $name = null;
	public $value = null;
	public $input_json = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wt_id'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'value'
			),
			4 => array(
			'var' => 'input_json'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wt_id'])){
				
				$this->wt_id = $vals['wt_id'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['value'])){
				
				$this->value = $vals['value'];
			}
			
			
			if (isset($vals['input_json'])){
				
				$this->input_json = $vals['input_json'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderAddition';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("wt_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->wt_id); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value);
				
			}
			
			
			
			
			if ("input_json" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->input_json);
				
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
		
		if($this->wt_id !== null) {
			
			$xfer += $output->writeFieldBegin('wt_id');
			$xfer += $output->writeI64($this->wt_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->name !== null) {
			
			$xfer += $output->writeFieldBegin('name');
			$xfer += $output->writeString($this->name);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->value !== null) {
			
			$xfer += $output->writeFieldBegin('value');
			$xfer += $output->writeString($this->value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->input_json !== null) {
			
			$xfer += $output->writeFieldBegin('input_json');
			$xfer += $output->writeString($this->input_json);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>