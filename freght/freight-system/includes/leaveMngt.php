<?php
include ('db_connect.php');
include 'visible_user.php';

?>
<div class="container-fluid">
  <div class="col-lg-12">
    <div class="row">
      <div class="card-body">
        Leave Management
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          Employee Information
          </div>
          <div class="card-body">
            <div class="row form-group">
              <div class="col-md-2">
                <form action="" method="POST">
                  <label for="" class="control-label">Employee ID</label>
                  <input type="text" name="id" class="form-control">
              </div>
              <div class="col-md-2">
                <label for="" class="control-label"></label>
                <input type="submit" name="search" class="form-control btn btn-primary">
                </form>
              </div>
            </div>
            <br>
                    <?php
                           
                            if(isset($_POST['search'])){
                                $id = $_POST['id'];
                            
                            $application = $conn->query("SELECT application.id as id, application.firstname as fname, application.middlename as mname, application.lastname as lname, departments.departmentName as dept, 
                            recruitment_status.status_label as lbl FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN 
                            departments ON hiretbl.deptId = departments.deptId INNER JOIN recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE hiretbl.id='$id'");
                        while($row=$application->fetch_assoc()):
                    ?>
                 
                    <a>Employee ID:  </a><?php echo $row['id'] ?></h5><br>
                   <a>FirstName:  </a><?php echo $row['fname']?><br>
                   <a>MiddleName:  </a><?php echo $row['mname'] ?><br>
                   <a>FirstName:  </a><?php echo $row['lname'] ?><br>     
                   <a>Department:  </a><?php echo $row['dept'] ?><br>
                   <a>Status Employee:  </a><?php echo $row['lbl'] ?>
              
          </div>
        </div>
      </div>
    </div>
  </div>




  <div class="col-lg-12">
    <div class="row">
      <div class="card-body">
     
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            Form Leave
          </div>
          <div class="card-body">
            <div class="row form-group">
<form action="" id="manage-status-cat">
<input type="hidden" name="id">

<div class="form-group">
    <label for="exampleFormControlInput1">Employee ID</label>
    <input type="text" class="form-control" name="emp" value="<?php echo $row['id'] ?>" readOnly>
  </div>

  <?php  endwhile; }?>
  <div class="form-group">
    <label for="exampleFormControlInput1">Leave Start Date</label>
    <input type="date" name="lsd" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Leave End Date</label>
    <input type="date" name="led"class="form-control" id="exampleFormControlInput2" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Leave Type</label>
    <select name="cars" id="cars" class="form-control">
  <option value="CL">CL</option>
  <option value="LWP">LWP</option>
  <option value="PL">PL</option>
</select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Reason</label>
    <textarea class="form-control" name="status_label" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br>
              <div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="_reset()"> Cancel</button>
							</div>
  
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  
  <div class="col-lg-12">
    <div class="row">
      <div class="card-body">
     
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          Leave History for Selected Employee
          </div>
          <div class="card-body">
          <table class="table table-bordered table-hover">
                       <colgroup>
                            <col width="15%">
                            <col width="20%">
                            <col width="20%">
                            <col width="20%">

                        </colgroup>
                        <thead>
                            <tr>
                                <th class="text-center">Start Leave Date</th>
                                <th class="text-center">End Leave Date</th>
                                <th class="text-center">Leave Type</th>
                                <th class="text-center">Reason</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_POST['search'])){
                                $sds = $_POST['id'];
                                $task = $conn->query("SELECT * FROM application INNER JOIN leavetbl ON application.id = leavetbl.id 
                                WHERE application.id = '$sds' ");
                                while($row=$task->fetch_assoc()):
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $row['leaveStartDate']?></td>
                                <td class="text-center"><?php echo $row['leaveEndDate']?></td>
                                <td class="text-center"><?php echo $row['leaveType']?></td>
                                <td class="text-center"><?php echo $row['leaveReason']?></td>   
                            </tr>
                            <?php endwhile; }?>
                        </tbody>
                   </table>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>

<script>
  function _reset(){
		$('[name="id"]').val('');
		$('#manage-status-cat').get(0).reset();
	}

  $('#manage-status-cat').submit(function(e){
		e.preventDefault()
		// start_load()
		$.ajax({
			url:'ajax.php?action=save_leave',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
</script>