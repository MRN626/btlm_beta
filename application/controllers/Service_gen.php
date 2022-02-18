<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Service_gen extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Service_gen_model');
    } 

    /*
     * Listing of service_gen
     */
    function index()
    {
        $data['service_gen'] = $this->Service_gen_model->get_all_service_gen();
        
        $data['_view'] = 'service_gen/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new service_gen
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('NOM_COMPLET','NOM COMPLET','required');
		$this->form_validation->set_rules('SIGNATURE_SERVICE_GEN','SIGNATURE SERVICE GEN','is_unique[SERVICE GEN SIGNATURE]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'NOM_COMPLET' => $this->input->post('NOM_COMPLET'),
				'SIGNATURE_SERVICE_GEN' => $this->input->post('SIGNATURE_SERVICE_GEN'),
				'DATE_CREATION' => $this->input->post('DATE_CREATION'),
				'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
				'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
            );
            
            $service_gen_id = $this->Service_gen_model->add_service_gen($params);
            redirect('service_gen/index');
        }
        else
        {            
            $data['_view'] = 'service_gen/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a service_gen
     */
    function edit($ID)
    {   
        // check if the service_gen exists before trying to edit it
        $data['service_gen'] = $this->Service_gen_model->get_service_gen($ID);
        
        if(isset($data['service_gen']['ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('NOM_COMPLET','NOM COMPLET','required');
			$this->form_validation->set_rules('SIGNATURE_SERVICE_GEN','SIGNATURE SERVICE GEN','is_unique[SERVICE GEN SIGNATURE]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'NOM_COMPLET' => $this->input->post('NOM_COMPLET'),
					'SIGNATURE_SERVICE_GEN' => $this->input->post('SIGNATURE_SERVICE_GEN'),
					'DATE_CREATION' => $this->input->post('DATE_CREATION'),
					'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
					'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
                );

                $this->Service_gen_model->update_service_gen($ID,$params);            
                redirect('service_gen/index');
            }
            else
            {
                $data['_view'] = 'service_gen/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The service_gen you are trying to edit does not exist.');
    } 

    /*
     * Deleting service_gen
     */
    function remove($ID)
    {
        $service_gen = $this->Service_gen_model->get_service_gen($ID);

        // check if the service_gen exists before trying to delete it
        if(isset($service_gen['ID']))
        {
            $this->Service_gen_model->delete_service_gen($ID);
            redirect('service_gen/index');
        }
        else
            show_error('The service_gen you are trying to delete does not exist.');
    }
    
}
