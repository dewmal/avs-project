<?php
$projectID = $projectInfo->projectID;
$project_no = $projectInfo->project_no;
$firstName = $projectInfo->first_name;
$lastName = $projectInfo->last_name;
$addressLine1 = $projectInfo->address_line1;
$addressLine2 = $projectInfo->address_line2;
$city = $projectInfo->city;
$phoneNo = $projectInfo->phone_no;
$serviceProvider = $projectInfo->service_supplier;
$mobileNo = $projectInfo->mobile_no;
$emailAddress = $projectInfo->email;
$nicNo = $projectInfo->nic_no;
$areaOffice = $projectInfo->area_office;
$accountName = $projectInfo->ebill_name;
$accountNo = $projectInfo->account_no;
$gps = $projectInfo->gps_location;
$postal = $projectInfo->postal_code;

$agreementDate = $projectInfo->agreementDate;
$panelCapacity = $projectInfo->totalPanelCapacity;
$installerID = $projectInfo->installerID;
$meterFixingDate = $projectInfo->meterFixing;
$projectDocuments = $projectInfo->projectDocuments;
$projectPhotos = $projectInfo->projectPhotos;
$installationDate = $projectInfo->installationCompletion;
$inverterCapacity = $projectInfo->inverterCapacity;
$paymentDate = $projectInfo->connectionPayment;
$portalUsername = $projectInfo->onlinePortalUsername;
$panelCount = $projectInfo->noOfPanels;
$installerName = $projectInfo->installerName;
$scheme = $projectInfo->scheme;
$portalPassword = $projectInfo->onlinePortalPassword;

$offlineGridVoltage = $projectInfo->offlineGridVoltage;
$groundResistance = $projectInfo->groundResistance;
$lowVoltageRange = $projectInfo->setVoltageRangeLow;
$highVoltageRange = $projectInfo->setVoltageRangeHigh;
$lowFrequencyRange = $projectInfo->setFreqRangeLow;
$highFrequencyRange = $projectInfo->setFreqRangeHigh;
$inverterStartupTime = $projectInfo->inverterStartupTime;
$onlineGridVoltage = $projectInfo->onlineGridVoltage;
$routerUsername = $projectInfo->routerUsername;
$routerPassword = $projectInfo->routerPassword;
$routerSerialNo = $projectInfo->routerSerialNo;
$latitude = $projectInfo->latitude;
$longitude = $projectInfo->longitude;
$serviceDuration = $projectInfo->serviceDuration;
$serviceFrequency = $projectInfo->serviceFreq;
$comments = $projectInfo->comments;

$status = $projectInfo->status;

if($agreementDate == '0000-00-00')
$agreementDate = '';

if($installationDate == '0000-00-00')
$installationDate = '';

if($paymentDate == '0000-00-00')
$paymentDate = '';

if($meterFixingDate == '0000-00-00')
$meterFixingDate = '';

