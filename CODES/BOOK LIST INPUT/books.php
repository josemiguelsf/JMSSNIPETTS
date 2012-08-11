//CONTROLLER Books.php
 <?
 class Books extends Controller{
   function Books(){
	parent::Controller();
  }
  function main(){
    $this->load->library('table');
	$this->load->model('books_model');
	$data = $this->books_model->general();
	$data['table'] = $this->books_model->getall();
	$this->load->view('books_main',$data);
  }

function input($id = 0){

	  $this->load->helper('form');  
	  $this->load->helper('html');      
	  $this->load->model('books_model');
	   
	  if($this->input->post('mysubmit')){
	      $this->books_model->entry_insert();
	  }
	  $data = $this->books_model->general();
	   
	  if((int)$id > 0){
	    $query = $this->books_model->get($id);
	    $data['fid']['value'] = $query['id'];
	    $data['ftitle']['value'] = $query['title'];
	    $data['fauthor']['value'] = $query['author'];
	    $data['fpublisher']['value'] = $query['publisher'];
	    $data['fyear']['value'] = $query['year'];
	    if($query['available']=='yes'){
	      $data['favailable']['checked'] = TRUE;
	    }else{
	      $data['favailable']['checked'] = FALSE;   
	    }
	    $data['fsummary']['value'] = $query['summary'];
	  }
	   
	               
	  $this->load->view('books_input',$data);   
	}
