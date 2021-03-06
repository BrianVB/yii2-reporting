<?php

/* @var $this yii\web\View */
/* @var $report \bvb\reporting\models\Report */
/* @var $showFullReport boolean */

use bvb\reporting\widgets\ReadableReport;

$this->title = 'View Report';
?>
<h4><?= $report->title; ?></h4>
<small>Generated on <?= date('F j, Y H:i:s', $report->getTimestamp()); ?></small>

<?php
echo ReadableReport::widget([
	'report' => $report,
	'showFullReport' => $showFullReport
]);