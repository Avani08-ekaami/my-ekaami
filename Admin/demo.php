<?php include 'include/header.php' ?>

<div class="wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-4">
          <div class="menu">
  
          <?php include 'include/sidebar.php' ?> 

          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-8">   
    <div class="container mt-5">
        <h2 class="text-center mb-4">About us Board Of Trustee</h2>
        <div class="card">
            <div class="card-body">
                <form>
                    <!-- Title Input -->
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter the title">
                    </div>

                    <!-- Sub Title & Description Input -->
                    <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" rows="4" placeholder="Enter description"></textarea>
                    </div>

                    <!-- File Upload -->

                    <!-- Card Image-1 -->
                    <h2 class="text-center mb-4">Card Image-1</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                            <div class="mb-3">
                                <label for="fileUpload" class="form-label">Image-1</label>
                                <input class="form-control" type="file" id="fileUpload">
                            </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter the title">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Card Image-2 -->
                    <h2 class="text-center mb-4">Card Image-2</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                            <div class="mb-3">
                                <label for="fileUpload" class="form-label">Image-2</label>
                                <input class="form-control" type="file" id="fileUpload">
                            </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter the title">
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Card Image-3 -->
                    <h2 class="text-center mb-4">Card Image-3</h2>
                    <div class="card">
                        <div class="card-body">
                            <form>
                            <div class="mb-3">
                                <label for="fileUpload" class="form-label">Image-3</label>
                                <input class="form-control" type="file" id="fileUpload">
                            </div>
                                <div class="mb-3">
                                    <label for="title" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="title" placeholder="Enter the title">
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- Submit Button -->
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><a href="AboutBOT-table.php"  style="text-decoration: none; color: #fff;">Submit</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

 
</div>
    </div>
</div>
<?php include 'include/footer.php' ?>