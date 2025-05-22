<x-layout>

    {{-- Ordini da asporto --}}
    <div class="text-center mt-5">
        <h5 class="mb-2">Ordina da asporto</h5>
        <p class="mb-3">Chiama direttamente allo <a href="tel:+390687655926"
                class="text-decoration-none text-danger fw-bold">06 8765 5926</a></p>
        <p class="text-muted small">Prepara il tuo ordine consultando il menù qui sotto e ritira direttamente in
            pizzeria.</p>
    </div>

    {{-- Sommario Navigazione --}}
    <div class="text-center mt-4 mb-5">
        <p class="lead fw-semibold">Vai direttamente a:</p>
        <a href="#antipasti" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione antipasti">🍽️
            Antipasti</a>
        <a href="#bruschette" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione bruschette">🥖
            Bruschette</a>
        <a href="#calzoni" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione calzoni">🧀
            Calzoni</a>
        <a href="#pizze" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione pizze">🍕 Pizze</a>
        <a href="#bevande" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione bevande">🥤
            Bevande</a>
        <a href="#birre" class="btn btn-outline-secondary btn-sm me-2 mb-3" aria-label="Vai alla sezione birre">🍺 Birre</a>
        <a href="#fine" class="btn btn-outline-secondary btn-sm mb-3" aria-label="Vai alla sezione per finire">🍮 E per
            finire</a>
    </div>

    <section class="py-5">
        <div class="container">
            <h1 class="visually-hidden">Menù completo della Pizzeria Passaparola</h1>
            <h2 class="text-center fw-bold mb-2">Il nostro menù</h2>
            <p class="text-center text-muted small mb-5">
                <i class="bi bi-leaf-fill text-success me-1"></i> Indica un piatto vegetariano
            </p>


            <div id="antipasti" class="mb-5">
                <h2 class="h4 text-danger mb-3">🍽️ Antipasti</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Prosciutto e
                                Melone</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Antipasto
                                all'Italiana</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Antipasto di
                                Mare</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Supplì</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>1,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crocchette</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>1,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Patatine
                                Fritte</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>5,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Olive ascolane (10
                                pezzi)</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Mozzarelline (6
                                pezzi)</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>5,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Fiori di
                                Zucca</span><span>3,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Filetti di
                                Baccalà</span><span>3,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Chele di
                                Granchio</span><span>1,50 €</span></div>
                    </div>
                </div>
            </div>

            <div id="bruschette" class="mb-5">
                <h2 class="h4 text-danger mb-3">🥖 Bruschette</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Semplice</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>1,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Pomodoro</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>3,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Melanzane</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>3,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Prosciutto</span><span>4,00
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Paté
                                d’olive</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Piccante</span><span>3,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Peperoni</span> <span
                                class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Salsa al
                                tartufo</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crema ai 4
                                formaggi</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crema ai 4 formaggi
                                tartufata</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crema di
                                salmone</span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crema di
                                carciofi</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Funghi porcini
                                trifolati</span> <span class="badge text-success ms-2">
                                <i class="bi bi-leaf-fill me-1"></i>
                            </span><span>4,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Miste</span><span>4,50
                                €</span></div>
                    </div>
                </div>
            </div>

            <div id="calzoni" class="mb-5">
                <h2 class="h4 text-danger mb-3">🧀 Calzoni & Crostini</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Calzone Prosciutto
                                Cotto</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Calzone Prosciutto
                                Crudo</span><span>8,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Calzone alle
                                Alici</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crostino al
                                Prosciutto</span><span>8,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crostino al
                                Salmone</span><span>9,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Crostino
                                Passaparola</span><span>11,00 €</span></div>
                    </div>
                </div>
            </div>
            <div id="pizze" class="mb-5">
                <div class="mb-5">
                    <h2 class="h4 text-danger mb-3">🍕 Pizze</h2>
                    <div class="row row-cols-1 row-cols-md-2 g-3">
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Focaccia</strong><span>4,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Bianca.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Rossa</strong><span>6,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro e origano (aglio a richiesta).</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Margherita</strong><span>8,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro e mozzarella.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Margherita con scamorza</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e scamorza
                                    affumicata.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Margherita delicata</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, prosciutto cotto, patate,
                                    scaglie di
                                    parmigiano.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Napoli</strong><span>8,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e alici.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Funghi</strong><span>8,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e funghi.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Wurstel</strong><span>8,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e wurstel.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Prosciutto</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella e prosciutto.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Diavola</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, salame e
                                    peperoncino.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Melanzane</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e melanzane.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Giardiniera</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, tonno, rucola, pachino e
                                    mais.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Primavera</strong><span>8,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, tonno, carciofini e olive.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Carciofi</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, carciofi e crema di
                                    carciofi.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Carciofi tartufata</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, crema di carciofi tartufata e
                                    carciofi.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>4 formaggi</strong><span>8,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella e formaggi.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>5 formaggi</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, formaggi e gorgonzola.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Capricciosa</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, funghi, carciofini,
                                    prosciutto, uovo e
                                    olive.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Rughetta</strong><span>10,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, rucola, bresaola, pachino e scaglie
                                    di
                                    parmigiano.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Peperoni</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e peperoni.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Fiori di zucca</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, alici e fiori di zucca.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Tonno e cipolla</strong><span>9,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, tonno e cipolla.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Salsiccia</strong><span>8,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella e salsiccia.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Patate e salsiccia</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, patate e salsiccia.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Boscaiola</strong><span>9,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, salsiccia e funghi.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Dio Sole</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, salame piccante, uovo,
                                    olive e melanzane.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Occhio di Bue</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, uovo, funghi, wurstel,
                                    prosciutto e olive.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>4 Stagioni</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, wurstel, salsiccia,
                                    funghi, carciofi e olive.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Salmone</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella e salmone.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Gamberetti</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella e gamberetti.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Funghi porcini</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella e funghi porcini.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Frutti di mare</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro e frutti di mare misti.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 1</strong><span>11,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, alice, salame, rucola,
                                    uovo, carciofini, peperoni e olive.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 2</strong><span>11,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, rucola, melanzane, peperoni, zucchine
                                    e olive.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 3</strong><span>11,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, gamberetti, mais e rucola.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 4</strong><span>17,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, funghi, salsiccia, funghi
                                    porcini, cotto, uovo e zucchine.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 5</strong><span>10,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, funghi e crema tartufata.</small>
                                <span class="badge text-success ms-2">
                                    <i class="bi bi-leaf-fill me-1"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 6</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Crema di zucca, funghi porcini, salsiccia e
                                    mozzarella.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 7</strong><span>11,50 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Pomodoro, mozzarella, pancetta, olive e scaglie
                                    di
                                    parmigiano.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 8</strong><span>13,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Funghi porcini, salsiccia, mozzarella di bufala
                                    e
                                    pachino.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 9</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Salsiccia, crema di radicchio, funghi porcini e
                                    mozzarella.</small>
                            </div>
                        </div>
                        <div class="col">
                            <div class="border-bottom py-2">
                                <div class="d-flex justify-content-between">
                                    <strong>Passaparola 10</strong><span>11,00 €</span>
                                </div>
                                <small class="text-muted">Ingredienti: Mozzarella, tonno, bufala e pachino.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bevande" class="mb-5">
                <h2 class="h4 text-danger mb-3">🥤 Bevande</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Coca Cola Piccola (spina
                                0,20)</span><span>2,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Coca Cola Media (spina
                                0,40)</span><span>4,50 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Coca Cola Grande (spina
                                1L)</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Fanta / Sprite / Coca Cola
                                (latina 33cl)</span><span>2,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Coca Cola (bottiglia
                                1L)</span><span>5,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Acqua
                                Minerale</span><span>3,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Vino della Casa (1/2
                                L)</span><span>3,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Vino della Casa
                                (1L)</span><span>6,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Vino alla Spina
                                (1/2L)</span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Vino alla Spina
                                (1L)</span><span>7,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Vino in
                                Bottiglia</span><span>8,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Birra in bottiglia
                                (Moretti/Peroni)</span><span>3,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Moretti La Rossa
                                33cl</span><span>4,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Erdinger
                                50cl</span><span>5,00 €</span></div>
                    </div>
                </div>
            </div>

            <div id="birre" class="mb-5">
                <h2 class="h4 text-danger mb-3">🍺 Birre</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Heineken Piccola
                                (0,20)</span><span>3,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Heineken Media
                                (0,40)</span><span>5,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Heineken Grande
                                (1L)</span><span>10,00 €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Heineken Caraffa
                                (1,5L)</span><span>13,00 €</span></div>
                    </div>
                </div>
            </div>

            <div id="fine" class="mb-5">
                <h2 class="h4 text-danger mb-3">🍮 E per finire...</h2>
                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Gelati</span><span>3,50
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Caffè</span><span>1,00
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Liquori</span><span>2,00
                                €</span></div>
                    </div>
                    <div class="col">
                        <div class="d-flex justify-content-between border-bottom py-2"><span>Amari</span><span>2,00
                                €</span></div>
                    </div>
                </div> {{-- <<<< questa mancava --}}
                <p class="small mt-2 text-muted">* 1,00 € per il servizio per chi non ordina almeno una pizza.</p>
            </div>


        </div>
    </section>
</x-layout>
