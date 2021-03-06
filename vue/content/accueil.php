<main class="flex-1 mx-4 md:mx-12 lg:mx-24 mt-8 sm:mt-16"></main>
<section class="p-4 flex flex-col items-center">


    <div class="w-48 h-48 rounded-full mb-6 bg-red-100">
        <img src="../../vue/image/<?= get_link_img(); ?>" class="w-full p-2 h-full object-contain" alt="<?= get_name() ?>" />
    </div>

    <h1 class="text-2xl font-bold text-center mb-4 specialtxt">
        Hey👋Ici c'est <strong class="block text-indigo-600 xl:inline"><?= get_name() ?></strong> ...
    </h1>
    <div class="text-5xl md:text-6xl font-bold text-center max-w-3xl mb-4 relative">
        <div class="absolute top-10 opacity-20 transform left-1/2 -translate-x-1/2 text-red-300 z-0 w-full">
            <svg class="max-w-xs md:max-w-lg mx-auto w-full" viewbox="0 0 625 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2 46c1.035 2.276 1.035 2.276 1.036 2.275h.002l.011-.006.048-.021.198-.089c.176-.08.443-.197.796-.353.707-.31 1.763-.767 3.145-1.35a406.34 406.34 0 0112.06-4.841c10.438-4.011 25.451-9.363 43.72-14.716C99.57 16.19 149.07 5.5 201 5.5v-5C148.43.5 98.43 11.312 61.61 22.1c-18.42 5.398-33.563 10.796-44.108 14.848a411.168 411.168 0 00-12.209 4.9 243.513 243.513 0 00-4.039 1.746 96.86 96.86 0 00-.268.121l-.015.007-.004.002c-.002 0-.002 0 1.033 2.276zM201 5.5c51.827 0 96.622 13.509 138.315 26.573 41.555 13.021 80.28 25.705 119.331 23.423l-.292-4.992c-37.949 2.218-75.724-10.098-117.544-23.202C299.128 14.24 253.673.5 201 .5v5zm257.646 49.996c38.873-2.272 80.4-14.874 112.112-26.845a615.88 615.88 0 0038.831-16.199 484.157 484.157 0 0011.08-5.243 292.1 292.1 0 003.713-1.852l.197-.1.05-.027.014-.006.004-.002c.001 0 .001-.001-1.147-2.222L622.351.78h-.002l-.011.006a611.127 611.127 0 01-53.346 23.187c-31.538 11.905-72.511 24.303-110.638 26.531l.292 4.992z" fill="currentColor" />
            </svg>
        </div>
        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Analyste </span>
                        <span class="block text-pink-600 xl:inline">Programmeur</span>
                    </h1>
    </div>
    <p class="font-light text-center max-w-sm mb-8">
        <?= get_descriptions(); ?>
    </p>


    <a href="https://linkedin.com/" rel="noopener noreferrer" target="_blank" class="px-6 py-4 rounded-full font-semibold text-lg bg-black text-white hover:bg-gray-800 transition-colors dark:bg-white dark:text-black dark:hover:bg-gray-200">Parle-moi</a>

</section>


<section class="grid grid-cols-2 md:grid-cols-3 gap-4 my-8 max-w-5xl mx-auto" style="min-height: 300px">

<?php  
    $i = 0;
    foreach (get_folio() as $key => $value) {
        if($i == 0){
        ?>
<div class="relative  shadow-sm md:shadow-2xl">
        <img class="rounded object-cover w-full h-full" loading="lazy" src="../../vue/image/<?= $value['lien_img'] ?>" />
        <div class="absolute top-0 left-0 rounded w-full h-full bg-black bg-opacity-30 grid place-items-center opacity-0 hover:opacity-100 transition-opacity duration-200">
            <a class="px-6 py-2 rounded-full bg-black text-white" href="<?= $value['lien_site'] ?>" target="_blank" rel="noopener noreferrer"><strong class="block text-pink-300 xl:inline">Consuler <?= $value['titre'] ?></strong></a>
        </div>
    </div>
        <?php
        }else if($i == 1){
            ?>
<div class="relative row-span-2 shadow-sm md:shadow-2xl">
        <img class="rounded object-cover w-full h-full" loading="lazy" src="../../vue/image/<?= $value['lien_img'] ?>" />
        <div class="absolute top-0 left-0 rounded w-full h-full bg-black bg-opacity-30 grid place-items-center opacity-0 hover:opacity-100 transition-opacity duration-200">
            <a class="px-6 py-2 rounded-full bg-black text-white" href="<?= $value['lien_site'] ?>" target="_blank" rel="noopener noreferrer"><strong class="block text-pink-300 xl:inline">Consuler <?= $value['titre'] ?></strong></a>
        </div>
    </div>
            <?php
        }else if($i == 2){
            ?>
<div class="relative  shadow-sm md:shadow-2xl">
        <img class="rounded object-cover w-full h-full" loading="lazy" src="../../vue/image/<?= $value['lien_img'] ?>" />
        <div class="absolute top-0 left-0 rounded w-full h-full bg-black bg-opacity-30 grid place-items-center opacity-0 hover:opacity-100 transition-opacity duration-200">
            <a class="px-6 py-2 rounded-full bg-black text-white" href="<?= $value['lien_site'] ?>" target="_blank" rel="noopener noreferrer"><strong class="block text-pink-300 xl:inline">Consuler <?= $value['titre'] ?></strong></a>
        </div>
    </div>
            <?php
        }else if($i == 3){
            ?>
 <div class="relative  shadow-sm md:shadow-2xl">
        <img class="rounded object-cover w-full h-full" loading="lazy" src="../../vue/image/<?= $value['lien_img'] ?>" />
        <div class="absolute top-0 left-0 rounded w-full h-full bg-black bg-opacity-30 grid place-items-center opacity-0 hover:opacity-100 transition-opacity duration-200">
            <a class="px-6 py-2 rounded-full bg-black text-white" href="<?= $value['lien_site'] ?>" target="_blank" rel="noopener noreferrer"><strong class="block text-pink-300 xl:inline">Consuler <?= $value['titre'] ?></strong></a>
        </div>
    </div>
            <?php
            $i = 0;
        }
        $i++;
    }
?>
</section>
</main>