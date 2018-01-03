import csv
import numpy as np
from sklearn.svm import SVR
import matplotlib.pyplot as plt
import time
import os
import MySQLdb as my

start_time = time.time()
prices=[]
#prices = [93.97,92.9,93,92.91,95.94,96.25,94.94,96,96.62,96.45,97.82,97.32,98.69,98.53,98.5,99.02,99.25,97.99,97.79,97.6,99.02]
#PREDICT = 94.44
#prices = [21270,17435,19281,19556,21273,13726,16810,17742,14507,15877]
dates = []
####
db = my.connect(host="localhost",
                user="root",
                passwd="",
                db="yii2advanced"
                )


cursor = db.cursor()
sql = "SELECT monthYear_id from roomflash"
dateResult = cursor.execute(sql)
dateResult = cursor.fetchall()

sql = "SELECT roomRevenueActual from roomflash"
valResult = cursor.execute(sql)
valResult = cursor.fetchall()

dates = [list(i) for i in dateResult]
prices = [list(i) for i in valResult]
db.close()
####







#i = len(p#rices)+1
#for x in prices:
#    i -= 1
#    dates.append(i)

len1 = len(prices)

def get_data(filename):
    with open(filename, 'r') as csvfile:
        csvFileReader = csv.reader(csvfile)
        for row in csvFileReader:
            dates.append(int(row[0].split('-')[0]))
            prices.append(float(row[1]))
    return

def predict_price(dates, prices, x):
	dates = np.reshape(dates,(len(dates), 1)) # converting to matrix of n X 1

	svr_rbf = SVR(kernel= 'rbf', C= 1e3, gamma= 0.1) # defining the support vector regression models
	svr_rbf.fit(dates, prices) # fitting the data points in the models

	#plt.scatter(dates, prices, color= 'black', label= 'Data') # plotting the initial datapoints
	#plt.plot(dates, svr_rbf.predict(dates), color= 'red', label= 'RBF model') # plotting the line made by the RBF kernel
	#plt.plot(dates,svr_lin.predict(dates), color= 'green', label= 'Linear model') # plotting the line made by linear kernel
	#plt.plot(dates,svr_poly.predict(dates), color= 'blue', label= 'Polynomial model') # plotting the line made by polynomial kernel
	#plt.xlabel('Date')
	#plt.ylabel('Price')
	#plt.title('Support Vector Regression')
	#plt.legend()
	#plt.show()

	return svr_rbf.predict(x)[0]

#get_data('summaryData.csv') # calling get_data method by passing the csv file to it
print ("Dates- ", dates)
print ("Prices- ", prices)


predicted_price = predict_price(dates, prices, (len(prices))+1)
print ("The stock open price for " + str((len(prices))+1) + " Feb is:")
print ("RBF kernel: P", str(predicted_price))



elapsed_time = time.time() - start_time
print (str(int(elapsed_time)) + "s elapsed")

print (predicted_price)

#os.remove("summaryData.csv")