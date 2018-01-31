<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MessagesTopics Controller
 *
 * @property \App\Model\Table\MessagesTopicsTable $MessagesTopics
 *
 * @method \App\Model\Entity\MessagesTopic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MessagesTopicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Topics', 'Users']
        ];
        $messagesTopics = $this->paginate($this->MessagesTopics);

        $this->set(compact('messagesTopics'));
    }

    /**
     * View method
     *
     * @param string|null $id Messages Topic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $messagesTopic = $this->MessagesTopics->get($id, [
            'contain' => ['Topics', 'Users']
        ]);

        $this->set('messagesTopic', $messagesTopic);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($id)
    {
        $messagesTopic = $this->MessagesTopics->newEntity();
        if ($this->request->is('post')) {
            $messagesTopic = $this->MessagesTopics->patchEntity($messagesTopic, $this->request->getData());
            
            $messagesTopic->topic_id = $id;
            
            if ($this->MessagesTopics->save($messagesTopic)) {
                $this->Flash->success(__('The messages topic has been saved.'));

                return $this->redirect(['controller' => 'Topics', 'action' => 'index']);
            }
            $this->Flash->error(__('The messages topic could not be saved. Please, try again.'));
        }
        $topics = $this->MessagesTopics->Topics->find('list', ['limit' => 200]);
        $users = $this->MessagesTopics->Users->find('list', ['limit' => 200]);
        $this->set(compact('messagesTopic', 'topics', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Messages Topic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $messagesTopic = $this->MessagesTopics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $messagesTopic = $this->MessagesTopics->patchEntity($messagesTopic, $this->request->getData());
            if ($this->MessagesTopics->save($messagesTopic)) {
                $this->Flash->success(__('The messages topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The messages topic could not be saved. Please, try again.'));
        }
        $topics = $this->MessagesTopics->Topics->find('list', ['limit' => 200]);
        $users = $this->MessagesTopics->Users->find('list', ['limit' => 200]);
        $this->set(compact('messagesTopic', 'topics', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Messages Topic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $messagesTopic = $this->MessagesTopics->get($id);
        if ($this->MessagesTopics->delete($messagesTopic)) {
            $this->Flash->success(__('The messages topic has been deleted.'));
        } else {
            $this->Flash->error(__('The messages topic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
