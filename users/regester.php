<?php include_once '../template/header.php';?>

<?php
require_once '../db.php';

$errors = array(
    'email' => '',
    'name' => '',
    'password' => '',
    'repass' => '',
    'isManager' => '',
    'created_at' => '',

);
$isManager = '';
$takenEmail = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['name'])) {
        $errors['name'] = 'Name is Required';
    } else {
        $name = $_POST['name'];
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'email is Required';
    } else {
        $email = $_POST['email'];
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'password is Required';
    } else {
        $password = $_POST['password'];
    }
    if (empty($_POST['repass'])) {
        $errors['repass'] = 'pls conferm your password';
    } else {
        $re_pass = $_POST['repass'];
    }

    if (empty($_POST['isManager'])) {
        global $isManager;
        $isManager = false;
    } else {
        global $isManager;
        $isManager = true;
    }

    if (array_filter($errors)) {
        echo 'this form is invalid';
    } else {

        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $repass = mysqli_real_escape_string($conn, $_POST['repass']);
        $isManager = mysqli_real_escape_string($conn, $isManager);
        $created_at = mysqli_real_escape_string($conn, date('Y-m-d H:i:s'));

        $checkUser = "SELECT * FROM USERS WHERE Email = '" . $email . "'";
        $user = mysqli_query($conn, $checkUser);
        if (mysqli_num_rows($user)) {
            global $takenEmail;
            $takenEmail = ' user already regesterd !!!';
        } else {
            $sql = "INSERT INTO USERS(name,email,password,isManager, created_at)
                    VALUES ('$name','$email','$password','$isManager','$created_at')";

            if (mysqli_query($conn, $sql)) {

                // session_start();
                $_SESSION['email'] = $_POST['email'] ?? null;
                $_SESSION['isManager'] = $_POST['isManager'] ?? null;
                $_SESSION['name'] = $_POST['name'] ?? null;
                header('Location: ../index.php');
                mysqli_close($conn);
            } else {
                echo 'query error' . mysqli_error($conn);
                mysqli_close($conn);
            }
        }

    }
}
?>

<div class="container m-auto w-full grid grid-cols-5 gap-4">
  <div class="mx-2 my-8 col-span-2 bg-gradient-to-r from-blue-900 to-blue-400">

    <div class="mx-10 my-56 py-10 flex flex-1 flex-col items-center justify-center ">
      <h2 class="p-2 capitalize leading-loose text-3xl text-center text-white">
        welcome future employee!
      </h2>
      <p>
      <h2 class="text-2xl ml-4 text-center text-white ">
        we are looking forward to work with you
      </h2>
      <span class="text-xl text-black">
        our mission is -> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed eos non dolorum sunt culpa
        eligendi est ipsam
      </span>
      <h3 class="text-2xl text-red-400 capitalize m-4 leading-relaxed font-extrabold ">
        if you already have account click below to login!
      </h3>
      <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
        <a href="./login.php">login</a>
      </button>
      </p>
    </div>
  </div>


  <form action="regester.php" method="POST" class="mx-2 flex flex-col my-8 mt-64 col-span-3">
    <div class="flex  items-center justify-center rounded mx-2 my-1 p-1">

      <h3 class="text-red-600 text-center text-2xl capitalize"> <?php echo $takenEmail; ?></h3>

    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="name">Full
        Name</label>
      <input type="text" name="name" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['name']; ?>
      </h3>
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="email">Email</label>
      <input type="email" name="email" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['email']; ?>
      </h3>
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="password">Password</label>
      <input type="password" name="password" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['password']; ?>
      </h3>
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="repass">Re-Password</label>
      <input type="password" name="repass" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
      <h3 class="text-red-600 mx-4 ">
        <?php echo $errors['repass']; ?>
      </h3>
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 col-span-3 text-xl mx-2 text-center capitalize" for="isManager">i'm
        manager for a company<span><input type="checkbox"
            class="mx-2 focus:outline-none focus:ring focus:border-blue-300 " name="isManager"
            value="true"></span></label>
    </div>

    <button type="submit" name="submit"
      class=" w-32 rounded-lg mx-8 left-12 my-2 text-2xl leading-loose text-black bg-green-500 bottom-4">
      signup
    </button>
  </form>
</div>

<?php include_once "../template/footer.php";?>