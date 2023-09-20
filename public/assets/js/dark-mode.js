const body = document.body;
        const themeToggle = document.querySelector('#theme-toggle');
        const themeIcon = document.querySelector('#theme-icon');
        const localStorageTheme = localStorage.getItem('theme');

        function toggleTheme() {
            if (localStorage.theme === 'dark' || (!localStorage.theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                localStorage.theme = 'light';
                themeIcon.src = '/assets/icons/mode-light.svg';
            } else {
                localStorage.theme = 'dark'; 
                themeIcon.src = '/assets/icons/outline-dark-mode.svg';
            }

            updateTheme();
        }

        function updateTheme() {
            if (localStorage.theme === 'dark') {
                document.documentElement.classList.add('dark');
                themeIcon.src = '/assets/icons/outline-dark-mode.svg'; 
            } else {
                document.documentElement.classList.remove('dark');
                themeIcon.src = '/assets/icons/mode-light.svg'; 
            }
        }

        updateTheme();

        themeToggle.addEventListener('click', toggleTheme);