<?php require_once('../../modele/functions.php'); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.3/dist/flowbite.min.css" />
    <link rel="stylesheet" href="../../modele/style.css" />

</head>

<body class="m-5">
    <header class="w-full px-4 pt-4 max-w-5xl mx-auto">
        <nav class="flex items-center justify-between flex-wrap">
            <div class="flex gap-2 items-center">

                <a href="mailto:name@example.com" aria-label="EMail">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <circle cx="12" cy="12" r="4" />
                        <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28" />
                    </svg>
                </a>

                <a href="https://showfolio.vercel.app/" class="flex items-center font-bold">
                    PortFolio
                </a>
            </div>

            <ul id="nav-menu" class="flex w-auto mt-0 space-x-2">

                <li>
                    <a href="https://showfolio.vercel.app/about/" class="hover:text-blue-800 dark:hover:text-blue-300">About Me</a>
                </li>


                <li>
                    <a href="https://showfolio.vercel.app/blog/" class="hover:text-blue-800 dark:hover:text-blue-300">Contact</a>
                </li>

            </ul>
        </nav>
    </header>
    <div class="pt-24"></div>