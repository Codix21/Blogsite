// --- USER LOGIN STATE ---
const user = localStorage.getItem("user");

if (!user) {
    window.location.href = "login.html";
} else {
    const username = JSON.parse(user).username;
    const info = document.getElementById("user-info");
    if (info) info.textContent = `Hi, ${username}`;
}

// --- LOGOUT ---
function logout() {
    localStorage.removeItem("user");
    window.location.href = "login.html";
}

// --- NEWSLETTER ---
document.addEventListener("DOMContentLoaded", () => {
    const btn = document.getElementById("subscribe-btn");
    const email = document.getElementById("email");
    const msg = document.getElementById("message");

    if (btn) {
        btn.addEventListener("click", () => {
            if (email.value.trim() !== "") {
                msg.textContent = `You have successfully subscribed with ${email.value}`;
                msg.classList.remove("hidden");
                email.value = "";

                setTimeout(() => msg.classList.add("hidden"), 4000);
                setTimeout(() => msg.textContent = "", 5000);
            }
        });
    }
});
