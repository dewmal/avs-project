<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Project_model (User Model)
 * Project model class to get to handle project related data 
 */
class Project_model extends CI_Model
{

    function addNewProject($projectInfo)
    {
        $this->db->trans_start();
        $this->db->insert('project', $projectInfo);
        
        $insert_id = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        return $insert_id;
    }

    /**
     * This function is used to get the list of submitted projects
     */
    function allProjectList()
    {
        $this->db->select('p.projectID, p.project_no, p.accept_status, c.first_name, c.last_name, c.address_line1, c.address_line2, c.city');
        $this->db->from('project as p');
        $this->db->join('customer as c', 'c.project_id = p.projectID','left');
        $this->db->where('p.status', 1);

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
    
    /**
     * This function is used to get the list of draft projects
     */
    function draftProjectList()
    {
        $this->db->select('p.projectID, p.project_no, p.agreementDate, c.first_name, c.last_name, c.address_line1, c.address_line2, c.city');
        $this->db->from('project as p');
        $this->db->join('customer as c', 'c.project_id = p.projectID','left');
        $this->db->where('p.status', 0);

        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }


    /**
     * This function is used to delete a project
     */
    function deleteProject($projectId)
    {

        $this->db->where('projectID', $projectId);
        $this->db->delete('project');
    }


    /**
     * This function used to get project information by id
     * @param number $projectID : This is project id
     * @return array $result : This is project information
     */
    function getProjectInfo($projectID)
    {
        $this->db->select('*');
        $this->db->from('project');
        $this->db->where('projectID', $projectID);
        $this->db->join('customer', 'customer.project_id = project.projectID');
        $query = $this->db->get();
        
        return $query->row();
    }


    // Get the accept_status of the project
     function getProjectAcceptStatus($projectID)
    {
        $this->db->select('accept_status');
        $this->db->from('project');
        $this->db->where('projectID', $projectID);
        $query = $this->db->get();
        
        return $query->row();
    }

     /**
     * This function is used to update the project information
     * @param array $projectInfo : This is project's updated information
     * @param number $projectID : This is project id
     */
    function updateProject($projectInfo, $projectID)
    {
        $this->db->where('projectID', $projectID);
        $this->db->update('project', $projectInfo);
        
        return TRUE;
    }


}

  