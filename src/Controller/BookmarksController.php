<?php
declare(strict_types=1);

namespace App\Controller;

class BookmarksController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        // $this->set('bookmarks', $this->bookmarks->find('all'));
        $bookmarks = $this->Bookmarks->find('all');
        $this->set(compact('bookmarks'));
    }
    
    public function view($id = null)
    {
        // get() get single bookmark 
        $bookmark = $this->Bookmarks->get($id);
        $this->set(compact('bookmark'));
    }

    public function add()
    {
        $bookmark = $this->Bookmarks->newEmptyEntity();
        if ($this->request->is('post')) {
            $bookmark = $this->Bookmarks->patchEntity($bookmark, $this->request->getData());
            if ($this->Bookmarks->save($bookmark)) {
                $this->Flash->success(__('Your bookmark has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your bookmark.'));
        }
        $this->set('bookmark', $bookmark);
    }
}