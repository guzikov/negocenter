<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%segment}}`.
 */
class m190202_102413_create_segment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%segment}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'icon' => $this->string(100)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%segment}}');
    }
}
