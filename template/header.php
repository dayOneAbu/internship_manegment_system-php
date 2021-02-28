<?php
session_start();
$userName = ' ';

$userName = $_SESSION['name'] ?? null;
$email = $_SESSION['email'] ?? null;
$USERID = $_SESSION['USERID'] ?? null;
if ($userName && $email && $USERID) {

    global $userName, $email;
    $userName = $_SESSION['name'];
    $email = $_SESSION['email'];
    $USERID = $_SESSION['USERID'];

}

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="http://localhost:81/css/tailwind.css">
  <!-- <link rel="stylesheet" href="public\tailwind.css"> -->
</head>

<body class="bg-gray-200  h-auto font-sans font-black text-black">
  <nav class="grid grid-cols-3 justify-between">
    <div class="col-span-2 flex flex-auto  justify-self-start">



      <h1 class="m-2 px-2 leading-loose text-2xl text-center"> <a href="../index.php">internEthiopia.com</a> <sub
          class="mx-4 text-sm text-blue-400">job
          opportunity for every
          one!!</sub></h1>
    </div>
    <div class="col-span-1 flex items-center justify-center">
      <ul class="flex flex-1 no-underline list-none  justify-evenly items-center">
        <li class="flex items-center justify-center">
          <button type="submit" value="submit">
            <?php echo 'Hello ' . $userName ?>
          </button>

        </li>
        <li class="flex items-center justify-center">

          <a href="../intern/profile.php?id=<?php echo $USERID ?>">

            <svg xmlns="http://www.w3.org/2000/svg" class=" w-12 h-10" viewBox="0 0 448 512">
              <path
                d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" />
            </svg>
          </a>

        </li>
        <li class="flex items-center justify-center"><a class="text-indigo-700  font-medium"
            href="../../public/support_us.html">support
            us</a></li>
      </ul>

    </div>
  </nav>