<?php include_once("../template/header.php") ?>

<div class="mx-40 my-20 flex flex-1 flex-col items-center justify-center ">
  <h2 class="mx-10 capitalize leading-loose text-3xl text-blue-500">
    welcome Back
    </h1>
    <h2 class="text-2xl text-blue-400 ">
      create your Profile
    </h2>
</div>
<form class="lg:mx-56 mt-20 mb-20 sm:mx-10 ">
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="img">bussiness size
      image</label>
    <input type="file" name="img" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="bio">short bio of your
      self</label>
    <textarea placeholder="how do you describe yor self" name="desc" cols="24" rows="6"
      class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="location">location</label>
    <input type="text" name="location" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="skill-set">skill-set</label>
    <input type="text" name="skill-set" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>

  <div class="mx-4 my-2 bg-red-400 rounded ">
    <h2 class="text-2xl mx-4 my-2 uppercase leading-relaxed">
      education background
    </h2>
    <h3 class="text-2xl mx-4 my-2 leading-relaxed">
      please fill the form carfully!
      <span class="text-white">
        it is important to match you with best match job offer
      </span>
    </h3>


  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="school">school/traning
      center</label>
    <input type="text" name="school" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>

  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="education">on education
      status</label>
    <select class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" name="education">
      <option>Pick your acadamic achivments</option>
      <option>certificate</option>
      <option>diploma</option>
      <option>degree</option>
      <option>self-tought</option>
      <option>currently learning</option>
    </select>
  </div>
  <div class="flex flex-auto justify-evenly items-center border-2 border-indigo-300 rounded mx-2 my-4 p-1">
    <label class="font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="program">field of
      study/Program</label>
    <input type="text" name="program" class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l">
  </div>
  <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
    submit
  </button>

</form>

<?php include_once("../template/footer.php") ?>