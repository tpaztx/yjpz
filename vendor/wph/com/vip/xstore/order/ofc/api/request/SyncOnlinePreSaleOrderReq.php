<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class SyncOnlinePreSaleOrderReq {
	
	static $_TSPEC;
	public $infOnlineInPreSale = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOnlineInPreSale'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOnlineInPreSale'])){
				
				$this->infOnlineInPreSale = $vals['infOnlineInPreSale'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncOnlinePreSaleOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOnlineInPreSale" == $schemeField){
				
				$needSkip = false;
				
				$this->infOnlineInPreSale = new \com\vip\xstore\order\common\pojo\vo\InfOnlineInPreSaleVO();
				$this->infOnlineInPreSale->read($input);
				
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
		
		if($this->infOnlineInPreSale !== null) {
			
			$xfer += $output->writeFieldBegin('infOnlineInPreSale');
			
			if (!is_object($this->infOnlineInPreSale)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOnlineInPreSale->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>