const myAlert = {
    icons: {
        success: "ri-checkbox-circle-fill",
        error: "ri-error-warning-fill",
        warning: "ri-alert-fill",
        info: "ri-information-fill"
    },

    ensureContainer() {
        let container = document.querySelector('.my-alerts-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'my-alerts-container';
            container.style.position = 'fixed';
            container.style.top = '1rem';
            container.style.right = '1rem';
            container.style.zIndex = '9999';
            container.style.width = '350px';
            container.style.maxWidth = '90%';
            document.body.appendChild(container);
        }
        return container;
    },

    show(type, title, message) {
        const container = this.ensureContainer();

        const alert = document.createElement("div");
        alert.className = `alert alert-custom alert-${type}`;
        alert.setAttribute("role", "alert");

        alert.innerHTML = `
            <i class="${this.icons[type]} alert-icon"></i>
            <div class="alert-content">
                <div class="alert-title">${title}</div>
                <div class="alert-message">${message}</div>
            </div>
            <button type="button" class="btn-close" aria-label="Close"></button>
        `;

        // close button click
        alert.querySelector(".btn-close").addEventListener("click", () => {
            alert.remove();
        });

        // append to floating container
        container.appendChild(alert);

        // Auto dismiss after 5s
        setTimeout(() => {
            if (alert) {
                alert.classList.add("fade");
                setTimeout(() => alert.remove(), 500);
            }
        }, 5000);
    },

    success(message, title = "Success!") {
        this.show("success", title, message);
    },

    error(message, title = "Error!") {
        this.show("error", title, message);
    },

    warning(message, title = "Warning!") {
        this.show("warning", title, message);
    },

    info(message, title = "Information") {
        this.show("info", title, message);
    }
};