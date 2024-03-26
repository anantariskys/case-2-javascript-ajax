<nav class="navbar bg-[#007b8E] sticky top-0 z-20">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl text-[#ECD7CD]">Medicure</a>
</div>
<div class="flex-end">
      <a class="btn btn-ghost text-xl text-[#ECD7CD]"><?php 
    if(isset($_GET['username']) && !empty($_GET['username'])){
    echo "Welcome, ".$_GET['username'];
}else{
    echo 'Tolong masukkan username di query url!!!';
}

      ?></a>
   
  </div>
</nav>
<div class="hero min-h-screen" style="background-image: url(https://source.unsplash.com/random/1200×720/?hospital);">
  <div class="hero-overlay bg-opacity-60"></div>
  <div class="hero-content text-center bg-black bg-opacity-40 backdrop-blur-sm">
    <div class="max-w-lg text-[#ECD7CD]">
      <h1 class="mb-5 text-5xl font-bold">Kesehatan Anda adalah Prioritas Kami</h1>
      <p class="mb-5">Menciptakan Keseimbangan yang Harmonis dalam Tubuh dan Pikiran</p>
    </div>
  </div>
</div>