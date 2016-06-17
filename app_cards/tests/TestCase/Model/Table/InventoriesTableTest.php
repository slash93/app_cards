<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InventoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InventoriesTable Test Case
 */
class InventoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InventoriesTable
     */
    public $Inventories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.inventories',
        'app.users',
        'app.comments',
        'app.cards',
        'app.dies',
        'app.sets',
        'app.images',
        'app.affiliations',
        'app.globals',
        'app.team_cards',
        'app.teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Inventories') ? [] : ['className' => 'App\Model\Table\InventoriesTable'];
        $this->Inventories = TableRegistry::get('Inventories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Inventories);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
