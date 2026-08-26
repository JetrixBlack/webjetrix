<?php
// Configuración de la página actual y SEO para Contacto
$currentPage = 'contacto';
$pageTitle = 'Contacto y Asesoría Gratuita de Desarrollo Web | Jetrix';
$pageDescription = 'Agenda una asesoría gratuita de 15 minutos con Jetrix. Cuéntanos sobre tu proyecto y recibe una propuesta personalizada para tu página web o sistema.';
$pageKeywords = 'contacto desarrollo web, agendar asesoria web, cotizar pagina web, contactar programador, presupuesto web';
$canonicalUrl = 'https://webjetrix.com/contacto';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>
<main class="pt-14 md:pt-0">
    <!-- Hero - Cabecera de la página de contacto con título y descripción -->
    <section class="py-20 md:py-28 bg-[#F7F7F4]">
        <div class="max-w-7xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <div class="text-center mb-16 max-w-3xl mx-auto">
                <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Contacto</span>
                <h1 data-typewriter class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate">¿Listo para transformar tu <span class="text-electric-blue">presencia digital?</span></h1>
                <p class="mt-4 text-lg text-zinc-500 max-w-2xl mx-auto">Agenda una asesoría gratuita y descubre cómo podemos ayudarte a escalar tu negocio en internet.</p>
            </div>

            <div class="max-w-4xl mx-auto bg-white border border-zinc-200 rounded-xl p-8 md:p-12 shadow-sm">
                <form class="space-y-6" method="POST" action="contacto.php">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-zinc-900 mb-2">Nombre completo</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-xl bg-zinc-50 border border-zinc-200 text-zinc-900 placeholder-zinc-400 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue focus:outline-none transition-colors" placeholder="Juan Pérez">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-zinc-900 mb-2">Correo electrónico</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-xl bg-zinc-50 border border-zinc-200 text-zinc-900 placeholder-zinc-400 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue focus:outline-none transition-colors" placeholder="juan@empresa.com">
                        </div>
                    </div>

                    <div>
                        <label for="company" class="block text-sm font-medium text-zinc-900 mb-2">Empresa</label>
                        <input type="text" id="company" name="company" class="w-full px-4 py-3 rounded-xl bg-zinc-50 border border-zinc-200 text-zinc-900 placeholder-zinc-400 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue focus:outline-none transition-colors" placeholder="Mi Empresa S.A.">
                    </div>

                    <div>
                        <label for="service" class="block text-sm font-medium text-zinc-900 mb-2">Servicio de interés</label>
                        <select id="service" name="service" class="w-full px-4 py-3 rounded-xl bg-zinc-50 border border-zinc-200 text-zinc-900 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue focus:outline-none transition-colors">
                            <option value="">Selecciona un servicio</option>
                            <option value="desarrollo-web">Desarrollo Web</option>
                            <option value="sistemas">Sistemas a Medida</option>
                            <option value="chatbots">Chatbots & IA</option>
                            <option value="automatizaciones">Automatizaciones</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-zinc-900 mb-2">Mensaje</label>
                        <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-xl bg-zinc-50 border border-zinc-200 text-zinc-900 placeholder-zinc-400 focus:border-electric-blue focus:ring-1 focus:ring-electric-blue focus:outline-none transition-colors resize-none" placeholder="Cuéntanos sobre tu proyecto..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-electric-blue to-teal-600 hover:brightness-110 text-white px-8 py-4 rounded-xl font-bold text-base transition-all hover:scale-[1.01] shadow-md cursor-pointer">
                        Enviar Mensaje
                    </button>
                </form>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = htmlspecialchars($_POST['name'] ?? '');
                    $email = htmlspecialchars($_POST['email'] ?? '');
                    $message = htmlspecialchars($_POST['message'] ?? '');
                    echo '<div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-800 text-center font-medium">✓ Gracias ' . $name . ', tu mensaje ha sido enviado. Te contactaremos pronto a ' . $email . '.</div>';
                }
                ?>
            </div>

            <div class="mt-16 text-center">
                <h3 class="text-2xl font-bold text-zinc-900 mb-6">Contacto Directo</h3>
                <div class="flex flex-col md:flex-row justify-center gap-6">
                    <a href="mailto:contacto@webjetrix.com" class="flex items-center gap-3 px-6 py-4 rounded-xl bg-white border border-zinc-200 hover:border-electric-blue hover:text-electric-blue transition-all group">
                        <span class="material-symbols-outlined text-zinc-400 group-hover:text-electric-blue">mail</span>
                        <span class="text-zinc-500 group-hover:text-electric-blue font-medium">contacto@webjetrix.com</span>
                    </a>
                    <a href="tel:+573001234567" class="flex items-center gap-3 px-6 py-4 rounded-xl bg-white border border-zinc-200 hover:border-electric-blue hover:text-electric-blue transition-all group">
                        <span class="material-symbols-outlined text-zinc-400 group-hover:text-electric-blue">call</span>
                        <span class="text-zinc-500 group-hover:text-electric-blue font-medium">+57 300 123 4567</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php // Inclusión del pie de página
include __DIR__ . '/../includes/footer.php'; ?>
