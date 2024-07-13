document.addEventListener("DOMContentLoaded", function () {
    const headers = document.querySelectorAll(".ventcube-accordion-header");

    headers.forEach(header => {
        header.addEventListener("click", () => {
            const item = header.parentElement;
            const isActive = item.classList.contains("active");

            document.querySelectorAll(".ventcube-accordion-item").forEach(e => {
                e.classList.remove("active");
                e.style.borderBottom = "1px solid #1c1c1c";
            });
            document.querySelectorAll(".ventcube-accordion-body").forEach(e => {
                e.classList.remove("active");
            });

            if (!isActive) {
                item.classList.add("active");
                item.querySelector(".ventcube-accordion-body").classList.add("active");
                item.style.borderBottom = "none";
            }
        });
    });

    if (typeof elementorFrontend !== "undefined") {
        elementorFrontend.hooks.addAction("frontend/element_ready/ventCube_accordion_testimonial.default", function (e) {
            const clientImageBody = e.querySelector(".ventcube-client-image-body");
            elementorFrontend.hooks.addAction("frontend/element_ready/global", function () {
                const settings = e.dataset.settings;
                if (settings) {
                    const { client_image_size, client_image_position_top, client_image_position_left, client_image_position_right, client_image_position_bottom } = settings;
                    clientImageBody.style.width = `${client_image_size}px`;
                    clientImageBody.style.height = `${client_image_size}px`;
                    clientImageBody.style.top = `${client_image_position_top}px`;
                    clientImageBody.style.left = `${client_image_position_left}px`;
                    clientImageBody.style.right = `${client_image_position_right}px`;
                    clientImageBody.style.bottom = `${client_image_position_bottom}px`;
                }
            });
        });
    }


    document.querySelectorAll(".ventcube-button_right").forEach(button => {
        const iconSize = button.dataset.iconSize;
        if (iconSize) {
            const icon = button.querySelector(".ventcube-button-icon");
            if (icon) {
                icon.style.fontSize = `${iconSize}px`;
            }
        }
    });
});
