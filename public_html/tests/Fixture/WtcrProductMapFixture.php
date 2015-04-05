<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WtcrProductMapFixture
 *
 */
class WtcrProductMapFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'wtcr_product_map';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'A unique ID for the product', 'autoIncrement' => true, 'precision' => null],
        'wtcr_vendor_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The Supplier that offers the product', 'precision' => null, 'autoIncrement' => null],
        'mfg_part_num' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => 'Part # The Manufacturer Uses', 'precision' => null, 'fixed' => null],
        'wtcrsku' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'comment' => 'The SKU used by WTCR to identify the product', 'precision' => null, 'fixed' => null],
        'wtcr_product_category_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The category the product falls in', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'comment' => 'A description of the product', 'precision' => null, 'fixed' => null],
        'wtcr_vendor_sku' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => 'The SKU used by the supplier to identify the product', 'precision' => null, 'fixed' => null],
        'supplierstock' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'comment' => 'The product stock the supplier has advertised', 'precision' => null, 'fixed' => null],
        'autoupdate' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '1 if Product Should Auto Update Price, 0 otherwise.', 'precision' => null, 'autoIncrement' => null],
        'suggestedprice' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'comment' => 'The Price Suggested based on Current Markup', 'precision' => null, 'fixed' => null],
        'suggestedmarkup' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'comment' => 'The Suggested Markup Percentage for a Product', 'precision' => null, 'fixed' => null],
        'wtcrprice' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'comment' => 'The Price WTCR Charges', 'precision' => null, 'fixed' => null],
        'createnode' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '0 if no node, 1 if the product has a node', 'precision' => null, 'autoIncrement' => null],
        'wtcr_nid' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'comment' => 'The NID of the Product on WTCRs Website', 'precision' => null, 'fixed' => null],
        'lastupdated' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => 'The date/time this product was last updated from supplier', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id', 'createnode', 'wtcr_product_category_id'], 'length' => []],
            'suppliersku' => ['type' => 'unique', 'columns' => ['wtcr_vendor_sku'], 'length' => []],
            'manufacturersku' => ['type' => 'unique', 'columns' => ['mfg_part_num'], 'length' => []],
            'nid' => ['type' => 'unique', 'columns' => ['wtcr_nid'], 'length' => []],
        ],
        '_options' => [
'engine' => 'InnoDB', 'collation' => 'utf8_general_ci'
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
            'id' => 1,
            'wtcr_vendor_id' => 1,
            'mfg_part_num' => 'Lorem ipsum dolor sit amet',
            'wtcrsku' => 'Lorem ipsum dolor sit amet',
            'wtcr_product_category_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet',
            'wtcr_vendor_sku' => 'Lorem ipsum dolor sit amet',
            'supplierstock' => 'Lorem ipsum dolor sit amet',
            'autoupdate' => 1,
            'suggestedprice' => 'Lorem ipsum dolor sit amet',
            'suggestedmarkup' => 'Lorem ipsum dolor sit amet',
            'wtcrprice' => 'Lorem ipsum dolor sit amet',
            'createnode' => 1,
            'wtcr_nid' => 'Lorem ip',
            'lastupdated' => '2015-04-05 07:03:47'
        ],
    ];
}
