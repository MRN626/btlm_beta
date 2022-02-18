<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Fiche_de_besoin extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Fiche_de_besoin_model');
    } 

    /*
     * Listing of fiche_de_besoin
     */
    function index()
    {
        $data['fiche_de_besoin'] = $this->Fiche_de_besoin_model->get_all_fiche_de_besoin();
        
        $data['_view'] = 'fiche_de_besoin/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new fiche_de_besoin
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('SIGNATURE_CHEF_DEP','SIGNATURE CHEF DEP','is_unique[CHEF DEPARTEMENT SIGNATURE]');
		$this->form_validation->set_rules('SIGNATURE_SERVICE_GEN','SIGNATURE SERVICE GEN','is_unique[SERVICE GEN SIGNATURE]');
		$this->form_validation->set_rules('SIGNATURE_DAF','SIGNATURE DAF','is_unique[DAF SIGNATURE]');
		$this->form_validation->set_rules('SIGNATURE_DG','SIGNATURE DG','is_unique[DG SIGNATURE]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'ID_AGENT' => $this->input->post('ID_AGENT'),
				'ID_SERVICE_GEN' => $this->input->post('ID_SERVICE_GEN'),
				'ID_CHEF_DEP' => $this->input->post('ID_CHEF_DEP'),
				'NOM_PRODUIT' => $this->input->post('NOM_PRODUIT'),
				'DESCRIPTION' => $this->input->post('DESCRIPTION'),
				'RAISON' => $this->input->post('RAISON'),
				'DEPARTEMENT' => $this->input->post('DEPARTEMENT'),
				'NOM_DEMANDEUR' => $this->input->post('NOM_DEMANDEUR'),
				'TELEPHONE_DEMANDEUR' => $this->input->post('TELEPHONE_DEMANDEUR'),
				'DATE_LIVRAISON_SOUHAITE' => $this->input->post('DATE_LIVRAISON_SOUHAITE'),
				'ADRESSE_LIVRAISON' => $this->input->post('ADRESSE_LIVRAISON'),
				'HEURE_LIVRAISON' => $this->input->post('HEURE_LIVRAISON'),
				'ETAT_FICHE' => $this->input->post('ETAT_FICHE'),
				'SIGNATURE_CHEF_DEP' => $this->input->post('SIGNATURE_CHEF_DEP'),
				'SIGNATURE_SERVICE_GEN' => $this->input->post('SIGNATURE_SERVICE_GEN'),
				'SIGNATURE_DAF' => $this->input->post('SIGNATURE_DAF'),
				'SIGNATURE_DG' => $this->input->post('SIGNATURE_DG'),
				'PROFORMAT_1' => $this->input->post('PROFORMAT_1'),
				'PROFORMAT_2' => $this->input->post('PROFORMAT_2'),
				'PROFORMAT_3' => $this->input->post('PROFORMAT_3'),
				'DATE_CREATION' => $this->input->post('DATE_CREATION'),
				'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
				'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
            );
            
            $fiche_de_besoin_id = $this->Fiche_de_besoin_model->add_fiche_de_besoin($params);
            redirect('fiche_de_besoin/index');
        }
        else
        {
			$this->load->model('Agent_model');
			$data['all_agent'] = $this->Agent_model->get_all_agent();

			$this->load->model('Service_gen_model');
			$data['all_service_gen'] = $this->Service_gen_model->get_all_service_gen();

			$this->load->model('Chef_departement_model');
			$data['all_chef_departement'] = $this->Chef_departement_model->get_all_chef_departement();
            
            $data['_view'] = 'fiche_de_besoin/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a fiche_de_besoin
     */
    function edit($ID)
    {   
        // check if the fiche_de_besoin exists before trying to edit it
        $data['fiche_de_besoin'] = $this->Fiche_de_besoin_model->get_fiche_de_besoin($ID);
        
        if(isset($data['fiche_de_besoin']['ID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('SIGNATURE_CHEF_DEP','SIGNATURE CHEF DEP','is_unique[CHEF DEPARTEMENT SIGNATURE]');
			$this->form_validation->set_rules('SIGNATURE_SERVICE_GEN','SIGNATURE SERVICE GEN','is_unique[SERVICE GEN SIGNATURE]');
			$this->form_validation->set_rules('SIGNATURE_DAF','SIGNATURE DAF','is_unique[DAF SIGNATURE]');
			$this->form_validation->set_rules('SIGNATURE_DG','SIGNATURE DG','is_unique[DG SIGNATURE]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'ID_AGENT' => $this->input->post('ID_AGENT'),
					'ID_SERVICE_GEN' => $this->input->post('ID_SERVICE_GEN'),
					'ID_CHEF_DEP' => $this->input->post('ID_CHEF_DEP'),
					'NOM_PRODUIT' => $this->input->post('NOM_PRODUIT'),
					'DESCRIPTION' => $this->input->post('DESCRIPTION'),
					'RAISON' => $this->input->post('RAISON'),
					'DEPARTEMENT' => $this->input->post('DEPARTEMENT'),
					'NOM_DEMANDEUR' => $this->input->post('NOM_DEMANDEUR'),
					'TELEPHONE_DEMANDEUR' => $this->input->post('TELEPHONE_DEMANDEUR'),
					'DATE_LIVRAISON_SOUHAITE' => $this->input->post('DATE_LIVRAISON_SOUHAITE'),
					'ADRESSE_LIVRAISON' => $this->input->post('ADRESSE_LIVRAISON'),
					'HEURE_LIVRAISON' => $this->input->post('HEURE_LIVRAISON'),
					'ETAT_FICHE' => $this->input->post('ETAT_FICHE'),
					'SIGNATURE_CHEF_DEP' => $this->input->post('SIGNATURE_CHEF_DEP'),
					'SIGNATURE_SERVICE_GEN' => $this->input->post('SIGNATURE_SERVICE_GEN'),
					'SIGNATURE_DAF' => $this->input->post('SIGNATURE_DAF'),
					'SIGNATURE_DG' => $this->input->post('SIGNATURE_DG'),
					'PROFORMAT_1' => $this->input->post('PROFORMAT_1'),
					'PROFORMAT_2' => $this->input->post('PROFORMAT_2'),
					'PROFORMAT_3' => $this->input->post('PROFORMAT_3'),
					'DATE_CREATION' => $this->input->post('DATE_CREATION'),
					'DATE_MODIFICATION' => $this->input->post('DATE_MODIFICATION'),
					'DATE_SUPPRESSION' => $this->input->post('DATE_SUPPRESSION'),
                );

                $this->Fiche_de_besoin_model->update_fiche_de_besoin($ID,$params);            
                redirect('fiche_de_besoin/index');
            }
            else
            {
				$this->load->model('Agent_model');
				$data['all_agent'] = $this->Agent_model->get_all_agent();

				$this->load->model('Service_gen_model');
				$data['all_service_gen'] = $this->Service_gen_model->get_all_service_gen();

				$this->load->model('Chef_departement_model');
				$data['all_chef_departement'] = $this->Chef_departement_model->get_all_chef_departement();

                $data['_view'] = 'fiche_de_besoin/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The fiche_de_besoin you are trying to edit does not exist.');
    } 

    /*
     * Deleting fiche_de_besoin
     */
    function remove($ID)
    {
        $fiche_de_besoin = $this->Fiche_de_besoin_model->get_fiche_de_besoin($ID);

        // check if the fiche_de_besoin exists before trying to delete it
        if(isset($fiche_de_besoin['ID']))
        {
            $this->Fiche_de_besoin_model->delete_fiche_de_besoin($ID);
            redirect('fiche_de_besoin/index');
        }
        else
            show_error('The fiche_de_besoin you are trying to delete does not exist.');
    }
    
}
