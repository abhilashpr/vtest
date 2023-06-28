<?php
include 'header.php';
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Add Question</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Question</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- -------form-validation----- -->
                        <div class="form-validation">
                            <div class="needs-validation" novalidate="">
                            	<form action="<?php echo ROOT; ?>ajax/createQuestion.php" method="POST">
                                <div class="row">
                                    <div class="col-xl-12">
                                      <span style="color:green" ><?php
if(isset($_SESSION['flash_message'])) {
    $message = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);
    echo $message;
}
?></span> 
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Question
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <textarea name="title" class="form-control" placeholder="Question" ></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Option1
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="option1" class="form-control" placeholder="Option1">
                                            </div>
                                        </div>
                                   
                                     <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Option2
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="option2" class="form-control" placeholder="Option2">
                                            </div>
                                        </div>
                                          <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Option3
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="option3" class="form-control" placeholder="Option3">
                                            </div>
                                        </div>
                                          <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Option4
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" name="option4" class="form-control" placeholder="Option4">
                                            </div>
                                        </div>
 <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Currect Answer
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="crtoption">
                                                	<option value="1">Option1</option>
                                                	<option value="2">Option2</option>
                                                	<option value="3">Option3</option>
                                                	<option value="4">Option4</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                     <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Topic
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="topic">
                                                	<?php 
										$sql = "SELECT * FROM topics";
										$result = $conn->query($sql);

										if ($result->num_rows > 0) {
										   while($row = $result->fetch_assoc()) {
										?>
										<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
										<?php
											 }

											} ?>


                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                     <div class="mb-3 row">
                                            <label class="col-lg-3 col-form-label" for="validationCustom03">
                                                Level
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" name="level">
                                                	<option value="1">Beginner</option>
                                                	<option value="2">Intermediate</option>
                                                	<option value="3">Professional</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                   

                                    <div class="mb-3 row">
                                        <div class="col-lg-9 ms-auto">
                                            <button type="submit" name="saveqsnt" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- -------form-validation----- -->


                </div>
            </div>
        </div>
    </div>

</div>
</div>

<?php
include 'footer.php';
 ?>