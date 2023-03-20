<?php
include ('db_connect.php');
include 'visible_user.php';

?>
<div class="container-fluid">
  <div class="col-lg-12">
    <div class="row">
      <div class="card-body">
       Compensation Planning and Administration
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
            Compensation 
          </div>
          <div class="card-body">
            <div class="row form-group">
    <form action="" id="manage_compensation">
    <input type="hidden" name="idc">

<div class="form-group">
    <label for="exampleFormControlInput1">Employee ID</label>
    <input type="text" class="form-control" name="emp11" value="<?php echo $row['id'] ?>" readOnly>
  </div>

  <?php  endwhile; }?>
  <div class="form-group">
    <label for="exampleFormControlInput1">SSS Contribtuion</label>
    <input type="text" class="form-control" name="ss">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Phil Health</label>
    <input type="text" class="form-control" name="ph">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Pag Ibig</label>
    <input type="text" class="form-control" name="pagibig">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Day Salary</label>
    <input type="text" class="form-control" name="salary">
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
          Employee's List Compensation
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
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">SSS</th>
                                <th class="text-center">Phil Health</th>
                                <th class="text-center">Pag-Ibig</th>
                                <th class="text-center">Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                               $application = $conn->query("SELECT application.id as emp,CONCAT(application.firstname,' ',application.middlename,' ',application.lastname) as ename,
                               compensation.ss as sss, compensation.pagIbg as pagIbg, compensation.phlhealth as phlhealth,compensation.salary as salary,
                                vacancy.position as pos,recruitment_status.status_label as lbl 
                               FROM hiretbl INNER JOIN application ON hiretbl.id = application.id INNER JOIN compensation ON compensation.id = application.id INNER JOIN departments ON hiretbl.deptId = departments.deptId INNER JOIN vacancy ON application.position_id = vacancy.id INNER JOIN 
                               recruitment_status ON hiretbl.process_id = recruitment_status.id WHERE recruitment_status.status_label='Seasonal' OR recruitment_status.status_label='Regularization' OR recruitment_status.status_label='Probationary' OR recruitment_status.status_label='Part-Time'");
                               while($row=$application->fetch_assoc()):
                               ?>
                           <tr>
                                   <td><?php echo $row['emp']?></td>
                                   <td><?php echo $row['ename']?></td>
                                   <td><?php echo $row['sss']?></td>
                                   <td><?php echo $row['pagIbg']?></td>
                                   <td><?php echo $row['phlhealth']?></td>
                                   <td><?php echo $row['salary']?></td>
                               </tr>
                               <?php endwhile; ?>    
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
		$('[name="idc"]').val('');
		$('#manage_compensation').get(0).reset();
	}

  $('#manage_compensation').submit(function(e){
		e.preventDefault()
		// start_load()
		$.ajax({
			url:'ajax.php?action=save_compensation',
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