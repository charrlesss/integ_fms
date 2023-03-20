<?php
include ('db_connect.php');
?>
<div class="container-fluid">
  <div class="col-lg-12">
    <div class="row">
      <div class="card-body">
       Claims and Reimbursement
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
                    <a>Employee ID:  </a><?php echo $row['id']?><br>
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
            Form Reimbursement
          </div>
          <div class="card-body">
            <div class="row form-group">
<form action="" id="manage-claims">
<div class="form-group">
    <label for="exampleFormControlInput1">Employee ID</label>
    <input type="text" class="form-control" name="emp1" value="<?php echo $row['id'] ?>" readOnly>
  </div>
  <?php  endwhile; }?>
<div class="form-group">
    <label for="exampleFormControlInput1">Title</label>
    <input type="text" class="form-control" name="title1" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Date</label>
    <input type="date" class="form-control" name="dateReimbursment" id="exampleFormControlInput1" required >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Amount</label>
    <input type="text" class="form-control" name="amt" id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Notes</label>
    <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3" required></textarea>
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




</div>

<script>
  function _reset(){
		$('[name="id"]').val('');
		$('#manage-claims').get(0).reset();
	}

  $('#manage-claims').submit(function(e){
		e.preventDefault()
		// start_load()
		$.ajax({
			url:'ajax.php?action=save_reimbursement',
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