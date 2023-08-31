module.exports = {
  content: ["./**/*.{php,html,js}", "./*.php", "./templates/blocks/*.php"],
  theme: {
    colors: {
      transparent: "transparent",
      white: "#FFFFFF",
      "off-white": "#F2F2F2",
      "light-gray": "#DDDDDD",
      "cool-gray": "#a0aec0",
      black: "#252525",
      "true-black": "#000000",
      purple: "#3e0d85",
      "purple-200": "#d8d0e7",
      blue: "#039fda",
      "blue-200": "#d0ecf7",
      green: "#7bbf43",
      "green-200": "#e5f2da",
      orange: "#ed8d2e",
      "orange-200": "#f9ebd9",
    },
    fontFamily: {
      serif: ["Georgia", "Cambria", "Times New Roman", "Times", "serif"],
      gotham: ["GothamPro"],
      helvetica: ["Helvetica"],
      "gotham-light": ["GothamProLight"],
      "gotham-medium": ["GothamProMedium"],
      "gotham-bold": ["GothamProBold"],
      "gotham-black": ["GothamProBlack"],
    },
    extend: {
      spacing: {
        72: "18rem",
        80: "20rem",
        96: "24rem",
        112: "28rem",
        128: "32rem",
      },
      screens: {
        xl: "1180px",
      },
      stroke: {
        white: "#ffffff",
      },
      height: {
        72: "18rem",
        88: "22rem",
        96: "24rem",
        112: "28rem",
        128: "32rem",
        144: "36rem",
      },
      maxHeight: {
        0: "0",
      },
      lineHeight: {
        empty: "0",
        "extra-loose": "2.5",
      },
      minHeight: {
        32: "8rem",
      },
      zIndex: {
        100: "100",
        200: "200",
        300: "300",
      },
    },
  },
  variants: ["responsive", "hover", "active", "focus"],
  plugins: [],
};
