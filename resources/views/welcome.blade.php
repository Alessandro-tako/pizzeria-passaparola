<x-layout>

    {{-- Hero --}}
    <section class="hero text-center text-white d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('storage/images/passaparola.png') }}') center center / cover no-repeat; height: 80vh; position: relative;">
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: linear-gradient(to bottom, rgba(0,0,0,0.0), rgba(0,0,0,0.2)); z-index: 1;">
        </div>
        <div class="container position-relative" style="z-index: 2;">
            <h1 class="display-4 fw-bold">Benvenuto alla Pizzeria Passaparola</h1>
            <p class="lead mt-3">Tradizione familiare, pizze giganti cotte a legna e impasti leggeri e digeribili</p>
            <a href="{{ route('menu') }}" class="btn btn-danger mt-4 px-4 py-2">Consulta il nostro menù completo</a>
            <p class="mt-3 text-white">
                Effettuiamo anche <strong>ordini da asporto</strong>! Consulta il menù online e chiama lo <a
                    href="tel:+390687655926" class="text-white text-decoration-underline fw-semibold"
                    aria-label="Chiama la Pizzeria Passaparola al numero 06 8765 5926">06 8765 5926</a>

                per prenotare.
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
                    <p>Le nostre pizze sono cotte esclusivamente in forno a legna, per un gusto autentico, fragrante e
                        irresistibile.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-house-heart fs-1 text-success"></i>
                    <h5 class="mt-3">Gestione Familiare</h5>
                    <p>Un’attività a conduzione familiare, dove ogni cliente è accolto con passione, cura e un sorriso
                        sincero.</p>
                </div>
                <div class="col-md-4">
                    <i class="bi bi-people fs-1 text-warning"></i>
                    <h5 class="mt-3">Clienti Soddisfatti</h5>
                    <p>Decine di recensioni positive su TripAdvisor: qualità, cordialità e un’atmosfera che conquista al
                        primo morso.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Badge Recensioni TripAdvisor + Google --}}
    <section class="py-4 text-center">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-center align-items-center gap-4">
                {{-- TripAdvisor --}}
                <a href="https://www.tripadvisor.it/Restaurant_Review-g187791-d3447935-Reviews-Passaparola_Pizzeria-Rome_Lazio.html"
                    target="_blank" rel="noopener noreferrer">
                    <img src="{{ Storage::url('images/Badge-Trip-Advisor.png') }}"
                        alt="Recensioni su TripAdvisor della Pizzeria Passaparola di Roma" style="max-width: 200px;"
                        loading="lazy">
                </a>

                {{-- Google --}}
                <a href="https://www.google.com/search?sca_esv=806b124b1fa22633&sxsrf=AHTn8zry3ebk3hxu5WL9Y6WEByKg97ZHjA:1747940374280&si=APYL9btvhO6SAb8jF9HqTZMMa7vs_teLnZaEVrJZwRKFIIKjoYH8WRuinYNBAgi4sFFDWi2Mw19L0_Zfwmf9zVPWE7GMNO-d0jzLLkt2qaYy9aPDFZF3mp51iIj-VnWLoRQLvYx6q_nG&q=Passaparola+Recensioni&sa=X&ved=2ahUKEwjizeOo4beNAxVM1wIHHb2dPNIQ0bkNegQIJBAD&biw=1718&bih=1270&dpr=1"
                    target="_blank" rel="noopener noreferrer">
                    <img src="{{ Storage::url('images/Badge-Google-Reviews.png') }}"
                        alt="Recensioni su Google della Pizzeria Passaparola di Roma" style="max-width: 200px;"
                        loading="lazy">
                </a>
            </div>

            <p class="mt-3 small">Dai un’occhiata alle recensioni dei nostri clienti su <strong>TripAdvisor</strong> e
                <strong>Google</strong>.
            </p>
        </div>
    </section>


</x-layout>
