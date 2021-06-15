class Slider {
    constructor() {
        this.interval;
        this.index = 0;
        this.img = document.getElementById("imgSlider");
        this.tab = new Array("assets/img/slider1.jpg", "assets/img/slider2.jpg", "assets/img/slider3.jpg");
        this.img.src = this.tab[0];
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