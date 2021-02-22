<?php include_once '../template/header.php';?>
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
        login
      </button>
      </p>
    </div>
  </div>


  <form action="regester.php" method="POST" class="mx-2 flex flex-col my-8 mt-64 col-span-3">

    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="fullname">Full
        Name</label>
      <input type="text" name="fullname" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="email">Email</label>
      <input type="email" name="email" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize" for="fullname">Password</label>
      <input type="password" name="fullname" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 text-xl mx-2 text-center capitalize"
        for="fullname">Re-Password</label>
      <input type="password" name="fullname" class="mx-2 col-span-2 px-2 h-12 py-1 border-2 border-blue-300 rounded-lg">
    </div>
    <div class="grid grid-cols-3 justify-between items-center  rounded mx-2 my-1 p-1">
      <label class="font-bold leading-relaxed my-1 col-span-3 text-xl mx-2 text-center capitalize"
        for="company_manager">i'm
        manager for a company<span><input type="checkbox"
            class="mx-2 focus:outline-none focus:ring focus:border-blue-300 " name="company_manager"></span></label>
    </div>

    <button type="submit"
      class=" w-32 rounded-lg mx-8 left-12 my-2 text-2xl leading-loose text-black bg-green-500 bottom-4">
      signup
    </button>
  </form>
</div>

<?php include_once("../template/footer.php");?>