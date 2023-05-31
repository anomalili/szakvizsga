
import Aszinkron from "../aszinkron.js";
import KerdesView from "./kerdesekView.js";
import KerdesekView from "./kerdesekView.js";

class KerdesekController{
    constructor(){

        const token = $('meta[name="csrf-token"]').attr("content");
        const aszinkron = new Aszinkron(token);


        $('body').on('click', '.kat', (event) => {
            const button = $(event.target);
            const katId = button.attr("data-katId");
            console.log("gomb id: " + katId);
            $("#kerdesek").html("");
            let vegpont = `/tesztek/kategoria/${katId}`;
            aszinkron.adatBe(vegpont, this.megjelenit);
        });
    }
        
    

    megjelenit = (adat) => { 
         new KerdesView(adat, $("#kerdesek") );
    }
}

export default KerdesekController; 