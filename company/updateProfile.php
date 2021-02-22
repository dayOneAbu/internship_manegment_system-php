<?php include_once("../template/header.php"); ?>


<div class="mx-40 py-10 flex flex-col items-center justify-center ">
  <h2 class="mx-10 p-4 capitalize leading-loose text-3xl text-blue-500">
    welcome back!
  </h2>
  <p class="text-2xl text-blue-400 ">
    we are delighted to work with you
  </p>
</div>
<form class="lg:mx-56 mt-32 mb-20 sm:mx-10 ">
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="img">company logo</label>
    <input type="file" name="img" class="mx-2 px-2 h-12 py-1 flex-1 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name"> company
      name</label>
    <input type="text" name="comp_name" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>

  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name" for="comp_email">
      company email
      adress</label>
    <input type="text" name="comp_email" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name" for="comp_web">
      company website</label>
    <input type="text" name="comp_web" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name" for="comp_location">
      company office
      location</label>
    <input type="text" name="comp_location" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name" for="comp_phNo">
      company phone
      number</label>
    <input type="text" name="comp_phNo" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name" for="desc"> short
      description </label>
    <textarea placeholder="what your organzation do ?" name="desc" cols="24" rows="6"
      class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
  </div>
  <button type="submit" class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
    submit
  </button>
</form>





<?php include_once("../template/footer.php"); ?>