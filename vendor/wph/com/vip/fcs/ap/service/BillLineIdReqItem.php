<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\fcs\ap\service;

class BillLineIdReqItem {
	
	static $_TSPEC;
	public $pager = null;
	public $vendorCode = null;
	public $billNumber = null;
	public $lineType = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'pager'
			),
			2 => array(
			'var' => 'vendorCode'
			),
			3 => array(
			'var' => 'billNumber'
			),
			4 => array(
			'var' => 'lineType'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['pager'])){
				
				$this->pager = $vals['pager'];
			}
			
			
			if (isset($vals['vendorCode'])){
				
				$this->vendorCode = $vals['vendorCode'];
			}
			
			
			if (isset($vals['billNumber'])){
				
				$this->billNumber = $vals['billNumber'];
			}
			
			
			if (isset($vals['lineType'])){
				
				$this->lineType = $vals['lineType'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BillLineIdReqItem';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("pager" == $schemeField){
				
				$needSkip = false;
				
				$this->pager = new \com\vip\fcs\ap\service\Pager();
				$this->pager->read($input);
				
			}
			
			
			
			
			if ("vendorCode" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->vendorCode);
				
			}
			
			
			
			
			if ("billNumber" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->billNumber);
				
			}
			
			
			
			
			if ("lineType" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->lineType);
				
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
		
		if($this->pager !== null) {
			
			$xfer += $output->writeFieldBegin('pager');
			
			if (!is_object($this->pager)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->pager->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('vendorCode');
		$xfer += $output->writeString($this->vendorCode);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('billNumber');
		$xfer += $output->writeString($this->billNumber);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('lineType');
		$xfer += $output->writeString($this->lineType);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>