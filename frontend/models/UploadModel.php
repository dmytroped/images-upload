<?php
namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * Imags model
 */
class UploadModel extends \yii\db\ActiveRecord
{
  public $imageFile;

  public static function tableName()
    {
        return 'images';
    }

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

}

?>