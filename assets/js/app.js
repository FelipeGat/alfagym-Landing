/**
 * AlfaGym Landing — JavaScript
 */

// Theme toggle (dark ↔ light) with localStorage persistence
function toggleTheme() {
  var html = document.documentElement;
  var current = html.getAttribute("data-theme") || "dark";
  var next = current === "dark" ? "light" : "dark";
  html.setAttribute("data-theme", next);
  localStorage.setItem("alfagym-theme", next);
  if (typeof lucide !== "undefined") lucide.createIcons();
}

// Init Lucide icons
document.addEventListener("DOMContentLoaded", function () {
  if (typeof lucide !== "undefined") {
    lucide.createIcons();
  }
});

// Mobile menu
function toggleMobileMenu() {
  var nav = document.getElementById("mobileNav");
  if (nav) nav.classList.toggle("active");
}

// FAQ accordion
function toggleFaq(btn) {
  var item = btn.closest(".faq-item");
  var wasActive = item.classList.contains("active");

  document.querySelectorAll(".faq-item").forEach(function (el) {
    el.classList.remove("active");
  });

  if (!wasActive) {
    item.classList.add("active");
  }
}

// Smooth scroll for anchor links
document.addEventListener("click", function (e) {
  var link = e.target.closest('a[href^="#"]');
  if (!link) return;

  var id = link.getAttribute("href");
  if (id === "#") return;

  var target = document.querySelector(id);
  if (!target) return;

  e.preventDefault();
  var offset = 80;
  var top = target.getBoundingClientRect().top + window.pageYOffset - offset;
  window.scrollTo({ top: top, behavior: "smooth" });
});

// Header shadow on scroll
window.addEventListener("scroll", function () {
  var header = document.querySelector(".header");
  if (!header) return;
  header.style.boxShadow =
    window.scrollY > 50 ? "0 4px 6px rgba(0,0,0,.3)" : "none";
});

// Demo form handlers (just redirect to dashboard)
function handleLogin(e) {
  e.preventDefault();
  window.location.href = "/dashboard";
  return false;
}

function handleRegister(e) {
  e.preventDefault();
  window.location.href = "/dashboard";
  return false;
}
