<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\wpc\ospservice\vop;

class WpcVopGoodsStatusResultVO {
	
	static $_TSPEC;
	public $map = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			12001 => array(
			'var' => 'map'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['map'])){
				
				$this->map = $vals['map'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'WpcVopGoodsStatusResultVO';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("map" == $schemeField){
				
				$needSkip = false;
				
				$this->map = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = 0;
						$input->readI64($key0); 
						
						$val0 = null;
						
						$val0 = array();
						$_size1 = 0;
						$input->readListBegin();
						while(true){
							
							try{
								
								$elem1 = null;
								
								$elem1 = new \com\vip\wpc\ospservice\channel\vo\WpcChannelSizeStatusVO();
								$elem1->read($input);
								
								$val0[$_size1++] = $elem1;
							}
							catch(\Exception $e){
								
								break;
							}
						}
						
						$input->readListEnd();
						
						$this->map[$key0] = $val0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
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
		
		if($this->map !== null) {
			
			$xfer += $output->writeFieldBegin('map');
			
			if (!is_array($this->map)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->map as $kiter0 => $viter0){
				
				$xfer += $output->writeI64($kiter0);
				
				
				if (!is_array($viter0)){
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$output->writeListBegin();
				foreach ($viter0 as $iter1){
					
					
					if (!is_object($iter1)) {
						
						throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
					}
					
					$xfer += $iter1->write($output);
					
				}
				
				$output->writeListEnd();
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>