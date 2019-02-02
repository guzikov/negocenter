<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "company".
 *
 * @property int $id
 * @property string $name
 * @property string $site
 *
 * @property SegmentCompany[] $segmentCompanies
 * @property Segment[] $segments
 */
class Company extends \yii\db\ActiveRecord
{
    public function afterSave($insert, $changedAttributes)
    {
        $this->unlinkAll('segments', true);
        if (is_array($this->segments)){
            foreach ($this->segments as $segmentId){
                $segment = Segment::findOne($segmentId);
                $this->link('segments', $segment);
            }
        }
        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'site'], 'required'],
            [['name', 'site'], 'string', 'max' => 100],
            [['segments'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название компании',
            'site' => 'Сайт',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSegmentCompanies()
    {
        return $this->hasMany(SegmentCompany::className(), ['company_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSegments()
    {
        return $this->hasMany(Segment::className(), ['id' => 'segment_id'])->viaTable('segment_company', ['company_id' => 'id']);
    }

    /**
     * @param $segments array of Segments
     * Setting relations Segments
     */
    public function setSegments($segments)
    {
        $this->segments = $segments;
    }
}
