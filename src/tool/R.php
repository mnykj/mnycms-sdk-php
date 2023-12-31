<?php
/**
 * @author 八级天
 * @since 14:55 2023/11/15
 * @blog www.mnykj.com
 * @email 211983651@qq.com
 */

namespace Mnykj\MnycmsSdkPhp\tool;

/**
 * Class R
 * @package util
 * php通用返回类
 */
class R
{
    /**
     * @param $count
     * @param $data
     * 表单的返回类
     */
    public static function form($msg="操作成功"){
        $arr = ["code"=>1,"msg"=>$msg];

        return $arr;
    }

    public static function table($count,$data){
        $arr = ["code"=>0,"count"=>$count,"data"=>$data];

        return $arr;
    }

    public static function success($data,$msg="获取成功"){
        $arr = ["code"=>1,"msg"=>$msg,"data"=>$data];
        return json($arr);
    }

    public static function page($total,$list,$msg="获取成功"){
        $arr = ["code"=>1,"msg"=>$msg,"data"=>['total'=>$total,'list'=>$list]];
        return json($arr);
    }

    public static function error($msg = "请求失败"){
        return json_encode(["code"=>0,"msg"=>$msg]);
    }

    /**
     * layui的表单提交返回格式
     */
    public static function layuiForm($msg="操作成功"){
        return json(["code"=>1,"msg"=>$msg]);
    }

    /**
     * layui的表格提交返回格式
     */
    public static function layuiTable($count,$data){
        return json(["code"=>0,"count"=>$count,"data"=>$data]);
    }
}