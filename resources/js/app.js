import './bootstrap';
import 'flowbite';
import 'select2';
import 'select2/dist/css/select2.min.css';
import '../../vendor/masmerise/livewire-toaster/resources/js';
import { initFlowbite } from 'flowbite';

document.addEventListener('DOMContentLoaded', () => {
   console.log("DOM fully loaded and parsed");
});

document.addEventListener('livewire:load', () => {
    console.log("Livewire component loaded");
    initFlowbite(); // Initialize Flowbite on Livewire load
});

document.addEventListener('livewire:updated', () => { 
    console.log("Livewire component updated");
    initFlowbite(); // Reinitialize Flowbite after Livewire updates the DOM
});
