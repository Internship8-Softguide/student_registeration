<?php include_once ("./layout/header.php") ?>
<h1 class="text-center my-5">Student List!</h1>
      <div class="row">
        <div class="col-7">
          <div class="card" style="height: 400px">
            <img src="./img/uni.jpg" alt="university" style="width: 100%;height: 100%;" />
          </div>
        </div>
        <div class="col-5">
          <div class="card" style="height: 400px">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php
                      $student = json_decode($_COOKIE['student'], true);?>
                    <tr>
                        <td><?= $student['roll'] ?></td>
                        <td><?= $student['name'] ?></td>
                        <td><?= $student['email'] ?></td>
                        <td><?= $student['age'] ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>

<?php include_once ("./layout/footer.php") ?>