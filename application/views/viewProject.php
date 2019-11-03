<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> List of All Projects
      </h1>
    </section>
    
    <section class="content">
      <!-- List of Projects -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Projects</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="allProjects" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Project ID</th>
              <th>Customer</th>
              <th>Address</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
              if(!empty($projects))
              {
                foreach($projects as $project)
                {
              ?>
              <tr>
                  <td><?php echo $project->project_no ?></td>
                  <td><?php echo $project->first_name.' '.$project->last_name ?></td>
                  <td><?php echo $project->address_line1.', '.$project->address_line2.', '.$project->city ?></td>
                  <?php if($project->accept_status == 'approved') echo '<td><span class="label label-success">Approved</span></td>'; else echo '<td><span class="label label-danger">Pending</span></td>'; ?>
                  <td class="text-center">
                      <a class="btn btn-sm btn-info" href="<?php echo base_url().'editProjectInfo/'.$project->projectID; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                      <?php if($_SESSION['role'] == 1) echo '
                      <a class="btn btn-sm btn-danger deleteProject" href="#" data-projectid="<?php echo $project->projectID; ?>" title="Delete"><i class="fa fa-trash"></i></a> ' ?>
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
    $('#allProjects').DataTable()
  })
</script>