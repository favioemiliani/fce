<?php
class PollsController extends AppController {
    var $name = 'polls';
    var $authors = '';
    var $conditions = '';
    var $fields = '';
    var $order = '';
    var $scaffold;

    var $paginate = array(
                          'fields' => array('Poll.id',
                                            'Poll.apenom',
                                            'Poll.doc_number',
                                            'Poll.email',
                                            'Poll.phone'),
                          'limit' => 10,
                          'order' => array(
                                           'Poll.id' => 'desc'
                                           )
                          );

    function index(){
        $this->pageTitle = 'Registros disponibles';

        if (isset($_GET['namePoll'])) {
            $conditions = array(" namePoll LIKE '%$_GET[namePoll])%'");
            $fields = array("*");

        } else {
            $data = $this->paginate('Poll');
            $this->set('polls', $data);
        }
    }


    function edition(){
        $this->pageTitle = 'Registros disponibles';

        if (isset($_GET['namePoll'])) {
            $conditions = array(" namePoll LIKE '%$_GET[namePoll])%'");
            $fields = array("*");

        } else {
            $data = $this->paginate('Poll');
            $this->set('polls', $data);
        }
    }


    function view($id = null) {
        $this->Poll->id = $id;
        $this->set('poll', $this->Poll->read());
    }

    function add() {
        if (!empty($this->data)) {
            if ($this->Poll->save($this->data)) {
                $this->flash('Your poll has been saved.', '/polls');
                $this->redirect(array('controller' => 'polls', 'action' => 'index'));
            }
        }
    }

    function delete($id) {
        $this->Poll->delete($id);
        $this->flash('The poll with id: '.$id.' has been deleted.', '/polls');
        $this->redirect(array('controller' => 'polls', 'action' => 'edition'));

    }

    function edit($id = null) {
        $this->Poll->id = $id;
        if (empty($this->data)) {
            $this->data = $this->Poll->read();
        } else {
            if ($this->Poll->save($this->data)) {
                $this->flash('Your poll has been updated.','/polls');
                $this->redirect(array('controller' => 'polls', 'action' => 'edition'));

            }
        }
    }


    function search(){
        if (!empty($this->data)) {
            $searchstr = $this->data['Poll']['search'];
            $this->set('searchstring', $this->data['Poll']['search']);
            $conditions = array(
                                'conditions' => array(
                                                      'or' => array(
                                                                    "Poll.apenom LIKE" => "%$searchstr%",
                                                                    "Poll.doc_number LIKE" => "%$searchstr%"
                                                                    )
                                                      )
                                );
            $this->set('polls', $this->Poll->find('all', $conditions));
        }
    }



  }


?>
