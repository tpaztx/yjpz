<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\order\ofc\api\request;

class GetInfErpOrderCountReq {
	
	static $_TSPEC;
	public $docNos = null;
	public $createTimeRange = null;
	public $procStatusSet = null;
	public $companyCodes = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'docNos'
			),
			2 => array(
			'var' => 'createTimeRange'
			),
			3 => array(
			'var' => 'procStatusSet'
			),
			4 => array(
			'var' => 'companyCodes'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['docNos'])){
				
				$this->docNos = $vals['docNos'];
			}
			
			
			if (isset($vals['createTimeRange'])){
				
				$this->createTimeRange = $vals['createTimeRange'];
			}
			
			
			if (isset($vals['procStatusSet'])){
				
				$this->procStatusSet = $vals['procStatusSet'];
			}
			
			
			if (isset($vals['companyCodes'])){
				
				$this->companyCodes = $vals['companyCodes'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetInfErpOrderCountReq';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("docNos" == $schemeField){
				
				$needSkip = false;
				
				$this->docNos = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->docNos[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("createTimeRange" == $schemeField){
				
				$needSkip = false;
				
				$this->createTimeRange = new \com\vip\xstore\order\common\pojo\vo\RangeParam();
				$this->createTimeRange->read($input);
				
			}
			
			
			
			
			if ("procStatusSet" == $schemeField){
				
				$needSkip = false;
				
				$this->procStatusSet = array();
				$_size1 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						$input->readI32($elem1); 
						
						$this->procStatusSet[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("companyCodes" == $schemeField){
				
				$needSkip = false;
				
				$this->companyCodes = array();
				$_size2 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						$input->readString($elem2);
						
						$this->companyCodes[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
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
		
		if($this->docNos !== null) {
			
			$xfer += $output->writeFieldBegin('docNos');
			
			if (!is_array($this->docNos)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->docNos as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->createTimeRange !== null) {
			
			$xfer += $output->writeFieldBegin('createTimeRange');
			
			if (!is_object($this->createTimeRange)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->createTimeRange->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->procStatusSet !== null) {
			
			$xfer += $output->writeFieldBegin('procStatusSet');
			
			if (!is_array($this->procStatusSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->procStatusSet as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->companyCodes !== null) {
			
			$xfer += $output->writeFieldBegin('companyCodes');
			
			if (!is_array($this->companyCodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->companyCodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>