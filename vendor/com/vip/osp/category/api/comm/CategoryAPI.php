<?php


/*
* Copyright (c) 2008-2016 vip.com, All Rights Reserved.
*
* Powered by com.vip.osp.osp-idlc-2.5.11.
*
*/

namespace com\vip\osp\category\api\comm;
interface CategoryAPIIf{
	
	
	public function batchGetCategoryIdMapping(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds);
	
	public function batchGetCategoryIdMappingByNewCateIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds);
	
	public function batchGetCategoryVersionByIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds);
	
	public function getAttributeByTag( $tagType, $isIncludeOption);
	
	public function getBriefCategoryAttributesByIds( $categoryIds, $isIncludeOption);
	
	public function getBriefCategoryTree( $categoryId, $isIncludeChildren, $resultFields);
	
	public function getCategories( $categoryids);
	
	public function getCategoriesAndChildrenAttributes( $categoryids, $isVendorProductAttribute, $isIncludeOption);
	
	public function getCategory( $categoryId);
	
	public function getCategoryAttributeIdsByIds( $categoryIds);
	
	public function getCategoryAttributes( $categoryId);
	
	public function getCategoryByName( $name, $limit);
	
	public function getCategoryIdAndNameList( $categoryids);
	
	public function getCategoryPath( $categoryId);
	
	public function getCategoryQuestionAnswer(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId);
	
	public function getCategorySpecialAttributeList( $categorySpecialParams);
	
	public function getCategorySpecialAttributes( $categoryId, $attributeId, $brandId);
	
	public function getCategoryTree( $categoryId);
	
	public function getExchangedReasonByCategoryId( $categoryId, $reasonType, $isShow, $appId, $flagsMap);
	
	public function getExchangedReasonListByCategoryIds( $categoryIdSet, $reasonType, $isShow, $appId, $flagsMap);
	
	public function getExchangedReasonListByIds( $reasonIdSet, $appId);
	
	public function getHierachyFilterAttributes( $categoryId);
	
	public function getHierarchyCategoryTree( $hierarchyId, $isIncludeChildren);
	
	public function getHierarchyCategoryTreeForVre( $hierarchyId);
	
	public function getHierarchyCategroyidsByCategoryIds( $hierarchyId, $categoryIds);
	
	public function getHierarchyIdsForVre();
	
	public function getHierarchyLeafCategoryIdAndNameList( $hierarchyId, $categoryIds);
	
	public function getHierarchyTopCategoryIdAndNameList( $hierarchyId, $categoryIds);
	
	public function getLeafCategoryByName( $name, $limit);
	
	public function getMultiCategories( $categoryids, $isIncludeChildren, $isIncludeAttribute);
	
	public function getPublishCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId, $option);
	
	public function getPublishHierarchyCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $option, $isIncludeChildren);
	
	public function getTagByIds( $tagIds);
	
	public function getTagInfoList( $tagSnList);
	
	public function getTagsByTagType( $tagType, $curPage, $pageSize);
	
	public function getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId);
	
	public function healthCheck();
	
	public function parseAttributes( $categoryId, $attrOptIdsList);
	
}

class _CategoryAPIClient extends \Osp\Base\OspStub implements \com\vip\osp\category\api\comm\CategoryAPIIf{
	
	public function __construct(){
		
		parent::__construct("com.vip.osp.category.api.comm.CategoryAPI", "1.0.0");
	}
	
	
	public function batchGetCategoryIdMapping(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->send_batchGetCategoryIdMapping( $reqContext, $categoryIds);
		return $this->recv_batchGetCategoryIdMapping();
	}
	
