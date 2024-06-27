const path = require('path'),
  MiniCssExtractPlugin = require('mini-css-extract-plugin'),
  CssMinimizerPlugin = require("css-minimizer-webpack-plugin"),
  BrowserSyncPlugin = require('browser-sync-webpack-plugin'),
  StyleLintPlugin = require('stylelint-webpack-plugin'),
  TerserPlugin = require("terser-webpack-plugin")
 

module.exports = {
  context: __dirname,
  entry: {
    main: './src/index.js',
  },
  output: {
    path: path.resolve(__dirname, 'public'),
    filename: '[name].js'
  },
  mode: 'development',
  devtool: 'source-map',
  module: {
    rules: [
      {
        enforce: 'pre',
        exclude: /node_modules/,
        test: /\.jsx$/,
        loader: 'eslint-loader'
      },
      {
        test: /\.jsx?$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: '../',
            }
          },
          {
            loader: 'css-loader',
            options: {
              sourceMap: true
            },
          },
          {
            loader: 'postcss-loader',
            options: {
              sourceMap: true,
              postcssOptions: {
                plugins: [
                  ["autoprefixer"],
                ],
              },
            },
          },
          {
            loader: 'sass-loader',
            options: {
              sourceMap: true
            },
          }
        ]
      },
      {
        test: /\.(jpe?g|png|gif|svg)$/,
        type: 'asset/resource',
        generator: {
          filename: 'css/images/[name].[ext]'
        }
      },
      {
        test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
        type: 'asset/resource',
        generator: {
          filename: 'fonts/[name].[ext]'
        }
      }
    ]
  },
  plugins: [
    new StyleLintPlugin(),
    new MiniCssExtractPlugin({ filename: './css/[name].css' }),
    new BrowserSyncPlugin({
      files: '**/*.php',
      proxy: 'localhost/pressgen'
    })
  ],
  optimization: {
    splitChunks: {
      minSize: 0,
      cacheGroups: {
        commons: {
          test: /[\\/]node_modules[\\/]((?!jquery|snap).*)[\\/]/,
          name: "common",
          chunks: "all"
        }
      }
    },
    minimizer: [
      new TerserPlugin(),
      new CssMinimizerPlugin()
    ]
  }
};