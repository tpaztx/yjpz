<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class UpdateInfOnlineInPreSaleReq {
	
	static $_TSPEC;
	public $infOnlineInPreSaleVO = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOnlineInPreSaleVO'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOnlineInPreSaleVO'])){
				
				$this->infOnlineInPreSaleVO = $vals['infOnlineInPreSaleVO'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'UpdateInfOnlineInPreSaleReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOnlineInPreSaleVO" == $schemeField){
				
				$needSkip = false;
				
				$this->infOnlineInPreSaleVO = new \com\vip\xstore\order\common\pojo\vo\InfOnlineInPreSaleVO();
				$this->infOnlineInPreSaleVO->read($input);
				
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
		
		if($this->infOnlineInPreSaleVO !== null) {
			
			$xfer += $output->writeFieldBegin('infOnlineInPreSaleVO');
			
			if (!is_object($this->infOnlineInPreSaleVO)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOnlineInPreSaleVO->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>