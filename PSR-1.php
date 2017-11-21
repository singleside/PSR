<?php
/**
 * PSR-1	基础编码规范
 * 一、概览
 * 		1、PHP代码文件必须以<?php 或 <?=标签开始
 * 		2、PHP代码文件必须以不带 BOM 的 UTF-8 编码
 * 		3、PHP代码中应该只定义类、函数、常量等声明，或者其他会产生 副作用的操作(如：生成文件输出以及修改.ini配置文件等),二者只能选其一
 * 		4、命名空间以及类必须符合PSR的自动加载规范:PSR-4
 * 		5、类的命名必须遵循 大驼峰 ，如：SingleClass
 * 		6、类中的常量所有字母都必须大写，单词间用下划线分隔 如：SINGLE_SIDE
 * 		7、方法名称必须符合小驼峰， 如： singleFun
 * 		
 */

/**
 * 二、文件
 * 		1、PHP标签:<?php ?>长标签或者<?= ?>短标签
 * 		2、字符编码:PHP代码必须且只可以使用 不带BOM的UTF-8 编码
 * 			header('Content-type:text/html ; charset = utf-8 ');
 * 		3、副作用
 * 			1、要么单独定义新的申明，如：类、函数、常量等不产生 副作用 的操作，要么就只书写会产生副作用的逻辑操作，不可以同事具有
 * 			2、副作用包括但不限于
 * 				1、生成输出
 * 				2、直接的require或include
 * 				3、链接外部服务
 * 				4、修改ini配置
 * 				5、抛出错误或异常
 * 				6、修改全局或静态变量
 * 				7、读或写文件
 */

// 不包含副作用的代码
function foo()
{
	// 函数主体部分
}
// 条件声明，不属于 副作用
if(! function_exists('bar')){
	function bar()
	{
		// 函数主体部分
	}
}


/**
 * 三、命名空间和类
 * 		1、命名空间以及类的命名必须遵循PSR-4.
 * 			根据规范，每个类都独立为一个文件，切命名空间至少有一个层次：顶级的组织名称(vendor name).
 * 			类的命名必须遵循大驼峰命名规范 如： SingleClass
 * 			PHP5.3及以后的版本的代码必须使用正式的命名空间
 */
namespace Vendor\Model;
class ClassName
{

}

/**
 * 5.2.x及之前的版本的写法
 */
class Vendor_Model_Foo
{

}


/**
 * 四、类的常量、属性和方法
 * 		1、常量：类的常量中所有字母都必须大写，词间以下划线分隔
 */
class ClassName
{
	const VERSION = '1.0';
	const DATE_APPROVED = '2017-11-21';
}

/**
 * 2、属性
 * 类的属性命名可以遵循:
 * 		1、大写开头的驼峰式($SingleProperty)
 * 		2、小写开头的驼峰式($singleProperty)
 * 		3、下划线分割式( $single_property )
 * 	需要在一定范围内保持一致，包括整个团队，整个包或者整个类或者整个方法
 * 	
 * 	3、方法
 * 	方法名称必须符合 singleFoo() 式的小写开头驼峰式命名规范。
 */

