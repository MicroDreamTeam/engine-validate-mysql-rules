# Mysql验证规则集
包含`Mysql`除`空间`类型以外的全部字段类型的验证规则
### 安装
```shell
itwmw/engine-validate-mysql-rules
```
### 使用
在项目中，将[自定义规则](https://v.neww7.com/3/Rule.html)路径注册到验证器中
```php
\W7\Validate\Support\Storage\ValidateConfig::instance()->setRulesPath('Itwmw\\Validate\\Mysql\\Rules\\');
```
### 规则
|  字段类型   | 规则名  |参数|
|  :---- | :----  |:---:|
| bigint  | mysqlBigint |unsigned|
| binary  | mysqlBinary |length|
| bit  | mysqlBit |length|
| blob  | mysqlBlob |length|
| char  | mysqlChar |length|
| date  | mysqlDate |-|
| datetime  | mysqlDatetime |-|
| decimal  | mysqlDecimal |unsigned,length,precision|
| double  | mysqlDouble |unsigned,length,precision|
| enum  | mysqlEnum |table,field|
| float  | mysqlFloat |unsigned,length,precision|
| int  | mysqlInt |unsigned|
| json  | mysqlJson |-|
| longblob  | mysqlLongblob |length|
| longtext  | mysqlLongtext |length|
| mediumblob  | mysqlMediumblob |length|
| mediumint  | mysqlMediumint |unsigned|
| mediumtext  | mysqlMediumtext |length|
| set  | mysqlSet |table,field|
| smallint  | mysqlSmallint |unsigned|
| mysqlText  | mysqlText |length|
| time  | mysqlTime |-|
| timestamp  | mysqlTimestamp |-|
| tinyblob  | mysqlTinyblob |length|
| tinyint  | mysqlTinyint |unsigned|
| tinytext  | mysqlTinytext |length|
| varbinary  | mysqlVarbinary |length|
| varchar  | mysqlVarchar |length|
| mysqlYear  | mysqlYear |-|

参数说明:
- `table` 表名
- `field` 字段名
- `unsigned` 无符号,值为`true`或`false`
- `length` 字段长度
- `precision` 小数精度