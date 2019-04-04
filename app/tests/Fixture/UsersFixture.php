<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{
  /**public $fields = [
   * テーブルのフィールド情報
   *
   * @var array
   */
  //@codingStandardsIgnoreStart
  public $fields = [
      'id' => ['type' => 'integer', 'lebgth' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'Comment' => '', 'autoIncrement' => true,'precision' => null],
      'usename' =>['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
      'password' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
      'nickname' => ['type' => 'string', 'length' => 32, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
      'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
      'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => '', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null],
      '_constraints' => [
          'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' =>[]],
          'username' => ['type' => 'unique', 'columns' => ['username'], 'lengeth' =>[]],
      ],
      '_options' => [
          'engine' => 'InnoDB',
          'collation' => 'utf8mb4_general_ci',
      ],
  ];
  //@codingStandardsIgnoreEnd

  /**
   * @inheritdoc
   */
  public function init()
  {
    $this->records = [
      [
        'id' => 1,
        'username' => 'itosho',
        'password' => 'password1',
        'nickname' => 'いとしょ',
        'created' => '2018-12-01 10:00:00',
        'modified' => '2018-12-01 10:00:00'
      ],
      [
        'id' => 2,
        'username' => 'forckle',
        'password' => 'password2',
        'nickname' => 'ふくあき',
        'created' => '2018-12-02 10:00:00',
        'modified' => '2018-12-02 10:00:00'
      ]
    ];
    parent::init();
  }
}
