<!-- Footer with dark/light toggle -->
<footer class="footer mt-auto py-3 bg-body-tertiary text-center">
    <div class="container">
        <span class="text-body-secondary">© 2025 To Do App | Theme: <span id="theme-label">Light</span></span>
        <button class="btn btn-sm btn-secondary ms-3" id="toggleThemeBtn">Toggle Theme</button>
    </div>
</footer>

<script>
    const toggleBtn = document.getElementById("toggleThemeBtn");
    const html = document.documentElement;
    const themeLabel = document.getElementById("theme-label");

    toggleBtn.addEventListener("click", () => {
        const current = html.getAttribute("data-bs-theme");
        const newTheme = current === "light" ? "dark" : "light";
        html.setAttribute("data-bs-theme", newTheme);
        themeLabel.textContent = newTheme.charAt(0).toUpperCase() + newTheme.slice(1);
    });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Calina\to-do-app\resources\views/include/footer.blade.php ENDPATH**/ ?>