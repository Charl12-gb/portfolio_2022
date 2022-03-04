<div class="container-fluid pt-24">
    <hr>
    <section class="my-4 max-w-5xl mx-auto">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="text-2xl font-semibold mb-4">Expérience professionnelle</div>
                <?php  
                    foreach (get_entreprise() as $key => $value) {
                        ?>
                        <div>
                            <div class="text-xl font-bold my-2"><?= $value['nom'] ?></div>
                            <?php 
                            foreach (get_competence_pro($value['id']) as $key => $val) {
                                ?>
                                <p class="my-1 font-light"><?= $val['tache'] ?></p>
                                <p class="text-gray-500 my-1"><?= $val['date_deb'] ?> - <?= $val['date_fin'] ?></p>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <div>
                <div class="text-2xl font-semibold mb-4">Compétences</div>
                <?php
                    foreach (get_competence() as $key => $value) {
                       ?>
                            <div class="text-xl font-light my-2"><?= $value['titre'] ?></div>
                       <?php
                    }
                ?>
            </div>

        </div>
    </section>
    <section class="my-16 max-w-2xl mx-auto">
        <div class="text-4xl font-bold text-center">
            <a class="text-5xl text-blue-400 hover:text-blue-ª00" href="mailto:<?= get_email(); ?>">Discutons 📨</a>
        </div>
    </section>
    <section class="my-4">
        <ul class="flex justify-center gap-4">

            <li>
                <a href="https://twitter.com/" target="_blank" rel="noopener" aria-label="Twitter" class="p-2 inline-block rounded-full border border-gray-300 text-gray-300 hover:text-gray-800 hover:border-gray-800 cursor-pointer transition-colors dark:border-gray-600 dark:text-gray-600 dark:hover:border-gray-300 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://linkedin.com/in/" target="_blank" rel="noopener" aria-label="LinkedIn" class="p-2 inline-block rounded-full border border-gray-300 text-gray-300 hover:text-gray-800 hover:border-gray-800 cursor-pointer transition-colors dark:border-gray-600 dark:text-gray-600 dark:hover:border-gray-300 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <rect x="4" y="4" width="16" height="16" rx="2" />
                        <line x1="8" y1="11" x2="8" y2="16" />
                        <line x1="8" y1="8" x2="8" y2="8.01" />
                        <line x1="12" y1="16" x2="12" y2="11" />
                        <path d="M16 16v-3a2 2 0 0 0 -4 0" />
                    </svg>
                </a>
            </li>
            <li>
                <a href="https://github.com/" target="_blank" rel="noopener" aria-label="GitHub" class="p-2 inline-block rounded-full border border-gray-300 text-gray-300 hover:text-gray-800 hover:border-gray-800 cursor-pointer transition-colors dark:border-gray-600 dark:text-gray-600 dark:hover:border-gray-300 dark:hover:text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" />
                    </svg>
                </a>
            </li>
        </ul>
    </section>

    </main>
    <footer class="w-full text-center p-4 text-xs text-gray-400">
        <p>
            <?= get_name(); ?>-Porfolio
        </p>
    </footer>
</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>

</html>