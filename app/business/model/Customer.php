<?php
/* +----------------------------------------------------------------------
 * 作	者: venus <venus-wxp@outlook.com>
 +----------------------------------------------------------------------
 * 创建日期: 2017-11-09 14:44
 +----------------------------------------------------------------------
 * 文件描述: Customer模型
 +----------------------------------------------------------------------
 * 升级记录:
 +----------------------------------------------------------------------
 */

namespace app\business\model;

class Customer extends Common {

    // 这里定义查询出的数据要进行隐藏的字段
    protected $hidden = [
        'sysManager'
    ];
    // 这是定义每个模型关联的模型
    public $relationModels = [
        'sysManager'
    ];
    // 这里定义每个模型的有数据字典的字段
    public $fieldDictNames = [
        ''
    ];

    // 这里定义每个模型的上传文件字段
    public $uploadFields = [
        
    ];

    public function sysManager () {
		return $this->belongsTo('app\\admin\\model\\SysManager', 'manager_id')->bind([
			'manager_name' => 'name',
		]);
	}
}