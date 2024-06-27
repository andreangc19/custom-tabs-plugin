module.exports = {
    "extends": ["standard", "plugin:@wordpress/eslint-plugin/recommended"],
    "parser": "@babel/eslint-parser",
    "prettier/prettier": [
        "error",
        { endOfLine: "auto" }
    ],
};