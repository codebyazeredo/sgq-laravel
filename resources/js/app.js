import './bootstrap';

import * as bootstrap from 'bootstrap';

window.bootstrap = bootstrap;

document.getElementById('toggleSidebar').addEventListener('click', () => {
    document.body.classList.toggle('sidebar-collapsed');
});
