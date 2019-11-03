<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : User (UserController)
 * User Class to control all user related operations.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Project extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
        $this->load->model('customer_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'Alta Vision : Projects';
        
        $this->loadViews("dashboard", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to load the add project view
     */
    function addProject()
    {
        $this->global['pageTitle'] = 'Alta Vision : Add Projects';
        $this->loadViews("addProject", $this->global,NULL);
    }


    function addNewProject(){

        date_default_timezone_set("Asia/Colombo");

        // Customer Info
        $firstName = $this->input->post('firstName');
        $lastName = $this->input->post('lastName');
        $addressLine1 = $this->input->post('addressLine1');
        $addressLine2 = $this->input->post('addressLine2');
        $city = $this->input->post('city');
        $phone = $this->input->post('phoneNo');
        $service = $this->input->post('serviceProvider');
        $mobile = $this->input->post('mobileNo');
        $email = $this->input->post('emailAddress');
        $nic = $this->input->post('nicNo');
        $area = $this->input->post('areaOffice');
        $billName = $this->input->post('accountName');
        $account = $this->input->post('accountNo');
        $gps = $this->input->post('gps');
        $postal = $this->input->post('postalCode');
        


        // Project Info
        $projectId =  $this->input->post('projectId');
        $agreementDate = $this->input->post('agreementDate');
        $panelCapacity = $this->input->post('panelCapacity');
        $installerID = $this->input->post('installerID');
        $meterFixingDate = $this->input->post('meterFixingDate');
        $projectDocuments = $this->input->post('projectDocuments');
        $projectPhotos = $this->input->post('projectPhotos');
        $installationDate = $this->input->post('installationDate');
        $inverterCapacity = $this->input->post('inverterCapacity');
        $paymentDate = $this->input->post('paymentDate');
        $portalUsername = $this->input->post('portalUsername');
        $panelCount = $this->input->post('panelCount');
        $installerName = $this->input->post('installerName');
        $scheme = $this->input->post('scheme');
        //echo $scheme;
        $portalPassword = $this->input->post('portalPassword');
        $createdBy = $_SESSION['userId'];
        //echo $createdBy;
        $createdAt = date('Y-m-d H:i:s');
        //echo $createdAt;

        // Technical Info
        $offlineGridVoltage = $this->input->post('offlineGridVoltage');
        $groundResistance = $this->input->post('groundResistance');
        $lowVoltageRange = $this->input->post('lowVoltageRange');
        $highVoltageRange = $this->input->post('highVoltageRange');
        $lowFrequencyRange = $this->input->post('lowFrequencyRange');
        $highFrequencyRange = $this->input->post('highFrequencyRange');
        $inverterStartupTime = $this->input->post('inverterStartupTime');
        $onlineGridVoltage = $this->input->post('onlineGridVoltage');
        $routerUsername = $this->input->post('routerUsername');
        $routerPassword = $this->input->post('routerPassword');
        $routerSerialNo = $this->input->post('routerSerialNo');
        $latitude = $this->input->post('latitude');
        $longitude = $this->input->post('longitude');
        $serviceDuration = $this->input->post('serviceDuration');
        $serviceFrequency = $this->input->post('serviceFrequency');
        $comments = $this->input->post('comments');

        if (isset($_POST['draft'])) {
            $status = 0;
            $accept_status = NULL;
        }
        elseif (isset($_POST['final'])) {
            $status = 1;
            if($_SESSION['role'] == 1) {
                $accept_status = 'approved';
            }
            else {
                $accept_status = 'pending';
            }

        }

        $projectInfo = array('project_no'=>$projectId,'agreementDate'=>$agreementDate, 'projectDocuments'=>$projectDocuments, 'projectPhotos'=>$projectPhotos, 'installationCompletion'=> $installationDate, 'noOfPanels'=>$panelCount, 'totalPanelCapacity'=>$panelCapacity, 'inverterCapacity'=>$inverterCapacity, 'installerName'=>$installerName, 'installerID'=>$installerID, 'connectionPayment'=>$paymentDate, 'scheme'=>$scheme, 'meterFixing'=>$meterFixingDate, 'onlinePortalUsername'=>$portalUsername, 'onlinePortalPassword'=>$portalPassword, 'offlineGridVoltage'=>$offlineGridVoltage, 'groundResistance'=>$groundResistance,'setVoltageRangeLow'=>$lowVoltageRange,'setVoltageRangeHigh'=>$highVoltageRange,'setFreqRangeLow'=>$lowFrequencyRange,'setFreqRangeHigh'=>$highFrequencyRange, 'inverterStartupTime'=>$inverterStartupTime,'onlineGridVoltage'=> $onlineGridVoltage, 'routerUsername'=>$routerUsername,'routerPassword'=>$routerPassword,'routerSerialNo'=>$routerSerialNo,'latitude'=>$latitude,'longitude'=>$longitude,'serviceDuration'=>$serviceDuration,'serviceFreq'=>$serviceFrequency,'comments'=>$comments,'createdAt'=>$createdAt,'createdBy'=>$createdBy,'status'=>$status, 'accept_status'=>$accept_status);


        $this->load->model('project_model');
        $project = $this->project_model->addNewProject($projectInfo);

        
        $customerInfo = array('first_name'=>$firstName, 'last_name'=>$lastName, 'address_line1'=>$addressLine1, 'address_line2'=> $addressLine2, 'city'=>$city, 'phone_no'=>$phone, 'mobile_no'=>$mobile, 'email'=>$email, 'nic_no'=>$nic, 'service_supplier'=>$service, 'area_office'=>$area, 'ebill_name'=>$billName, 'account_no'=>$account, 'gps_location'=>$gps, 'project_id' => $project, 'postal_code' => $postal);
        
        $this->load->model('customer_model');
        $customer = $this->customer_model->addNewCustomer($customerInfo);
    
        
        if($customer > 0 & $project > 0)
        {
            $this->session->set_flashdata('success', 'New Project created successfully');
        }
        else
        {
            $this->session->set_flashdata('error', 'Project creation failed');
        }
        
        if($status == 0){
            redirect('viewDraftProject');
        }
        elseif ($status == 1) {
            redirect('viewProject');
        }
    }



    function viewAllProject(){
        $data['projects'] = $this->project_model->allProjectList();
        $this->global['pageTitle'] = 'Alta Vision : List of All Projects';
        $this->loadViews("viewProject", $this->global,$data,NULL);
    }



    function viewDraftProject(){

        $data['drafts'] = $this->project_model->draftProjectList();
        $this->global['pageTitle'] = 'Alta Vision : List of Draft Projects';
        $this->loadViews("viewDraftProject", $this->global,$data, NULL);
    }


    /**
     * This function is used to delete a draft project
     */

    function deleteDraftProject()
    {
        
        $projectId = $this->input->post('projectId');
        $this->deleteCustomer($projectId);
        
        $this->project_model->deleteProject($projectId);
        echo(json_encode(array('status'=>TRUE)));
        //if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
        //else { echo(json_encode(array('status'=>FALSE))); }
    }

    /**
     * This function is used to delete a project
     */

    function deleteProject()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $projectId = $this->input->post('projectId');
            $this->deleteCustomer($projectId);
            
            $this->project_model->deleteProject($projectId);
            echo(json_encode(array('status'=>TRUE)));
            //if ($result > 0) { echo(json_encode(array('status'=>TRUE))); }
            //else { echo(json_encode(array('status'=>FALSE))); }
        }
    }

    function deleteCustomer($projectId)
    {

        $projectId = $projectId;
        $this->customer_model->deleteCustomer($projectId);
        
    }


    /**
     * This function is used to load project edit information
     * @param number $projectID : Optional : This is project id
     */
    function editProjectInfo($projectID = NULL)
    {

        $data['projectInfo'] = $this->project_model->getProjectInfo($projectID);
        
        $this->global['pageTitle'] = 'Alta Vision : Edit Project';
        
        $this->loadViews("editProjectInfo", $this->global, $data, NULL);
        
    }


    /**
     * This function is used to load update project information
     * @param number $projectID : Optional : This is project id
     */
    function editProject()
    {
        //if($this->isAdmin() == TRUE)
        //{
            //$this->loadThis();
        //}
        //else
        //{
            $projectID = $this->input->post('projectID');

            $project_no = $this->input->post('project_no');
            
            date_default_timezone_set("Asia/Colombo");

            // Customer Info
            
            $firstName = $this->input->post('firstName');
            $lastName = $this->input->post('lastName');
            $addressLine1 = $this->input->post('addressLine1');
            $addressLine2 = $this->input->post('addressLine2');
            $city = $this->input->post('city');
            $phone = $this->input->post('phoneNo');
            $service = $this->input->post('serviceProvider');
            $mobile = $this->input->post('mobileNo');
            $email = $this->input->post('emailAddress');
            $nic = $this->input->post('nicNo');
            $area = $this->input->post('areaOffice');
            $billName = $this->input->post('accountName');
            $account = $this->input->post('accountNo');
            $gps = $this->input->post('gps');
            $postal = $this->input->post('postalCode');
            


            // Project Info
            
            $agreementDate = $this->input->post('agreementDate');
            $panelCapacity = $this->input->post('panelCapacity');
            $installerID = $this->input->post('installerID');
            $meterFixingDate = $this->input->post('meterFixingDate');
            $projectDocuments = $this->input->post('projectDocuments');
            $projectPhotos = $this->input->post('projectPhotos');
            $installationDate = $this->input->post('installationDate');
            $inverterCapacity = $this->input->post('inverterCapacity');
            $paymentDate = $this->input->post('paymentDate');
            $portalUsername = $this->input->post('portalUsername');
            $panelCount = $this->input->post('panelCount');
            $installerName = $this->input->post('installerName');
            $scheme = $this->input->post('scheme');
            $portalPassword = $this->input->post('portalPassword');


            // Technical Info
            $offlineGridVoltage = $this->input->post('offlineGridVoltage');
            $groundResistance = $this->input->post('groundResistance');
            $lowVoltageRange = $this->input->post('lowVoltageRange');
            $highVoltageRange = $this->input->post('highVoltageRange');
            $lowFrequencyRange = $this->input->post('lowFrequencyRange');
            $highFrequencyRange = $this->input->post('highFrequencyRange');
            $inverterStartupTime = $this->input->post('inverterStartupTime');
            $onlineGridVoltage = $this->input->post('onlineGridVoltage');
            $routerUsername = $this->input->post('routerUsername');
            $routerPassword = $this->input->post('routerPassword');
            $routerSerialNo = $this->input->post('routerSerialNo');
            $latitude = $this->input->post('latitude');
            $longitude = $this->input->post('longitude');
            $serviceDuration = $this->input->post('serviceDuration');
            $serviceFrequency = $this->input->post('serviceFrequency');
            $comments = $this->input->post('comments');

            if(isset($_POST['updateDraft'])) {
                $status = 0;
                $accept_status = NULL;
            }
            elseif (isset($_POST['submitProject'])) {
                $status = 1;
                if($_SESSION['role'] == 1) {
                    $accept_status = 'approved';
                }
                else {
                    $accept_status = 'pending';
                }

            }
            elseif (isset($_POST['updateProject'])) {
                $status = 1;
                //Check the accept status
                $data = $this->project_model->getProjectAcceptStatus($projectID);
                $as = $data->accept_status;
                $accept_status = $as;
            }

            $projectInfo = array('project_no'=>$project_no,'agreementDate'=>$agreementDate, 'projectDocuments'=>$projectDocuments, 'projectPhotos'=>$projectPhotos, 'installationCompletion'=> $installationDate, 'noOfPanels'=>$panelCount, 'totalPanelCapacity'=>$panelCapacity, 'inverterCapacity'=>$inverterCapacity, 'installerName'=>$installerName, 'installerID'=>$installerID, 'connectionPayment'=>$paymentDate, 'scheme'=>$scheme, 'meterFixing'=>$meterFixingDate, 'onlinePortalUsername'=>$portalUsername, 'onlinePortalPassword'=>$portalPassword, 'offlineGridVoltage'=>$offlineGridVoltage, 'groundResistance'=>$groundResistance,'setVoltageRangeLow'=>$lowVoltageRange,'setVoltageRangeHigh'=>$highVoltageRange,'setFreqRangeLow'=>$lowFrequencyRange,'setFreqRangeHigh'=>$highFrequencyRange, 'inverterStartupTime'=>$inverterStartupTime,'onlineGridVoltage'=> $onlineGridVoltage, 'routerUsername'=>$routerUsername,'routerPassword'=>$routerPassword,'routerSerialNo'=>$routerSerialNo,'latitude'=>$latitude,'longitude'=>$longitude,'serviceDuration'=>$serviceDuration,'serviceFreq'=>$serviceFrequency,'comments'=>$comments,'status'=>$status, 'accept_status'=>$accept_status);


           
            $project_result = $this->project_model->updateProject($projectInfo, $projectID);

            
            $customerInfo = array('first_name'=>$firstName, 'last_name'=>$lastName, 'address_line1'=>$addressLine1, 'address_line2'=> $addressLine2, 'city'=>$city, 'phone_no'=>$phone, 'mobile_no'=>$mobile, 'email'=>$email, 'nic_no'=>$nic, 'service_supplier'=>$service, 'area_office'=>$area, 'ebill_name'=>$billName, 'account_no'=>$account, 'gps_location'=>$gps, 'postal_code' => $postal);
            
            
            $customer_result = $this->customer_model->updateCustomer($customerInfo, $projectID);
        
            
            if($customer_result == true & $project_result == true)
            {
                $this->session->set_flashdata('success', 'Project updated successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Project update failed');
            }

            if (isset($_POST['updateDraft'])) {
                redirect('viewDraftProject');
            }
            elseif (isset($_POST['submitProject']) or isset($_POST['updateProject'])) {
                redirect('viewProject');
            }
        
    }

   
}

?>