<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Testapi extends REST_Controller {
    
     public function __construct()
	{
		parent::__construct();
		$this->load->model(['TestConnection_Model']);
    }	
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get()
	{  
        $data =  $this->TestConnection_Model->get_legal()->result();
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {
        $input = $this->input->post();
        $this->db->insert('items',$input);
        $this->response(['Item created successfully.'], REST_Controller::HTTP_OK);
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
    	
}