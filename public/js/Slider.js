class Slider {
    constructor() {
        this.interval;
        this.index = 0;
        this.img = document.getElementById("imgSlider");
        this.tab = new Array("assets/img/velo.png", "assets/img/velo1.png", "assets/img/velo2.png");
        this.img.src = this.tab[0];
        this.init();
    }

    // FONCTION POUR REGROUPER LES FONCTION DE MON SLIDER
    init() {
        this.timerSlide();
    }

    //  AFFICHAGE DE L'IMAGE SUIVANTE ET BOUCLE A LA DERNIERE IMAGE
    nextSlide() {
        this.index = this.index + 1;
        if (this.index === this.tab.length) {
            this.index = 0;
        }
        this.img.src = this.tab[this.index];
    }

    // FONCTION TIMER DU SLIDE
    timerSlide() {
        this.interval = setInterval(() => {
            this.nextSlide();
        }, 5000);
    }
}

new Slider();