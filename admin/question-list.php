<?php
include 'header.php';
?>
<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Questions</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">All Questions</a></li>
					</ol>
                </div>
				
                <div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								  <h4></h4>
								  <a href="<?php echo ROOT; ?>addQuestions.php" class="btn btn-primary">Add Question</a>
							 </div>
							 <div class="card-body">
								 <div class="table-responsive ticket-table">
									<table id="example" class="display  table table-bordered  table-responsive-xl" style="min-width: 845px">
										<thead>
											<tr>
											  
												
												<th>Sl.No</th>
												<th> title</th>
												<th> Option1</th>
												<th> Option2</th>
												<th> Option3</th>
												<th> Option4</th>
												<th> Currect Option</th>
												<th>Level</th>
												<th>Topic</th>
												
												
											</tr>
										</thead>
										<tbody>
											<?php 
										$sql = "SELECT quiz_questions.*,topics.title as ttl FROM quiz_questions JOIN topics ON topics.id=quiz_questions.topic";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
											$i=1;
										   while($row = $result->fetch_assoc()) {
										?>

											<tr>
												   
												
												<td><?php echo $i; ?></td>
												<td><?php echo $row['title']; ?></td>
												<td><?php echo $row['option1']; ?></td>
												<td><?php echo $row['option2']; ?></td>
												<td><?php echo $row['option3']; ?></td>
												<td><?php echo $row['option4']; ?></td>
												<td><?php echo "Option".$row['right_answer']; ?></td>
												
												<td><?php 
if($row['question_level']==1){
	echo "Beginner";

}else if($row['question_level']==2){
echo "Intermediate";
}else if($row['question_level']==3){
echo "Professional";
}											 ?></td>
												<td><?php echo $row['ttl']; ?></td>
												
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