<?php /* Smarty version 2.6.18, created on 2014-12-22 15:15:05
         compiled from index.html */ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>index模版</title>
</head>
<body>
	<!-- 替换要访问的$neirong -->
	<?php echo $this->_tpl_vars['neirong']; ?>
 <br /><br />
	<hr />
	<!-- 数组 -->
	<b><?php echo $this->_tpl_vars['row'][0]; ?>
 | <?php echo $this->_tpl_vars['row'][1]; ?>
</b>	
	<hr />
	<!-- 二维数组 -->
	<?php unset($this->_sections['list']);
$this->_sections['list']['name'] = 'list';
$this->_sections['list']['loop'] = is_array($_loop=$this->_tpl_vars['xin']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['list']['show'] = true;
$this->_sections['list']['max'] = $this->_sections['list']['loop'];
$this->_sections['list']['step'] = 1;
$this->_sections['list']['start'] = $this->_sections['list']['step'] > 0 ? 0 : $this->_sections['list']['loop']-1;
if ($this->_sections['list']['show']) {
    $this->_sections['list']['total'] = $this->_sections['list']['loop'];
    if ($this->_sections['list']['total'] == 0)
        $this->_sections['list']['show'] = false;
} else
    $this->_sections['list']['total'] = 0;
if ($this->_sections['list']['show']):

            for ($this->_sections['list']['index'] = $this->_sections['list']['start'], $this->_sections['list']['iteration'] = 1;
                 $this->_sections['list']['iteration'] <= $this->_sections['list']['total'];
                 $this->_sections['list']['index'] += $this->_sections['list']['step'], $this->_sections['list']['iteration']++):
$this->_sections['list']['rownum'] = $this->_sections['list']['iteration'];
$this->_sections['list']['index_prev'] = $this->_sections['list']['index'] - $this->_sections['list']['step'];
$this->_sections['list']['index_next'] = $this->_sections['list']['index'] + $this->_sections['list']['step'];
$this->_sections['list']['first']      = ($this->_sections['list']['iteration'] == 1);
$this->_sections['list']['last']       = ($this->_sections['list']['iteration'] == $this->_sections['list']['total']);
?>
		<?php echo $this->_tpl_vars['xin'][$this->_sections['list']['index']]['xin']; ?>
 - <?php echo $this->_tpl_vars['xin'][$this->_sections['list']['index']]['Date']; ?>
 <br>
	<?php endfor; endif; ?>
	
	
	
</body>
</html>