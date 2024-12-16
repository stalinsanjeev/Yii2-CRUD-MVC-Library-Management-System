<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'YII 2 Library Management CRUD Application';
?>
<div class="site-index">

    <h1>Create posts </h1>
   
    <div class="body-content">
        <?php
            $form = ActiveForm::begin()?>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'title');?>
                </div>
             </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'description')->textarea(['rows'=>'6']);?>
                </div>
             </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
<?php $items = ['Science Fiction'=>'Science Fiction', 'Horror'=>'Horror','Thriller'=>'Thriller',];?>
                    <?= $form->field($post, 'category')->dropDownList($items, ['prompt'=>'Select item']);?>
                </div>
             </div>
        </div>

        <div class="row">
                    <div class="col-lg-3">
                        <?= Html::submitButton('Create post', ['class' => 'btn btn-primary']);?>
                    </div>
                    <div class="col-lg-3">
                        <a href=<?php echo yii::$app->homeUrl;?> class= 'btn btn-primary'>Go Back</a>
                    </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
