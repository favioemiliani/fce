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

  function view($id = null) {
	$this->Poll->id = $id;
	$this->set('poll', $this->Poll->read());
}

  function add() {
    $data_array = $this->Poll->Province->find('all',array('fields' => array('Province.id','Province.name')));
    $data_combine = Set::combine($data_array,'{n}.Province.id','{n}.Province.name');
    $this->set('selectdata',$data_combine);

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
                $this->redirect(array('controller' => 'polls', 'action' => 'index'));

	}

        function edit($id = null) {
              $data_array = $this->Poll->Province->find('all',array('fields' => array('Province.id', 
      'Province.provincia')));
              $data_combine = Set::combine($data_array,'{n}.Province.id','{n}.Province.provincia');
              $this->set('selectdata',$data_combine);


		$this->Poll->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Poll->read();
		} else {
			if ($this->Poll->save($this->data)) {
                         $this->flash('Your poll has been updated.','/polls');
                         $this->redirect(array('controller' => 'polls', 'action' => 'index'));

			}
		}
	}
}


?>
