<?php
/*
 * By:0x584A
 *
 */
include_once ("Smarty_inc.php"); // 引入配置文件

$name = "By:0x584A";

// 二维 数组
$xingwen[] = array(
        "xin" => "新闻第一条",
        "Date" => "2014年12月22日"
);
$xingwen[] = array(
        "xin" => "新闻第二条",
        "Date" => "2014年12月22日"
);
$xingwen[] = array(
        "xin" => "新闻第三条",
        "Date" => "2014年12月22日"
);
// 数组
$row = array(
        "标题",
        "作者"
);

$smarty->assign("neirong", $name); // 替换模版中的neirong

$smarty->assign('xin', $xingwen); // 数组循环输出

$smarty->assign("row", $row);

$smarty->display("index.html"); // 对应模版，存在一个就可以了

?>