<?php include_once "../template/header.php"?>


<?php

$id = $_GET['id'] ?? null;
if (!$id) {
    header('Location : ./alljobs.php');
    exit();
}

require_once '../db.php';

$sql = "SELECT
*,
COMPANY.Comp_name,
COMPANY.Comp_email,
COMPANY.Comp_web
FROM COMPANY INNER JOIN  JOBS ON COMPANY.COMP_ID = JOBS.COMP_ID
WHERE JOB_ID = '" . $id . "'";

$result = mysqli_query($conn, $sql);

$job = mysqli_fetch_assoc($result);
mysqli_close($conn);

?>
<div class=" p-4 bg-gray-200">
  <div class="mx-48 my-14 p-10 bg-gray-200">
    <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-blue-500 ">
      <a href="./allJobs.php">back</a>
    </button>
    <div class="bg-gray-100 rounded p-2 m-2">
      <h1 class="text-3xl font-semibold capitalize leading-relaxed">
        <?php echo $job['Position']; ?>
      </h1>
      <h2 class="text-2xl font-light capitalize leading-relaxed"> <?php echo $job['Comp_name']; ?></h2>
      <div class="flex flex-auto items-center justify-evenly">
        <span class=" font-semibold capitalize leading-relaxed"><?php echo $job['Comp_web']; ?></span>
        <span class=" font-semibold capitalize leading-relaxed"><?php echo $job['Comp_email']; ?></span>
      </div>
    </div>

    <div class="my-4 p-2 bg-gray-200">
      <div class="bg-gray-100 rounded p-2 ">

        <h3 class="text-base font-light capitalize leading-relaxed">posted at: <span
            class="text-xl font-bols uppercase leading-relaxed"> <?php echo $job['created_at']; ?></span></h3>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">Position </h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Position']; ?></h2>
          </span>
        </div>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">division</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Division']; ?></h2>
          </span>
        </div>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">duration</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Duration']; ?></h2>
          </span>
        </div>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">address</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Address']; ?></h2>
          </span>
        </div>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">contact no</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Contact']; ?></h2>
          </span>
        </div>
        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">qualifications</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Qualification']; ?></h2>
          </span>
        </div>

        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">payment</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Payment']; ?></h2>
          </span>
        </div>

        <div class="grid grid-cols-3">
          <span class="col-span-1">
            <h1 class="text-2xl ml-4 font-medium capitalize">transportation fee</h1>
          </span>
          <span class="col-span-2 mx-4">
            <h2 class="text-xl font-medium capitalize"> <?php echo $job['Transport']; ?></h2>
          </span>
        </div>
      </div>

      <div class="my-4 p-2 bg-gray-100 flex flex-wrap   rounde">
        <h2 class="text-2xl ml-4 font-medium capitalize"> description :</h2>
        <p class="text-xl font-serif ml-14  "> <?php echo $job['Description']; ?></p>
      </div>

    </div>

  </div>

  <?php include_once "../template/footer.php"?>