<?php
  /** @var $this \yii\web\View */
/** @var $dataProvider \yii\data\ActiveDataProvider */
?>
<h1>Found Videos</h1>
<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
      'tag' => false,
    ]
]) ?>