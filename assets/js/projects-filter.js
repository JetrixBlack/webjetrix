(function () {
    var filterBtns = document.querySelectorAll('.project-filter-btn');
    var projectCards = document.querySelectorAll('.project-card');
    var noProjects = document.getElementById('noProjects');

    if (!filterBtns.length || !projectCards.length) return;

    function updateEmptyState() {
        if (!noProjects) return;
        var visible = Array.from(projectCards).some(function (c) { return c.style.display !== 'none'; });
        noProjects.classList.toggle('hidden', visible);
    }

    filterBtns.forEach(function (btn) {
        btn.addEventListener('click', function () {
            filterBtns.forEach(function (b) {
                b.classList.remove('active-filter');
                var bg = b.querySelector('.filter-bg');
                if (bg) bg.style.display = 'none';
                var span = b.querySelector('span');
                if (span) {
                    span.classList.remove('text-white');
                    span.classList.add('text-zinc-600');
                }
            });
            this.classList.add('active-filter');
            var bgDiv = this.querySelector('.filter-bg');
            if (!bgDiv) {
                bgDiv = document.createElement('div');
                bgDiv.className = 'filter-bg absolute inset-0 bg-navy-dark rounded-xl z-0';
                this.insertBefore(bgDiv, this.firstChild);
            }
            bgDiv.style.display = '';
            var span = this.querySelector('span:last-child');
            if (span) {
                span.classList.remove('text-zinc-600');
                span.classList.add('text-white');
            }

            var cat = this.getAttribute('data-category');
            projectCards.forEach(function (card) {
                if (cat === 'todos' || card.getAttribute('data-category') === cat) {
                    card.style.display = 'block';
                    card.animate([
                        { opacity: 0, transform: 'scale(0.95)' },
                        { opacity: 1, transform: 'scale(1)' }
                    ], { duration: 300, fill: 'forwards' });
                } else {
                    card.style.display = 'none';
                }
            });
            updateEmptyState();
        });
    });
})();
