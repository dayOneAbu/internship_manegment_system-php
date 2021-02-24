<?php include_once "../template/header.php";?>
<?php

// $USERID = $_GET['USERID'] ?? null;
// if (!$USERID) {
$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location : ./createProfile.php');
    exit();
}

require_once '../db.php';

// $sql = "SELECT * FROM PROFILES WHERE USERID = '" . $id . "'";
$sql = "SELECT
USERS.Name,
USERS.Email,
PROFILES.Skills,
PROFILES.Image,
PROFILES.Bio,
PROFILES.Location,
PROFILES.School,
PROFILES.Achivments,
PROFILES.Program FROM USERS INNER JOIN PROFILES ON USERS.USERID = PROFILES.USERID ";
$result = mysqli_query($conn, $sql);

$profiles = mysqli_fetch_assoc($result);
mysqli_close($conn);

?>
<div class="mx-56 h-screen my-4 p-4 bg-gray-200">
  <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-blue-500 ">
    <a href="./updateProfile.php">back</a>
  </button>
  <div class="my-10 mx-8 bg-gray-100 flex flex-col items-center  justify-evenly">
    <div class="w-56  items-center justify-center mx-4 my-2 rounded-xl bg-gray-100">
      <img src="./imgs/a2.jpg" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden " alt="company1" />
    </div>
    <h1 class="text-3xl font-semibold capitalize leading-relaxed"><?php echo 'Name : ' . $profiles['Name'] ?></h1>
    <h2 class="text-2xl font-semibold leading-relaxed"><?php echo 'Email : ' . $profiles['Email'] ?></h2>
    <h3 class="text-2xl font-semibold capitalize leading-relaxed"><?php echo 'Skills : ' . $profiles['Skills'] ?> </h3>

  </div>
  <div class="bg-gray-200 mx-4 my-2 border-2 border-blue-600 rounded-xl flex flex-col justify-between">

    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">Bio:</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Bio'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">Location</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Location'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">Achivments</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Achivments'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">school/traning center</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['School'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">field of study</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl font-medium capitalize"> <?php echo $profiles['Program'] ?></h2>
      </span>
    </div>
    <div class="grid grid-cols-4">
      <span class="col-span-1">
        <h1 class="text-2xl ml-4 font-medium capitalize">education</h1>
      </span>
      <span class="col-span-3 mx-4">
        <h2 class="text-xl  font-medium capitalize"> <?php echo $profiles['Skills'] ?></h2>
      </span>
    </div>

  </div>
</div>

<?php include_once "../template/footer.php";?>