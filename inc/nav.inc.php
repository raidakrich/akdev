<div class="navContainer">
    <div class="navMenuContainer">
        <span class="navMenu">MENU</span>
        <div class="dropdownMenu">
            <a href="./about.php" class="dropdownLink">ABOUT US</a>
            <a href="./projects.php" class="dropdownLink">PROJECTS</a>
            <a href="#" class="dropdownLink" id="contactDropdown">CONTACT</a>
        </div>
    </div>

    <a href="./" class="navLogo">AKDEV</a>

    <div class="navLinkContainer">
        <a href="#" class="navLink" id="navShuffle">GET IN TOUCH</a>
    </div>

    <script>
        const shuffleElements = document.querySelectorAll(".navLink, .navMenu");
        const chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789<>/!@#$%^&*()-_=+[]{}|;:',.abcdefghijklmnopqrstuvwxyz";

        function shuffleText(element, text) {
            const length = text.length;
            let frame = 0;
            const totalFrames = 4;
            clearInterval(element._interval);
            element._interval = setInterval(() => {
                frame++;
                if (frame < totalFrames) {
                    let result = "";
                    for (let i = 0; i < length; i++) {
                        result += chars[Math.floor(Math.random() * chars.length)];
                    }
                    element.textContent = result;
                } else {
                    element.textContent = text;
                    clearInterval(element._interval);
                }
            }, 70);
        }

        function scrollToFooter() {
            const footer = document.querySelector(".footerContainer");
            if (!footer) return;
            // simple, reliable scroll
            footer.scrollIntoView({ behavior: 'smooth' });
        }

        shuffleElements.forEach(el => {
            const originalText = el.textContent;
            el.addEventListener("mouseenter", () => shuffleText(el, originalText));
            el.addEventListener("mouseleave", () => shuffleText(el, originalText));

            if (el.classList.contains("navLink")) {
                el.addEventListener("click", e => {
                    e.preventDefault();
                    clearInterval(el._interval);
                    el.textContent = originalText;
                    scrollToFooter();
                });
            }
        });

        const contactDropdown = document.getElementById("contactDropdown");
        contactDropdown.addEventListener("click", e => {
            e.preventDefault();
            scrollToFooter();
        });
    </script>
</div>