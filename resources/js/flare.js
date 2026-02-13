document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("homeSparks");
    const sparkCount = 80; // Increase for more intensity

    for (let i = 0; i < sparkCount; i++) {
        const spark = document.createElement("div");
        spark.classList.add("spark");

        // Random horizontal start
        spark.style.left = Math.random() * 100 + "vw";

        // Random size (embers vary)
        const size = Math.random() * 4 + 2;
        spark.style.width = size + "px";
        spark.style.height = size + "px";

        // Ember color variation (red/orange/yellow)
        const colors = [
            "rgba(255,120,0,0.9)",
            "rgba(255,80,0,0.8)",
            "rgba(255,200,0,0.9)"
        ];
        const color = colors[Math.floor(Math.random() * colors.length)];
        spark.style.background = color;
        spark.style.boxShadow = "0 0 12px " + color;

        // Random speed
        spark.style.animationDuration = (Math.random() * 6 + 6) + "s";

        // Random delay
        spark.style.animationDelay = (Math.random() * 10) + "s";

        container.appendChild(spark);
    }
});