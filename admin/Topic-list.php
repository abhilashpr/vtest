<?php
include 'header.php';
?>
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Topic</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">All Topics</a></li>
					</ol>
                </div>
				
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								  <h4></h4>
								  <a href="<?php echo ROOT; ?>addTopic.php" class="btn btn-primary">Add Topic</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table">
									<table id="example" class="display  table table-bordered  table-responsive-xl" style="min-width: 845px">
										<thead>
											<tr>
											  
												
												<th>Sl.No</th>
												<th> title</th>
												
												
											</tr>
										</thead>
										<tbody>
											<?php 
										$sql = "SELECT * FROM topics";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											$i=1;
										   while($row = $result->fetch_assoc()) {
										?>

											<tr>
												   
												
												<td><?php echo $i; ?></td>
												<td><?php echo $row['title']; ?></td>
												
												
											</tr>
											
										  
											<?php
											$i++; }

											} ?>
										</tbody>
									   
									</table>
								</div>
							</div>
						</div>
                    </div>
				</div>
            </div>
        </div>
<?php
include 'footer.php';
 ?>