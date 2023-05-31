import KategoriaController from "./kategoria/kategoriaController.js";
import KerdesekController from "./kerdesek/kerdesekController.js";


class App {
    constructor() {
        console.log("hello világ")
        new KategoriaController();
        new KerdesekController();

  }  
}

$(function () {
    new App();
});
