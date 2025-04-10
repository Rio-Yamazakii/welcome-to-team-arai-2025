// postcss.config.js
module.exports = {
    plugins: {
      "@tailwindcss/postcss": {},   // Tailwind CSS を PostCSS プラグインとして登録
      autoprefixer: {},  // （必要なら）ベンダープレフィックスを追加
    },
  };