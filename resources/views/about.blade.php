<x-layout>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-md-6">
                    <img src="{{ Storage::url('images/tavoli.jpg') }}" class="img-fluid rounded shadow-sm" alt="La nostra pizzeria">
                </div>
                <div class="col-md-6">
                    <h1 class="fw-bold text-danger mb-4">Chi siamo</h1>
                    <p class="lead">
                        La Pizzeria <strong>Passaparola</strong> nasce dal sogno di una famiglia unita dall’amore per la buona cucina e per la tradizione italiana.
                    </p>
                    <p>
                        Da generazioni ci tramandiamo i segreti dell’impasto perfetto, del sugo fatto in casa, del forno a legna acceso ogni giorno con la stessa passione del primo.
                        Il nostro è un ambiente semplice, accogliente, dove ogni cliente viene trattato come uno di famiglia.
                    </p>
                    <p>
                        Siamo fieri di offrire pizze cotte rigorosamente a legna, ingredienti freschi e un servizio genuino, che nasce dall’esperienza e dal cuore.
                    </p>
                    <p>
                        Se cerchi un luogo dove sentirti a casa, assaporare la vera pizza romana e sorridere con chi ti serve… <strong>sei nel posto giusto.</strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- GALLERIA / LOOKBOOK --}}
    {{-- <section class="py-5" id="lookbook" role="region" aria-labelledby="titolo-galleria">
        <div class="container">
            <h2 id="titolo-galleria" class="services-title text-center mb-4">Il nostro stile</h2>
            <p class="services-subtitle text-center mb-5">Scopri alcuni dei nostri tagli, barbe e trattamenti</p>

            <div class="row g-4">
                @foreach (range(1, 12) as $i)
                    <div class="col-6 col-md-4">
                        <figure class="services-box p-0 overflow-hidden m-0">
                            <img src="{{ Storage::url('images/foto' . $i . '.png') }}" class="galleria-img" alt="Look taglio e barba {{ $i }}">
                        </figure>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
</x-layout>
