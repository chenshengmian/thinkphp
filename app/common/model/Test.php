<?php
/**
 * 测试模型
*/

namespace app\common\model;

use think\model\concern\SoftDelete;

class Test extends CommonBaseModel
{
    use SoftDelete;
    // 自定义选择数据
    

    protected $name = 'test';
    protected $autoWriteTimestamp = true;

    // 可搜索字段
    public array $searchField = ['username','nickname','mobile',];

    // 可作为条件的字段
    public array $whereField = [];

    // 可作为多选条件的字段
    public array $multiWhereField = [];

    // 可做为时间
    public array $timeField = [];

    /**
     * 是否启用获取器
    */
    public function getStatusTextAttr($value, $data): string
    {
        return self::BOOLEAN_TEXT[$data['status']];
    }


    /**
    * 关联用户等级
    */
    public function userLevel()
    {
        return $this->belongsTo(UserLevel::class);
    }

}
