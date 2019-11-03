<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> List of Draft Projects
      </h1>
    </section>
    
    <section class="content">
      <!-- List of Projects -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Draft Projects</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="draftProjects" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Project ID</th>
              <th>Customer</th>
              <th>Address</th>
              <th>Agreement Date</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
              if(!empty($drafts))
              {
                foreach($drafts as $draft)
                {
              ?>
              <tr>
                  <td><?php echo $draft->project_no ?></td>
                  <td><?php echo $draft->first_name.' '.$draft->last_name ?></td>
                  <td><?php echo $draft->address_line1.', '.$draft->address_line2.', '.$draft->city ?></td>
                  <td><?php if($draft->agreementDate == '0000-00-00') echo '-'; else echo date("Y-m-d", strtotime($draft->agreementDate)) ?></td>
                  <td class="text-center">
                      <a class="btn btn-sm btn-info" href="<?php echo base_url().'editProjectInfo/'.$draft->projectID; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                      <a class="btn btn-sm btn-danger deleteDraftProject" href="#" data-projectid="<?php echo $draft->projectID; ?>" title="Delete"><i class="fa fa-trash"></i></a>
                  </td>
              </tr>
              <?php
                  }
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>
</div>

<!-- Jquery Delete -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(function () {
    $('#draftProjects').DataTable()
  })
</script>