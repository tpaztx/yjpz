<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class SyncOnlineAfterSaleOrderReq {
	
	static $_TSPEC;
	public $infOnlineInAfterSale = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'infOnlineInAfterSale'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['infOnlineInAfterSale'])){
				
				$this->infOnlineInAfterSale = $vals['infOnlineInAfterSale'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'SyncOnlineAfterSaleOrderReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("infOnlineInAfterSale" == $schemeField){
				
				$needSkip = false;
				
				$this->infOnlineInAfterSale = new \com\vip\xstore\order\common\pojo\vo\InfOnlineInAfterSaleVO();
				$this->infOnlineInAfterSale->read($input);
				
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
		
		if($this->infOnlineInAfterSale !== null) {
			
			$xfer += $output->writeFieldBegin('infOnlineInAfterSale');
			
			if (!is_object($this->infOnlineInAfterSale)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->infOnlineInAfterSale->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>