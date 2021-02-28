<?php include_once "../template/header.php";?>
<?php require_once '../session.php';?>
<?php

require_once "../db.php";
$errors = array(
    'Position' => '',
    'Division' => '',
    'Duration' => '',
    'Address' => '',
    'Contact' => '',
    'Qualification' => '',
    'Payment' => '',
    'Transport' => '',
    'Description' => '',

);
$Transport = 'i.e BR200';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['Position'])) {
        $errors['Position'] = 'Position is Required';
    } else {
        $Position = $_POST['Position'];
    }
    if (empty($_POST['Division'])) {
        $errors['Division'] = 'Division is Required';
    } else {
        $Division = $_POST['Division'];
    }
    if (empty($_POST['Duration'])) {
        $errors['Duration'] = 'Duration is Required';
    } else {
        $Duration = $_POST['Duration'];
    }
    if (empty($_POST['Address'])) {
        $errors['Address'] = 'Address is Required';
    } else {
        $Address = $_POST['Address'];
    }
    if (empty($_POST['Contact'])) {
        $errors['Contact'] = 'Contact is Required';
    } else {
        $Contact = $_POST['Contact'];
    }
    if (empty($_POST['Qualification'])) {
        $errors['Qualification'] = 'Qualification is Required';
    } else {
        $Qualification = $_POST['Qualification'];
    }
    if (empty($_POST['Payment'])) {
        $errors['Payment'] = 'Payment is Required';
    } else {
        $Payment = $_POST['Payment'];
    }
    if (empty($_POST['Transport'])) {
        global $Transport;
        $Transport = 'NONE';
    } else {
        $Transport = $_POST['Transport'];
    }
    if (empty($_POST['Description'])) {
        $errors['Description'] = 'little description is Required';
    } else {
        $Description = $_POST['Description'];
    }

    if (array_filter($errors)) {

        echo 'this form is invalid';
    } else {
        if (!$_SESSION['isManager'] == true) {
            echo 'please first create managers account';
        } else {

            $Position = mysqli_real_escape_string($conn, $_POST['Position']);
            $Division = mysqli_real_escape_string($conn, $_POST['Division']);
            $Duration = mysqli_real_escape_string($conn, $_POST['Duration']);
            $Address = mysqli_real_escape_string($conn, $_POST['Address']);
            $Contact = mysqli_real_escape_string($conn, $_POST['Contact']);
            $Qualification = mysqli_real_escape_string($conn, $_POST['Qualification']);
            $Payment = mysqli_real_escape_string($conn, $_POST['Payment']);
            $Transport = mysqli_real_escape_string($conn, $_POST['Transport']);
            $Description = mysqli_real_escape_string($conn, $_POST['Description']);
            $created_at = mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));
            $USERID = $_SESSION['USERID'];

            $sqli = "SELECT COMP_ID FROM COMPANY WHERE USERID = '" . $USERID . "'";
            $company = mysqli_query($conn, $sqli);
            $company = mysqli_fetch_assoc($company);
            if (!$company) {
                echo ' please create  company profile first';
            } else {
                $fkUserId = $company['COMP_ID'];
                $sql = "INSERT INTO JOBS(Position,Division,Duration,Address,Contact, Qualification, Payment,Transport,Description, created_at,USERID,COMP_ID) VALUES('$Position','$Division','$Duration','$Address','$Contact','$Qualification','$Payment','$Transport','$Description','$created_at','$USERID','$fkUserId')";
                if (mysqli_query($conn, $sql)) {
                    header('Location: ../index.php');
                    mysqli_close($conn);
                } else {
                    echo 'query error' . mysqli_error($conn);
                    mysqli_close($conn);
                }
            }

        }

    }
}

?>



<div class=" p-4 bg-gray-200">
  <div class="mx-10 mt-4 py-4 flex flex-1 flex-col items-center justify-center ">
    <h1 class="p-4 capitalize leading-loose text-3xl text-black"> a pitching statment here
      <span class="uppercase leading-loose text-3xl text-blue-300"><br> better platform </span> to get the best amoung
      the
      crowd
    </h1>
    <h2 class="text-2xl text-red-400 capitalize mx-4 leading-relaxed font-extrabold ">
      please <Strong>fill</Strong> the following form carefully
    </h2>
  </div>
  <form action="postJob.php" method="POST" class="mx-32 my-2 flex flex-1 flex-col bg-gray-100 ">
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold  leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Position">
        Position
      </label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Position"
        placeholder="i.e. network designer">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Position']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Division">Division</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Division"
        placeholder="i.e. IT & support ">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Division']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Duration">Duration</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Duration"
        placeholder=" i.e. 6 months">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Duration']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Address">Address</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Address"
        placeholder="i.e.  bole subsity dembel tower">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Address']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Contact">Contact
        information</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Contact"
        placeholder=" i.e. phone number or email">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Contact']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Qualification">qualifications</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Qualification"
        placeholder="i.e.  degree,deploma,certificate">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Qualification']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Payment">Payment</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Payment"
        placeholder="i.e. BR 1500/month ">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Payment']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="Transport">transportation
        fee</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="Transport"
        placeholder="<?php echo $Transport; ?>">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Transport']; ?>
      </h3>
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="Description"> short
        description </label>
      <textarea placeholder="what is expected from the intern employee" name="Description" cols="28" rows="10"
        class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['Description']; ?>
      </h3>
    </div>
    <button type="submit" name="submit" class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
      submit
    </button>
  </form>
</div>

<?php include_once "../template/footer.php"?>