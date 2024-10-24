<?php require_once ("./stroage/student.php") ?>
<?php
$e_roll = '';
$roll = '';
$success = false;
$invalid = false;
if (isset($_POST['roll'])) {

    $roll = $_POST["roll"];
    if ($roll === '') {
        $e_roll = 'Roll Number must not be blank!';
    } else {
        if (!preg_match("/^SG-\d{3}$/", $roll)) {
            $e_roll = 'Invalid roll number format!';
        }
    }

    if ($e_roll === '') {
        $invalid = true;
        // $student = array_filter($student_list, function ($std) use ($roll) {
        //     return $std['roll'] === $roll;
        // });
        // if (count($student) === 0) {
        //     $invalid = false;
        // }
        foreach ($student_list as $key => $student) {
            if ($student['roll'] === $roll) {
                $invalid = false;
                unset($student_list[$key]);
                $success = true;
                $student_list = array_values($student_list);
                $_SESSION['student_list'] = $student_list;
            }
        }

    }
}
?>



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
            <?php if ($success) { ?>
                    <div class='alert alert-success'>Student deleted!</div>
                <?php } ?>
                <?php if ($invalid) { ?>
                    <div class='alert alert-danger'>Student doesn't exit!</div>
                <?php } ?>
                <form action="" method="post">
                    <div class="form-group my-2">
                        <label for="roll" class="form-label">Roll Number</label>
                        <input type="text" name="roll" id="roll" class="form-control" value="<?= $roll ?>">
                        <div class="text-danger"><?= $e_roll ?></div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
            </div>
          </div>
        </div>
      </div>
<?php include_once ("./layout/footer.php") ?>