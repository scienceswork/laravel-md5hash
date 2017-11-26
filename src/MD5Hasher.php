<?php

namespace Hongli\Hasher;

class MD5Hasher
{
    /**
     * MD5加密算法
     * @param $value string 需要加密的值
     * @param array $options 加密的参数
     * @return string 加密后的值
     */
    public function make($value, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt);
    }

    /**
     * 检验MD5加密是否正确
     * @param $value string 原始值
     * @param $hashValue string 加密后的值
     * @param array $options 加密的参数
     * @return bool 加密是否正确
     */
    public function check($value, $hashValue, array $options = [])
    {
        $salt = isset($options['salt']) ? $options['salt'] : '';
        return hash('md5', $value . $salt) === $hashValue;
    }
}