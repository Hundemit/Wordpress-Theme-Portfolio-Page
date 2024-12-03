    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
    <script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                darkLight: "#1c1c1c;",
                dark: "#111111",
                darkText: "#eee9e1",
                darkTextLow: "#484745",
                darkContainer: "#222222",
                lightLight: "#B3B3B3",
                light: "#EEE9E1",
                lightText: "#1C1C1C",
                lightTextLow: "#111111",
                lightContainer: "#B3B3B3",
                color1: "#A498E2",
                lightButton: "#656565",
                color1Hover: "#beabff",
                color2: "#E29898",
                color3: "#94D894",
                color4: "#E2E298",
                contact: "#313131",
                contactForm: "#212121",
                contactButtonHover: "#4D4D4D",
            },
            animation: {
                "bounce-slow": "bounce 3s linear infinite",
                "spin-slow": "spin 4s linear infinite",
                emojiThumbsUpAnimation: "emojiThumbsUpAnimation 2s infinite",
      rotate: "rotate 2s infinite",
            },
            keyframes: {
                emojiThumbsUpAnimation: {
                    "0%, 100%": {
                        transform: "translate(0px, 0px) rotate(0deg)"
                    },
                    "50%": {
                        transform: "translate(-5px, -54px) rotate(-15deg)"
                    },
                },
      			rotate: {
                "0%": { transform: "rotate(3deg)" },
                "50%": { transform: "rotate(-3deg)" },
                "100%": { transform: "rotate(3deg)" },
              },
            },
            dropShadow: {
                mainPageText: "0px 0px 100px rgba(127, 125, 121, 0.16)",
                color1Shadow: "0px 0px 20px rgba(164, 152, 226, 0.1)",
            },
        },
    },
};
    </script>