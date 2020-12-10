<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class ConvertInfErpOrderReq {
	
	static $_TSPEC;
	public $infErpOrderInfo = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infErpOrderInfo'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infErpOrderInfo'])){
				
				$this->infErpOrderInfo = $vals['infErpOrderInfo'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'ConvertInfErpOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infErpOrderInfo" == $schemeField){
				
				$needSkip = false;
				
				$this->infErpOrderInfo = new \com\vip\xstore\order\common\pojo\vo\InfErpOrderInfoVO();
				$this->infErpOrderInfo->read($input);
				
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
		
		if($this->infErpOrderInfo !== null) {
			
			$xfer += $output->writeFieldBegin('infErpOrderInfo');
			
			if (!is_object($this->infErpOrderInfo)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infErpOrderInfo->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>