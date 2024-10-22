<?php require_once ("./layout/header.php") ?>
<h1 class="text-center my-5">Registration!</h1>
      <div class="row">
        <div class="col-7">
          <div class="card" style="height: 400px">
            <img src="./img/uni.jpg" alt="university" style="width: 100%;height: 100%;" />
          </div>
        </div>
        <div class="col-5">
          <div class="card" style="height: 400px">
            <div class="card-body">
                <form action="" method="get">
                    <div class="form-group my-2">
                        <label for="roll" class="form-label">Roll Number</label>
                        <input type="text" name="roll" id="roll" class="form-control">
                    </div>
                    <div class="form-group my-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group my-2">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" name="age" id="age" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
<?php include_once ("./layout/footer.php") ?>
