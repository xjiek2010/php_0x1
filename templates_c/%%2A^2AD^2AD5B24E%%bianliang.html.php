<?php /* Smarty version 2.6.18, created on 2014-12-23 14:44:15
         compiled from bianliang.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'truncate', 'bianliang.html', 10, false),array('modifier', 'count_characters', 'bianliang.html', 11, false),array('modifier', 'date_format', 'bianliang.html', 12, false),array('modifier', 'default', 'bianliang.html', 14, false),array('modifier', 'cat', 'bianliang.html', 16, false),array('modifier', 'escape', 'bianliang.html', 16, false),array('modifier', 'replace', 'bianliang.html', 17, false),array('modifier', 'spacify', 'bianliang.html', 18, false),array('modifier', 'wordwrap', 'bianliang.html', 19, false),)), $this); ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD HTML 4.01 Strict//EN' 'http://www.w3.org/TR/html4/strict.dtd'>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
<title>Smarty模版变量操作符</title>
</head>
<body>
原内容：<?php echo $this->_tpl_vars['xianshi1']; ?>

	<hr />
截取：<?php echo ((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 21, "...") : smarty_modifier_truncate($_tmp, 21, "...")); ?>
<br/>
字符：<?php echo ((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
<br/>
时间：<?php echo ((is_array($_tmp=$this->_tpl_vars['sj'])) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<br/>
smarty自带：<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
<br/>
默认：<?php echo ((is_array($_tmp=@$this->_tpl_vars['xianshi3'])) ? $this->_run_mod_handler('default', true, $_tmp, "没有内容name:xiaoshi3") : smarty_modifier_default($_tmp, "没有内容name:xiaoshi3")); ?>
 <br />
<!-- 转码类型：html、url、htmlall -->
转码：<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('cat', true, $_tmp, ' <a href="#">连接</a> ') : smarty_modifier_cat($_tmp, ' <a href="#">连接</a> ')))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
<br/>
替换：<?php echo ((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('replace', true, $_tmp, '符', 'By:0x584A') : smarty_modifier_replace($_tmp, '符', 'By:0x584A')); ?>
 <br />
<!-- 插空：	<?php echo ((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('spacify', true, $_tmp) : smarty_modifier_spacify($_tmp)); ?>
	<br /> -->
行约束：<?php echo ((is_array($_tmp=$this->_tpl_vars['xianshi2'])) ? $this->_run_mod_handler('wordwrap', true, $_tmp, 10, '<br>') : smarty_modifier_wordwrap($_tmp, 10, '<br>')); ?>

</body>
</html>