<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "segment".
 *
 * @property int $id
 * @property string $name
 * @property string $icon
 *
 * @property SegmentCompany[] $segmentCompanies
 * @property Company[] $companies
 */
class Segment extends \yii\db\ActiveRecord
{
    public function afterSave($insert, $changedAttributes)
    {
        $this->unlinkAll('companies', true);
        if (is_array($this->companies)){
            foreach ($this->companies as $companyId){
                $company = Company::findOne($companyId);
                $this->link('companies', $company);
            }
        }

        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'segment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'icon'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['icon'], 'string', 'max' => 100],
            [['companies'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Сегмент',
            'icon' => 'Иконка',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSegmentCompanies()
    {
        return $this->hasMany(SegmentCompany::className(), ['segment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['id' => 'company_id'])->viaTable('segment_company', ['segment_id' => 'id']);
    }

    /*
     * Setting relations Companies
     */
    public function setCompanies($companies){
        return $this->companies = $companies;
    }
}
