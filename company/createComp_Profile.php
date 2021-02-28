<?php include_once "../template/header.php";?>
<?php require_once '../session.php';?>
<?php require_once '../db.php';?>
<?php require_once '../helper.php';?>
<?php

$errors = array(

    'Logo' => '',
    'Comp_name' => '',
    'Comp_email' => '',
    'Comp_web' => '',
    'Comp_phNo' => '',
    'Comp_location' => '',
    'Comp_desc' => '',
);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['Comp_name'])) {
        $errors['Comp_name'] = 'Comp_name is Required';
    } else {
        $Comp_name = $_POST['Comp_name'];
    }
    if (empty($_POST['Comp_email'])) {
        $errors['Comp_email'] = 'Comp_email is Required';
    } else {
        $Comp_email = $_POST['Comp_email'];
    }
    if (empty($_POST['Comp_web'])) {
        $errors['Comp_web'] = 'Comp_web is Required';
    } else {
        $Comp_web = $_POST['Comp_web'];
    }
    if (empty($_POST['Comp_phNo'])) {
        $errors['Comp_phNo'] = 'Comp_phNo is Required';
    } else {
        $Comp_phNo = $_POST['Comp_phNo'];
    }
    if (empty($_POST['Comp_location'])) {
        $errors['Comp_location'] = 'Comp_location is Required';
    } else {
        $Comp_location = $_POST['Comp_location'];
    }
    if (empty($_POST['Comp_desc'])) {
        $errors['Comp_desc'] = 'Comp_desc is Required';
    } else {
        $Comp_desc = $_POST['Comp_desc'];
    }
    if (array_filter($errors)) {
        echo 'this form is invalid';
    } else {
        if (!$_SESSION['isManager'] == true) {
            echo 'please first create managers account';
        } else {
            $imagePath = '../images/a2.jpg';
            $Image = $_FILES['Logo'] ?? null;
            if ($Image) {
                $imagePath = '../images/' . randstring(10) . '/' . $Image['name'];
                mkdir(dirname($imagePath));
                move_uploaded_file($Image['tmp_name'], $imagePath);
            }

            $Logo = $imagePath;
            $Comp_name = mysqli_real_escape_string($conn, $_POST['Comp_name']);
            $Comp_email = mysqli_real_escape_string($conn, $_POST['Comp_email']);
            $Comp_web = mysqli_real_escape_string($conn, $_POST['Comp_web']);
            $Comp_phNo = mysqli_real_escape_string($conn, $_POST['Comp_phNo']);
            $Comp_location = mysqli_real_escape_string($conn, $_POST['Comp_location']);
            $Comp_desc = mysqli_real_escape_string($conn, $_POST['Comp_desc']);
            $created_at = mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
            $USERID = $_SESSION['USERID'];

            $sql = "INSERT INTO COMPANY(Logo,Comp_name,Comp_email,Comp_web,Comp_phNo,Comp_location,Comp_desc, created_at,USERID) VALUES('$Logo','$Comp_name','$Comp_email','$Comp_web','$Comp_phNo','$Comp_location','$Comp_desc','$created_at','$USERID')";

            if (mysqli_query($conn, $sql)) {

                header('Location: profile.php?id=' . urldecode($USERID));
                mysqli_close($conn);
            } else {
                echo 'query error' . mysqli_error($conn);
                mysqli_close($conn);
            }
        }
    }
}
?>

<div class="mx-40 py-10 flex flex-col items-center justify-center ">
  <h2 class="mx-10 p-4 capitalize leading-loose text-3xl text-blue-500">
    welcome back!
  </h2>
  <p class="text-2xl text-blue-400 ">
    we are delighted to work with you
  </p>
</div>
<form action="createComp_Profile.php" method="POST" class="lg:mx-56 mt-12 mb-20 sm:mx-10 "
  enctype="multipart/form-data">
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Logo">company logo</label>
    <input type="file" name="Logo" class="mx-2 px-2 h-12 py-1 flex-1 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_name">company
      name</label>
    <input type="text" name="Comp_name" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_name']; ?>
    </h3>
  </div>

  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_email">
      company email
      adress</label>
    <input type="text" name="Comp_email" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_email']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_web">
      company website</label>
    <input type="text" name="Comp_web" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_web']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_location">
      company office
      location</label>
    <input type="text" name="Comp_location" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_location']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_phNo">
      company phone
      number</label>
    <input type="text" name="Comp_phNo" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_phNo']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Comp_desc"> short
      description </label>
    <textarea placeholder="what your organzation do ?" name="Comp_desc" cols="24" rows="6"
      class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Comp_desc']; ?>
    </h3>
  </div>
  <button type="submit" class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
    submit
  </button>
</form>





<?php include_once "../template/footer.php";?>