#!/usr/bin/env python
# -*- coding: utf-8 -*-
from flask import Flask, render_template, request
import sqlite3

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

@app.route("/panzer")
def panzer():
    return render_template('panzer.html')

@app.route("/pieckboard")
def pieckboard():
    return render_template('pieckboard.html')

@app.route("/news-20180123-pistachio-lite")
def news_20180123_pistachiolite():
    return render_template('news/news-20180123-pistachio-lite.html')

@app.route("/news-20180227-panzer")
def news_20180227_panzer():
    return render_template('news/news-20180227-panzer.html')

@app.route("/att")
def linM_att():
    return render_template('linM-twdvd.html')

@app.route("/twdvd-killdragon")
def linM_killdragon():
    return render_template('linM-killdragon.html')

@app.route('/submit', methods=['POST'])
def submit():
    name = request.form.get('firstandlastname')
    phone = request.form.get('phone')
    mail = request.form.get('mail')
    message = request.form.get('message')

    sql_cmd='insert into inquiry values(' + '"' + name + '"' + ',' + '"' + phone + '"' + ',' + '"' + mail + '"' + ',' + '"' + message + '"' + ')'
    conn = sqlite3.connect("mq.db") # or use :memory: to put it in RAM
    cursor=conn.cursor()
    a = cursor.execute(sql_cmd)
    conn.commit()
    cursor.close()
    conn.close()

    return render_template('feedback_soon.html')

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80, debug=True, threaded=True)
