from flask import Flask, render_template, url_for, request
import pickle
import pandas as pd
import numpy as np
import os

app = Flask(__name__)

#loading pretrained model
X_test = pd.read_excel('exampleTest.xlsx')
X_test = X_test.drop("Unnamed: 0",axis=1)
filename = 'finalized_model.sav'
loaded_model = pickle.load(open(filename, 'rb'))

labels = ['Benda Hidup dan Tak Hidup di Sekitar Kita',
 'Bumi sebagai Bagian dari Tata Surya' ,'Dasar untuk menjadi Ilmuan',
 'Energi dalam Sistem Organisasi Kehidupan',
 'Karakteristik Materi dan Energi di sekitarmu', 'Klasifikasi Sains',
 'Memanfaatkan Panas dan Energi dari berbagai Zat',
 'Menjadi Ilmuan cilik tentang alam semesta',
 'Menjadi Pahlawan Pencegahan dan Penanggulangan Bencana Alam',
 'Menjadi Penyelamat Bumi dari Pencemaran Lingkungan dan Pemanasan Global',
 'Panas dan Energi di Sekitarmu', 'Panas di Lingkungan Biotik dan Abiotik',
 'Panas di berbagai Makhluk Hidup', 'Panas di berbagai Zat',
 'Peduli Lingkungan Tempat Tinggalmu',
 'Sains dibalik klasifikasi makhluk Hidup', 'Sains dibalik suatu Zat',
 'Sistem Organisasi dan Interaksi Makhluk Hidup',
 'Susunan Dirimu dan Hewan/Tumbuhan Peliharaanmu',
 'Susunan Kelompok Makhluk Hidup yang saling Berinteraksi']
 
#use it for prediction

@app.route('/', methods=['post','get'])

def index():
    results = pd.DataFrame(np.round(loaded_model.predict_proba(X_test)*100, 2), columns=labels)
    if request.method == 'POST' :
        arrval = []
        for i in range(11) :
            arrval.append(request.form.get('kd'+str(i+1)))
        dict_ = {}
        for j in range(11) :
            xy = { 'KD'+str(j+1) : [arrval[j]]}
            dict_.update(xy)
        
        request_ = pd.DataFrame(dict_)
        if os.path.isfile('request_.csv') :
            request1 = pd.read_csv("request_.csv")
            requestfin = pd.concat([request1, request_])
            os.remove("request_.csv")
            requestfin.to_csv("request_.csv", index=False)
        else :
            request_.to_csv("request_.csv", index=False)
            requestfin = request_
        results = pd.DataFrame(np.round(loaded_model.predict_proba(requestfin)*100, 2), columns=labels)

    return render_template('index.php', labels = labels, dataframe = results.values)

if __name__ == "__main__" :
    app.run(debug=True)