<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class DecryptCouponCodeResponse {
	
	static $_TSPEC;
	public $owner_id = null;
	public $coupon_id = null;
	public $coupon_ecode = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'owner_id'
			),
			2 => array(
			'var' => 'coupon_id'
			),
			3 => array(
			'var' => 'coupon_ecode'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['owner_id'])){
				
				$this->owner_id = $vals['owner_id'];
			}
			
			
			if (isset($vals['coupon_id'])){
				
				$this->coupon_id = $vals['coupon_id'];
			}
			
			
			if (isset($vals['coupon_ecode'])){
				
				$this->coupon_ecode = $vals['coupon_ecode'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DecryptCouponCodeResponse';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("owner_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->owner_id);
				
			}
			
			
			
			
			if ("coupon_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_id);
				
			}
			
			
			
			
			if ("coupon_ecode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_ecode);
				
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
		
		if($this->owner_id !== null) {
			
			$xfer += $output->writeFieldBegin('owner_id');
			$xfer += $output->writeString($this->owner_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_id !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_id');
			$xfer += $output->writeString($this->coupon_id);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->coupon_ecode !== null) {
			
			$xfer += $output->writeFieldBegin('coupon_ecode');
			$xfer += $output->writeString($this->coupon_ecode);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>