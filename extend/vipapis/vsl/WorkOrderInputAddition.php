<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\vsl;

class WorkOrderInputAddition {
	
	static $_TSPEC;
	public $wt_id = null;
	public $value = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'wt_id'
			),
			2 => array(
			'var' => 'value'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['wt_id'])){
				
				$this->wt_id = $vals['wt_id'];
			}
			
			
			if (isset($vals['value'])){
				
				$this->value = $vals['value'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WorkOrderInputAddition';
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
			
			
			
			
			if ("value" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->value);
				
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
		
		
		if($this->value !== null) {
			
			$xfer += $output->writeFieldBegin('value');
			$xfer += $output->writeString($this->value);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>