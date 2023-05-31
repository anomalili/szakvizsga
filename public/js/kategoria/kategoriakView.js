class KategoriaView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;

        szuloElem.append(`
 <button class="kat" data-katId="${elem.id}">${elem.kategorianev}</button>
  
                        `);
    }
}

class KategoriakView {
    #elem;
    constructor(elem, szuloElem) {
        this.#elem = elem;
        this.divElem = szuloElem.children("div");
        szuloElem.append(`
                       <div class = "select"></div>
         `);

        const szuloElemem = $('.select')
        if (Array.isArray(elem)) {
            this.#elem.forEach(elemem => {
                new KategoriaView(elemem, szuloElemem);
            });
        }
    }
}
export default KategoriakView;


/*         
 <option value="${elem.id}" class="kat" data-katId="${elem.id}">${elem.kategorianev}</option>

<select name="kategoriaId" id="kategoriaId">

        </select>   */   