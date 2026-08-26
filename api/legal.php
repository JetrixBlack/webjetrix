<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'privacidad';

if ($page === 'terminos') {
    $pageTitle = 'Términos y Condiciones | Jetrix';
    $pageDescription = 'Consulta los términos y condiciones de uso de los servicios de desarrollo web y software de Jetrix.';
    $canonicalUrl = 'https://webjetrix.com/terminos';
} else {
    $pageTitle = 'Política de Privacidad | Jetrix';
    $pageDescription = 'Conoce nuestra política de privacidad y protección de datos en Jetrix.';
    $canonicalUrl = 'https://webjetrix.com/privacidad';
    $page = 'privacidad';
}

$currentPage = '';
include __DIR__ . '/../includes/header.php';
include __DIR__ . '/../includes/navbar.php';
?>

<main class="pt-14 md:pt-0">
    <section class="py-20 md:py-28 bg-[#F7F7F4]">
        <div class="max-w-3xl mx-auto px-5 sm:px-6 md:px-8 lg:px-10 xl:px-12">
            <span class="text-sm uppercase tracking-widest text-electric-blue font-semibold">Legal</span>

            <?php if ($page === 'terminos'): ?>
            <h1 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate mb-6">Términos y Condiciones</h1>
            <p class="text-zinc-500 mb-8">Última actualización: 2025</p>
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">1. Aceptación de los términos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Al acceder y utilizar este sitio web, aceptas cumplir con estos términos y condiciones. Si no estás de acuerdo con alguna parte, no debes utilizar nuestros servicios.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">2. Servicios</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Jetrix ofrece servicios de desarrollo web, diseño de interfaces, sistemas a medida, chatbots con inteligencia artificial y automatizaciones. Los detalles específicos de cada servicio se establecen en la propuesta o contrato correspondiente.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">3. Propiedad intelectual</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Todo el contenido de este sitio web, incluyendo textos, imágenes, gráficos, logotipos y código fuente, es propiedad de Jetrix o de sus proveedores de contenido y está protegido por las leyes de propiedad intelectual.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">4. Limitación de responsabilidad</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Jetrix no será responsable de daños directos, indirectos, incidentales o consecuentes que resulten del uso o imposibilidad de uso de nuestros servicios. Nos reservamos el derecho de modificar o suspender servicios en cualquier momento.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">5. Ley aplicable</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Estos términos se rigen por las leyes de la República Bolivariana de Venezuela. Cualquier disputa será resuelta ante los tribunales competentes de la ciudad de Maracaibo.</p>
                </div>
            </div>

            <?php else: ?>
            <h1 class="mt-3 text-4xl md:text-5xl lg:text-6xl font-semibold leading-[1.05] text-deep-slate mb-6">Política de Privacidad</h1>
            <p class="text-zinc-500 mb-8">Última actualización: 2025</p>
            <div class="space-y-8">
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">1. Información que recopilamos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">En Jetrix, recopilamos información personal que nos proporcionas voluntariamente a través de nuestros formularios de contacto, incluyendo nombre, correo electrónico, empresa y mensaje. También recopilamos datos de navegación anónimos mediante cookies y tecnologías similares.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">2. Uso de la información</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Utilizamos tu información para responder a tus consultas, proporcionarte los servicios solicitados, mejorar nuestra página web y enviarte comunicaciones relacionadas con nuestros servicios si has dado tu consentimiento.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">3. Protección de datos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Implementamos medidas de seguridad técnicas y organizativas para proteger tu información personal contra acceso no autorizado, pérdida o alteración. Tus datos se almacenan en servidores seguros con acceso restringido.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">4. Tus derechos</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Tienes derecho a acceder, rectificar, cancelar u oponerte al tratamiento de tus datos personales. Para ejercer estos derechos, contáctanos a través de nuestro formulario de contacto o correo electrónico.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">5. Cookies</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Utilizamos cookies esenciales para el funcionamiento del sitio y cookies analíticas para entender cómo los visitantes interactúan con nuestra web. Puedes configurar tu navegador para rechazar todas las cookies.</p>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-deep-slate mb-4">6. Contacto</h2>
                    <p class="text-base text-zinc-500 leading-relaxed">Si tienes preguntas sobre esta política de privacidad, puedes contactarnos a través de nuestro formulario de contacto.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
