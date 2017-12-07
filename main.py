#!/usr/bin/env python
# -*- coding: utf-8 -*-
from flask import Flask, render_template, request

app = Flask(__name__)

@app.route("/")
def main():
    return render_template('index.html')

@app.route("/contact")
def contact():
    return render_template('contact.html')

@app.route("/products")
def products():
    return render_template('products.html')

@app.route("/about")
def about():
    return render_template('about.html')

@app.route("/mqlab")
def mqlab():
    return render_template('mqlab.html')

@app.route("/download")
def download():
    return render_template('download.html')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True, threaded=True)
