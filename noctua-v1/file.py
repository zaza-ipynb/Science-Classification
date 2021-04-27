import pickle
import pandas as pd
import numpy as np


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
results = pd.DataFrame(np.round(loaded_model.predict_proba(X_test)*100, 2), columns=labels)
print(results)