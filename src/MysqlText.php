<?php

namespace Itwmw\Validate\Mysql\Rules;

/**
 * 最多存储 65535（2^16 - 1）字节的文本字段
 *
 * 存储时在内容前使用 2 字节表示内容的字节数
 * @package Itwmw\Validate\Table\Mysql\Rules
 */
class MysqlText extends MysqlVarchar
{
}
