
import Aszinkron from "../aszinkron.js";
import KategoriakView from "./kategoriakView.js";

class KategoriaController{
    constructor(){

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);     
        let vegpont = "/kategoria";
        aszinkron.adatBe(vegpont, this.megjelenit);     
    }

    megjelenit(adat) { 
         new KategoriakView(adat, $("#kategoriaValaszto") );
    }
}

export default KategoriaController; 