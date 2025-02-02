import "./bootstrap";
import TransitionEngine from './TransitionEngine'

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
