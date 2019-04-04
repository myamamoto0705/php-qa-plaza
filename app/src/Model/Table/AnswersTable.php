<?php

namespace App\Model\Table;

use Cake\ORM\Table;

/**
 * Answers model
 */
class AnswersTable extends Table
{
  /**
   * @inheritdoc
   */
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('answers'); // 使用されるテーブル
    $this->setDisplayField('id'); // List形式でデータ取得する際に使用されるカラム
    $this->setPrimaryKey('id'); // プライマリキーとなるカラム

    $this->addBehavior('Timestamp'); // created及びmodifiedカラムを自動設定する

    $this->belongsTo('Questions', [
        'foreignKey' => 'question_id',
        'joinType' => 'INNER'
    ]);
  }
}
