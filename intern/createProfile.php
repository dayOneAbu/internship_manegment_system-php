<?php include_once "../template/header.php"?>
<?php include_once "../session.php"?>
<?php include_once "../helper.php"?>
<?php

require_once "../db.php";
$errors = array(

    'Image' => '',
    'Bio' => '',
    'Location' => '',
    'Skills' => '',
    'School' => '',
    'Achivments' => '',
    'Program' => '',
);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['Bio'])) {
        $errors['Bio'] = 'Bio is Required';
    } else {
        $Bio = $_POST['Bio'];
    }
    if (empty($_POST['Location'])) {
        $errors['Location'] = 'Location is Required';
    } else {
        $Location = $_POST['Location'];
    }
    if (empty($_POST['Skills'])) {
        $errors['Skills'] = 'Skills is Required';
    } else {
        $Skills = $_POST['Skills'];
    }
    if (empty($_POST['School'])) {
        $errors['School'] = 'School is Required';
    } else {
        $School = $_POST['School'];
    }
    if (empty($_POST['Achivments'])) {
        $errors['Achivments'] = 'Achivments is Required';
    } else {
        $Achivments = $_POST['Achivments'];
    }
    if (empty($_POST['Program'])) {
        $errors['Program'] = 'Program is Required';
    } else {
        $Program = $_POST['Program'];
    }
    if (array_filter($errors)) {

        echo 'this form is invalid';
    } else {

        $imagePath = '../images/a2.jpg';
        if (empty($_FILES['Image'])) {
            $Image = null;
        } else {
            $Image = $_FILES['Image'];
            if (isset($Image)) {
                $imagePath = '../images/' . randstring(10) . '/' . $Image['name'];
                mkdir(dirname($imagePath));
                move_uploaded_file($Image['tmp_name'], $imagePath);
            }

        }

        $Image = $imagePath;
        $Bio = mysqli_real_escape_string($conn, $_POST['Bio']);
        $Location = mysqli_real_escape_string($conn, $_POST['Location']);
        $Skills = mysqli_real_escape_string($conn, $_POST['Skills']);
        $School = mysqli_real_escape_string($conn, $_POST['School']);
        $Achivments = mysqli_real_escape_string($conn, $_POST['Achivments']);
        $Program = mysqli_real_escape_string($conn, $_POST['Program']);
        $created_at = mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
        $USERID = $_SESSION['USERID'];

        $sql = "INSERT INTO PROFILES(Image,Bio,Location,Skills,School,Achivments,Program, created_at,USERID) VALUES('$Image','$Bio','$Location','$Skills','$School','$Achivments','$Program','$created_at','$USERID')";
        if (mysqli_query($conn, $sql)) {

            header('Location: ../jobs/alljobs.php');
            mysqli_close($conn);
        } else {
            echo 'query error' . mysqli_error($conn);
            mysqli_close($conn);
        }

    }
}
?>
<div class="mx-40 my-20 flex flex-1 flex-col items-center justify-center ">
  <h2 class="mx-10 capitalize leading-loose text-3xl text-blue-500">
    welcome Back
    </h1>
    <h2 class="text-2xl text-blue-400 ">
      create your Profile
    </h2>
</div>
<form action="createProfile.php" method="POST" class="lg:mx-56 mt-20 mb-20 sm:mx-10 " enctype="multipart/form-data">
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Image">bussiness size
      image</label>
    <input type="file" name="Image" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Bio">short bio of your
      self</label>
    <textarea placeholder="how do you describe your self" name="Bio" cols="24" rows="6"
      class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Bio']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Location">Location</label>
    <input type="text" name="Location" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Location']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Skills">Skills</label>
    <input type="text" name="Skills" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Skills']; ?>
    </h3>
  </div>

  <div class="mx-4 my-2 bg-red-400 rounded ">
    <h2 class="text-2xl mx-4 my-2 uppercase leading-relaxed">
      education background
    </h2>
    <h3 class="text-2xl mx-4 my-2 leading-relaxed">
      please fill the form carfully!
      <span class="text-white">
        it is important to match you with best match job offer
      </span>
    </h3>


  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="School">School/traning
      center</label>
    <input type="text" name="School" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['School']; ?>
    </h3>
  </div>

  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Achivments">Education
      status</label>
    <select class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" name="Achivments">
      <option>Pick your acadamic achivments</option>
      <option value="certificate">certificate</option>
      <option value="diploma">diploma</option>
      <option value="degree">degree</option>
      <option value="self-tought">self-tought</option>
      <option value="currently learning">currently learning</option>
    </select>
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Achivments']; ?>
    </h3>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Program">field of
      study/Program</label>
    <input type="text" name="Program" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
    <h3 class="text-red-600 mx-4 ">
      <?php echo $errors['Program']; ?>
    </h3>
  </div>
  <button type="submit" value="submit" class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
    submit
  </button>

</form>

<?php include_once "../template/footer.php"?>