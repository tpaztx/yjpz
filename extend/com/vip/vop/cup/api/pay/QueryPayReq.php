<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\vop\cup\api\pay;

class QueryPayReq {
	
	static $_TSPEC;
	public $pre_pay_id = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pre_pay_id'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pre_pay_id'])){
				
				$this->pre_pay_id = $vals['pre_pay_id'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryPayReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pre_pay_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pre_pay_id);
				
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
		
		$xfer += $output->writeFieldBegin('pre_pay_id');
		$xfer += $output->writeString($this->pre_pay_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>