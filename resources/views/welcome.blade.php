<x-layout>
    {{-- Hero --}}
    <section class="hero text-center text-white d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('storage/images/passaparola.png') }}') center center / cover no-repeat; height: 80vh; position: relative;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.4)); z-index: 1;">
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <h1 class="display-4 fw-bold">Benvenuto alla Pizzeria Passaparola</h1>
            <p class="lead mt-3">Tradizione, passione e forno a legna nel cuore di Roma</p>
            <a href="{{ route('menù') }}" class="btn btn-danger mt-4 px-4 py-2">Scopri il Menù</a>
            <p class="mt-3 text-white">
                Effettuiamo anche <strong>ordini da asporto</strong>! Chiama lo <a href="tel:+390687655926"
                    class="text-white text-decoration-underline">06 8765 5926</a>
            </p>
        </div>
    </section>



    {{-- Vantaggi --}}
    <section class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="mb-4 fw-bold">Perché sceglierci</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <i class="bi bi-fire fs-1 text-danger"></i>
                    <h5 class="mt-3">Forno a Legna</h5>
                    <p>Ogni pizza è cotta in forno a legna per un gusto autentico e fragrante.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-house-heart fs-1 text-success"></i>
                    <h5 class="mt-3">Gestione Familiare</h5>
                    <p>Un ambiente accogliente dove ogni cliente è trattato come uno di famiglia.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people fs-1 text-warning"></i>
                    <h5 class="mt-3">Clienti Soddisfatti</h5>
                    <p>Recensioni eccellenti su TripAdvisor: qualità, cordialità e gusto garantiti.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Badge TripAdvisor (opzionale) --}}
    <section class="py-4 text-center">
        <div class="container">
            <a href="https://www.tripadvisor.it/Restaurant_Review-g187791-d3447935-Reviews-Passaparola_Pizzeria-Rome_Lazio.html"
                target="_blank" rel="noopener">
                <img src={{ Storage::url('images/Badge-Trip-Advisor.png') }} alt="TripAdvisor Badge"
                    style="max-width: 200px;">
            </a>
            <p class="mt-2 small">Dai un’occhiata alle nostre recensioni su TripAdvisor</p>
        </div>
    </section>
</x-layout>
