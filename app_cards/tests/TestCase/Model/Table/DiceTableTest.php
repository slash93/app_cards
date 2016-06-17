<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiceTable Test Case
 */
class DiceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiceTable
     */
    public $Dice;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.dice'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Dice') ? [] : ['className' => 'App\Model\Table\DiceTable'];
        $this->Dice = TableRegistry::get('Dice', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Dice);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
