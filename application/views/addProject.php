<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" />

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<i class="fa fa-tachometer" aria-hidden="true"></i> Add New Project

		</h1>
	</section>

	<section class="content">
		<div class="box box-primary">
			<?php $this->load->helper("form"); ?>
			<form id="addProject" action="<?php echo base_url() ?>addNewProject" method="post" role="form">
				<div class="box-body">
					<div class="row">
						<div class="col-md-2">                       
							<div class="form-group">
								<label for="projectid">Project ID</label>
								<input type="text" class="form-control" name="projectId" placeholder="Project ID" required>
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
									<input type="text" class="form-control" name="firstName" placeholder="First Name" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="lastName">Last Name</label>
									<input type="text" class="form-control" name="lastName" placeholder="Last Name" required>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="nicNo">NIC Number</label>
									<input type="text" class="form-control" name="nicNo" placeholder="NIC Number" required>
								</div>
							</div>
						</div>

					</div>

					<div class="box-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="addressLine1">Address Line 1</label>
									<input type="text" class="form-control" name="addressLine1" placeholder="Address Line 1" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="addressLine2">Address Line 2</label>
									<input type="text" class="form-control" name="addressLine2" placeholder="Address Line 2">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="city">City</label>
									<input type="text" class="form-control" name="city" placeholder="City" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="postalCode">Postal Code</label>
									<input type="text" class="form-control" name="postalCode" placeholder="Postal Code" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="phoneNo">Phone Number</label>
									<input type="text" class="form-control required digits" name="phoneNo" placeholder="Phone number" required maxlength="10">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="mobile">Mobile Number</label>
									<input type="text" class="form-control required digits" name="mobileNo" placeholder="Mobile number" maxlength="10">
								</div>
							</div> 

							<div class="col-md-3">
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" name="emailAddress" placeholder="Email">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="gps">GPS Location</label>
									<input type="text" class="form-control" name="gps" placeholder="GPS Location">
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
										<option selected="selected" value="ceb">CEB</option>
										<option value="leco">LECO</option>
									</select>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="accountName">Account Name</label>
									<input type="text" class="form-control" name="accountName" placeholder="Account Name" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="accountNo">Account Number</label>
									<input type="text" class="form-control" name="accountNo" placeholder="Account Number" required>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="areaOffice">Area Office</label>
									<input type="text" class="form-control" name="areaOffice" placeholder="Area Office">
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
										<input type="text" class="form-control pull-right" id="agreementDate" name="agreementDate">
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
										<input type="text" class="form-control pull-right" id="installationDate" name="installationDate">
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="installerName">Name of the Installer</label>
									<input type="text" class="form-control" name="installerName" placeholder="Name of the Installer">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="installerID">Installer ID</label>
									<input type="text" class="form-control" name="installerID" placeholder="Installer ID">
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="panelCount">Number of Panels</label>
									<input type="text" class="form-control" name="panelCount" placeholder="Number of Panels">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="panelCapacity">Panel Capcity</label>
									<input type="text" class="form-control" name="panelCapacity" placeholder="Panel Capacity">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="inverterCapacity">Inverter Capacity</label>
									<input type="text" class="form-control" name="inverterCapacity" placeholder="Inverter Capacity">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Connection Payment</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" id="paymentDate" name="paymentDate">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="projectDocuments">Project Documents</label>
									<input type="text" class="form-control" name="projectDocuments" placeholder="Project Documents">
								</div>
							</div>

							<div class="col-md-6">
								<div class="form-group">
									<label for="projectPhotos">Project Photos</label>
									<input type="text" class="form-control" name="projectPhotos" placeholder="Project Photos">
								</div>
							</div>
						</div>


						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="portalUsername">Online Portal Username</label>
									<input type="text" class="form-control" name="portalUsername" placeholder="Online Portal Username">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="portalPassword">Online Portal Passwrod</label>
									<input type="password" class="form-control" name="portalPassword" placeholder="Online Portal Passwrod">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Date of Meter Fixing</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input type="text" class="form-control pull-right" name="meterFixingDate" id="meterFixingDate">
									</div>
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label>Scheme</label>
									<select class="form-control required" style="width: 100%;" name="scheme">
										<option selected="selected" value="meter">Net Metering</option>
										<option value="account">Net Accounting</option>
										<option value="plus">Net Plus</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="latitude">Latitude</label>
									<input type="text" class="form-control" name="latitude" placeholder="Latitude">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="longitude">Longitude</label>
									<input type="text" class="form-control" name="longitude" placeholder="Longitude">
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
									<input type="text" class="form-control" name="offlineGridVoltage" placeholder="Offline Grid Voltage">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="onlineGridVoltage">Online Grid Voltage</label>
									<input type="text" class="form-control" name="onlineGridVoltage" placeholder="Online Grid Voltage">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="lowVoltageRange">
									Low Voltage Range</label>
									<input type="text" class="form-control" name="lowVoltageRange" placeholder="Low Voltage Range">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="highVoltageRange">High Voltage Range</label>
									<input type="text" class="form-control" name="highVoltageRange" placeholder="High Voltage Range">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="lowFrequencyRange">Low Frequency Range</label>
									<input type="text" class="form-control" name="lowFrequencyRange" placeholder="Low Frequency Range">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="highFrequencyRange">High Frequency Range</label>
									<input type="text" class="form-control" name="highFrequencyRange" placeholder="High Frequency Range">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="inverterStartupTime">Inverter Startup Time</label>
									<input type="text" class="form-control" name="inverterStartupTime" placeholder="Inverter Startup Time">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="groundResistance">Ground Resistance</label>
									<input type="text" class="form-control" name="groundResistance" placeholder="Ground Resistance">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="routerUsername">Router Username</label>
									<input type="text" class="form-control" name="routerUsername" placeholder="Router User Name">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="routerPassword">Router Password</label>
									<input type="password" class="form-control" name="routerPassword" placeholder="Router Password">
								</div>
							</div>

							<div class="col-md-3">
								<div class="form-group">
									<label for="routerSerialNo">Router Serial Number</label>
									<input type="text" class="form-control" name="routerSerialNo" placeholder="Router Serial Number">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="seviceDuration">Service Duration</label>
									<input type="text" class="form-control" name="serviceDuration" placeholder="Service Duration">
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group">
									<label for="longitude">Service Frequency</label>
									<input type="text" class="form-control" name="serviceFrequency" placeholder="Service Frequency">
								</div>
							</div>
						</div>

						<div class="row">
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control" rows="3" placeholder="Enter ..." name="comments"></textarea>
						</div>
					</div>

					</div>
				</div>
				<div class="box-footer">
					<input type="reset" class="btn btn-secondary pull-right" value="Discard" />
					<input type="submit" name="draft" class="btn btn-primary pull-right" style="margin-right: 5px" value="Save Draft" />
					<input type="submit" name="final" class="btn btn-success pull-right" style="margin-right: 5px" value="Submit" />
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
</script>
