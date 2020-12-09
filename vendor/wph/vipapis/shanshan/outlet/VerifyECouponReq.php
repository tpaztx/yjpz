<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class VerifyECouponReq {
	
	static $_TSPEC;
	public $user_id = null;
	public $mall_code = null;
	public $offline_store_id = null;
	public $e_code = null;
	public $trade_id = null;
	public $amount = null;
	public $remark = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'user_id'
			),
			2 => array(
			'var' => 'mall_code'
			),
			3 => array(
			'var' => 'offline_store_id'
			),
			4 => array(
			'var' => 'e_code'
			),
			5 => array(
			'var' => 'trade_id'
			),
			6 => array(
			'var' => 'amount'
			),
			7 => array(
			'var' => 'remark'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['user_id'])){
				
				$this->user_id = $vals['user_id'];
			}
			
			
			if (isset($vals['mall_code'])){
				
				$this->mall_code = $vals['mall_code'];
			}
			
			
			if (isset($vals['offline_store_id'])){
				
				$this->offline_store_id = $vals['offline_store_id'];
			}
			
			
			if (isset($vals['e_code'])){
				
				$this->e_code = $vals['e_code'];
			}
			
			
			if (isset($vals['trade_id'])){
				
				$this->trade_id = $vals['trade_id'];
			}
			
			
			if (isset($vals['amount'])){
				
				$this->amount = $vals['amount'];
			}
			
			
			if (isset($vals['remark'])){
				
				$this->remark = $vals['remark'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'VerifyECouponReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("user_id" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->user_id); 
				
			}
			
			
			
			
			if ("mall_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->mall_code);
				
			}
			
			
			
			
			if ("offline_store_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->offline_store_id);
				
			}
			
			
			
			
			if ("e_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->e_code);
				
			}
			
			
			
			
			if ("trade_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->trade_id);
				
			}
			
			
			
			
			if ("amount" == $schemeField){
				
				$needSkip = false;
				$input->readDouble($this->amount);
				
			}
			
			
			
			
			if ("remark" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->remark);
				
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
		
		$xfer += $output->writeFieldBegin('user_id');
		$xfer += $output->writeI64($this->user_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('mall_code');
		$xfer += $output->writeString($this->mall_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('offline_store_id');
		$xfer += $output->writeString($this->offline_store_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('e_code');
		$xfer += $output->writeString($this->e_code);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->trade_id !== null) {
			
			$xfer += $output->writeFieldBegin('trade_id');
			$xfer += $output->writeString($this->trade_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('amount');
		$xfer += $output->writeDouble($this->amount);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->remark !== null) {
			
			$xfer += $output->writeFieldBegin('remark');
			$xfer += $output->writeString($this->remark);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>