<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArticleFixture
 */
class ArticleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'article';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'barcode' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'image' => 'Lorem ipsum dolor sit amet',
                'quantity' => 1,
                'adddate' => 1662428380,
                'description' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
