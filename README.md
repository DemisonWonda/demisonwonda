<style>
    .text {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      font-size: 48px;
      fill: url(#gradient);
      stroke: #000;
      stroke-width: 1px;
      animation: shine 3s linear infinite;
    }
    @keyframes shine {
      0% {
        fill: url(#gradient);
      }
      50% {
        fill: url(#gradientShine);
      }
      100% {
        fill: url(#gradient);
      }
    }
  </style>
  <defs>
    <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#ff7e5f"/>
      <stop offset="100%" stop-color="#feb47b"/>
    </linearGradient>
    <linearGradient id="gradientShine" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%" stop-color="#fddb92"/>
      <stop offset="50%" stop-color="#d1fdff"/>
      <stop offset="100%" stop-color="#fddb92"/>
    </linearGradient>
  </defs>
  <text class="text" x="0" y="60">Demison Wonda</text>
</svg>

---

## About Me

- 🔭 I’m currently working on exciting web development projects.
- 🌱 I’m currently learning modern JavaScript frameworks.
- 👯 I’m open to collaborating on interesting projects.
- 📫 How to reach me: demisonwonda@example.com
- ⚡ Fun fact: I love creating animations and UI effects!
