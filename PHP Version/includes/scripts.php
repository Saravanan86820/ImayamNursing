<?php
// includes/scripts.php
?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const bookButtons = document.querySelectorAll(".js-book-btn");
        const bookingOverlay = document.querySelector(".booking-modal__overlay");
        const closeButton = document.querySelector(".booking-modal__close");

        if (!bookingOverlay) return;

        bookButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                bookingOverlay.classList.add("active");
                document.body.style.overflow = "hidden";
            });
        });

        if (closeButton) {
            closeButton.addEventListener("click", function () {
                bookingOverlay.classList.remove("active");
                document.body.style.overflow = "";
            });
        }

        bookingOverlay.addEventListener("click", function (event) {
            if (event.target === bookingOverlay) {
                bookingOverlay.classList.remove("active");
                document.body.style.overflow = "";
            }
        });

        document.addEventListener("keydown", function (event) {
            if (event.key === "Escape") {
                bookingOverlay.classList.remove("active");
                document.body.style.overflow = "";
            }
        });
    });

    // Hamburger menu
    document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.querySelector(".hamburger");
        const mobileMenu = document.querySelector(".mobile-menu");
        const menuLinks = mobileMenu.querySelectorAll("a");

        hamburger.addEventListener("click", function () {
            const isOpen = hamburger.classList.toggle("open");
            mobileMenu.classList.toggle("open", isOpen);
            hamburger.setAttribute("aria-expanded", isOpen);
            hamburger.setAttribute("aria-label", isOpen ? "Close menu" : "Open menu");
        });

        menuLinks.forEach(function (link) {
            link.addEventListener("click", function () {
                hamburger.classList.remove("open");
                mobileMenu.classList.remove("open");
                hamburger.setAttribute("aria-expanded", "false");
                hamburger.setAttribute("aria-label", "Open menu");
            });
        });
    });
</script>