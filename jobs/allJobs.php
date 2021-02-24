<?php include_once "../template/header.php"?>


<?php

require_once '../db.php';

$sql = "SELECT JOB_ID,Position,Duration,Description,created_at  FROM JOBS ORDER BY Created_at DESC";
$response = mysqli_query($conn, $sql);
$jobs = mysqli_fetch_all($response, MYSQLI_ASSOC);

function limit_words($string, $word_limit)
{
    $words = explode(" ", $string);
    return implode(" ", array_splice($words, 0, $word_limit));
}

?>

<?php foreach ($jobs as $job) {?>

<div class="container ">
  <div class="mx-56">
    <h2 class="mx-2 my-1 text-3xl leading-loose font-black ">"pool date from php" posted jobs
      <hr>
    </h2>

    <div class="mx-2 my-1 rounded bg-gray-100 flex rounded-2xl">
      <div class="overflow-hidden  w-56 justify-center items-center">
        <img src="./imgs/Overyall.png" alt="" class=" object-fill h-38 w-36 mx-2 rounded-xl">
      </div>
      <div class="mx-2 my-2">
        <h3 class="text-2xl capitalize  leading-relaxed "><?php echo $job['Position']; ?></h3>
        <h3 class="text-xl capitalize "><?php echo 'FOR ' . $job['Duration']; ?></h3>
        <p class="text-xl ">
          <?php $jobdesc = $job['Description'];

    echo limit_words($jobdesc, 20);

    ?>
        </p>
        <span class="flex justify-center items-center ">
          <button type="submit" value="submit" class="rounded-full text-xl px-2 text-black bg-blue-400 ">
            <a href="./jobDesc.php?id=<?php echo $job['JOB_ID'] ?>">show more</a>

          </button>
          <span class="mr-2 p-2 ml-10">
            <?php echo $job['created_at']; ?>
          </span>
        </span>

      </div>
    </div>

  </div>
</div>

<?php }?>
<?php include_once "../template/footer.php"?>