import os
import sys
from flask import Flask, render_template
from flask_mail import Mail, Message
from dotenv import load_dotenv, find_dotenv

from config import app_config

app = Flask(__name__)
mail = Mail(app)
reload(sys)
sys.setdefaultencoding("ISO-8859-1")
load_dotenv(find_dotenv(), override=True)


@app.route("/")
def index():
    return render_template('index.html')


@app.route("/contact")
def send_mail():
    msg = Message('Hello', sender='yourId@gmail.com', recipients=['id1@gmail.com'])
    msg.body = "Hello Flask message sent from Flask-Mail"
    mail.send(msg)
    return "Sent"


def create_app(environment='development'):
    app.config.from_object(app_config[environment])
    mail = Mail(app)
    return app


app = create_app(os.environ.get('ENV'))

if __name__ == '__main__':
    app.run(host='0.0.0.0', debug=True)
