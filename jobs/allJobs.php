<?php include_once "../template/header.php"?>


<?php for ($i = 0; $i < 5; $i++) {?>

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
        <h3 class="text-2xl capitalize  leading-relaxed ">job title</h3>
        <p class="text-xl "> 2 line job description Lorem ipsum dolor sit amet consectetur adipisicing
          elit.
          Culpa, quo!
          <br>
          <span class="justify-end items-center self-end">
            <button class="rounded-full text-xl px-2 text-black bg-blue-400 ">
              show more
            </button>
          </span>
          <span class="mr-2 p-2 ml-10">date</span> <span class="ml-6 p-2">dead line</span>
        </p>
      </div>
    </div>

  </div>
</div>

<?php }?>
<?php include_once "../template/footer.php"?>