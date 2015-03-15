<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 *
 */
class UsersFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'u_user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'u_user_name' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'u_password' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_secretkey' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_first_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'u_last_name' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'u_email' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'u_user_class' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'u_disabled' => ['type' => 'binary', 'length' => 1, 'null' => false, 'default' => '0', 'comment' => '', 'precision' => null],
        'u_created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_session' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_cookie' => ['type' => 'string', 'fixed' => true, 'length' => 32, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_ip' => ['type' => 'string', 'length' => 15, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'u_last_login' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'u_customer_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '-99', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'u_company_name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['u_user_id'], 'length' => []],
            'u_user_name' => ['type' => 'unique', 'columns' => ['u_user_name'], 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'u_user_id' => 1,
            'u_user_name' => 'Lorem ipsum dolor sit amet',
            'u_password' => 'Lorem ipsum dolor sit amet',
            'u_secretkey' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'u_first_name' => 'Lorem ipsum dolor sit amet',
            'u_last_name' => 'Lorem ipsum dolor sit amet',
            'u_email' => 'Lorem ipsum dolor sit amet',
            'u_user_class' => 1,
            'u_disabled' => 'Lorem ipsum dolor sit ame',
            'u_created' => '2015-03-15 06:22:57',
            'u_session' => 'Lorem ipsum dolor sit amet',
            'u_cookie' => 'Lorem ipsum dolor sit amet',
            'u_ip' => 'Lorem ipsum d',
            'u_last_login' => '2015-03-15 06:22:57',
            'u_customer_id' => 1,
            'u_company_name' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
