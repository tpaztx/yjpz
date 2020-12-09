<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class FailOrder {
	
	static $_TSPEC;
	public $trade_id = null;
	public $msg = null;
	public $fail_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'trade_id'
			),
			2 => array(
			'var' => 'msg'
			),
			3 => array(
			'var' => 'fail_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['msg'])){
				
				$this->msg = $vals['msg'];
			}
			
			
			if (isset($vals['fail_code'])){
				
				$this->fail_code = $vals['fail_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'FailOrder';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("msg" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->msg);
				
			}
			
			
			
			
			if ("fail_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->fail_code);
				
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
		
		if($this->trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('trade_id');
			$xfer += $output->writeString($this->trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->msg !== null) {
			
			$xfer += $output->writeFieldBegin('msg');
			$xfer += $output->writeString($this->msg);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->fail_code !== null) {
			
			$xfer += $output->writeFieldBegin('fail_code');
			$xfer += $output->writeString($this->fail_code);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>