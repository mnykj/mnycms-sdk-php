<?php
/**
 * @author 八级天
 * @since 14:55 2023/11/15
 * @blog www.mnykj.com
 * @email 211983651@qq.com
 */

namespace Mnykj\MnycmsSdkPhp\tool;

/**
 * Class TimeTool
 * @package util
 * 时间工具类
 */
class TimeTool
{
    /**
     * 获取指定格式的时间字符串
     */
    public static function getDateTime($time,$format="Y-m-d H:i:s",$remark="-"){
        if(!$time) return $remark;
        return date($format,$time);
    }
}