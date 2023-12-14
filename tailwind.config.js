/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./storage/framework/views/*.php",
      "./resources/views/**/*.blade.php",
      "./resources/js/**/*.vue",
      "node_modules/flowbite-vue/**/*.{js,jsx,ts,tsx}",
      "node_modules/flowbite/**/*.{js,jsx,ts,tsx}",
  ],
  theme: {
      extend: {},
  },
  plugins: [require("flowbite/plugin")],
};
