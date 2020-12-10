<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\cc\bulkbuying\service;

class BatchUpdatePurchaseOrderRefundTime {
	
	static $_TSPEC;
	public $purchaseNos = null;
	public $refundTime = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'purchaseNos'
			),
			2 => array(
			'var' => 'refundTime'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['purchaseNos'])){
				
				$this->purchaseNos = $vals['purchaseNos'];
			}
			
			
			if (isset($vals['refundTime'])){
				
				$this->refundTime = $vals['refundTime'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BatchUpdatePurchaseOrderRefundTime';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("purchaseNos" == $schemeField){
				
				$needSkip = false;
				
				$this->purchaseNos = array();
				$_size0 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->purchaseNos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("refundTime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->refundTime);
				
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
		
		$xfer += $output->writeFieldBegin('purchaseNos');
		
		if (!is_array($this->purchaseNos)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->purchaseNos as $iter0){
			
			$xfer += $output->writeString($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('refundTime');
		$xfer += $output->writeI64($this->refundTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>