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

@app.route("/pistachio")
def pistachio():
    return render_template('pistachio.html')

@app.route("/pistachio-lite")
def pistachiolite():
    return render_template('pistachio-lite.html')

@app.route('/submit', methods=['POST'])
def submit():
    name = request.form.get('firstandlastname')
    print name
    phone = request.form.get('phone')
    print phone
    mail = request.form.get('mail')
    print mail
    message = request.form.get('message')
    print message

    return 'Done! We will contact you ASAP.'

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True, threaded=True)
