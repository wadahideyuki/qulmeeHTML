import { defineConfig } from "vite";
import handlebars from "vite-plugin-handlebars";
import VitePluginWebpAndPath from "vite-plugin-webp-and-path-devide";
import path from "path";

const imageDir = "/assets/img/"; // 画像のディレクトリを設定

export default defineConfig({
  resolve: {
    alias: {
      jquery: "jquery/dist/jquery.min.js", // jQueryのエイリアスを設定
    },
  },
  css: {
    devSourcemap: true, // SCSSファイルのソースマップを有効にする
  },
  plugins: [
    handlebars({
      partialDirectory: path.resolve(__dirname, "src/partials"),
      context: {
        imagePath: imageDir, // context内でimagePathを設定
      },
      helpers: {
        // カスタムヘルパー 'times' を定義
        times: function (n, block) {
          let accum = "";
          for (let i = 0; i < n; ++i) {
            accum += block.fn(i); // 指定回数だけブロックを実行
          }
          return accum;
        },
      },
    }),
    VitePluginWebpAndPath({
      targetDir: "./dist/assets/img/", // デフォルトは './dist/'
      textDir: "./dist/", // デフォルトは './dist/'
      imgExtensions: "jpg,png", // デフォルトは 'jpg,png'
      textExtensions: "html,css", // デフォルトは 'html,css'
      quality: 80, // デフォルトは 80
    }),
  ],
  build: {
    cssCodeSplit: false, // CSSを1つにまとめる（必要に応じて）
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, "index.html"),
      },
      output: {
        entryFileNames: "assets/js/qulmee2025.js",
        assetFileNames: (assetInfo) => {
          if (assetInfo.name && assetInfo.name.endsWith(".css")) {
            return "assets/css/qulmee2025.css";
          }
          return "assets/[ext]/[name]-[hash][extname]";
        },
      },
    },
  },

  server: {
    host: "0.0.0.0",
  },
});
