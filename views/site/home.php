


<?php
$url = Yii::getAlias("@web") . '/images/';
?>

<div class="section mcb-section d-flex justify-content-center align-items-center" style="background:url(<?= $url ?>img5.jpg); background-repeat:no-repeat; background-position:center center; background-size: cover; min-height: 100vh; width: 100vw;">

<?php
use yii\helpers\html;

/** @var yii\web\View $this */

$this->title = 'YII 2 Library Management CRUD Application';
?>
<div class="site-index">
    <?php if(yii::$app->session->hasFlash('message')):?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-bs-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
     <?php endif;?>
    <div class="jumbotron text-center bg-transparent">
        <h1 style= "color: #034d8c;"class="display-4">YII2 Library Management CRUD Application </h1>


    </div>
    <div class="row">
        <span style="margin-bottom: 20px;"> <?= Html::a('Create',['/site/create/'],['class' => 'btn btn-primary'])?></span>
    </div>

    <div class="body-content">
        <div class="row">
                <table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col"> Description</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($posts) > 0 ): ?>
            <?php foreach($posts as $post): ?>
            <tr class="table-default">
            <th scope="row"><?php echo $post->id;?></th>
            <td><?php echo $post->title;?> </td>
            <td style="max-width: 200px; word-wrap: break-word; white-space: normal;">
                <?= \yii\helpers\StringHelper::truncate($post->description, 100, '...'); ?>
            </td>
            <td> <?php echo $post->category;?></td>
            <td>
                
            <span><?= Html::a('View', ['view', 'id'=> $post->id], ['class' => 'btn btn-primary btn-sm']) ?></span>
            <span><?= Html::a('Update', ['update', 'id'=> $post->id], ['class' => 'btn btn-success btn-sm']) ?></span>
            <span><?= Html::a('Delete', ['delete', 'id'=> $post->id], ['class' => 'btn btn-danger btn-sm', 'data-method' => 'post']) ?></span>

            </td>
            </tr>
                 <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>No records found!</td>
                </tr>
            <?php endif;?>
  </tbody>
</table>
        
        </div>

    </div>
</div>
