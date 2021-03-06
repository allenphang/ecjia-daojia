<?php
/**
 * Created by PhpStorm.
 * User: royalwang
 * Date: 2019/1/28
 * Time: 13:58
 */

namespace Royalcms\Component\Upload\Uploader;

/**
 * 常用图片文件上传类
 * Class ImageUploader
 * @package Royalcms\Component\Upload
 */
class ImageUploader extends Uploader
{

    /**
     * 默认上传文件扩展类型
     * @var array
     */
    protected $default_filetypes = array(
        'jpg'  => 'image/gif',
        'jpeg' => 'image/jpeg',
        'png'  => 'image/png',
        'gif'  => 'image/x-png',
        'bmp'  => 'image/pjpeg',
    );


    /**
     * 设置上传配置选项
     */
    protected function settingUploadConfig()
    {
        $file_ext = array_keys($this->default_filetypes);
        $this->allowed_type($file_ext);

        $file_mime = array_values($this->default_filetypes);
        $this->allowed_mime($file_mime);
    }





}