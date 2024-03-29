<?php include_once "../template/header.php";?>

<?php
require_once '../db.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM USERS WHERE Email = '" . $email . "'";
    $user = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($user);

    if ($password == $user['Password']) {
        // session_start();
        $_SESSION['email'] = $user['Email'] ?? null;
        $_SESSION['USERID'] = $user['USERID'] ?? null;
        $_SESSION['isManager'] = $user['isManager'] ?? null;
        $_SESSION['name'] = $user['Name'] ?? null;
        if ($user['isManager'] == true) {
            $test = " SELECT USERID FROM COMPANY WHERE USERID = '" . $user['USERID'] . "'";
            $res = mysqli_query($conn, $test);
            $res = mysqli_fetch_assoc($res);

            if ($res['USERID']) {

                header('Location: ../company/profile.php?id=' . urldecode($res['USERID']));
                mysqli_close($conn);
            } else {
                header('Location: ../company/createComp_Profile.php');
                mysqli_close($conn);
            }

        } else {
            $test = " SELECT USERID FROM PROFILES WHERE USERID = '" . $user['USERID'] . "'";
            $res = mysqli_query($conn, $test);
            $res = mysqli_fetch_assoc($res);

            if ($res['USERID']) {

                header('Location: ../intern/profile.php?id=' . urldecode($res['USERID']));
                mysqli_close($conn);
            } else {
                header('Location: ../intern/createProfile.php');
                mysqli_close($conn);
            }

        }

    } else {
        $error = " your password seems wrong please try again";
    }

}
?>

<div class="container m-auto w-full  grid grid-cols-5 gap-4">
  <div class="mx-2 my-8 col-span-2 bg-gradient-to-r from-blue-900 to-blue-400">
    <div class="mx-10 my-56 py-10 flex flex-1 flex-col items-center justify-center ">
      <h2 class="p-4 capitalize leading-loose text-3xl text-white">
        welcome back!
      </h2>
      <p>
      <h2 class="text-2xl ml-4 text-center text-white ">
        we are delighted to work with you</h2>
      <span class="text-xl text-black">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos non dolorum sunt culpa eligendi est ipsam
      </span>
      <h3 class="text-2xl text-red-400 capitalize m-4 leading-relaxed font-extrabold ">
        if you don't have account click below to regester!
      </h3>
      <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
        Regester
      </button>
      </p>
    </div>
  </div>
  <form action="login.php" method="POSt" class="mx-2 flex flex-col  my-auto col-span-3">
    <div class="flex flex-1 flex-col items-center justify-center rounded mx-2 my-1 p-1">

      <h3 class="text-red-600 text-center text-2xl"> <?php echo $error; ?></h3>

    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="email">email</label>
      <input class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg" type="text" name="email">
    </div>
    <div class="grid grid-cols-3 justify-between items-center rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="password">password</label>
      <input class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg" type="password" name="password"
        required>
    </div>
    <button type="submit" class=" w-32 rounded-lg mx-14  mt-4 text-2xl leading-loose text-black bg-green-500 bottom-4">
      login
    </button>
  </form>
</div>

<?php include_once "../template/footer.php";?>