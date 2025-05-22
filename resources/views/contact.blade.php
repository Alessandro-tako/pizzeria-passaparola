<x-layout>
    <section class="py-5">
        <div class="container">
            <h1 class="text-center fw-bold text-danger mb-5">Contattaci</h1>

            <div class="row g-5">
                {{-- Info contatto --}}
                <div class="col-md-6">
                    <h5 class="mb-3">📍 Indirizzo</h5>
                    <p>Via Francesco Vitalini, 31, 00155 Roma (RM)</p>

                    <h5 class="mb-3">📞 Telefono</h5>
                    <p>
                        <a href="tel:+390687655926" class="text-decoration-none text-dark">+39 06 8765 5926</a><br>
                        <small class="text-muted">Effettuiamo anche ordini da asporto</small>
                    </p>


                    <h5 class="mb-3">✉️ Email</h5>
                    <p><a href="mailto:pizzeriapassaparolaroma@gmail.com"
                            class="text-decoration-none text-dark">pizzeriapassaparolaroma@gmail.com</a></p>

                    <h5 class="mb-3">🕒 Orari di apertura</h5>
                    <ul class="list-unstyled">
                        <li>Lunedì - Domenica: 18:30 – 23:30</li>
                        <li>Martedì: <em>chiuso</em></li>
                    </ul>
                </div>

                {{-- Mappa --}}
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2888.0872481198917!2d12.6048276!3d41.8999977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61ab13dbe9df%3A0x6cd39f93d5c9e9c0!2sVia%20Francesco%20Vitalini%2C%2031%2C%2000155%20Roma%20RM!5e0!3m2!1sit!2sit!4v1715942154284!5m2!1sit!2sit"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            {{-- CTA TripAdvisor + Google --}}
            <div class="text-center mt-5">
                <h5 class="mb-3">❤️ Ti sei trovato bene da noi?</h5>
                <p class="mb-3">Lascia una recensione e aiutaci a far conoscere la nostra pizzeria!</p>

                <div class="d-flex justify-content-center flex-wrap gap-3">
                    <a href="https://www.tripadvisor.it/Restaurant_Review-g187791-d3447935-Reviews-Passaparola_Pizzeria-Rome_Lazio.html"
                        target="_blank" rel="noopener" class="btn btn-outline-success px-4 py-2"
                        aria-label="Scrivi una recensione su TripAdvisor per la Pizzeria Passaparola">
                        ✍️ Scrivi una recensione su TripAdvisor
                    </a>
                    <a href="https://www.google.com/search?sca_esv=806b124b1fa22633&sxsrf=AHTn8zry3ebk3hxu5WL9Y6WEByKg97ZHjA:1747940374280&si=APYL9btvhO6SAb8jF9HqTZMMa7vs_teLnZaEVrJZwRKFIIKjoYH8WRuinYNBAgi4sFFDWi2Mw19L0_Zfwmf9zVPWE7GMNO-d0jzLLkt2qaYy9aPDFZF3mp51iIj-VnWLoRQLvYx6q_nG&q=Passaparola+Recensioni&sa=X&ved=2ahUKEwjizeOo4beNAxVM1wIHHb2dPNIQ0bkNegQIJBAD&biw=1718&bih=1270&dpr=1"
                        target="_blank" rel="noopener" class="btn btn-outline-primary px-4 py-2"
                        aria-label="Scrivi una recensione su Google per la Pizzeria Passaparola">
                        ⭐ Lascia una recensione su Google
                    </a>
                </div>
            </div>

        </div>
    </section>
</x-layout>
