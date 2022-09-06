<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TicketFixture
 */
class TicketFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ticket';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'ticketid' => 'Lorem ipsum dolor sit amet',
                'barcode' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'unitprice' => 1,
                'quantity' => 1,
                'date' => 1662428646,
            ],
        ];
        parent::init();
    }
}
