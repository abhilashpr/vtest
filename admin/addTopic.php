<?php
include 'header.php';
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Add Topic</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Topic</a></li>
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
                            	<form action="<?php echo ROOT; ?>ajax/createtopic.php" method="POST">
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
                                                Title
                                                <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Title" name="title" required="">
                                               
                                            </div>
                                        </div>
                                    </div>
                                   

                                    <div class="mb-3 row">
                                        <div class="col-lg-9 ms-auto">
                                            <button type="submit" name="savetopic" class="btn btn-primary">Submit</button>
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