"use strict";

const sidebar_backrop =
    '<div class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-30 backdrop-blur-md" id="sidebar-backdrop"></div>';

window.onload = function () {
    if (window.innerWidth < 768) {
        document.getElementById("sidebar").classList.add("hidden");
    }
};

window.addEventListener("resize", function () {
    if (window.innerWidth < 768) {
        document.getElementById("sidebar").classList.add("hidden");
    } else {
        document.getElementById("sidebar").classList.remove("hidden");

        if (document.getElementById("sidebar-backdrop")) {
            document.getElementById("sidebar-backdrop").remove();
        }
    }
});

document
    .getElementById("sidebar-toggle")
    .addEventListener("click", function () {
        document.getElementById("sidebar").classList.toggle("hidden");

        if (document.getElementById("sidebar-backdrop")) {
            document.removeEventListener(
                "click",
                document.getElementById("sidebar-backdrop")
            );
            document.getElementById("sidebar-backdrop").remove();
        }
        if (!document.getElementById("sidebar-backdrop")) {
            document.body.innerHTML += sidebar_backrop;

            document
                .getElementById("sidebar-backdrop")
                .addEventListener("click", function () {
                    document.getElementById("sidebar").classList.add("hidden");
                    document.getElementById("sidebar-backdrop").remove();
                });
        }
    });

document
    .getElementById("close-sidebar-toggle")
    .addEventListener("click", function () {
        document.getElementById("sidebar").classList.add("hidden");

        if (document.getElementById("sidebar-backdrop")) {
            document.removeEventListener(
                "click",
                document.getElementById("sidebar-backdrop")
            );
            document.getElementById("sidebar-backdrop").remove();
        }
        if (!document.getElementById("sidebar-backdrop")) {
            document.body.innerHTML += sidebar_backrop;
        }
    });
