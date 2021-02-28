<?php include_once "../template/header.php";?>
<?php include_once "../session.php";?>
<?php require_once '../db.php';?>
<?php

$id = $_GET['id'] ?? null;
if (!$id) {

    header('Location : ./createProfile.php');
    exit();
}

$sql = "SELECT
COMPANY.Logo,
COMPANY.Comp_name,
COMPANY.Comp_email,
COMPANY.Comp_web,
COMPANY.Comp_phNo,
COMPANY.Comp_location,
COMPANY.Comp_desc,
USERS.Name,
USERS.Email
FROM USERS INNER JOIN  COMPANY ON USERS.USERID = COMPANY.USERID
WHERE COMPANY.USERID = '" . $id . "'";

$result = mysqli_query($conn, $sql);
$profiles = mysqli_fetch_assoc($result);
mysqli_close($conn);

?>
<div class="mx-56 h-screen my-4 p-4 bg-gray-200">
  <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-blue-500 ">
    <a href="../index.php">back</a>
  </button>
  <div class="my-10 mx-8 bg-gray-100 flex flex-col items-center  justify-evenly">
    <div class="w-96  items-center justify-center mx-4 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo $profiles['Logo']; ?>" class="h-24 mx-12 my-2 overflow-hidden " alt="company1" />
    </div>
    <h1 class="text-3xl font-semibold capitalize leading-relaxed"><?php echo 'Name : ' . $profiles['Comp_name'] ?></h1>
    <h2 class="text-2xl font-semibold leading-relaxed"><?php echo 'Email : ' . $profiles['Comp_email'] ?></h2>
    <h3 class="text-2xl font-semibold capitalize leading-relaxed"><?php echo 'website : ' . $profiles['Comp_web'] ?>
    </h3>

    </h3>

  </div>
  <div class="bg-gray-200 mx-4 my-2 border-2 border-blue-600 rounded-xl flex flex-col justify-between">

    <div class="grid grid-cols-4 bg-gray-300 my-1">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">Manager Email:</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Email'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4 bg-gray-300 my-1">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">Manager Name:</h1>
      </span>
      <span class="col-span-3 mx-4 ">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Name'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4 bg-gray-300 my-1">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize"> office phone no.:</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Comp_phNo'] ?></h2>
      </span>
    </div>

    <div class="grid grid-cols-4 bg-gray-300 my-1">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">we are located:</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Comp_location'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4 bg-gray-300 my-1">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">what we do is:</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Comp_desc'] ?></h2>
      </span>
    </div>


  </div>
</div>

<?php include_once "../template/footer.php";?>