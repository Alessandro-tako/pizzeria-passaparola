<x-layout>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img src="{{ Storage::url('images/tavoli.jpg') }}" class="img-fluid rounded shadow-sm"
                        alt="La nostra pizzeria">
                </div>
                <div class="col-md-6">
                    <h1 class="fw-bold text-danger mb-4">Chi siamo</h1>
                    <p class="lead">
                        Dal 1993, nascosta nel cuore del quartiere La Rustica, <strong>la Pizzeria Passaparola</strong>
                        è molto più di un locale: è una famiglia che accoglie, una tradizione che si rinnova ogni sera,
                        una promessa di gusto autentico.
                    </p>

                    <p>
                        Le nostre pizze sono un’esperienza: sottilissime, croccanti, giganti (ben 45 cm di bontà!) e
                        incredibilmente digeribili. Prepariamo ogni creazione con ingredienti genuini che parlano di
                        sole, territorio e stagioni: pomodoro saporito, mozzarella filante, verdure freschissime e
                        salumi selezionati.
                    </p>
                    <p>
                        Appena varchi la soglia, sentirai il profumo del forno a legna e l’energia di un ambiente vivace
                        e accogliente. Qui ogni cliente è chiamato per nome, accolto con un sorriso sincero e trattato
                        come uno di famiglia.
                    </p>
                    <p>
                        Se cerchi un posto dove sentirti a casa, mangiare bene e tornare volentieri... <strong>sei nel
                            posto giusto.</strong>
                    </p>

                </div>
            </div>
    </section>

    {{-- GALLERIA / LOOKBOOK --}}
    <section class="py-5" id="lookbook" role="region" aria-labelledby="titolo-galleria">
        <div class="container">
            <h2 id="titolo-galleria" class="services-title text-center mb-4">La nostra galleria</h2>
            <p class="services-subtitle text-center mb-5">Uno sguardo alle nostre pizze, il locale e la passione che ci
                mettiamo ogni giorno</p>

            <div class="row g-4">
                @foreach (range(1, 12) as $i)
                    <div class="col-6 col-md-4">
                        <figure class="services-box p-0 overflow-hidden m-0">
                            <img src="{{ Storage::url('images/foto' . $i . '.jpg') }}" class="galleria-img"
                                alt="Foto {{ $i }} della pizzeria Passaparola" loading="lazy">

                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>
