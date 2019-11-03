<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Customer_model 
 * Customer model class to get to handle customer related data 
 */
class Customer_model extends CI_Model
{

    function addNewCustomer($customerInfo)
    {
        $this->db->trans_start();
        $this->db->insert('customer', $customerInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    /**
     * This function is used to delete a customer
     */
    function deleteCustomer($projectId)
    {

        $this->db->where('project_id', $projectId);
        $this->db->delete('customer');
    }

    /**
     * This function is used to update the customer information
     * @param array $customerInfo : This is customer's updated information
     * @param number $projectID : This is project id
     */
    function updateCustomer($customerInfo, $projectID)
    {
        $this->db->where('project_id', $projectID);
        $this->db->update('customer', $customerInfo);
        
        return TRUE;
    }



    
}

  