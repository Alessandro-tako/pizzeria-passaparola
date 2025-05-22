<footer class="bg-light pt-5 pb-4 mt-5 border-top border-secondary" role="contentinfo">
    <div class="container">
        {{-- Logo + Contatti + Link --}}
        <div class="row g-4 justify-content-between">

            {{-- Logo --}}
            <div class="col-12 text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ Storage::url('images/logo-nav.png') }}" alt="Logo Pizzeria Passaparola"
                        class="img-fluid mb-4" style="max-height: 80px;">
                </a>
            </div>

            {{-- Contatti --}}
            <div class="col-12 col-md-4 text-center text-md-start">
                <h5 class="fw-bold mb-3">Contatti</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Via Francesco Vitalini, 31, 00155 Roma RM
                    </li>
                    <li>
                        <i class="bi bi-phone-fill me-2"></i>
                        <a href="tel:+390687655926" class="text-dark text-decoration-none">+39 06 8765 5926</a>
                    </li>
                </ul>
            </div>

            {{-- Link utili --}}
            <div class="col-12 col-md-3 text-center text-md-start">
                <h5 class="fw-bold mb-3">Link utili</h5>
                <ul class="list-unstyled small">
                    <li><a href="{{ route('about') }}" class="text-dark text-decoration-none">Chi Siamo</a></li>
                    <li><a href="{{ route('menu') }}" class="text-dark text-decoration-none">Menù</a></li>
                    <li><a href="{{ route('contact') }}" class="text-dark text-decoration-none">Contatti</a></li>
                    <li>
                        <a href="https://www.tripadvisor.it/Restaurant_Review-g187791-d3447935-Reviews-Passaparola_Pizzeria-Rome_Lazio.html"
                            class="text-dark text-decoration-none" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-star-fill text-warning me-1"></i>TripAdvisor<i
                                class="bi bi-star-fill text-warning me-1"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <div class="text-center small">
            <p class="mb-1">Pizzeria Passaparola - P.IVA: 17490471004</p>
            <p class="mb-1">&copy; 1993 - {{ now()->year }} Tutti i diritti riservati.</p>
            <p class="mb-0">🔥 Powered by Takohr • il Forgiatore di Codice ⚒️</p>
        </div>

        {{-- Iubenda --}}
        <div class="text-center mt-3">
            <a href="https://www.iubenda.com/privacy-policy/37497829"
                class="iubenda-black iubenda-noiframe iubenda-embed" title="Privacy Policy">Privacy Policy</a> |
            <a href="https://www.iubenda.com/privacy-policy/37497829/cookie-policy"
                class="iubenda-black iubenda-noiframe iubenda-embed" title="Cookie Policy">Cookie Policy</a>
        </div>
    </div>
</footer>
