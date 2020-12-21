<?php


namespace app\common\model;


use think\Model;

class PriceChange extends Model
{
    //改价模型

    // 表名
    protected $name = 'price_change';
    // 开启自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';
    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    // 追加属性
    protected $append = [

    ];
    //商品改价
    public function changePrice($store_id,$goodsList)
    {
        if(!empty($goodsList)){
            foreach ($goodsList as &$item){
                $goodId = $this->where(['store_id'=>$store_id,'type'=>3,'object_id',$item['goodId']])->find();
                $adId = $this->where(['store_id'=>$store_id,'type'=>2,'object_id',$item['adId']])->find();
                $all = $this->where(['store_id'=>$store_id,'type'=>1])->find();
                if($goodId){
                    switch ($goodId['symbol']){
                        case '+':
                            $item['suggestPrice'] += $goodId['number'];
                            break;
                        case '-':
                            $item['suggestPrice'] *=$goodId['number'];
                            break;
                        case '*':
                            $item['suggestPrice'] = $item['suggestPrice']+($item['suggestPrice']*$goodId['number']);
                            break;
                        default:
                            break;
                    }
                }
                if($adId && !$goodId){
                    switch ($adId['symbol']){
                        case '+':
                            $item['suggestPrice'] += $adId['number'];
                            break;
                        case '-':
                            $item['suggestPrice'] *=$adId['number'];
                            break;
                        case '*':
                            $item['suggestPrice'] = $item['suggestPrice']+($item['suggestPrice']*$adId['number']);
                            break;
                        default:
                            break;
                    }
                }
                if(!$adId && !$goodId){
                    switch ($all['symbol']){
                        case '+':
                            $item['suggestPrice'] += $all['number'];
                            break;
                        case '-':
                            $item['suggestPrice'] *=$all['number'];
                            break;
                        case '*':
                            $item['suggestPrice'] = $item['suggestPrice']+($item['suggestPrice']*$all['number']);
                            break;
                        default:
                            break;
                    }
                }
            }
        }
        return $goodsList;
    }
    /**
     * 特定品牌改价
     */
}