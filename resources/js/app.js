import "./bootstrap";
import TransitionEngine from './TransitionEngine'

import.meta.glob([
    '../img/**',
    '../favicons/**.svg',
    '../favicons/**.png',
    '../favicons/**.ico',
    '../favicons/**.webmanifest',
]);

class App {
    constructor(el) {
        this.el = el;

        this.controller = new AbortController();
    }
}

window.addEventListener("DOMContentLoaded", () => {
    window.app = new App();
    new TransitionEngine();
});
