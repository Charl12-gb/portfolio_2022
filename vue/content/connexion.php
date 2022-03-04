<!DOCTYPE html>
<html lang="en" class="h-full h-full bg-gray-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />
  <link rel="stylesheet" href="../../modele/style.css" />

  <title>PortFolio</title>
</head>

<body class="font-sans antialiased text-gray-600 min-h-full flex flex-col min-h-full flex flex-col relative">
  <main class="relative z-10 flex-auto flex items-center justify-center text-sm text-center text-gray-600 py-16 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm">
      <h1 class="text-4xl font-bold text-center mb-4">
        <strong class="block text-indigo-600 xl:inline">Connexion</strong>
      </h1>
      <?php
      if (isset($_REQUEST['error'])) {
      ?>
        <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
          <span class="font-medium">Danger!</span> Erreur de connexion
        </div>
      <?php
      } else {
        echo 'Saisir les informations de connexion';
      }
      ?>

      <hr>
      <form action="../../modele/connect.php" method="POST" x-data="{ dirty: false }" class="pt-12">

        <input type="hidden" name="_action" value="connect_membre">
        <div class="relative">
          <label for="email-address" class="sr-only">Email address</label>
          <input x-ref="email" id="email-address" name="email" type="email" required class="text-gray-900 ring-gray-900 ring-opacity-5 placeholder-gray-400 appearance-none bg-white rounded-md block w-full px-3 py-2 border border-transparent shadow ring-1 sm:text-sm mb-4 focus:border-teal-500 focus:ring-teal-500 focus:outline-none" placeholder="Email address" value="" @input="dirty = true" />
        </div>
        <div class="relative">
          <label for="password" class="sr-only">Password</label>
          <input x-ref="password" id="passwd" name="passwd" type="password" required class="text-gray-900 ring-gray-900 ring-opacity-5 placeholder-gray-400 appearance-none bg-white rounded-md block w-full px-3 py-2 border border-transparent shadow ring-1 sm:text-sm mb-6 focus:border-teal-500 focus:ring-teal-500 focus:outline-none" placeholder="Password" @input="dirty = true" />
        </div>

        <button type="submit" class="block w-full py-2 px-3 border border-transparent rounded-md text-white font-medium bg-gray-700 shadow-sm sm:text-sm mb-10 hover:bg-gray-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-gray-700 focus-visible:ring-offset-2 focus-visible:ring-offset-gray-50">
          Connexion
        </button>

        <p class="text-center">
          <a href="" class="text-sm underline hover:text-gray-900">Forgot password?</a>
        </p>
      </form>
    </div>
  </main>

  <img src="/img/beams-corner-light.jpg" alt="" class="absolute bottom-0 right-0 w-[45.875rem]">

  <script src="https://cdn.usefathom.com/script.js" site="SOXJJCZQ" defer></script>
</body>

</html>