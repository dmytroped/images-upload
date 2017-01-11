<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\web\User;
$this->title = 'Image upload';
$model = new \frontend\models\UploadModel();
?>
<div class="site-index">
    <div class="jumbotron">
        <h1>Helo there!</h1>
    </div>
    <div class="body-content">
      <?php if (\Yii::$app->user->isGuest):?>
        <h1 class="text-center">Hello there. You need to register for upload images.</h1>
      <?php else:?>
        <div class="row">
            <table class="table table-responsive">
                <tr>
                    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

                    <td><?= $form->field($model, 'imageFile')->fileInput() ?></td>

                    <td><input type="submit" name="upload" value="Upload"></td>

                    <?php ActiveForm::end() ?>

                </tr>
                <?php foreach ($images as $image): ?>
                    <tr>
                        <td><img class="uploaded-image normal" id="<?php echo $image->id; ?>_image"
                                 src="uploads/<?php echo $image->image_name; ?>" alt="image"></td>
                        <td>
                            <button id="<?php echo $image->id; ?>" class="btn btn-default btn-sm test">Rotate</button>
                            <button id="<?php echo $image->image_name; ?>" class="btn btn-default btn-sm delete">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php $this->registerJsFile('js/script.js'); ?>