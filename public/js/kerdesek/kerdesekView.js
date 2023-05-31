class KerdesView {

    #elem;
    
    constructor(elem, szuloElem) {
        this.#elem = elem;

        szuloElem.append(`
        <div class="kerdesLabel"> 
              <h3>${elem.kerdes}</h3> 
        </div>
        
        <div class="valaszMezok">
                <button id="valasz">${elem.v1}</button>
                <button id="valasz">${elem.v2}</button>
                <button id="valasz">${elem.v3}</button>
                <button id="valasz">${elem.v4}</button>
        </div>
         `);
    }
}

class KerdesekView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        this.divElem = szuloElem.children("div");
        szuloElem.append(`
        <div class ="kerdes">
        </div>                            
         `);

        const szuloElemem = $('kerdes')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {
                new KerdesView(elemem, szuloElem);
            });
        }
    }
}
export default KerdesView;