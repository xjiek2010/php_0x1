<?php
// Smarty模版配置文件
include_once ('smarty/Smarty.class.php'); // 包含Smarty类文件

$smarty = new Smarty(); // 建立smarty实例对象$smarty

$smarty->config_dir = "smarty/Config_File.class.php"; // 目录变量

$smarty->caching = false; // 是否启用缓存。开发过程中不建议启用

$smarty->template_dir = "./templates"; // 设置模版目录

$smarty->compile_dir = "./templates_c"; // 设置编译目录

$smarty->cache_dir = "smarty_cache"; // 缓存文件目录

/* 设置左右边界符默认格式 */
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";

?>