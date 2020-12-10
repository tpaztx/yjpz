<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace vipapis\shanshan\outlet;

class DecryptCouponCodeRequest {
	
	static $_TSPEC;
	public $coupon_code = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'coupon_code'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['coupon_code'])){
				
				$this->coupon_code = $vals['coupon_code'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'DecryptCouponCodeRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("coupon_code" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->coupon_code);
				
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
		
		$xfer += $output->writeFieldBegin('coupon_code');
		$xfer += $output->writeString($this->coupon_code);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>