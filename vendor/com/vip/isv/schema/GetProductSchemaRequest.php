<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\isv\schema;

class GetProductSchemaRequest {
	
	static $_TSPEC;
	public $vendor_id = null;
	public $category_id = null;
	public $schema_type = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'vendor_id'
			),
			2 => array(
			'var' => 'category_id'
			),
			3 => array(
			'var' => 'schema_type'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['vendor_id'])){
				
				$this->vendor_id = $vals['vendor_id'];
			}
			
			
			if (isset($vals['category_id'])){
				
				$this->category_id = $vals['category_id'];
			}
			
			
			if (isset($vals['schema_type'])){
				
				$this->schema_type = $vals['schema_type'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'GetProductSchemaRequest';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("vendor_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->vendor_id); 
				
			}
			
			
			
			
			if ("category_id" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->category_id); 
				
			}
			
			
			
			
			if ("schema_type" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->schema_type);
				
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
		
		$xfer += $output->writeFieldBegin('vendor_id');
		$xfer += $output->writeI32($this->vendor_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('category_id');
		$xfer += $output->writeI32($this->category_id);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('schema_type');
		$xfer += $output->writeString($this->schema_type);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>