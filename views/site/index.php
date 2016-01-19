<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'NEWS';
?>

<table border="1">
	<tr>
		<td align="center" style="background-color: #CCC;">Date</td><td align="center" style="background-color: #CCC;">News</td>
	</tr>
<?php foreach ($news as $new) { ?>
	<tr>
		<td style="padding: 5px"><?= $new->date ?></td>
		<td style="padding: 5px"><b><a href="<?= Url::to(['/site/view', 'id' => $new->id]); ?>"><?= $new->title ?></a></b></td>
	</tr>
<?php } ?>
</table>


