<!-- Footer principal con fondo navy-dark -->
<footer class="bg-navy-dark text-white py-16 border-t border-white/5">
    <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
        <!-- Grid de 4 columnas para las secciones del footer -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
            <!-- Columna 1: Logo y descripci├│n de la empresa -->
            <div class="flex flex-col gap-6">
                <a href="/" class="flex items-center gap-2 no-underline">
                    <img src="assets/img/Logo_Jetrix.png" alt="Jetrix Logo" class="h-12 object-contain">
                </a>
                <p class="text-white/50 text-sm leading-relaxed pr-8">
                    Creamos sitios web estrat├®gicos y soluciones digitales dise├▒adas para convertir visitas en clientes
                    reales.
                </p>
            </div>
            <!-- Columna 2: Enlaces r├ípidos a Servicios -->
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-white uppercase tracking-wider text-sm">Servicios</h4>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm"
                    href="/servicios">Desarrollo Web</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm"
                    href="/servicios">Chatbots con IA</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm"
                    href="/servicios">Ecommerce</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm" href="/servicios">Agenda
                    Pro</a>
            </div>
            <!-- Columna 3: Enlaces institucionales / Empresa -->
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-white uppercase tracking-wider text-sm">Empresa</h4>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm" href="/sobre-mi">Sobre
                    m├¡</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm" href="/proyectos">Casos
                    de ├®xito</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm" href="/blog">Blog</a>
                <a class="text-white/50 hover:text-electric-blue transition-colors text-sm"
                    href="/contacto">Contacto</a>
            </div>
            <!-- Columna 4: Suscripci├│n al Newsletter -->
            <div class="flex flex-col gap-4">
                <h4 class="font-bold text-white uppercase tracking-wider text-sm">Newsletter</h4>
                <div class="relative">
                    <input
                        class="w-full bg-white/5 border border-white/10 p-3 text-white focus:outline-none focus:border-electric-blue rounded-full text-sm"
                        placeholder="tu@email.com" type="email" />
                    <button class="absolute right-2 top-1/2 -translate-y-1/2 text-electric-blue cursor-pointer">
                        <span class="material-symbols-outlined text-[20px]">send</span>
                    </button>
                </div>
                <p class="text-xs text-white/40">Recibe insights t├®cnicos semanales.</p>
            </div>
        </div>
        <!-- Barra inferior con copyright y enlaces legales -->
        <div
            class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-white/40 text-sm">
            <div>&copy; <?= date('Y') ?> Jetrix. Todos los derechos reservados.</div>
            <!-- A├▒o generado din├ímicamente con PHP -->
            <div class="flex gap-8">
                <a class="hover:text-white transition-colors" href="/privacidad">Pol├¡tica de privacidad</a>
                <a class="hover:text-white transition-colors" href="/terminos">T├®rminos y condiciones</a>
            </div>
        </div>
    </div>
</footer>

<!-- Script de conversi├│n de moneda para mostrar precios en USD, EUR o Bs. -->
<script>
(function() {
    // IIFE para evitar contaminar el ├ímbito global
    var btns = document.querySelectorAll('#currencySwitcher .currency-btn');
    var prices = document.querySelectorAll('.price-display');
    var rates = null;
    window.__rates = null;
    window.__currency = 'ves';

    function parseUsd(text) {
        var match = text.match(/\$?([\d,]+)/);
        return match ? parseFloat(match[1].replace(',', '')) : 0;
    }

    // Formatea el valor num├®rico seg├║n la moneda seleccionada
    function formatPrice(value, currency) {
        if (currency === 'usd') return '$' + Number(value).toLocaleString('en-US');
        if (currency === 'eur') return '\u20AC' + Number(value).toLocaleString('de-DE', {minimumFractionDigits: 0, maximumFractionDigits: 0});
        return 'Bs. ' + Number(value).toLocaleString('es-VE');
    }

    // Actualiza todos los precios en pantalla seg├║n la moneda y tasas vigentes
    function updatePrices(currency) {
        window.__currency = currency;
        prices.forEach(function(el) {
            var usdPrice = parseFloat(el.getAttribute('data-usd'));
            var displayPrice = usdPrice;
            if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
            else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
            el.textContent = formatPrice(displayPrice, currency);
            el.setAttribute('data-currency', currency);
        });
        document.querySelectorAll('.price-original').forEach(function(el) {
            var usdPrice = parseUsd(el.textContent);
            if (!usdPrice) return;
            var displayPrice = usdPrice;
            if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
            else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
            el.textContent = formatPrice(displayPrice, currency);
        });
        document.querySelectorAll('.price-promo').forEach(function(el) {
            var usdPrice = parseUsd(el.textContent);
            if (!usdPrice) return;
            var displayPrice = usdPrice;
            if (currency === 'ves' && rates) displayPrice = usdPrice * rates.usd;
            else if (currency === 'eur' && rates) displayPrice = Math.round((usdPrice * rates.usd) / rates.eur);
            el.textContent = formatPrice(displayPrice, currency);
        });
    }

    // Obtiene tasas de cambio desde la API, con fallback a valores por defecto
    fetch('/api/rates.php')
        .then(function(r) { return r.json(); })
        .then(function(data) {
            rates = data;
            window.__rates = data;
            updatePrices('ves');
        })
        .catch(function() {
            rates = { usd: 60, eur: 65 };
            window.__rates = { usd: 60, eur: 65 };
            updatePrices('ves');
        });

    // Asigna eventos click a cada bot├│n de moneda para alternar la visualizaci├│n
    btns.forEach(function(btn) {
        btn.addEventListener('click', function() {
            btns.forEach(function(b) {
                b.classList.remove('bg-white', 'shadow', 'text-zinc-900');
                b.classList.add('text-zinc-500', 'hover:text-zinc-700');
            });
            this.classList.add('bg-white', 'shadow', 'text-zinc-900');
            this.classList.remove('text-zinc-500', 'hover:text-zinc-700');
            var currency = this.getAttribute('data-currency');
            if (rates) updatePrices(currency);
        });
    });
})();
</script>
</body>

</html>
