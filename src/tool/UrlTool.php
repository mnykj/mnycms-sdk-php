<?php
/**
 * @author 八级天
 * @since 16:09 2023/12/13
 * @blog www.mnykj.com
 * @email 211983651@qq.com
 */

namespace Mnykj\MnycmsSdkPhp\tool;

/**
 * Class UrlTool
 * @package Mnykj\MnycmsSdkPhp\tool
 * url工具类
 */
class UrlTool
{
    /**
     * 获取当前请求的完整域名地址
     */
    public static function getEnvUrl(){
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
        $domain = $_SERVER['SERVER_NAME'];
        return $protocol.$domain;
    }
}