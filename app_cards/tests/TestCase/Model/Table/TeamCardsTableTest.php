<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TeamCardsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TeamCardsTable Test Case
 */
class TeamCardsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TeamCardsTable
     */
    public $TeamCards;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.team_cards',
        'app.teams',
        'app.users',
        'app.comments',
        'app.cards',
        'app.dies',
        'app.sets',
        'app.images',
        'app.affiliations',
        'app.globals',
        'app.inventories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('TeamCards') ? [] : ['className' => 'App\Model\Table\TeamCardsTable'];
        $this->TeamCards = TableRegistry::get('TeamCards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TeamCards);

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
