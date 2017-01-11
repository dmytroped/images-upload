<?php

use yii\db\Migration;

class m170111_090752_images_table extends Migration
{
  public function up()
  {
    $tableOptions = null;
    if ($this->db->driverName === 'mysql') {
        // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
    }
      $this->createTable('images', [
          'id' => $this->primaryKey(),
          'user_id' => $this->integer(),
          'image_name' => $this->string()
      ], $tableOptions);
  }

    public function down()
    {
        echo "m170111_090752_images_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
