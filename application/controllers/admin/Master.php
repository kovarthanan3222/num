<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('admin/Master_model');
    }

    public function index() {
        $this->load->view('admin/header_view');
        $this->load->view('admin/service_provider_view');
         $this->load->view('admin/footer_view');
    }
    
    public function city() {

        $tableName = "city";
        
        /*Back End Validation*/
        
        $this->form_validation->set_rules('city', 'city', 'trim|required|xss_clean');
        
        /* Insert and Update*/
        
        if ($this->form_validation->run() != FALSE) {

            $cityName = $this->input->post('city');
            
            if ($this->input->post('formSubmit') == "Add") { //Insert Section
                
                $data = array(
                    'city_name' => $cityName,
                    'status' => "active",
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->Master_model->insert($data, $tableName);
                $this->session->set_flashdata('success_message', 'City Inserted successfully');
                
            } else if ($this->input->post('formSubmit') == "Update") { //Update Section
                
                $condition = array("city_id" => $this->uri->segment(5));
                $updateData = array("city_name" => $cityName);
                $this->Master_model->update($condition, $updateData, $tableName);
                $this->session->set_flashdata('success_message', 'City Updated successfully');
                redirect(base_url() . 'admin/master/city', 'refresh');
                
            }
        }
        /*  Load Edit Data */
        if ($this->uri->segment(4) == "edit") {
            
            $condition = array( "city_id" => $this->uri->segment(5) );
            $viewData["editData"] = $this->Master_model->editData( $condition, $this->uri->segment(5), $tableName );
        }
        /*  Delete Data  Section*/
        if ($this->uri->segment(4) == "delete") {
            
            $condition = array( "city_id" => $this->uri->segment(5) );
            $this->Master_model->delete( $condition, $this->uri->segment(5), $tableName );
            $this->session->set_flashdata('success_message', 'City Deleted successfully');
            redirect(base_url() . 'admin/master/city');
            
        }
        
        /*  Load view Data  Section*/
        
        $viewData["cityList"] = $this->Master_model->datalist($tableName);

        $this->load->view('admin/header_view');
        $this->load->view('admin/city_view', $viewData);
        $this->load->view('admin/footer_view');
    }
    /*  
     *  City Master Ends
     */
    
    public function area() {

        $tableName = "area";
        
        /*Back End Validation*/
        
        $this->form_validation->set_rules('cityId', 'cityId', 'trim|required|xss_clean');
        $this->form_validation->set_rules('area', 'area', 'trim|required|xss_clean');
        
        /* Insert and Update*/
        
        if ($this->form_validation->run() != FALSE) {

            $cityId = $this->input->post('cityId');
            $areaName = $this->input->post('area');
            
            if ($this->input->post('formSubmit') == "Add") { //Insert Section
                
                $data = array(
                    'area_name' => $areaName,
                    'city_id' => $cityId,
                    'status' => "active",
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->Master_model->insert($data, $tableName);
                $this->session->set_flashdata('success_message', 'Area Inserted successfully');
                
            } else if ($this->input->post('formSubmit') == "Update") { //Update Section
                
                $condition = array("area_id" => $this->uri->segment(5));
                $updateData = array("area_name" => $areaName, "city_id" => $cityId);
                $this->Master_model->update($condition, $updateData, $tableName);
                $this->session->set_flashdata('success_message', 'Area Updated successfully');
                redirect(base_url() . 'admin/master/area', 'refresh');
                
            }
        }
        /*  Load Edit Data */
        
        if ($this->uri->segment(4) == "edit") {
            
            $condition = array( "area_id" => $this->uri->segment(5) );
            $viewData["editData"] = $this->Master_model->editData( $condition, $this->uri->segment(5), $tableName );
        }
        /*  Delete Data  Section*/
        
        if ($this->uri->segment(4) == "delete") {
            
            $condition = array( "area_id" => $this->uri->segment(5) );
            $this->Master_model->delete( $condition, $this->uri->segment(5), $tableName );
            $this->session->set_flashdata( 'success_message', 'Area Deleted successfully' );
            redirect(base_url() . 'admin/master/area', 'refresh');
        }
        
        /*  Load view Data  Section*/
        
        $viewData["areaList"] = $this->Master_model->areaList();
        $viewData["cityList"] = $this->Master_model->datalist("city");

        $this->load->view('admin/header_view');
        $this->load->view('admin/area_view', $viewData);
        $this->load->view('admin/footer_view');
    }
    /*  
     *  Area Master Ends
     */
    
    
    public function category() {

        $tableName = "category";
        
        /*Back End Validation*/
        
        $this->form_validation->set_rules('category', 'category', 'trim|required|xss_clean');
        
        /* Insert and Update*/
        
        if ($this->form_validation->run() != FALSE) {

            $categoryName = $this->input->post('category');
            
            if ($this->input->post('formSubmit') == "Add") { //Insert Section
                
                $data = array(
                    'category_name' => $categoryName,
                    'status' => "active",
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->Master_model->insert($data, $tableName);
                $this->session->set_flashdata('success_message', 'Category Inserted successfully');
                
            } else if ($this->input->post('formSubmit') == "Update") { //Update Section
                
                $condition = array("category_id" => $this->uri->segment(5));
                $updateData = array("category_name" => $categoryName);
                $this->Master_model->update($condition, $updateData, $tableName);
                $this->session->set_flashdata('success_message', 'Category Updated successfully');
                redirect(base_url() . 'admin/master/category', 'refresh');
                
            }
        }
        /*  Load Edit Data */
        if ($this->uri->segment(4) == "edit") {
            
            $condition = array( "category_id" => $this->uri->segment(5) );
            $viewData["editData"] = $this->Master_model->editData( $condition, $this->uri->segment(5), $tableName );
        }
        /*  Delete Data  Section*/
        if ($this->uri->segment(4) == "delete") {
            
            $condition = array( "category_id" => $this->uri->segment(5) );
            $this->Master_model->delete( $condition, $this->uri->segment(5), $tableName );
            $this->session->set_flashdata('success_message', 'Category Deleted successfully');
            redirect(base_url() . 'admin/master/category', 'refresh');
            
        }
        
        /*  Load view Data  Section*/
        
        $viewData["categoryList"] = $this->Master_model->datalist($tableName);

        $this->load->view('admin/header_view');
        $this->load->view('admin/category_view', $viewData);
        $this->load->view('admin/footer_view');
    }
    /*  
     *  Category Master Ends
     */
    
    public function company() {

        $tableName = "company";
        
        /*Back End Validation*/
        
        $this->form_validation->set_rules('categoryId', 'categoryId', 'trim|required|xss_clean');
        $this->form_validation->set_rules('company', 'company', 'trim|required|xss_clean');
        
        /* Insert and Update*/
        
        if ($this->form_validation->run() != FALSE) {

            $categoryId = $this->input->post('categoryId');
            $companyName = $this->input->post('company');
            
            if ($this->input->post('formSubmit') == "Add") { //Insert Section
                
                $data = array(
                    'company_name' => $companyName,
                    'category_id' => $categoryId,
                    'status' => "active",
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->Master_model->insert($data, $tableName);
                $this->session->set_flashdata('success_message', 'Company Inserted successfully');
                
            } else if ($this->input->post('formSubmit') == "Update") { //Update Section
                
                $condition = array("company_id" => $this->uri->segment(5));
                $updateData = array("company_name" => $companyName, "category_id" => $categoryId);
                $this->Master_model->update($condition, $updateData, $tableName);
                $this->session->set_flashdata('success_message', 'Company Updated successfully');
                redirect(base_url() . 'admin/master/company', 'refresh');
                
            }
        }
        /*  Load Edit Data */
        
        if ($this->uri->segment(4) == "edit") {
            
            $condition = array( "company_id" => $this->uri->segment(5) );
            $viewData["editData"] = $this->Master_model->editData( $condition, $this->uri->segment(5), $tableName );
        }
        /*  Delete Data  Section*/
        
        if ($this->uri->segment(4) == "delete") {
            
            $condition = array( "company_id" => $this->uri->segment(5) );
            $this->Master_model->delete( $condition, $this->uri->segment(5), $tableName );
            $this->session->set_flashdata( 'success_message', 'Company Deleted successfully' );
            redirect(base_url() . 'admin/master/company', 'refresh');
        }
        
        /*  Load view Data  Section*/
        
        $viewData["companyList"] = $this->Master_model->companyList();
        $viewData["categoryList"] = $this->Master_model->datalist("category");

        $this->load->view('admin/header_view');
        $this->load->view('admin/company_view', $viewData);
        $this->load->view('admin/footer_view');
    }
    /*  
     *  Company Master Ends
     */
    
    public function service() {

        $tableName = "service";
        
        /*Back End Validation*/
        
        $this->form_validation->set_rules('categoryId', 'categoryId', 'trim|required|xss_clean');
        $this->form_validation->set_rules('service', 'service', 'trim|required|xss_clean');
        
        /* Insert and Update*/
        
        if ($this->form_validation->run() != FALSE) {

            $categoryId = $this->input->post('categoryId');
            $serviceName = $this->input->post('service');
            
            if ($this->input->post('formSubmit') == "Add") { //Insert Section
                
                $data = array(
                    'service_name' => $serviceName,
                    'category_id' => $categoryId,
                    'status' => "active",
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->Master_model->insert($data, $tableName);
                $this->session->set_flashdata('success_message', 'Service Inserted successfully');
                
            } else if ($this->input->post('formSubmit') == "Update") { //Update Section
                
                $condition = array("service_id" => $this->uri->segment(5));
                $updateData = array("service_name" => $serviceName, "category_id" => $categoryId);
                $this->Master_model->update($condition, $updateData, $tableName);
                $this->session->set_flashdata('success_message', 'Service Updated successfully');
                redirect(base_url() . 'admin/master/service', 'refresh');
                
            }
        }
        /*  Load Edit Data */
        
        if ($this->uri->segment(4) == "edit") {
            
            $condition = array( "service_id" => $this->uri->segment(5) );
            $viewData["editData"] = $this->Master_model->editData( $condition, $this->uri->segment(5), $tableName );
        }
        /*  Delete Data  Section*/
        
        if ($this->uri->segment(4) == "delete") {
            
            $condition = array( "service_id" => $this->uri->segment(5) );
            $this->Master_model->delete( $condition, $this->uri->segment(5), $tableName );
            $this->session->set_flashdata( 'success_message', 'Service Deleted successfully' );
            redirect(base_url() . 'admin/master/service', 'refresh');
        }
        
        /*  Load view Data  Section*/
        
        $viewData["serviceList"] = $this->Master_model->serviceList();
        $viewData["categoryList"] = $this->Master_model->datalist("category");

        $this->load->view('admin/header_view');
        $this->load->view('admin/service_view', $viewData);
        $this->load->view('admin/footer_view');
    }
    /*  
     *  Service Master Ends
     */
    
}
