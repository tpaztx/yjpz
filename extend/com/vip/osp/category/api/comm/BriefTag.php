<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class BriefTag {
	
	static $_TSPEC;
	public $tagId = null;
	public $name = null;
	public $tagType = null;
	public $starttime = null;
	public $endtime = null;
	public $sort = null;
	public $imagesMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagId'
			),
			2 => array(
			'var' => 'name'
			),
			3 => array(
			'var' => 'tagType'
			),
			4 => array(
			'var' => 'starttime'
			),
			5 => array(
			'var' => 'endtime'
			),
			6 => array(
			'var' => 'sort'
			),
			7 => array(
			'var' => 'imagesMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagId'])){
				
				$this->tagId = $vals['tagId'];
			}
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['starttime'])){
				
				$this->starttime = $vals['starttime'];
			}
			
			
			if (isset($vals['endtime'])){
				
				$this->endtime = $vals['endtime'];
			}
			
			
			if (isset($vals['sort'])){
				
				$this->sort = $vals['sort'];
			}
			
			
			if (isset($vals['imagesMap'])){
				
				$this->imagesMap = $vals['imagesMap'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'BriefTag';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("tagId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->tagId); 
				
			}
			
			
			
			
			if ("name" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->name);
				
			}
			
			
			
			
			if ("tagType" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\osp\category\api\comm\TagType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->tagType = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("starttime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->starttime); 
				
			}
			
			
			
			
			if ("endtime" == $schemeField){
				
				$needSkip = false;
				$input->readI64($this->endtime); 
				
			}
			
			
			
			
			if ("sort" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->sort); 
				
			}
			
			
			
			
			if ("imagesMap" == $schemeField){
				
				$needSkip = false;
				
				$this->imagesMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key0 = '';
						$input->readString($key0);
						
						$val0 = '';
						$input->readString($val0);
						
						$this->imagesMap[$key0] = $val0;
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
		
		$xfer += $output->writeFieldBegin('tagId');
		$xfer += $output->writeI32($this->tagId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->tagType !== null) {
			
			$xfer += $output->writeFieldBegin('tagType');
			
			$em = new \com\vip\osp\category\api\comm\TagType; 
			$output->writeString($em::$__names[$this->tagType]);  
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldBegin('starttime');
		$xfer += $output->writeI64($this->starttime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('endtime');
		$xfer += $output->writeI64($this->endtime);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->sort !== null) {
			
			$xfer += $output->writeFieldBegin('sort');
			$xfer += $output->writeI32($this->sort);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->imagesMap !== null) {
			
			$xfer += $output->writeFieldBegin('imagesMap');
			
			if (!is_array($this->imagesMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->imagesMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
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