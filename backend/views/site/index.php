<?php

/* @var $this yii\web\View */
/** @var $latestVideo \common\models\Video */
/** @var $numberOfView integer */
/** @var $numberOfSubscribers integer */
/** @var $subscribers \common\models\Subscriber[] */
use \yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex">
<div class="card m-2" style="width: 14rem;">
<?php if ($latestVideo): ?>
<div class="embed-responsive embed-responsive-16by9 mb-3">
                <video class="embed-responsive-item"
                       poster="<?php echo $latestVideo->getThumbnailLink()?>"
                       src="<?php echo $latestVideo->getVideoLink() ?>" ></video>
            </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $latestVideo->title ?></h5>
    <p class="card-text">
        Likes : <?php echo $latestVideo->getLikes()->count() ?>
        Views : <?php echo $latestVideo->getViews()->count() ?>
    </p>
    <a href="<?php echo Url::to(['/video/update',
     'id' => $latestVideo->video_id]) ?>" 
     class="btn btn-primary">Edit</a>
  </div>
  <?php else: ?>
        <div class="card-body">
            You don't have uploaded videos yet
        </div>
    <?php endif; ?>
</div>
<div class="card m-2" style="width: 14rem;">
  <div class="card-body">
    <h5 class="card-title">Total Views</h5>
    <p class="card-text" style="font-size: 72px">
    <?php echo $numberOfView ?>
    </p>
  </div>
</div>
<div class="card m-2" style="width: 14rem;">
  <div class="card-body">
    <h5 class="card-title">Total Subscribers</h5>
    <p class="card-text" style="font-size: 72px">
    <?php echo $numberOfSubscribers ?>
    </p>
  </div>
</div>
<div class="card m-2" style="width: 14rem;">
  <div class="card-body">
    <h5 class="card-title">Latest Subscribers</h5>
    <?php foreach ($subscribers as $subscriber): ?>
        <div>
        <?php  echo $subscriber->user->username ?>
        </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
