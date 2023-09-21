<nav class="fixed left-0 bg-[rgba(55,63,82,0.9)] dark:bg-[rgba(49,51,56,0.9)] h-screen p-4 flex flex-col justify-start items-center">
        <button class="lg:hidden text-white">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
        <ul class="space-y-4">
            <li>
                <a class="text-white" href="<?= base_url('') ?>">Main</a>
            </li>
            <li>
                <a class="text-white" href="<?= base_url('table') ?>">Table</a>
            </li>
            <li>
                <a class="text-white" href="<?= base_url('section') ?>">Section</a>
            </li>
            <li>
                <button id="theme-toggle" class="rounded-full w-10 h-10 text-white">
                    <img id="theme-icon" src="/assets/icons/mode-light.svg" alt="Light mode icon">
                </button>
            </li>
        </ul>
    </nav>