?>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" />

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Update / Save Project

		</h1>
	</section>

	<section class="content">
		<div class="box box-primary">
			<?php $this->load->helper("form"); ?>
			<form id="editProject" action="<?php echo base_url() ?>editProject" method="post" role="form">
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">                       
							<div class="form-group">
								<label for="projectid">Project ID</label>
								<input type="text" class="form-control" name="project_no" value="<?php echo $project_no; ?>" placeholder="Project ID" required>
								<input type="hidden" value="<?php echo $projectID; ?>" name="projectID" id="projectID" /> 
							</div>
						</div>
					</div>
				
				<!-- Customer Information -->
				
					<h3 class="box-title">
						Customer Information
					</h3>

					<div class="box-body">

						<div class="row">
							<div class="col-md-4">                       
								<div class="form-group">
									<label for="firstName">First Name</label>
									<input type="text" class="form-control" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="lastName">Last Name</label>
									<input type="text" class="form-control" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="nicNo">NIC Number</label>
									<input type="text" class="form-control" name="nicNo" placeholder="NIC Number" value="<?php echo $nicNo; ?>" required>
								</div>
							</div>
						</div>

					</div>

					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="addressLine1">Address Line 1</label>
									<input type="text" class="form-control" name="addressLine1" placeholder="Address Line 1" value="<?php echo $addressLine1; ?>" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="addressLine2">Address Line 2</label>
									<input type="text" class="form-control" name="addressLine2" placeholder="Address Line 2" value="<?php echo $addressLine2; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" name="city" placeholder="City" required value="<?php echo $city; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="postalCode">Postal Code</label>
									<input type="text" class="form-control required digits" name="postalCode" placeholder="Postal Code" value="<?php echo $postal; ?>" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="phoneNo">Phone Number</label>
									<input type="text" class="form-control required digits" name="phoneNo" placeholder="Phone number" value="<?php echo $phoneNo; ?>" required maxlength="10">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="mobile">Mobile Number</label>
									<input type="text" class="form-control required digits" name="mobileNo" placeholder="Mobile number" value="<?php echo $mobileNo; ?>" maxlength="10">
								</div>
							</div> 

							<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" name="emailAddress" placeholder="Email" value="<?php echo $emailAddress; ?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="gps">GPS Location</label>
									<input type="text" class="form-control" name="gps" placeholder="GPS Location" value="<?php echo $gps; ?>">
								</div>
							</div>
						</div>
					</div>

					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Service Provider</label>
									<select class="form-control required" style="width: 100%;" name="serviceProvider">
										<option <?php if($serviceProvider == "ceb") {echo "selected=selected";} ?> value="ceb">CEB</option>
										<option <?php if($serviceProvider == "leco") {echo "selected=selected";} ?> value="leco">LECO</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="accountName">Account Name</label>
									<input type="text" class="form-control" name="accountName" placeholder="Account Name" value="<?php echo $accountName; ?>" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="accountNo">Account Number</label>
									<input type="text" class="form-control" name="accountNo" placeholder="Account Number" value="<?php echo $accountNo; ?>" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="areaOffice">Area Office</label>
									<input type="text" class="form-control" name="areaOffice" placeholder="Area Office" value="<?php echo $areaOffice; ?>">
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Project Information -->
				<div class="box-body">
					<h3 class="box-title">
						Project Information
					</h3>
					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label>Date of Agreement</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="agreementDate" name="agreementDate" value="<?php echo $agreementDate; ?>">
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Date of Installation</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="installationDate" name="installationDate" value="<?php echo $installationDate; ?>">
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="installerName">Name of the Installer</label>
									<input type="text" class="form-control" name="installerName" placeholder="Name of the Installer" value="<?php echo $installerName; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="installerID">Installer ID</label>
									<input type="text" class="form-control" name="installerID" placeholder="Installer ID" value="<?php echo $installerID; ?>">
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="panelCount">Number of Panels</label>
									<input type="text" class="form-control" name="panelCount" placeholder="Number of Panels" value="<?php echo $panelCount; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="panelCapacity">Panel Capcity</label>
									<input type="text" class="form-control" name="panelCapacity" placeholder="Panel Capacity" value="<?php echo $panelCapacity; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="inverterCapacity">Inverter Capacity</label>
									<input type="text" class="form-control" name="inverterCapacity" placeholder="Inverter Capacity" value="<?php echo $inverterCapacity; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Connection Payment</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="paymentDate" name="paymentDate" value="<?php echo $paymentDate; ?>">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="projectDocuments">Project Documents</label>
									<input type="text" class="form-control" name="projectDocuments" placeholder="Project Documents" value="<?php echo $projectDocuments; ?>">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="projectPhotos">Project Photos</label>
									<input type="text" class="form-control" name="projectPhotos" placeholder="Project Photos" value="<?php echo $projectPhotos; ?>">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="portalUsername">Online Portal Username</label>
									<input type="text" class="form-control" name="portalUsername" placeholder="Online Portal Username" value="<?php echo $portalUsername; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="portalPassword">Online Portal Passwrod</label>
									<input type="password" class="form-control" name="portalPassword" placeholder="Online Portal Passwrod" value="<?php echo $portalPassword; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Date of Meter Fixing</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" name="meterFixingDate" id="meterFixingDate" value="<?php echo $meterFixingDate; ?>">
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Scheme</label>
									<select class="form-control required" style="width: 100%;" name="scheme">
										<option <?php if($scheme == "meter") {echo "selected=selected";} ?> value="meter">Net Metering</option>
										<option <?php if($scheme == "account") {echo "selected=selected";} ?> value="account">Net Accounting</option>
										<option <?php if($scheme == "plus") {echo "selected=selected";} ?> value="plus">Net Plus</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="latitude">Latitude</label>
									<input type="text" class="form-control" name="latitude" placeholder="Latitude" value="<?php echo $latitude; ?>">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="longitude">Longitude</label>
									<input type="text" class="form-control" name="longitude" placeholder="Longitude" value="<?php echo $longitude; ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Technical Information -->
				<div class="box-body">
					<h3 class="box-title">
						Technical Information
					</h3>
					<div class="box-body">

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="offlineGrideVoltage">Offline Grid Voltage</label>
									<input type="text" class="form-control" name="offlineGridVoltage" placeholder="Offline Grid Voltage" value="<?php echo $offlineGridVoltage; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="onlineGridVoltage">Online Grid Voltage</label>
									<input type="text" class="form-control" name="onlineGridVoltage" placeholder="Online Grid Voltage" value="<?php echo $onlineGridVoltage; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="lowVoltageRange">
									Low Voltage Range</label>
									<input type="text" class="form-control" name="lowVoltageRange" placeholder="Low Voltage Range" value="<?php echo $lowVoltageRange; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="highVoltageRange">High Voltage Range</label>
									<input type="text" class="form-control" name="highVoltageRange" placeholder="High Voltage Range" value="<?php echo $highVoltageRange; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="lowFrequencyRange">Low Frequency Range</label>
									<input type="text" class="form-control" name="lowFrequencyRange" placeholder="Low Frequency Range" value="<?php echo $lowFrequencyRange; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="highFrequencyRange">High Frequency Range</label>
									<input type="text" class="form-control" name="highFrequencyRange" placeholder="High Frequency Range" value="<?php echo $highFrequencyRange; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="inverterStartupTime">Inverter Startup Time</label>
									<input type="text" class="form-control" name="inverterStartupTime" placeholder="Inverter Startup Time" value="<?php echo $inverterStartupTime; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="groundResistance">Ground Resistance</label>
									<input type="text" class="form-control" name="groundResistance" placeholder="Ground Resistance" value="<?php echo $groundResistance; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="routerUsername">Router Username</label>
									<input type="text" class="form-control" name="routerUsername" placeholder="Router User Name" value="<?php echo $routerUsername; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="routerPassword">Router Password</label>
									<input type="password" class="form-control" name="routerPassword" placeholder="Router Password" value="<?php echo $routerPassword; ?>">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="routerSerialNo">Router Serial Number</label>
									<input type="text" class="form-control" name="routerSerialNo" placeholder="Router Serial Number" value="<?php echo $routerSerialNo; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="seviceDuration">Service Duration</label>
									<input type="text" class="form-control" name="serviceDuration" placeholder="Service Duration" value="<?php echo $serviceDuration; ?>">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="longitude">Service Frequency</label>
									<input type="text" class="form-control" name="serviceFrequency" placeholder="Service Frequency" value="<?php echo $serviceFrequency; ?>">
								</div>
							</div>
						</div>

						<div class="row">
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." name="comments"><?php echo $comments; ?></textarea>
						</div>
					</div>

					</div>
				</div>
				<div class="box-footer">
					<input type="button" class="btn btn-secondary pull-right" onclick="goBack()" value="Cancel" />
					<?php if ($status == 0) echo ' 
					<input type="submit" name="updateDraft" class="btn btn-primary pull-right" style="margin-right: 5px" value="Update Draft" />
					<input type="submit" name="submitProject" class="btn btn-success pull-right" style="margin-right: 5px" value="Submit" /> ' ;
					elseif ($status == 1 and $_SESSION['role'] == 1) echo '
					<input type="submit" name="updateProject" class="btn btn-primary pull-right" style="margin-right: 5px" value="Update Project" />'
					?>


				</div>

			</form>
		</div>
	</section>

</div>


<script src="<?php echo base_url();?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>


<script>
	$(function () {
    //Initialize Select2 Elements


    //Date picker
    $('#agreementDate').datepicker({
    	autoclose: true,
    	format : "yyyy-mm-dd",
    	endDate: '+0d'
    })
    $('#installationDate').datepicker({
    	autoclose: true,
    	format : "yyyy-mm-dd",
    	endDate: '+0d'
    })
    $('#paymentDate').datepicker({
    	autoclose: true,
    	format : "yyyy-mm-dd",
    	endDate: '+0d'
    })
    $('#meterFixingDate').datepicker({
    	autoclose: true,
    	format : "yyyy-mm-dd",
    	endDate: '+0d'
    })
    
})

function goBack() {
  window.history.back();
}

</script>
