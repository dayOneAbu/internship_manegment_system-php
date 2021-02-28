<!DOCTYPE html>
<html lang="en">

<?php include_once './template/header.php';?>
<?php require_once './db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isManager = true;
    $checkUser = "SELECT * FROM USERS WHERE Email = '" . $_SESSION['email'] . "'";
    $user = mysqli_query($conn, $checkUser);
    if (!mysqli_num_rows($user)) {
        header('Location: ./users/regester.php');
    } else {
        if (!empty($_POST['getjob'])) {
            header('Location: ./jobs/allJobs.php');
        } elseif (!empty($_POST['postjob'])) {
            $user = mysqli_fetch_assoc($user);
            if ($isManager == $user['isManager']) {
                header('Location: ./jobs/postJob.php');
            }

        }
    }

}

?>

<div class="mx-2 py-12 px-4 col-span-2 bg-gradient-to-r from-blue-900 to-blue-400">
  <p class="m-2 px-8 leading-loose text-2xl text-center">
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore perspiciatis at molestias exercitationem cumque?
    Ratione ullam molestiae nam iste aspernatur sequi vitae explicabo, nostrum blanditiis voluptates fugit debitis
    harum nihil?
  </p>
  <div class="mx-2 my-10 grid grid-cols-5 gap-4 h-32 ">
    <div class="mx-4 flex flex-col col-span-2 items-center justify-center">
      <h3 class="text-3xl text-white leading-loose text-center">
        hey! are you tired of looking for an intern position ?
      </h3>
      <form action="index.php" method="post">
        <button type="submit" value="getJob" name="getjob"
          class="w-32 rounded-lg text-xl text-black bg-green-500 bottom-4">
          find Job <br> offers
        </button>
      </form>


    </div>
    <div class="col-span-1 items-center justify-center">
      <h1 class="uppercase text-center text-3xl text-red-500 text-3xl text-white leading-loose text-center ">or</h1>
    </div>
    <div class="mx-4 flex flex-col col-span-2 items-center justify-center">
      <h3 class="text-3xl text-white leading-loose text-center">are you a HR manager looking for intern applicant
      </h3>

      <form action="index.php" method="post">

        <button button type="submit" value="postjob" name="postjob"
          class=" w-32 rounded-lg text-xl text-black bg-red-500 bottom-4">
          Post Job offers
        </button>
      </form>

    </div>
  </div>
</div>
<div class="mx-2 my-4 ">
  <div class="mx-4 py-4 flex flex-col col-span-2 items-center justify-center">
    <h3 class="text-3xl leading-loose text-center">
      commpanies we helped
    </h3>
    <button class=" mx-4 mt-2 w-96 text-2xl italic text-black text-center bg-green-500 bottom-4">
      join us today and improve <br>your work power!
    </button>
  </div>
  <div class="grid grid-cols-5 gap-2">
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/a.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/b.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/c.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/d.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/e.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/f.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/g.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/h.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/i.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>
    <div class="rounded mx-2 p-2 bg-gray-100">
      <img src="<?php echo './public/imgs/j.jpg' ?>" class="overflow-hidden mx-2 my-2 rounded" alt="company1" />
      <h2 class="text-xl text-center text-black font-semibold">
        we have a better employyes after we join interethopia.com
      </h2>
    </div>

  </div>

</div>
<div class="mx-2 my-2 ">
  <div class="mx-4 py-4 flex flex-col col-span-2 items-center justify-center">
    <h3 class="text-3xl leading-loose text-center">
      what interns says about us!
    </h3>
    <button class=" mx-4 mt-2 w-96  text-2xl italic text-black text-center bg-green-500 bottom-4">
      join us today and improve <br>your chance!
    </button>
  </div>
  <div class="flex justify-evenly items-center">
    <div class="w-56 h-72 items-center justify-center mx-2 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo './public/imgs/a2.jpg' ?>" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden "
        alt="company1" />
      <h2 class="text-xl text-center text-blue-700 font-light">
        it's been hard finding a intern position before i join interethopia.com
      </h2>
    </div>
    <div class="w-56 h-72 items-center justify-center mx-2 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo './public/imgs/images (1).png' ?>" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden "
        alt="company1" />
      <h2 class="text-xl text-center text-blue-700 font-light">
        it's been hard finding a intern position before i join interethopia.com
      </h2>
    </div>

    <div class="w-56 h-72 items-center justify-center mx-2 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo './public/imgs/download.png' ?>" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden "
        alt="company1" />
      <h2 class="text-xl text-center text-blue-700 font-light">
        it's been hard finding a intern position before i join interethopia.com
      </h2>
    </div>
    <div class="w-56 h-72 items-center justify-center mx-2 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo './public/imgs/images.jpg' ?>" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden "
        alt="company1" />
      <h2 class="text-xl text-center text-blue-700 font-light">
        it's been hard finding a intern position before i join interethopia.com
      </h2>
    </div>
    <div class="w-56 h-72 items-center justify-center mx-2 my-2 rounded-xl bg-gray-100">
      <img src="<?php echo './public/imgs/a2.jpg' ?>" class="w-24 h-24 mx-12 my-2 rounded-full overflow-hidden "
        alt="company1" />
      <h2 class="text-xl text-center text-blue-700 font-light">
        it's been hard finding a intern position before i join interethopia.com
      </h2>
    </div>

  </div>

</div>

<?php include_once './template/footer.php';?>

</html>