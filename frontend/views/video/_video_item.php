<?php
/**@var $model  \common\models\Video */
?>
<div class="card m-3" style="width: 14rem;">
  <a href="<?php echo \yii\helpers\Url::to(['/video/view', 'id' => $model->video_id]) ?>">
  <div class="embed-responsive embed-responsive-16by9">
        <video class="embed-responsive-item"
                poster="<?php echo $model->getThumbnailLink()?>"
                src="<?php echo $model->getVideoLink() ?>" ></video>
    </div>
  </a>
  <div class="card-body p-2">
    <h6 class="card-title m-2"><?php echo $model->title ?></h6>
    <p class="text-muted m-2">
    <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
    </p>
    <p class="text-muted m-2">
    <?php echo $model->getViews()->count() ?> . 
    <?php echo Yii::$app->formatter->asRelativeTime($model->created_at) ?>
    </p>
     </div>
</div>