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
    rollupOptions: {
      input: {
        main: path.resolve(__dirname, "index.html"),
        // map: path.resolve(__dirname, "equipment/map.html"),
        // payment: path.resolve(__dirname, "payment/index.html"),
        // login: path.resolve(__dirname, "login/index.html"),
        // password: path.resolve(__dirname, "password/index.html"),
        // pwnew: path.resolve(__dirname, "password/new.html"),
        // pwconf: path.resolve(__dirname, "password/confirm.html"),
        // page: path.resolve(__dirname, "page.html"),
      },
    },
  },
  server: {
    host: "0.0.0.0",
  },
});
