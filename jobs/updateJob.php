<?php include_once("../template/header.php") ?>
<div class=" p-4 bg-gray-200">
  <div class="mx-10 mt-4 py-4 flex flex-1 flex-col items-center justify-center ">
    <h1 class="p-4 capitalize leading-loose text-3xl text-black"> a pitching statment here
      <span class="uppercase leading-loose text-3xl text-blue-300"><br> better platform </span> to get the best amoung
      the
      crowd
    </h1>
    <h2 class="text-2xl text-red-400 capitalize mx-4 leading-relaxed font-extrabold ">
      please <Strong>fill</Strong> the following form carefully
    </h2>
  </div>
  <form class="mx-32 my-2 flex flex-1 flex-col bg-gray-100 ">
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold  leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="position">
        position
      </label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="position"
        placeholder="i.e. network designer">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="division">division</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="division"
        placeholder="i.e. IT & support ">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="duration">duration</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="duration"
        placeholder=" i.e. 6 months">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="address">address</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="address"
        placeholder="i.e.  bole subsity dembel tower">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="contact">contact
        information</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="contact"
        placeholder=" i.e. phone number or email">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="qualification">qualifications</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="qualification"
        placeholder="i.e.  degree,deploma,certificate">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="payment">payment</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="payment"
        placeholder="i.e. BR 1500/month ">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize"
        for="transport">transportation
        fee</label>
      <input class="mx-2 px-2 h-12 py-1 flex-1 border-2 border-blue-300 rounded-l" type="text" name="transport"
        placeholder="i.e. BR 200">
    </div>
    <div class="flex flex-auto justify-evenly items-center rounded mx-2 my-4 p-1">
      <label class=" text-center font-bold leading-relaxed my-4 text-xl mx-2 flex-1 capitalize" for="comp_name"
        for="desc"> short
        description </label>
      <textarea placeholder="what is expected from the intern employee" name="desc" cols="28" rows="10"
        class="mx-2 px-2  py-1 flex-1 border-2 border-blue-300 rounded-l"></textarea>
    </div>
    <button class=" w-32 h-16 mx-4 my-2  text-2xl capitalize  text-black bg-green-500 ">
      submit
    </button>
  </form>
</div>

<?php include_once("../template/footer.php") ?>