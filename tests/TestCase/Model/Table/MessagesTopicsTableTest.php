<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MessagesTopicsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MessagesTopicsTable Test Case
 */
class MessagesTopicsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MessagesTopicsTable
     */
    public $MessagesTopics;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.messages_topics',
        'app.topics',
        'app.users',
        'app.galeries',
        'app.voyages'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MessagesTopics') ? [] : ['className' => MessagesTopicsTable::class];
        $this->MessagesTopics = TableRegistry::get('MessagesTopics', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MessagesTopics);

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
