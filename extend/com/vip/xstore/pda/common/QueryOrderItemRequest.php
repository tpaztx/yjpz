<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\xstore\pda\common;

class QueryOrderItemRequest {
	
	static $_TSPEC;
	public $source = null;
	public $client_id = null;
	public $pda_version = null;
	public $transferring_no = null;
	public $barcodes = null;
	public $page = null;
	public $page_size = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			51 => array(
			'var' => 'source'
			),
			52 => array(
			'var' => 'client_id'
			),
			53 => array(
			'var' => 'pda_version'
			),
			20 => array(
			'var' => 'transferring_no'
			),
			21 => array(
			'var' => 'barcodes'
			),
			22 => array(
			'var' => 'page'
			),
			23 => array(
			'var' => 'page_size'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['source'])){
				
				$this->source = $vals['source'];
			}
			
			
			if (isset($vals['client_id'])){
				
				$this->client_id = $vals['client_id'];
			}
			
			
			if (isset($vals['pda_version'])){
				
				$this->pda_version = $vals['pda_version'];
			}
			
			
			if (isset($vals['transferring_no'])){
				
				$this->transferring_no = $vals['transferring_no'];
			}
			
			
			if (isset($vals['barcodes'])){
				
				$this->barcodes = $vals['barcodes'];
			}
			
			
			if (isset($vals['page'])){
				
				$this->page = $vals['page'];
			}
			
			
			if (isset($vals['page_size'])){
				
				$this->page_size = $vals['page_size'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'QueryOrderItemRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("source" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->source);
				
			}
			
			
			
			
			if ("client_id" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->client_id);
				
			}
			
			
			
			
			if ("pda_version" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->pda_version);
				
			}
			
			
			
			
			if ("transferring_no" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->transferring_no);
				
			}
			
			
			
			
			if ("barcodes" == $schemeField){
				
				$needSkip = false;
				
				$this->barcodes = array();
				$_size0 = 0;
				$input->readSetBegin();
				while(true){
					
					try{
						
						$elem0 = null;
						$input->readString($elem0);
						
						$this->barcodes[$_size0++] = $elem0;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readSetEnd();
				
			}
			
			
			
			
			if ("page" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page); 
				
			}
			
			
			
			
			if ("page_size" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->page_size); 
				
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
		
		$xfer += $output->writeFieldBegin('source');
		$xfer += $output->writeString($this->source);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('client_id');
		$xfer += $output->writeString($this->client_id);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->pda_version !== null) {
			
			$xfer += $output->writeFieldBegin('pda_version');
			$xfer += $output->writeString($this->pda_version);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('transferring_no');
		$xfer += $output->writeString($this->transferring_no);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->barcodes !== null) {
			
			$xfer += $output->writeFieldBegin('barcodes');
			
			if (!is_array($this->barcodes)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->barcodes as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('page');
		$xfer += $output->writeI32($this->page);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('page_size');
		$xfer += $output->writeI32($this->page_size);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>