<?php
$rand = mt_rand();
?>
var chart<?php echo $rand; ?> = new FusionCharts("<?php echo base_url(); ?>flash/charts/Column3D.swf", "ChartId", "<?php echo $height; ?>", "<?php echo $width; ?>", "0", "0");
chart<?php echo $rand; ?>.setDataXML("<chart caption='<?php echo lang('New Users >> Weekly'); ?>' xAxisName='<?php echo lang('Day'); ?>' yAxisName='<?php echo lang('Uploads'); ?>' showValues='0' decimals='0' formatNumberScale='0'><set label='<?php $d='-6'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-5'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-4'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-3'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-2'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-1'; echo date('D', strtotime($d.' days')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime($d.' days 12:00 AM'), 'time <' => strtotime($d.' days 11:59:59 PM')))->num_rows(); ?>'/><set label='<?php $d='-6'; echo date('D', strtotime('today')); ?>' value='<?php echo $this->db->get_where('users', array('time >' => strtotime('today 12:00 AM'), 'time <' => strtotime('today 11:59:59 PM')))->num_rows(); ?>'/></chart>");
chart<?php echo $rand; ?>.render("chart_data");
