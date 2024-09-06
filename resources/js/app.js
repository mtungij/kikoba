import './bootstrap';
import 'flowbite';

import 'select2';
import 'select2/dist/css/select2.min.css';

import '../../vendor/masmerise/livewire-toaster/resources/js'; // 
import { initFlowbite } from 'flowbite';



document.addEventListener('DOMContentLoaded', () => {
   console.log("dom loaded");
});

document.addEventListener('livewire:navigated', () => { 
    console.log("Navigated");
    initFlowbite();
})