	public function send_batchGetCategoryIdMapping(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->initInvocation("batchGetCategoryIdMapping");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryIdMapping_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_batchGetCategoryIdMapping(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryIdMapping_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchGetCategoryIdMappingByNewCateIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->send_batchGetCategoryIdMappingByNewCateIds( $reqContext, $categoryIds);
		return $this->recv_batchGetCategoryIdMappingByNewCateIds();
	}
	
	public function send_batchGetCategoryIdMappingByNewCateIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->initInvocation("batchGetCategoryIdMappingByNewCateIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryIdMappingByNewCateIds_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_batchGetCategoryIdMappingByNewCateIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryIdMappingByNewCateIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function batchGetCategoryVersionByIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->send_batchGetCategoryVersionByIds( $reqContext, $categoryIds);
		return $this->recv_batchGetCategoryVersionByIds();
	}
	
	public function send_batchGetCategoryVersionByIds(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryIds){
		
		$this->initInvocation("batchGetCategoryVersionByIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryVersionByIds_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_batchGetCategoryVersionByIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_batchGetCategoryVersionByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getAttributeByTag( $tagType, $isIncludeOption){
		
		$this->send_getAttributeByTag( $tagType, $isIncludeOption);
		return $this->recv_getAttributeByTag();
	}
	
	public function send_getAttributeByTag( $tagType, $isIncludeOption){
		
		$this->initInvocation("getAttributeByTag");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getAttributeByTag_args();
		
		$args->tagType = $tagType;
		
		$args->isIncludeOption = $isIncludeOption;
		
		$this->send_base($args);
	}
	
	public function recv_getAttributeByTag(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getAttributeByTag_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBriefCategoryAttributesByIds( $categoryIds, $isIncludeOption){
		
		$this->send_getBriefCategoryAttributesByIds( $categoryIds, $isIncludeOption);
		return $this->recv_getBriefCategoryAttributesByIds();
	}
	
	public function send_getBriefCategoryAttributesByIds( $categoryIds, $isIncludeOption){
		
		$this->initInvocation("getBriefCategoryAttributesByIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getBriefCategoryAttributesByIds_args();
		
		$args->categoryIds = $categoryIds;
		
		$args->isIncludeOption = $isIncludeOption;
		
		$this->send_base($args);
	}
	
	public function recv_getBriefCategoryAttributesByIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getBriefCategoryAttributesByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getBriefCategoryTree( $categoryId, $isIncludeChildren, $resultFields){
		
		$this->send_getBriefCategoryTree( $categoryId, $isIncludeChildren, $resultFields);
		return $this->recv_getBriefCategoryTree();
	}
	
	public function send_getBriefCategoryTree( $categoryId, $isIncludeChildren, $resultFields){
		
		$this->initInvocation("getBriefCategoryTree");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getBriefCategoryTree_args();
		
		$args->categoryId = $categoryId;
		
		$args->isIncludeChildren = $isIncludeChildren;
		
		$args->resultFields = $resultFields;
		
		$this->send_base($args);
	}
	
	public function recv_getBriefCategoryTree(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getBriefCategoryTree_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategories( $categoryids){
		
		$this->send_getCategories( $categoryids);
		return $this->recv_getCategories();
	}
	
	public function send_getCategories( $categoryids){
		
		$this->initInvocation("getCategories");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategories_args();
		
		$args->categoryids = $categoryids;
		
		$this->send_base($args);
	}
	
	public function recv_getCategories(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoriesAndChildrenAttributes( $categoryids, $isVendorProductAttribute, $isIncludeOption){
		
		$this->send_getCategoriesAndChildrenAttributes( $categoryids, $isVendorProductAttribute, $isIncludeOption);
		return $this->recv_getCategoriesAndChildrenAttributes();
	}
	
	public function send_getCategoriesAndChildrenAttributes( $categoryids, $isVendorProductAttribute, $isIncludeOption){
		
		$this->initInvocation("getCategoriesAndChildrenAttributes");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoriesAndChildrenAttributes_args();
		
		$args->categoryids = $categoryids;
		
		$args->isVendorProductAttribute = $isVendorProductAttribute;
		
		$args->isIncludeOption = $isIncludeOption;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoriesAndChildrenAttributes(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoriesAndChildrenAttributes_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategory( $categoryId){
		
		$this->send_getCategory( $categoryId);
		return $this->recv_getCategory();
	}
	
	public function send_getCategory( $categoryId){
		
		$this->initInvocation("getCategory");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategory_args();
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategory(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategory_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryAttributeIdsByIds( $categoryIds){
		
		$this->send_getCategoryAttributeIdsByIds( $categoryIds);
		return $this->recv_getCategoryAttributeIdsByIds();
	}
	
	public function send_getCategoryAttributeIdsByIds( $categoryIds){
		
		$this->initInvocation("getCategoryAttributeIdsByIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryAttributeIdsByIds_args();
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryAttributeIdsByIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryAttributeIdsByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryAttributes( $categoryId){
		
		$this->send_getCategoryAttributes( $categoryId);
		return $this->recv_getCategoryAttributes();
	}
	
	public function send_getCategoryAttributes( $categoryId){
		
		$this->initInvocation("getCategoryAttributes");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryAttributes_args();
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryAttributes(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryAttributes_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryByName( $name, $limit){
		
		$this->send_getCategoryByName( $name, $limit);
		return $this->recv_getCategoryByName();
	}
	
	public function send_getCategoryByName( $name, $limit){
		
		$this->initInvocation("getCategoryByName");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryByName_args();
		
		$args->name = $name;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryByName(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryByName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryIdAndNameList( $categoryids){
		
		$this->send_getCategoryIdAndNameList( $categoryids);
		return $this->recv_getCategoryIdAndNameList();
	}
	
	public function send_getCategoryIdAndNameList( $categoryids){
		
		$this->initInvocation("getCategoryIdAndNameList");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryIdAndNameList_args();
		
		$args->categoryids = $categoryids;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryIdAndNameList(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryIdAndNameList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryPath( $categoryId){
		
		$this->send_getCategoryPath( $categoryId);
		return $this->recv_getCategoryPath();
	}
	
	public function send_getCategoryPath( $categoryId){
		
		$this->initInvocation("getCategoryPath");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryPath_args();
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryPath(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryPath_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryQuestionAnswer(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId){
		
		$this->send_getCategoryQuestionAnswer( $reqContext, $categoryId);
		return $this->recv_getCategoryQuestionAnswer();
	}
	
	public function send_getCategoryQuestionAnswer(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId){
		
		$this->initInvocation("getCategoryQuestionAnswer");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryQuestionAnswer_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryQuestionAnswer(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryQuestionAnswer_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategorySpecialAttributeList( $categorySpecialParams){
		
		$this->send_getCategorySpecialAttributeList( $categorySpecialParams);
		return $this->recv_getCategorySpecialAttributeList();
	}
	
	public function send_getCategorySpecialAttributeList( $categorySpecialParams){
		
		$this->initInvocation("getCategorySpecialAttributeList");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategorySpecialAttributeList_args();
		
		$args->categorySpecialParams = $categorySpecialParams;
		
		$this->send_base($args);
	}
	
	public function recv_getCategorySpecialAttributeList(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategorySpecialAttributeList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategorySpecialAttributes( $categoryId, $attributeId, $brandId){
		
		$this->send_getCategorySpecialAttributes( $categoryId, $attributeId, $brandId);
		return $this->recv_getCategorySpecialAttributes();
	}
	
	public function send_getCategorySpecialAttributes( $categoryId, $attributeId, $brandId){
		
		$this->initInvocation("getCategorySpecialAttributes");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategorySpecialAttributes_args();
		
		$args->categoryId = $categoryId;
		
		$args->attributeId = $attributeId;
		
		$args->brandId = $brandId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategorySpecialAttributes(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategorySpecialAttributes_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getCategoryTree( $categoryId){
		
		$this->send_getCategoryTree( $categoryId);
		return $this->recv_getCategoryTree();
	}
	
	public function send_getCategoryTree( $categoryId){
		
		$this->initInvocation("getCategoryTree");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryTree_args();
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getCategoryTree(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getCategoryTree_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExchangedReasonByCategoryId( $categoryId, $reasonType, $isShow, $appId, $flagsMap){
		
		$this->send_getExchangedReasonByCategoryId( $categoryId, $reasonType, $isShow, $appId, $flagsMap);
		return $this->recv_getExchangedReasonByCategoryId();
	}
	
	public function send_getExchangedReasonByCategoryId( $categoryId, $reasonType, $isShow, $appId, $flagsMap){
		
		$this->initInvocation("getExchangedReasonByCategoryId");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonByCategoryId_args();
		
		$args->categoryId = $categoryId;
		
		$args->reasonType = $reasonType;
		
		$args->isShow = $isShow;
		
		$args->appId = $appId;
		
		$args->flagsMap = $flagsMap;
		
		$this->send_base($args);
	}
	
	public function recv_getExchangedReasonByCategoryId(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonByCategoryId_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExchangedReasonListByCategoryIds( $categoryIdSet, $reasonType, $isShow, $appId, $flagsMap){
		
		$this->send_getExchangedReasonListByCategoryIds( $categoryIdSet, $reasonType, $isShow, $appId, $flagsMap);
		return $this->recv_getExchangedReasonListByCategoryIds();
	}
	
	public function send_getExchangedReasonListByCategoryIds( $categoryIdSet, $reasonType, $isShow, $appId, $flagsMap){
		
		$this->initInvocation("getExchangedReasonListByCategoryIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonListByCategoryIds_args();
		
		$args->categoryIdSet = $categoryIdSet;
		
		$args->reasonType = $reasonType;
		
		$args->isShow = $isShow;
		
		$args->appId = $appId;
		
		$args->flagsMap = $flagsMap;
		
		$this->send_base($args);
	}
	
	public function recv_getExchangedReasonListByCategoryIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonListByCategoryIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getExchangedReasonListByIds( $reasonIdSet, $appId){
		
		$this->send_getExchangedReasonListByIds( $reasonIdSet, $appId);
		return $this->recv_getExchangedReasonListByIds();
	}
	
	public function send_getExchangedReasonListByIds( $reasonIdSet, $appId){
		
		$this->initInvocation("getExchangedReasonListByIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonListByIds_args();
		
		$args->reasonIdSet = $reasonIdSet;
		
		$args->appId = $appId;
		
		$this->send_base($args);
	}
	
	public function recv_getExchangedReasonListByIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getExchangedReasonListByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierachyFilterAttributes( $categoryId){
		
		$this->send_getHierachyFilterAttributes( $categoryId);
		return $this->recv_getHierachyFilterAttributes();
	}
	
	public function send_getHierachyFilterAttributes( $categoryId){
		
		$this->initInvocation("getHierachyFilterAttributes");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierachyFilterAttributes_args();
		
		$args->categoryId = $categoryId;
		
		$this->send_base($args);
	}
	
	public function recv_getHierachyFilterAttributes(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierachyFilterAttributes_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyCategoryTree( $hierarchyId, $isIncludeChildren){
		
		$this->send_getHierarchyCategoryTree( $hierarchyId, $isIncludeChildren);
		return $this->recv_getHierarchyCategoryTree();
	}
	
	public function send_getHierarchyCategoryTree( $hierarchyId, $isIncludeChildren){
		
		$this->initInvocation("getHierarchyCategoryTree");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategoryTree_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$args->isIncludeChildren = $isIncludeChildren;
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyCategoryTree(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategoryTree_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyCategoryTreeForVre( $hierarchyId){
		
		$this->send_getHierarchyCategoryTreeForVre( $hierarchyId);
		return $this->recv_getHierarchyCategoryTreeForVre();
	}
	
	public function send_getHierarchyCategoryTreeForVre( $hierarchyId){
		
		$this->initInvocation("getHierarchyCategoryTreeForVre");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategoryTreeForVre_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyCategoryTreeForVre(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategoryTreeForVre_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyCategroyidsByCategoryIds( $hierarchyId, $categoryIds){
		
		$this->send_getHierarchyCategroyidsByCategoryIds( $hierarchyId, $categoryIds);
		return $this->recv_getHierarchyCategroyidsByCategoryIds();
	}
	
	public function send_getHierarchyCategroyidsByCategoryIds( $hierarchyId, $categoryIds){
		
		$this->initInvocation("getHierarchyCategroyidsByCategoryIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategroyidsByCategoryIds_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyCategroyidsByCategoryIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyCategroyidsByCategoryIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyIdsForVre(){
		
		$this->send_getHierarchyIdsForVre();
		return $this->recv_getHierarchyIdsForVre();
	}
	
	public function send_getHierarchyIdsForVre(){
		
		$this->initInvocation("getHierarchyIdsForVre");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyIdsForVre_args();
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyIdsForVre(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyIdsForVre_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyLeafCategoryIdAndNameList( $hierarchyId, $categoryIds){
		
		$this->send_getHierarchyLeafCategoryIdAndNameList( $hierarchyId, $categoryIds);
		return $this->recv_getHierarchyLeafCategoryIdAndNameList();
	}
	
	public function send_getHierarchyLeafCategoryIdAndNameList( $hierarchyId, $categoryIds){
		
		$this->initInvocation("getHierarchyLeafCategoryIdAndNameList");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyLeafCategoryIdAndNameList_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyLeafCategoryIdAndNameList(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyLeafCategoryIdAndNameList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getHierarchyTopCategoryIdAndNameList( $hierarchyId, $categoryIds){
		
		$this->send_getHierarchyTopCategoryIdAndNameList( $hierarchyId, $categoryIds);
		return $this->recv_getHierarchyTopCategoryIdAndNameList();
	}
	
	public function send_getHierarchyTopCategoryIdAndNameList( $hierarchyId, $categoryIds){
		
		$this->initInvocation("getHierarchyTopCategoryIdAndNameList");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyTopCategoryIdAndNameList_args();
		
		$args->hierarchyId = $hierarchyId;
		
		$args->categoryIds = $categoryIds;
		
		$this->send_base($args);
	}
	
	public function recv_getHierarchyTopCategoryIdAndNameList(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getHierarchyTopCategoryIdAndNameList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getLeafCategoryByName( $name, $limit){
		
		$this->send_getLeafCategoryByName( $name, $limit);
		return $this->recv_getLeafCategoryByName();
	}
	
	public function send_getLeafCategoryByName( $name, $limit){
		
		$this->initInvocation("getLeafCategoryByName");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getLeafCategoryByName_args();
		
		$args->name = $name;
		
		$args->limit = $limit;
		
		$this->send_base($args);
	}
	
	public function recv_getLeafCategoryByName(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getLeafCategoryByName_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getMultiCategories( $categoryids, $isIncludeChildren, $isIncludeAttribute){
		
		$this->send_getMultiCategories( $categoryids, $isIncludeChildren, $isIncludeAttribute);
		return $this->recv_getMultiCategories();
	}
	
	public function send_getMultiCategories( $categoryids, $isIncludeChildren, $isIncludeAttribute){
		
		$this->initInvocation("getMultiCategories");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getMultiCategories_args();
		
		$args->categoryids = $categoryids;
		
		$args->isIncludeChildren = $isIncludeChildren;
		
		$args->isIncludeAttribute = $isIncludeAttribute;
		
		$this->send_base($args);
	}
	
	public function recv_getMultiCategories(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getMultiCategories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPublishCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId, $option){
		
		$this->send_getPublishCategoryTree( $reqContext, $categoryId, $option);
		return $this->recv_getPublishCategoryTree();
	}
	
	public function send_getPublishCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $categoryId, $option){
		
		$this->initInvocation("getPublishCategoryTree");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getPublishCategoryTree_args();
		
		$args->reqContext = $reqContext;
		
		$args->categoryId = $categoryId;
		
		$args->option = $option;
		
		$this->send_base($args);
	}
	
	public function recv_getPublishCategoryTree(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getPublishCategoryTree_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getPublishHierarchyCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $option, $isIncludeChildren){
		
		$this->send_getPublishHierarchyCategoryTree( $reqContext, $option, $isIncludeChildren);
		return $this->recv_getPublishHierarchyCategoryTree();
	}
	
	public function send_getPublishHierarchyCategoryTree(\com\vip\osp\category\api\comm\ReqContext $reqContext, $option, $isIncludeChildren){
		
		$this->initInvocation("getPublishHierarchyCategoryTree");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getPublishHierarchyCategoryTree_args();
		
		$args->reqContext = $reqContext;
		
		$args->option = $option;
		
		$args->isIncludeChildren = $isIncludeChildren;
		
		$this->send_base($args);
	}
	
	public function recv_getPublishHierarchyCategoryTree(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getPublishHierarchyCategoryTree_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagByIds( $tagIds){
		
		$this->send_getTagByIds( $tagIds);
		return $this->recv_getTagByIds();
	}
	
	public function send_getTagByIds( $tagIds){
		
		$this->initInvocation("getTagByIds");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getTagByIds_args();
		
		$args->tagIds = $tagIds;
		
		$this->send_base($args);
	}
	
	public function recv_getTagByIds(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getTagByIds_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagInfoList( $tagSnList){
		
		$this->send_getTagInfoList( $tagSnList);
		return $this->recv_getTagInfoList();
	}
	
	public function send_getTagInfoList( $tagSnList){
		
		$this->initInvocation("getTagInfoList");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getTagInfoList_args();
		
		$args->tagSnList = $tagSnList;
		
		$this->send_base($args);
	}
	
	public function recv_getTagInfoList(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getTagInfoList_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getTagsByTagType( $tagType, $curPage, $pageSize){
		
		$this->send_getTagsByTagType( $tagType, $curPage, $pageSize);
		return $this->recv_getTagsByTagType();
	}
	
	public function send_getTagsByTagType( $tagType, $curPage, $pageSize){
		
		$this->initInvocation("getTagsByTagType");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getTagsByTagType_args();
		
		$args->tagType = $tagType;
		
		$args->curPage = $curPage;
		
		$args->pageSize = $pageSize;
		
		$this->send_base($args);
	}
	
	public function recv_getTagsByTagType(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getTagsByTagType_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId){
		
		$this->send_getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId);
		return $this->recv_getUpdatedPublishCategories();
	}
	
	public function send_getUpdatedPublishCategories( $sinceUpdateTime, $hierarchyId){
		
		$this->initInvocation("getUpdatedPublishCategories");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_getUpdatedPublishCategories_args();
		
		$args->sinceUpdateTime = $sinceUpdateTime;
		
		$args->hierarchyId = $hierarchyId;
		
		$this->send_base($args);
	}
	
	public function recv_getUpdatedPublishCategories(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_getUpdatedPublishCategories_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function healthCheck(){
		
		$this->send_healthCheck();
		return $this->recv_healthCheck();
	}
	
	public function send_healthCheck(){
		
		$this->initInvocation("healthCheck");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_healthCheck_args();
		
		$this->send_base($args);
	}
	
	public function recv_healthCheck(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_healthCheck_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
	public function parseAttributes( $categoryId, $attrOptIdsList){
		
		$this->send_parseAttributes( $categoryId, $attrOptIdsList);
		return $this->recv_parseAttributes();
	}
	
	public function send_parseAttributes( $categoryId, $attrOptIdsList){
		
		$this->initInvocation("parseAttributes");
		$args = new \com\vip\osp\category\api\comm\CategoryAPI_parseAttributes_args();
		
		$args->categoryId = $categoryId;
		
		$args->attrOptIdsList = $attrOptIdsList;
		
		$this->send_base($args);
	}
	
	public function recv_parseAttributes(){
		
		$result = new \com\vip\osp\category\api\comm\CategoryAPI_parseAttributes_result();
		$this->receive_base($result);
		if ($result->success !== null){
			
			return $result->success;
		}
		
	}
	
	
}




class CategoryAPI_batchGetCategoryIdMapping_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryIds');
		
		if (!is_array($this->categoryIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->categoryIds as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_batchGetCategoryIdMappingByNewCateIds_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIds[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryIds');
		
		if (!is_array($this->categoryIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->categoryIds as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_batchGetCategoryVersionByIds_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIds[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryIds');
		
		if (!is_array($this->categoryIds)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->categoryIds as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getAttributeByTag_args {
	
	static $_TSPEC;
	public $tagType = null;
	public $isIncludeOption = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			3 => array(
			'var' => 'isIncludeOption'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['isIncludeOption'])){
				
				$this->isIncludeOption = $vals['isIncludeOption'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->tagType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeOption);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagType');
		$xfer += $output->writeI32($this->tagType);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isIncludeOption !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeOption');
			$xfer += $output->writeBool($this->isIncludeOption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getBriefCategoryAttributesByIds_args {
	
	static $_TSPEC;
	public $categoryIds = null;
	public $isIncludeOption = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryIds'
			),
			2 => array(
			'var' => 'isIncludeOption'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
			if (isset($vals['isIncludeOption'])){
				
				$this->isIncludeOption = $vals['isIncludeOption'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeOption);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryIds !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIds');
			
			if (!is_array($this->categoryIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->categoryIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isIncludeOption !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeOption');
			$xfer += $output->writeBool($this->isIncludeOption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getBriefCategoryTree_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $isIncludeChildren = null;
	public $resultFields = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'isIncludeChildren'
			),
			3 => array(
			'var' => 'resultFields'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['isIncludeChildren'])){
				
				$this->isIncludeChildren = $vals['isIncludeChildren'];
			}
			
			
			if (isset($vals['resultFields'])){
				
				$this->resultFields = $vals['resultFields'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeChildren);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->resultFields = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$names = \com\vip\osp\category\api\comm\ResultFields::$__names;
					$name = null;
					$input->readString($name);
					foreach ($names as $k => $v){
						
						if($name == $v){
							
							$elem0 = $k;
							break;
						}
						
					}
					
					
					$this->resultFields[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isIncludeChildren !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeChildren');
			$xfer += $output->writeBool($this->isIncludeChildren);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->resultFields !== null) {
			
			$xfer += $output->writeFieldBegin('resultFields');
			
			if (!is_array($this->resultFields)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->resultFields as $iter0){
				
				
				$em = new \com\vip\osp\category\api\comm\ResultFields; 
				$output->writeString($em::$__names[$iter0]);  
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategories_args {
	
	static $_TSPEC;
	public $categoryids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryids'])){
				
				$this->categoryids = $vals['categoryids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->categoryids);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryids');
		$xfer += $output->writeString($this->categoryids);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoriesAndChildrenAttributes_args {
	
	static $_TSPEC;
	public $categoryids = null;
	public $isVendorProductAttribute = null;
	public $isIncludeOption = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryids'
			),
			2 => array(
			'var' => 'isVendorProductAttribute'
			),
			3 => array(
			'var' => 'isIncludeOption'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryids'])){
				
				$this->categoryids = $vals['categoryids'];
			}
			
			
			if (isset($vals['isVendorProductAttribute'])){
				
				$this->isVendorProductAttribute = $vals['isVendorProductAttribute'];
			}
			
			
			if (isset($vals['isIncludeOption'])){
				
				$this->isIncludeOption = $vals['isIncludeOption'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryids = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryids[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isVendorProductAttribute);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeOption);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryids');
		
		if (!is_array($this->categoryids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->categoryids as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isVendorProductAttribute !== null) {
			
			$xfer += $output->writeFieldBegin('isVendorProductAttribute');
			$xfer += $output->writeBool($this->isVendorProductAttribute);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isIncludeOption !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeOption');
			$xfer += $output->writeBool($this->isIncludeOption);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategory_args {
	
	static $_TSPEC;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryAttributeIdsByIds_args {
	
	static $_TSPEC;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryIds !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIds');
			
			if (!is_array($this->categoryIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryAttributes_args {
	
	static $_TSPEC;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryByName_args {
	
	static $_TSPEC;
	public $name = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryIdAndNameList_args {
	
	static $_TSPEC;
	public $categoryids = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryids'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryids'])){
				
				$this->categoryids = $vals['categoryids'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryids = array();
			$_size0 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryids[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryids');
		
		if (!is_array($this->categoryids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->categoryids as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryPath_args {
	
	static $_TSPEC;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryQuestionAnswer_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategorySpecialAttributeList_args {
	
	static $_TSPEC;
	public $categorySpecialParams = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categorySpecialParams'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categorySpecialParams'])){
				
				$this->categorySpecialParams = $vals['categorySpecialParams'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categorySpecialParams = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\CategorySpecialParam();
					$elem0->read($input);
					
					$this->categorySpecialParams[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categorySpecialParams');
		
		if (!is_array($this->categorySpecialParams)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->categorySpecialParams as $iter0){
			
			
			if (!is_object($iter0)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $iter0->write($output);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategorySpecialAttributes_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $attributeId = null;
	public $brandId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'attributeId'
			),
			3 => array(
			'var' => 'brandId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['attributeId'])){
				
				$this->attributeId = $vals['attributeId'];
			}
			
			
			if (isset($vals['brandId'])){
				
				$this->brandId = $vals['brandId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->attributeId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->brandId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attributeId !== null) {
			
			$xfer += $output->writeFieldBegin('attributeId');
			$xfer += $output->writeI32($this->attributeId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->brandId !== null) {
			
			$xfer += $output->writeFieldBegin('brandId');
			$xfer += $output->writeI32($this->brandId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryTree_args {
	
	static $_TSPEC;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getExchangedReasonByCategoryId_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $reasonType = null;
	public $isShow = null;
	public $appId = null;
	public $flagsMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'reasonType'
			),
			3 => array(
			'var' => 'isShow'
			),
			4 => array(
			'var' => 'appId'
			),
			5 => array(
			'var' => 'flagsMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['isShow'])){
				
				$this->isShow = $vals['isShow'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['flagsMap'])){
				
				$this->flagsMap = $vals['flagsMap'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->reasonType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->isShow); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->flagsMap = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key0 = '';
					$input->readString($key0);
					
					$val0 = '';
					$input->readString($val0);
					
					$this->flagsMap[$key0] = $val0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryId !== null) {
			
			$xfer += $output->writeFieldBegin('categoryId');
			$xfer += $output->writeI32($this->categoryId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeByte($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShow !== null) {
			
			$xfer += $output->writeFieldBegin('isShow');
			$xfer += $output->writeByte($this->isShow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flagsMap !== null) {
			
			$xfer += $output->writeFieldBegin('flagsMap');
			
			if (!is_array($this->flagsMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flagsMap as $kiter0 => $viter0){
				
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




class CategoryAPI_getExchangedReasonListByCategoryIds_args {
	
	static $_TSPEC;
	public $categoryIdSet = null;
	public $reasonType = null;
	public $isShow = null;
	public $appId = null;
	public $flagsMap = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryIdSet'
			),
			2 => array(
			'var' => 'reasonType'
			),
			3 => array(
			'var' => 'isShow'
			),
			4 => array(
			'var' => 'appId'
			),
			5 => array(
			'var' => 'flagsMap'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryIdSet'])){
				
				$this->categoryIdSet = $vals['categoryIdSet'];
			}
			
			
			if (isset($vals['reasonType'])){
				
				$this->reasonType = $vals['reasonType'];
			}
			
			
			if (isset($vals['isShow'])){
				
				$this->isShow = $vals['isShow'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
			if (isset($vals['flagsMap'])){
				
				$this->flagsMap = $vals['flagsMap'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryIdSet = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIdSet[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->reasonType); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readByte($this->isShow); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		if(true) {
			
			
			$this->flagsMap = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key2 = '';
					$input->readString($key2);
					
					$val2 = '';
					$input->readString($val2);
					
					$this->flagsMap[$key2] = $val2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->categoryIdSet !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIdSet');
			
			if (!is_array($this->categoryIdSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->categoryIdSet as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->reasonType !== null) {
			
			$xfer += $output->writeFieldBegin('reasonType');
			$xfer += $output->writeByte($this->reasonType);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isShow !== null) {
			
			$xfer += $output->writeFieldBegin('isShow');
			$xfer += $output->writeByte($this->isShow);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->flagsMap !== null) {
			
			$xfer += $output->writeFieldBegin('flagsMap');
			
			if (!is_array($this->flagsMap)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->flagsMap as $kiter0 => $viter0){
				
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




class CategoryAPI_getExchangedReasonListByIds_args {
	
	static $_TSPEC;
	public $reasonIdSet = null;
	public $appId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reasonIdSet'
			),
			2 => array(
			'var' => 'appId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reasonIdSet'])){
				
				$this->reasonIdSet = $vals['reasonIdSet'];
			}
			
			
			if (isset($vals['appId'])){
				
				$this->appId = $vals['appId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reasonIdSet = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->reasonIdSet[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readString($this->appId);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->reasonIdSet !== null) {
			
			$xfer += $output->writeFieldBegin('reasonIdSet');
			
			if (!is_array($this->reasonIdSet)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->reasonIdSet as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->appId !== null) {
			
			$xfer += $output->writeFieldBegin('appId');
			$xfer += $output->writeString($this->appId);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierachyFilterAttributes_args {
	
	static $_TSPEC;
	public $categoryId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategoryTree_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $isIncludeChildren = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'isIncludeChildren'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['isIncludeChildren'])){
				
				$this->isIncludeChildren = $vals['isIncludeChildren'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeChildren);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isIncludeChildren !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeChildren');
			$xfer += $output->writeBool($this->isIncludeChildren);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategoryTreeForVre_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategroyidsByCategoryIds_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->categoryIds !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIds');
			
			if (!is_array($this->categoryIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->categoryIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyIdsForVre_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyLeafCategoryIdAndNameList_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIds[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->categoryIds !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIds');
			
			if (!is_array($this->categoryIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->categoryIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyTopCategoryIdAndNameList_args {
	
	static $_TSPEC;
	public $hierarchyId = null;
	public $categoryIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'hierarchyId'
			),
			2 => array(
			'var' => 'categoryIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
			if (isset($vals['categoryIds'])){
				
				$this->categoryIds = $vals['categoryIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->categoryIds = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->categoryIds[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->categoryIds !== null) {
			
			$xfer += $output->writeFieldBegin('categoryIds');
			
			if (!is_array($this->categoryIds)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeSetBegin();
			foreach ($this->categoryIds as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeSetEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getLeafCategoryByName_args {
	
	static $_TSPEC;
	public $name = null;
	public $limit = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'name'
			),
			2 => array(
			'var' => 'limit'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['name'])){
				
				$this->name = $vals['name'];
			}
			
			
			if (isset($vals['limit'])){
				
				$this->limit = $vals['limit'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->name);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->limit); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('name');
		$xfer += $output->writeString($this->name);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('limit');
		$xfer += $output->writeI32($this->limit);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getMultiCategories_args {
	
	static $_TSPEC;
	public $categoryids = null;
	public $isIncludeChildren = null;
	public $isIncludeAttribute = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryids'
			),
			2 => array(
			'var' => 'isIncludeChildren'
			),
			3 => array(
			'var' => 'isIncludeAttribute'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryids'])){
				
				$this->categoryids = $vals['categoryids'];
			}
			
			
			if (isset($vals['isIncludeChildren'])){
				
				$this->isIncludeChildren = $vals['isIncludeChildren'];
			}
			
			
			if (isset($vals['isIncludeAttribute'])){
				
				$this->isIncludeAttribute = $vals['isIncludeAttribute'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->categoryids = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->categoryids[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeChildren);
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeAttribute);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryids');
		
		if (!is_array($this->categoryids)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeListBegin();
		foreach ($this->categoryids as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeListEnd();
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isIncludeChildren !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeChildren');
			$xfer += $output->writeBool($this->isIncludeChildren);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		if($this->isIncludeAttribute !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeAttribute');
			$xfer += $output->writeBool($this->isIncludeAttribute);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getPublishCategoryTree_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $categoryId = null;
	public $option = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'categoryId'
			),
			3 => array(
			'var' => 'option'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['option'])){
				
				$this->option = $vals['option'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\osp\category\api\comm\TreeOption::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->option = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('option');
		
		$em = new \com\vip\osp\category\api\comm\TreeOption; 
		$output->writeString($em::$__names[$this->option]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getPublishHierarchyCategoryTree_args {
	
	static $_TSPEC;
	public $reqContext = null;
	public $option = null;
	public $isIncludeChildren = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'reqContext'
			),
			2 => array(
			'var' => 'option'
			),
			3 => array(
			'var' => 'isIncludeChildren'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['reqContext'])){
				
				$this->reqContext = $vals['reqContext'];
			}
			
			
			if (isset($vals['option'])){
				
				$this->option = $vals['option'];
			}
			
			
			if (isset($vals['isIncludeChildren'])){
				
				$this->isIncludeChildren = $vals['isIncludeChildren'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->reqContext = new \com\vip\osp\category\api\comm\ReqContext();
			$this->reqContext->read($input);
			
		}
		
		
		
		
		if(true) {
			
			
			$names = \com\vip\osp\category\api\comm\TreeOption::$__names;
			$name = null;
			$input->readString($name);
			foreach ($names as $k => $v){
				
				if($name == $v){
					
					$this->option = $k;
					break;
				}
				
			}
			
			
		}
		
		
		
		
		if(true) {
			
			$input->readBool($this->isIncludeChildren);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('reqContext');
		
		if (!is_object($this->reqContext)) {
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$xfer += $this->reqContext->write($output);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('option');
		
		$em = new \com\vip\osp\category\api\comm\TreeOption; 
		$output->writeString($em::$__names[$this->option]);  
		
		$xfer += $output->writeFieldEnd();
		
		if($this->isIncludeChildren !== null) {
			
			$xfer += $output->writeFieldBegin('isIncludeChildren');
			$xfer += $output->writeBool($this->isIncludeChildren);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagByIds_args {
	
	static $_TSPEC;
	public $tagIds = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagIds'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagIds'])){
				
				$this->tagIds = $vals['tagIds'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagIds = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					$input->readI32($elem0); 
					
					$this->tagIds[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
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
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagInfoList_args {
	
	static $_TSPEC;
	public $tagSnList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagSnList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagSnList'])){
				
				$this->tagSnList = $vals['tagSnList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->tagSnList = array();
			$_size1 = 0;
			$input->readSetBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->tagSnList[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readSetEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagSnList');
		
		if (!is_array($this->tagSnList)){
			
			throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
		}
		
		$output->writeSetBegin();
		foreach ($this->tagSnList as $iter0){
			
			$xfer += $output->writeI32($iter0);
			
		}
		
		$output->writeSetEnd();
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagsByTagType_args {
	
	static $_TSPEC;
	public $tagType = null;
	public $curPage = null;
	public $pageSize = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'tagType'
			),
			2 => array(
			'var' => 'curPage'
			),
			3 => array(
			'var' => 'pageSize'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['tagType'])){
				
				$this->tagType = $vals['tagType'];
			}
			
			
			if (isset($vals['curPage'])){
				
				$this->curPage = $vals['curPage'];
			}
			
			
			if (isset($vals['pageSize'])){
				
				$this->pageSize = $vals['pageSize'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
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
		
		
		
		
		if(true) {
			
			$input->readI32($this->curPage); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->pageSize); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('tagType');
		
		$em = new \com\vip\osp\category\api\comm\TagType; 
		$output->writeString($em::$__names[$this->tagType]);  
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('curPage');
		$xfer += $output->writeI32($this->curPage);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('pageSize');
		$xfer += $output->writeI32($this->pageSize);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getUpdatedPublishCategories_args {
	
	static $_TSPEC;
	public $sinceUpdateTime = null;
	public $hierarchyId = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'sinceUpdateTime'
			),
			2 => array(
			'var' => 'hierarchyId'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['sinceUpdateTime'])){
				
				$this->sinceUpdateTime = $vals['sinceUpdateTime'];
			}
			
			
			if (isset($vals['hierarchyId'])){
				
				$this->hierarchyId = $vals['hierarchyId'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI64($this->sinceUpdateTime); 
			
		}
		
		
		
		
		if(true) {
			
			$input->readI32($this->hierarchyId); 
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('sinceUpdateTime');
		$xfer += $output->writeI64($this->sinceUpdateTime);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldBegin('hierarchyId');
		$xfer += $output->writeI32($this->hierarchyId);
		
		$xfer += $output->writeFieldEnd();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_healthCheck_args {
	
	static $_TSPEC;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			
			);
			
		}
		
		if (is_array($vals)){
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_parseAttributes_args {
	
	static $_TSPEC;
	public $categoryId = null;
	public $attrOptIdsList = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			1 => array(
			'var' => 'categoryId'
			),
			2 => array(
			'var' => 'attrOptIdsList'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['categoryId'])){
				
				$this->categoryId = $vals['categoryId'];
			}
			
			
			if (isset($vals['attrOptIdsList'])){
				
				$this->attrOptIdsList = $vals['attrOptIdsList'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readI32($this->categoryId); 
			
		}
		
		
		
		
		if(true) {
			
			
			$this->attrOptIdsList = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\AttrOptIds();
					$elem0->read($input);
					
					$this->attrOptIdsList[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		$xfer += $output->writeFieldBegin('categoryId');
		$xfer += $output->writeI32($this->categoryId);
		
		$xfer += $output->writeFieldEnd();
		
		if($this->attrOptIdsList !== null) {
			
			$xfer += $output->writeFieldBegin('attrOptIdsList');
			
			if (!is_array($this->attrOptIdsList)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->attrOptIdsList as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_batchGetCategoryIdMapping_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key1 = 0;
					$input->readI32($key1); 
					
					$val1 = null;
					
					$val1 = array();
					$_size2 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem2 = null;
							
							$elem2 = new \com\vip\osp\category\api\comm\CategoryIdMapping();
							$elem2->read($input);
							
							$val1[$_size2++] = $elem2;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->success[$key1] = $val1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
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




class CategoryAPI_batchGetCategoryIdMappingByNewCateIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key2 = 0;
					$input->readI32($key2); 
					
					$val2 = null;
					
					$val2 = array();
					$_size3 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem3 = null;
							
							$elem3 = new \com\vip\osp\category\api\comm\CategoryIdMapping();
							$elem3->read($input);
							
							$val2[$_size3++] = $elem3;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->success[$key2] = $val2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
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




class CategoryAPI_batchGetCategoryVersionByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$input->readMapBegin();
			while(true){
				
				try{
					
					$key2 = 0;
					$input->readI32($key2); 
					
					$val2 = null;
					
					$val2 = array();
					$_size3 = 0;
					$input->readListBegin();
					while(true){
						
						try{
							
							$elem3 = null;
							
							$elem3 = new \com\vip\osp\category\api\comm\CategoryVersion();
							$elem3->read($input);
							
							$val2[$_size3++] = $elem3;
						}
						catch(\Exception $e){
							
							break;
						}
					}
					
					$input->readListEnd();
					
					$this->success[$key2] = $val2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readMapEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeMapBegin();
			foreach ($this->success as $kiter0 => $viter0){
				
				$xfer += $output->writeI32($kiter0);
				
				
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




class CategoryAPI_getAttributeByTag_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size2 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem2 = null;
					
					$elem2 = new \com\vip\osp\category\api\comm\Attribute();
					$elem2->read($input);
					
					$this->success[$_size2++] = $elem2;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getBriefCategoryAttributesByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\BriefCategoryAttributes();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getBriefCategoryTree_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\BriefCategory();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategories_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\Category();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoriesAndChildrenAttributes_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\Attribute();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategory_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\Category();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryAttributeIdsByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\CategoryAttributeIds();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryAttributes_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\Attribute();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryByName_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\Category();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryIdAndNameList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\CategoryIdAndName();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryPath_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\CategoryPath();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryQuestionAnswer_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\CategoryQuestionAnswerShort();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategorySpecialAttributeList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\CategorySpecialAttributes();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategorySpecialAttributes_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\AttributeWithValue();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getCategoryTree_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\Category();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getExchangedReasonByCategoryId_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\CategoryExchangedReason();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getExchangedReasonListByCategoryIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\CategoryExchangedReason();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getExchangedReasonListByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\ExchangedReason();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierachyFilterAttributes_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			$input->readString($this->success);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			$xfer += $output->writeString($this->success);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategoryTree_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\Category();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategoryTreeForVre_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\HierarchyTopCategoryVre();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyCategroyidsByCategoryIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\Category();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyIdsForVre_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					$input->readI32($elem1); 
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				$xfer += $output->writeI32($iter0);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyLeafCategoryIdAndNameList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\HierarchyCategoryIdAndNames();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getHierarchyTopCategoryIdAndNameList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\HierarchyTopCategoryIdAndNames();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getLeafCategoryByName_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\Category();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getMultiCategories_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\Category();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getPublishCategoryTree_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\Category();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getPublishHierarchyCategoryTree_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\Category();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagByIds_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\CategoryTagAttribute();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagInfoList_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\TagInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getTagsByTagType_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size1 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem1 = null;
					
					$elem1 = new \com\vip\osp\category\api\comm\TagInfo();
					$elem1->read($input);
					
					$this->success[$_size1++] = $elem1;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_getUpdatedPublishCategories_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\osp\category\api\comm\CategoryUpdates();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_healthCheck_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = new \com\vip\hermes\core\health\CheckResult();
			$this->success->read($input);
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_object($this->success)) {
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$xfer += $this->success->write($output);
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




class CategoryAPI_parseAttributes_result {
	
	static $_TSPEC;
	public $success = null;
	
	public function __construct($vals=null){
		
		if (!isset(self::$_TSPEC)){
			
			self::$_TSPEC = array(
			0 => array(
			'var' => 'success'
			),
			
			);
			
		}
		
		if (is_array($vals)){
			
			
			if (isset($vals['success'])){
				
				$this->success = $vals['success'];
			}
			
			
		}
		
	}
	
	
	public function read($input){
		
		
		
		
		if(true) {
			
			
			$this->success = array();
			$_size0 = 0;
			$input->readListBegin();
			while(true){
				
				try{
					
					$elem0 = null;
					
					$elem0 = new \com\vip\osp\category\api\comm\Attribute();
					$elem0->read($input);
					
					$this->success[$_size0++] = $elem0;
				}
				catch(\Exception $e){
					
					break;
				}
			}
			
			$input->readListEnd();
			
		}
		
		
		
		
		
		
	}
	
	public function write($output){
		
		$xfer = 0;
		$xfer += $output->writeStructBegin();
		
		if($this->success !== null) {
			
			$xfer += $output->writeFieldBegin('success');
			
			if (!is_array($this->success)){
				
				throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
			}
			
			$output->writeListBegin();
			foreach ($this->success as $iter0){
				
				
				if (!is_object($iter0)) {
					
					throw new \Osp\Exception\OspException('Bad type in structure.', \Osp\Exception\OspException::INVALID_DATA);
				}
				
				$xfer += $iter0->write($output);
				
			}
			
			$output->writeListEnd();
			
			$xfer += $output->writeFieldEnd();
		}
		
		
		$xfer += $output->writeFieldStop();
		$xfer += $output->writeStructEnd();
		return $xfer;
	}
	
}




?>