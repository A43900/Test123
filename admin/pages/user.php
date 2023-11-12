<?php
include('header.php');
?>
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Movies List
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            <div class="box box-primary">
            <!-- /.box-header -->
            <div class="box-body">
              <?php include('../../msgbox.php');?>
              <ul class="todo-list">
              
                <li>
                <table>
                    <tr>
                
                      <th width="25%"><span class="text">Name</span></th>
                      <th width="25%"><span class="text">Email</span></th>
                      <th width="25%"><span class="text">Phone</span></th>
                      <th width="25%"><span class="text">Age</span></th>
                      <th width="25%"><span class="text">Gender</span></th>
                    </tr>
                </table>
                </li>
                 <?php 
                        $qry7=mysqli_query($con,"select * from tbl_registration");
                        if(mysqli_num_rows($qry7))
                        {
                        while($c=mysqli_fetch_array($qry7))
                        {
                        ?>
                      
                <li>
                  <table>
                  <tr>
                  <!-- drag handle -->
                  
                      
                  <!-- checkbox -->
                  <!-- todo text -->

                  <td width="25%"><span class="text"><?php echo $c['name'];?></span></td>
                  <td width="25%"><span class="text"><?php echo $c['email'];?></span></td>
                  <td width="25%"><span class="text"><?php echo $c['phone'];?></span></td>
                  <td width="25%"><span class="text"><?php echo $c['age'];?></span></td>
                  <td width="25%"><span class="text"><?php echo $c['gender'];?></span></td>
                  <!-- Emphasis label -->
                  
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <button class="fa fa-trash-o" onclick="del(<?php echo $c['user_id'];?>)"></button>
                  </div>
                  <tr>
                  </table>
                </li>
                  <?php
                       }}
                     ?>
            </div>
          </div>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php
include('footer.php');
?>
<script>
function del(m)
    {
        if (confirm("Are you want to delete this user") == true) 
        {
            window.location="process_delete_user.php?mid="+m;
        } 
    }
    </script>