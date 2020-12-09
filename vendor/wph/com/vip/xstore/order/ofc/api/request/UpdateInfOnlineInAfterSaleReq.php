<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateInfOnlineInAfterSaleReq {
	
	static $_TSPEC;
	public $infOnlineInAfterSaleVO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOnlineInAfterSaleVO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOnlineInAfterSaleVO'])){
				
				$this->infOnlineInAfterSaleVO = $vals['infOnlineInAfterSaleVO'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateInfOnlineInAfterSaleReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOnlineInAfterSaleVO" == $schemeField){
				
				$needSkip = false;
				
				$this->infOnlineInAfterSaleVO = new \com\vip\xstore\order\common\pojo\vo\InfOnlineInAfterSaleVO();
				$this->infOnlineInAfterSaleVO->read($input);
				
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
		
		if($this->infOnlineInAfterSaleVO !== null) {
			
			$xfer += $output->writeFieldBegin('infOnlineInAfterSaleVO');
			
			if (!is_object($this->infOnlineInAfterSaleVO)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOnlineInAfterSaleVO->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>