import { defineConfig } from 'vite';
import { resolve } from 'path';

const JS_FILE = resolve('_dev/app.js');
const BUILD_DIR = resolve(__dirname, 'dist');

export default defineConfig({
  build: {
    assetsDir: '',
    emptyOutDir: true,
    outDir: BUILD_DIR,
    rollupOptions: {
      input: JS_FILE,
      output: {
        entryFileNames: 'app.js',
        chunkFileNames: 'app.js',
        assetFileNames: (assetInfo) => {
          const ext = assetInfo?.names?.[0]?.split('.').pop() || 'unknown';

          if (ext === 'css') {
            return 'main.css';
          }
          
          return `[name].[ext]`;
        },
      },
    },
  },
});
