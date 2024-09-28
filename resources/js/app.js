import './bootstrap';
import 'flowbite';
import 'select2';
import 'select2/dist/css/select2.min.css';
import '../../vendor/masmerise/livewire-toaster/resources/js';

// Import AlpineJS and initialize it
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

document.addEventListener("livewire:navigating", () => {
    // Mutate the HTML before the page is navigated away...
    initFlowbite();
});

document.addEventListener("livewire:navigated", () => {
    // Reinitialize Flowbite components
    initFlowbite();
});


