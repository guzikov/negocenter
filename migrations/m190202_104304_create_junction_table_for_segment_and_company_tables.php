<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%segment_company}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%segment}}`
 * - `{{%company}}`
 */
class m190202_104304_create_junction_table_for_segment_and_company_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%segment_company}}', [
            'segment_id' => $this->integer(),
            'company_id' => $this->integer(),
            'PRIMARY KEY(segment_id, company_id)',
        ]);

        // creates index for column `segment_id`
        $this->createIndex(
            '{{%idx-segment_company-segment_id}}',
            '{{%segment_company}}',
            'segment_id'
        );

        // add foreign key for table `{{%segment}}`
        $this->addForeignKey(
            '{{%fk-segment_company-segment_id}}',
            '{{%segment_company}}',
            'segment_id',
            '{{%segment}}',
            'id',
            'CASCADE'
        );

        // creates index for column `company_id`
        $this->createIndex(
            '{{%idx-segment_company-company_id}}',
            '{{%segment_company}}',
            'company_id'
        );

        // add foreign key for table `{{%company}}`
        $this->addForeignKey(
            '{{%fk-segment_company-company_id}}',
            '{{%segment_company}}',
            'company_id',
            '{{%company}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%segment}}`
        $this->dropForeignKey(
            '{{%fk-segment_company-segment_id}}',
            '{{%segment_company}}'
        );

        // drops index for column `segment_id`
        $this->dropIndex(
            '{{%idx-segment_company-segment_id}}',
            '{{%segment_company}}'
        );

        // drops foreign key for table `{{%company}}`
        $this->dropForeignKey(
            '{{%fk-segment_company-company_id}}',
            '{{%segment_company}}'
        );

        // drops index for column `company_id`
        $this->dropIndex(
            '{{%idx-segment_company-company_id}}',
            '{{%segment_company}}'
        );

        $this->dropTable('{{%segment_company}}');
    }
}
