export default class HomePage {
    constructor(el) {
        this.el = el;

        this.getElements();
        this.setDefaults();
        this.setEvents();
    }

    getElements() {
        this.linksContainer = document.querySelector("[data-role=links-container]");
        this.linksBackground = document.querySelector("[data-role=links-background]");
        this.links = document.querySelectorAll("[data-role=link]");
    }

    setDefaults() {
        this.linksContainerTop = this.linksContainer.getBoundingClientRect().top;
    }

    setEvents() {
        this.links.forEach((link, index) => {
            link.classList.remove("hover:bg-stone-100/75");

            link.addEventListener("mouseenter", () => {
                this.top = 0;

                for (let i = 0; i < index; i++) {
                    this.top += Array.from(this.links)[i].offsetHeight;
                }

                if (this.linksBackground.classList.contains("opacity-0")) {
                    this.linksBackground.classList.remove("transition-all");
                }

                this.linksBackground.style.transform = `translate3d(0, ${this.top}px, 0)`;

                setTimeout(() => {
                    this.linksBackground.classList.add("transition-all");
                    this.linksBackground.style.height = link.offsetHeight + "px";
                }, 20);
            });
        });

        this.linksContainer.addEventListener("mouseenter", () => {
            setTimeout(() => {
                this.linksBackground.classList.remove("opacity-0");
            }, 20);
        });

        this.linksContainer.addEventListener("mouseleave", () => {
            this.linksBackground.classList.add("opacity-0");
        });
    }
}
