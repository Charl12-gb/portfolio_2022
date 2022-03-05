<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white overflow-hidden">
  <div class="pt-16 pb-80 sm:pt-24 sm:pb-40 lg:pt-40 lg:pb-48">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 sm:static">
      <div class="sm:max-w-lg">
      <h1 class="text-2xl font-bold text-center mb-4">
        <strong class="block text-indigo-600 xl:inline">
            <?= get_name() ?>
        </strong>
    </h1>
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl pt-8">
                        <span class="block xl:inline">Analyste </span>
                        <span class="block text-pink-600 xl:inline">Programmeur</span>
                    </h1>
        <p class="mt-4 text-xl text-gray-500"><?= get_descriptions() ?></p>
      </div>
      <div>
        <div class="mt-10">
          <!-- Decorative image grid -->
          <div aria-hidden="true" class="pointer-events-none lg:absolute lg:inset-y-0 lg:max-w-7xl lg:mx-auto lg:w-full">
            <div class="absolute transform sm:left-1/2 sm:top-0 sm:translate-x-8 lg:left-1/2 lg:top-1/2 lg:-translate-y-1/2 lg:translate-x-8">
              <div class="flex items-center space-x-6 lg:space-x-8">
                <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="w-44 h-64 rounded-lg overflow-hidden sm:opacity-0 lg:opacity-100">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRoR4VmjFUMgx94Q1Z-bIgKZNzIqvrLS5Briw&usqp=CAU" alt="" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="https://www.polymtl.ca/gigl/sites/gigl.amigow2020.polymtl.ca/files/vignette-info.jpg" alt="" class="w-full h-full object-center object-cover">
                  </div>
                </div>
                <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShtCvUnQWXBb5zYz_z4DAIro2ueGjGMrB8Km_XpNSAGlpeWrY7kLBBurnSiHuxQvI3kzo&usqp=CAU" alt="" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="../../vue/image/<?= get_link_img() ?>" alt="" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="https://www.codeur.com/blog/wp-content/uploads/2021/08/image-programmation.jpg.webp" alt="" class="w-full h-full object-center object-cover">
                  </div>
                </div>
                <div class="flex-shrink-0 grid grid-cols-1 gap-y-6 lg:gap-y-8">
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="https://www.limko.cm/wp-content/uploads/2020/06/BlogCode.jpg" alt="" class="w-full h-full object-center object-cover">
                  </div>
                  <div class="w-44 h-64 rounded-lg overflow-hidden">
                    <img src="https://infodocbib.net/wp-content/uploads/2020/05/ApprendreLangage2020.png" alt="" class="w-full h-full object-center object-cover">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <a href="https://linkedin.com/" class="inline-block text-center bg-indigo-600 border border-transparent rounded-md py-3 px-8 font-medium text-white hover:bg-indigo-700">Parle moi</a>
        </div>
    </div>
</div>
  </div>
</div>
