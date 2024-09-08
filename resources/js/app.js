import './bootstrap';
import 'flowbite';
import 'select2';
import 'select2/dist/css/select2.min.css';
import '../../vendor/masmerise/livewire-toaster/resources/js';

// Import AlpineJS and initialize it
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Import Flowbite and ensure it is initialized if necessary
import { initFlowbite } from 'flowbite';

// Expose initFlowbite globally
window.initFlowbite = initFlowbite;

document.addEventListener('DOMContentLoaded', () => {
    console.log("DOM fully loaded and parsed");
    // Optionally initialize Flowbite here if needed
    if (typeof window.initFlowbite === 'function') {
        window.initFlowbite();
    }
});

document.addEventListener('livewire:load', () => {
    console.log("Livewire component loaded");
    // Ensure Flowbite initialization on Livewire component load
    if (typeof window.initFlowbite === 'function') {
        window.initFlowbite();
    }
});

document.addEventListener('livewire:updated', () => { 
    console.log("Livewire component updated");
    // Ensure Flowbite reinitialization after Livewire updates
    if (typeof window.initFlowbite === 'function') {
        window.initFlowbite();
    }
});
