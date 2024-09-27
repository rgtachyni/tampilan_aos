<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

</head>
<body>
  <section class="bg-pink text-white ">
    <div class="flex justify-around pt-5 mx-auto">
    <div>
      <h1 class="font-bold text-3xl">APPER</h1>
    </div>
      <!-- Hamburger Menu Button -->
      <div class="md:hidden">
                <button id="menu-button" class="text-white focus:outline-none ">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
        </div>

    <div class="hidden gap-4 font-bold  md:flex space-x-4 " id="menu">
      <a href="" class="hover:text-pinkmuda" >Home</a>
      <a href="" class="hover:text-pinkmuda">How it works</a>
      <a href="" class="hover:text-pinkmuda">Features</a>
      <a href="" class="hover:text-pinkmuda">Pages</a>
      <a href="" class="hover:text-pinkmuda">Pricing</a>
      <a href="" class="hover:text-pinkmuda">Blog</a>
    </div>
    <div>
      <a href="" class="bg-white text-pink font-bold rounded-md px-3 py-1 hover:bg-blue-400">GET STARTED</a>
    </div>
    </div>

    <div class="flex pt-5 pl-44 flex-col  md:flex-row ">
      <div class="w-full pt-20  ">
        <h1 class="md:text-4xl text-6xl md:text-center font-bold text-left">Best way to manage <br> your costumer.</h1>
        <h1 >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid et sequi reprehenderit dicta optio deleniti nisi maxime quasi ad cumque!</h1>
        <div class="flex gap-3 pt-5 ">
        <div class=" bg-white text-pink flex px-3 py-1 rounded-md">
          <img src="{{asset('gambar/hp.png')}}" alt="" class="h-8 ">
          <h1 class="text-xs font-bold">Lorem ipsum dolor <br> App Store</h1>
        </div>
        <div class=" bg-white text-pink flex px-3 py-1 rounded-md">
          <img src="{{asset('gambar/ps.png')}}" alt="" class="h-7 pr-2 ">
          <h1 class="text-xs font-bold ">Lorem ipsum dolor <br> Google Play</h1>
        </div>
        </div>
        <div class="flex mt-5 gap-2">
          <img src="{{asset('gambar/sms.png')}}" alt="" class="bg-white w-12 py-2 px-3 rounded-full ">
          <h1 class="text-xs pt-1">"Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. Pariatur totam beatae aspernatur nam "</h1>
        </div>
      </div>
      <div class="w-full  grid justify-center pt-14  "> 
        <img src="{{asset('gambar/meong.png')}}" alt="" class="w-96 "  >
      </div>
    </div>
  </section>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f542b3" fill-opacity="1" d="M0,32L34.3,74.7C68.6,117,137,203,206,234.7C274.3,267,343,245,411,218.7C480,192,549,160,617,165.3C685.7,171,754,213,823,213.3C891.4,213,960,171,1029,149.3C1097.1,128,1166,128,1234,138.7C1302.9,149,1371,171,1406,181.3L1440,192L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>

  <section class="grid justify-center ">
    <h1 class="font-bold text-2xl text-center text-pink"  
     >Trusted by 
    <span class="text-pinkmuda">150+ </span> Companies</h1>
    <h1 class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum <br> omnis perferendis maiores eveniet laudantium commodi.</h1>
    <div class="flex gap-10 pt-10 items-center font-bold">
      <div class="flex items-center gap-1 " >
      <img src="{{asset('gambar/paypal.png')}}" alt="" class="h-14">
      <h1>Paypal</h1>
      </div>
      <div class="flex items-center gap-1" >
      <img src="{{asset('gambar/spotify.png')}}" alt="" class="h-14">
      <h1 class=" font-bold">Spotify</h1>
      </div>
      <div class="flex items-center gap-1" >
      <img src="{{asset('gambar/fast-forward.png')}}" alt="" class="h-14">
      <h1>Shopbot</h1>
      </div>
      <div class="flex items-center gap-2" >
      <img src="{{asset('gambar/slack.png')}}" alt="" class="h-14">
      <h1>Slack</h1>
      </div>
      <div class="flex items-center gap-1" >
      <img src="{{asset('gambar/hastag.png')}}" alt="" class="h-14">
      <h1>Envato</h1>
      </div>
    </div>
    <h1 class="font-bold text-2xl text-center text-pinkmuda pt-10">Features
    <span class="text-pink">that makes app different!</span> </h1>
    <h1 class="text-center pb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum <br> omnis perferendis maiores eveniet laudantium commodi.</h1>
  </section>

  <section class="flex pt-20  flex-col  md:flex-row  ">
    <div class=" justify-center flex items-center md:w-full " >
      <img src="{{asset('gambar/people.png')}}" alt="">
    </div>
    <div class="w-full mx-10">
      <h1 class="text-pink text-3xl font-bold text-center md:text-left mt-10">Some awesome words <br> <span class="text-pinkmuda">about app.</span></h1>
      <h1 class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, ab. Debitis natus minima quam recusandae quod enim itaque expedita, voluptatibus corporis, quaerat repellat veritatis est sed pariatur. Magnam possimus veritatis adipisci omnis harum aliquam laborum aut aliquid, tempore minima amet?
      </h1>
      
      <div class="grid grid-cols-2 gap-5 pr-10 pt-5 ">
        <div class="flex items-center bg-red-50 justify-center gap-4 py-3">
          <img src="{{asset('gambar/plus.png')}}" alt="" class="w-8 py-2 px-2 bg-orange-100 rounded-full">
          <h1 class="font-bold text-xs text-pink text-center">17 M+ <br><span class="text-black">Download</span></h1>
        </div>
        <div class="flex items-center bg-red-50 justify-center gap-4 py-3">
          <img src="{{asset('gambar/plus.png')}}" alt="" class="w-8 py-2 px-2 bg-orange-100 rounded-full">
          <h1 class="font-bold text-xs text-pink text-center">17 M+ <br><span class="text-black">Download</span></h1>
        </div>
        <div class="flex items-center bg-red-50 justify-center gap-4 py-3">
          <img src="{{asset('gambar/plus.png')}}" alt="" class="w-8 py-2 px-2 bg-orange-100 rounded-full">
          <h1 class="font-bold text-xs text-pink text-center">17 M+ <br><span class="text-black">Download</span></h1>
        </div>
        <div class="flex items-center bg-red-50 justify-center gap-4 py-3">
          <img src="{{asset('gambar/plus.png')}}" alt="" class="w-8 py-2 px-2 bg-orange-100 rounded-full">
          <h1 class="font-bold text-xs text-pink text-center">17 M+ <br><span class="text-black">Download</span></h1>
        </div>
      </div>
      <div class="flex gap-3 font-bold justify-center md:justify-start">
      <button class="bg-pink text-white py-2 px-5 mt-2 rounded-md hover:bg-blue-400">START FOR TRAIL</button>
      <button class=" text-pink text-xs py-2 px-5 mt-2 rounded-lg  flex items-center gap-2 hover:bg-blue-400"><img src="{{asset('gambar/play.png')}}" alt="" class="w-6"> WATCH THE VIDIO</button>
      </div>
    </div>
  </section>

  <section class="pt-10 ">
    <h1 class="text-pink text-2xl text-center font-bold">Best & simple <span class="text-pinkmuda">pricing</span> </h1>
    <h1 class="text-center font-normal px-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque placeat architecto dignissimos, facere error voluptate quo nisi earum incidunt aspernatur neque voluptatem nihil ab voluptas autem quis suscipit ad voluptatibus.
    </h1>
    <div class="flex flex-col md:flex-row gap-5 px-10 py-5 md:justify-center md:gap-10 ">
      <div class="bg-red-50 grid rounded-xl justify-center text-center py-10 mx-28 gap-5  hover:bg-blue-300 md:px-10 ">
      <div class="flex justify-center">
        <img src="{{asset('gambar/plane.png')}}" alt="" class="w-10">
        </div>
        <h1>Standard  <br><span class="font-normal">fot the standard</span></h1>
        <div class="flex items-center justify-center">
        <img src="{{asset('gambar/dollar.png')}}" alt="" class="w-10">
        <h1 class="text-3xl">15</h1>
        </div>
        <h1 class="font-normal">Up to 5 website <br> 10 Costumize sub pages <br> 2 Domains Occent <br> Support on requent </h1>
        <button class="text-pink rounded-xl border-2 border-gray-600 hover:bg-slate-600 md:px-14 my-10 font-bold">BUY NOW</button>
      </div>

      <div class="bg-red-50 grid rounded-xl justify-center text-center  py-10 mx-28 gap-5  hover:bg-blue-300 md:px-10">
      <div class="flex justify-center">
        <img src="{{asset('gambar/plane.png')}}" alt="" class="w-10">
        </div>
        <h1>Standard  <br><span class="font-normal">fot the standard</span></h1>
        <div class="flex items-center justify-center">
          
        <img src="{{asset('gambar/dollar.png')}}" alt="" class="w-10">
        <h1 class="text-3xl">15</h1>
        </div>
        <h1 class="font-normal">Up to 5 website <br> 10 Costumize sub pages <br> 2 Domains Occent <br> Support on requent </h1>
        <button class="text-pink rounded-xl border-2 border-gray-600 hover:bg-slate-600 md:px-14 my-10 font-bold">BUY NOW</button>
      </div>

      <div class="bg-red-50 grid rounded-xl justify-center text-center  py-10 mx-28 gap-5  hover:bg-blue-300 md:px-10">
      <div class="flex justify-center">
        <img src="{{asset('gambar/plane.png')}}" alt="" class="w-10">
        </div>
        <h1>Standard  <br><span class="font-normal">fot the standard</span></h1>
        <div class="flex items-center justify-center">
          
        <img src="{{asset('gambar/dollar.png')}}" alt="" class="w-10">
        <h1 class="text-3xl">15</h1>
        </div>
        <h1 class="font-normal">Up to 5 website <br> 10 Costumize sub pages <br> 2 Domains Occent <br> Support on requent </h1>
        <button class="text-pink rounded-xl border-2 border-gray-600 hover:bg-slate-600 md:px-14 my-10 font-bold">BUY NOW</button>
      </div>
      </div>

      <h1 class="text-center font-normal">Not sure whot to choose? <a href="https://www.youtube.com/watch?v=knrtBJLL5E4" class="underline text-pink">Contact us</a> for costum packages</h1>

      <div class="text-center font-normal py-10">
      <h1 class="text-pink text-3xl font-bold">FAQ <span class="text-pinkmuda">-Frenquently Asked Questions</span></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, repudiandae! <br> Quidem delectus placeat numquam aliquid perspiciatis nemo consectetur, blanditiis autem enim? Quasi natus harum <br> quisquam voluptates ipsum porro reprehenderit veniam!</p>
      </div>
  </section>

  <section class="grid gap-5">
  
    <h1 class="text-pink  bg-red-50 mx-16 py-3 pl-5 rounded-lg hover:bg-blue-300 font-bold">How i can pay <br>
       <span class="text-black font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, non? Praesentium, pariatur. Quidem hic adipisci corrupti vitae maiores, similique expedita. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi perferendis reiciendis architecto quidem aperiam illo vel sed temporibus deleniti eligendi?</span></h1>
   
    <h1 class="bg-red-50 mx-16 py-3 pl-5 rounded-lg hover:bg-blue-300 font-bold">How to setup account ?</h1>
    <h1 class="bg-red-50 mx-16 py-3 pl-5 rounded-lg hover:bg-blue-300 font-bold">What is process to get refund ?</h1>
    <h1 class="bg-red-50 mx-16 py-3 pl-5 rounded-lg hover:bg-blue-300 font-bold">Can i get code bug support for customization ?</h1>
  </section>

  <section class="py-9 px-5">
    <div class="grid justify-center text-center " >
    <h1 class="text-3xl text-pink font-bold">Read Latest <span class="text-pinkmuda">Story</span></h1>
    <h1 class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Rerum unde est ratione fugiat incidunt sed voluptatum ipsum. Recusandae, deserunt architecto.</h1>
    </div>
    <div class="flex gap-5 py-10 md:flex-row flex-col font-bold">
      <div class="grid justify-items-center ">
        <img src="{{asset('gambar/4gif.gif')}}" alt=""  class="w-80 justify-center">
        <div class="text-center bg-red-50 p-10  grid gap-2 rounded-md mx-32 md:mx-1">
        <h1 class="text-2xl">Cool features added!</h1>
        <h1 class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex in consequuntur autem ipsa sequi odit.</h1>
        <a href="https://www.kompas.com/tag/otp" class="text-pink hover:text-pinkmuda">READ MORE</a>
        </div>
      </div>
      <div class="grid justify-items-center">
        <img src="{{asset('gambar/3gif.gif')}}" alt=""  class="w-80 justify-center">
        <div class="text-center bg-red-50 p-10  grid gap-2 rounded-md mx-32 md:mx-1">
        <h1 class="text-2xl">Top rated app! Yupp.</h1>
        <h1 class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex in consequuntur autem ipsa sequi odit.</h1>
        <a href="https://nasional.tempo.co/read/1906749/mk-kabulkan-gugatan-ambang-batas-cagub-di-pilkada-2024-yang-diajukan-partai-buruh-ini-profil-partai-buruh" class="text-pink hover:text-pinkmuda">READ MORE</a>
        </div>
      </div>
      <div class="grid justify-items-center">
        <img src="{{asset('gambar/2gif.gif')}}" alt=""  class="w-80 justify-center">
        <div class="text-center bg-red-50 p-10  grid gap-2 rounded-md mx-32 md:mx-1">
        <h1 class="text-2xl">
          Creative ideas on app.
        </h1>
        <h1 class="font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex in consequuntur autem ipsa sequi odit.</h1>
        <a href="https://nasional.kompas.com/read/2024/08/21/18211261/dpr-tolak-putusan-mk-soal-pilkada-jokowi-itu-biasa" class="text-pink hover:text-pinkmuda">READ MORE</a>
        </div>
      </div>
    </div>
  </section >

  <section class="flex gap-20 font-normal bg-pink justify-center py-10 text-xs">
  <div class="">
    <h1 class="font-bold text-xl">APPER</h1>
    <h1>support@123gmail.com</h1>
    <h1>+1-900-123-123</h1>
  </div>
  <div class="grid gap-1">
    <h1 class="font-bold">Useful links</h1>
    <h1>Home</h1>
    <h1>About us</h1>
    <h1>Servicec</h1>
    <h1>Blog</h1>
    <h1>Contact Us</h1>
  </div>
  <div class="grid gap-1">
    <h1 class="font-bold">Help</h1>
    <h1>FAQS</h1>
    <h1>Support</h1>
    <h1>How it works</h1>
    <h1>Terms & conditions</h1>
    <h1>Privacy policy</h1>
  </div>
  <div class="grid gap-1">
    <h1 class="font-bold">Let's Try Out</h1>
    <div class="bg-white flex py-1 px-3 rounded-md text-pink items-center">
    <img src="{{asset('gambar/hp.png')}}" alt="" class="w-7"  >
    <h1 class=""> Lorem ipsum  <br>  App Store</h1>
    </div>
    <div class="bg-white flex py-1 px-3 gap-1 rounded-md text-pink items-center">
    <img src="{{asset('gambar/ps.png')}}" alt="" class="w-5" >
    <h1 class=""> Lorem ipsum  <br>  App Store</h1>
    </div>
  </div>
  </section>


  

</body>
</html>