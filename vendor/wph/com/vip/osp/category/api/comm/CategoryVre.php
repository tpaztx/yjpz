<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;

class CategoryVre {
	
	static $_TSPEC;
	public $categoryId = null;
	public $type = null;
	public $children = null;
	public $mapping = null;
	public $brandList = null;
	public $specialAttrMap = null;
	public $tagFilter = null;
	public $attributeIds = null;
	public $tagIds = null;
	public $bigDataTagIds = null;
	public $ptpTagFilter = null;
	public $ptpTagInfoList = null;
	public $status = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'type'
			),
			3 => array(
			'var' => 'children'
			),
			4 => array(
			'var' => 'mapping'
			),
			5 => array(
			'var' => 'brandList'
			),
			6 => array(
			'var' => 'specialAttrMap'
			),
			7 => array(
			'var' => 'tagFilter'
			),
			8 => array(
			'var' => 'attributeIds'
			),
			9 => array(
			'var' => 'tagIds'
			),
			10 => array(
			'var' => 'bigDataTagIds'
			),
			11 => array(
			'var' => 'ptpTagFilter'
			),
			12 => array(
			'var' => 'ptpTagInfoList'
			),
			13 => array(
			'var' => 'status'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['type'])){
				
				$this->type = $vals['type'];
			}
			
			
			if (isset($vals['children'])){
				
				$this->children = $vals['children'];
			}
			
			
			if (isset($vals['mapping'])){
				
				$this->mapping = $vals['mapping'];
			}
			
			
			if (isset($vals['brandList'])){
				
				$this->brandList = $vals['brandList'];
			}
			
			
			if (isset($vals['specialAttrMap'])){
				
				$this->specialAttrMap = $vals['specialAttrMap'];
			}
			
			
			if (isset($vals['tagFilter'])){
				
				$this->tagFilter = $vals['tagFilter'];
			}
			
			
			if (isset($vals['attributeIds'])){
				
				$this->attributeIds = $vals['attributeIds'];
			}
			
			
			if (isset($vals['tagIds'])){
				
				$this->tagIds = $vals['tagIds'];
			}
			
			
			if (isset($vals['bigDataTagIds'])){
				
				$this->bigDataTagIds = $vals['bigDataTagIds'];
			}
			
			
			if (isset($vals['ptpTagFilter'])){
				
				$this->ptpTagFilter = $vals['ptpTagFilter'];
			}
			
			
			if (isset($vals['ptpTagInfoList'])){
				
				$this->ptpTagInfoList = $vals['ptpTagInfoList'];
			}
			
			
			if (isset($vals['status'])){
				
				$this->status = $vals['status'];
			}
			
			
		}
		
	}
	
	
	public function getName(){
		
		return 'CategoryVre';
	}
	
	public function read($input){
		
		$input->readStructBegin();
		while(true){
			
			$schemeField = $input->readFieldBegin();
			if ($schemeField == null) break;
			$needSkip = true;
			
			
			if ("categoryId" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->categoryId); 
				
			}
			
			
			
			
			if ("type" == $schemeField){
				
				$needSkip = false;
				
				$names = \com\vip\osp\category\api\comm\CategoryType::$__names;
				$name = null;
				$input->readString($name);
				foreach ($names as $k => $v){
					
					if($name == $v){
						
						$this->type = $k;
						break;
					}
					
				}
				
				
			}
			
			
			
			
			if ("children" == $schemeField){
				
				$needSkip = false;
				
				$this->children = array();
				$_size1 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem1 = null;
						
						$elem1 = new \com\vip\osp\category\api\comm\CategoryVre();
						$elem1->read($input);
						
						$this->children[$_size1++] = $elem1;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("mapping" == $schemeField){
				
				$needSkip = false;
				
				$this->mapping = array();
				$_size2 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem2 = null;
						
						$elem2 = new \com\vip\osp\category\api\comm\BriefCategoryMapping();
						$elem2->read($input);
						
						$this->mapping[$_size2++] = $elem2;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("brandList" == $schemeField){
				
				$needSkip = false;
				
				$this->brandList = array();
				$_size3 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem3 = null;
						$input->readString($elem3);
						
						$this->brandList[$_size3++] = $elem3;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("specialAttrMap" == $schemeField){
				
				$needSkip = false;
				
				$this->specialAttrMap = array();
				$input->readMapBegin();
				while(true){
					
					try{
						
						$key4 = '';
						$input->readString($key4);
						
						$val4 = '';
						$input->readString($val4);
						
						$this->specialAttrMap[$key4] = $val4;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readMapEnd();
				
			}
			
			
			
			
			if ("tagFilter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->tagFilter);
				
			}
			
			
			
			
			if ("attributeIds" == $schemeField){
				
				$needSkip = false;
				
				$this->attributeIds = array();
				$_size5 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem5 = null;
						$input->readI32($elem5); 
						
						$this->attributeIds[$_size5++] = $elem5;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("tagIds" == $schemeField){
				
				$needSkip = false;
				
				$this->tagIds = array();
				$_size6 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem6 = null;
						$input->readI32($elem6); 
						
						$this->tagIds[$_size6++] = $elem6;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("bigDataTagIds" == $schemeField){
				
				$needSkip = false;
				
				$this->bigDataTagIds = array();
				$_size7 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem7 = null;
						$input->readI32($elem7); 
						
						$this->bigDataTagIds[$_size7++] = $elem7;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("ptpTagFilter" == $schemeField){
				
				$needSkip = false;
				$input->readString($this->ptpTagFilter);
				
			}
			
			
			
			
			if ("ptpTagInfoList" == $schemeField){
				
				$needSkip = false;
				
				$this->ptpTagInfoList = array();
				$_size8 = 0;
				$input->readListBegin();
				while(true){
					
					try{
						
						$elem8 = null;
						
						$elem8 = new \com\vip\osp\category\api\comm\PtpTagInfo();
						$elem8->read($input);
						
						$this->ptpTagInfoList[$_size8++] = $elem8;
					}
					catch(\Exception $e){
						
						break;
					}
				}
				
				$input->readListEnd();
				
			}
			
			
			
			
			if ("status" == $schemeField){
				
				$needSkip = false;
				$input->readI32($this->status); 
				
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
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('type');
		
		$em = new \com\vip\osp\category\api\comm\CategoryType; 
		$output->writeString($em::$__names[$this->type]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->children !== null) {
			
			$xfer += $output->writeFieldBegin('children');
			
			if (!is_array($this->children)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->children as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->mapping !== null) {
			
			$xfer += $output->writeFieldBegin('mapping');
			
			if (!is_array($this->mapping)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->mapping as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandList !== null) {
			
			$xfer += $output->writeFieldBegin('brandList');
			
			if (!is_array($this->brandList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->brandList as $iter0){
				
				$xfer += $output->writeString($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->specialAttrMap !== null) {
			
			$xfer += $output->writeFieldBegin('specialAttrMap');
			
			if (!is_array($this->specialAttrMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->specialAttrMap as $kiter0 => $viter0){
				
				$xfer += $output->writeString($kiter0);
				
				$xfer += $output->writeString($viter0);
				
			}
			
			$output->writeMapEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagFilter !== null) {
			
			$xfer += $output->writeFieldBegin('tagFilter');
			$xfer += $output->writeString($this->tagFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->attributeIds !== null) {
			
			$xfer += $output->writeFieldBegin('attributeIds');
			
			if (!is_array($this->attributeIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attributeIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->tagIds !== null) {
			
			$xfer += $output->writeFieldBegin('tagIds');
			
			if (!is_array($this->tagIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->tagIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->bigDataTagIds !== null) {
			
			$xfer += $output->writeFieldBegin('bigDataTagIds');
			
			if (!is_array($this->bigDataTagIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->bigDataTagIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ptpTagFilter !== null) {
			
			$xfer += $output->writeFieldBegin('ptpTagFilter');
			$xfer += $output->writeString($this->ptpTagFilter);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->ptpTagInfoList !== null) {
			
			$xfer += $output->writeFieldBegin('ptpTagInfoList');
			
			if (!is_array($this->ptpTagInfoList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->ptpTagInfoList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->status !== null) {
			
			$xfer += $output->writeFieldBegin('status');
			$xfer += $output->writeI32($this->status);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}

?>